<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Contact Us Page</title>

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
							<a href="index.php" class="logo"><img src="#" alt=""></a>
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
							
								<span><a href="index.php">Home</a></span>
								<span>/Contact</span>
							
							<h1>Contact</h1>
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
				<div class="row" style = "margin: 0% 15%">
					<div class="col-md-12">
						<div class="section-row">
							<h3>Contact Information</h3>
							<p>You can visit our visit and contact us every day, 24 - 7 long. Give us your feedback which will be highly valued. You can contact using the below information.</p>
							<ul class="list-style">
								<li><p><strong>Email:</strong> <a href="Mailto:frankbosire2017@gmail.com">Mail me</a></p></li>
								<li><p><strong>Phone:</strong> +254799244523</p></li>
								<li><p><strong>Address:</strong> PO BOX 342</p></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<?php include('footer.inc')?> 

	</body>
</html>
