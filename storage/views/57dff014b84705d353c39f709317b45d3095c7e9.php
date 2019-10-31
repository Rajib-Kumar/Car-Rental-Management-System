<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit</title>
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
									<li><a href="booking.html">All Bookings</a></li>
									<li><a href="">New Booking Requests</a></li>
									<li><a href="/userrequest">New User Requests</a></li>
									<li><a href="">Search User</a></li>
									<li><a href="">Search Employee</a></li>
									<li><a href="">Create Employee/Admin</a></li>
									<li><a href="">Edit Packages</a></li>

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
	<form method="post" action="/packages/<?php echo e($pcklist->packageId); ?>">
		<input type="hidden" name="pid" value="<?php echo e($pcklist->packageId); ?>">
		<input type="hidden" name="_method" value="put">
		<?php echo e(csrf_field()); ?>

	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>EDIT PACKAGE</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row booking-card booking-info view-info" style="background-color: #E1E1E1;">
							<div class="well col-lg-12">
								<div class="col-lg-7">
									<table align="center">
										<tr>
											<td class="left">Package ID :</td>
											<td class="right"><input type="text" name="packageId" value="<?php echo e($pcklist->packageId); ?>"></td>
										</tr>
										<tr>
											<td class="left">Package Name :</td>
											<td class="right"><input type="text" name="packageName" value="<?php echo e($pcklist->rentalType); ?>"></td>
										</tr>
										<tr>
											<td class="left">Package Type :</td>
											<td class="right"><input type="text" name="packageType" value="<?php echo e($pcklist->packageType); ?>"></td>
										</tr>
										<tr>
											<td class="left">Vehicle Type :</td>
											<td class="right"><input type="text" name="vehicleType" value="<?php echo e($pcklist->vehicleType); ?>"></td>
										</tr>
										<tr>
											<td class="left">Location :</td>
											<td class="right"><input type="text" name="location" value="<?php echo e($pcklist->location); ?>"></td>
										</tr>
										<tr>
											<td class="left">Price :</td>
											<td class="right"><input type="text" name="price" value="<?php echo e($pcklist->price); ?>"></td>
										</tr>
										
										<tr>
											<td class="left">Parking Charge :</td>
											<td class="right"><input type="text" name="parkingCharge" value="<?php echo e($pcklist->parkingCharge); ?>"></td>
										</tr>
										
										<tr>
											<td class="left">Driver Cost :</td>
											<td class="right"><input type="text" name="driverCost" value="<?php echo e($pcklist->driverCost); ?>"></td>
										</tr>
										
										
									</table>
									
									<input type="submit" class="btn btn-primary" style="margin-top: 20px; width: 200px;" value="UPDATE PACKAGE">
									
								</div>
								<div class="col-lg-5">
									<img src="/images/adi.png" class="img-responsive" alt="Image">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
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