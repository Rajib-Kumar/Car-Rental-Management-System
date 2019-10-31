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
							<li><a class="js-scroll-trigger" href="../index.html#pricing">PRICING</a></li>
							<li><a class="js-scroll-trigger" href="../#aboutus">ABOUT US</a></li>
							<li><a class="js-scroll-trigger" href="../#contactus">CONTACT US</a></li>

							<li class="drp dropdown">
								<a href="../#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="../#">My Bookings</a></li>
									<li><a href="../index.html#contactus">Send Message</a></li>
									<li><a href="/AdminHome/<?php echo e(Session::get('user')->userId); ?>">View Profile</a></li>
									<li><a href="/AdminHome/<?php echo e(Session::get('user')->userId); ?>/edit">Edit Profile</a></li>
									<li><a href="/AdminHome/<?php echo e(Session::get('user')->userId); ?>/changeprofilepicture">Change Profile Picture</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="../#">LOGOUT</a></li>
								</ul>
							</li>
							<li><a class="js-scroll-trigger" href="../../AdminHome/<?php echo e(Session::get('user')->userId); ?>">Logged In As <?php echo e(Session::get('user')->userName); ?> (Admin)</a></li>
							<li><a class="js-scroll-trigger" href="/logout">Logout</a></li>

						</ul>
					</div>
				</div>
			</nav>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			    	<div class="card card-login mx-auto mt-5 logcard ">
			    	  <div class="card-header lgnd text-center" style="font-family: tb">LOGIN</div>
			    	  <div class="card-body cbody">
			    	    <form>
			    	      <div class="form-group">
			    	        <input class="form-control form-control-a" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" style="font-family: tr;" placeholder="Email/Phone No">
			    	        <input class="form-control form-control-b" id="exampleInputPassword1" type="password" style="font-family: tr;" placeholder="Password">
			    	      </div>
			    	      <a class="btn btn-primary btn-block" href="../userpanel.html">Sign In</a>
			    	      <div style="margin-top: 8px">
			    	      	<a class="btn btn-primary btn-block logbtn"  href="../userpanel.html">Reset Password</a>
			    	      	<a class="btn btn-primary btn-block logbtn pull-right" href="../userpanel.html">Sign Up</a>
			    	      </div>
			    	    </form>
			    	  </div>
			    	</div>
			    </div>
			  </div>
		</div>
	</div>
	</div>
	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>EDIT PROFILE</span></h1>
		</div>
		<form method="post" action="/AdminHome/<?php echo e(Session::get('user')->userId); ?>">
		<input type="hidden" name="aid" value="<?php echo e(Session::get('user')->userId); ?>">
		<input type="hidden" name="_method" value="put">
		<?php echo e(csrf_field()); ?>

		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row booking-card">
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;">FIRST NAME:</p>
								<input type="text" name="fname" id="input" class="form-control" value="<?php echo e($empId->firstName); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;">LAST NAME:</p>
								<input type="text" name="lname" id="input" class="form-control" value="<?php echo e($empId->lastName); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">EMAIL:</p>
								<input type="text" name="email"  id="input" class="form-control" value="<?php echo e($empId->email); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">MOBILE NO:</p>
								<input type="text" name="mobile"  id="input" class="form-control" value="<?php echo e($empId->phone); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">ADDRESS:</p>
								<input type="text" name="address"  id="input" class="form-control" value="<?php echo e($empId->address); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm;margin-top: 20px;">DIVISION:</p>

								<select class="form-control" name="division">
									<option value="dhaka" <?php if ($empId->city == 'dhaka') echo ' selected="selected"'; ?>>DHAKA</option>
									<option value="sylhet" <?php if ($empId->city == 'sylhet') echo ' selected="selected"'; ?>>SYLHET</option>
									<option value="khulna" <?php if ($empId->city == 'khulna') echo ' selected="selected"'; ?>>KHULNA</option>
									<option value="barisal" <?php if ($empId->city == 'barisal') echo ' selected="selected"'; ?>>BARISAL</option>
									<option value="rangpur" <?php if ($empId->city == 'rangpur') echo ' selected="selected"'; ?>>RANGPUR</option>
									<option value="rajshahi" <?php if ($empId->city == 'rajshahi') echo ' selected="selected"'; ?>>RAJSHAHI</option>
									<option value="mymensingh" <?php if ($empId->city == 'mymensingh') echo ' selected="selected"'; ?>>MYMENSINGH</option>
									<option value="chittagong" <?php if ($empId->city == 'chittagong') echo ' selected="selected"'; ?>>CHITTAGONG</option>
								</select>
							</div>
							
						
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">NEW PASSWORD:</p>
								<input type="password" name="npass"  id="input" class="form-control" value="<?php echo e($empId->password); ?>">
							</div>
							<div class="col-lg-6">
								<p style="font-size: 16px; font-family: tm; margin-top: 20px;">CONFIRM PASSWORD</p>
								<input type="password" name="cpass"  id="input" class="form-control" value="<?php echo e($empId->password); ?>">
							</div>
							
							
							<div class="col-lg-12">
								<input type="submit" value="UPDATE" class="btn btn-primary" style="margin-top: 20px; width: 100px;">
							</div>
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


<script src="/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="/js/custom.js"></script>
<script>jssor_1_slider_init();</script>
<script src="/js/jquery.easing.min.js"></script>
<script src="/js/scrolling-nav.js"></script>
</html>