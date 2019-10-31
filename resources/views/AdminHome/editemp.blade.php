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
									<li><a href="AdminHome/{{ Session::get('user')->userId }}">View Profile</a></li>
									<li><a href="AdminHome/{{ Session::get('user')->userId }}/edit">Edit Profile</a></li>
									<li><a href="AdminHome/{{ Session::get('user')->userId }}/changepassword">Change Password</a></li>
									<li><a href="AdminHome/{{ Session::get('user')->userId }}/changeprofilepicture">Change Profile Picture</a></li>
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
							<li><a class="js-scroll-trigger" href="AdminHome/{{ Session::get('user')->userId}}">Logged In As {{ Session::get('user')->userName }}</a></li>
							<li><a class="js-scroll-trigger" href="/logout">Logout</a></li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	</div>
	<form method="post" action="/employee/{{$userId->empId}}">
		<input type="hidden" name="id" value="{{$userId->empId}}">
		<input type="hidden" name="uname" value="{{$userId->empName}}">
		<input type="hidden" name="pass" value="{{$userId->password}}">
		<input type="hidden" name="_method" value="put">
		{{csrf_field()}}
	<div class="container-fluid pricing" id="pricing">
		<div class="row text-center title">
			<h1><span>EMPLOYEE INFORMATION</span></h1>
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
											<td class="right"><input type="text" name="firstName" value="{{$userId->firstName}}"></td>
										</tr>
										<tr>
											<td class="left">Last Name :</td>
											<td class="right"><input type="text" name="lastName" value="{{$userId->lastName}}"></td>
										</tr>
										<tr>
											<td class="left">E-mail :</td>
											<td class="right"><input type="text" name="email" value="{{$userId->email}}"></td>
										</tr>
										<tr>
											<td class="left">Mobile No :</td>
											<td class="right"><input type="text" name="phone" value="{{$userId->phone}}"></td>
										</tr>
										<tr>
											<td class="left">Address :</td>
											<td class="right"><input type="text" name="address" value="{{$userId->address}}"></td>
										</tr>
										<tr>
											<td class="left">Date Of Birth :</td>
											<td class="right"><input type="text" name="dob" value="{{$userId->dob}}"></td>
										</tr>
										<tr>
											<td class="left">Division :</td>
											<td class="right">
								<select class="form-control" name="city">
									<option value="dhaka" <?php if ($userId->city == 'dhaka') echo ' selected="selected"'; ?>>DHAKA</option>
									<option value="sylhet" <?php if ($userId->city == 'sylhet') echo ' selected="selected"'; ?>>SYLHET</option>
									<option value="khulna" <?php if ($userId->city == 'khulna') echo ' selected="selected"'; ?>>KHULNA</option>
									<option value="barisal" <?php if ($userId->city == 'barisal') echo ' selected="selected"'; ?>>BARISAL</option>
									<option value="rangpur" <?php if ($userId->city == 'rangpur') echo ' selected="selected"'; ?>>RANGPUR</option>
									<option value="rajshahi" <?php if ($userId->city == 'rajshahi') echo ' selected="selected"'; ?>>RAJSHAHI</option>
									<option value="mymensingh" <?php if ($userId->city == 'mymensingh') echo ' selected="selected"'; ?>>MYMENSINGH</option>
									<option value="chittagong" <?php if ($userId->city == 'chittagong') echo ' selected="selected"'; ?>>CHITTAGONG</option>
								</select>
											</td>
										</tr>
										<tr>
											<td class="left">User Status :</td>
											<td class="right">
								<select class="form-control" name="status">
									<option value="pending" <?php if ($userId->status == 'pending') echo ' selected="selected"'; ?>>PENDING</option>
									<option value="active" <?php if ($userId->status == 'active') echo ' selected="selected"'; ?>>ACTIVE</option>
									<option value="blocked" <?php if ($userId->status == 'blocked') echo ' selected="selected"'; ?>>BLOCKED</option>
								</select>
											</td>
										</tr>
										<tr>
											<td class="left">Role :</td>
											<td class="right">
								<select class="form-control" name="role">
									<option value="user" <?php if ($userId->role == 'user') echo ' selected="selected"'; ?>>USER</option>
									<option value="employee" <?php if ($userId->role == 'employee') echo ' selected="selected"'; ?>>EMPLOYEE</option>
									<option value="admin" <?php if ($userId->role == 'admin') echo ' selected="selected"'; ?>>ADMIN</option>
								</select>
											</td>
										</tr>
									</table>
									
									<input type="submit" class="btn btn-primary" style="margin-top: 20px; width: 100px;" value="UPDATE">
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