<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BOOKING</title>
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
			<h1><span>BOOKING PANEL</span></h1>
		</div>
		<form method="post" action="/bookinginfo">
			<input type="hidden" name="packageId" value="{{ $pckgId->packageId }}">
			<input type="hidden" name="bookingStatus" value="pending">
			<input type="hidden" name="payingstatus" value="pending">
			{{csrf_field()}}
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<div class="row booking-card">
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm;">RENTAL TYPE :</p>
								<input type="text" name="rentalType" readonly="readonly" id="input" class="form-control" value="{{$pckgId->rentalType}}">
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm;">PACKAGE TYPE :</p>
								<input type="text" name="packageType" readonly="readonly" id="input" class="form-control" value="{{$pckgId->packageType}}">
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm;">VEHICLE TYPE :</p>
								<input type="text" name="vehicleType" readonly="readonly" id="input" class="form-control" value="{{$pckgId->vehicleType}}">
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm;">PRICE :</p>
								<input type="text" name="priceH" readonly="readonly" id="input" class="form-control" value="{{$pckgId->price}}">
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm;">TOTAL PRICE (Including All) :</p>
								<input type="text" name="price" readonly="readonly" id="input" class="form-control" value="{{$pckgId->totalcost}}">
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm;">Booker's Id:</p>
								<input type="text" name="uuid" readonly="readonly" id="input" class="form-control" value="{{ Session::get('user')->userId}}">
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">STARTING DATE & TIME:</p>
								<div class="form-group">
									<div class='input-group date' id='datetimepicker1'>
										<input type='text' class="form-control" id="datetimepicker4" name="StartDateTime" />
										<span class="input-group-addon">
											<i class="fas fa-calendar-alt"></i>
										</span>
									</div>
								</div>
								<script type="text/javascript">
									$(function () {
										$('#datetimepicker1').datetimepicker({ debug:true, minDate: new Date(), format: 'DD/MM/YYYY hh:mm A', icons: {next: 'fas fa-arrow-alt-circle-right', previous: 'fas fa-arrow-alt-circle-left', time:'fas fa-clock', up: 'fas fa-arrow-alt-circle-up',
											down: 'fas fa-arrow-alt-circle-down' , date:'fas fa-calendar-alt' }});
									});

									$(function () {
										$('#datetimepicker4').datetimepicker({ minDate: new Date(), format: 'DD/MM/YYYY hh:mm A', icons: {next: 'fas fa-arrow-alt-circle-right', previous: 'fas fa-arrow-alt-circle-left', time:'fas fa-clock', up: 'fas fa-arrow-alt-circle-up',
											down: 'fas fa-arrow-alt-circle-down', date:'fas fa-calendar-alt' }});
									});
								</script>
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">RETURNING DATE & TIME:</p>
								<div class="form-group">
									<div class='input-group date'>
										<input type='text' class="form-control" id="datetimepicker5" name="EndDateTime"/>
										<span class="input-group-addon">
											<i class="fas fa-calendar-alt"></i>
										</span>
									</div>
								</div>
								<script type="text/javascript">
									$(function () {
										$('#datetimepicker2').datetimepicker({ minDate: new Date(), format: 'DD/MM/YYYY hh:mm A', icons: {next: 'fas fa-arrow-alt-circle-right', previous: 'fas fa-arrow-alt-circle-left' , time:'fas fa-clock', up: 'fas fa-arrow-alt-circle-up',
											down: 'fas fa-arrow-alt-circle-down', date:'fas fa-calendar-alt'}});
									});

									$(function () {
										$('#datetimepicker5').datetimepicker({ minDate: new Date(), format: 'DD/MM/YYYY hh:mm A', icons: {next: 'fas fa-arrow-alt-circle-right', previous: 'fas fa-arrow-alt-circle-left' , time:'fas fa-clock', up: 'fas fa-arrow-alt-circle-up',
											down: 'fas fa-arrow-alt-circle-down', date:'fas fa-calendar-alt'}});
									});
								</script>
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm; ">STARTING LOCATION:</p>
								<input type="text" name="StartLocation" id="input" class="form-control" value="" >
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm; ">RETURNING LOCATION:</p>
								<input type="text" name="ReturnLocation" id="input" class="form-control" value="">
							</div>
							<div class="col-lg-12">
								<a href="/packages"><button type="button" class="btn btn-primary" style="margin-top: 20px;">GO BACK</button></a>
								<input type="submit" value="CONFIRM BOOKING" class="btn btn-primary pull-right" style="margin-top: 20px;">
							</div>
						</div>
					</div>
					<div class="col-lg-3"></div>
					</div>
				</div>
			</div>
		</div>
	</form>
	</div>
	@if($errors->any())
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif
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