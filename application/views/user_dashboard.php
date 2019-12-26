<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>


    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<!-- <div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i>+91 801 705 4117</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> vivekmallick09@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li
							</ul>
						</div>
					</div>
				</div> -->
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><!--<h1>SaAmVaRs</h1>--><div class="companyinfo">
							                  <h2><span>V</span>-KART</h2>
							                                            </div>
						    </a>
						</div>
						<!-- <div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									INDIA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">INDIA</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									INR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">INR</a></li>
									<li><a href="">DOLLER</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href=""><i class="fa fa-user"></i> Account</a></li> -->
								<li><a href=""><i class="fa fa-star"></i>Products</a></li>
								<!-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href=""><i class="fa fa-info"></i> About Us</a></li>
								<li><a href=""><i class="fa fa-phone"></i>Contact Us</a></li>

							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<!--<li><a href="index.html" class="active">Home</a></li>-->
								<li class="dropdown"><a href="#">My Account<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">My Profile</a></li>
										<!-- <li><a href="product-details.html">Cart</a></li>  -->
										<li><a href="<?php echo base_url() ?>site_user_login">My Orders</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<!-- <li><a href="login.html">About Us</a></li>  -->
										<li><a href="<?php echo base_url() ?>">Log Out</a></li>
                                    </ul>
                                </li> 
								<!--<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>-->
                                </li> 
								<!--<li><a href="404.html">404</a></li>-->
								<!--<li><a href="contact-us.html">Contact</a></li>-->


							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>V</span>-KART</h1>
									<h2>Heading</h2>
									<p>model 1 </p>
									<!-- <button type="button" class="btn btn-default get">Get it now</button> -->
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url() ?>assets/images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url() ?>assets/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>V</span>-KART</h1>
									<h2>model 2 </h2>
									<!-- <button type="button" class="btn btn-default get">Get it now</button> -->
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url() ?>assets/images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url() ?>assets/images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>V</span>-KART</h1>
									<h2>Heading</h2>
									<p>model 3 </p>
									<!-- <button type="button" class="btn btn-default get">Get it now</button> -->
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url() ?>assets/images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="<?php echo base_url() ?>assets/images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->

							<?php foreach ($categoryList as $key => $eachCategory) { ?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordian" href="#sportswear_<?php echo $eachCategory['id'] ?>">
												<span class="badge pull-right"><i class="fa fa-plus"></i></span>
												<?php echo $eachCategory['type_name']; ?>
											</a>
										</h4>
									</div>
									
							 		<div id="sportswear_<?php echo $eachCategory['id'] ?>" class="panel-collapse collapse">
										<div class="panel-body">
											<ul>
												<?php  foreach ($eachCategory['brand_list'] as $key1 => $valueBrandList) { ?>
													<a href=""><li> <?php echo $valueBrandList['brand_name']; ?></li></a>
													<br>
											    <?php } ?>
											</ul>
										</div>
									</div>
								 			
								   
									
								

								</div>

							<?php } ?>
							
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>

							<?php foreach ($brandList as $key => $eachbrand) {  ?>
								<a href="">
									<div class="brands-name" style="text-align: center;">
										<ul class="nav nav-pills nav-stacked">
											
												<li><?php echo $eachbrand['brand_name']; ?></li>
											
										</ul>
									</div>
								</a>
								
							<?php } ?>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="100000" data-slider-step="5" data-slider-value="[500,1000]" id="sl2" ><br />
								 <b class="pull-left">INR 0</b> <b class="pull-right">INR 100000</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>

						<?php foreach ($productList as $key => $p_img) {  ?>
						
						


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">

											<img src="<?php echo base_url() ?>uploads/<?php echo $p_img['image']; ?>  ?>"  width="60" height="220"  alt="" />

											<h2><?php echo $p_img['p_name']; ?></h2>
											<p>Rs - <?php echo $p_img['price']; ?></p>
											<!-- <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> -->
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2></h2>
												<p></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												<a href="<?php echo base_url() ?>HomeController/BuyingGate" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
											</div>
										</div>
								</div>
								<!-- <div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div> -->
							</div>
						</div>

						  <?php  }    ?>


						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">

							

               				<ul class="nav nav-tabs">

               					<?php foreach ($categoryList as $key => $eachCategory) { ?>

								<li class="active"><a href="#tshirt" data-toggle="tab"><?php echo $eachCategory['type_name']; ?></a></li>

								<!-- <li><a href="#blazers" data-toggle="tab">LAPTOPS</a></li>
								<li><a href="#sunglass" data-toggle="tab">DESKTOPS</a></li>
								<li><a href="#kids" data-toggle="tab">MOUSE</a></li>
								<li><a href="#poloshirt" data-toggle="tab">KEYBOARDS</a></li> -->
								<?php } ?>
							</ul>

						

						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Mission accompolished</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>

						
						
						<!-- <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<?php foreach ($productList as $key => $p_img) {  ?>
									<div class="col-sm-4">
										

										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2><?php echo $p_img['p_name']; ?></h2>
													<p>Rs - <?php echo $p_img['price']; ?></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>

										
									</div>
									<?php } ?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div> -->

					
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe1.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe2.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe3.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/iframe4.png" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Circle of Hands</p>
								<h2>24 DEC 2014</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Sector-5, New Town(Saltlake)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
			<!-- 
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
	
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Anything Else?</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div> -->
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2019 V-KART Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span>Vicky & Others</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
     <script src="<?php echo base_url() ?>/assets/js/jquery.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script>	
	<script src="<?php echo base_url() ?>/assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/price-range.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>
</body>
</html>