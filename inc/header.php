<?php
	include('inc/config.php');
	
	if(isset($_POST['reg'])){
		extract($_POST);
		
		if($password == $con_password){
			$qs = "insert into user(user_name,email,mobile,address,password)values('$user_name','$email','$mobile','$address','$password')";
			mysqli_query($con,$qs);
			}else{
			echo "password and confirm password should be same";
		}
	}
	
	if(isset($_POST['login'])){
		extract($_POST);
		
		$qs = "select * from user where(email='$u_email' and password='$u_password')";
		$data = mysqli_query($con,$qs);
		$row = mysqli_fetch_array($data);
		
		if(mysqli_num_rows($data)>0)
		{
			$_SESSION['user_id'] = $row['user_id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
			
			header('location:dashboard-add-listing.php');
		}
		else
		{
			echo "Please enter valid email and password";
		}
	}
?>
<header class="site-header header-style-one">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-12">
				<div class="navigation-area">  
					<div class="header-navigation-left">
						<!-- Site Branding -->
						<div class="site-branding">
							<a href="index.php">
								<img src="assets/images/logo/logo.png" alt="Site Logo" />
							</a>
						</div><!--  /.site-branding -->
						<div class="mobile-element-meta">
							<div class="search-wrap">
								<div class="search-btn">
									<span class="icon-search32"></span>
								</div>
								<div class="search-form">
									<form action="#">
										<input type="search" placeholder="Search">
										<button type="submit"><span class="icon-search32"></span></button>
									</form>
								</div>
							</div><!--~./ search-wrap ~-->
							<div class="mobile-user-registration"></div>
						</div>
					</div><!-- /.header-navigation-left -->
					
					<!-- Site Navigation -->
					<div class="site-navigation">
						<div class="hamburger-menus">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
						<nav class="navigation">
							<div class="overlaybg"></div><!-- /.overlaybg -->
							<!-- Main Menu -->        
							<div class="menu-wrapper">
								<div class="menu-content">
									<ul class="mainmenu">         
										<li>
											<a class="active" href="index.php">Home</a>
										</li>        
										<li class="megamenu">
											<a href="#">Explore</a>
											<div class="sub-menu megamenu-main megamenu-carousel carousel-nav-text owl-carousel">
												<a href="#" class="cat-item cat-nightlife">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/1.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">20</p>
															<h3 class="title">Furniture</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-cafe"></span>
															</div>
															<h3 class="title">Furniture</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-hotel">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/2.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">10</p>
															<h3 class="title">Appliance</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-building"></span>
															</div>
															<h3 class="title">Appliance</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-sopping">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/3.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">35</p>
															<h3 class="title">Education</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-shopping-cart"></span>
															</div>
															<h3 class="title">Education</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-places">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/4.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">80</p>
															<h3 class="title">Fashion</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-vynil"></span>
															</div>
															<h3 class="title">Fashion</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-nightlife">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/1.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">20</p>
															<h3 class="title">Old Coins & Stamp</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-cafe"></span>
															</div>
															<h3 class="title">Old Coins & Stamp</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-hotel">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/2.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">10</p>
															<h3 class="title">Jobs</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-building"></span>
															</div>
															<h3 class="title">Jobs</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-hotel">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/2.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">10</p>
															<h3 class="title">Vehicle</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-building"></span>
															</div>
															<h3 class="title">Vehicle</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-hotel">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/2.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">10</p>
															<h3 class="title">Electronic Item</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-building"></span>
															</div>
															<h3 class="title">Electronic Item</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-hotel">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/2.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">10</p>
															<h3 class="title">Real Estate</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-building"></span>
															</div>
															<h3 class="title">Real Estate</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-hotel">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/2.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">10</p>
															<h3 class="title">Books</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-building"></span>
															</div>
															<h3 class="title">Books</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-hotel">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/2.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">10</p>
															<h3 class="title">Website Directory</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-building"></span>
															</div>
															<h3 class="title">Website Directory</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
												<a href="#" class="cat-item cat-hotel">
													<figure class="cat-thumb">  
														<img src="assets/images/categories/component/2.jpg" alt="Thmubnail"> 
													</figure><!--./ cat-thumb -->
													
													<div class="cat-content">
														<div class="cat-content-inner">
															<p class="listing-no">10</p>
															<h3 class="title">Services</h3><!--./ title -->
														</div><!--./ cat-content-inner -->
													</div><!--./ cat-content -->
													<div class="cat-content-hover">
														<div class="content-hover-inner">
															<div class="icon">
																<span class="icon-building"></span>
															</div>
															<h3 class="title">Services</h3><!--./ title -->
														</div>
													</div><!--./ cat-content-hover -->
												</a>
											</div><!--/.mega-menu-content-->
										</li>
										<li>
											<a href="#">Category</a>
											<ul class="sub-menu">
												<li><a href="listing.php?cat=furniture">Furniture</a></li>
												<li><a href="listing.php?cat=appliance">Appliance</a></li>
												<li><a href="listing.php?cat=education">Education</a></li>
												<li><a href="listing.php?cat=fashion">Fashion</a></li>
												<li><a href="listing.php?cat=old_coins_stamp">Old Coins & Stamp</a></li>
												<li><a href="listing.php?cat=jobs">Jobs</a></li>
												<li><a href="listing.php?cat=vehicle">Vehicle</a></li>
												<li><a href="listing.php?cat=electronic_item">Electronic Item</a></li>
												<li><a href="listing.php?cat=real_estate">Real Estate</a></li>
												<li><a href="listing.php?cat=books">Books</a></li>
												<li><a href="listing.php?cat=website_directory">Website Directory</a></li>
												<li><a href="listing.php?cat=services">Services</a></li>
											</ul>
										</li>                                    
										<li>
											<a href="pricing.php">Subscription</a>
										</li>   
									</ul> <!-- /.menu-list -->
								</div> <!-- /.hours-content-->
							</div><!-- /.menu-wrapper --> 
						</nav>
					</div><!--  /.site-navigation -->
					
					<div class="header-navigation-right">
						<?php
							if(isset($_SESSION['email']))
							{
							?>
							<div class="user-registration-area">
								<a class="user-reg-btn" href="logout.php">
									<span class="icon icon-user-1"></span>
									<span class="text">Logout</span>
								</a>
							</div>
							
							<div class="add-listing-area">
								<a class="btn btn-default btn-black" href="dashboard-add-listing.php">add listing <span class="fas fa-caret-right"></span></a>
							</div>
							<?php
							}
							else
							{
							?>
							<div class="user-registration-area">
								<a class="user-reg-btn" href="user_login.php">
									<span class="icon icon-user-1"></span>
									<span class="text">Sign In</span>
								</a>
							</div>
							<!--~./ user-registration-area ~-->
							<div class="add-listing-area">
								<a class="btn btn-default btn-black" href="user_registration.php">add listing <span class="fas fa-caret-right"></span></a>
							</div>
							<?php
							}
						?>
						<!--~./ add-listing-area ~-->
					</div><!--~./ header-navigation-right ~-->
				</div><!--  /.navigation-area -->
			</div><!--  /.col-12 -->
		</div><!--  /.row -->
	</div><!--  /.container-fluid -->
</header>