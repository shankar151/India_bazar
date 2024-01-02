<?php
	session_start();
	include('inc/config.php');
	
	echo $user_id = $_SESSION['user_id'];
	
	if(!isset($_SESSION['email']))
	{
		header('location:index.php');
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
					<div class="dashboard-contant dashboard-history-area">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">
									<div class="dashboard-page-title">
										<h3 class="title">History</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered" id="dataTable" width="1000px" cellspacing="0">
												<thead>
													<tr>
														<th>Order No.</th>
														<th>Date</th>
														<th>Subscription Name</th>
														<th>Subscription Price</th>
														<th>Subscription Starting Date</th>
														<th>Subscription Expiry Date</th>
														<th>Status</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<tr>
														<th>Order No.</th>
														<th>Date</th>
														<th>Subscription Name</th>
														<th>Subscription Price</th>
														<th>Subscription Starting Date</th>
														<th>Subscription Expiry Date</th>
														<th>Status</th>
													</tr>
												</tfoot>
												<tbody>
													
													<?php
														
														$qs="select * from order_details";
														
														$data=mysqli_query($con,$qs) or die(mysqli_error($con));
														while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
														{
														?>
														<tr>
															<td><?php echo $row['order_no']; ?></td>
															<td><?php echo $row['date']; ?></td>
															<td><?php echo $row['subcr_name']; ?></td>
															<td><?php echo $row['subcr_price']; ?></td>
															<td><?php echo $row['subcr_starting_date']; ?></td>
															<td><?php echo $row['subcr_expiry_date']; ?></td>
															
															<td><button style="border-radius:10px;" type="button" class="btn btn-sm btn-danger"><a href='upd_subscr_price.php?edit=<?php echo $row['ord_id']; ?>'>Delete</a></button></td>
														</tr>
														<?php
														}
													?>
												</tbody>
											</table>
										</div>
									</div><!--~./ default-form-table ~-->
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
		<script src="admin/table_js/jquery.dataTables.min.js"></script>
    <script src="admin/table_js/dataTables.bootstrap4.min.js"></script>
    <script src="admin/table_js/datatables-demo.js"></script>
	</body>
</html>