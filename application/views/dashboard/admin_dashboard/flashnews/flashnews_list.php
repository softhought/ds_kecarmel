<script src="<?php echo base_url(); ?>assets/js/adm_scripts/flashnews.js"></script>  
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
        <li class="active">Flash News List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <input type="hidden" name="mode" id="mode" value="LIST" />
		    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Flash News List</h3>&nbsp;
              <a href="<?php echo base_url();?>flashnews/addFlashNews" class="link_tab"><span class="glyphicon glyphicon-plus"></span> ADD</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="datatalberes" style="overflow-x:hidden;" id="loadalbumlist">
              <table id="example" class="table table-bordered table-striped dataTables" style="border-collapse: collapse !important;">
                <thead>
                <tr>
                  <th style="width:5%;">Sl</th>
                  <th style="width:10%;">Action</th>
                  <th >Line One</th>
                  <th >Line Two</th>
                  <th >Line Three</th>
                  <th >Line Four</th>
                  <th >Line Five</th>
                  <!-- <th style="width:10%;">Up/Down</th> -->
                  <th style="width:10%;">Status</th> 
                </tr>
                </thead>
                <tbody>
               
              	<?php 
				          
                      $i = 1;
                      foreach ($bodycontent['flashNewsdata'] as $value) {  
                        $status = "";
                        if($value->is_active=="Y")
                        {
                          $status = '<div class="status_dv "><span class="label label-success status_tag newsstatus" data-setstatus="N" data-newsid="'.$value->news_flash_id.'"><span class="glyphicon glyphicon-ok"></span> Active</span></div>';
                        }
                        else
                        {
                          $status = '<div class="status_dv"><span class="label label-danger status_tag newsstatus" data-setstatus="Y" 
                          data-newsid="'.$value->news_flash_id.'"><span class="glyphicon glyphicon-remove"></span> Inactive</span></div>';
                        } 
                        
                       
              	?>

					          <tr>
						            <td><?php echo $i; ?></td>
                       <td>
                          <a href="<?php echo base_url(); ?>flashnews/addFlashNews/<?php echo $value->news_flash_id; ?>" class="btn btn-primary btn-xs" data-title="Edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                          </a>
                        </td>
                        <td><?php echo $value->line_one; ?></td>                                              
                        <td><?php echo $value->line_two; ?></td>                                              
                        <td><?php echo $value->line_three; ?></td>                                              
                        <td><?php echo $value->line_four; ?></td>                                              
                        <td><?php echo $value->line_five; ?></td>                                              
                <!--         <td>
                         
                          <div class="status_serial "><span class="status_tag albumserial"
                           data-action="U"
                           data-slno="<?php echo $value->sl_no; ?>"
                           data-albumid="<?php echo $value->news_flash_id; ?>">
                             <img src="<?php echo base_url(); ?>assets/images/icons/up.png" alt="Up" /></div>

                           <div class="status_serial "><span class="status_tag albumserial"
                           data-action="D" 
                           data-slno="<?php echo $value->sl_no; ?>" 
                           data-albumid="<?php echo $value->news_flash_id; ?>">
                             <img src="<?php echo base_url(); ?>assets/images/icons/down.png" alt="Up" /></div>
                       
                        </td>  -->                                             
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