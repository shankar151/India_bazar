<?php
	session_start();
	
	if(!isset($_SESSION['admin_email']))
	{
		header('location:admin_login.php');
	}
	include('../inc/config.php');
	
	if(isset($_GET['del']))
	{
		$u_sub_id = $_GET['del'];
		
		$qs = "delete from user_sub where u_sub_id = '$u_sub_id'";
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
											<h3 class="title">User Subscription Details</h3>
										</div>
									</div>
								</div>
								<div class="card shadow mb-4">
									<div class="card-header py-3">
										<h6 class="m-0 font-weight-bold text-primary">Subscription purchase by user.</h6>
									</div>
									
									<form method="GET">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered" id="dataTable" width="1000px" cellspacing="0">
													<thead>
														<tr>
															<th>Sr No.</th>
															<th>Subscription Name</th>
															<th>Subscription Price</th>
															<th>User Name</th>
															<th>Name of payee</th>
															<th>Email of payee</th>
															<th>Phone</th>
															<th>Gender</th>
															<th>Address</th>
															<th>Card Name</th>
															<th>Card No.</th>
															<th>Expiry Date</th>
															<th>CVV</th>
															<th>Delete</th>
														</tr>
													</thead>
													<tfoot>
														<tr>
															<th>Sr No.</th>
															<th>Subscription Name</th>
															<th>Subscription Price</th>
															<th>User Name</th>
															<th>Name of payee</th>
															<th>Email of payee</th>
															<th>Phone</th>
															<th>Gender</th>
															<th>Address</th>
															<th>Card Name</th>
															<th>Card No.</th>
															<th>Expiry Date</th>
															<th>CVV</th>
															<th>Delete</th>
														</tr>
													</tfoot>
													<tbody>
														
														<?php
															
															$qs="select * from user_sub inner join subscription on user_sub.sub_id=subscription.sub_id inner join user on user_sub.user_id=user.user_id";
															
															$data=mysqli_query($con,$qs) or die(mysqli_error($con));
															while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
															{
															?>
															<tr>
																<td><?php echo $row['u_sub_id']; ?></td>
																<td><?php echo $row['subscription_name']; ?></td>
																<td><?php echo $row['subscription_price']; ?></td>
																<td><?php echo $row['user_name']; ?></td>
																<td><?php echo $row['first_name']." ".$row['last_name']; ?></td>
																<td><?php echo $row['email_p']; ?></td>
																<td><?php echo $row['phone']; ?></td>
																<td><?php echo $row['gender']; ?></td>
																<td><?php echo $row['address']." ".$row['street']." ".$row['city']." ".$row['state']." ".$row['country']." ".$row['zipcode']; ?></td>
																<td><?php echo $row['card_name']; ?></td>
																<td><?php echo $row['card_no']; ?></td>
																<td><?php echo $row['dat']; ?></td>
																<td><?php echo $row['cvv']; ?></td>
																
																<td><button style="border-radius:10px;" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this record?')"><a href='user_subscription.php?del=<?php echo $row['u_sub_id']; ?>'>Delete</a></button></td>
															</tr>
															<?php
															}
														?>
													</tbody>
												</table>
											</div>
										</div>
									</form>
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
		
		<!--pagination data table-->
		<script src="table_js/jquery.dataTables.min.js"></script>
    <script src="table_js/dataTables.bootstrap4.min.js"></script>
    <script src="table_js/datatables-demo.js"></script>
	</body>
</html>
