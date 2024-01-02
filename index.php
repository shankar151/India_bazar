<?php
	session_start();
	include('inc/config.php');
	include('inc/c_w.php');
	
	// $user_id="";
	// $user_id=$_SESSION['user_id'];
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
		
    <!-- Specific Meta
		================================================== -->
    <title>India Bazar - Listing & Directory HTML Template</title>
		
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
		<style>
			.bttn{
				border-radius:7px;
				color:red;
				background-color:skyblue;
			}
			.bttn:hover{
				background-color:green;
				color:white;
			}
		</style>
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
				include('inc/header.php');
			?>
			<!--~~./ end site header ~~-->
			<!--~~~ Sticky Header ~~~-->
			<div id="sticky-header" class="sticky-header-one"></div><!--~./ end sticky header ~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Frontpage Banner Section
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="frontpage-banner-section frontpage-banner-style-one bg-overlay-violet bg-image ptb-100" style="background-image:url('assets/images/bg/hero-bg.jpg')">
				<div class="waves-effect bottom" style="background: url('assets/images/shape/waves-bottom.png');"></div>
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="frontpage-banner-content text-center text-white">
								<h1 class="banner-title">Find the Best <span>Places</span> to Be</h1>
								<h3 class="banner-subtitle">Explore top-rated attractions, activities and more!</h3>
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
								
								<div class="banner-divider">Or Browse Featured Categories</div><!--./ banner-divider -->
								
								<div class="features-cat-area">
									<div class="features-cat-carousel owl-carousel">
										<a href="listing-grid.html" class="cat-item">
											<div class="icon">
												<span class="icon-fast-food"></span>
											</div>
											<div class="cat-name">
												Food & Drinks
											</div>
										</a><!--./ cat-item -->
										
										<a href="listing-grid.html" class="cat-item">
											<div class="icon">
												<span class="icon-building"></span>
											</div>
											<div class="cat-name">
												Hotels
											</div>
										</a><!--./ cat-item -->
										
										<a href="listing-grid.html" class="cat-item">
											<div class="icon">
												<span class="icon-wrench"></span>
											</div>
											<div class="cat-name">
												Automotive
											</div>
										</a><!--./ cat-item -->
										
										<a href="listing-grid.html" class="cat-item">
											<div class="icon">
												<span class="icon-dress"></span>
											</div>
											<div class="cat-name">
												Nightlife
											</div>
										</a><!--./ cat-item -->
										
										<a href="listing-grid.html" class="cat-item">
											<div class="icon">
												<span class="icon-shopping-cart"></span>
											</div>
											<div class="cat-name">
												Shopping
											</div>
										</a><!--./ cat-item -->
										
										<a href="listing-grid.html" class="cat-item">
											<div class="icon">
												<span class="icon-sunbed"></span>
											</div>
											<div class="cat-name">
												Travels
											</div>
										</a><!--./ cat-item -->
										
										<a href="listing-grid.html" class="cat-item">
											<div class="icon">
												<span class="icon-house"></span>
											</div>
											<div class="cat-name">
												Real Estates
											</div>
										</a><!--./ cat-item -->
									</div>
								</div><!--./ features-cat-area -->
							</div>
						</div>
					</div>
				</div>
			</div><!--~./ end frontpage banner Section ~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Poular Categories Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="popular-categories-block popular-categories-style-one ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub">What Do You Want to Do Tonight</h4><!--  /.title-sub -->
								<h2 class="title-main">Top Activities</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<!--~~~~ Start Cat Items ~~~~--> 
						<div class="col-lg-6">
							<a href="#" class="cat-item cat-food">
								<figure class="cat-thumb">  
									<img src="assets/images/categories/1.jpg" alt="Thmubnail"> 
								</figure><!--./ cat-thumb -->
								
								<div class="cat-content">
									<div class="cat-content-inner">
										<p class="listing-no">30</p>
										<h3 class="title">Food & Drinks</h3><!--./ title -->
									</div><!--./ cat-content-inner -->
								</div><!--./ cat-content -->
								<div class="cat-content-hover">
									<div class="content-hover-inner">
										<div class="icon">
											<span class="icon-fast-food"></span>
										</div>
										<h3 class="title">Food & Drinks</h3><!--./ title -->
									</div>
								</div><!--./ cat-content-hover -->
							</a>
						</div><!--~./ end Cat Items ~-->
						
						<!--~~~~ Start Cat Items ~~~~--> 
						<div class="col-lg-3 col-md-6">
							<a href="#" class="cat-item cat-nightlife">
								<figure class="cat-thumb">  
									<img src="assets/images/categories/2.jpg" alt="Thmubnail"> 
								</figure><!--./ cat-thumb -->
								
								<div class="cat-content">
									<div class="cat-content-inner">
										<p class="listing-no">20</p>
										<h3 class="title">Nightlife</h3><!--./ title -->
									</div><!--./ cat-content-inner -->
								</div><!--./ cat-content -->
								<div class="cat-content-hover">
									<div class="content-hover-inner">
										<div class="icon">
											<span class="icon-cafe"></span>
										</div>
										<h3 class="title">Nightlife</h3><!--./ title -->
									</div>
								</div><!--./ cat-content-hover -->
							</a>
						</div><!--~./ end Cat Items ~-->
						
						<!--~~~~ Start Cat Items ~~~~--> 
						<div class="col-lg-3 col-md-6">
							<a href="#" class="cat-item cat-hotel">
								<figure class="cat-thumb">  
									<img src="assets/images/categories/3.jpg" alt="Thmubnail"> 
								</figure><!--./ cat-thumb -->
								
								<div class="cat-content">
									<div class="cat-content-inner">
										<p class="listing-no">10</p>
										<h3 class="title"></h3><!--./ title -->
									</div><!--./ cat-content-inner -->
								</div><!--./ cat-content -->
								<div class="cat-content-hover">
									<div class="content-hover-inner">
										<div class="icon">
											<span class="icon-building"></span>
										</div>
										<h3 class="title">Hotels</h3><!--./ title -->
									</div>
								</div><!--./ cat-content-hover -->
							</a>
						</div><!--~./ end Cat Items ~-->
						
						<!--~~~~ Start Cat Items ~~~~--> 
						<div class="col-lg-3 col-md-6">
							<a href="#" class="cat-item cat-service">
								<figure class="cat-thumb">  
									<img src="assets/images/categories/4.jpg" alt="Thmubnail"> 
								</figure><!--./ cat-thumb -->
								
								<div class="cat-content">
									<div class="cat-content-inner">
										<p class="listing-no">40</p>
										<h3 class="title">Service</h3><!--./ title -->
									</div><!--./ cat-content-inner -->
								</div><!--./ cat-content -->
								<div class="cat-content-hover">
									<div class="content-hover-inner">
										<div class="icon">
											<span class="icon-wrench"></span>
										</div>
										<h3 class="title">Service</h3><!--./ title -->
									</div>
								</div><!--./ cat-content-hover -->
							</a>
						</div><!--~./ end Cat Items ~-->
						
						<!--~~~~ Start Cat Items ~~~~--> 
						<div class="col-lg-3 col-md-6">
							<a href="#" class="cat-item cat-sopping">
								<figure class="cat-thumb">  
									<img src="assets/images/categories/5.jpg" alt="Thmubnail"> 
								</figure><!--./ cat-thumb -->
								
								<div class="cat-content">
									<div class="cat-content-inner">
										<p class="listing-no">35</p>
										<h3 class="title">Shopping</h3><!--./ title -->
									</div><!--./ cat-content-inner -->
								</div><!--./ cat-content -->
								<div class="cat-content-hover">
									<div class="content-hover-inner">
										<div class="icon">
											<span class="icon-shopping-cart"></span>
										</div>
										<h3 class="title">Shopping</h3><!--./ title -->
									</div>
								</div><!--./ cat-content-hover -->
							</a>
						</div><!--~./ end Cat Items ~-->
						
						<!--~~~~ Start Cat Items ~~~~--> 
						<div class="col-lg-6">
							<a href="#" class="cat-item cat-places">
								<figure class="cat-thumb">  
									<img src="assets/images/categories/6.jpg" alt="Thmubnail"> 
								</figure><!--./ cat-thumb -->
								
								<div class="cat-content">
									<div class="cat-content-inner">
										<p class="listing-no">80</p>
										<h3 class="title">Places</h3><!--./ title -->
									</div><!--./ cat-content-inner -->
								</div><!--./ cat-content -->
								<div class="cat-content-hover">
									<div class="content-hover-inner">
										<div class="icon">
											<span class="icon-vynil"></span>
										</div>
										<h3 class="title">Places</h3><!--./ title -->
									</div>
								</div><!--./ cat-content-hover -->
							</a>
						</div><!--~./ end Cat Items ~-->
					</div>
				</div>
			</div><!--~~./ end popular categories block ~~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Todos Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub">Top-Rated Local Businesses</h4><!--  /.title-sub -->
								<h2 class="title-main">Furniture</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='furniture' limit 3";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?>
												<!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.php?info=<?php echo $row['ad_list_id']?>"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=furniture"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div><!--~./ end todos block ~-->
			
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Appliances</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='appliance'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div>
											<!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=appliance"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Education</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='education'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=education"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Fashion</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='fashion'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=fashion"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Old Coins & Stamp</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='old_coins_stamp'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=old_coins_stamp"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Jobs</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='jobs'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=jobs"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Vehicle</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='vehicle'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=vehicle"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Electronic Item</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='electronic_item'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=electronic_item"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Real Estate</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='real_estate'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=real_estate"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Books</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='books'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=books"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Website Director</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='website_directory'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=website_directory"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			
			<div class="todos-block bg-snow ptb-100">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub"></h4><!--  /.title-sub -->
								<h2 class="title-main">Services</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row">
						<?php
							$qs = "select * from ad_list inner join user on u_id=user_id where cat='services'";
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
							<!--~~~~~ Start Todo Item ~~~~~-->
							<div class="col-lg-4 col-md-6">
								<div class="todo-item">
									<div class="todo-thumbnail-area">
										<figure class="item-thumb">  
											<img src="upload/<?php echo $row['photo1']?>" style="width:500px;height:300px;"> 
										</figure><!--./ item-thumb -->
										<div class="todo-overlay-info">
											<div class="todo-type-cat">
												<a href="#" class="offer">hot offer</a>
												<a href="#" class="nightlife">Nightlife</a>
											</div><!--./ todo-type-cat -->
											<div class="todo-meta-bottom">
												<div class="todo-rating">
													<span>4.8</span>19 Ratings
												</div><!--./ todo-rating -->
												<?php
													if(!isset($_SESSION['email']))
													{
													?>
													<div>
														<i>
															<a href="user_registration.php"><button id="button" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button></a>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
													else
													{
													?>
													<div>
														<i>
															<button id="button" onclick="wish(<?php echo $row['ad_list_id']; ?>)" type="button" class="btn-lg btn-lg btn-outline-secondary mywish <?php echo $dd;?>"><span><font size="6px">&hearts;</font></span></button>
														</i>
														<style>
															#button{
															border-radius:50%;
															border:3px solid orange;
															}
															#button:hover{
															color:magenta;
															}
														</style>
													</div>
													<?php
													}
												?><!--./ save -->
											</div><!--./ todo-meta-bottom -->
										</div><!--./ section-header -->
									</div><!--./ todo-overlay-info -->
									<div class="todo-content">
										<h3 class="title"><a href="listing-details.html"><?php echo $row['list_title']?></a></h3>
										<div class="todo-price-status">
											<div class="todo-price"><?php echo $row['price']?></div>
											<div class="todo-status">Open Now</div>
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
										</div><!--./ todo-meta -->
									</div><!--./ todo-content -->
								</div>
							</div>
							<?php
							}
						?>
						<!--~./ end todo item ~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						
						<!--~~~~~ Start Todo Item ~~~~~-->
						<!--~./ end todo item ~-->
					</div><!--./ row -->
					<div>
						<center><a href="listing.php?cat=services"><button class="bttn">More</button></a></center>
					</div>
				</div>
			</div>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Work Process Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="work-process-block ptb-100">
				<div class="container ml-b-45">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub">easy steps in few moments</h4><!--  /.title-sub -->
								<h2 class="title-main">How Does It Work</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row process-list">
						<div class="bg-line" style="background-image:url('assets/images/others/linearrow.png')"></div><!-- /.bg-line -->
						
						<!--~./ Start Single Process ~-->
						<div class="col-lg-4 col-md-6">
							<div class="single-process">
								<div class="icon">
									<img src="assets/images/icon/process3.png" alt="Icon">
								</div>
								<h2 class="process-step">Choose What To Do</h2>
							</div>
						</div><!--~./ end single process ~-->
						
						<!--~./ Start Single Process ~-->
						<div class="col-lg-4 col-md-6">
							<div class="single-process">
								<div class="icon">
									<img src="assets/images/icon/process2.png" alt="Icon">
								</div>
								<h2 class="process-step">Find What You Want</h2>
							</div>
						</div><!--~./ end single process ~-->
						
						<!--~./ Start Single Process ~-->
						<div class="col-lg-4 col-md-6">
							<div class="single-process">
								<div class="icon">
									<img src="assets/images/icon/process1.png" alt="Icon">
								</div>
								<h2 class="process-step">Explore Place & Enjoy</h2>
							</div>
						</div><!--~./ end single process ~-->
					</div>
				</div><!-- /.container -->
			</div><!--~~./ end work process block ~~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Promo Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="promo-block bg-image bg-overlay ptb-100" style="background-image:url('assets/images/bg/promo-bg1.jpg')">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="promo-block-content text-center">
								<h2 class="promo-title">Add New Lisiting & Build Your Business</h2><!-- /.promo-title -->
								<div class="action-btn-group">
									<a href="#" class="btn btn-default">Add New Listing <span class="fas fa-caret-right"></span></a>
								</div><!-- /.action-btn-group -->
							</div><!-- /.promo-block-content -->
						</div><!-- /.col-lg-8 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /. end promo block -->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Testimonial Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="testimonial-block ptb-100">
				<div class="container">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-lg-9">
							<div class="section-title">
								<h4 class="title-sub">Our sastisfied people from worldwide</h4><!--  /.title-sub -->
								<h2 class="title-main">What Our User Says</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ section-header -->
						
						<div class="col-lg-3">
							<div class="carousel-nav-text nav-right">
								<button class="btn-links btn-prev">
									<span>prev</span>
								</button>
								<button class="btn-links btn-next">
									<span>next</span>
								</button>
							</div><!--~./ end carousel nav text ~-->
						</div>
					</div><!-- /.row -->
					
					<!-- Title Row -->
					<div class="row">
						<div class="col-12">
							<div class="testimonial-carousel owl-carousel">
								<div class="testimonial-item">
									<div class="quote-icon">
										<img src="assets/images/icon/quote2.png" alt="Icon">
									</div><!-- /.quote-icon -->
									<div class="client-testimonial">
										<div class="details">
											<p>Now that we know who you are, I know who I am. I'm not a mistake! It makes sense! In a comic, you know how you can tell who the going to be? He's the exact opposite of the hero.</p>
										</div><!-- /.details -->
										<div class="client-area">
											<div class="client-thumb">
												<img src="assets/images/testimonials/1.png" alt="Zohan Smith" />
											</div><!-- /.client-thumb -->
											
											<div class="client-info">
												<h4 class="client-name">Fatima Mahmoud</h4><!--  /.client-name -->
												<p class="client-designation">Aramica Founder</p>
											</div><!-- /.client-info -->
										</div><!-- /.client-area -->
									</div><!-- /.client-testimonial -->
								</div><!-- /.testimonial-item --> 
								
								<div class="testimonial-item">
									<div class="quote-icon">
										<img src="assets/images/icon/quote2.png" alt="Icon">
									</div><!-- /.quote-icon -->
									<div class="client-testimonial">
										<div class="details">
											<p>Now that we know who you are, I know who I am. I'm not a mistake! It makes sense! In a comic, you know how you can tell who the going to be? He's the exact opposite of the hero.</p>
										</div><!-- /.details -->
										<div class="client-area">
											<div class="client-thumb">
												<img src="assets/images/testimonials/2.png" alt="Zohan Smith" />
											</div><!-- /.client-thumb -->
											
											<div class="client-info">
												<h4 class="client-name">Abdel Fattah Arafa</h4><!--  /.client-name -->
												<p class="client-designation">Pumas Owner</p>
											</div><!-- /.client-info -->
										</div><!-- /.client-area -->
									</div><!-- /.client-testimonial -->
								</div><!-- /.testimonial-item --> 
								
								<div class="testimonial-item">
									<div class="quote-icon">
										<img src="assets/images/icon/quote2.png" alt="Icon">
									</div><!-- /.quote-icon -->
									<div class="client-testimonial">
										<div class="details">
											<p>Now that we know who you are, I know who I am. I'm not a mistake! It makes sense! In a comic, you know how you can tell who the going to be? He's the exact opposite of the hero.</p>
										</div><!-- /.details -->
										<div class="client-area">
											<div class="client-thumb">
												<img src="assets/images/testimonials/3.png" alt="Zohan Smith" />
											</div><!-- /.client-thumb -->
											
											<div class="client-info">
												<h4 class="client-name">Kinda Mohamed</h4><!--  /.client-name -->
												<p class="client-designation">Project Owner</p>
											</div><!-- /.client-info -->
										</div><!-- /.client-area -->
									</div><!-- /.client-testimonial -->
								</div><!-- /.testimonial-item --> 
							</div><!-- /.testimonial-carousel -->
						</div><!-- /.col-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!--~~./ end testimonial block ~~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start News Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="news-block ptb-100 bg-snow">
				<div class="container ml-b-30">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub">ALL ABOUT QAYIMA UPDATES</h4><!--  /.title-sub -->
								<h2 class="title-main">Tips & Tricks</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6">
							<article class="post">
								<figure class="post-thumb">
									<img src="assets/images/blog/post/grid/1.jpg" alt="Blog Image" />
								</figure><!-- /.post-thumb -->
								<div class="overlay">
									<div class="overlay-inner">
										<div class="post-details"> 
											<h2 class="entry-title"><a href="blog-single.html">You are free to choose what you want to make.</a></h2><!-- /.entry-title -->
											<div class="entry-meta-content">
												<div class="entry-date">
													<span>27 feb, 2019</span>
												</div><!--./ entry-date -->
												<div class="entry-cats">
													<a href="#">lifestyle</a>
												</div><!--./ entry-cats -->
											</div><!--./ entry-meta-content -->
										</div><!-- /.post-details -->
									</div><!-- /.overlay-inner -->
								</div><!-- /.overlay -->
							</article><!-- /.post -->
						</div><!--./ col-lg-4 -->
						
						<div class="col-lg-4 col-md-6">
							<article class="post">
								<figure class="post-thumb">
									<img src="assets/images/blog/post/grid/2.jpg" alt="Blog Image" />
								</figure><!-- /.post-thumb -->
								<div class="overlay">
									<div class="overlay-inner">
										<div class="post-details"> 
											<h2 class="entry-title"><a href="blog-single.html">You are free to choose what you want to make.</a></h2><!-- /.entry-title -->
											<div class="entry-meta-content">
												<div class="entry-date">
													<span>27 feb, 2019</span>
												</div><!--./ entry-date -->
												<div class="entry-cats">
													<a href="#">lifestyle</a>
												</div><!--./ entry-cats -->
											</div><!--./ entry-meta-content -->
										</div><!-- /.post-details -->
									</div><!-- /.overlay-inner -->
								</div><!-- /.overlay -->
							</article><!-- /.post -->
						</div><!--./ col-lg-4 -->
						
						<div class="col-lg-4 col-md-6">
							<article class="post">
								<figure class="post-thumb">
									<img src="assets/images/blog/post/grid/3.jpg" alt="Blog Image" />
								</figure><!-- /.post-thumb -->
								<div class="overlay">
									<div class="overlay-inner">
										<div class="post-details"> 
											<h2 class="entry-title"><a href="blog-single.html">You are free to choose what you want to make.</a></h2><!-- /.entry-title -->
											<div class="entry-meta-content">
												<div class="entry-date">
													<span>27 feb, 2019</span>
												</div><!--./ entry-date -->
												<div class="entry-cats">
													<a href="#">lifestyle</a>
												</div><!--./ entry-cats -->
											</div><!--./ entry-meta-content -->
										</div><!-- /.post-details -->
									</div><!-- /.overlay-inner -->
								</div><!-- /.overlay -->
							</article><!-- /.post -->
						</div><!--./ col-lg-4 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!--~~./ end news block ~~-->
			
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
				Start Newsletter Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="newsletter-block ptb-100">
				<div class="container">
					<div class="row">
						<!--~~~~~ Start Section title ~~~~~-->
						<div class="col-12">
							<div class="section-title text-center">
								<h4 class="title-sub">subscribe with us and get unlimited discount</h4><!--  /.title-sub -->
								<h2 class="title-main">Weekly Newsletter</h2><!-- /.title-main -->
								<div class="divider">
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
									<span class="icon-star-full"></span>
								</div><!-- /.divider -->
							</div><!-- /.section-title -->
						</div><!--./ col-12 -->
					</div><!--./ row -->
					
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="subscribe-form">
								<!-- Subscribe form -->
								<form class="dv-form" id="mc-form">
									<div class="form-group">
										<input id="mc-name" name="name" placeholder="Full Name" type="text">
									</div>
									<div class="form-group">
										<input id="mc-email" name="EMAIL" placeholder="Email Address" type="email">
									</div>
									<button class="btn btn-default" name="Subscribe" id="subscribe-btn" type="submit">Subscribe Now <span class="fas fa-caret-right"></span></button>
								</form>
							</div><!-- /.subscribe-form -->
						</div>
					</div>
				</div><!-- /.container -->
			</div><!--~~./ end newsletter block ~~-->
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start SITE FOOTER
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<?php
				include('inc/footer.php');
			?>
			<!--~./ end site footer ~-->
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
		<script src="assets/js/main.js"></script><!-- main-js -->
		
		<script type="text/javascript" async="true">																				
			function wish(data)
			{
				//alert(data);
				
				var req = new XMLHttpRequest();
				req.open("GET","check-wishlist.php?ad_list_id="+data, true);				
				req.send();
				
				req.onreadystatechange = function()
				{ 
					//alert(data);
					if(req.readyState==4 && req.status==200)
					{
						document.getElementById("show").innerHTML=req.responseText;
					}
				}					
			}
			
			$("document").ready(function(){
				
				$(".mywish").click(function(){
					//alert('a');
					$(this).toggleClass("active");
				});
				
			});
		</script>
	</body>
</html>	