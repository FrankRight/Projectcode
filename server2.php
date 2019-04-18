<?php
    // initializing variables
    $number = "";
    $locationNow = "";
    $locationTo = "";
    $Description = "";
    $errors = array();
    $success = array();

    // connect to the database
    $db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');

    //MAKE A REPORT FORM SUBMISSION TO THE DATABASE
    #if the user clicks on submit
    if (isset($_POST['submit-report'])) {
        // 
        $number = mysqli_real_escape_string($db, $_POST['number']);
        $locationNow = mysqli_real_escape_string($db, $_POST['locationNow']);
        $locationTo = mysqli_real_escape_string($db, $_POST['LocationTo']);
        $Description = mysqli_real_escape_string($db, $_POST['Description']);
    #if number of elephants is not given.
    if (empty($number))
    { 
        array_push($errors, "Their number is cructial!");
    }
    #Make sure only numbers are entered
    if(!preg_match('/^[0-9]{1,}/',$number))
    {
        array_push($errors, "Enter the correct elephant number!");
    }
    #If their location Now is not entered
    if (empty($locationNow))
    {
        array_push($errors, "Please enter their current location!");
    }
    #If their location To is not entered
    if (empty($locationTo))
    {
        array_push($errors, "Please confirm where they are heading to!"); 
    }
    #If the currect description is not given or is just the default.
    if ($Description == "Brief Description" || empty($Description))
    {
        array_push($errors, "Please enter a valid Description!");
    }
    $user_check_query = "SELECT * FROM reports WHERE NumberOfElephants= '$number' AND LocationNow = '$locationNow' AND LocationTo = '$locationTo' LIMIT 1";
    $resultFromQuery =  $db->query($user_check_query);
    $singlereport = $resultFromQuery->fetch_assoc();
    
    if($singlereport){
    // if report exists
        array_push($errors, "Thank for report! But your report has already been made.");
}
    // if there are no errors in the form
    if (count($errors) == 0)
    {
        if (isset($_SESSION['username']))
        {
            $username = $_SESSION['username'];
            $query = "INSERT INTO reports(userID, NumberOfElephants, LocationNow, LocationTo, Description) VALUES((SELECT userID FROM users where username = '".$username."'),'$number', '$locationNow', '$locationTo', '$Description')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Your report will be posted in afew seconds";
            header('location: index.php');
        }
    }

}

    #Posting on submit-image button.
	if(isset($_POST['submit-image']))
	{
        $Title = mysqli_real_escape_string($db, $_POST['Title']);
		$Description = mysqli_real_escape_string($db, $_POST['Description']);
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Error! No file selected" . "<br>" . "Please Select a file first to continue";
        }
        else
        {
            //
            $upload_dir ="/var/www/html/Projectcode/Posts/";
            if (file_exists($upload_dir))
            {
                if (is_writable($upload_dir))
                {
                    $target = $upload_dir;
                    $target = $target . basename($_FILES['file']['name']);
                    $moved = move_uploaded_file( $_FILES['file']['tmp_name'], "$target");
                    $size = ($_FILES["file"]["size"] / 1024);
                    $type = $_FILES["file"]["type"];

                    $posts = "./Posts/";
                    $record = $posts . basename($_FILES['file']['name']);

                    $ImageQuery = "INSERT INTO posts(UserID, Title, sourceDir, size, type, Description) VALUES ('1', '$Title', '$record', '$size', '$type', '$Description')";
                    mysqli_query($db, $ImageQuery);
                }
                else
                {
                    echo 'Upload directory is not writable<br>';
                }
            }
            else
            {
                echo 'Upload directory does not exist.<br>';
            };
            
        
        
        }

    }

    if (isset($_POST['deleteUser']))
    {
    $ID = mysqli_real_escape_string($db, $_POST['userID']);
            
            $sql = "DELETE * FROM users WHERE userID = '$ID'";
            $retval = mysqli_query( $db, $sql );
            
            if(! $retval )
            {
               die('Could not delete data: ' . mysql_error());
            }
            else
            {
                echo "Deleted data successfully\n";
            }
    }

    if (isset($_POST['pass']))
    {
    $password1 = mysqli_real_escape_string($db, $_POST['password1']);
    $password2 = mysqli_real_escape_string($db, $_POST['password2']);
    if ($password1 != $password2)
    {
        array_push($errors, "The two passwords do not match");
    }
    #password
    if (empty($password1))
    {
        array_push($errors, "Password is required"); 
    }
    #the length of password should be greater than or equal to 8
    if (strlen($password1) < 8)
    {
        array_push($errors, "Password should have 8 or more characters");
    }
    if (count($errors) == 0)
    {
            $password = md5($password1);
            $sql = "UPDATE  users SET password = '$password' WHERE password = '$password'";
            $retval = mysqli_query( $db, $sql );
            
            if(! $retval ) {
               die('Could not change password data: ' . mysql_error());
            }
            location('signin.php');
    }
}

?>