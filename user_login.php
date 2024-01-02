<?php
	session_start();
	include('inc/config.php');
	
	$msg = "";
	
	if(isset($_POST['login'])){
		extract($_POST);
		
		$qs = "select * from user where(email='$u_email' and password='$u_password')";
		$data = mysqli_query($con,$qs);
		$row = mysqli_fetch_array($data);
		
		if(mysqli_num_rows($data)>0)
		{
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['user_name'] = $row['user_name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
			
			header('location:dashboard-add-listing.php');
		}
		else
		{
			$msg = "Please enter valid email and password";
		}
	}
?><!doctype html>
<html lang="en">
	
	<head>
    <!-- Basic Page Needs
		================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		
    <!-- Specific Meta
		================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Qayima is a modern presentation HTML5 Listing & Directory Template.">
    <meta name="keywords" content="HTML5, Template, Design, Listing, Directory, Listing Template" />
    <meta name="author" content="creative-wp">
		
    <!-- Titles
		================================================== -->
    <title>Qayima - Listing & Directory HTML Template</title>
		
    <!-- Favicons
		================================================== -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/android-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-icon-144x144.png">
		
    <!-- Custom Font
		================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800,900&display=swap" rel="stylesheet">
		
    <!-- CSS
		================================================== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/simple-scrollbar.css">
    <link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/rangeslider.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/chartist.min.css">
    <link rel="stylesheet" href="assets/css/jquery-steps.css">
    <link rel="stylesheet" href="assets/css/fontawesome.all.min.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
		
    <script src="assets/js/modernizr.min.js"></script>
	</head>
	
	<body>
		
    <!--********************************************************-->
    <!--********************* SITE CONTENT *********************-->
    <!--********************************************************-->
    <div class="site-content">
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Site Header
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<?php
				include('inc/header1.php');
			?><!--~~./ end site header ~~-->
			<!--~~~ Sticky Header ~~~-->
			<div id="sticky-header"></div><!--~./ end sticky header ~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Page Title Area
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="page-title-area pd-t-60 pd-b-45 bg-image bg-overlay" style="background-image:url('assets/images/header/1.jpg')">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="page-header-content">
								<!--./ advance-search-form -->
								<h2 class="page-title">User Login</h2>
							</div><!--~~./ page-header-content ~~-->
						</div>
					</div>
				</div><!--~~./ end container ~~-->
			</div><!--~~./ end page title area ~~-->  
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Error Page Blcok
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="error-page-block ptb-100">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="user-signin-area">
								<div class="form-content">
									<div class="form-content-signin">
										<div>
											<?php echo $msg; ?>
										</div>
										<form class="default-form signin-form" method="post">
											<div class="form-group">
												<input id="email" name="u_email" class="form-controllar" type="email" placeholder="Email Address">
												<span class="icon-user-1"></span>
											</div><!--/.form-group-->
											
											<div class="form-group">
												<input id="pass" name="u_password" class="form-controllar" type="password" placeholder="Password" required>
												<span class="icon-key3"></span>
												<div class="forget-pass">
													<a class="btn-password" href="#">Forget?</a>
												</div>
											</div><!--/.form-group-->
											
											<div class="form-btn-group">
												<button type="submit" name="login" class="btn btn-default btn-register">Login</button>
												
												<a href="user_registration.php"><button type="button" class="btn btn-default btn-signin btn-back">
													Sign Up
												</button></a>
											</div>
											<div class="reg-others-midea">
												<div class="text">
													Or Login With
												</div>
												<div class="midea-icons">
													<ul class="social-share">
														<li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
														<li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
														<li><a class="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
														<li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
													</ul>
												</div>
											</div>
										</form>  
										<div class="login-form-register-now">
											Dont have an account? <a class="btn-register-now" href="user_registration.php">Register Now</a>
										</div>
									</div>
									<!--~~~ Start Account Recovery Area ~~~--> 
									<div class="form-content-password">
										<form class="default-form password-form">
											<div class="form-group">
												<input id="re-email" name="email" class="form-controllar" type="email" placeholder="Email Address">
												<span class="icon-user-1"></span>
											</div><!--/.form-group-->
											
											<div class="form-group">
												<input id="re-pass-up" name="password" class="form-controllar" type="password" placeholder="Password">
												<span class="icon-key3"></span>
											</div><!--/.form-group-->
											
											<div class="form-group">
												<input id="re-pass-up-confirm" name="password" class="form-controllar" type="password" placeholder="Confirm Password">
												<span class="icon-key3"></span>
											</div><!--/.form-group-->
											
											<div class="form-btn-group pt-10">
												<button type="submit" class="btn btn-default btn-recet">
													Reset Password
												</button>
												<button type="button" class="btn btn-default btn-back">Back</button>
											</div>
											
										</form> 
										
									</div><!--~./ end account recovery area ~-->
								</div>
							</div><!--/.error-page-content-->
						</div><!--/.col-lg-6-->
					</div><!--/.row-->
				</div>
			</div><!--~./ end error page block ~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Work brand Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="work-brand-block bg-main ptb-100">
				<div class="container ml-t-15 ml-b-15">
					<div class="row">
						<div class="col-12">
							<!--~~ Start Brands Carousel ~~-->
							<div class="brands-carousel owl-carousel">
								<div class="brands-link">
									<img src="assets/images/brand/1.png" alt="logo">
								</div>
								<div class="brands-link">
									<img src="assets/images/brand/2.png" alt="logo">
								</div>
								<div class="brands-link">
									<img src="assets/images/brand/3.png" alt="logo">
								</div>
								<div class="brands-link">
									<img src="assets/images/brand/4.png" alt="logo">
								</div>
								<div class="brands-link">
									<img src="assets/images/brand/4.png" alt="logo">
								</div>
							</div><!--~./ end brands carousel ~-->
						</div>
					</div>
				</div>
			</div><!--~./ end popular brands block ~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Features Cat List Area
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="features-cat-list-area bg-blue-violet">
				<div class="container">
					<div class="row">
						<!--~~~~~ Start Cat List Item ~~~~~-->
						<div class="col-lg-3 col-md-6">
							<div class="cat-list-item">
								<div class="cat-title">
									<div class="icon">
										<span class="icon-sunbed"></span>
									</div>
									<div class="cat-name">Beauty & Health</div>
								</div>
								<ul class="list">
									<li><a href="#">Clinic<span>4</span></a></li>
									<li><a href="#">Fitness<span>6</span></a></li>
									<li><a href="#">Spa & Yoga<span>7</span></a></li>
									<li><a href="#">Salon<span>10</span></a></li>
									<li><a href="#">Skin Care<span>5</span></a></li>
								</ul>
							</div>
						</div><!--./ cat-list-item -->
						<!--~~~~~ Start Cat List Item ~~~~~-->
						<div class="col-lg-3 col-md-6">
							<div class="cat-list-item">
								<div class="cat-title">
									<div class="icon">
										<span class="icon-fast-food"></span>
									</div>
									<div class="cat-name">Travels</div>
								</div>
								<ul class="list">
									<li><a href="#">Healthy Foods<span>4</span></a></li>
									<li><a href="#">Take Away<span>6</span></a></li>
									<li><a href="#">Fast Foods<span>7</span></a></li>
									<li><a href="#">Desert<span>10</span></a></li>
									<li><a href="#">Ice Cream<span>5</span></a></li>
								</ul>
							</div>
						</div><!--./ cat-list-item -->
						<!--~~~~~ Start Cat List Item ~~~~~-->
						<div class="col-lg-3 col-md-6">
							<div class="cat-list-item">
								<div class="cat-title">
									<div class="icon">
										<span class="icon-cafe"></span>
									</div>
									<div class="cat-name">Entertainments</div>
								</div>
								<ul class="list">
									<li><a href="#">Night Life<span>4</span></a></li>
									<li><a href="#">Cinema<span>6</span></a></li>
									<li><a href="#">Theatre<span>7</span></a></li>
									<li><a href="#">Stadium<span>10</span></a></li>
									<li><a href="#">Art & Design<span>5</span></a></li>
								</ul>
							</div>
						</div><!--./ cat-list-item -->
						<!--~~~~~ Start Cat List Item ~~~~~-->
						<div class="col-lg-3 col-md-6">
							<div class="cat-list-item">
								<div class="cat-title">
									<div class="icon">
										<span class="icon-bag-1"></span>
									</div>
									<div class="cat-name">Shopping</div>
								</div>
								<ul class="list">
									<li><a href="#">Men<span>4</span></a></li>
									<li><a href="#">Women<span>6</span></a></li>
									<li><a href="#">Kids<span>7</span></a></li>
									<li><a href="#">Furniture<span>10</span></a></li>
									<li><a href="#">Jewellery<span>5</span></a></li>
								</ul>
							</div>
						</div><!--./ cat-list-item -->
					</div>
				</div>
			</div><!--~./ end features cat list area ~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start SITE FOOTER
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<?php
				include('inc/footer1.php');
			?><!--~./ end site footer ~-->
		</div><!--~~./ end site content ~~-->
		
    <!-- All The JS Files
		================================================== --> 
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
    <script src="assets/js/SyoTimer.js"></script>
    <script src="assets/js/theia-sticky-sidebar.min.js"></script>
    <script src="assets/js/ResizeSensor.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/packery-mode.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/simple-scrollbar.min.js"></script>
    <script src="assets/js/scrolla.jquery.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/rangeslider.min.js"></script>
    <script src="assets/js/jquery.trackpad-scroll-emulator.min.js"></script>
    <script src="assets/js/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/rater.min.js"></script>
    <script src="assets/js/jquery-steps.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script><!-- main-js -->
	</body>
</html>