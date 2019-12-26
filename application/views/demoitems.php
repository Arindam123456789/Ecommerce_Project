<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

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
<br><br>
<div align="center">
<form method="post" action="<?php echo base_url().'HomeController/add_to_cart'?>">
    <?php 

       foreach ($cartdetails as $ct)
        {
           # code...
       
       ?>
     <div class="form-group">
        <label>Category: </label>
        <input type="text" name="brandname" value="<?php echo $ct['p_name']; ?>" style="border-style: none;">
      </div>
  <br>
     <div class="form-group">
        <label>Product Image: </label>
        <span id=""><img src="<?php echo base_url().'/uploads/'.$ct['image']; ?>" alt="" height="60px" width="80"></span>
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
          <!-- <a href="<?php //echo base_url().'HomeController/add_to_cart' ?>" class="btn btn-primary add-to-cart"><i class="fa fa-shopping-cart"></i>Go To Cart -></a> -->
         <input type="submit" class="btn btn-primary" value="Add to Cart" onclick="save_product_in_cart();">
         </div>
</form>
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