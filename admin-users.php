<?php  

session_start(); 
		  
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: signin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE = edge">
		<meta name="viewport" content="width=device-width, initial-scale = 1">
		 <!-- Above 3 a must tags-->

		<title>Homapage-Admin</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Icons link -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/styles.css"/>

  </head>
	<body>

		<!-- Header -->
		<header id="header">
			<!-- Nav -->
			<div id="nav">
				<!-- Main Nav -->
				<div id="nav-fixed">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.php" class="logo"><img src="" alt=""></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href = "admin_Index.php">HOME</a></li>
							<li><a href = "#"></a></li>
							<li class = "cat-1"><a href="admin-users.php">USERS</a></li>
							<li class = "cat-5"><a href="admin_post.php">POST</a></li>
              				<li class = "cat-3"><a href="logout.php">LOG OUT</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div class="search-form">
								<input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
								<button class="search-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Main Nav -->

				<!-- Aside Nav -->
				<div id="nav-aside">
					<!-- nav -->
					<div class="section-row">
						<ul class="nav-aside-menu">
							<li><a href="index.php">Home</a></li>
              				<li><a href="about.php">About Us</a></li>
							<li><a href="post.php">Post</a></li>
             				 <li><a href="makeareport.php">Make a Report</a></li>
							<li><a href="reports.php">Reports</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					<!-- /nav -->

        	<!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
						
						
					</div>
					<!-- /widget posts -->

					<!-- social links -->
					<div >
						<h3>Follow us</h3>
						<ul class="nav-aside-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<!-- /social links -->

					<!-- aside nav close -->
					<button class="nav-aside-close"><i class="fa fa-times"></i></button>
					<!-- /aside nav close -->
				</div>
				<!-- Aside Nav -->
			</div>
			<!-- /Nav -->
		</header>

<?php include("server2.php") ?>
	<div>
	<h3>All Registered users in the system:</h3>
 
    
							<?php	// 
							$db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
							$sql = "SELECT userID, username, email FROM users  ORDER BY userID DESC";
                            $result = $db->query($sql);
                            
                            echo "
                            <table border = '1' style = 'margin: 0% 25%'>
                            <tr>
                            <th><b> USERID </b></th>
                            <th><b> USERNAME </b></th>
                            <th><b> EMAIL </b></th> </tr>";

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {

										$userID = $row["userID"];
										$username = $row["username"];
										$email = $row["email"];

										echo "
										<tr>
                                            <td>$userID</td>
                                            <td>$username</td>
                                            <td>$email</td>
                                            <td></td>
                                        </tr>	";

                                    }}
                                    
                                    echo "</table>";
									
                    ?>
             
    <form style = 'margin: 2% 25%' method = "post" action = "admin-users.php">
    <label>Delete a User</label>
        <input type="text" placeholder="Enter the user ID" name="userID" class="input" >
        <input type="submit" name="deleteUser" value="Delete" class="form-submit">

    </form>
	</div>
	<div>
	


<!---/Post Section--->
<div class='col-md-12'>

<?php include('footer.inc')?>
<div>