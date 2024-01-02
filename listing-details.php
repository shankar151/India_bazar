<?php
	session_start();
	include('inc/config.php');
	
	if(isset($_GET['info']))
	{
		$y = $_GET['info'];
		
		$qs = "select * from ad_list inner join user on u_id=user_id where ad_list_id='$y'";
		$data = mysqli_query($con,$qs);
		$row = mysqli_fetch_array($data,MYSQLI_BOTH);
		
		//echo var_dump($row);
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
			
			<div id="sticky-todo-details-menu">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div id="sticky-todo-menu"></div>
						</div>
					</div>
				</div>
			</div>
			
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Single Listing Todo Block
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="single-listing-todo-block pd-b-100">
				<div class="listing-todo-thumbnail-carousel carousel-nav-rectangle owl-carousel">
					<div class="item">
						<img src="upload/<?php echo $row['photo1']?>" alt="thumb">
					</div>
					<div class="item">
						<img src="upload/<?php echo $row['photo2']?>" alt="thumb">
					</div>
					<div class="item">
						<img src="upload/<?php echo $row['photo3']?>" alt="thumb">
					</div>
					
				</div><!--~./ listing todo thumbnail carousel ~-->
				<div class="single-listing-todo-main-area">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="listing-todo-header pd-t-75 pd-b-90">
									<div class="todo-brand-logo">
										<div class="brand-logo">
											<img src="assets/images/todo/single/brand.png" alt="logo">
										</div>
									</div><!--./ todo-brand-logo -->
									<div class="listing-todo-header-info">
										<div class="info-left">
											<h3 class="todo-title"><?php echo $row['list_title']?></h3>
											<p class="todo-subtitle">Your Way Right Away!</p>
											<div class="todo-cat-status">
												<div class="todo-type-cat">
													<a class="restaurant" href="#">restaurant</a>
												</div>
												<div class="todo-status">open soon</div>
											</div><!--./ todo-cat-status -->
											<div class="todo-meta">
												<div class="todo-location">
													<span class="icon-location"></span>
													<?php echo $row['address']." ".$row['state']." ".$row['city']." ".$row['country']." ".$row['zipcode']?> 
												</div><!--./ todo-location -->
												<div class="todo-number">
													<span class="icon-phone"></span>
													<?php echo $row['mobile']?>  
												</div><!--./ todo-number -->
											</div><!--./ todo-meta -->
										</div><!--./ info-left -->
										
										<div class="info-right">
											<div class="todo-price">$12 - $33</div>
											<div class="todo-rating">
												<span>4.8</span>19 Ratings
											</div>
											<div class="listing-todo-feature-list">
												<a href="#" class="single-list">
													<span class="text">Get Direction</span>
													<span class="icon-map2"></span>
												</a>
												<a href="#" class="single-list">
													<span class="text">Share</span>
													<span class="icon-share1"></span>
												</a>
												<a href="#" class="single-list">
													<span class="text">Submit Review</span>
													<span class="icon-chat"></span>
												</a>
												<a href="#" class="single-list">
													<span class="text">Save</span>
													<span class="icon-bookmark1"></span>
												</a>
												<a href="#" class="single-list">
													<span class="text">Report</span>
													<span class="icon-flag1"></span>
												</a>
											</div><!--~~./ listing-todo-feature-list ~~-->
											<div class="todo-social-share">
												<ul class="social-share">
													<li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li><a class="google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
													<li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
													<li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
													<li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
												</ul>
											</div><!--./ todo-social-share -->
										</div><!--./ info-right -->
									</div><!--./ listing-todo-header-info -->
								</div><!--./ listing-todo-header -->
							</div>
						</div>
						<div class="row">
							<div class="col-lg-8">
								<div class="single-listing-todo-main">
									<div class="todo-details-menu">
										<ul class="todo-menu">
											<li><a href="#overview">Overview</a></li>
											<li><a href="#video">Video</a></li>
											<li><a href="#amenities">Amenities</a></li>
											<li><a href="#nearby">Nearby</a></li>
											<li><a href="#gallery">Gallery</a></li>
											<li><a href="#virtual">Virtual Tour</a></li>
											<li><a href="#reviews">Reviews</a></li>
										</ul>
									</div>
									
									<!--~~~~~ Start Listing Description ~~~~~-->
									<div class="listing-description" id="overview">
										<div class="small-title">
											<h3 class="heading">About <?php echo $row['list_title']?></h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<p><?php echo $row['descr']?></p>
										</div>
									</div><!--~./ end listing description ~-->
									
									<!--~~~~~ Start Listing Video ~~~~~-->
									<div class="listing-video" id="video">
										<div class="small-title">
											<h3 class="heading">Video</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<div class="listing-video-area">
												<div class="video-thumb bg-overlay-violet">
													<img src="assets/images/todo/single/video.jpg" alt="Thmubnail">
												</div>
												<div class="listing-video-icon mrb-55">
													<a href="https://player.vimeo.com/video/4760972" class="video-btn video-popup">
														<span class="icon-play3"></span>
													</a>
												</div>
											</div>
										</div>
									</div><!--~./ end listing video ~-->
									
									<!--~~~~~ Start Listing Amenities ~~~~~-->
									<div class="listing-amenities" id="amenities">
										<div class="small-title">
											<h3 class="heading">Amenities</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<ul class="amenities-list">
												<li>Organic Foods</li>
												<li>Kids Menu</li>
												<li>Smoking Area</li>
												<li>Free Wifi</li>
												<li>Service Elchohol</li>
												<li>Membership Discounts</li>
												<li>Outdoor Seating</li>
												<li>Waitier Service</li>
												<li>Daily Specials</li>
												<li>Accept Credit Card</li>
												<li>Parking</li>
												<li>Weelchair Accessible</li>
												<li>Reservation</li>
												<li>Full Bar</li>
											</ul>
										</div>
									</div><!--~./ end listing amenities ~-->
									
									<!--~~~~~ Start Listing Nearby ~~~~~-->
									<div class="listing-nearby" id="nearby">
										<div class="small-title">
											<h3 class="heading">What's Nearby?</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<div class="listing-nearby-contact">
												<div class="single-nearby ">
													<h3 class="heading">Restaurants</h3>
													<ul class="list">
														<li>
															<span>Spectra Resturant & Cafe, Verso St, Miami, USA </span>
															<span>2.5 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">2 Reviews</a>
															</span>
														</li>
														<li>
															<span>Majesty Restaurant, Carrer De Miami St, Miami, USA</span>
															<span>3.1 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">5 Reviews</a>
															</span>
														</li>
														<li>
															<span>Limozeen Restaurant, Carrer De Miami St, Miami, USA </span>
															<span>2.3 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">7 Reviews</a>
															</span>
														</li>
													</ul><!--~./ list ~-->
												</div><!--~./ single-nearby ~-->
												<div class="single-nearby">
													<h3 class="heading">Beauty</h3>
													<ul class="list">
														<li>
															<span>Spectra Resturant & Cafe, Verso St, Miami, USA </span>
															<span>2.5 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">2 Reviews</a>
															</span>
														</li>
														<li>
															<span>Majesty Restaurant, Carrer De Miami St, Miami, USA</span>
															<span>3.1 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">5 Reviews</a>
															</span>
														</li>
														<li>
															<span>Limozeen Restaurant, Carrer De Miami St, Miami, USA </span>
															<span>2.3 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">7 Reviews</a>
															</span>
														</li>
													</ul><!--~./ list ~-->
												</div><!--~./ single-nearby ~-->
												
												<div class="single-nearby">
													<h3 class="heading">Hotels</h3>
													<ul class="list">
														<li>
															<span>Spectra Resturant & Cafe, Verso St, Miami, USA </span>
															<span>2.5 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">2 Reviews</a>
															</span>
														</li>
														<li>
															<span>Majesty Restaurant, Carrer De Miami St, Miami, USA</span>
															<span>3.1 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">5 Reviews</a>
															</span>
														</li>
														<li>
															<span>Limozeen Restaurant, Carrer De Miami St, Miami, USA </span>
															<span>2.3 km</span>
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
																<a href="#">7 Reviews</a>
															</span>
														</li>
													</ul><!--~./ list ~-->
												</div><!--~./ single-nearby ~-->
											</div>
										</div>
									</div><!--~./ end listing nearby tour ~-->
									
									<!--~~~~~ Start Listing Gallery ~~~~~-->
									<div class="listing-gallery" id="gallery">
										<div class="small-title">
											<h3 class="heading">Gallery</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<div class="listing-gallery-slide owl-carousel carousel-nav-dots">
												<div class="item">
													<img src="upload/<?php echo $row['photo1']?>" alt="img" style="align:center;">
												</div>
												<div class="item">
													<img src="upload/<?php echo $row['photo2']?>" alt="img" style="align:center;">
												</div>
												<div class="item">
													<img src="upload/<?php echo $row['photo3']?>" alt="img" style="align:center;">
												</div>							
											</div>
										</div>
									</div><!--~./ end listing gallery ~-->
									
									<!--~~~~~ Start Listing Energy Efficiency ~~~~~-->
									<div class="listing-energy-efficiency">
										<div class="small-title">
											<h3 class="heading">Energy Efficiency</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<div class="energy-efficiency-content">
												<ul class="info-list">
													<li>Energy Class<span>A+</span></li>
													<li>Global Energy Performance Index<span>70.25kWh / m<sup>2</sup>a</span></li>
													<li>Renewable Energy Performance Index<span>10.25kWh / m<sup>2</sup>a</span></li>
												</ul>
												<div class="efficiency-color">
													<span>A+</span>
													<span>A</span>
													<span>B</span>
													<span>C</span>
													<span>D</span>
													<span>e</span>
													<span>f</span>
													<span>g</span>
												</div>
											</div>
										</div>
									</div><!--~./ end listing energy efficiency ~-->
									
									<!--~~~~~ Start Listing Virtual Tour ~~~~~-->
									<div class="listing-virtual-tour" id="virtual">
										<div class="small-title">
											<h3 class="heading">360° Virtual Tour</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<div class="tour-thumb">
												<img src="assets/images/todo/single/360.jpg" alt="img">
											</div>
										</div>
									</div><!--~./ end listing virtual tour ~-->
									
									<!--~~~~~ Start Listing Rating Average ~~~~~-->
									<div class="listing-average-rating">
										<div class="small-title">
											<h3 class="heading">Rating Average</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<div class="rating-overview">
												<div class="rating-overview-left">
													<div class="rating-overview-average">
														<div class="rating-no">4.8</div>
														<div class="listing-rating">
															<span class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fas fa-star-half-alt"></i>
															</span>
															<a href="#">35 Rating</a>
														</div>
													</div>
												</div><!--~./ rating-overview-left ~-->
												<div class="rating-overview-right">
													<div class="single-progress-bar">
														<div class="progress-type">Quality</div>
														<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="progress-percent">25</div>
													</div><!--~./ single-progress-bar ~-->
													<div class="single-progress-bar">
														<div class="progress-type">Space</div>
														<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="progress-percent">13</div>
													</div><!--~./ single-progress-bar ~-->
													<div class="single-progress-bar">
														<div class="progress-type">Price</div>
														<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="progress-percent">4</div>
													</div><!--~./ single-progress-bar ~-->
													<div class="single-progress-bar">
														<div class="progress-type">Service</div>
														<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="progress-percent">7</div>
													</div><!--~./ single-progress-bar ~-->
													<div class="single-progress-bar">
														<div class="progress-type">Location</div>
														<div class="progress">
															<div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
														<div class="progress-percent">5</div>
													</div><!--~./ single-progress-bar ~-->
												</div>
											</div>
										</div>
									</div><!--~./ end listing average rating ~-->
									
									<!--~~~~~ Start Listing Reviews ~~~~~-->
									<div class="listing-reviews-area" id="reviews">
										<div class="small-title">
											<h3 class="heading">Reviews</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<ol class="comment-list">
												<li id="comment-1" class="comment even thread-even depth-1 parent">
													<article class="comment-body">
														<div class="comment-author vcard">
															<img alt="card" src="assets/images/todo/review/1.png" class="avatar photo">	
															<b class="author-name">
																<a href="#" rel="external nofollow" class="url">Fatma</a>
															</b>
															<div class="reviews-no">
																<span class="number"><i class="fa fa-star"></i>14</span>
																<span class="text">Reviews</span>
															</div>
														</div><!-- .comment-author -->
														<div class="comment-info">
															<div class="comment-info-inner">
																<div class="info-title-header">
																	<h3 class="title">So Fresh and Cooked to perfection</h3>
																	<div class="comment-metadata">
																		<a href="#">
																			<span>December 14, 2019 at 20.15 pm</span>
																		</a>
																	</div><!-- .comment-metadata -->
																</div><!-- .info-title-header -->	
																<div class="comment-rating">
																	<span class="rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="far fa-star"></i>
																	</span>
																</div><!-- .comment-rating -->	
															</div><!-- .comment-content -->	
															<div class="comment-content">
																<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudanti reminds eaque ipsa quae ab illo inventore veritatis.</p>
															</div><!-- .comment-content -->	
															<div class="comment-meta">	
																<div class="comment-meta-inner">
																	<div class="like">
																		<a class="comment-link" href="#"><span class="icon-thumb-up"></span> Like</a>
																	</div>
																	<div class="dislike">
																		<a class="comment-dislink" href="#"><span class="icon-dislike-thumb"></span> Dislike</a>
																	</div>
																	<div class="love">
																		<a class="comment-love" href="#"><span class="icon-like1"></span> Love</a>
																	</div>
																</div>
																<div class="reply">
																	<a class="comment-reply" href="#"><span class="icon-reply1"></span> Reply</a>
																</div>
															</div><!-- .comment-meta -->
														</div>		
													</article><!-- .comment-body -->
													<ol class="children">
														<li id="comment-3" class="comment odd alt depth-2">
															<article class="comment-body">
																<div class="comment-author vcard">
																	<img alt="card" src="assets/images/todo/review/2.png" class="avatar photo">	
																	<b class="author-name">
																		<a href="#" rel="external nofollow" class="url">Arafa</a>
																	</b>
																	<div class="reviews-no">
																		<span class="number"><i class="fa fa-star"></i>14</span>
																		<span class="text">Reviews</span>
																	</div>
																</div><!-- .comment-author -->
																<div class="comment-info">
																	<div class="comment-info-inner">
																		<div class="info-title-header">
																			<h3 class="title">I think I will refer my friend</h3>
																			<div class="comment-metadata">
																				<a href="#">
																					<span>December 14, 2019 at 20.15 pm</span>
																				</a>
																			</div><!-- .comment-metadata -->
																		</div><!-- .info-title-header -->	
																		<div class="comment-rating">
																			<span class="rating">
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="far fa-star"></i>
																			</span>
																		</div><!-- .comment-rating -->	
																	</div><!-- .comment-content -->	
																	<div class="comment-content">
																		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudanti reminds eaque ipsa quae ab illo inventore veritatis.</p>
																	</div><!-- .comment-content -->	
																	<div class="comment-meta">	
																		<div class="comment-meta-inner">
																			<div class="like">
																				<a class="comment-link" href="#"><span class="icon-thumb-up"></span> Like</a>
																			</div>
																			<div class="dislike">
																				<a class="comment-dislink" href="#"><span class="icon-dislike-thumb"></span> Dislike</a>
																			</div>
																			<div class="love">
																				<a class="comment-love" href="#"><span class="icon-like1"></span> Love</a>
																			</div>
																		</div>
																		<div class="reply">
																			<a class="comment-reply" href="#"><span class="icon-reply1"></span> Reply</a>
																		</div>
																	</div><!-- .comment-meta -->
																</div>		
															</article><!-- .comment-body -->
														</li><!-- #comment -->
													</ol><!-- .children -->
												</li><!-- #comment-## -->
											</ol>
										</div>
									</div><!--~./ end listing reviews ~-->
									
									<!--~~~~~ Start Listing Leave Review ~~~~~-->
									<div class="listing-leave-review">
										<div class="small-title">
											<h3 class="heading">Leave a Review</h3>
										</div><!--~./ small-title ~-->
										<div class="box-inner-content">
											<div class="leave-review-content">
												<form name="reviewForm" id='review_form' method="post" action='#'>
													<div class="review-box">
														<ul class="list-review">
															<li>
																<span class="text">Location</span>
																<div class="review-rating"></div>
															</li>
															<li>
																<span class="text">Quality</span>
																<div class="review-rating"></div>
															</li>
															<li>
																<span class="text">Space</span>
																<div class="review-rating"></div>
															</li>
															<li>
																<span class="text">Service</span>
																<div class="review-rating"></div>
															</li>
															<li>
																<span class="text">Price</span>
																<div class="review-rating"></div>
															</li>
														</ul>
													</div>
													<div class="row">
														<div class="col-lg-6">
															<input type='text' name='name' id='username' class="form-controllar"  aria-required="true" placeholder="Full Name">
														</div>
														<div class="col-lg-6">
															<input type='text' name='email' id='email-comments' class="form-controllar"  aria-required="true" placeholder="Email Address">
														</div>
														<div class="col-lg-12">
															<input type='text' name='title' class="form-controllar"  aria-required="true" placeholder="Review Title">
														</div>
														<div class="col-12">
															<textarea name='message' id='message' class="form-controllar" aria-required="true" placeholder="Your Review"></textarea>
														</div>
														<div class="col-12">
															<div class="input-file">
																<input type='file' id='upload_file'>
																<label for="upload_file"> <span class="icon-photo-camera"></span> add Photos</label>
															</div>
														</div>
														<div class="col-lg-12">
															<div class="input-check">
																<input type='checkbox' id="agree">
																<label for="agree">Save my name, email, and website in this browser for the next time I comment</label>
															</div>
														</div>
														<div class="col-12">
															<div class="form-submit">
																<button class="btn btn-default btn-black" type="submit">Submit Review <span class="fas fa-caret-right"></span></button>
															</div>
														</div>
													</div>
												</form> 
											</div>
										</div>
									</div><!--~./ end listing leave review ~-->
								</div>
							</div>
							
							<!--~~~~~ Start sidebar ~~~~~-->
							<div class="col-lg-4">
								<div class="sidebar-todos mrt-md-60">
									<!--~~~ Start Reservation Widget ~~~--> 
									<aside class="widget online-reservation-widget">
										<h4 class="widget-title">Online Reservation</h4>
										<div class="widget-content">
											<form name="reservationForm" id='reservation_form' method="post" action='#'>
												<div class="res-group">
													<span class="icon-user-1"></span>
													<input id="res_name" placeholder="Full Name" type="text" class="form-controllar">
												</div>
												<div class="res-group">
													<span class="icon-email"></span>
													<input id="res_email" placeholder="Email" type="email" class="form-controllar">
												</div>
												<div class="res-group">
													<span class="icon-call"></span>
													<input id="res_phone" placeholder="Phone Number" type="text" class="form-controllar">
												</div>
												<div class="res-group">
													<span class="icon-user-1"></span>
													<select class="select-custom">
														<option>Persons No.</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
												<div class="res-group">
													<span class="icon-calendar1"></span>
													<input type='text' name='date' id='res_date' class="form-controllar"  placeholder="Date & Time">
												</div>
												<div class="form-submit">
													<button class="btn btn-default">Submit Now</button>
												</div>
											</form> 
										</div>
									</aside><!--~./ end eservation widget ~-->
									
									<!--~~~ Start Location Widget ~~~--> 
									<aside class="widget map-location-widget">
										<h4 class="widget-title">Location</h4>
										<div class="widget-content">
											<div id="widget_location"></div>
										</div>
									</aside><!--~./ end location widget ~-->
									
									<!--~~~ Start Business Info Widget ~~~--> 
									<aside class="widget bt-business-info-widget">
										<h4 class="widget-title">Business Information</h4>
										<div class="widget-content">
											<ul class="info-list">
												<li><a href="#"><span class="icon-location3"></span>1900 Pico Blvd Santa Monica, CA</a></li>
												<li><a href="#"><span class="icon-phone2"></span>02  001 021 258 963</a></li>
												<li><a href="mailto:arafawy@backyard.biz"><span class="icon-email"></span>arafawy@backyard.biz</a></li>
												<li><a href="#"><span class="icon-broken-link"></span>thebackyard.biz</a></li>
											</ul>
										</div>
									</aside><!--~./ end business info widget ~-->
									
									<!--~~~ Start Open Hours Widget ~~~--> 
									<aside class="widget open-hours-widget">
										<h4 class="widget-title">Open Hours</h4>
										<div class="widget-content">
											<div class="listing-hours-list">
												<div class="listing-day">
													<div class="day">Monday</div>
													<div class="time-items">
														<span class="time">07:00 AM - 09:00 PM</span>
													</div>
												</div><!--./ listing-day -->
												<div class="listing-day">
													<div class="day">Tuesday</div>
													<div class="time-items">
														<span class="time">07:00 AM - 09:00 PM</span>
													</div>
												</div><!--./ listing-day -->
												<div class="listing-day">
													<div class="day">Wednesday</div>
													<div class="time-items">
														<span class="time">07:00 AM - 09:00 PM</span>
													</div>
												</div><!--./ listing-day -->
												<div class="listing-day">
													<div class="day">Thursday</div>
													<div class="time-items">
														<span class="time">07:00 AM - 09:00 PM</span>
													</div>
												</div><!--./ listing-day -->
												<div class="listing-day">
													<div class="day">Friday</div>
													<div class="time-items">
														<span class="time">07:00 AM - 09:00 PM</span>
													</div>
												</div><!--./ listing-day -->
												<div class="listing-day">
													<div class="day">Saturday</div>
													<div class="time-items">
														<span class="time">07:00 AM - 09:00 PM</span>
													</div>
												</div><!--./ listing-day -->
												<div class="listing-day closed">
													<div class="day">Sunday</div>
													<div class="time-items">
														<span class="time">Closed</span>
													</div>
												</div><!--./ listing-day -->
											</div>
										</div>
									</aside><!--~./ end open hours widget ~-->
									
									<!--~~~ Start Statistic Widget ~~~--> 
									<aside class="widget statistic-widget">
										<h4 class="widget-title">Statistic</h4>
										<div class="widget-content">
											<div class="statistic-list">
												<div class="statistic-item">
													<span class="icon-compass1"></span>Views
												</div>
												<div class="statistic-item">
													<span class="icon-review-1"></span>2 Ratings
												</div>
												<div class="statistic-item">
													<span class="icon-bookmark1"></span>Favorite
												</div>
												<div class="statistic-item">
													<span class="icon-share1"></span>65 Share
												</div>
											</div>
										</div>
									</aside><!--~./ end statistic widget ~-->
									
									<!--~~~~~ Start About Us Widget ~~~~~--> 
									<aside class="widget bt-about-us-widget">
										<h4 class="widget-title">Added By</h4>
										<div class="widget-content">
											<div class="about-info">
												<div class="thumb">
													<img src="assets/images/widget/author.png" alt="img">
												</div>
												<div class="info">
													<h3 class="name"><?php echo $row['user_name']?></h3>
													<p>Member Since Ocotber 2015</p>
												</div>
											</div>
											<ul class="info-list list">
												<li><a href="#"><span class="icon-phone2"></span><?php echo $row['mobile']?></a></li>
												<li><a href="mailto:arafawy@backyard.biz"><span class="icon-email"></span><?php echo $row['email'] ?></a></li>
												<li><a href="#"><span class="icon-facebook2"></span>CreativeWebDesigner</a></li>
												<li><a href="#"><span class="icon-instagram"></span>#EeveryDayDesign</a></li>
												<li><a href="#"><span class="icon-dribbble"></span>CreativeDesign</a></li>
											</ul>
										</div>
									</aside><!--~./ end about us widget ~-->
									<!--~~~ Start Bookmark Widget ~~~--> 
									<aside class="widget bookmark-widget">
										<div class="widget-content">
											<div class="bookmark-btn-area">
												<button class="btn btn-default btn-black">Login to  Bookmarks Items</button>
												<p>14 people bookmarked this place</p>
											</div>
										</div>
									</aside><!--~./ end bookmark widget ~-->
								</div>
							</div><!--~./ end sidebar ~-->
						</div>
					</div>
				</div><!--~./ end single listing todo main area ~-->
			</div><!--~./ end single listing todo block ~-->
			
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
			<?php
				include('inc/footer1.php');
			?><!--~./ end site footer ~-->
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
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCO5gB5AYjVEtuZxzRDMCOQ8_PEXikYRcg"></script>
    <script src="assets/js/widget-maps.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script><!-- main-js -->
	</body>
</html>