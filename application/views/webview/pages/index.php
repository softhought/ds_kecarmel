
<style type="text/css">
	margin-top:10px;
</style>

		<!-- Strat Slider Area -->
		<div class="slide__carosel owl-carousel owl-theme">
			<div class="slider__area slider--two bg-pngimage--4 d-flex slider__fixed--height justify-content-end align-items-center" style="background:url('<?php echo base_url();?>assets/images/bg-png/bg1.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-6 offset-md-3 col-md-9 col-sm-12">
							<div class="slider__activation">
								<!-- Start Single Slide -->
								<div class="slide">
									<div class="slide__inner">
										<!-- <h6>Create New Things</h6>
										<h1>Plant & Nurture, Create Beautiful Heaven World</h1> -->
										<h1>Step in as a Student<br>
         									Leave as a Globally<br>
        									 Competent Citizen.
										</h1>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisic ming elit, sed do ei Excepteur.Tnam Bajki      vntoccaecat cupida proident, sunt in culpa qui dese runt mol .</p>
										
										<div class="slider__btn">
											<a class="dcare__btn black__btn max__height-btn" href="#">Read More</a>
										</div> -->
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider__area slider--two bg-pngimage--4 d-flex slider__fixed--height justify-content-end align-items-center" style="background:url('<?php echo base_url();?>assets/images/bg-png/bg2.jpg');">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 offset-lg-6 offset-md-3 col-md-9 col-sm-12">
							<div class="slider__activation">
								<!-- Start Single Slide -->
								<div class="slide">
									<div class="slide__inner">
										<!-- <h6>Create New Things</h6> -->
										<h1>Step in as a Student<br>
         									<span>Leave as a Globally</span><br>
        									 Competent Citizen.
										</h1>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisic ming elit, sed do ei Excepteur.Tnam Bajki      vntoccaecat cupida proident, sunt in culpa qui dese runt mol .</p>
										
										<div class="slider__btn">
											<a class="dcare__btn black__btn max__height-btn" href="#">Read More</a>
										</div>
										 -->
									</div>
								</div>
								<!-- End Single Slide -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Slider Area -->
		
		

		<!-- Start Welcame Area -->
		<section class="junior__welcome__area section-padding--md ">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					
						<div class="section__title text-center">
							<!-- <h2 class="title__line">Welcome To <span class="title-color1">K.E.</span> <span class="title-color2">Carmel</span></h2> -->

							<h2 class="title__line font_georgia_custom2"><span class="title-color3">K.E. Carmel School, Amtala At a Glance </span></h2>

							<!-- <p>K.E.Carmel School belongs to a CMI Group of Schools in Paschim-Banga.K.E.Carmel School has its motto: "TO PLANT AND NURTURE" and KECS stands for "value laden Kinship, Excellence and Character".</p> -->
							<p>K.E. Carmel School, Amtala is
							An Institution of Catholic Missionary
							Fathers of CMI (Carmelites of Mary Immaculate)     
							Religious Congregration. The Institution is immediately under
							K.E. Carmel Group of Schools, West Bengal, India.
							It follows ICSE & ISC Syllabus from classes Nursery to XII
							</p>
						</div>
						
					</div>
				</div>
			</div>
		</section>

		<!-- Start Testimonial Area -->
		<section class="junior__testimonial__area bg-image--2 section-padding--lg">
			<div class="container">
			
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="section__title text-center" style="margin-top: -82px;">
							<h2 class="title__line"><span class="title-color2">Flash </span>News</h2>
							
						</div>
					</div>
				</div>
			
				<div class="row">
					<div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12">
						<div class="testimonial__container">
							<div class="tes__activation--1 owl-carousel owl-theme">

								<?php 
									foreach ($bodycontent['flashNewsdata'] as $value) {
															
									?>
								<div class="testimonial__bg">
									<!-- Start Single Testimonial -->
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="<?php echo base_url();?>assets/images/testimonial/icon/1.png" alt="icon images">
											</div>
											<div class="client__details">
												<p style="text-shadow: 8px 6px 8px #272525;">

												<?php echo $value->line_one;?><br> 
												<?php echo $value->line_two;?><br>
												<?php echo $value->line_three;?><br>
												<?php echo $value->line_four;?><br>
												<?php echo $value->line_five;?><br>
												
											&nbsp;
												</p>
												
												<div class="client__info">
													<h6>&nbsp;</h6>
													<span>&nbsp;</span> 
												</div>  
											</div>
										</div>
									</div>
									<!-- End Single Testimonial -->
								</div>
								<?php }?>

									
								<!-- 	<div class="testimonial__bg">
									
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="<?php echo base_url();?>assets/images/testimonial/icon/1.png" alt="icon images">
											</div>
											<div class="client__details">
												<p style="text-shadow: 8px 6px 8px #272525;">
													Admissions open for class <br>
													XI:SCIENCE , COMMERCE AND HUMANITIES<br><br>

												<br>&nbsp;
												</p>
												
												<div class="client__info">
													<h6>&nbsp;</h6>
													<span>&nbsp;</span> 
												</div>  
											</div>
										</div>
									</div>
									
								</div>

								
								<div class="testimonial__bg">
									
									<div class="testimonial text-center">
										<div class="testimonial__inner">
											<div class="test__icon">
												<img src="<?php echo base_url();?>assets/images/testimonial/icon/1.png" alt="icon images">
											</div>
											<div class="client__details">
												<p style="text-shadow: 8px 6px 8px #272525;">
													Entrance coaching for classes XI and XII<br>
													JEE/NEET, AIIMS (Engg. &Med.)<br>
													In Association with<br>
													PATHFINDER<br>
													</p>
												
												<div class="client__info">
													<h6>&nbsp;</h6>
													<span>&nbsp;</span> 
												</div>  
											</div>
										</div>
									</div>
									
								</div> -->
							
							

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonial Area -->


		<section class="junior__welcome__area section-padding--md bg-pngimage--2">
			<div class="container">
				<div class="row">
				<div class="row jn__welcome__wrapper align-items-center">
					<div class="col-md-12 col-lg-6 col-sm-12">
						<div class="welcome__juniro__inner">
							<h3><span class="title-color2">360°</span> <span class="title-color1">Virtual</span> Tour</h3>
							<p>K.E. Carmel School, Amtala campus has been thoughtfully created with young learners in mind, providing an environment that truly supports each child’s learning. The belief that education is a shared responsibility is an important part of our philosophy. Learning occurs through engagement with other students, with adults and with the larger community. It takes a village to raise a child. Our campus is unique with abundant greenery and with most modern facilities for academic, sports, games, arts, and other informative zones.</p>
							<!-- 
							<div class="wel__btn">
								<a class="dcare__btn" href="about-us.html">Read More</a>
							</div>  -->
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-sm-12 md-mt-40 sm-mt-40">
						<div class="jnr__Welcome__thumb">
							<img src="<?php echo base_url();?>assets/images/wel-come/1.png" alt="images">
							<a class="play__btn" href="https://www.youtube.com/watch?v=De-ii2Hwuo4"><i class="fa fa-play"></i></a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</section>
		<!-- End Welcame Area -->

		<!-- Start Our Service Area -->
		<section class="junior__service bg-image--1 section-padding--bottom section--padding--xlg--top">
			<div class="container">
				<div class="row">
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="service bg--white border__color wow fadeInUp">
							<div class="service__icon">
								<img src="<?php echo base_url();?>assets/images/service/facility/complab.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="javascript:;">Computer Lab</a></h6>
								<p>Internet enable computer lab with most modern computers to meet the students’ information </p>
								
								<div class="service__btn">
									<a class="dcare__btn--2" href="<?php echo base_url();?>facility#computer_lab">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 xs-mt-60">
						<div class="service bg--white border__color border__color--2 wow fadeInUp" data-wow-delay="0.2s">
							<div class="service__icon">
								<img src="<?php echo base_url();?>assets/images/service/facility/library.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="javascript:;">Library</a></h6>
								<p>Fr. John Britto Memorial library of K.E. Carmel School, Amtala aims at providing  </p>
								
								<div class="service__btn">
									<a class="dcare__btn--2" href="<?php echo base_url();?>facility#library_fac">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
						<div class="service bg--white border__color border__color--3 wow fadeInUp" data-wow-delay="0.45s">
							<div class="service__icon">
								<img src="<?php echo base_url();?>assets/images/service/facility/dance.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="javascript:;">Music & Dance</a></h6>
								<p>Music, Dance and Arts, as the essence of all that is beautiful in life occupies a special </p>
								
								<div class="service__btn">
									<a class="dcare__btn--2" href="<?php echo base_url();?>facility#music_fac">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
						<div class="service bg--white border__color border__color--4 wow fadeInUp" data-wow-delay="0.65s">
							<div class="service__icon">
								<img src="<?php echo base_url();?>assets/images/service/facility/smartclass.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="javascript:;">Smart Class</a></h6>
								<p>Our Smart Class Rooms bring the most modern technology into the class room learning </p>
								 
								<div class="service__btn">
									<a class="dcare__btn--2" href="<?php echo base_url();?>facility#smart_class_fac">Read More</a>
								</div> 
							</div>
						</div>
					</div>
					<!-- End Single Service -->
				</div>
				
				<!-- Second Row -->
				
				<div class="row" style="margin-top: 6%;">
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="service bg--white border__color border__color--5 wow fadeInUp">
							<div class="service__icon">
								<img src="<?php echo base_url();?>assets/images/service/facility/Indoorgames.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="javascript:;">Sports & Games  </a></h6>
								<p>To nurture the mental and physical strength of students, the School has a huge facility </p>
								 
								<div class="service__btn">
									<a class="dcare__btn--2" href="<?php echo base_url();?>facility#sports_fac">Read More</a>
								</div> 
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 xs-mt-60">
						<div class="service bg--white border__color border__color--6 wow fadeInUp" data-wow-delay="0.2s">
							<div class="service__icon">
								<img src="<?php echo base_url();?>assets/images/service/facility/cctv.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="javascript:;">CCTV</a></h6>
								<p>The school is under CCTV camera surveillance, which is being used to provide  </p>
								<br>
								<div class="service__btn">
									<a class="dcare__btn--2" href="<?php echo base_url();?>facility#cctv_fac">Read More</a>
								</div> 
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
						<div class="service bg--white border__color border__color--7 wow fadeInUp" data-wow-delay="0.45s">
							<div class="service__icon">
								<img src="<?php echo base_url();?>assets/images/service/facility/lab.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="javascript:;">Lab Facility</a></h6>
								<p>Every student is an enthusiastic scientist in the making, and they spend part of their School </p>
								
								<div class="service__btn">
									<a class="dcare__btn--2" href="<?php echo base_url();?>facility#lab_fac">Read More</a>
								</div> 
							</div>
						</div>
					</div>
					<!-- End Single Service -->
					<!-- Start Single Service -->
					<div class="col-lg-3 col-md-6 col-sm-6 col-12 md-mt-60 sm-mt-60">
						<div class="service bg--white border__color border__color--8 wow fadeInUp" data-wow-delay="0.65s">
							<div class="service__icon">
								<img src="<?php echo base_url();?>assets/images/service/facility/washroom.png" alt="icon images">
							</div>
							<div class="service__details">
								<h6><a href="javascript:;">Hygienic Washrooms</a></h6>
								<p>Maintaining super hygienic washrooms<br>&nbsp;</p>
								<br>
								<div class="service__btn">
									<a class="dcare__btn--2" href="<?php echo base_url();?>facility#washroom_fac">Read More</a>
								</div> 
							</div>
						</div>
					</div>
					<!-- End Single Service -->
				</div>
				
				<!-- End of second Row -->
			</div>
		</section>
		<!-- End Our Service Area -->

		<!-- Start Call To Action -->
		<section class="jnr__call__to__action bg-pngimage--3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="jnr__call__action__wrap d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between align-items-center">
							<div class="callto__action__inner">
								<h2>How To Admit Your Child In A class ?</h2>
								<p>&nbsp; </p>
							</div>
							<div class="callto__action__btn">
								<a class="dcare__btn btn__white" href="<?php echo base_url();?>contactus">Contact Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Call To Action -->
		
		
			  
		<!-- Start Welcame Area -->
		<section class="junior__welcome__area section-padding--lg poss-relative bg-image--21 principle_block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__line" >Principal's <span class="title-color1">Desk</span></h2>
						</div>
						
						
						
					</div>
				</div>
				<div class="row jn__welcome__wrapper--2 align-items-center principle_block">
					<div class="col-md-5 col-lg-5 col-sm-5">
						<div class="welcome__juniro__three" id="testID">
						
				
							
							<p>An unabating ardour, manoeuvre and zeal pervade the ambience of K.E. Carmel School, Amtala. As I walk down the corridors of the school everyday, I enjoy the harmony of the tittle-tattle of fervent minds, the thud of the dancers, the melody of the ensemble, the yell of the vanquishing athletes. At K.E.C.S. we appraise self-reliance, artistry and innovation of the students and endeavour to foster them. Our undisputed solicitude ensures the overall development of the pupils. This equip them to thrive their morale, cognisance and assertiveness.</p><p> Sharing ideas, scrutinizing situations and executing them pompously are vital skills which are revered here. We give a lot of importance to make discipline a core value, encourage students to develop a sense of responsibility through a well planned academic schedule, House system, various Inter School and Intra School competitions and Sports activities. Our students and staff enjoy our school campus that is surrounded by "beauty, charm and adventure." We aim to strengthen the potential which is innate in every individual but awaiting expression. Our main motto is to groom our students to become confident, articulate and enlightened young citizens, well equipped to face the challenges of the rapidly changing world.</p>
							
							<!-- <div class="wel__btn">
								<a class="dcare__btn btn__white" href="javascript:;">Read More</a>
							</div> -->
						</div>
					</div>
				

					<div class="col-md-6 col-lg-6 col-sm-6">
				<div class="welcome__images wow fadeInUp" data-wow-delay="0.5s">
					<img src="<?php echo base_url();?>assets/images/wel-come/p2.jpg" alt="welcome images">
				</div>

			</div>
		</div>
				<!-- 
				<div class="welcome__images--2 wow flipInX" data-wow-delay="0.7s">
					<img src="images/wel-come/2.png" alt="round images">
				</div>  -->
			</div>
		</section>
		<!-- End Welcame Area -->
		

		
		
		<!-- Start Our Gallery Area -->
		<section class="junior__gallery__area bg--white section-padding--lg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<a href="<?php echo base_url();?>gallery#gallery_list"><h2 class="title__line"><span class="title-color1">Our</span> Gallery</h2></a>
							<p>&nbsp;</p>
						</div>
					</div>
				</div>
				<div class="row galler__wrap mt--40">
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="javascript:;">
									<img src="<?php echo base_url();?>assets/images/gallery/gallery-1/1.jpg" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>assets/images/gallery/big-img/1.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<!--  <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li> -->
									</ul>
									<h4 class="gallery__title"><a href="#">25<sup>th</sup> Annual Day</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="javascript:;">
									<img src="<?php echo base_url();?>assets/images/gallery/gallery-1/DSC_6460.jpg" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>assets/images/gallery/big-img/DSC_6460.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<!--  <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li> -->
									</ul>
									<h4 class="gallery__title"><a href="#">Teachers' Day Celebration</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="javascript:;">
									<img src="<?php echo base_url();?>assets/images/gallery/gallery-1/DSC_7909.jpg" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>assets/images/gallery/big-img/DSC_7909.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<!--  <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li> -->
									</ul>
									<h4 class="gallery__title"><a href="#">Annual Sports</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="javascript:;">
									<img src="<?php echo base_url();?>assets/images/gallery/gallery-1/DSCN5602.jpg" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>assets/images/gallery/big-img/DSCN5602.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<!--  <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li> -->
									</ul>
									<h4 class="gallery__title"><a href="#">Draw Competition</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="javascript:;">
									<img src="<?php echo base_url();?>assets/images/gallery/gallery-1/DSC_2237.jpg" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>assets/images/gallery/big-img/DSC_2237.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<!--  <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li> -->
									</ul>
									<h4 class="gallery__title"><a href="#">26<sup>th</sup> Annual Function</a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
					<!-- Start Single Gallery -->
					<div class="col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="gallery wow fadeInUp">
							<div class="gallery__thumb">
								<a href="javascript:;">
									<img src="<?php echo base_url();?>assets/images/gallery/gallery-1/6.jpg" alt="gallery images">
								</a>
							</div>
							<div class="gallery__hover__inner">
								<div class="gallery__hover__action">
									<ul class="gallery__zoom">
										<li><a href="<?php echo base_url();?>assets/images/gallery/big-img/6.jpg" data-lightbox="grportimg" data-title="My caption"><i class="fa fa-search"></i></a></li>
										<!--  <li><a href="gallery-details.html"><i class="fa fa-link"></i></a></li> -->
									</ul>
									<h4 class="gallery__title"><a href="#">Ethinic Day </a></h4>
								</div>
							</div>
						</div>	
					</div>	
					<!-- End Single Gallery -->
				</div>	
			</div>
		</section>
		<!-- End Our Gallery Area -->
		<!-- Start Blog Area 
		<section class="jnr__blog_area section-padding--lg bg-image--3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center white--title">
							<h2 class="title__line">Recent Blog</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunte magna aliquaet, consectetempora incidunt</p>
						</div>
					</div>
				</div>
				<div class="row blog__wrapper mt--40">
					
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="blog">
							<div class="blog__date">
								<span>Date : 10th November, 2017</span>
							</div>
							<div class="blog__thumb">
								<a href="blog-details.html">
									<img src="images/blog/md-img/1.jpg" alt="blog images">
								</a>
							</div>
							<div class="blog__inner">
								<span>Children Blog : Post By Ariana</span>
								<h4><a href="blog-details.html">Basic Knowledge About Drawing</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur ad modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								<ul class="blog__meta d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
									<li><a href="#">Comments : 05</a></li>
									<li><a href="#">Like : 07</a></li>
								</ul>
							</div>
						</article>
					</div>
				
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="blog">
							<div class="blog__date">
								<span>Date : 10th November, 2017</span>
							</div>
							<div class="blog__thumb">
								<a href="blog-details.html">
									<img src="images/blog/md-img/2.jpg" alt="blog images">
								</a>
							</div>
							<div class="blog__inner">
								<span>Children Blog : Post By Jonson</span>
								<h4><a href="blog-details.html">Study Tour</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur ad modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								<ul class="blog__meta d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
									<li><a href="#">Comments : 05</a></li>
									<li><a href="#">Like : 07</a></li>
								</ul>
							</div>
						</article>
					</div>
					
					<div class="col-lg-4 col-md-6 col-sm-12">
						<article class="blog">
							<div class="blog__date">
								<span>Date : 10th November, 2017</span>
							</div>
							<div class="blog__thumb">
								<a href="blog-details.html">
									<img src="images/blog/md-img/3.jpg" alt="blog images">
								</a>
							</div>
							<div class="blog__inner">
								<span>Children Blog : Post By Michel Jack</span>
								<h4><a href="blog-details.html">Childrens Day</a></h4>
								<p>Lorem ipsum dolor sit amet, consectetur ad modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								<ul class="blog__meta d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
									<li><a href="#">Comments : 05</a></li>
									<li><a href="#">Like : 07</a></li>
								</ul>
							</div>
						</article>
					</div>
				
				</div>
			</div>
		</section>
		 End Blog Area -->
		
		<!-- Start Counter Up Area -->
		<section class="dcare__counterup__area section-padding--lg bg-image--6" style="background-image: linear-gradient(to top, #9be15d 0%, #00e3ae 100%);">	
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="counterup__wrapper d-flex flex-wrap flex-lg-nowrap flex-md-nowrap justify-content-between">
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="<?php echo base_url();?>assets/images/funfact/1.png" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count">1810</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Student</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="<?php echo base_url();?>assets/images/funfact/3.png" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count color--2">15</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Smart Classroom</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="<?php echo base_url();?>assets/images/funfact/2.png" alt="flat icon">
                                </div>
                                <div class="fact__count ">
                                    <span class="count color--3">60</span>
                                </div>
                                <div class="fact__title">
                                    <h2>Teacher</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
							<!-- Start Single Fact -->
                            <div class="funfact">
                                <div class="fact__icon">
                                    <img src="<?php echo base_url();?>assets/images/funfact/4.png" alt="flat icon">
                                </div>
                                <div class="fact__count">
                                    <span class="count color--4">17</span>
                                </div>
                                <div class="fact__title">
                                    <h2>School Bus</h2>
                                </div>
                            </div> 
                            <!-- End Single Fact -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Counter Up Area -->
		<!-- Start upcomming Area 
		<section class="junior__upcomming__area section-padding--lg bg--white">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-md-12">
						<div class="section__title text-center">
							<h2 class="title__line"><span class="title-color1">Up</span> Coming <span class="title-color2">Events</span></h2>
							<p>&nbsp;</p>
						</div>
					</div>
				</div> -->
				<div class="row upcomming__wrap mt--40">
					<!-- Start Single Upcomming Event 
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="upcomming__event">
							<div class="upcomming__thumb">
								<img src="<?php echo base_url();?>assets/images/upcomming/1.png" alt="upcomming images">
							</div>
							<div class="upcomming__inner">
								<h6><a href="javascript:;">Todler Art Exhibition</a></h6>
								<p>Lor error sit volupta item accusantim doloremque laudantium, toe aperiam, eaque ipsa quae ab illoe invenveritatis et quasi architecto beatae viliquam quaerat voluptatem.</p>
								<ul class="event__time">
									<li><i class="fa fa-home"></i>Bishnupur,Amtala,West Bengal 743503</li>
									<li><i class="fa fa-clock-o"></i>10.00 am to 1.00 pm</li>
								</ul>
							</div>
							<div class="event__occur">
								<img src="<?php echo base_url();?>assets/images/upcomming/shape/1.png" alt="shape images">
								<div class="enent__pub">
									<span class="time">21st </span>
									<span class="bate">Dec,2017</span>
								</div>
							</div>
						</div>
					</div>
					 End Single Upcomming Event -->
					
					<!-- Start Single Upcomming Event 
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="upcomming__event">
							<div class="upcomming__thumb">
								<img src="<?php echo base_url();?>assets/images/upcomming/2.png" alt="upcomming images">
							</div>
							<div class="upcomming__inner">
								<h6><a href="javascript:;">Childrens Day Celebration</a></h6>
								<p>Lor error sit volupta item accusantim doloremque laudantium, toe aperiam, eaque ipsa quae ab illoe invenveritatis et quasi architecto beatae viliquam quaerat voluptatem.</p>
								<ul class="event__time">
									<li><i class="fa fa-home"></i>Bishnupur,Amtala,West Bengal 743503</li>
									<li><i class="fa fa-clock-o"></i>10.00 am to 1.00 pm</li>
								</ul>
							</div>
							<div class="event__occur">
								<img src="<?php echo base_url();?>assets/images/upcomming/shape/1.png" alt="shape images">
								<div class="enent__pub">
									<span class="time">21st </span>
									<span class="bate">Dec,2017</span>
								</div>
							</div>
						</div>
					</div>
					 End Single Upcomming Event -->
				</div>
			</div>
		</section>




		<!-- End upcomming Area -->
		<!-- Start Subscribe Area --
		<section class="bcare__subscribe subscribe--1">
			<div class="container bg__cat--3">
				<div class="row">
					<div class="col-lg-12 col-sm-12 col-lg-12">
						<div class="subscribe__inner">
							<h2>Subscribe To Our Special Offers</h2>
                            <div class="newsletter__form">
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Your E-mail" required>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups--
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clearfix subscribe__btn"><input class="bst__btn btn--white__color" type="submit" value="Send Now" name="subscribe" id="mc-embedded-subscribe">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>        
                            </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		-- End Subscribe Area -->
		