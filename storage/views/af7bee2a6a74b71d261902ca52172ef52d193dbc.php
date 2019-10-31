<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CHANGE PROFILE PICTURE</title>
	<link rel="icon" href="/images/larent.png">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/dp/bootstrap-datepicker.css">
	<link href="/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/fontawesome-all.css">
	<link rel="stylesheet" href="/css/pricing.css">
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../js/moment.js"></script>
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
							<li><a class="js-scroll-trigger" href="/UserHome">HOME</a></li>
							<li><a class="js-scroll-trigger" href="../index.html#pricing">PRICING</a></li>
							<li><a class="js-scroll-trigger" href="aboutus">ABOUT US</a></li>
							<li><a class="js-scroll-trigger" href="contactus">CONTACT US</a></li>
							<li class="dropdown">
								<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="booking-history.html">My Bookings</a></li>
									<li><a href="/index.html#contactus">Send Message</a></li>
									<li><a href="">View Profile</a></li>
									<li><a href="">Edit Profile</a></li>
									<li><a href="../#">Change Profile Picture</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="">LOGOUT</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	</div>
	<div class="container-fluid pricing" id="pricing">
		<form method="post" action="/UserHome/<?php echo e(Session::get('user')->userId); ?>/uppassword">
			<input type="hidden" name="uid" value="<?php echo e(Session::get('user')->userId); ?>">
			<input type="hidden" name="uname" value="<?php echo e(Session::get('user')->userName); ?>">
		<input type="hidden" name="_method" value="put">
		<?php echo e(csrf_field()); ?>

		<div class="row text-center title">
			<h1><span>CHANGE PASSWORD</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<div class="col-lg-4"></div>
					<div class="col-lg-4">
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">OLD PASSWORD:</p>
								<input type="password" name="opass"  id="input" class="form-control" >
							</div>						
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">NEW PASSWORD:</p>
								<input type="password" name="password"  id="input" class="form-control">
							</div>							
							<div class="col-lg-12">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">CONFIRM PASSWORD</p>
								<input type="password" name="confirmPassword"  id="input" class="form-control">
							</div>								
							<div class="col-lg-12">
								<input type="submit" value="UPDATE" class="btn btn-primary" style="margin-top: 20px; width: 100px;">
								<p></p>
					        </div>
					</div>
					<div class="col-lg-4"></div>
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


<script src="/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="/js/custom.js"></script>
<script>jssor_1_slider_init();</script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/scrolling-nav.js"></script>
</html>