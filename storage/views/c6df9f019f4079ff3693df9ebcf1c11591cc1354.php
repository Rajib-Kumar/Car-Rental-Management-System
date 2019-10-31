<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CREATE EMPLOYEE</title>
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
		<div class="row text-center title">
			<h1><span>CREATE EMPLOYEE</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<form method="post" action="/AdminHome">
						<?php echo e(csrf_field()); ?>

					<div class="col-lg-12">
						<div class="row booking-card">
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;">FIRST NAME:</p>
								<input type="text" name="firstName" id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;">LAST NAME:</p>
								<input type="text" name="lastName" id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">EMAIL:</p>
								<input type="text" name="email"  id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">MOBILE NO:</p>
								<input type="text" name="phone"  id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">ADDRESS:</p>
								<input type="text" name="address"  id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">Date Of Birth:</p>
								<input type="Date" name="dob"  id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">DIVISION:</p>
								<select class="form-control" name="division">
									<option value="">Select Any</option>
									<option value="dhaka">DHAKA</option>
									<option value="sylhet">SYLHET</option>
									<option value="khulna">KHULNA</option>
									<option value="barisal">BARISAL</option>
									<option value="rangpur">RANGPUR</option>
									<option value="rajshahi">RAJSHAHI</option>
									<option value="mymensingh">MYMENSINGH</option>
									<option value="chittagong">CHITTAGONG</option>
								</select>
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">CITY:</p>
								<input type="text" name="city"  id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">GENDER:</p>
								<select class="form-control" name="sex">
									<option value="">Select Any</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">EMPLOYEE USERNAME:</p>
								<input type="text" name="empUsername"  id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">NEW PASSWORD:</p>
								<input type="password" name="password"  id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">CONFIRM PASSWORD</p>
								<input type="password" name="confirmPassword"  id="input" class="form-control" value="">
							</div>

							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">ROLE:</p>
								<select class="form-control" name="role">
									<option value="">Select Any</option>
									<option value="employee">Employee</option>
									<option value="admin">Admin</option>
								</select>
							</div>

							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">STATUS:</p>
								<select class="form-control" name="status">
									<option value="">Select Any</option>
									<option value="active">Active</option>
									<option value="pending">Pending</option>
									<option value="blocked">Blocked</option>
								</select>
							</div>

							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">UPLOAD PROFILE PHOTO</p>
								<input type="file" name="photo"  id="input" class="form-control" value="">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">UPLOAD ANY PHOTO ID</p>
								<input type="file" name="photoId"  id="input" class="form-control" value="">
							</div>
							
							
							<div class="col-lg-12">
								<input type="submit" class="btn btn-primary" style="margin-top: 20px;" value="CREATE EMPLOYEE">
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php if($errors->any()): ?>
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	<?php endif; ?>
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


<script src="/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="/js/custom.js"></script>
<script>jssor_1_slider_init();</script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/scrolling-nav.js"></script>
</html>