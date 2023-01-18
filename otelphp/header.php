<?php 
include 'baglan.php';

$ayar=$db->query("SELECT * FROM menuler")->fetch();    

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset = "UTF-8">
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="fa fa-home"></span> <span class="title">Vacation Rental Website</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>
					<!--header bitiş-->
					

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						
						<ul>	
							<li>
								<a href="index.php" class="active"> <?php echo $ayar['tablo_menuad']; ?> </a>
							</li>

							<li><a href="vocation2.php"><?php echo $ayar['tablo_menuad']; ?></a></li>

							<li><a href="blog2.php">SIK SORULAN SORULAR</a></li>

							<li>
								<a href="#" class="dropdown-toggle">HAKKIMIZDA</a>
								<ul>
									<li><a href="about.php">About Us</a></li>
									<li><a href="testimonials2.php">Testimonials</a></li>
									<li><a href="terms.php">Terms</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>


					</nav>

				<!-- Main -->
					<div id="main">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Find your new vacation place to stay!</h1>
								<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
							</header>

							<br>

							