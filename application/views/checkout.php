<!DOCTYPE html>
<html lang="en">
<head>


   <style type="text/css">
      
      input{
        border-radius: 7px;
      }

      select{
        width: 160px;
      }

    </style>



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
  <link href="<?php echo base_url() ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/assets/css/responsive.css" rel="stylesheet">
   
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>assets/images/ico/apple-touch-icon-57-precomposed.png">


    <style type="text/css">
      
      input{
        border-radius: 7px;
      }

     
      select{
        width: 170px;
         border-radius: 7px;
      }

    </style>
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
                
                                 <?php } else {?>
                                 
                                 <li><a href="<?php echo base_url() ?>HomeController/site_user_login"><i class="fa fa-shopping-cart"></i> Cart</a></li>

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
         

             <div class="col-sm-12">       

                  <h2 class="title text-center"><strong>Payment Page</strong></h2>                                  
         
             </div>   

           
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->



   <div id="contact-page" class="container">
      <div class="bg">
        <div class="row">       
                
      </div>      
        <div class="row">   
          <div class="col-sm-12">



                         <center>
                    



                 
             
              <form method="post" action="<?php echo base_url().'HomeController/checkoutdtl'?>">
              <div class="form-one">
                
                 
                  <input type="text" name="email" placeholder="Email*"><?php echo form_error('email');?><br><br>
                  <input type="text" name="title" placeholder="Title*"><?php echo form_error('title');?><br><br>
                  <input type="text" name="fstname" placeholder="First Name *"><?php echo form_error('fstname');?><br><br>
               
                  <input type="text" name="lstname" placeholder="Last Name *"><?php echo form_error('lstname');?><br><br>
                  <input type="text" name="add1" placeholder="Address*"><?php echo form_error('add1');?><br><br>
                  
                
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
                  <input type="submit" class="btn btn-primary" href="javascript:void(0)" value="Continue" style="border-radius: 5px;" >&nbsp;&nbsp;

                </form>



                  <div class="text-center">
                    <br>

                    <button type="submit"  class="btn btn-default"><a class="small" href="<?php echo base_url().'HomeController/registration'?>"  >Create an Account!</a></button>
                  </div>
                  </center>




                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>


<center>







<!-- cthhh -->
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
    <!-- <div class="footer-top">
      <div class="container">
        
      </div>
    </div> -->
    
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