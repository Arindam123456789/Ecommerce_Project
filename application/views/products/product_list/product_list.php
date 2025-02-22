<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Product Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
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
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>addNewProduct"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Products List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>productListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Id</th>
                      <th>Product Name</th>
                      <th>Descrption</th>
                      <th>image</th>
                      <th>price</th>
                      <th>Date</th>

                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($productRecords))
                    {
                        foreach($productRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->id ?></td>
                      <td style="width: 90px; height: auto;"><?php echo $record->p_name ?></td>
                      <td style="width: 350px; height: auto;"><?php echo $record->p_descrption ?></td>
                      <td style="width: 90px; height: auto;"><img src="<?php echo base_url() ?>uploads/<?php echo $record->image; ?>  ?>" width="50" height="50" alt="" /></td>
                      <td style="width: 90px; height: auto;"><?php echo $record->price ?></td>
                      <td style="width: 90px;"><?php echo $record->created_at ?></td>
                      <td class="text-center" >
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->id; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger"  href="javascript:void(0)" onclick="deleteProduct('<?php echo $record->id ?>')" ><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>

    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "productListing/" + value);
            jQuery("#searchList").submit();
        });
    });


    function deleteProduct(productId){
      var conf = confirm("Do you really want to delete this product?");

      if(conf){

        var url= "<?php echo  base_url() ?>deleteProduct/"+productId; 
        window.location = url; 
      }else{
        alert("Product delete operation is cancelled! :)")
      }
    }
</script>



