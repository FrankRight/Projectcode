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

    // if there are no errors in the form
    if (count($errors) == 0)
    {

        $query = "INSERT INTO reports(NumberOfElephants, LocationNow, LocationTo, Description) VALUES('$number', '$locationNow', '$locationTo', '$Description')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Your report will be posted in afew seconds";
        header('location: index.php');
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

?>