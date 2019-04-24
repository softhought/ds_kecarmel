 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/js/adm_scripts/gallery.js"></script>  
<!-- Stylesheets -->

<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> -->

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/plugins.css">

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">



<!-- Cusom css -->

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

<style>
.box-title{
	font-weight:300;
	color:#fff;
}
</style>

<link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom_style.css">
<section class="content">
<section class="content-header">
      <!-- <h1>
        Dashboard
        <small>Control panel</small>
      </h1> -->
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Album List</li>
      </ol>
    </section>

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Images List</h3>
             
               <a href="<?php echo base_url();?>gallery/addImage" class="link_tab"><span class="glyphicon glyphicon-plus"></span> ADD</a>&nbsp;
            </div>

  <!-- /.box-header -->
  <div class="box-body">
		<!-- Start Our Gallery Area -->
	
			<div class="container">
			
				<div class="row">
					<div class="col-sm-10" style="margin-top:50px;">

					<?php
					// echo "<pre>";
					// print_r($bodycontent['albumList']);
					// echo "</pre>";
					?>
						<div class="gallery__menu">
                            <button data-filter="*"  class="is-checked" style="margin-top: 4px;">All</button>
														<?php 
															foreach ($bodycontent['albumList'] as $value) {
															
														?>
                            <button data-filter=".<?php echo $value->album_class;?>"><?php echo $value->name;?></button>
														<?php }?>
                      	</div>
					</div>
				</div>

				<?php 
			

				?>
				<div class="row galler__wrap masonry__wrap mt--80">

				
				
						

					<!-- Start  cat--2 -->
						<?php 
						foreach ($bodycontent['imageList'] as  $value) {

				   					foreach ($value['imageData'] as  $imagerow) {
				   			
				   ?>
					<!-- Start Single Gallery -->
					<div class="col-lg-3 col-md-3 col-sm-6 col-12 gallery__item <?php echo $imagerow->album_class;?>" >
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img style="width:280px;" src="<?php echo base_url().$imagerow->img_loc.$imagerow->directory;?>/small/<?php echo $imagerow->random_file_name_small;?>" alt="gallery images" >
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url().$imagerow->img_loc.$imagerow->directory;?>/big/<?php echo  $imagerow->random_file_name_big;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li>
											<a href="javascript:;" class="delete_image "
											data-imageid="<?php echo $imagerow->id; ?>"
											>
												<i class="fa fa-trash"></i>
											</a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					 <?php 
							 }
							 
					} // end of imageList foreach
				 
				 ?>
					
					<!-- End  cat--2 -->




				
				</div>	
			</div>


			</div>
	</div>
	</section>
    <!-- /.content -->	








<script src="<?php echo base_url();?>assets/js/plugins.js"></script>

<script src="<?php echo base_url();?>assets/js/active.js"></script>
