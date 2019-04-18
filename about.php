<?php include("server2.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE = edge">
		<meta name="viewport" content="width=device-width, initial-scale = 1">
		 <!-- Above 3 a must tags-->

		<title>About Us Page</title>

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
							<li><a href = "index.php">HOME</a></li>
							<li><a href = "#"></a></li>
							<li class = "cat-1"><a href="makeareport.php">MAKE A REPORT</a></li>
							<li class = "cat-3"><a href="contact.php">CONTACT US</a></li>
							<li class = "cat-5"><a href="about.php">ABOUT US</a></li>
							<?php
									session_start();
									if (!isset($_SESSION['username']))
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
              				<li><a href="makeareport.php">Make a Report</a></li>
							<li><a href="reports.php">Reports</a></li>
							<li><a href="post.php">Posts</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							
						</ul>
					</div>
					<!-- /nav -->

          <!-- widget posts -->
					<div class="section-row">
						<h3>Recent Posts</h3>
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
					<div class="section-row">
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
			
			<!-- Page Header -->
			<div class="page-header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
								<span><a href="index.php">HOME</a>/</span>
								<span>About Us</span><br><br>
							<h1>About Us</h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		</header>
		<!-- /Header -->
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="section-row">
							<p>Jvbuerveeee .</p>
							<br>
							<p>Dvadjhvdvjhdva asdjvjsvasdj ajsvbjhsvas ajvbjhasdv adjvsjhs sanvsfjh.</p>
						</div>
						<div class="row section-row">
							<div class="col-md-6">
								<figure class="figure-img">
									<img class="img-responsive" src="./elephantPhotos/post36.jpeg" alt="">
								</figure>
							</div>
							<div class="col-md-6">
								<h3>Our Mission</h3>
								<p>We are always focused to achieve the following.</p>
								<ul class="list-style">
									<li><p>Reduce the effects brought about by Human - Wildlife Conflicts.</p></li>
									<li><p>Help spend about the importance of elephants.</p></li>
									<li><p></p></li>
								</ul>
							</div>
						</div>
					</div>
					
					<!-- aside -->
					<div class="col-md-4">
						

						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Recent Posts</h2>
							</div>
							<?php	// 
								$db = mysqli_connect('localhost', 'right', 'Fank.2010', 'EASDatabaseSystem');
								if ($db->connect_error) {
									die("Connection failed: " . $db->connect_error);
								} 
								$mysql = "SELECT Title, sourceDir FROM posts  ORDER BY postID DESC LIMIT 4";
								$res = $db->query($mysql);

									if ($res->num_rows > 0) {
										// output data of each row
										while($row = $res->fetch_assoc()) {

											$Tit = $row["Title"];
											$srce = $row["sourceDir"];
											
											echo "<div class='post post-widget'>
											<a class='post-img' href='posts.php'><img src='$srce' alt=''></a>
											<div class='post-body'>
												<span><a href='posts.php'>$Tit</a></span>
											</div>
										</div>";
										}}
						?>
						<!-- /post widget -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<?php include( 'footer.inc'); ?>

	</body>
</html>