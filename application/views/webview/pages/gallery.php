

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area">
            <div class="ht__bradcaump__container">
            	<img src="<?php echo base_url();?>/assets/images/bg-png/6.png" alt="bradcaump images">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">&nbsp;</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><img src="<?php echo base_url();?>/assets/images/icons/brad.png" alt="separator images"></span>
                                  <span class="breadcrumb-item active">Gallery</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start Our Gallery Area -->
		<div class="junior__gallery__area gallery-page-one gallery__masonry__activation gallery--3 bg-image--25 section-padding--lg-custom">
			<div class="container">
				<div class="row" id="gallery_list">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h2 class="title__line">Image  <span class="title-color2">Gallery </span></h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="gallery__menu">
                            <button data-filter="*"  class="is-checked">All</button>
                            <button data-filter=".cat--1">Art Fest</button>
                            <button data-filter=".cat--2">Alumni Meet</button>
                            <button data-filter=".cat--3">Merit Day</button>
                            <button data-filter=".cat--4">Teachers' Day Celebration 2018-19</button>
                            <button data-filter=".cat--5">Annual Sports Meet 2018-19</button>
                            <button data-filter=".cat--6" style="margin-top: 3px;">The 26th Annual Function  2018-19</button>
                              <button data-filter=".cat--7" style="margin-top: 3px;">Inter School Sit & Draw Competition 2018-19</button>
                              <button data-filter=".cat--8">Sunshine- The Inaugration Ceremony 2019-20</button>
                      	</div>
					</div>
				</div>

				<?php 
				$cat1 = array('DSC_4888.jpg','DSC_4903.jpg','DSC_5131.jpg','DSCN2314.jpg' ); 
				$cat3 = array('DSC_4745.jpg','DSCN2192.jpg','DSC_4779.jpg' );
				$cat2 = array('DSCN0976.jpg','DSCN1004.jpg','DSCN1043.jpg');
				$cat4 = array('DSC_6427.jpg','DSC_6429.jpg','DSC_6434.jpg','DSC_6436.jpg','DSC_6460.jpg','DSC_6487.jpg','DSC_6491.jpg','DSC_6497.jpg','DSC_6503.jpg','DSC_6559.jpg','DSC_6642.jpg','DSC_6647.jpg','DSC_6653.jpg','DSC_6659.jpg','DSC_6662.jpg','DSC_6690.jpg','DSC_6429.jpg','DSC_6718.jpg','DSC_6724.jpg','DSC_6750.jpg','DSC_6786.jpg','DSC_6805.jpg','DSC_6824.jpg','DSC_6839.jpg','DSC_6853.jpg','DSC_6868.jpg','DSC_6875.jpg','DSC_6892.jpg');


				$cat5= array('DSC_7779.jpg','DSC_7792.jpg', 'DSC_7801.jpg','DSC_7809.jpg','DSC_7813.jpg','DSC_7842.jpg','DSC_7857.jpg','DSC_7862.jpg','DSC_7873.jpg','DSC_7900.jpg','DSC_7909.jpg','DSC_7918.jpg');

				$cat6 = array('DSC_2215.jpg','DSC_2225.jpg','DSC_2237.jpg','DSC_2265.jpg','DSC_2291.jpg','DSC_2304.jpg','DSC_2330.jpg','DSC_8046.jpg','DSC_8053.jpg','DSC_8071.jpg','DSC_8089.jpg','DSC_8091.jpg'); 

				$cat7 = array('DSCN5422.jpg','DSCN5451.jpg','DSCN5481.jpg','DSCN5504.jpg','DSCN5515.jpg','DSCN5539.jpg','DSCN5579.jpg','DSCN5589.jpg','DSCN5595.jpg','DSCN5602.jpg','DSCN5604.jpg','DSCN5607.jpg','DSCN5622.jpg','DSCN5730.jpg','DSCN5743.jpg','DSCN5770.jpg' ); 

				$cat8 = array('IMG_0030.jpg','IMG_0031.jpg','IMG_0033.jpg','IMG_0036.jpg','IMG_0037.jpg','IMG_0044.jpg','IMG_0057.jpg','IMG_0069.jpg','IMG_0070.jpg','IMG_0071.jpg',
					'IMG_0076.jpg','IMG_0086.jpg','IMG_0092.jpg','IMG_0100.jpg','IMG_0102.jpg','IMG_0104.jpg','IMG_0113.jpg','IMG_0121.jpg','IMG_0123.jpg','IMG_0127.jpg','IMG_0131.jpg','IMG_0132.jpg','IMG_0139.jpg','IMG_0146.jpg','IMG_0173.jpg','IMG_0198.jpg','IMG_0202.jpg','IMG_0203.jpg','IMG_0248.jpg','IMG_0249.jpg','IMG_0265.jpg','IMG_0273.jpg','IMG_0289.jpg','IMG_0304.jpg','IMG_0337.jpg','IMG_0342.jpg','IMG_0371.jpg','IMG_0376.jpg','IMG_0379.jpg','IMG_0389.jpg' ); 

				?>
				<div class="row galler__wrap masonry__wrap mt--80">

				
				
						

					<!-- Start  cat--2 -->
					  <?php 

				   		foreach ($cat2 as  $cat2) {
				   			
				   ?>
					<!-- Start Single Gallery -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--2">
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img src="<?php echo base_url();?>/assets/images/gallery/images/alumni_meet/small/<?php echo $cat2;?>" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>/assets/images/gallery/images/alumni_meet/big/<?php echo $cat2;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					 <?php 
					 		}
				   ?>
					
					<!-- End  cat--2 -->

					<!-- Start  cat--6 -->
					  <?php 

				   		foreach ($cat6 as  $cat6) {
				   			
				   ?>
					<!-- Start Single Gallery -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--6">
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img src="<?php echo base_url();?>/assets/images/gallery/images/annual_function_18_19/small/<?php echo $cat6;?>" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>/assets/images/gallery/images/annual_function_18_19/big/<?php echo $cat6;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					 <?php 
					 		}
				   ?>
					
					<!-- End  cat--6 -->

						<!-- Start  cat--4 -->
					  <?php 

				   		foreach ($cat4 as  $cat4) {
				   			
				   ?>
					<!-- Start Single Gallery -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--4">
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img src="<?php echo base_url();?>/assets/images/gallery/images/teachers_day/small/<?php echo $cat4;?>" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>/assets/images/gallery/images/teachers_day/big/<?php echo $cat4;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					 <?php 
					 		}
				   ?>
					
					<!-- End  cat--4 -->

					<!-- Start  cat--7 -->
					  <?php 

				   		foreach ($cat7 as  $cat7) {
				   			
				   ?>
					<!-- Start Single Gallery -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--7">
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img src="<?php echo base_url();?>/assets/images/gallery/images/draw_competition_18_19/small/<?php echo $cat7;?>" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>/assets/images/gallery/images/draw_competition_18_19/big/<?php echo $cat7;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					 <?php 
					 		}
				   ?>
					
					<!-- End  cat--7 -->
		
				
				   <!-- Gallery cat--1 -->
				   <?php 

				   		foreach ($cat1 as  $cat1) {
				   			
				   ?>
					<!-- Start Single Gallery -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--1">
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img src="<?php echo base_url();?>/assets/images/gallery/images/art_fest/small/<?php echo $cat1;?>" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>/assets/images/gallery/images/art_fest/big/<?php echo $cat1;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					 <?php 
					 		}
				   ?>

					<!-- End  cat--1 -->


					  <!-- Gallery cat--5 -->
				   <?php 

				   		foreach ($cat5 as  $cat5) {
				   			
				   ?>
					<!-- Start Single Gallery -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--5">
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img src="<?php echo base_url();?>/assets/images/gallery/images/annual_sports_meet_18_19/small/<?php echo $cat5;?>" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>/assets/images/gallery/images/annual_sports_meet_18_19/big/<?php echo $cat5;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					 <?php 
					 		}
				   ?>

					<!-- End  cat--5 -->

					
					
					<!-- Start cat--3 -->
					  <?php 

				   		foreach ($cat3 as  $cat3) {
				   			
				   ?>
					<!-- Start Single Gallery -->
						<div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--3">
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img src="<?php echo base_url();?>/assets/images/gallery/images/merit_day/small/<?php echo $cat3;?>" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>/assets/images/gallery/images/merit_day/big/<?php echo $cat3;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>
					<!-- End Single Gallery -->
					 <?php 
					 		}
				   ?>
					
					<!-- End cat--3 -->

						<!-- Start  cat--8 -->
					  <?php 

				   		foreach ($cat8 as  $cat8) {
				   			
				   ?>
					<!-- Start Single Gallery -->
					<div class="col-lg-3 col-md-4 col-sm-6 col-12 gallery__item cat--8">
						<div class="gallery">
							<div class="gallery__thumb">
								<a href="#">
									<img src="<?php echo base_url();?>/assets/images/gallery/images/sunshine_the_inaugration_ceremony_19_20/small/<?php echo $cat8;?>" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>/assets/images/gallery/images/sunshine_the_inaugration_ceremony_19_20/big/<?php echo $cat8;?>" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					 <?php 
					 		}
				   ?>
					
					<!-- End  cat--8 -->

				
				</div>	
			</div>
		</div>
		<!-- End Our Gallery Area -->