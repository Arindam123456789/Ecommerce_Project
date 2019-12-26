<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Product List Management
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Product Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" id="addUser" action="<?php echo base_url() ?>UpdateProductData" method="post" role="form" enctype="multipart/form-data">
                        <input type="hidden" name="productid" value="<?php echo $productType['id']; ?>">
                        <div class="box-body">
                            
                            <!-- <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="role">Product Type</label>
                                        <select class="form-control required" id="type_id" name="type_id"> -->
                                            <!-- <option value="0">Select Product Type</option> -->
                                            <!-- <?php
                                            if(!empty($productType))
                                            {
                                                foreach ($productType as $pt)
                                                {
                                                    ?>
                                                    <option value="<?php echo $pt->id ?>"><?php if( $pt->type_name == 'laptop'){ echo "selected";} ?><?php echo $pt->type_name ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>  


                            </div> -->

                            <!-- <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="role">Product Brand</label>
                                        <select class="form-control required" id="brand_id" name="brand_id">
                                            <option value="0">Select Product Brand</option>
                                            <?php
                                            if(!empty($productBrand))
                                            {
                                                foreach ($productBrand as $pb)
                                                {
                                                    ?>
                                                    <option value="<?php echo $pb->id ?>"><?php echo $pb->brand_name ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>  

                                
                            </div> -->

                             <div class="row">

                              <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="ptname">Product Name</label>
                                        <input type="text" class="form-control required" id="product_name" name="product_name" maxlength="128" value="<?php echo $productType['p_name']; ?>">
                                    </div>
                                    
                                </div>  
                            </div>

                            <div class="row">
 
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="pbqty">Product Price</label>
                                        <input type="text" class="form-control required" id="product_price" name="product_price" maxlength="128" value="<?php echo $productType['price']; ?>">
                                    </div>
                                    
                                </div>
                            </div>


                            <div class="row">

                              <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="ptname">Product Description</label>
                                        <textarea class="form-control required" id="product_description" name="product_description" cols="30" rows="5"><?php echo $productType['p_descrption']; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                              <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="ptname">Product Image</label>
                                        <input type="file" class="form-control required" id="p_image" name="p_image" value="<?php echo base_url().'/uploads/'.$productType['image']; ?>">
                                    </div>
                                </div>
                            </div>
                           
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Update" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>