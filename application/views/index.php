<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | V-Cart</title>


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
				
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a><!--<h1>SaAmVaRs</h1>--><div class="companyinfo">
							                  <h2><span>V</span>-Kart</h2>
							                                            </div>
						    </a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
	
								<li><a href="<?php echo base_url() ?>shop"><i class="fa fa-star"></i>Products</a></li>
								
								<?php if ($this->session->userdata('email')) 
                                    {
                                                  ?>
								<!-- <li><a href="<?php echo base_url() ?>HomeController/cart_op"><i class="fa fa-shopping-cart"></i> Cart</a></li> -->
                                 <?php } else {?>
                                 
                                 <li><a href="<?php echo base_url() ?>HomeController/site_user_login"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                             <?php  } ?>

								<li><a href="<?php echo base_url() ?>HomeController/about_Us"><i class="fa fa-info"></i> About Us</a></li>
								<li><a href="<?php echo base_url() ?>HomeController/contact_Us"><i class="fa fa-phone"></i>Contact Us</a></li>

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
								<li class="dropdown"><a href="#">Menu<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo base_url() ?>shop">Explore Products</a></li> 
										<?php if ($this->session->userdata('email')) 
                                        {
                                           ?>
										<li><a href="<?php echo base_url() ?>HomeController/add_to_cart">My Cart</a></li> 
										<li><a href="<?php echo base_url().'HomeController/logout' ?>">LogOut</a></li>
									<?php }else {?>

										<li><a href="<?php echo base_url() ?>site_user_login">SignIn / SignUp</a></li>
										<li><a href="<?php echo base_url() ?>adminLogin">Admin</a></li>

									<?php } ?>
										
                                    </ul>
                                </li> 
                             </li> 


 						 </ul>
						</div>
					</div>
					<div class="col-sm-3">
						<!-- <div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div> -->
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
						
									<p>V-kart.com, Inc., is an Indian multinational e-commerce website. It is considered one of the Big Four tech companies, along with Google, Apple, and Facebook.</p>
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
									<p>Explore vast selection of products from Top Brands. Pay on Delivery. Easy & Fast Delivery. No Cost EMI Available. Huge Selection. Best Deals. Great Offers.</p>
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
									<p>Buy electronics product online at best prices in India. Shop from a huge range of electronic products such as Mobiles, laptops, Computers, desktops & more at V-Kart</p>
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
									<?php  
										foreach ($eachCategory['brand_list'] as $key1 => $valueBrandList) 
											{ ?>
													<a><li> <?php echo $valueBrandList['brand_name']; ?></li></a>
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
								<a>
									<div class="brands-name" style="text-align: center;">
										<ul class="nav nav-pills nav-stacked">
											
												<li><?php echo $eachbrand['brand_name']; ?></li>
											
										</ul>
									</div>
								</a>
								
							<?php } ?>
						</div><!--/brands_products-->
						
						<!-- <div class="price-range">
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="100000" data-slider-step="5" data-slider-value="[500,1000]" id="sl2" ><br />
								 <b class="pull-left">INR 0</b> <b class="pull-right">INR 100000</b>
							</div>
						</div> --><!--/price-range-->
						
					
					</div>
				</div>
     



<!-------------------------------------------------------------------------------------------->


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
								
										</div>
										  <div class="product-overlay">
											<div class="overlay-content">
												<h2></h2>
												<p></p>

												<?php if ($this->session->userdata('email')) 
                                                   {
                                                  ?>
							<a href="<?php echo base_url() ?>buynow/<?php echo $p_img['id'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add To Cart</a>

							<a href="<?php echo base_url() ?>HomeController/add_to_cart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
											<?php 
										        }
										        else
										        {
											    ?>
											    <a href="<?php echo base_url() ?>HomeController/site_user_login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add To Cart</a>

											    <a href="<?php echo base_url() ?>HomeController/site_user_login" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Buy Now</a>
											<?php } ?>
												
										   </div>
										</div>
								     </div>
							     </div>
						      </div>

						  <?php  }    ?>


						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->

						<!-- Category tab -->
						
					</div><!--/category-tab--><br><br>
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center"><a href="<?php echo base_url() ?>shop">See All Products</a></h2>

					

					
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
		
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2019 V-kart Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a>PHP Batch(Aug, 2019)</a></span></p>
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