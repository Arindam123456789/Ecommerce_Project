
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/animate.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet">
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
  <?php 
  
                if ($this->session->userdata('email')) 
                {
                  
                  echo '<h4>Welcome  - '.$this->session->userdata('email') .'</h4>';
                  ?>

  
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

               <li><a href="<?php echo base_url() ?>home"><i class="fa fa-home"></i>Home</a></li>
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

                    <li><a href="<?php echo base_url() ?>HomeController/contact_Us">Contact Us</a></li> 
                    <li><a href="<?php echo base_url() ?>HomeController/about_Us">About Us</a></li> 
                    <li><a href="<?php echo base_url().'HomeController/logout' ?>">LogOut</a></li> 
                                    </ul>
               
              </ul>
            </div>
          </div>
          <!-- <div class="col-sm-3">
            <div class="search_box pull-right">
              <input type="text" placeholder="Search"/>
            </div>
          </div> -->
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->

  <section id="cart_items">
    <div class="container">
      <!-- <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Shopping Cart</li>
        </ol>
      </div> -->
      <form method="post" action="<?php echo base_url().'HomeController/checkout' ?>">
      <div class="table-responsive cart_info">
        <table class="table table-condensed table-responsive text-center" >
          <thead>
            <tr class="cart_menu">
              <td class="image">Item</td>
              <td class="description">Brand Title</td>
              <td class="price">Price</td>
              <td class="quantity">Quantity</td>
              <td class="total">Total</td>
              <!-- <td>Action</td> -->
            </tr>
          </thead>
          <tbody>
            <?php
          
            $sub=0;
            $temp_total=0;
            $sub_total=0;
            foreach ($cartvalue as $ct)
            {
              //$sub = $sub + $dt->price;
            ?>
            <tr>
              <td class="cart_product">
               <h4> <img src="<?php echo base_url().'/uploads/'.$ct['image']; ?>" alt="" height="40px" width="60"></h4>
              </td>
              <td class="cart_description">
                <h4><?php echo $ct['p_name']; ?></h4>
                
              </td>
              <td class="cart_price">
                <h4 ><span id="cartprice"><?php echo $ct['price']; ?></span></h4>
              </td>
              
              <td class="cart_quantity">
                <h4 ><span id="cartquantity"><?php echo $ct['orderedquantity']; ?></span></h4>   
              </td>

              <td class="cart_total">
                <h4 ><span id="carttotal"><?php echo $ct['price']*$ct['orderedquantity']; ?></span></h4>
              </td>
              
            </tr>

           
          <?php } ?>
          </tbody>
        </table>
        <span id="subtotal"><h4 align="center">SubTotal:&nbsp;&nbsp;<?php $subtotal=0; foreach ($cartvalue as $ct) {$subtotal=$subtotal+($ct['price']*$ct['orderedquantity']);} echo $subtotal; ?></h4></span>
        <center><input type="submit" class="btn btn-primary" value="Checkout" /></center><br><br>
      </div>
    </form>
    </div>
  </section> <!--/#cart_items-->

  <section id="do_action">


  <br><br><br>

  <br><br><br>

  </section><!--/#do_action-->

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

  <!-- <?php } ?> -->
</body>
</html>