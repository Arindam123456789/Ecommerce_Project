<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>Customer Management
        
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <!-- <div class="form-group">
                    <a class="btn btn-primary" href="<?php //echo base_url(); ?>addNew"><i class="fa fa-plus"></i> Add New</a>
                </div> -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Users List</h3>
                    <div class="box-tools">
                       
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Address</th>
                     <!--  <th class="text-center">Actions</th> -->
                    </tr>


                      <?php
                    if(!empty($C_List))
                    {
                        foreach($C_List as $user)
                        {

                           ?>
                      <tr>

                      <td><?php echo $user['id'];?></td>
                      <td><?php echo $user['name'];?></td>
                      <td><?php echo $user['email'];?></td>
                      <td><?php echo $user['mobile'];?></td>
                      <td><?php echo $user['address'];?></td>
                      <td class="text-center">

                       <!--  <a href=""><button>Block</button></a>

                        <a href=""><button>Unblock</button></a> -->
                          <!-- <a class="btn btn-sm btn-danger deleteUser" href="<?php echo base_url().'editOld/'.$user['id']; ?>"><i class="fa fa-pencil"></i></a> -->
                          <!-- <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $user['id']; ?>"><i class="fa fa-trash"></i></a> -->
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
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
