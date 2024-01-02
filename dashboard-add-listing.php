<?php
	session_start();
	include('inc/config.php');
	
	echo $user_id = $_SESSION['user_id'];
	
	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
	}
	
	$radio_cat="";
	$list_title="";
	$keyword="";
	$desc="";
	$price="";
	$photo1="";
	$photo2="";
	$photo3="";
	$address="";
	$temp_add="";
	$state="";
	$city="";
	$country="";
	$zipcode="";
	
	if(isset($_POST['save']))
	{
		extract($_POST);
		
		$pic1 = $_FILES['photo1']['name'];
		$pic2 = $_FILES['photo2']['name'];
		$pic3 = $_FILES['photo3']['name'];
		
		$qs = "insert into ad_list(u_id,cat,list_title,keyword,descr,price,photo1,photo2,photo3,address,temp_add,state,city,country,zipcode) values('$user_id','$radio_cat','$list_title','$keyword','$desc','$price','$pic1','$pic2','$pic3','$address','$temp_add','$state','$city','$country','$zipcode')";
		
		mysqli_query($con,$qs) or die(mysqli_error($con));
		
		move_uploaded_file($_FILES['photo1']['tmp_name'], "upload/".$pic1);
		move_uploaded_file($_FILES['photo2']['tmp_name'], "upload/".$pic2);
		move_uploaded_file($_FILES['photo3']['tmp_name'], "upload/".$pic3);
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
				<?php
					include('inc/sidepanel.php');
				?>
				
				<div class="dashboard-contant-area">
					<!--~~~~~ Start dashboard Header ~~~~~--> 
					<?php include('inc/u_admin_header.php'); ?>
					<!--~./ end dashboard header ~-->
					
					<!--~~~~~ Start dashboard Contant ~~~~~--> 
					<div class="dashboard-contant dashboard-add-listing-area">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="dashboard-page-title">
										<h3 class="title">Ad New Listing</h3>
									</div>
								</div>
							</div>
							<form method="post" enctype="multipart/form-data">
								
								<div class="row">
									<div class="col-12">
										
										<div class="row">
											<div class="select-todo-cat-area" >
												<div class="single-radio-cat services" style="width:150px">
													<input id="radio_cat1" type="radio" name="radio_cat" value="furniture" checked>
													<label for="radio_cat1">
														<span class="icon-wrench"></span>
														Furniture
													</label>
												</div>
												<div class="single-radio-cat rantal"style="width:150px">
													<input id="radio_cat2" type="radio" name="radio_cat" value="appliance">
													<label for="radio_cat2">
														<span class="icon-building"></span>
														Appliance
													</label>
												</div>
												<div class="single-radio-cat occassion"style="width:150px">
													<input id="radio_cat3" type="radio" name="radio_cat" value="education">
													<label for="radio_cat3">
														<span class="icon-dress"></span>
														Education
													</label>
												</div>
												<div class="single-radio-cat shoping"style="width:150px">
													<input id="radio_cat4" type="radio" name="radio_cat" value="fashion">
													<label for="radio_cat4">
														<span class="icon-shopping-cart"></span>
														Fashion
													</label>
												</div>
												<div class="single-radio-cat shoping"style="width:150px">
													<input id="radio_cat5" type="radio" name="radio_cat" value="old_coins_stamp">
													<label for="radio_cat5">
														<span class="icon-shopping-cart"></span>
														Old Coins & Stamp
													</label>
												</div>
												<div class="single-radio-cat shoping"style="width:150px">
													<input id="radio_cat6" type="radio" name="radio_cat" value="jobs">
													<label for="radio_cat6">
														<span class="icon-shopping-cart"></span>
														Jobs
													</label>
												</div>
												
												<div class="single-radio-cat services"style="width:150px">
													<input id="radio_cat7" type="radio" name="radio_cat" value="vehicle">
													<label for="radio_cat7">
														<span class="icon-wrench"></span>
														Vehicle
													</label>
												</div>
												<div class="single-radio-cat rantal"style="width:150px">
													<input id="radio_cat8" type="radio" name="radio_cat" value="electronic_item">
													<label for="radio_cat8">
														<span class="icon-building"></span>
														Electronic Item
													</label>
												</div>
												<div class="single-radio-cat"style="width:150px">
													<input id="radio_cat9" type="radio" name="radio_cat" value="real_estate">
													<label for="radio_cat9">
														<span class="icon-dress"></span>
														Real Estate
													</label>
												</div>
												<div class="single-radio-cat"style="width:150px">
													<input id="radio_cat10" type="radio" name="radio_cat" value="books">
													<label for="radio_cat10">
														<span class="icon-shopping-cart"></span>
														Books
													</label>
												</div>
												<div class="single-radio-cat"style="width:150px">
													<input id="radio_cat11" type="radio" name="radio_cat" value="website_directory">
													<label for="radio_cat11">
														<span class="icon-shopping-cart"></span>
														Website Directory
													</label>
												</div>
												<div class="single-radio-cat"style="width:150px">
													<input id="radio_cat12" type="radio" name="radio_cat" value="services">
													<label for="radio_cat12">
														<span class="icon-shopping-cart"></span>
														Services
													</label>
												</div>
											</div>
											
										</div>
										<div id="add-listing-area">
											<!--~~./ step-steps ~~-->
											<div class="step-content">
												<div class="step-tab-panel step-tab-info" id="tab_step1"> 
													<div><h4><i><u><center></center></u></i></h4></div><br>
													<div class="tab-from-content">
														<form method="post" enctype="multipart/form-data" class="default-form" id="listinfo" name="listinfo">
															<div class="row">
																<div class="col-lg-3 col-md-6">
																	<div class="form-group">
																		<input type="text" class="form-controllar" placeholder="Listing Title" name="list_title">
																	</div>
																</div>
																<div class="col-lg-3 col-md-6">
																	<div class="form-group">
																		<input type="text" class="form-controllar" name="keyword" placeholder="Keywords should be separated by commas">
																	</div>
																</div>
																<div class="col-lg-3 col-md-6">
																	<div class="form-group">
																		<input type="text" class="form-controllar" placeholder="Description" name="desc">
																	</div>
																</div>
																<div class="col-lg-3 col-md-6">
																	<div class="form-group">
																		<input type="text" class="form-controllar" placeholder="Listing price" name="price">
																	</div>
																</div>
															</div>
														</form><!--~~./ default-form ~~-->
													</div>
												</div><!--~~./ step-tab-info ~~-->
												
												<div class="step-tab-panel step-tab-gallery" id="tab_step2">
													<div><h4><i><u><center></center></u></i></h4></div><br><br/>
													<div class="tab-from-content">
														
														<div class="row">
															<div class="col-4">
																<div class="custom-file">
																	<div class="add-gallery-text">
																		<i class="icon-file-picture"></i>
																		<span> Click here or drop files to upload</span>
																	</div>
																	<input name="photo1" type="file">
																</div>
															</div>
															<div class="col-4">
																<div class="custom-file">
																	<div class="add-gallery-text">
																		<i class="icon-file-picture"></i>
																		<span> Click here or drop files to upload</span>
																	</div>
																	<input name="photo2" type="file">
																</div>
															</div>
															<div class="col-4">
																<div class="custom-file">
																	<div class="add-gallery-text">
																		<i class="icon-file-picture"></i>
																		<span> Click here or drop files to upload</span>
																	</div>
																	<input name="photo3" type="file">
																</div>
															</div>
														</div>
														<!--~~./ default-form ~~-->
													</div>
												</div><!--~~./ step-tab-panel ~~-->
												
												<div class="step-tab-panel step-tab-location" id="tab_step3">
													<div class="tab-from-content">
														<div><h4><i><u><center></center></u></i></h4></div><br><br><br/>
														<div class="row">
															<div class="col-lg-4 col-md-6">
																<div class="form-group">
																	<input type="text" class="form-controllar" placeholder="Address" name="address" required>
																</div>
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-group">
																	<input type="text" class="form-controllar" placeholder="Temporary Address" name="temp_add">
																</div>
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-group">
																	<input type="text" class="form-controllar" placeholder="State" name="state">
																</div>
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-group">
																	<input type="text" class="form-controllar" placeholder="City" name="city">
																</div>
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-group">
																	<input type="text" class="form-controllar" placeholder="Country" name="country">
																</div>
															</div>
															<div class="col-lg-4 col-md-6">
																<div class="form-group">
																	<input type="text" class="form-controllar" placeholder="Zip-Code " name="zipcode">
																</div>
															</div>
														</div>
														<!--~~./ default-form ~~-->
													</div>
												</div><!--~~./ step-tab-panel ~~-->
												
												<div class="step-tab-panel step-tab-amenities" id="tab_step4">
													<div class="tab-from-content">
														
														<div class="row">
															<div class="col-12">
																<div class="tags-form-group">
																	<!--~./ form-group ~-->
																</div><!--~./ tags-form-group ~-->
															</div>
														</div>
														<!--~~./ default-form ~~-->
													</div>
												</div><!--~~./ step-tab-panel ~~-->
												
												<div class="step-tab-panel" id="tab_step5">
													<div class="tab-from-content">
														<br><br/>
														<div class="row">
															<div class="col-12">
																<div class="add-list-content tags-form-group">
																	<div class="form-group">
																		<input name="tag" id="chickpolicy" type="checkbox">
																		<label for="chickpolicy" class="listtag">I Agree to India Bazar <a href="#">Privacy Policy</a></label> 
																	</div><!--~./ form-group ~-->
																	<div class="form-group">
																		<input name="tag" id="chickservice" type="checkbox">
																		<label for="chickservice" class="listtag">I Agree to India Bazar <a href="#">Terms of Services</a></label> 
																	</div>
																	
																	<!--~./ form-group ~-->
																</div><!--~./ add-list-content ~-->
															</div>
														</div>
														<!--~~./ default-form ~~-->
													</div>
												</div><!--~~./ step-tab-panel ~~-->
											</div><!--~~./ step-content ~~-->
											<div class="step-footer step-tab-pager">
											<input type="submit" value="Register Your Ad" name="save" class="btn btn-default"></button>
										</div><!--~~./ step-footer ~~-->
									</div>
								</div>
							</div>
						</form>
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