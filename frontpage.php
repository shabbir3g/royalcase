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
 * Template Name: Front Page
 */

get_header();
?>

	<!-- HERO
		================================================== -->
		<section class="section section-top ">

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
					<div class="col-md-5 col-lg-5">
						<?php $left_banner_image = get_field('left_banner_image');
						if($left_banner_image): ?>
						<div class="banner-image"> 
							<img src="<?php echo $left_banner_image['url']; ?>" alt="<?php echo $left_banner_image['title']; ?>" />
						</div>
						<?php endif; ?>
					</div>
					<div class="banner-text col-md-7 col-lg-7">
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

						<!-- Button -->
						<div class="banner-cta">
							<?php $see_more_link = get_field('see_more_link');
							if($see_more_link): ?>
							<a href="<?php echo  $see_more_link['url'] ?>" target="_blank" class="text-white">
								<?php echo  $see_more_link['title'] ?>
								<i class="fas fa-arrow-right"></i>
							</a>
							<?php endif; ?>
							
						</div>

					</div>
				</div> <!-- / .row -->
			</div> <!-- / .container -->

		</section>
		<section class="breadcrmb-section"> 
			<div class="container"> 
				<a href="#">HOME</a> >> <a href="#">CUSTOM HARD CASES</a>
			</div>
		</section>
		<section class="warehousing-slider"> 
			<div class="container"> 
				<div class="row"> 
					<div class="warehousing-text col-md-12 col-lg-5">
						<div class="text-ware"> 
							<?php $left_text_fac = get_field('left_text_fac');
								if($left_text_fac): 
								
								echo $left_text_fac;
								
								endif;
							?>
							
						</div>
					</div>
					<div class="warehousing-sliderss col-md-12 col-lg-7">
						<div class="choose_slider">

							<div class="choose_slider_items">
								<ul id="mySlider1">
								
								<?php $factory_sliders = get_field('factory_sliders'); 

								if($factory_sliders): 

								foreach($factory_sliders as $slids){ ?>
									
									<li class="current_item">
										<a href="#">
											<img src="<?php echo $slids['url']; ?>" />
										</a>
									</li>
									
									
									<?php
								}
								
								endif;
								
								?>
									
									
								</ul>
							</div>
						</div>
						<div class="direction-slider"> 
							<div><a id="btn_prev1" href="#"><i class="fas fa-angle-left"></i></a></div>
							<div><a id="btn_next1" href="#"><i class="fas fa-angle-right"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="partner-royal"> 
			<div class="container"> 
				<?php $section_title_royal_case = get_field('section_title_royal_case'); 
				if($section_title_royal_case): ?>
				<h2 class="text-center"><?php echo  $section_title_royal_case; ?></h2>
				<?php endif; ?>
				<div class="row"> 
					<div class="col-md-7 col-lg-7"> 
						<div class="check-total-list"> 
						
							<?php $left_list_royal = get_field('left_list_royal');
								if($left_list_royal): 
								
								echo $left_list_royal;
								
								endif;
							?>
							
							
						</div>
					</div>
					<div class="col-md-5 col-lg-5"> 
						<div class="check-total-list"> 
							
							<?php $right_list_royal = get_field('right_list_royal');
								if($right_list_royal): 
								
								echo $right_list_royal;
								
								endif;
							?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="manufacture-customer text-center"> 
			<div class="container">
							<?php $section_title_custom_soft = get_field('section_title_custom_soft');
								if($section_title_custom_soft): ?>
								
								
								<h2><?php echo $section_title_custom_soft; ?></h2>
								<?php
								
								endif;
							?>
				
				
							<?php $section_subtitle_custom_soft = get_field('section_subtitle_custom_soft');
								if($section_subtitle_custom_soft): ?>
								
								
								<p><?php echo $section_subtitle_custom_soft; ?></p>
								<?php
								
								endif;
							?>
				
				
				
				<?php $custom_soft_image = get_field('custom_soft_image');
					if($custom_soft_image): ?>
					<img src="<?php echo $custom_soft_image['url'] ?>" alt="<?php echo $custom_soft_image['title'] ?>" />
				<?php endif; ?>
				<div class="manufacture-middle"> 
					<div class="row">
					<div class="col-md-6 col-lg-6"> 
						<div class="check-total-list"> 
							
							<?php $left_list_custom_soft = get_field('left_list_custom_soft');
								if($left_list_custom_soft): 
								
								echo $left_list_custom_soft;
								
								endif;
							?>
							
						</div>
					</div>
					<div class="col-md-6 col-lg-6"> 
						<div class="check-total-list"> 
						
						<?php $right_list_custom_soft = get_field('right_list_custom_soft');
							if($right_list_custom_soft): 
							
							echo $right_list_custom_soft;
							
							endif;
						?>
							
						</div>
					</div>
				</div>
				</div>
				<div class="learn-get">
					<?php 
					$learn_more_soft = get_field('learn_more_soft');
					if($learn_more_soft): ?>
						<a href="<?php echo $learn_more_soft['url']; ?>"><?php echo $learn_more_soft['title']; ?></a>
					<?php endif; ?>
					<?php 
					$get_a_quote_soft = get_field('get_a_quote_soft');
					if($get_a_quote_soft): ?>
						<a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="<?php echo $get_a_quote_soft['url']; ?>"><?php echo $get_a_quote_soft['title']; ?></a>
					<?php endif; ?>
				</div>
			</div>
		</section>
		
		
		
		<section class="manufacture-customers text-center"> 
			<div class="container">
			<?php $section_title_hard = get_field('section_title_hard');
					if($section_title_hard): ?>
					
					
					<h2><?php echo $section_title_hard; ?></h2>
					<?php
					
					endif;
				?>
	
	
				<?php $section_subtitle_hard = get_field('section_subtitle_hard');
					if($section_subtitle_hard): ?>
					
					
					<p><?php echo $section_subtitle_hard; ?></p>
					<?php
					
					endif;
				?>
				<?php $custom_hard_image = get_field('custom_hard_image');
					if($custom_hard_image): ?>
					<img src="<?php echo $custom_hard_image['url'] ?>" alt="<?php echo $custom_hard_image['title'] ?>" />
				<?php endif; ?>
				<div class="manufacture-middles"> 
					<div class="row">
					<div class="col-md-4 col-lg-4"> 
						<div class="check-total-list"> 
							<?php $list_one_hard = get_field('list_one_hard');
								if($list_one_hard): 
								
								echo $list_one_hard;
								
								endif;
							?>
							
						</div>
					</div>
					<div class="col-md-4 col-lg-4"> 
						<div class="check-total-list"> 
							<?php $list_two_shard = get_field('list_two_shard');
								if($list_two_shard): 
								
								echo $list_two_shard;
								
								endif;
							?>
						</div>
					</div>
					<div class="col-md-4 col-lg-4"> 
						<div class="check-total-list">
							<?php $list_three_hard = get_field('list_three_hard');
								if($list_three_hard): 
								
								echo $list_three_hard;
								
								endif;
							?>
						</div>
					</div>
				</div>
				</div>
				<div class="learn-get"> 
					<?php 
					$learn_more_hard = get_field('learn_more_hard');
					if($learn_more_hard): ?>
						<a href="<?php echo $learn_more_hard['url']; ?>"><?php echo $learn_more_hard['title']; ?></a>
					<?php endif; ?>
					<?php 
					$get_a_quote_hard = get_field('get_a_quote_hard');
					if($get_a_quote_hard): ?>
						<a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="<?php echo $get_a_quote_hard['url']; ?>"><?php echo $get_a_quote_hard['title']; ?></a>
					<?php endif; ?>
				</div>
			</div>
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
						<div class="card-img-top">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(' img-fluid'); ?></a>
						</div>
						<div class="card-body">
							<a href="<?php the_permalink(); ?>"><h4 class="card-title"><?php the_title(); ?></h4></a>
							<p class="card-text text-muted">
								<?php echo wp_trim_words(get_the_content(), 35, false); ?>
							</p>
						</div>
					</div>
					<?php endwhile; ?>
					
					
				</div>
				</div>
			</div>
		</section>
		
		
		<section class="manufacture-sliders">
			<?php 
			$page_id     = get_queried_object_id();
			
			$section_title_hard_case = get_field('section_title_hard_case', $page_id);
				if($section_title_hard_case): ?>
				
				
				<h2 class="text-center" ><?php echo $section_title_hard_case; ?></h2>
				<?php
				
				endif;
			?>
			<div class="container">
				<div class="owl-carousel">
				
					
					<?php $hard_cases_slider = get_field('hard_cases_slider', $page_id); 

					if($hard_cases_slider): 

					foreach($hard_cases_slider as $slidss){ ?>
						
						<div><a href="#"><img src="<?php echo $slidss['url']; ?>" alt="<?php echo $slidss['title']; ?>" /></a></div>
						
						
						<?php
					}
					
					endif;
					
					?>
				  
				</div>
			</div>
			<div class="trigger-control"> 
				<a class="trigger-control-prev customPrevBtn">
				<i class="fas fa-angle-left trigger-cont"></i>
				</a>
				<a class="trigger-control-next customNextBtn">
				 <i class="fas fa-angle-right trigger-cont"></i>
				</a>
			</div>		
		</section>
		
		
		<section class="customer-review">
			<?php 
			
			
			$review_title = get_field('review_title', $page_id);
				if($review_title): ?>
				
				
				<h2 class="text-center" ><?php echo $review_title; ?></h2>
				<?php
				
				endif;
			?>
			<div class="container">
				<div class="row">
				  <div class="col-md-3 col-lg-3"> 
					<?php $customer_image = get_field('customer_image', $page_id); 
					if($customer_image): ?>
					<a href="#"><img src="<?php echo $customer_image['url']; ?>" alt="<?php echo $customer_image['title']; ?>" /></a>
					<?php endif; ?>
				  </div>
				  <div class="col-md-9 col-lg-9"> 
					<div class="review"> 
					<?php 
			
						
						$customer_review = get_field('customer_review', $page_id);
							if($customer_review): ?>
							
							
							<h3><?php echo $customer_review; ?></h3>
							<?php
							
							endif;
						?>
					</div>
				  </div>
				</div>
			</div>
			
		</section>
		

<?php
get_footer();
