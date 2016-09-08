			<!-- Section -->
			<section class="section full-width-bg">
				
				<div class="row">
				
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<!-- Revolution Slider -->
						<div class="tp-banner-container main-revolution">
						
							<span class="Apple-tab-span"></span>
 
							<div class="tp-banner">
								
								<ul>
									<li data-transition="papercut" data-slotamount="7">
										<img src="img/slide1.jpg" alt="">
										<div class="tp-caption"  data-x="100" data-y="115" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2>Unity<br>Liberty<br>Solidarity</h2></div>
										<div class="tp-caption"  data-x="100" data-y="310" data-speed="500" data-start="1200" data-easing="easeOutBack"><a href="#" class="button big">Find out more</a></div>
									</li>
									
									<li data-transition="papercut" data-slotamount="7">
										<img src="img/slide2.jpg" alt="">
										<div class="tp-caption align-center" data-x="center" data-y="135" data-speed="700" data-start="1000" data-easing="easeOutBack"><h4 class="great-vibes">it’s time for changes</h4></div>
										<div class="tp-caption align-center" data-x="center" data-y="220" data-speed="500" data-start="1200" data-easing="easeOutBack"><h2>Building Our Future Together!</h2></div>
										<div class="tp-caption align-center" data-x="center" data-y="300" data-speed="300" data-start="1400"><a href="#" class="button big button-arrow">Get Involved</a></div>
									</li>
									
									<li data-transition="papercut" data-slotamount="7">
										<img src="img/slide3.jpg" alt="">
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="150" data-speed="700" data-start="1000" data-easing="easeOutBack"><h2>10 YEARS OF EXPERIENCE</h2></div>
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="225" data-speed="500" data-start="1200" data-easing="easeOutBack"><p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor,<br> dapibus eget, elementum vel, cursus eleifend, elit. </p></div>
										<div class="tp-caption align-right" data-x="right" data-hoffset="-100" data-y="305" data-speed="300" data-start="1400"><a href="#" class="button big button-arrow">More Info</a></div>
									</li>
								</ul>
								
							</div>
						 
						</div>
						<!-- /Revolution Slider -->
						
					</div>
					
					
					<div class="col-lg-12 col-md-12 col-sm-12">
						
						<div class="banners-inline">
						
                                                    <?php $this->load->view('widgets/banners', !empty($data) ? $data : array()); ?>
							
						</div>
						
					</div>
				
				</div>
				
			</section>
			<!-- /Section -->
			
			
			
			
			<!-- Section -->
			<section class="section full-width-bg gray-bg">
				
				<div class="row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						
						<h3 class="animate-onscroll no-margin-top">Știri recente</h3>
						
                                                <?php $this->load->view('widgets/blog-item-big', !empty($data) ? $data : array()); ?>
						
					</div>
					
					
					
					<!-- Sidebar -->
					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">
						<?php $this->load->view('widgets/upcoming-events', !empty($data) ? $data : array()); ?>
						
					</div>
					<!-- /Sidebar -->
					
				</div>
				
				
				
				<div class="row no-margin-bottom">
				
					
					<div class="col-lg-12 col-md-12 col-sm-12">
						<?php $this->load->view('widgets/blog-items-carousel', !empty($data) ? $data : array()); ?>
						
					</div>
					
					
				
				</div>
				
				
				
				
				<div class="row">
				
					<div class="col-lg-9 col-md-9 col-sm-8">
						<?php $this->load->view('widgets/banner-rotator', !empty($data) ? $data : array()); ?>
						
					</div>
					
					
					
					<!-- Sidebar -->
					<div class="col-lg-3 col-md-3 col-sm-4 sidebar">
						<?php $this->load->view('widgets/image-banner', !empty($data) ? $data : array()); ?>
						
					</div>
					<!-- /Sidebar -->
					
				</div>
				
				
				
			</section>
			<!-- /Section -->