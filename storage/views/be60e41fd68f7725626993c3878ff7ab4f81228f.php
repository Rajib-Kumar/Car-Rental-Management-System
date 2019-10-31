<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LARENT</title>
	<link rel="icon" href="images/larent.png">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/fontawesome-all.css">
</head>
<body style="overflow-x: hidden;">
	<?php echo e(csrf_field()); ?>

	<header class="container-fluid" id="home">
		<div class="container">
			<div class="row">
				<img src="images/larent.png" class="logo" alt="Image">
				<div class="header-right pull-right">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-3">
								<img src="images/hotline.svg" alt="">
							</div>
							<div class="col-lg-9">
								<h3>Our Hotline:</h3>
								<p>+8801625423992</p>
							</div>
						</div>
						<div class="row logreg">
							<div class="col-lg-3">
								<img src="images/email.svg" alt="">
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
							<li><a class="js-scroll-trigger" href="/home">HOME</a></li>
							<li><a class="js-scroll-trigger" href="#pricing">PRICING</a></li>
							<li><a class="js-scroll-trigger" href="#aboutus">ABOUT US</a></li>
							<li><a class="js-scroll-trigger" href="/home">CONTACT US</a></li>
							<li><a href="/login">LOGIN</a></li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	<div class="container-fluid" >
		<div class="row">
			    <div id="jssor_1" class="slsz" style="position:relative;margin:0 auto;top:0px;left:0px;overflow:hidden;visibility:hidden;">
			        <!-- Loading Screen -->
			        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
			            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
			        </div>
			        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
			            <div data-p="225.00">
			                <img data-u="image" src="images/001.png" />
			            </div>
			            <div data-p="225.00">
			                <img data-u="image" src="images/002.png" />
			            </div>
			        </div>
			        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
			            <div data-u="prototype" class="i" style="width:16px;height:16px;">
			                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
			                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
			                </svg>
			            </div>
			        </div>
			    </div>
		</div>
	</div>
	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>PRICING</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row body">
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>AIRPORT TRANSFER</h2>
								<h3>Pick & Drop to and from Airport</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 1250++</span><br>
										Sedan Car/Microbus <br>
										Travel from and to the Hazrat Shahjalal International Airport.
									</p>
								</div>
								<div class="col-lg-5">
									<img src="images/pr1.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="pricing/air-trans.html"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>HOURLY CAR RENTAL</h2>
								<h3>Only for Travelling inside Dhaka Metro</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 1750++</span><br>
										Sedan Car/Microbus <br>
										Flexible 4 to 6 Hours Service
										Including Fuel Cost
									</p>
								</div>
								<div class="col-lg-5">
									<img src="images/pr3.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="pricing/hcr.html"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>DAILY CAR RENTAL INSIDE DHAKA</h2>
								<h3>Excluding Fuel & Driver Cost</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 2500++</span><br>
										Sedan Car/Microbus <br>
										Various Type of Cars <br>
										No Mileage Limit, Hidden Cost
									</p>
								</div>
								<div class="col-lg-5">
									<img src="images/pr2.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="pricing/dcri.html"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row body x1" style="margin-top: 10px;">
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>DAILY CAR RENTAL OUTSIDE DHAKA</h2>
								<h3>Excluding Fuel & Driver Cost</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 3000++</span><br>
										Travel Anywhere <br>
										No Mileage Limit <br>
										Experienced Driver
									</p>
								</div>
								<div class="col-lg-5">
									<img src="images/pr7.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="pricing/dcro.html"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>MONTHLY CAR RENTAL</h2>
								<h3>Flexible Monthly Basis Service</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 45000++</span><br>
										Our Multi-Month Program is available on a wide range of vehicles.
									</p>
								</div>
								<div class="col-lg-5">
									<img src="images/pr6.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="pricing/mcr.html"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row one">
							<div class="card text-center">
								<h2>OFFICE PICK & DROP</h2>
								<h3>Tranportation Solution for Office Going People</h3>
								<hr>
								<div class="col-lg-7">
									<p>
										<span>৳ 7200</span><br>
										Microbus <br>
										This rate is for
										22 Working Days/Person,
										Shared Ride
									</p>
								</div>
								<div class="col-lg-5">
									<img src="images/pr5.png" class="img-responsive" alt="">
								</div>
								<div class="col-lg-12">
									<a href="pricing/opd.html"><button type="button" class="btn btn-primary pull-left">View more details</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid pricing aboutus" id="aboutus">
		<div class="row text-center title">
			<h1><span>ABOUT US</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row body text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, officiis itaque veritatis dolorum, aliquam totam quasi commodi provident fugiat perferendis vel quae deleniti sint illum in perspiciatis voluptas assumenda atque?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque laboriosam quisquam perspiciatis error repellat ex doloremque ab consequatur recusandae, nulla tempore iusto praesentium quidem, vitae sequi et impedit nihil ducimus. <br><br>
					Sed vitae pretium quam. Quisque non pulvinar augue. Etiam congue faucibus fringilla. Nunc venenatis scelerisque augue quis rutrum. Praesent nec magna sit amet odio volutpat condimentum. Nullam semper tristique lorem, at rutrum dui imperdiet eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vitae cursus nunc. Proin felis velit, egestas ac massa eget, fermentum fermentum ante. Nunc ac arcu sit amet libero vestibulum dignissim et ut quam. Pellentesque sed velit id massa dapibus eleifend. <br><br>
					Donec imperdiet sapien a magna blandit, fringilla finibus tellus pretium. Fusce tortor urna, efficitur a iaculis in, consectetur sit amet lacus. Nulla facilisi. Donec velit magna, aliquet id ipsum eget, fringilla ullamcorper est. Praesent at velit cursus, tincidunt dolor non, pulvinar ligula. Integer ex lacus, rutrum accumsan quam ultrices, facilisis suscipit tortor. In sollicitudin justo ut congue imperdiet. Phasellus eu semper lacus. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, officiis itaque veritatis dolorum, aliquam totam quasi commodi provident fugiat perferendis vel quae deleniti sint illum in perspiciatis voluptas assumenda atque?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque laboriosam quisquam perspiciatis error repellat ex doloremque ab consequatur recusandae, nulla tempore iusto praesentium quidem, vitae sequi et impedit nihil ducimus. <br><br>
					Sed vitae pretium quam. Quisque non pulvinar augue. Etiam congue faucibus fringilla. Nunc venenatis scelerisque augue quis rutrum. Praesent nec magna sit amet odio volutpat condimentum. Nullam semper tristique lorem, at rutrum dui imperdiet eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras vitae cursus nunc. Proin felis velit, egestas ac massa eget, fermentum fermentum ante. Nunc ac arcu sit amet libero vestibulum dignissim et ut quam. Pellentesque sed velit id massa dapibus eleifend. <br><br>
					Donec imperdiet sapien a magna blandit, fringilla finibus tellus pretium. Fusce tortor urna, efficitur a iaculis in, consectetur sit amet lacus. Nulla facilisi. Donec velit magna, aliquet id ipsum eget, fringilla ullamcorper est. Praesent at velit cursus, tincidunt dolor non, pulvinar ligula. Integer ex lacus, rutrum accumsan quam ultrices, facilisis suscipit tortor. In sollicitudin justo ut congue imperdiet. Phasellus eu semper lacus. <br><br>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid pricing" id="contactus">
		<div class="row text-center title">
			<h1><span>CONTACT US</span></h1>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 contactus">
						<div class="row">
							<form method="POST" action="/message">
								<?php echo e(csrf_field()); ?>

								<input type="text" name="role" id="" hidden="hidden" value="public">
								<div class="form-group">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="row">
										<input type="text" class="form-control" required="required" name="name"  placeholder="Your Name*">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="row">
										<input type="email" class="form-control pull-right" required="required" name="email"  placeholder="Your Email*">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<textarea name="message" id="input" class="form-control" rows="6" required="required" name="message" placeholder="Your Message*"></textarea>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="row">
										<button type="submit" class="btn btn-primary" style="margin-top: 20px; margin-bottom: 50px;left: 50%;transform:translate(-50%);position: relative;">SEND MESSAGE</button>
									</div>
								</div>
							</form>
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

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-hover-dropdown.min.js"></script>
<script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="js/custom.js"></script>
<script>jssor_1_slider_init();</script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
</html>