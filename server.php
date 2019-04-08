<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');

// REGISTER USER if he/she clicks on the register button
if (isset($_POST['register'])) {

    //
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);

    //  ensure that the form is correctly filled.
    #username
    if (empty($username)) 
    { 
        array_push($errors, "Username is required");
    }
    #email
    if (empty($email))
    {
        array_push($errors, "Email is required");
    }
    #password
    if (empty($password1))
    {
        array_push($errors, "Password is required"); 
    }
    #all passwords must match
    if ($password1 != $password2)
    {
        array_push($errors, "The two passwords do not match");
    }
    #the length of password should be greater than or equal to 8
    if (strlen($password1) < 8)
    {
        array_push($errors, "Password should have 8 or more characters");
    }

    // make sure not registering an already existing user
    #check username and email

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $resultFromQuery = mysqli_query($db, $user_check_query);
    $singleUser = mysqli_fetch_assoc($resultFromQuery);
        
    if ($singleUser)
    { // if user exists
        if ($singleUser['username'] === $username)
        {
            array_push($errors, "Username already exists");
        }

        if ($singleUser['email'] === $email)
        {
            array_push($errors, "email already exists");
        }
    }

    // Check no errors an register user if there are no errors in the form
    if (count($errors) == 0)
    {
        $password = md5($password1);//encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are have been register successfully";
        header('location: signin.php');
    }
}

// LOGIN USER
#if the user clicks on login
if (isset($_POST['signin'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            if($username == "admin" && $password = ".md5(fank2010)")
            {
                $_SESSION['username'] = $username;
                header('location: admin_Index.php');
            }else{
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: makeareport.php');
            }
        }else {
            array_push($errors, "Wrong username and password combination");
        }
    }
  }

?>