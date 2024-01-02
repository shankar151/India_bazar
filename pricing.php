<?php
	session_start();
	include('inc/config.php');
	//print_r($_SESSION);
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
    <link type="text/css" rel="stylesheet" href="css/subscription.css">
		
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
								<form action="#" class="advance-search-form">
									<div class="inner-form">
										<div class="advance-form-input search">
											<input id="search" type="text" placeholder="What are you looking for?" />
										</div><!--~./ search ~-->
										<select class="advance-form-input select-custom category">
											<option>Category</option>
											<option>Beauty</option>
											<option>Nightlife</option>
											<option>Hotels</option>
											<option>Automotive</option>
											<option>Travels</option>
											<option>Real Estates</option>
											<option>Shopping</option>
										</select><!--~./ location ~-->
										<select class="advance-form-input select-custom location">
											<option>Location </option>
											<option>New York</option>
											<option>California</option>
											<option>Washington</option>
											<option>New Jersey</option>
											<option>Los Angeles</option>
											<option>Florida</option>
										</select><!--~./ location ~-->
										<div class="advance-form-input submitbtn">
											<button class="btn btn-default" type="button">EXPLORE NOW</button>
										</div><!--~./ location ~-->
									</div>
								</form><!--./ advance-search-form -->
								<h2 class="page-title">Package Pricing</h2>
							</div><!--~~./ page-header-content ~~-->
						</div>
					</div>
				</div><!--~~./ end container ~~-->
			</div><!--~~./ end page title area ~~-->  
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Pricing Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="pricing-block pricing-style-one ptb-100">
				<div class="container">
					<!-- Title Row -->
					<div class="row">
						<div class="col-lg-8">
							<div class="section-title">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Subscription Table</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!-- /.col-lg-8 -->
						<!-- /.col-lg-4 -->
					</div><!-- /.row -->
					
					<h1 class="demo-title">
						Affordable Price For You<br>
					</h1>
					<div class="pricing-table">
						<?php
							$qs="select * from subscription where sub_id='1'";
							$data = mysqli_query($con,$qs);
							$row = mysqli_fetch_array($data,MYSQLI_BOTH);
							{
							?>
							<div class="ptable-item sh">
								<div class="ptable-single">
									<div class="ptable-header">
										<div class="ptable-title">
											<h2><?php echo $row['subscription_name']; ?></h2>
										</div>
										<div class="ptable-price">
											<h2><small>$</small><?php echo $row['subscription_price']; ?><span>/ M</span></h2>
										</div>
									</div>
									<div class="ptable-body">
										<div class="ptable-description">
											<ul>
												<li>Pure HTML & CSS</li>
												<li>Responsive Design</li>
												<li>Well-commented Code</li>
												<li>Easy to Use</li>
											</ul>
										</div>
									</div>
									<div class="ptable-footer">
										<div class="ptable-action">
											<?php
												if(isset($_SESSION['email']))
												{
											?>
													<a href="buy_sub.php?sub_id=<?php echo $row['sub_id']; ?>">Buy Now</a>
											<?php
												}
												else
												{
											?>
												<a href="user_registration.php">Buy Now</a>
											<?php
												}
											?>
										</div>
									</div>
								</div>
							</div>
							<?php
							}
						?>
						
						<?php
							$qs="select * from subscription where sub_id='2'";
							$data = mysqli_query($con,$qs);
							$row = mysqli_fetch_array($data,MYSQLI_BOTH);
							{
							?>
							<div class="ptable-item featured-item sh">
								<div class="ptable-single">
								<div class="ptable-header">
								<div class="ptable-status">
								<span>Hot</span>
								</div>
								<div class="ptable-title">
								<h2><?php echo $row['subscription_name']; ?></h2>
							</div>
							<div class="ptable-price">
								<h2><small>$</small><?php echo $row['subscription_price']; ?><span>/ M</span></h2>
							</div>
							</div>
							<div class="ptable-body">
								<div class="ptable-description">
									<ul>
										<li>Pure HTML & CSS</li>
										<li>Responsive Design</li>
										<li>Well-commented Code</li>
										<li>Easy to Use</li>
									</ul>
								</div>
							</div>
							<div class="ptable-footer">
								<div class="ptable-action">
									<?php
												if(isset($_SESSION['email']))
												{
											?>
													<a href="buy_sub.php?sub_id=<?php echo $row['sub_id']; ?>">Buy Now</a>
											<?php
												}
												else
												{
											?>
												<a href="user_registration.php">Buy Now</a>
											<?php
												}
											?>
								</div>
							</div>
							</div>
							</div>
							<?php
							}
						?>
						<?php
							$qs="select * from subscription where sub_id='3'";
							$data = mysqli_query($con,$qs);
							$row = mysqli_fetch_array($data,MYSQLI_BOTH);
							{
							?>
							<div class="ptable-item sh">
								<div class="ptable-single">
									<div class="ptable-header">
										<div class="ptable-title">
											<h2><?php echo $row['subscription_name']; ?></h2>
										</div>
										<div class="ptable-price">
											<h2><small>$</small><?php echo $row['subscription_price']; ?><span>/ M</span></h2>
										</div>
									</div>
									<div class="ptable-body">
										<div class="ptable-description">
											<ul>
												<li>Pure HTML & CSS</li>
												<li>Responsive Design</li>
												<li>Well-commented Code</li>
												<li>Easy to Use</li>
											</ul>
										</div>
									</div>
									<div class="ptable-footer">
										<div class="ptable-action">
											<?php
												if(isset($_SESSION['email']))
												{
											?>
													<a href="buy_sub.php?sub_id=<?php echo $row['sub_id']; ?>">Buy Now</a>
											<?php
												}
												else
												{
											?>
												<a href="user_registration.php">Buy Now</a>
											<?php
												}
											?>
										</div>
									</div>
								</div>
							</div>
							
							<?php
							}
						?>
					</div>
					
					<!-- /.row -->
				</div><!-- /.container -->
			</div><!--~~./ end pricing block ~~-->
			
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
			<footer class="site-footer bg-blue-violet footer-default-style pd-t-60 pd-b-60">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-3">
							<div class="footer-logo">
								<a href="index.html"><img src="assets/images/logo/footer-logo.png" alt="Logo"></a>
							</div><!-- /.footer-logo -->
						</div><!--~./ col-lg-3 ~-->
						<div class="col-lg-6">
							<ul class="footer-menu">                        
								<li><a href="#">Join Us</a></li>
								<li><a href="#">Privcay Policy</a></li>
								<li><a href="#">Support Center</a></li>
								<li><a href="#">Contact</a></li>
							</ul><!--  /.footer-menu -->
						</div><!--~./ col-lg-6 ~-->
						<div class="col-lg-3">
							<ul class="footer-social">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul><!--  /.footer-social -->
						</div><!--~./ col-lg-3 ~-->
					</div>
				</div>
			</footer><!--~./ end site footer ~-->
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
    <script src="assets/js/main.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		<!-- main-js -->
	</body>
</html>