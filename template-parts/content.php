<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royalcase
 */

?>


		<section class="section section-top ">

			<!-- Parallax -->
			<div class="bg-parallaxs">
				<div class="bg-parallaxs-img">
					
					<!-- Cover -->
					<div class="bg-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/banner.png);"></div>

				</div>
			</div> 
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="text-center">
							<h1 class="text-uppercase light-text"><?php the_title(); ?></h1>
							<?php the_post_thumbnail(); ?>
						</div>
					</div>
				</div>
				
				
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12 text-center light-text">
						<?php the_content(); ?>
					</div>
				</div>	
				
				</div> <!-- / .row -->
			</div> <!-- / .container -->

		</section>
		
		
		