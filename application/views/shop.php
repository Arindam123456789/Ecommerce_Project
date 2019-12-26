<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Products | V-Kart</title>


    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>/assets/css/responsive.css" rel="stylesheet">
     
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
							<a href="<?php echo base_url() ?>"><!--<h1>SaAmVaRs</h1>--><div class="companyinfo">
							                  <h2><span>V</span>-Kart</h2>
							                                            </div>
						    </a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								
								 <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i>Home</a></li>
								
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
                                    	 <li><a href="<?php echo base_url() ?>HomeController/contact_Us">Contact Us</a></li>
										<li><a href="<?php echo base_url() ?>HomeController/about_Us">About Us</a></li> 
                                       
										<?php if ($this->session->userdata('email')) 
                                        {
                                           ?>
										<li><a href="<?php echo base_url() ?>HomeController/add_to_cart">My Cart</a></li> 
										<li><a href="<?php echo base_url().'HomeController/logout' ?>">LogOut</a></li>
									<?php }else {?>

										<li><a href="<?php echo base_url() ?>site_user_login">SignIn / SignUp</a></li>
										
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
		
	</section><!--/slider-->
	
	

						<!--shipping-->
						<div class="shipping text-center">
							<img src="images/home/shipping.jpg" alt="" />
						</div>
						<!--/shipping-->
					
					</div>
				</div>
				
			
				<div class="col-md-12" >
					<div class="features_items"><!--features_items--><br>
						<h2 class="title text-center">Features Items</h2>

						<?php foreach ($productList as $key => $p_img) {  ?>
						
						<div class="col-sm-3">
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
						<div class="col-sm-12">

							

					</div><!--/category-tab-->
					
					<!--recommended_items-->
					<div class="recommended_items">
						<h2 class="title text-center"><a href="<?php echo base_url() ?>shop">UP ^</a></h2>

						
						
					

					
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