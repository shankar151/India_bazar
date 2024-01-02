<?php
	session_start();
	
	if(!isset($_SESSION['admin_email']))
	{
		header('location:admin_login.php');
	}
	include('../inc/config.php');
	
	$pic = "";
	$msg = "";
	
	if(isset($_POST['add']))
	{
		extract($_POST);
		
		$pic=$_FILES['nphoto']['name'];
		
		if($pic!="")
		{
		$qs = "insert into category(cat_photo,cat_name)values('$pic','$n_cat_name')";
		mysqli_query($con,$qs);
		
		move_uploaded_file($_FILES['nphoto']['tmp_name'], "../upload/".$pic);
		}
		else
		{
			$msg = "Please select image and category name.";
		}
		
	}
	
	if(isset($_GET['edit']))
	{
		$x = $_GET['edit'];
		
		$qs = "select * from category where cat_id = '$x'";
		$data = mysqli_query($con,$qs);
		$row = mysqli_fetch_array($data,MYSQLI_BOTH);
	}
	else
	{
		$row['cat_photo']="";
		$row['cat_name']="";
	}
	
	if(isset($_POST['update']))
	{
		extract($_POST);
		
		$pic=$_FILES['u_cat_photo']['name'];
		
		if($pic!="")
		{
			$qs = "update category set cat_photo='$pic',cat_name='$u_cat_name' where cat_id = '$x'";
			mysqli_query($con,$qs) or die(mysqli_error($con));
			
			move_uploaded_file($_FILES['u_cat_photo']['tmp_name'], "../upload/".$pic);
		}
		else
		{
			$qs = "update category set cat_name='$u_cat_name' where cat_id = '$x'";
			mysqli_query($con,$qs) or die(mysqli_error($con));
		}
		header('location:add_category.php');
	}
	
	if(isset($_GET['del']))
	{
		$x = $_GET['del'];
		
		$qs = "delete from category where cat_id='$x'";
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
											<h3 class="title">Add new AD Category.</h3>
										</div>
									</div>
								</div>
								
								
								<div class="overall-info-area default-form-area">
									
										<div class="row">
											<div class="col-lg-8">
												<div class="overall-info-area default-form-area">
													
														<div class="row">
														<div class="col-6">
														<form class="default-form" method="post" enctype="multipart/form-data">
															<div class="col-lg-6">
																<h3 class="headline">Add New Category</h3>
																<div class="form-group">
																	<label><img src="#"/></label>
																	<input type="file" class="form-controllar" name="nphoto">
																</div>
																<div class="form-group">
																	<input type="text" class="form-controllar" placeholder="New Category Name" name="n_cat_name">
																</div>
																<div class="col-12">
																	<div class="form-submit form-group">
																		<button type="submit" name="add" class="btn btn-default">Add New Category</button>
																	</div>
																</div>
																<?php echo $msg; ?>
															</div><!--~./ col-lg-6 ~-->
															</form>
															</div>
															<div class="col-6">
															<form class="default-form" method="post" enctype="multipart/form-data">
																<div class="col-lg-6">
																	<h3 class="headline">Update Category</h3>
																	<div class="form-group">
																		<label><img src="#"/></label>
																		<input type="file" class="form-controllar" name="u_cat_photo" value="<?php echo $row['cat_photo']; ?>">
																	</div>
																	<div class="form-group">
																		<input type="text" class="form-controllar" name="u_cat_name" value="<?php echo $row['cat_name']; ?>" placeholder="Update Category Name">
																	</div>
																	<div class="col-12">
																		<div class="form-submit form-group">
																			<button type="submit" name="update" class="btn btn-default">Update Category</button>
																		</div>
																	</div>
																</div><!--~./ col-lg-6 ~-->
																</form>
																</div>
															</div>
														<!--~./ default-form ~-->
													</div><!--~./ default-form-area ~-->
												</div>
											</div>
										<!--~./ default-form ~-->
										
									</div>
									<div class="card shadow mb-4">
										<div class="card-header py-3">
											<h6 class="m-0 font-weight-bold text-primary">Details Of AD Category.</h6>
										</div>
										<form method="GET">
											<div class="card-body">
												<div class="table-responsive">
													<table class="table table-bordered" id="dataTable" width="1000px" cellspacing="0">
														<thead>
															<tr>
																<th>Sr No.</th>
																<th>Category Photo</th>
																<th>Category Name</th>
																<th>Edit</th>
																<th>Delete</th>
															</tr>
														</thead>
														<tfoot>
															<tr>
																<th>Sr No.</th>
																<th>Category Photo</th>
																<th>Category Name</th>
																<th>Edit</th>
																<th>Delete</th>
															</tr>
														</tfoot>
														<tbody>
															
															<?php
																
																$qs="select * from category";
																
																$data=mysqli_query($con,$qs) or die(mysqli_error($con));
																while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
																{
																?>
																<tr>
																	<td><?php echo $row['cat_id']; ?></td>
																	<td><img width="80px" height="80px" src="../upload/<?php echo $row['cat_photo']; ?>"/></td>
																	<td><?php echo $row['cat_name']; ?></td>
																	
																	<td><button style="border-radius:10px;" type="button" class="btn btn-sm btn-success"><a href='add_category.php?edit=<?php echo $row['cat_id']; ?>'>Edit</a></button></td>
																	
																	<td><button style="border-radius:10px;" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this record?')"><a href='add_category.php?del=<?php echo $row['cat_id']; ?>'>Delete</a></button></td>
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
