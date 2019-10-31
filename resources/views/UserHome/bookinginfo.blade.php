<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BOOKING INFO</title>
	<link rel="icon" href="/images/larent.png">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/dp/bootstrap-datepicker.css">
	<link href="/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/fontawesome-all.css">
	<link rel="stylesheet" href="/css/pricing.css">
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/js/moment.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script type="text/javascript" src="/js/bootstrap-datetimepicker.js"></script>
</head>
<body style="overflow-x: hidden;">
	<header class="container-fluid" id="home">
		<div class="container">
			<div class="row">
				<img src="../images/larent.png" class="logo" alt="Image">
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

		<div class="row text-center title">
			<h1><span>YOUR BOOKING INFORMATION</span></h1>
		</div>
		<form method="post" action="/bookinginfo/{{$bkngId->bookId}}">
			<input type="hidden" name="_method" value="put">
			<input type="hidden" name="packageId" value="{{ $pckgId->packageId }}">
			<input type="hidden" name="uuid" value="{{ Session::get('user')->userId}}">
			<input type="hidden" name="bid" value="{{$bkngId->bookId}}">
			{{csrf_field()}}
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row booking-card booking-info" style="background-color: #E1E1E1;">
							<div class="well col-lg-12">
								<table align="center">
									<tr>
										<td class="left">Order No :</td>
										<td class="right">{{$bkngId->bookId}}</td>
									</tr>
									<tr>
										<td class="left">Customer Name :</td>
										<td class="right">{{$userId->firstName}}{{$userId->lastName}}</td>
									</tr>
									<tr>
										<td class="left">Customer Address :</td>
										<td class="right">{{$userId->address}}</td>
									</tr>
									<tr>
										<td class="left">Email :</td>
										<td class="right">{{$userId->email}}</td>
									</tr>
									<tr>
										<td class="left">Cell :</td>
										<td class="right">{{$userId->phone}}</td>
									</tr>
								</table>
							</div>
							<div class="well col-lg-12">
								<table align="center">
									<tr>
										<td class="left">Service Name :</td>
										<td class="right">{{$pckgId->rentalType}}</td>
									</tr>
									<tr>
										<td class="left">Package Type :</td>
										<td class="right">{{$pckgId->packageType}}</td>
									</tr>
									<tr>
										<td class="left">Vehicle Type/Name :</td>
										<td class="right">{{$pckgId->vehicleType}}</td>
									</tr>
									<tr>
										<td class="left">Start Date :</td>
										<td class="right">{{$bkngId->StartDateTime}}</td>
									</tr>
									<tr>
										<td class="left">End Date :</td>
										<td class="right">{{$bkngId->EndDateTime}}</td>
									</tr>
									<tr>
										<td class="left">Start Location :</td>
										<td class="right">{{$bkngId->StartLocation}}</td>
									</tr>
									<tr>
										<td class="left">Destination Location :</td>
										<td class="right">{{$bkngId->ReturnLocation}}</td>
									</tr>
								</table>
							</div>
							<div class="well col-lg-12">
								<table align="center">
									<tr>
										<td class="left">Rental Amount :</td>
										<td class="right">৳{{$pckgId->price}}</td>
									</tr>
									<tr>
										<td class="left">Driver Cost :</td>
										<td class="right">৳ {{$pckgId->driverCost}}</td>
									</tr>
									<tr>
										<td class="left">Service Charge (2%) :</td>
										<td class="right">৳ {{$pckgId->serviceCharge}}</td>
									</tr>
									<tr>
										<td class="left">Total Amount :</td>
										<td class="right">৳{{$pckgId->totalcost}}</td>
									</tr>
									<tr>
										<td class="left">Booking Status :</td>
										<td class="right">{{$bkngId->bookingStatus}}</td>
									</tr>
									<tr>
										<td class="left">Paying Status :</td>
										<td class="right">{{$bkngId->payingstatus}}</td>
									</tr>
								</table>
							</div>
							<input type="submit" class="btn btn-primary" value="CANCEL BOOKING">
							<a href="/pay/{{$bkngId->bookId}}"><button type="button" class="btn btn-primary pull-right">PAY NOW</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
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


<script src="../js/bootstrap-hover-dropdown.min.js"></script>
<script src="../js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="../js/custom.js"></script>
<script>jssor_1_slider_init();</script>
<script src="../js/jquery.easing.min.js"></script>
<script src="../js/scrolling-nav.js"></script>
</html>