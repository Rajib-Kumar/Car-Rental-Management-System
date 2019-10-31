<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DAILY CAR RENTAL INSIDE DHAKA</title>
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
							<li><a class="js-scroll-trigger" href="/UserHome">HOME</a></li>
							<li><a class="js-scroll-trigger" href="/packages">PRICING</a></li>
							<li><a class="js-scroll-trigger" href="#aboutus">ABOUT US</a></li>
							<li><a class="js-scroll-trigger" href="{{ URL::route('UserHome') }}#contactus">CONTACT US</a></li>
							<li class="dropdown">
								<a href="UserHome/{{ Session::get('user')->userId }}/profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/UserHome/{{ Session::get('user')->userId }}">View Profile</a></li>
									<li><a href="UserHome/{{ Session::get('user')->userId }}/edit">Edit Profile</a></li>
									<li><a href="UserHome/{{ Session::get('user')->userId }}/changepassword">Change Password</a></li>
									<li><a href="UserHome/{{ Session::get('user')->userId }}/changeprofilepicture">Change Profile Picture</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="/logout">LOGOUT</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="UserHome/{{ Session::get('user')->userId }}/profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACTIVITIES<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="/mybookings/{{ Session::get('user')->userId }}">My Bookings</a></li>
									<li><a href="/packages">Book Now</a></li>
									<li><a href="{{ URL::route('UserHome') }}#contactus">Send Message</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="/logout">LOGOUT</a></li>
								</ul>
							</li>
							<li><a class="js-scroll-trigger" href="/UserHome/{{ Session::get('user')->userId}}">Logged In As {{ Session::get('user')->userName }}</a></li>
							<li><a class="js-scroll-trigger" href="/logout">Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>DAILY CAR RENTAL INSIDE DHAKA</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-9" style="left: 50%;transform: translate(-50%);">
						<div class="row hcr-card hcr-right">
							<h3 class="text-center">Hiace Super GL</h3>
							<span style="padding-left: 10px; padding-right: 10px; font-size: 20px;" class="text-center">HIACE+10Hours Service+CNG Cost 15 Taka/kilo+Driver Cost 150 Taka</span>
							<hr>
							<div class="col-lg-12" style="border-bottom: 1px solid #bc3633; padding-bottom: 20px;">
								<div class="col-lg-4">
									<img src="/images/at4-5.png" class="img-responsive" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
								<div class="col-lg-4 text-center">
									<span>৳ 3500</span>
									<a href="/booking/19"><button type="button" class="btn btn-primary">BOOK NOW</button></a>
								</div>
								<div class="col-lg-4">
									<img src="/images/at4-5.png" class="img-responsive flip" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
							</div>
							<div class="col-lg-12">
								<ul class="text-justify">
									<li>This rate is excluding Fuel cost.</li>
									<li>Fuel cost will be charged per kilometer wise or renter can refill the CNG.</li>
									<li>Approximate Fuel Cost: 15 Tk/Kilometer (CNG); 20 Tk/Kilometer (Octane)</li>
									<li>This rate is for first 10 hours service.  </li>
									<li>Each additional hour will be charged Tk. 300 </li>
									<li>Driver Lunch Allowance: 150 Tk.</li>
									<li>Renter has to pay all Tolls/Parking Charges. </li>
									<li>Renter has to pay the fuel cost and extra uses charge to the driver by cash.</li>
								</ul>
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