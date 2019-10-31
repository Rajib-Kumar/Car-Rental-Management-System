<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Delete</title>
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
	<form method="post" action="/bookingsinfo/<?php echo e($bookId->bookId); ?>">
		<input type="hidden" name="id" value="<?php echo e($bookId->bookId); ?>">
		<input type="hidden" name="_method" value="delete">
		<?php echo e(csrf_field()); ?>

	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>BOOKING INFORMATION DELETE</span></h1>
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
											<td class="left">BOOK ID:</td>
											<td class="right"><?php echo e($bookId->bookId); ?></td>
										</tr>
										<tr>
											<td class="left">Rental Type :</td>
											<td class="right"><?php echo e($bookId->rentalType); ?></td>
										</tr>
										<tr>
											<td class="left">Package Type :</td>
											<td class="right"><?php echo e($bookId->packageType); ?></td>
										</tr>
										<tr>
											<td class="left">Vehicle Type :</td>
											<td class="right"><?php echo e($bookId->vehicleType); ?></td>
										</tr>
										<tr>
											<td class="left">Price :</td>
											<td class="right"><?php echo e($bookId->price); ?></td>
										</tr>
										<tr>
											<td class="left">Start Date :</td>
											<td class="right"><?php echo e($bookId->StartDateTime); ?></td>
										</tr>
										<tr>
											<td class="left">Return Date :</td>
											<td class="right"><?php echo e($bookId->EndDateTime); ?></td>
										</tr>
										<tr>
											<td class="left">Start Location :</td>
											<td class="right"><?php echo e($bookId->StartLocation); ?></td>
										</tr>
										<tr>
											<td class="left">Return Location Date :</td>
											<td class="right"><?php echo e($bookId->ReturnLocation); ?></td>
										</tr>
										<tr>
											<td class="left"> Booking Status :</td>
											<td class="right"><?php echo e($bookId->bookingStatus); ?></td>
										</tr>
										<tr>
											<td class="left">Paying Status :</td>
											<td class="right"><?php echo e($bookId->payingstatus); ?></td>
										</tr>
									</table>
									Are You Sure You Want to Delete?<br>
									<input type="submit" class="btn btn-primary" style="margin-top: 20px; width: 100px;" value="Yes, Delete">
									<a href="/UserHome"><button type="button" class="btn btn-primary" style="margin-top: 20px; width: 100px;">HOME</button></a>
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