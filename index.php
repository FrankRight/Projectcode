

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE = edge">
		<meta name="viewport" content="width=device-width, initial-scale = 1">
		 <!-- Above 3 a must tags-->

		<title>Homepage</title>

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
							<a href="index.php" class="logo"><img src="" alt="logo"></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href = "index.php">HOME</a></li>
							<li><a href = "#"></a></li>
							<li class = "cat-1"><a href="makeareport.php">MAKE A REPORT</a></li>
							<li class = "cat-3"><a href="contact.php">CONTACT US</a></li>
							  <li class = "cat-1"><a href="about.php">ABOUT US</a></li>
							  <?php
								session_start();
								if (isset($_SESSION['username']))
								{
									echo "<li class = 'cat-5'><a href='signin.php'>SWITCH ACCOUNT</a></li>";
								}
								else
								{
									echo "<li class = 'cat-5'><a href='register.php'>JOIN US</a></li>";
								}
							?>
							
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
							<span class="logout">
								<?php
									session_start();
									if (isset($_SESSION['username']))
									{
										echo "<a href='logout.php' ><i class='fa fa-sign-out'></i></a>";
									}
								?>
							</span>
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
							<li><a href="post.php">Posts</a></li>
             				 <li><a href="makeareport.php">Make a Report</a></li>
							<li><a href="reports.php">Reports</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					<!-- /nav -->

        			<!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
						<span class="post post-widget">
							<a class="post-img" href="posts.php"><img src="./elephantPhotos/post5.jpg" alt=""></a>
						</span>

						<span class="post post-widget">
							<a class="post-img" href="posts.php"><img src="./elephantPhotos/post3.jpg" alt=""></a>
						</span>

						<span class="post post-widget">
							<a class="post-img" href="posts.php"><img src="./elephantPhotos/post4.jpg" alt=""></a>
						</span>
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
					
		<!-----End of header section----->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
					<!-- post -->
					<div style ="width: 1450px">
						<div class="row">
							<div>
								<h3> Recent Posts </h3>
							</div>
							<div>
							<?php	// 
							$db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							} 
							$sql = "SELECT Title, sourceDir, Date_Time, Description FROM posts  ORDER BY postID DESC LIMIT 6";
							$result = $db->query($sql);

								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {

										$Title = $row["Title"];
										$source = $row["sourceDir"];
										$Datetime = $row["Date_Time"];
										$Description = $row["Description"];

										echo "
											<div style='margin: 0px; float: relative'>
											<div class='col-md-5'>
												<div class='post post-row'>
													<a class='post-img' href='post.php'><img src='$source' alt=''></a>
													<div class='post-body'>
														<span class='post-meta'>
															<a class='post-category cat-5' href='#'>$Title</a>
															<span class='post-date'>$Datetime</span>
														</span>
														<h4 style='margin: 5px;'><a href='post.php'></a>$Description</h4>
														<p></p>
													</div>
												</div>
											</div>
											</div>";

									}}

							?>
							</div>
						<p class='col-md-12'> <a href="reports.php" > See All Posts.</a><p>
						</div>
					</div>
				

				<hr />
				<!-- Reports section -->
				<div class="section">
					<!-- container -->
					<div class="container">
						<!--Page Header-->			
						<div >
							<div >
								<h2>Recent Attack Reports</h2>	
							</div><br>
						</div>
						<!--/Page Header-->

						<?php $db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						} 


						$ReportMade = "SELECT  NumberOfElephants, LocationNow, LocationTo, Description, date_Time FROM reports ORDER BY `ReportID` DESC LIMIT 5";
						$result = $db->query($ReportMade);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								
								echo "<div class= 'report-container'> ".$row["date_Time"]."<br>"."<br>"." Number Of Elephants: " . $row["NumberOfElephants"]."<br>". " Their Location Now: " . $row["LocationNow"]."<br>". " Their Location To: " . $row["LocationTo"]. "<br>"." Description: " . $row["Description"]. "<br>"."<br></div>";
								echo "<hr>";
							}
						} else {
							echo "No results";
						}
						?>
						
						<p>Previous Reports... <a href="reports.php" > See More </a><p>
				
					</span>
			
					</span>


			</div>

		</div>
		

		<?php include( 'footer.inc'); ?>
	</body>
</html>
