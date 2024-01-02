<?php
	session_start();
	include('inc/config.php');
	
	$user_id = $_SESSION['user_id'];
	
	$sub_plan="";
	$first_name="";
	$last_name="";
	$email_p="";
	$phone="";
	$gender="";
	$address="";
	$street="";
	$city="";
	$state="";
	$country="";
	$zipcode="";
	$card_name="";
	$card_no="";
	$dat="";
	$cvv="";
	
	if(isset($_GET['sub_id']))
	{
		$sub_id = $_GET['sub_id'];
		
		$qs = "select * from subscription where sub_id='$sub_id'";
		$data = mysqli_query($con,$qs);
		$row = mysqli_fetch_array($data,MYSQLI_BOTH);
	}
		
	if(isset($_POST['purchase']))
	{
		extract($_POST);
		
		$qs = "insert into user_sub(sub_id,user_id,first_name,last_name,email_p,phone,gender,address,street,city,state,country,zipcode,card_name,card_no,dat,cvv)values('$sub_plan','$user_id','$first_name','$last_name','$email_p','$phone','$gender','$address','$street','$city','$state','$country','$zipcode','$card_name','$card_no','$dat','$cvv')";
		mysqli_query($con,$qs);
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
			
			<div class="dashboard-contant dashboard-setting-area">
				<div class="container-fluid">
					<br/><br/><br/><br/>
					<div class="contact-block-area">
						<div id="contact_map"></div>
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-9">
									<div class="contact-form-area" data-animate="hg-fadeInUp">
										<form method="post"  class="form-control">
											<fieldset>
												<legend><center><h3><font color="red" face="Terminal"><?php echo $row['subscription_name'];?> Plan</font></h3></center></legend>
												<legend><b><i><h5>Basic Details</h5></i></b></legend><br/>
												<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" type="hidden" value="<?php echo $row['sub_id'];?>" name="sub_plan"readonly>
														</div>
													</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="first_name" type="text" placeholder="First Name" />
														</div>
													</div><!-- /.col-md-6 -->                 
													<div class="col-md-6">
														<div class="form-group">
															<input  class="form-control" name="last_name" type="text" placeholder="Last Name" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="email_p" type="email" placeholder="Email Address"/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" type="text" id="phone" name="phone" onkeypress="phoneno()" maxlength="10" placeholder="Mobile Number">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<table>
																<tr>
																	<td><label>Gender</label></td>
																</tr>
																<tr>
																	<td><label>Male</label><input name="gender" type="radio" value="male"/>&nbsp;</td>
																	<td><label>Female</label><input name="gender" type="radio" value="female"/>&nbsp;</td>
																	<td><label>Others</label><input name="gender" type="radio" value="other"/>&nbsp;</td>
																</tr>
															</table>
														</div>
													</div>
													
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" type="text" value="$<?php echo $row['subscription_price'];?>"readonly>
														</div>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<legend><b><i><h5>Address</h5></i></b></legend><br/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="address" type="text" placeholder="House no"/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="street" type="text" placeholder="Street"/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="city" type="text" placeholder="City"/>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="state" type="text" placeholder="State" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="country" type="text" placeholder="Country" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="zipcode" type="number" placeholder="Zip-code" />
														</div>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<legend><b><i><h5>Debit Card Details</h5></i></b></legend><br/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="card_name" type="text" placeholder="Name On Card" />
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="card_no" type="text" placeholder="0000-0000-0000-0000"/>
															<label>Card No</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" name="dat" type="text" placeholder="mm/yy" />
															<label>Expiry Date</label>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<input class="form-control" type="number" name="cvv" placeholder="CVV">
														</div>
													</div>
												</div>
											</fieldset>
											<div class="col-md-12 text-center">
												<button type="submit" name="purchase" class="btn btn-default btn-black btn-contact">Purchase</button>
											</div><!-- /.col-md-12 -->
										</div><!-- /.row -->
									</form><!-- /.contact-form -->
								</div><!-- /.contact-form-area -->
							</div><!-- /.col-lg-9 -->
						</div><!-- /.row -->
					</div>
				</div>
			</div>
		</div>
		
		
		<!--~~./ end pricing block ~~-->
		
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
	<script>        
		function phoneno(){          
			$('#phone').keypress(function(e) {
				var a = [];
				var k = e.which;
				
				for (i = 48; i < 58; i++)
				a.push(i);
				
				if (!(a.indexOf(k)>=0))
				e.preventDefault();
			});
		}
	</script>
	<!-- main-js -->
</body>
</html>