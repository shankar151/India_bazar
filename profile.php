<?php
	session_start();
	include('inc/config.php');
	// print_r($_SESSION);
	$msg = "";
	$user_id = $_SESSION['user_id'];
	
	$qs = "select * from user where user_id='$user_id'";
	$data = mysqli_query($con,$qs);
	$row = mysqli_fetch_array($data,MYSQLI_BOTH);
	
	$email = $row['email'];
	$password = $row['password'];
	
	if(isset($_POST['update']))
	{
		extract($_POST);
		
		echo $qs = "update user set user_name='$user_name',email='$email',mobile='$mobile',address='$address' where user_id='$user_id'";
		mysqli_query($con,$qs) or die(mysqli_error($con));
		header('location:profile.php');
	}
	
	if(isset($_POST['upd_pass']))
	{
		extract($_POST);
		
		if(($email == $eml) && ($password == $pas))
		{
			if($n_pas == $c_pas)
			{
				$qs = "update user set password='$c_pas' where user_id='$user_id'";
				mysqli_query($con,$qs);
			}
			else
			{
				$msg = "Password and Confirm Password should be same.";
			}
		}
		else
		{
			$msg = "Please enter valid Email or Password.";
		}
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
					<?php include('inc/u_admin_header.php');?><!--~./ end dashboard header ~-->
					
					<!--~~~~~ Start dashboard Contant ~~~~~--> 
					<div class="dashboard-contant dashboard-setting-area">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="dashboard-page-title">
										<h3 class="title">My Profile</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-8">
									<div class="overall-info-area default-form-area">
										<form class="default-form" method="post">
											<div class="row">
												<div class="col-lg-6">
													<h3 class="headline">Update Your Details</h3>
													<div class="form-group">
														<input type="text" class="form-controllar" placeholder="User Name" value="<?php echo $row['user_name']; ?>" name="user_name">
													</div>
													<div class="form-group">
														<input type="email" class="form-controllar" placeholder="Email" value="<?php echo $row['email']; ?>" name="email">
													</div>
													<div class="form-group">
														<input type="text" class="form-controllar" placeholder="Mobile" value="<?php echo $row['mobile']; ?>" name="mobile">
													</div>
													<div class="form-group">
														<input type="text" class="form-controllar" placeholder=" Address" value="<?php echo $row['address']; ?>" name="address">
													</div>
												</div><!--~./ col-lg-6 ~-->
												<!--~./ col-lg-6 ~-->
												<div class="col-12">
													<div class="form-submit form-group">
														<button type="submit" class="btn btn-default" name="update" onclick="alert('Successfully Updated.')">Update</button>
														<button type="reset" class="btn btn-default btn-black" >Reset</button>
													</div>
												</div>
											</div>
										</form><!--~./ default-form ~-->
									</div><!--~./ default-form-area ~-->
								</div>
								<div class="col-lg-4">
									<div class="overall-info-area default-form-area">
										<form class="default-form" method="post">
											<div class="row">
												<div class="col-12">
													<h3 class="headline">Change Password</h3>
													<div class="form-group">
														<input type="email" class="form-controllar" placeholder="Email" name="eml">
													</div>
													<div class="form-group">
														<input type="text" class="form-controllar" placeholder="Current Password" name="pas">
													</div>
													<div class="form-group">
														<input type="text" class="form-controllar" placeholder="New Password" name="n_pas">
													</div>
													<div class="form-group">
														<input type="text" class="form-controllar" placeholder="Confirm Password" name="c_pas">
													</div>
													<div>
														<?php
															echo $msg;
														?>
													</div>
													<div class="form-submit form-group">
														<button class="btn btn-default" name="upd_pass">Change Password</button>
													</div>
												</div><!--~./ col-lg-6 ~-->
											</div>
										</form><!--~./ default-form ~-->
									</div><!--~./ default-form-area ~-->
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