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
							<a href="index.php" class="logo"><img src="" alt="lg"></a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<ul class="nav-menu nav navbar-nav">
							<li><a href = "index.php">HOME</a></li>
							<li><a href = "#"></a></li>
							<li class = "cat-1"><a href="makeareport.php">MAKE A REPORT</a></li>
							<li class = "cat-3"><a href="contact.php">CONTACT US</a></li>
              				<li class = "cat-5"><a href="about.php">ABOUT US</a></li>
							<li class = "cat-5"><a href="register.php">JOIN US</a></li>
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
						<span class="post post-widget">
							<a class="post-img" href="#"><img src="./elephantPhotos/post5.jpg" alt=""></a>
						</span>

						<span class="post post-widget">
							<a class="post-img" href="#"><img src="./elephantPhotos/post3.jpg" alt=""></a>
						</span>

						<span class="post post-widget">
							<a class="post-img" href="#"><img src="./elephantPhotos/post4.jpg" alt=""></a>
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
				<div class="row">	
					<!-- post -->
					<div class="col-md-6">
					<div>
						<h2>Recent Posts</h2>
					</div>
						<div class="post post-thumb">
							<a class="post-img" href="#"><img src="./elephantPhotos/post1.jpeg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-2" href="#">Cool right?</a>
									<span class="post-date">March 15, 2019</span>
								</div>
								<h3 class="post-subject">Add atitle <?php echo $postSubject?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="#"><img src="./elephantPhotos/post2.jpeg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<a class="post-category cat-3" href="#">Kenya's savannas</a>
									<span class="post-date">March 16, 2019</span>
								</div>
								<h3 class="post-subject"><a href="#">Elephants among the few intelligent beings on earth</a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
				</div>
				<!-- /row -->

				
		

		<hr />
		<!-- Reports section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!--Page Header-->			
				<div class="col-md-12">
					<div class="section-title">
						<h2>Recent Attack Reports</h2>
					</div>
				</div>
				<!--/Page Header-->

				<div>

				</div>	
				

				
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<?php include( 'footer.inc'); ?>
	</body>
</html>
