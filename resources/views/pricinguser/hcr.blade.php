<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOURLY CAR RENTAL</title>
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
			<h1><span>HOURLY CAR RENTAL</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-9" style="left: 50%;transform: translate(-50%);">
						<div class="row hcr-card hcr-right">
							<h3 class="text-center">Standard Sedan Car - 4 Hours</h3>
							<hr>
							<div class="col-lg-12" style="border-bottom: 1px solid #bc3633; padding-bottom: 20px;">
								<div class="col-lg-4">
									<img src="/images/pr7.png" class="img-responsive" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
								<div class="col-lg-4 text-center">
									<span>৳ 1750</span>
									<a href="/booking/8"><button type="button" class="btn btn-primary">BOOK NOW</button></a>
								</div>
								<div class="col-lg-4">
									<img src="/images/pr7.png" class="img-responsive flip" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
							</div>
							<div class="col-lg-12">
								<ul class="text-justify">
									<li>This fee is for first 4 hours service including CNG Cost.</li>
									<li>Each additional hour will be charged 300 Taka.</li>
									<li>Service Hour in between 7:00 am - 11:59pm, after 12am, late night fee 400 Taka per hour will be charged.</li>
									<li>No other Fuel & Driver Cost.</li>
									<li>Standard AC Car: X Corolla, Axio, Allion, Fielder, Premio (depends on availability).</li>
									<li>Travel within Dhaka City Corporation only.</li>
									<li>For travelling to Old town/Sadarghat, additional 250 Taka will be added with the base fare.</li>
									<li>Parking fees not included.</li>
									<li>Fuel cost for 40 kilometer travel included with this price. Each extra kilometer will charge 10 Taka.</li>
									<li>This rate is not valid 7 days before and after the Eid/Puja vacation.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9" style="left: 50%;transform: translate(-50%);">
						<div class="row hcr-card hcr-right">
							<h3 class="text-center">Standard Sedan Car - 10 Hours</h3>
							<hr>
							<div class="col-lg-12" style="border-bottom: 1px solid #bc3633; padding-bottom: 20px;">
								<div class="col-lg-4">
									<img src="/images/at3.png" class="img-responsive" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
								<div class="col-lg-4 text-center">
									<span>৳ 3000</span>
									<a href="/booking/9"><button type="button" class="btn btn-primary">BOOK NOW</button></a>
								</div>
								<div class="col-lg-4">
									<img src="/images/at3.png" class="img-responsive flip" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
							</div>
							<div class="col-lg-12">
								<ul class="text-justify">
									<li>This fee is for first 10 hours service including CNG Cost.</li>
									<li>Fuel cost for 65 kilometer travel included with this price. Each extra kilometer will charge 10 Taka.</li>
									<li>Each additional hour will be charged 300 Taka./li>
									<li>Service Hour in between 7:00 am - 11:59pm, after 12am, late night fee 400 Taka per hour will be charged.</li>
									<li>Parking fees not included.</li>
									<li>Travel within Dhaka City Corporation only.</li>
									<li>Driver Cost : 150 Taka for lunch.</li>
									<li>Parking fees not included.</li>
									<li>Standard AC Car: X Corolla, Axio, Allion, Fielder, Premio (depends on availability).</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9" style="left: 50%;transform: translate(-50%);">
						<div class="row hcr-card hcr-right">
							<h3 class="text-center">Premium Sedan Car - 4 Hours</h3>
							<hr>
							<div class="col-lg-12" style="border-bottom: 1px solid #bc3633; padding-bottom: 20px;">
								<div class="col-lg-4">
									<img src="/images/dcri4.png" class="img-responsive" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
								<div class="col-lg-4 text-center">
									<span>৳ 2250</span>
									<a href="/booking/10"><button type="button" class="btn btn-primary">BOOK NOW</button></a>
								</div>
								<div class="col-lg-4">
									<img src="/images/dcri4.png" class="img-responsive flip" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
							</div>
							<div class="col-lg-12">
								<ul class="text-justify">
									<li>This fee is for first 4 hours service including CNG Cost.</li>
									<li>Fuel cost for 40 kilometer travel included with this price. Each extra kilometer will charge 10 Taka.</li>
									<li>Each additional hour will be charged 300 Taka.</li>
									<li>Service Hour in between 7:00 am - 11:59pm, after 12am, late night fee 400 Taka per hour will be charged.</li>
									<li>Parking fees not included.</li>
									<li>Travel within Dhaka City Corporation only.</li>
									<li>No other Fuel & Driver Cost.</li>
									<li>Vehicle Type: Superior Allion/Premio (2008-2011 Model).</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9" style="left: 50%;transform: translate(-50%);">
						<div class="row hcr-card hcr-right">
							<h3 class="text-center">Premium Sedan Car - 10 Hours</h3>
							<hr>
							<div class="col-lg-12" style="border-bottom: 1px solid #bc3633; padding-bottom: 20px;">
								<div class="col-lg-4">
									<img src="/images/pr2.png" class="img-responsive" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
								<div class="col-lg-4 text-center">
									<span>৳ 4000</span>
									<a href="/booking/11"><button type="button" class="btn btn-primary">BOOK NOW</button></a>
								</div>
								<div class="col-lg-4">
									<img src="/images/pr2.png" class="img-responsive flip" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
							</div>
							<div class="col-lg-12">
								<ul class="text-justify">
									<li>This fee is for first 10 hours service including CNG Cost.</li>
									<li>Fuel cost for 70 kilometer travel included with this price. Each extra kilometer will charge 10 Taka.</li>
									<li>Each additional hour will be charged 400 Taka</li>
									<li>Service Hour in between 7:00 am - 11:59pm, after 12am, late night fee 400 Taka per hour will be charged.</li>
									<li>Parking fees not included.</li>
									<li>Travel within Dhaka City Corporation only.</li>
									<li>Driver Cost : 150 Taka for lunch.</li>
									<li>Travel within Dhaka City Corporation only.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9" style="left: 50%;transform: translate(-50%);">
						<div class="row hcr-card hcr-right">
							<h3 class="text-center">Hiace Micro Bus- 4 Hours</h3>
							<hr>
							<div class="col-lg-12" style="border-bottom: 1px solid #bc3633; padding-bottom: 20px;">
								<div class="col-lg-4">
									<img src="/images/at4-5.png" class="img-responsive" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
								<div class="col-lg-4 text-center">
									<span>৳ 3000</span>
									<a href="/booking/l2"><button type="button" class="btn btn-primary">BOOK NOW</button></a>
								</div>
								<div class="col-lg-4">
									<img src="/images/at4-5.png" class="img-responsive flip" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
							</div>
							<div class="col-lg-12">
								<ul class="text-justify">
									<li>This fee is for first 4 hours service including CNG Cost.</li>
									<li>Fuel cost for 40 kilometer travel included with this price. Each extra kilometer will charge 15 Taka.</li>
									<li>Each additional hour will be charged 400 Taka.</li>
									<li>Service Hour in between 7:00 am - 11:59pm, after 12am, late night fee 500 Taka per hour will be charged.</li>
									<li>Travel within Dhaka City Corporation only.</li>
									<li>Parking fees not included</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-9" style="left: 50%;transform: translate(-50%);">
						<div class="row hcr-card hcr-right">
							<h3 class="text-center">Hiace/X Noah Micro Bus- 10 Hours</h3>
							<hr>
							<div class="col-lg-12" style="border-bottom: 1px solid #bc3633; padding-bottom: 20px;">
								<div class="col-lg-4">
									<img src="/images/pr5.png" class="img-responsive" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
								<div class="col-lg-4 text-center">
									<span>৳ 5000</span>
									<a href="/booking/13"><button type="button" class="btn btn-primary">BOOK NOW</button></a>
								</div>
								<div class="col-lg-4">
									<img src="/images/pr5.png" class="img-responsive flip" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
							</div>
							<div class="col-lg-12">
								<ul class="text-justify">
									<li>This fee is for first 10 hours service including CNG Cost.</li>
									<li>Fuel cost for 70 kilometer travel included with this price. Each extra kilometer will charge 15 Taka.</li>
									<li>Each additional hour will be charged 400 Taka.</li>
									<li>Service Hour in between 7:00 am - 11:59pm, after 12am, late night fee 500 Taka per hour will be charged.</li>
									<li>Travel within Dhaka City Corporation only.</li>
									<li>Parking fees not included</li>
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