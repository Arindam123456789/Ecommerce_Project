<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Administor</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style>
    	.error{
    		color:red;
    		font-weight: normal;
    	}
    </style>
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript">
        var baseURL = "<?php echo base_url(); ?>";
    </script>
    
   
  </head>
  <!-- <body class="sidebar-mini skin-black-light"> -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">Home</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Home</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- <img src="<?php //echo base_url(); ?>assets/dist/img/avatar.png" class="user-image" alt="User Image"/> -->
                  <span class="hidden-xs"><!-- <?php echo $name; ?> -->Menu</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/dist/img/avatar.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <!-- <?php echo $name; ?> -->Vivek Mallick
                      <small><!-- <?php echo $role_text; ?> -->Admin</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>loadChangePass" class="btn btn-default btn-flat"><i class="fa fa-key"></i> Change Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Vivek Mallick</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Navigation</li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>dashboard">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span></i>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>productTypeListing" >
                <i class="fa fa-plane"></i>
                <span>Product Type</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>productBrandListing" >
                <i class="fa fa-ticket"></i>
                <span>Product Brand</span>
              </a>
            </li>
             <li class="treeview">
              <a href="<?php echo base_url(); ?>productListing" >
                <i class="fa fa-ticket"></i>
                <span>Product List</span>
              </a>
            </li>
            <?php
            if($role == ROLE_ADMIN || $role == ROLE_MANAGER)
            {
            ?>
           
            <?php
            }
            if($role == ROLE_ADMIN)
            {
            ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>userListing">
                <i class="fa fa-users"></i>
                <span>Users</span>
              </a>
            </li>
            
            <?php
            }
            ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>