<?php

echo "payment page";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payment | V-Kart</title>
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
    

    <!--header-middle-->
    <div class="header-middle">
      <div class="container">
       
          </div> 
          <div class="col-md-8 clearfix">
            <div class="shop-menu clearfix pull-right">
            
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
                <li><a href="index.html">Home</a></li>
                <li class="dropdown"><a href="#">My Profile<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">My Orders</a></li>

                   <!--  <li><a href="product-details.html">Product Details</a></li> 
                    <li><a href="checkout.html">Checkout</a></li>  -->
                    <li><a href="cart.html" class="active">Contact Us</a></li> 
                    <li><a href="product-details.html">About Us</a></li> 
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
<br><br><br>

<div class="col-sm-5 clearfix">
            <div class="bill-to">
              <p>Bill To</p>
              <form method="post" action="<?php echo base_url().'HomeController/checkoutdtl'?>">
              <div class="form-one">
                
                  <!-- <input type="text" name="cmpname" placeholder="Company Name"> -->
                  <input type="text" name="email" placeholder="Email*"><?php echo form_error('email');?><br><br>
                  <input type="text" name="title" placeholder="Title*"><?php echo form_error('title');?><br><br>
                  <input type="text" name="fstname" placeholder="First Name *"><?php echo form_error('fstname');?><br><br>
                  <!-- <input type="text" name="mdlname" placeholder="Middle Name"> -->
                  <input type="text" name="lstname" placeholder="Last Name *"><?php echo form_error('lstname');?><br><br>
                  <input type="text" name="add1" placeholder="Address*"><?php echo form_error('add1');?><br><br>
                  <!-- <input type="text" name="add2" placeholder="Address 2"> -->
                
              </div>
              <div class="form-two">
                
                  <input type="text" placeholder="Zip / Postal Code *" name="country"><?php echo form_error('country');?><br><br>
                  <select><br><br>
                    <option>-- Country --</option>
                    <option>United States</option>
                    <option>Bangladesh</option>
                    <option>UK</option>
                    <option>India</option>
                    <option>Pakistan</option>
                    <option>Ucrane</option>
                    <option>Canada</option>
                    <option>Dubai</option>
                  </select><br><br>
                  <select name="state"><?php echo form_error('state');?><br><br>
                    <option>-- State / Province / Region --</option>
                    <option>West Bengal</option>
                    <option>Andhra pradesh</option>
                    <option>Uttar pradesh</option>
                    <option>Odisha</option>
                    <option>Telangana</option>
                    <option>Maharastra</option>
                    <option>Gujrat</option>
                    <option>Arunachal Pradesh</option>
                  </select><br><br>
                  <input type="hidden" name="checkouttime" value="<?= date('Y-m-d h:i:sa'); ?>">
                  <input type="password" name="password" placeholder="Confirm password*"><?php echo form_error('password');?><br><br>
                  <input type="text" name="contact" placeholder="Phone *"><?php echo form_error('contact');?><br><br>
                  
                   </div>
                  <br><br><br>
                  <input type="submit" class="btn btn-primary" href="javascript:void(0)" value="Continue" >&nbsp;&nbsp;

                </form>

              </div>
            </div>
     




<script type="text/javascript">
  function orderplacing()
  {
    var out=confirm("order has been successfully placed");

    if(out)
    {
      var url="<?php echo  base_url() ?>";
      window.location = url;
    }
  }
</script>


<script src="<?php echo base_url() ?>/assets/js/jquery.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url() ?>/assets/js/jquery.scrollUp.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/price-range.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>

  <?php } ?>
</body>
</html>