<?php
	session_start();
	
	if(!isset($_SESSION['admin_email']))
	{
		header('location:admin_login.php');
	}
?>
<!doctype html>
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
				Start Dashboard Site Content
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="dashboard-site-content">
				<?php include('inc_a/a_sidepanel.php');?>
				<div class="dashboard-contant-area">
					<!--~~~~~ Start dashboard Header ~~~~~--> 
					<?php include('inc_a/header.php');?>
					<!--~./ end dashboard header ~-->
					
					<!--~~~~~ Start dashboard Contant ~~~~~--> 
					<div class="dashboard-contant">
						<div id="dashboard_overview" >
							<div class="container-fluid">
								<div class="row">
									<div class="col-12">
										<div class="dashboard-page-title">
											<h3 class="title">Admin Dashboard</h3>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="default-form-area">
											<h3 class="headline">Net Sales</h3>
											<div class="row">
												<div class="col-xl-4">
													<h6>This Week</h6>
													<h4 class="color-primary">$5500.00</h4>
												</div>
												<div class="col-xl-4">
													<h6>Previous Week</h6>
													<h4 class="color-primary">$6550.00</h4>
												</div>
											</div>
											<div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
										</div><!--~./ end default form area ~-->
									</div>
									<div class="col-lg-3">
										<div class="default-form-area">
											<h3 class="headline">tickets</h3>
											<div class="tickets text-center">
												<div class="position-relative d-inline-block">
													<div id="circle"></div>
													<div class="seat-content">
														<h2>90</h2>
														<span>Sold Seats</span>
													</div>
												</div>
												<div class="row">
													<div class="col-6">
														<h6>Total Seats</h6>
														<h4 class="color-primary">$5500.00</h4>
													</div>
													<div class="col-6">
														<h6>Sold Seats</h6>
														<h4 class="color-primary">$6550.00</h4>
													</div>
												</div>
											</div><!--~./ end tickets ~-->
										</div><!--~./ end default form area ~-->
									</div>
									<div class="col-lg-3">
										<div class="default-form-area">
											<h3 class="headline">upcoming events</h3>
											<div class="upcoming-events">
												<div class="table-responsive">
													<table class="table">
														<tr>
															<td><img src="assets/images/testimonials/1.png" alt=""></td>
															<td>Event Name
																<a href="#"><span class="icon-location"></span> Location</a>
															</td>
														</tr>
														<tr>
															<td><img src="assets/images/testimonials/2.png" alt=""></td>
															<td>Event Name
																<a href="#"><span class="icon-location"></span> Location</a>
															</td>
														</tr>
														<tr>
															<td><img src="assets/images/testimonials/3.png" alt=""></td>
															<td>Event Name
																<a href="#"><span class="icon-location"></span> Location</a>
															</td>
														</tr>
														<tr>
															<td><img src="assets/images/testimonials/1.png" alt=""></td>
															<td>Event Name
																<a href="#"><span class="icon-location"></span> Location</a>
															</td>
														</tr>
													</table>
												</div>
											</div><!--~./ end upcoming events ~-->
										</div><!--~./ end default form area ~-->
									</div>
								</div>
								
								<div class="row">
									<div class="col-lg-6">
										<div class="default-form-area recent-sells">
											<h3 class="headline">Recent Booking</h3>
											<div class="upcoming-events">
												<div class="row">
													<div class="col-xl-4">
														<h6>This Week</h6>
														<h4 class="color-primary">$5500.00</h4>
													</div>
													<div class="col-xl-4">
														<h6>Previous Week</h6>
														<h4 class="color-primary">$6550.00</h4>
													</div>
												</div>
												<div class="table-responsive pd-t-20 mt-15">
													<table class="table">
														<tr>
															<td><img src="assets/images/testimonials/2.png" alt=""></td>
															<td>John Doe
																<a href="#"> Event Name Here</a>
															</td>
															<td>X1</td>
															<td>165</td>
															<td>
																<div class="dropdown custom-dropdown">
																	<div data-toggle="dropdown">
																		<i class="fa fa-ellipsis-v"></i>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#">Edit</a>
																		<a class="dropdown-item" href="#">Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td><img src="assets/images/testimonials/1.png" alt=""></td>
															<td>John Doe
																<a href="#"> Event Name Here</a>
															</td>
															<td>X1</td>
															<td>165</td>
															<td>
																<div class="dropdown custom-dropdown">
																	<div data-toggle="dropdown">
																		<i class="fa fa-ellipsis-v"></i>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#">Edit</a>
																		<a class="dropdown-item" href="#">Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td><img src="assets/images/testimonials/3.png" alt=""></td>
															<td>John Doe
																<a href="#"> Event Name Here</a>
															</td>
															<td>X1</td>
															<td>165</td>
															<td>
																<div class="dropdown custom-dropdown">
																	<div data-toggle="dropdown">
																		<i class="fa fa-ellipsis-v"></i>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#">Edit</a>
																		<a class="dropdown-item" href="#">Delete</a>
																	</div>
																</div>
															</td>
														</tr>
														<tr>
															<td><img src="assets/images/testimonials/1.png" alt=""></td>
															<td>John Doe
																<a href="#"> Event Name Here</a>
															</td>
															<td>X1</td>
															<td>165</td>
															<td>
																<div class="dropdown custom-dropdown">
																	<div data-toggle="dropdown">
																		<i class="fa fa-ellipsis-v"></i>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item" href="#">Edit</a>
																		<a class="dropdown-item" href="#">Delete</a>
																	</div>
																</div>
															</td>
														</tr>
													</table>
												</div>
											</div><!--~./ end upcoming events ~-->
										</div><!--~./ end default form area ~-->
									</div>
									
									<div class="col-lg-3">
										<div class="default-form-area">
											<h3 class="headline">Total Seats</h3>
											<div class="total-seats text-center">
												<div class="position-relative d-inline-block">
													<div id="circle1"></div>
													<div class="seat-content">
														<h2>350</h2>
														<span>Total Sells</span>
													</div>
												</div>
												
												<div class="row">
													<div class="col-6">
														<h6>Total Seats</h6>
														<h4 class="color-primary">$5500.00</h4>
													</div>
													<div class="col-6">
														<h6>Sold Seats</h6>
														<h4 class="color-primary">$6550.00</h4>
													</div>
												</div>
											</div><!--~./ end total seats ~-->
											<h5 class="m-t-30 m-b-15">Sold Seats <span class="pull-right">95</span></h5>
											<div class="progress">
												<div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height:4px;" role="progressbar"><span class="sr-only">60% Complete</span>
												</div>
											</div><!--~./ end progress ~-->
										</div><!--~./ end default form area ~-->
									</div>
									
									<div class="col-lg-3">
										<div class="default-form-area">
											<h3 class="headline">Online Sells</h3>
											<div class="row">
												<div class="col">
													<h6>Rough Cost</h6>
													<h4 class="color-primary">$5500.00</h4>
												</div>
											</div>
											<div id="simple-line-chart2" class="ct-chart ct-golden-section"></div>
										</div><!--~./ end default form area ~-->
										
										<div class="default-form-area">
											<h3 class="headline">Email Compaing</h3>
											<div class="campaign-progress">
												<p>Send Emails <span class="pull-right">+165</span></p>
												<div class="progress">
													<div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height:4px;" role="progressbar"><span class="sr-only">60% Complete</span>
													</div>
												</div>
												<p>Clicks <span class="pull-right">+355</span></p>
												<div class="progress">
													<div class="progress-bar bg-danger wow animated progress-animated" style="width: 85%; height:4px;" role="progressbar"><span class="sr-only">60% Complete</span>
													</div>
												</div>
											</div><!--~./ end campaign progress ~-->
										</div><!--~./ end default form area ~-->
									</div>
								</div>
							</div>
						</div>
					</div><!--~./ end dashboard contant ~-->
				</div>
			</div><!--~./ end dashboard site content ~-->
		</div>
    <!--~./ end site content ~-->
		
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