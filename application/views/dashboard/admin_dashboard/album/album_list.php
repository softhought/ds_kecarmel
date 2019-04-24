<script src="<?php echo base_url(); ?>assets/js/adm_scripts/album.js"></script>  
<style>

#contralist td{
vertical-align: inherit;
}
.status_serial{
  float: left;
  padding-left:5px; 
}
</style>
 <input type="hidden" value="<?php echo base_url();?>" id="basepath" readonly />
   <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Album List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Album List</h3>&nbsp;
              <a href="<?php echo base_url();?>album/addAlbum" class="link_tab"><span class="glyphicon glyphicon-plus"></span> ADD</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="datatalberes" style="overflow-x:hidden;" id="loadalbumlist">
              <table id="example" class="table table-bordered table-striped dataTables" style="border-collapse: collapse !important;">
                <thead>
                <tr>
                  <th style="width:5%;">Sl</th>
                  <th style="width:10%;">Action</th>
                  <th >Name</th>
                  <th style="width:10%;">Up/Down</th>
                  <th style="width:10%;">Status</th> 
                </tr>
                </thead>
                <tbody>
               
              	<?php 
				          
                      $i = 1;
                      foreach ($bodycontent['albumList'] as $value) {  
                        $status = "";
                        if($value->is_active=="Y")
                        {
                          $status = '<div class="status_dv "><span class="label label-success status_tag albumstatus" data-setstatus="N" data-albumid="'.$value->album_id.'"><span class="glyphicon glyphicon-ok"></span> Active</span></div>';
                        }
                        else
                        {
                          $status = '<div class="status_dv"><span class="label label-danger status_tag albumstatus" data-setstatus="Y" 
                          data-albumid="'.$value->album_id.'"><span class="glyphicon glyphicon-remove"></span> Inactive</span></div>';
                        } 
                        
                       
              	?>

					          <tr>
						            <td><?php echo $i; ?></td>
                       <td>
                          <a href="<?php echo base_url(); ?>album/addAlbum/<?php echo $value->album_id; ?>" class="btn btn-primary btn-xs" data-title="Edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                          </a>
                        </td>
                        <td><?php echo $value->name; ?></td>                                              
                        <td>
                         
                          <div class="status_serial "><span class="status_tag albumserial"
                           data-action="U"
                           data-slno="<?php echo $value->sl_no; ?>"
                           data-albumid="<?php echo $value->album_id; ?>">
                             <img src="<?php echo base_url(); ?>assets/images/icons/up.png" alt="Up" /></div>

                           <div class="status_serial "><span class="status_tag albumserial"
                           data-action="D" 
                           data-slno="<?php echo $value->sl_no; ?>" 
                           data-albumid="<?php echo $value->album_id; ?>">
                             <img src="<?php echo base_url(); ?>assets/images/icons/down.png" alt="Up" /></div>
                       
                        </td>                                              
                        <td><?php echo $status; ?></td>                                             
                       
                    </tr>              			
              	<?php
                    $i++;
              		}

              	?>
                </tbody>
               
              </table>

              </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->