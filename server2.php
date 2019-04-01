<?php
// initializing variables
$number = "";
$locationNow = "";
$locationTo = "";
$Description = "";
$errors = array(); 

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

        if (empty($number)) 
    { 
        array_push($errors, "Their number is cructial!");
    }
    #
    if (empty($locationNow))
    {
        array_push($errors, "Please enter their current location!");
    }
    #
    if (empty($locationTo))
    {
        array_push($errors, "Please confirm where they are heading to!"); 
    }
    if ($Description == "Brief Description" || empty($Description))
    {
        array_push($errors, "Please enter a valid Description!"); 
    }

    // if there are no errors in the form
    if (count($errors) == 0)
    {

        $query = "INSERT INTO reports(NumberOfElephants, LocationNow, LocationTo,Description) VALUES('$number', '$locationNow', '$locationTo', '$Description')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Your report will be posted in afew seconds";
        header('location: index.php');
    }

    }

?>