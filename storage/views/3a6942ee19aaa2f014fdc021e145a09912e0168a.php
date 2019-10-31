<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VIEW PROFILE</title>
	<link rel="icon" href="/images/larent.png">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/dp/bootstrap-datepicker.css">
	<link href="../css/style.css" rel="stylesheet">
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
							<li><a class="js-scroll-trigger" href="../../UserHome">HOME</a></li>
							<li><a class="js-scroll-trigger" href="../index.html#pricing">PRICING</a></li>
							<li><a class="js-scroll-trigger" href="aboutus">ABOUT US</a></li>
							<li><a class="js-scroll-trigger" href="contactus">CONTACT US</a></li>
							<li class="dropdown">
								<a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROFILE <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="booking-history.html">My Bookings</a></li>
									<li><a href="../index.html#contactus">Send Message</a></li>
									<li><a href="/UserHome/{id}">View Profile</a></li>
									<li><a href="/UserHome/<?php echo e(Session::get('user')->userId); ?>/edit">Edit Profile</a></li>
									<li><a href="/UserHome/<?php echo e(Session::get('user')->userId); ?>/changeprofilepicture">Change Profile Picture</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="">LOGOUT</a></li>
								</ul>
							</li>
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
			<h1><span>MY INFORMATION</span></h1>
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
											<td class="left">First Name :</td>
											<td class="right"><?php echo e($userId->firstName); ?></td>
										</tr>
										<tr>
											<td class="left">Last Name :</td>
											<td class="right"><?php echo e($userId->lastName); ?></td>
										</tr>
										<tr>
											<td class="left">E-mail :</td>
											<td class="right"><?php echo e($userId->email); ?></td>
										</tr>
										<tr>
											<td class="left">Mobile No :</td>
											<td class="right"><?php echo e($userId->phone); ?></td>
										</tr>
										<tr>
											<td class="left">Address :</td>
											<td class="right"><?php echo e($userId->address); ?></td>
										</tr>
										<tr>
											<td class="left">Division :</td>
											<td class="right"><?php echo e($userId->division); ?></td>
										</tr>
										<tr>
											<td class="left">City :</td>
											<td class="right"><?php echo e($userId->city); ?></td>
										</tr>
									</table>
									<a href="/UserHome/<?php echo e(Session::get('user')->userId); ?>/edit"><button type="button" class="btn btn-primary" style="margin-top: 20px; width: 100px;">EDIT</button></a>
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