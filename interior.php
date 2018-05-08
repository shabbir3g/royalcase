<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template Name: Interior Template
 */

get_header();
?>

	<section class="section section-top">

			<!-- Parallax -->
			<div class="bg-parallaxs">
				<div class="bg-parallaxs-img">
					
					<?php $banner_image = get_field('banner_image');
					if($banner_image): ?>
					<!-- Cover -->
					<div class="bg-cover" style="background-image: url(<?php echo $banner_image['url'] ?>);"></div>
					
					<?php endif; ?>

				</div>
			</div> 
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-md-7 col-lg-7">

						<?php $left_banner_image = get_field('left_banner_image');
						if($left_banner_image): ?>
						<div class="banner-image"> 
							<img src="<?php echo $left_banner_image['url']; ?>" alt="<?php echo $left_banner_image['title']; ?>" />
						</div>
						<?php endif; ?>

					</div>
					<div class="banner-text col-md-5 col-lg-5">
						<!-- Heading -->
						<h1 class="text-white mb-4">
						<?php $banner_header_text = get_field('banner_header_text');
						if($banner_header_text): 
						
						echo $banner_header_text;
						
						endif;
						?>
						
						</h1>
						<!-- Subheading -->
						<p class=" mb-5">
							<?php $banner_text_small = get_field('banner_text_small');
						if($banner_text_small): 
						
						echo $banner_text_small;
						
						endif;
						?>
							
						</p>


					</div>
				</div> <!-- / .row -->
			</div> <!-- / .container -->

		</section>
		<section class="breadcrmb-section"> 
			<div class="container"> 
				
			</div>
		</section>
		<section class="warehousing-slider"> 
			<div class="container"> 
				<div class="row"> 
					<div class="warehousing-texts col-md-5 col-lg-5">
						<div class="text-ware"> 
							<?php $left_text_fac = get_field('left_text_fac');
								if($left_text_fac): 
								
								echo $left_text_fac;
								
								endif;
							?>
							
							<?php $get_a_quote_comp = get_field('get_a_quote_comp');
							if($get_a_quote_comp): ?>
							<div class="learn-get"> 
								<a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#"><?php echo $get_a_quote_comp['title'] ?></a>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="warehousing-sliderss col-md-7 col-lg-7">
						
							<div class="owl-carousel">
								
								
								
								<?php $factory_sliders_copy = get_field('factory_sliders_copy'); 

								if($factory_sliders_copy): 

								foreach($factory_sliders_copy as $slids){ ?>
									<?php echo $slids['videos']; ?>
									
								
									
									<?php
								}
								
								endif;
								
								?>
								
								
					
							 
							</div>
						
						<div class="direction-slider"> 
							<a id="customPrevBtn" ><i class="fas fa-angle-left"></i></a>
							<a id="customNextBtn" ><i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		<section class="possibilities"> 
			<div class="container"> 
				<?php $section_title_hard = get_field('section_title_hard');
					if($section_title_hard): ?>
					
					
					<h2 class="text-center"><?php echo $section_title_hard; ?></h2>
					<?php
					
					endif;
				?>
				<?php $section_subtitle_hard = get_field('section_subtitle_hard');
					if($section_subtitle_hard): ?>
					
					
					<p class="text-center" ><?php echo $section_subtitle_hard; ?></p>
					<?php
					
					endif;
				?>
				<div class="row"> 
					<div class="col-md-6 col-lg-3">
						<?php $endlass_image_one = get_field('endlass_image_one');
							if($endlass_image_one): ?>
							<div class="possibilities-image"> 
								<img src="<?php echo $endlass_image_one['url']; ?>" alt="<?php echo $endlass_image_one['title']; ?>" />
							</div>	
						<?php endif; ?>
						
						<div class="check-total-list">
							<?php $list_one_hard = get_field('list_one_hard');
								if($list_one_hard): 
								
								echo $list_one_hard;
								
								endif;
							?>
						</div>
					</div>
					<div class="col-md-6 col-lg-3"> 
						<?php $endlass_image_two = get_field('endlass_image_two');
							if($endlass_image_two): ?>
							<div class="possibilities-image"> 
								<img src="<?php echo $endlass_image_two['url']; ?>" alt="<?php echo $endlass_image_two['title']; ?>" />
							</div>	
						<?php endif; ?>	
						<div class="check-total-list"> 
							<?php $list_two_shard = get_field('list_two_shard');
								if($list_two_shard): 
								
								echo $list_two_shard;
								
								endif;
							?>
						</div>
					</div>
					<div class="col-md-6 col-lg-3"> 
						<?php $endlass_image_three = get_field('endlass_image_three');
							if($endlass_image_three): ?>
							<div class="possibilities-image"> 
								<img src="<?php echo $endlass_image_three['url']; ?>" alt="<?php echo $endlass_image_three['title']; ?>" />
							</div>	
						<?php endif; ?>	
						<div class="check-total-list"> 
							<?php $list_three_hard = get_field('list_three_hard');
								if($list_three_hard): 
								
								echo $list_three_hard;
								
								endif;
							?>
							
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<?php $endlass_image_four = get_field('endlass_image_four');
							if($endlass_image_four): ?>
							<div class="possibilities-image"> 
								<img src="<?php echo $endlass_image_four['url']; ?>" alt="<?php echo $endlass_image_four['title']; ?>" />
							</div>	
						<?php endif; ?>	
						<div class="check-total-list"> 
							<?php $list_four_hard = get_field('list_four_hard');
								if($list_four_hard): 
								
								echo $list_four_hard;
								
								endif;
							?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="manufacture-sliders">
			<?php 
			
			
			$section_title_hard_case = get_field('section_title_hard_case');
				if($section_title_hard_case): ?>
				
				
				<h2 class="text-center" ><?php echo $section_title_hard_case; ?></h2>
				<?php
				
				endif;
			?>
			<div class="container">
			
			 <?php $hard_cases_slider = get_field('hard_cases_slider'); 

					if($hard_cases_slider):?>
				<div class="owl-carousel">
				  
				<?php 
					foreach($hard_cases_slider as $slidss){ ?>
						
						<div><a href="#"><img src="<?php echo $slidss['url']; ?>" alt="<?php echo $slidss['title']; ?>" /></a></div>
						
						
						<?php
					}
					 ?>
					
				  
			</div>
			<div class="trigger-control"> 
				<a class="trigger-control-prev customPrevBtn">
				<i class="fas fa-angle-left trigger-cont"></i>
				</a>
				<a class="trigger-control-next customNextBtn">
				 <i class="fas fa-angle-right trigger-cont"></i>
				</a>
			</div>	

			<?php endif;
					
					?>
		</section>
		<section class="manufacture-services"> 
			<div class="container">
				<?php $section_title_services = get_field('section_title_services');
					if($section_title_services): ?>
					
					
					<h2 class="text-center" ><?php echo $section_title_services; ?></h2>
					<?php
					
					endif;
				?>
	
	
				<?php $section_subtitle_services = get_field('section_subtitle_services');
					if($section_subtitle_services): ?>
					
					
					<p class="text-center" ><?php echo $section_subtitle_services; ?></p>
					<?php
					
					endif;
				?>
				<div class="manufacture-middles"> 
					<div class="row">
						<?php 
					
					$services = new WP_Query(array(
						'post_type'	=> 'service',
						'post_per_page'	=> 3,
					));
					
					while($services->have_posts()):  $services->the_post(); ?>
					<div class="col-md-4 col-lg-4">
						<a href="<?php the_permalink(); ?>" class="card border-0 mb-3">
							<div class="card-img-top">
								<?php the_post_thumbnail(' img-fluid'); ?>
							</div>
							<div class="card-body">
								<h4 class="card-title"><?php the_title(); ?></h4>
								<p class="card-text text-muted">
									<?php echo wp_trim_words(get_the_content(), 35, false); ?>
								</p>
							</div>
						</a>
					</div>
					<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section>
		
		<section class="customer-review">
			<div class="container">
				<div class="row">
				  <div class="col-md-3 col-lg-3"> 
					<?php 
					$page_id     = get_queried_object_id();
					
					$customer_image = get_field('customer_image', $page_id); 
					if($customer_image): ?>
					<a href="#"><img src="<?php echo $customer_image['url']; ?>" alt="<?php echo $customer_image['title']; ?>" /></a>
					<?php endif; ?>
				  </div>
				  <div class="col-md-9 col-lg-9"> 
					<div class="get-free"> 
						<?php 
			
						
						$customer_review = get_field('customer_review', $page_id);
							if($customer_review): ?>
							
							
							<?php echo $customer_review; ?>
							<?php
							
							endif;
						?>
						<?php 
			
						
						$learn_morr_button = get_field('learn_morr_button', $page_id);
							if($learn_morr_button): ?>
						<div class="banner-cta">
							<a href="<?php echo $learn_morr_button['url']; ?>" target="_blank" class="text-white">
								<?php echo $learn_morr_button['title']; ?>
								<i class="fas fa-arrow-right"></i>
							</a>
						</div>
						<?php endif; ?>
					</div>
				  </div>
				</div>
			</div>
			
		</section>
		
		

<?php
get_footer();
