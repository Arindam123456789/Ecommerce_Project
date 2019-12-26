<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | V-kart</title>


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

		
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="<?php echo base_url() ?>"><div class="companyinfo">
							                  <h2><span>V</span>-KART</h2>
							   </div>
						    </a>
						</div>
						
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url() ?>home"><i class="fa fa-home"></i>Home</a></li>
								<li><a href="<?php echo base_url() ?>shop"><i class="fa fa-star"></i>Products</a></li>
								
								<?php if ($this->session->userdata('email')) 
                                    {
                                                  ?>
								
                                 <?php } else {?>
                                 
                                 <li><a href="<?php echo base_url() ?>HomeController/site_user_login"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                             <?php  } ?>
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
										<li><a href="<?php echo base_url() ?>HomeController/contact_Us">Contact Us</a></li> 
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



	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">About <strong>Us</strong></h2>    			    				    				
					<!-- <div id="gmap" class="contact-map">
					</div> -->
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">

	    						V-kart.com, is an Indian multinational technology company based on e-commerce website, cloud computing, digital streaming, and artificial intelligence. It is considered one of the Big Four tech companies, along with Google, Apple, and Facebook.

V-kart is known for its disruption of well-established industries through technological innovation and mass scale.It is the India's largest online marketplace, AI assistant provider, and cloud computing platform as measured by revenue and market capitalization. V-kart is the largest Internet company by revenue in the world. It is the second largest private employer in Kolkata and one of the India's most valuable e-commerce website.<br><br><br>

V-kart was founded PHP Batch of Ejob India in Saltlake, Kolkata, in Auguest 2019. The company initially started as an online marketplace to sell electronic Products such as Mobile, Computer, Desktops etc. In  sep, 2019, V-kart surpassed Walmart as the most valuable retailer in India by market capitalization. In Nov, 2019, We announced Our two-day delivery service, V-kart Prime, had surpassed 100 million subscribers worldwide.<br><br>

V-kart distributes downloads and streaming of video, music, and audiobooks through its V-kart Prime Video, V-kart Music, and Audible subsidiaries. 
	    
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>V-MART Inc.</p>
							<p>SaltLake, Sector 5, IN</p>
							<p>Kolkata</p>
							<p>Mobile: +91 8017 054 117</p>
							<p>Email: Vivekmallick09@.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div>
	
	
	<br><br><br>



<!-------------------------------------------------------------------------------------------->


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