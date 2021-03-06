<?php include("server2.php"); ?>

<?php
			session_start(); 
		  
			if (!isset($_SESSION['username'])){
				$_SESSION['msg'] = "You must log in first";
				header('location: signin.php');
			}
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
							<li><a href = "index.php">MAIN HOMEPAGE</a></li>
							<li><a href = "#"></a></li>
							<li class = "cat-1"><a href="admin-users.php">USERS</a></li>
							<li class = "cat-5"><a href="contact.php">CONTACT</a></li>
              				<li class = "cat-3"><a href="logout.php">LOG OUT</a></li>
						</ul>
						<!-- /nav -->

						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							
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
						<h3>What you have recently posted.</h3>
						<?php	// 
								$db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
								if ($db->connect_error) {
									die("Connection failed: " . $db->connect_error);
								} 
								$mysql = "SELECT Title, sourceDir FROM posts  ORDER BY postID DESC LIMIT 3";
								$res = $db->query($mysql);

									if ($res->num_rows > 0) {
										// output data of each row
										while($row = $res->fetch_assoc()) {

											$Tit = $row["Title"];
											$srce = $row["sourceDir"];
											
											echo "<span class='post post-widget'><a class='post-img' href='post.php'><img src='$srce' alt=''>$Tit</a></span>";
										}}
						?>
						
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

<!---Post Section--->
<div style="margin: 5%">
<a href="admin_post.php"><h1 style="color: green;">POSTS </h1></a>
<?php include("server2.php") ?>
	<div>
	<h3>All Reports ever reported:</h3>
 
    
							<?php	// 
							$db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
							$sql = "SELECT * FROM reports  ORDER BY reportID DESC";
                            $result = $db->query($sql);
                            
                            echo "
                            <table border = '1' style = 'margin: 0% 25%'>
							<tr>
							<th><b> REPORTED BY </b></th>
                            <th><b> NUMBER </b></th>
							<th><b> LOCATION FROM </b></th>
							<th><b> LOCATION TO </b></th>
							<th><b> DESCRIPTION </b></th>
							<th><b> DATE TIME </b></th> </tr>
							<th><b>  </b></th>";

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {

										$Reportedby = $row["userID"];
										$Number = $row["NumberOfElephants"];
										$NOW = $row["LocationNow"];
										$TO = $row["LocationTo"];
										$Desc = $row["Description"];
										$Date = $row["date_Time"];

										echo "
										<tr>
											<td>$Reportedby</td>
                                            <td>$Number</td>
                                            <td>$NOW</td>
                                            <td>$TO</td>
											<td>$Desc</td>
											<td>$Date</td>
                                        </tr>	";

                                    }}
                                    
                                    echo "</table>";
									
                    ?>


</div>
<!---/Post Section--->


<?php include('footer.inc')?>