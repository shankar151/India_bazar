<?php
	include('inc/config.php');
	
	/*$qs="select * from student";
	
	$data=mysqli_query($con,$qs);
	
	$row=mysqli_fetch_array($data);
	
	$stu_id=$row['stu_id'];
	$first_name=$row['first_name'];
	$last_name=$row['last_name'];
	
	$dob=$row['dob'];
	$gender=$row['gender'];
	$category=$row['category'];
	
	$mobile=$row['mobile'];
	$email=$row['email'];*/
	
	$stu_id="";
	$first_name="";
	$last_name="";
	$dob="";
	$gender="";
	$category="";
	$mobile="";
	$email="";
	
	if(isset($_GET['ap']))
	{
		$x=$_GET['ap'];
		
		$qs="update student set status='accepted' where  stu_id='$x'";
		
		mysqli_query($con,$qs);
	}
	
	if(isset($_GET['rj']))
	{
		$x=$_GET['rj'];
		
		$qs="update student set status='rejected' where  stu_id='$x'";
		
		mysqli_query($con,$qs);
	}
	
	if(isset($_GET['del']))
	{
		$x=$_GET['del'];
		
		$qs="delete from student where  stu_id='$x'";
		
		mysqli_query($con,$qs);
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
		<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
		<meta name="CreativeLayers" content="ATFN">
		<!-- css file -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/dashbord_navitaion.css">
		<!-- Responsive stylesheet -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Title -->
		<title>Motion - LMS Online Education Course</title>
		<!-- Favicon -->
		<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
		<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
					<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
				<![endif]-->
				
				<!--table css-->
		

    <!-- Custom fonts for this template -->
   
   

    <!-- Custom styles for this template -->
    

    <!-- Custom styles for this page -->
    <link href="table_js/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<?php
		include('inc/header.php');
	?>
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
	        <ul class="header_user_notif dashbord_pages_mobile_version pull-right">
                <li class="user_notif">
					<div class="dropdown">
					    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-email"></span></a>
					    <div class="dropdown-menu notification_dropdown_content">
							<div class="so_heading">
								<p>Notifications</p>
							</div>
							
							<a class="view_all_noti text-thm" href="#">View all alerts</a>
					    </div>
					</div>
                </li>
                <li class="user_notif">
					<div class="dropdown">
					    <a class="notification_icon" href="#" data-toggle="dropdown"><span class="flaticon-alarm"></span></a>
					    <div class="dropdown-menu notification_dropdown_content">
							<div class="so_heading">
								<p>Notifications</p>
							</div>
							
							<a class="view_all_noti text-thm" href="#">View all alerts</a>
					    </div>
					</div>
                </li>
                <li class="user_setting">
					<div class="dropdown">
                		<a class="btn dropdown-toggle" href="#" data-toggle="dropdown"><img class="rounded-circle" src="images/team/e1.png" alt="e1.png"></a>
					    <div class="dropdown-menu">
					    	<div class="user_set_header">
					    		<img class="float-left" src="images/team/e1.png" alt="e1.png">
						    	<p>Kim Hunter <br><span class="address">kimhunter@gmail.com</span></p>
					    	</div>
					    	<div class="user_setting_content">
								<a class="dropdown-item active" href="#">My Profile</a>
								<a class="dropdown-item" href="#">Messages</a>
								<a class="dropdown-item" href="#">Purchase history</a>
								<a class="dropdown-item" href="#">Help</a>
								<a class="dropdown-item" href="#">Log out</a>
					    	</div>
					    </div>
					</div>
		        </li>
            </ul>
						<!-- /.mobile-menu -->
			<div class="header stylehome1 dashbord_mobile_logo dashbord_pages">
				<div class="main_logo_home2">
		            <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
		            <span>Motion</span>
				</div>
				<ul class="menu_bar_home2">
					<li class="list-inline-item"></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
	
	</div>

	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord pb50">
		<div class="container-fluid">
			<div class="row">
				<?php
					include('inc/sidepanel.php');
				?>
				<div class="col-sm-12 col-lg-8 col-xl-10">
					<div class="row">
					
					<!--mobile dropdown menu-->
					
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-991">
								<div class="dropdown">
									<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
									<ul id="myDropdown" class="dropdown-content">
										<li class="active"><a href="page-dashboard.html"><span class="flaticon-puzzle-1"></span> Dashboard</a></li>
										<li><a href="courses.php"><span class="flaticon-online-learning"></span> My Courses</a></li>
										<li><a href="order.php"><span class="flaticon-shopping-bag-1"></span> Order</a></li>
										<li><a href="message.php"><span class="flaticon-speech-bubble"></span> Messages</a></li>
										<li><a href="review.php"><span class="flaticon-rating"></span> Reviews</a></li>
										<li><a href="bookmarks.php"><span class="flaticon-like"></span> Bookmarks</a></li>
										<li><a href="listing.php"><span class="flaticon-add-contact"></span> Add listing</a></li>
									</ul>
								</div>
							</div>
						</div>
						
						<!--main content-->
						
						<div class="col-lg-12">
							<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
								<h4 class="title float-left">Student List</h4>
								<ol class="breadcrumb float-right">
							    	<li class="breadcrumb-item"><a href="admin-dashboard.php">Home</a></li>
							    	<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
						<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Students Details</h6>
                        </div>
												
												<form method="GET">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="1000px" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Student Id</th>
                                            <th>Student Photo</th>
                                            <th>Student Signature</th>
                                            <th>Student First Name</th>
                                            <th>Student Last Name</th>
                                            <th>Date Of Birth</th>
                                            <th>Gender</th>
                                            <th>Category</th>
                                            <th>Mobile No.</th>
                                            <th>Email</th>
                                            <th>View More</th>
                                            <th>Update Form</th>
                                            <th>Approve</th>
                                            <th>Reject</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>Student Id</th>
																					 <th>Student Photo</th>
																					 <th>Student Signature</th>
                                            <th>Student First Name</th>
                                            <th>Student Last Name</th>
                                            <th>Date Of Birth</th>
                                            <th>Gender</th>
                                            <th>Category</th>
                                            <th>Mobile No.</th>
                                            <th>Email</th>
                                            <th>View More</th>
                                            <th>Update Form</th>
                                            <th>Approve</th>
                                            <th>Reject</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
																		
																			<?php
						
																			$qs="select * from student order by stu_id";
						
																			$data=mysqli_query($con,$qs) or die(mysqli_error($con));
																		while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
																			{
																			?>
                                        <tr>
                                            <td><?php echo $row['stu_id']; ?></td>
                                            <td><?php echo $row['stu_photo']; ?></td>
                                            <td><?php echo $row['signature']; ?></td>
																						<td> <?php echo $row['first_name']; ?></td>
                                            <td> <?php echo $row['last_name']; ?></td>
                                            <td> <?php echo $row['dob']; ?></td>
                                            <td> <?php echo $row['gender']; ?></td>
                                            <td> <?php echo $row['category']; ?></td>
                                            <td> <?php echo $row['mobile']; ?></td>
                                            <td> <?php echo $row['email']; ?></td>
                                            <td><a href='student-info.php?stu_id=<?php echo $row['stu_id']; ?>'>View More</a></td>
																						<td><a href='student.php?stu_id=<?php echo $row['stu_id']; ?>'>Update Details</a></td>
																						<td><a href='student-list.php?ap=<?php echo $row['stu_id']; ?>'>Approve</a></td>
																						<td><a href='student-list.php?rj=<?php echo $row['stu_id']; ?>'>Reject</a></td>
																						<td><a href='student-list.php?del=<?php echo $row['stu_id']; ?>'>Delete</a></td>
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
			</div>
		</div>
	</section>
	
	<!--footer-->
					<?php
						include('inc/footer.php');
					?>
<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="js/chart.min.js"></script>
<script type="text/javascript" src="js/chart-custome.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/snackbar.min.js"></script>
<script type="text/javascript" src="js/simplebar.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/scrollto.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/progressbar.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/timepicker.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/dashboard-script.js"></script>
<!-- Custom script for all pages --> 
<script type="text/javascript" src="js/script.js"></script>
</body>

	<!--table JavaScript-->
	
 <!-- Bootstrap core JavaScript-->
   

    <!-- Core plugin JavaScript-->
    

    <!-- Custom scripts for all pages-->
   

    <!-- Page level plugins -->
    <script src="table_js/jquery.dataTables.min.js"></script>
    <script src="table_js/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="table_js/datatables-demo.js"></script>

</html>