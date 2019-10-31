<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Packages</title>
	<link rel="icon" href="/images/larent.png">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link href="/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/fontawesome-all.css">
</head>
<body style="overflow-x: hidden;">
	<header class="container-fluid" id="home">
		<div class="container">
			<div class="row">
				<img src="/images/larent.png" class="logo" alt="Image">
				<div class="header-right pull-right">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3">
								<img src="/images/hotline.svg" alt="">
							</div>
							<div class="col-lg-9">
								<h3>Our Hotline:</h3>
								<p>+8801625423992</p>
							</div>
						</div>
						<div class="row logreg">
							<div class="col-lg-3">
								<img src="/images/email.svg" alt="">
							</div>
							<div class="col-lg-9">
								<h3>Email</h3>
								<p>larent@gmail.com</p>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-default van" role="navigation">
				<div class="container">
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a class="js-scroll-trigger" href="/UserHome">HOME</a></li>
							<li><a class="js-scroll-trigger" href="/packages">PRICING</a></li>
							<li><a class="js-scroll-trigger" href="#aboutus">ABOUT US</a></li>
							<li><a class="js-scroll-trigger" href="<?php echo e(URL::route('UserHome')); ?>#contactus">CONTACT US</a></li>
							<li class="dropdown">
								<a href="UserHome/<?php echo e(Session::get('user')->userId); ?>/profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/UserHome/<?php echo e(Session::get('user')->userId); ?>">View Profile</a></li>
									<li><a href="UserHome/<?php echo e(Session::get('user')->userId); ?>/edit">Edit Profile</a></li>
									<li><a href="UserHome/<?php echo e(Session::get('user')->userId); ?>/changepassword">Change Password</a></li>
									<li><a href="UserHome/<?php echo e(Session::get('user')->userId); ?>/changeprofilepicture">Change Profile Picture</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="/logout">LOGOUT</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="UserHome/<?php echo e(Session::get('user')->userId); ?>/profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACTIVITIES<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/mybookings/<?php echo e(Session::get('user')->userId); ?>">My Bookings</a></li>
									<li><a href="/packages">Book Now</a></li>
									<li><a href="<?php echo e(URL::route('UserHome')); ?>#contactus">Send Message</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="/logout">LOGOUT</a></li>
								</ul>
							</li>
							<li><a class="js-scroll-trigger" href="/UserHome/<?php echo e(Session::get('user')->userId); ?>">Logged In As <?php echo e(Session::get('user')->userName); ?></a></li>
							<li><a class="js-scroll-trigger" href="/logout">Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	</div>
	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>PRICING</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row body">
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>AIRPORT TRANSFER</h2>
								<h3>Pick & Drop to and from Airport</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 1250++</span><br>
										Sedan Car/Microbus <br>
										Travel from and to the Hazrat Shahjalal International Airport.
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/pr1.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="/packages/air-trans"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>HOURLY CAR RENTAL</h2>
								<h3>Only for Travelling inside Dhaka Metro</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 1750++</span><br>
										Sedan Car/Microbus <br>
										Flexible 4 to 6 Hours Service
										Including Fuel Cost
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/pr3.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="/packagesadmin/hcr"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>DAILY CAR RENTAL INSIDE DHAKA</h2>
								<h3>Excluding Fuel & Driver Cost</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 2500++</span><br>
										Sedan Car/Microbus <br>
										Various Type of Cars <br>
										No Mileage Limit, Hidden Cost
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/pr2.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="/packagesadmin/dcri"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row body x1" style="margin-top: 10px;">
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>DAILY CAR RENTAL OUTSIDE DHAKA</h2>
								<h3>Excluding Fuel & Driver Cost</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 3000++</span><br>
										Travel Anywhere <br>
										No Mileage Limit <br>
										Experienced Driver
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/pr7.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="/packagesadmin/dcro"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>MONTHLY CAR RENTAL</h2>
								<h3>Flexible Monthly Basis Service</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 45000++</span><br>
										Our Multi-Month Program is available on a wide range of vehicles.
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/pr6.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="/packagesadmin/mcr"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>OFFICE PICK & DROP</h2>
								<h3>Tranportation Solution for Office Going People</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 7200</span><br>
										Microbus <br>
										This rate is for
										22 Working Days/Person,
										Shared Ride
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/pr5.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="/packagesadmin/opd"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="row">
				<div class="copy text-center">
					<span>Copyrights © 2018 All Rights Reserved by LARENT</span>
				</div>
			</div>
		</div>
	</div>
</body>

<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="/js/custom.js"></script>
<script>jssor_1_slider_init();</script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/scrolling-nav.js"></script>
</html>