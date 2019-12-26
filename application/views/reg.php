<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>



</head><!--/head-->

           
				
				 <meta charset="utf-8">
   
    
    <link href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/css/font-awesome.min.css" rel="stylesheet">
   





	<style type="text/css">

		body{
			background-color: whitesmoke;
		}
		
		input{
			border-radius: 10px;
		
		}

		button{
			border-radius: 10px;
			background-color: orange;
		}

		select{
			border-radius: 8px;
			background-color: lightgrey;

		}

	</style>
</head>
<body>

	<center>
		<div style="background-color: lightgrey;">
			
			        

		</div>
		
		<br>





		<div style="background-color: orange;">
			<div class="col-md-12 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Home</a></li>
								<li><a href=""><i class="fa fa-info"></i> About Us</a></li>
								<!-- <li><a href=""><i class="fa fa-star"></i> Productlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="<?php //echo base_url() ?>HomeController/login_operations"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="<?php //echo base_url() ?>HomeController/admin_operations"><i class="fa fa-user"></i> Admin</a></li> -->
								<li><a href="<?php echo base_url() ?>HomeController/contact_Us"><i class="fa fa-phone"></i>Contact Us</a></li>
							</ul>
						</div>
					</div>
			<h2>New User Registration</h2>
			<br>
		</div>





		
	<form method="POST" action="<?php echo base_url().'user_registration'; ?>" style="text-align: center;">
			<br><br>

			

			Name :
			<input type="text" name="uname" placeholder="Enter Your Name" value="<?php if(isset($_POST['uname'])) {echo $_POST['uname'];} ?>"><?php echo form_error('uname');?>

			<br><br>


			Email :
			 <input type="email" name="umail" placeholder="Enter Your Email" value="<?php if(isset($_POST['umail'])) {echo $_POST['umail'];} ?>"><?php echo form_error('umail');?> 

			<br><br>


		    Create Password :
			<input type="password" name="upass" placeholder="Create Password" value="<?php if(isset($_POST['upass'])) {echo $_POST['upass'];} ?>"><?php echo form_error('upass');?> 

			<br><br>


		    Full Address :
		<input type="text" name="uadd" placeholder="Enter full address" value="<?php if(isset($_POST['uadd'])) { echo $_POST['uadd'];} ?>"> <?php echo form_error('uadd');?> 
		
		    <br><br>
		
		    Mobile No. :
		<input type="number"  name="uphone" placeholder="Enter Your Number" value="<?php if(isset($_POST['mob'])) { echo $_POST['uphone'];} ?>"><?php echo form_error('uphone');?>

		    <br><br>

		    Pin Code No. :
		<input type="number" name="upin" placeholder="Enter Your Pin Code" value="<?php if(isset($_POST['upin'])) { echo $_POST['upin'];} ?>"><?php echo form_error('upin');?>

		    <br><br>

		    City :
		<select name="uloc">
 		<option>---CHOOSE--</option>
 		<option value="BANGALORE">BANGALORE</option>
 		<option value="KOLKATA">KOLKATA</option>
 		<option value="DELHI">DELHI</option>
 		<option value="MUMBAI">MUMBAI</option>
 		<option value="CHENNAI">CHENNAI</option>
 		</select>
 		<?php echo form_error('uloc');?> 

 		    <br><br>

		    Gender :
		<input type="radio" name="ugen" value="male">Male
		<input type="radio" name="ugen" value="female">Female
		<input type="radio" name="ugen" value="female">Others

		<?php //echo form_error('ugen');?>

		    <br><br>



		<input type="submit" name="regbtn" class="btn btn-default" value="SignUp">
		 <br> <br> <br>
          </form>
    <button type="submit" name="regbtn" class="btn btn-default"><a class="small" href="<?php echo base_url()?>HomeController/site_user_login">Already Member?</a></button>	
	    

	
<br><br><br><br><br>



  <div style="background-color: lightgrey;">

  

  <!-- <div class="footer-bottom">
      <div class="container">
        <div class="row"> -->
          <a>Copyright © 2019 V-KART Inc. All rights reserved...Our PHP Batch!</a>
          <!-- <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com"></a></span></p> -->
      <!--   </div>
      </div>
    </div> -->
    

    </div>

    </center>

</body>
</html>