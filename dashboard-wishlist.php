<?php
	session_start();
	include('inc/config.php');
	include('inc/c_w.php');
	
	$user_id=$_SESSION['user_id'];
	
	if(isset($_GET['del']))
	{
		$x = $_GET['del'];
		$qs = "delete from wishlist where wish_adlist_id='$x'";
		mysqli_query($con,$qs);
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
				<?php include('inc/sidepanel.php'); ?>
				
				<div class="dashboard-contant-area">
					<!--~~~~~ Start dashboard Header ~~~~~--> 
					<?php
						include('inc/u_admin_header.php');
					?><!--~./ end dashboard header ~-->
					
					<!--~~~~~ Start dashboard Contant ~~~~~--> 
					<div class="dashboard-contant dashboard-wishlist-area">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="dashboard-page-title">
										<h3 class="title">My Wishlist</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<?php 
									$qs="select * from wishlist inner join ad_list on wish_adlist_id=ad_list_id inner join user on wishlist.user_id=user.user_id where wishlist.user_id='$user_id'";
									$data = mysqli_query($con,$qs);
									while($row = mysqli_fetch_array($data,MYSQLI_BOTH))
									{
										$dd="";
										if(isset($_SESSION['user_id']))
										{
											$x=c_w($con,$_SESSION['user_id'],$row['ad_list_id']);
											if($x==1)
											{
												$dd="active";
											}
										}
									?>
									<div class="col-lg-6">
										<!--~~~~~ Start Todo Item ~~~~~-->
										<div class="todo-item todo-item-list status-closed  todo-item-dashboard">
											<div class="todo-thumbnail-area">
												<figure class="item-thumb">  
													<img src="upload/<?php echo $row['photo1']?>" alt="Thmubnail" style="width:500px;height:300px;"> 
												</figure><!--./ item-thumb -->
												<div class="todo-overlay-info">
													<div class="todo-type-cat">
														<a href="#" class="hotel">hotel</a>
													</div><!--./ todo-type-cat -->
													<div class="todo-meta-bottom">
														<div class="todo-rating">
															<span>4.8</span>19 Ratings
														</div><!--./ todo-rating -->
														<div class="save">
															
															<i>
																<a href="dashboard-wishlist.php?del=<?php echo $row['ad_list_id']?>"><button id="button" type="button" class="btn btn-lg btn-outline-secondary mywish <?php echo $dd;?>">&hearts;</button></a>
															</i>
															
														</div><!--./ save -->
													</div><!--./ todo-meta-bottom -->
												</div><!--./ section-header -->
											</div><!--./ todo-overlay-info -->
											<div class="todo-content">
												<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
												<div class="todo-price-status">
													<div class="todo-price"><?php echo $row['price'] ?></div>
													<div class="todo-status">closed</div>
												</div><!--./ todo-footer -->
												<div class="todo-meta">
													<div class="todo-location">
														<span class="icon-location"></span>
														<?php echo $row['address']." ".$row['city']." ".$row['country']." ".$row['state']." ".$row['zipcode']?>        
													</div><!--./ todo-location -->
													<div class="todo-number">
														<span class="icon-phone"></span>
														<?php echo $row['mobile']?>      
													</div><!--./ todo-number -->
													<div class="todo-summary">
														<p><?php echo $row['descr']?></p>
													</div><!--./ todo-summary -->
												</div><!--./ todo-meta -->
											</div><!--./ todo-content -->
										</div><!--~./ end todo item ~-->
									</div>
									<?php 
									}
								?>
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