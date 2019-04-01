<?php include( 'server2.php');?>

<?php
			session_start(); 
		  
			if (!isset($_SESSION['username'])) {
				$_SESSION['msg'] = "You must log in first";
				header('location: signin.php');
			}
			if (isset($_GET['logout'])) {
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

		<title><?php echo $pagename ?></title>

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
							<li class = "cat-5"><a href="register.php">JOIN US</a></li>
							<li class = "cat-3"><a href="logout.php">log out</a></li>
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

	<!-------End of Header session----->
	
	<div class="report-info">
		<div class="report-details">
			Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum facilis vel dolorem nemo repellat totam, debitis temporibus, expedita ipsam libero voluptates amet, quas ducimus officia. Sint distinctio est reprehenderit rerum.
			
		</div>
		<div class="report-details">
			Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum facilis vel dolorem nemo repellat totam, debitis temporibus, expedita ipsam libero voluptates amet, quas ducimus officia. Sint distinctio est reprehenderit rerum.
			
		</div>
	</div>

	<h3 >Report Form </h3>
	<form class="input-form" method="post" action="makeareport.php">

		<div>
			<?php include('errors.php') ?>
		</div>
		<div >
		<input type="text" class="input" name="number" placeholder="Number of elephants?">
		</div><br>

		<div>
		<input type="text" class="input" name="locationNow" placeholder="Location where the elephants are at the moment?">
		</div><br>

		<div>
		<input type="text" class="input" name="LocationTo" placeholder="Where are Elephants heading to?">
		</div><br>

		<div>
		<textarea name="Description" class="input" id="" cols="30" rows="4">Brief Description</textarea>
		</div><br>

		<div>
		<input type="submit" value="submit" class="form-submit" name = "submit-report">
		</div>

	</form>
	<?php include('footer.inc')?>
	</body>


</html>
            