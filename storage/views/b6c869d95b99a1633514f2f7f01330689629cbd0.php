<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AIRPORT TRANSFER</title>
	<link rel="icon" href="/images/larent.png">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link href="/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/fontawesome-all.css">
	<link rel="stylesheet" href="/css/pricing.css">
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
							<li><a class="js-scroll-trigger" href="/AdminHome">HOME</a></li>
							<li><a class="js-scroll-trigger" href="">PRICING</a></li>
							<li class="drp dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="AdminHome/<?php echo e(Session::get('user')->userId); ?>">View Profile</a></li>
									<li><a href="AdminHome/<?php echo e(Session::get('user')->userId); ?>/edit">Edit Profile</a></li>
									<li><a href="AdminHome/<?php echo e(Session::get('user')->userId); ?>/changepassword">Change Password</a></li>
									<li><a href="AdminHome/<?php echo e(Session::get('user')->userId); ?>/changeprofilepicture">Change Profile Picture</a></li>
									<li role="separator" class="divider"></li>
									
									<li><a class="js-scroll-trigger" href="/logout">Logout</a></li>
									
								</ul>
							</li>
							<li class="drp dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activities<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/allbookings">All Bookings</a></li>
									<li><a href="/bookingrequest">New Booking Requests</a></li>
									<li><a href="/userrequest">New User Requests</a></li>
									<li><a href="/usersearch">Search User</a></li>
									<li><a href="/employeesearch">Search Employee</a></li>
									<li><a href="/create-employee">Create Employee/Admin</a></li>
									<li><a href="/edit">Edit Packages</a></li>

									<li role="separator" class="divider"></li>
									
									<li><a class="js-scroll-trigger" href="/logout">Logout</a></li>
									
								</ul>
							</li>
							<li><a class="js-scroll-trigger" href="AdminHome/<?php echo e(Session::get('user')->userId); ?>">Logged In As <?php echo e(Session::get('user')->userName); ?></a></li>
							<li><a class="js-scroll-trigger" href="/logout">Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	</div>
	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>AIRPORT TRANSFER</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row body">
					<div class="col-lg-4">
						<div class="row one">
							<div class="card cardo text-center">
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 1300</span><br>
										<b>AC Sedan Car</b> <br>
										Hazrat Shah Jalal International Airport to/from City (Zone#1)
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/at1.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="air-trans/1"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card cardo text-center">
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 1500</span><br>
										<b>AC Sedan Car</b> <br>
										Hazrat Shah Jalal International Airport to/from City (Zone#2)
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/at2.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="air-trans/2"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card cardo cardo text-center">
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 1700</span><br>
										<b>AC Sedan Car</b> <br>
										Hazrat Shah Jalal International Airport to/from City (Zone#3)
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/at3.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="air-trans/4"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row body x1" style="margin-top: 10px;">
					<div class="col-lg-4">
						<div class="row one">
							<div class="card cardo cardo text-center">
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 2000</span><br>
										<b>HIACE or NOAH Micro Bus</b> <br>
										Hazrat Shah Jalal International Airport to/from City (Zone#1)
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/at4-5.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="air-trans/5"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card cardo cardo text-center">
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 2500</span><br>
										<b>HIACE or NOAH Micro Bus</b> <br>
										Hazrat Shah Jalal International Airport to/from City (Zone#2)
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/at4-5.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="air-trans/6"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card cardo cardo text-center">
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 2800</span><br>
										<b>HIACE or NOAH Micro Bus</b> <br>
										Hazrat Shah Jalal International Airport to/from City (Zone#3)
									</p>
								</div>
								<div class="col-lg-5">
									<img src="/images/at6.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="air-trans/7"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
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