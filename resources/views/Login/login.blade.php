<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="icon" href="images/larent.png">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/dp/bootstrap-datepicker.css">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<link rel="stylesheet" href="css/pricing.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/moment.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
</head>
<body style="overflow-x: hidden;">
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
							<li><a class="js-scroll-trigger" href="{{ URL::route('home') }}#pricing">PRICING</a></li>
							<li><a class="js-scroll-trigger" href="{{ URL::route('home') }}#aboutus">ABOUT US</a></li>
							<li><a class="js-scroll-trigger" href="{{ URL::route('home') }}#contactus">CONTACT US</a></li>
							<li><a href="/login" >LOGIN</a></li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	</div>
	@if(session('message'))
		@component('components/message')
				@slot('alertType')
					alert-danger
				@endslot
				@slot('width')
				  24%
				@endslot
				@slot('message')
				   {{session('message')}}
				@endslot
		@endcomponent
	@endif
	<div class="container-fluid pricing" id="pricing">
		<div >
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			    	<div class="card card-login mx-auto mt-5 logcard ">
			    	  <div class="card-header lgnd text-center" style="font-family: tb">LOGIN</div>
			    	  <div class="card-body cbody">
			    	    <form method="post">
			    	    	{{csrf_field()}}
			    	      <div class="form-group">
			    	        <input class="form-control form-control-a" id="exampleInputEmail1"  style="font-family: tr;" placeholder="Username" name="userName"><br>
			    	        <input class="form-control form-control-b" id="exampleInputPassword1" type="password" style="font-family: tr;" placeholder="Password" name="password">
			    	      </div>
			    	      <input class="btn btn-primary btn-block" type="submit" name="" value="Sign In">
			    	      <div style="margin-top: 8px">
			    	      	<a class="btn btn-primary btn-block logbtn"  href="/publicHome">Reset Password</a>
			    	      	<a class="btn btn-primary btn-block logbtn pull-right" href="/home/create">Sign Up</a>
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


<script src="js/bootstrap-hover-dropdown.min.js"></script>
<script src="js/jssor.slider-27.1.0.min.js" type="text/javascript"></script>
<script src="js/custom.js"></script>
<script>jssor_1_slider_init();</script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
</html>