<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | V-kart</title>


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
              <a><div class="companyinfo">
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
                                 
                                

                             <?php  } ?>
                 <li><a href="<?php echo base_url() ?>HomeController/contact_Us"><i class="fa fa-phone"></i>Contact Us</a></li>
                  <li><a href="<?php echo base_url() ?>HomeController/about_Us"><i class="fa fa-info"></i> About Us</a></li>

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
          <h2 class="title text-center"> <strong>Product Details</strong></h2>                                  
          <!-- <div id="gmap" class="contact-map">
          </div> -->
        </div>          
      </div>      
        <div class="row">   
          <div class="col-sm-12">

            <center>

                 
<form method="post" action="<?php echo base_url().'HomeController/add_to_cart'?>">
    <?php 

       foreach ($cartdetails as $ct)
        {
           # code...
       
       ?>

       <div class="form-group">
       <!--  <label>Product Image: </label> -->
        <span id=""><img src="<?php echo base_url().'/uploads/'.$ct['image']; ?>" alt="" height="180px" width="170"></span>
      </div>

     <div class="form-group">
        <label>Model Name: </label>
        <input type="text" name="brandname" value="<?php echo $ct['p_name']; ?>" style="border-style: none;">
      </div>

      
  
     
      <br>
        <div class="form-group">
            <label>Quantity</label>
            <select name="quantity" style="width: 60px;" id="cartquantity" onchange="change_price(<?= $ct['price']?>,this.value);">
                  
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
        </div>
        <br>
        <div class="form-group">
           <label>Total Price: </label> 
           <!-- <span id="totalprice" name="price" value="<?//= $ct['price']; ?>"><?//= $ct['price']; ?></span> -->
            <input readonly="" id="totalprice" type="text" value="<?= $ct['price']; ?>" name="totalprice" style="border-style: none;">
        </div>
        <br>
      <div class="form-group" style="color: green;">
        <label>Items in Stock: </label>
        <input readonly="" id="stockitem" type="text" style="border-style: none;" name="itemstock" value="<?= $itemquan[0]['quantity']; ?>" >
      </div>
         <br>
         

  <?php } ?>
        <div>
        
         <input type="submit" class="btn btn-primary" value="Add to Cart" onclick="save_product_in_cart();">
         </div>
</form>


</center>
      
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


  <script>
    
   function change_price(price,val)
   {
      var total=price*val;
      if(total != 0){
      document.getElementById('totalprice').value=total;
    }
   }

   function save_product_in_cart(){
      var t = $("#totalprice").val();
      var quan=$("#cartquantity").val();
      // alert(t);return false;
      $.ajax({
          type: "POST",
          url: "<?php echo base_url().'HomeController/add_to_cart' ?>",
          data: {price:t,quant:quan},
          success:function(res){
            $("#result").html(res);
            alert("Items successfully added to the cart");
          }
        });
   }

  </script>
  

  
     <script src="<?php echo base_url() ?>/assets/js/jquery.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/bootstrap.min.js"></script> 
  <script src="<?php echo base_url() ?>/assets/js/jquery.scrollUp.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/price-range.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>/assets/js/main.js"></script>
</body>
</html>