<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MONTHLY CAR RENTAL</title>
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
									<li><a href="AdminHome/{{ Session::get('user')->userId }}">View Profile</a></li>
									<li><a href="AdminHome/{{ Session::get('user')->userId }}/edit">Edit Profile</a></li>
									<li><a href="AdminHome/{{ Session::get('user')->userId }}/changepassword">Change Password</a></li>
									<li><a href="AdminHome/{{ Session::get('user')->userId }}/changeprofilepicture">Change Profile Picture</a></li>
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
							<li><a class="js-scroll-trigger" href="AdminHome/{{ Session::get('user')->userId}}">Logged In As {{ Session::get('user')->userName }}</a></li>
							<li><a class="js-scroll-trigger" href="/logout">Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>MONTHLY CAR RENTAL</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-9" style="left: 50%;transform: translate(-50%);">
						<div class="row hcr-card hcr-right">
							<h3 class="text-center">X Noah</h3>
							<span style="padding-left: 10px; padding-right: 10px; font-size: 20px;" class="text-center"></span>
							<hr>
							<div class="col-lg-12" style="border-bottom: 1px solid #bc3633; padding-bottom: 20px;">
								<div class="col-lg-4">
									<img src="/images/dcri5.png" class="img-responsive" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
								<div class="col-lg-4 text-center">
									<span>৳ 70000</span>
									<a href="/booking/32"><button type="button" class="btn btn-primary">BOOK NOW</button></a>
								</div>
								<div class="col-lg-4">
									<img src="/images/dcri5.png" class="img-responsive flip" alt="Image" style="margin: 10px auto 0 auto;">
								</div>
							</div>
							<div class="col-lg-12">
								<ul class="text-justify">
									<li>Working Days:  26 days for a month considering Friday or Saturday off. </li>
									<li>Extra uses charge: After 26 days, each extra day of that month will be charged as  3000 Tk/day.</li>
									<li>Over Time: After 10 hours of duty, Driver’s overtime needed to be paid by the renter 50 Tk/hour.</li>
									<li>Driver lunch allowance: 100Tk/day.  If duty goes above 9PM then dinner allowance 100 Taka.</li>
									<li>Fuel Cost (CNG/Octane):  Renter will bear the total fuel cost by themselves or can pay us per kilometer wise.  Rate will be as per market standard. </li>
									<li>Daily vehicle usage log sheet will be maintained and renter has to give signature at the end of the day.</li>
									<li>Renter will pay all Bridge Tolls/Ferry/Parking Charges. </li>
									<li>Renter has to pay for 20 liters of octane every month for starting and switching off the car.</li>
									<li>Renter has to pay for the Parking Kilometer. (Garage to your office & vice versa)</li>
									<li>This rental car will be used for travelling inside and nearby Chittagong city. In case of traveling outside of Dhaka city, renter will pay Driver tour allowance Tk.1000 per day.</li>
									<li>We cannot provide the car during the time of political strike and Natural disaster.</li>
									<li>Payment will not be affected or reduced for political strike and Natural disaster. It will remain same.</li>
									<li>Payment Method: </li>
									<li>All Payment must be cleared between 30th days of the running month either by cash or bank draft in favor of GARIVARA.COM.BD </li>
									<li>Security Deposit: 50,000/- per vehicle. (adjustable at the end of contract)</li>
									<li>This rate is including driver’s salary.</li>
									<li>Eid holiday: 3 to 5 days. As per Govt. rule.</li>
									<li>GPS device (Optional) can be installed in the vehicle. One-time installation fees 6500Tk. Monthly Fee: 500Tk.</li>
									<li>Vehicle Maintenance or any kind of repairing cost will be beard by Car Rental Company. </li>
									<li>This rate includes no insurance coverage for the passengers. </li>
									<li>This car will be driven by Car Rental Company’s designated driver.</li>
									<li>This vehicle will be parked at night Car Rental Company’s designated parking area.  </li>
									<li>If any illegal goods are found in renter’s luggage’s then GariVara.com.bd, this car and owner of this car will not be responsible.  Renter has to take all liabilities.</li>
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