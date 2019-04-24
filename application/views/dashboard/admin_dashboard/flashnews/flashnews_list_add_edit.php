<script src="<?php echo base_url(); ?>assets/js/adm_scripts/flashnews.js"></script>  
<style type="text/css">

</style>
   <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Flash News <?php echo $bodycontent['mode']; ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary formBlock">
              <div class="box-header with-border">
                <h3 class="box-title">Flash News </h3>
                 <a href="<?php echo base_url();?>flashnews" class="link_tab"><span class="glyphicon glyphicon-list"></span> List</a>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
             
              <?php 
              $attr = array("id"=>"flashnewsForm","name"=>"flashnewsForm");
              echo form_open('',$attr); ?>
                <div class="box-body">
                          <input type="hidden" name="flashnewsID" id="flashnewsID" value="<?php echo $bodycontent['flashnewsID']; ?>" />
                          <input type="hidden" name="mode" id="mode" value="<?php echo $bodycontent['mode']; ?>" />
                  <div class="row">

                      <div class="col-md-12">
                          <div class="form-group">
                            <label for="eqpname">No of Line for News </label>
                            <div class="radio">
              
                    <label>
                      <input type="radio" name="lineno" id="lineno_1" value="1" checked="" 
                      <?php if(($bodycontent['mode']=="EDIT") && $bodycontent['flashnewsEditdata']->lineno==1){echo "checked";}else{echo "";} ?>

                      >
                      One 

                    </label>&nbsp;
                    <label>
                      <input type="radio" name="lineno" id="lineno_2" value="2"  <?php if(($bodycontent['mode']=="EDIT") && $bodycontent['flashnewsEditdata']->lineno==2){echo "checked";}else{echo "";} ?>
                      >
                      Two
                    </label>&nbsp;
                      <label>
                      <input type="radio" name="lineno" id="lineno_3" value="3"
                      <?php if(($bodycontent['mode']=="EDIT") && $bodycontent['flashnewsEditdata']->lineno==3){echo "checked";}else{echo "";} ?>
                      >
                      Three
                    </label>&nbsp;
                     <label>
                      <input type="radio" name="lineno" id="lineno_4" value="4" 
                      <?php if(($bodycontent['mode']=="EDIT") && $bodycontent['flashnewsEditdata']->lineno==4){echo "checked";}else{echo "";} ?>
                      >
                      Four
                    </label>&nbsp;
                     <label>
                      <input type="radio" name="lineno" id="lineno_5" value="5" 
                      <?php if(($bodycontent['mode']=="EDIT") && $bodycontent['flashnewsEditdata']->lineno==5){echo "checked";}else{echo "";} ?>

                      >
                      Five
                    </label>&nbsp;
                  </div>

                          </div>
                      </div><!-- end of col-md-12 -->


            
                  <div class="col-md-12">
                          <div class="form-group">
                            <label for="eqpname">Line One  &nbsp;<span style="color: #a4889b;"> [Max 50 characters]</span></label>
                            <input type="text" class="form-control forminputs " id="lineone" name="lineone" placeholder="" autocomplete="off" value="<?php if($bodycontent['mode']=="EDIT"){echo $bodycontent['flashnewsEditdata']->line_one;}?>" >

                          </div>
                  </div><!-- end of col-md-12 -->

                   <div class="col-md-12" id="line_div_2">
                          <div class="form-group">
                            <label for="eqpname">Line Two  &nbsp;<span style="color: #a4889b;"> [Max 50 characters]</span></label>
                            <input type="text" class="form-control forminputs " id="linetwo" name="linetwo" placeholder="" autocomplete="off" value="<?php if($bodycontent['mode']=="EDIT"){echo $bodycontent['flashnewsEditdata']->line_two;}?>" >

                          </div>
                  </div><!-- end of col-md-12 -->

                 <div class="col-md-12" id="line_div_3">
                          <div class="form-group">
                            <label for="eqpname">Line Three  &nbsp;<span style="color: #a4889b;"> [Max 50 characters]</span></label>
                            <input type="text" class="form-control forminputs " id="linethree" name="linethree" placeholder="" autocomplete="off" value="<?php if($bodycontent['mode']=="EDIT"){echo $bodycontent['flashnewsEditdata']->line_three;}?>" >

                          </div>
                  </div><!-- end of col-md-12 -->

                <div class="col-md-12" id="line_div_4">
                          <div class="form-group">
                            <label for="eqpname">Line Four  &nbsp;<span style="color: #a4889b;"> [Max 50 characters]</span></label>
                            <input type="text" class="form-control forminputs " id="linefour" name="linefour" placeholder="" autocomplete="off" value="<?php if($bodycontent['mode']=="EDIT"){echo $bodycontent['flashnewsEditdata']->line_four;}?>" >

                          </div>
                  </div><!-- end of col-md-12 -->

               <div class="col-md-12" id="line_div_5">
                          <div class="form-group">
                            <label for="eqpname">Line Five  &nbsp;<span style="color: #a4889b;"> [Max 50 characters]</span></label>
                            <input type="text" class="form-control forminputs " id="linefive" name="linefive" placeholder="" autocomplete="off" value="<?php if($bodycontent['mode']=="EDIT"){echo $bodycontent['flashnewsEditdata']->line_five;}?>" >

                          </div>
                  </div><!-- end of col-md-12 -->



                   

                      
                     
                  </div>

                  <p id="error_msg" class="form_error"></p>

                  <div class="btnDiv">
                      <button type="submit" class="btn btn-primary formBtn" id="flashnewssavebtn"><?php echo $bodycontent['btnText']; ?></button>
                    
					            <span class="btn btn-primary formBtn loaderbtn" id="loaderbtn" style="display:none;"><i class="fa fa-spinner rotating" aria-hidden="true"></i> <?php echo $bodycontent['btnTextLoader']; ?></span>
                  </div>
                  
                </div>
                <!-- /.box-body -->

                <!-- <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div> -->
              <?php echo form_close(); ?>

              <div class="response_msg" id="flashnews_response_msg">
               
              </div>

            
            </div>
            <!-- /.box -->      
      </div>
    </div>

    </section>
    <!-- /.content -->