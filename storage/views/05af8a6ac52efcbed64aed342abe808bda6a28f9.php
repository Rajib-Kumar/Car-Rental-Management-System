<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDIT PROFILE</title>
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

	<form method="post" action="/UserHome/<?php echo e(Session::get('user')->userId); ?>">
		<input type="hidden" name="uid" value="<?php echo e(Session::get('user')->userId); ?>">
		<input type="hidden" name="_method" value="put">

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
							<li><a class="js-scroll-trigger" href="../index.html#pricing">PRICING</a></li>
							<li><a class="js-scroll-trigger" href="../#aboutus">ABOUT US</a></li>
							<li><a class="js-scroll-trigger" href="../#contactus">CONTACT US</a></li>
							<li class="dropdown">
								<a href="../#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="../#">My Bookings</a></li>
									<li><a href="../index.html#contactus">Send Message</a></li>
									<li><a href="/UserHome/<?php echo e(Session::get('user')->userId); ?>">View Profile</a></li>
									<li><a href="/UserHome/<?php echo e(Session::get('user')->userId); ?>/edit">Edit Profile</a></li>
									<li><a href="/UserHome/<?php echo e(Session::get('user')->userId); ?>/changeprofilepicture">Change Profile Picture</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="/logout">LOGOUT</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	</div>


	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>EDIT PROFILE</span></h1>
		</div>
		<form method="post" action="/UserHome/<?php echo e(Session::get('user')->userId); ?>"></form>
		<?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row booking-card">
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;">FIRST NAME:</p>
								<input type="text" name="fname" id="input" class="form-control" value="<?php echo e($userId->firstName); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;">LAST NAME:</p>
								<input type="text" name="lname" id="input" class="form-control" value="<?php echo e($userId->lastName); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">EMAIL:</p>
								<input type="text" name="email"  id="input" class="form-control" value="<?php echo e($userId->email); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">MOBILE NO:</p>
								<input type="text" name="mobile"  id="input" class="form-control" value="<?php echo e($userId->phone); ?>">
							</div>
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">ADDRESS:</p>
								<input type="text" name="address"  id="input" class="form-control" value="<?php echo e($userId->address); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">DIVISION:</p>

								<select class="form-control" name="division">
									<option value="dhaka" <?php if ($userId->division == 'dhaka') echo ' selected="selected"'; ?>>DHAKA</option>
									<option value="sylhet" <?php if ($userId->division == 'sylhet') echo ' selected="selected"'; ?>>SYLHET</option>
									<option value="khulna" <?php if ($userId->division == 'khulna') echo ' selected="selected"'; ?>>KHULNA</option>
									<option value="barisal" <?php if ($userId->division == 'barisal') echo ' selected="selected"'; ?>>BARISAL</option>
									<option value="rangpur" <?php if ($userId->division == 'rangpur') echo ' selected="selected"'; ?>>RANGPUR</option>
									<option value="rajshahi" <?php if ($userId->division == 'rajshahi') echo ' selected="selected"'; ?>>RAJSHAHI</option>
									<option value="mymensingh" <?php if ($userId->division == 'mymensingh') echo ' selected="selected"'; ?>>MYMENSINGH</option>
									<option value="chittagong" <?php if ($userId->division == 'chittagong') echo ' selected="selected"'; ?>>CHITTAGONG</option>
								</select>
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">CITY:</p>
								<input type="text" name="city"  id="input" class="form-control" value="<?php echo e($userId->city); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">NEW PASSWORD:</p>
								<input type="password" name="npass"  id="input" class="form-control" value="<?php echo e($userId->password); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">CONFIRM PASSWORD</p>
								<input type="password" name="cpass"  id="input" class="form-control" value="<?php echo e($userId->password); ?>">
							</div>
							
							
							<div class="col-lg-12">
								<input type="submit" value="UPDATE" class="btn btn-primary" style="margin-top: 20px; width: 100px;">
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

 </form>

</body>


<script src="/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="/js/custom.js"></script>
<script>jssor_1_slider_init();</script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/scrolling-nav.js"></script>
</html>