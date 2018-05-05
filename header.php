<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package royalcase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php $favicon_upload = get_field('favicon_upload','option');
		if($favicon_upload):  ?>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon_upload['url']; ?>" />
	<?php endif; ?>
	
	
	<?php wp_head(); ?>
	<style type="text/css"> 
	
		
		.header-top-fixed.shrink {
			background: <?php echo get_field('header_background_color','option'); ?>;
		}
		
		.footer-section {
			background: <?php echo get_field('footer_background_color','option'); ?>;
		}
	</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body <?php body_class(); ?>>

		<!-- NAVBAR
		================================================= -->
		<nav class="navbar navbar-expand-xl navbar-dark  navbar-togglable  header-top-fixed">
			<div class="container">

				<!-- Brand -->
				<?php $logo_upload = get_field('logo_upload','option');
				if($logo_upload):  ?>
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
					<img src="<?php echo $logo_upload['url']; ?>" alt="<?php echo $logo_upload['title']; ?>"/>
				</a>
				<?php endif; ?>
				<!-- Toggler -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					
					<i class="fas fa-bars"></i>
				</button>
	
				<!-- Collapse -->
				<div class="collapse navbar-collapse" id="navbarCollapse">

					<?php $get_together_link = get_field('get_together_link','option');
						if($get_together_link):  ?>
					<ul class="navbar-nav">
						<li class="nav-item "><a href="<?php echo $get_together_link['url']; ?>" class="nav-link"><?php echo $get_together_link['title']; ?></a></li>
					</ul>
					<?php endif; ?>
					<!-- Links -->
					<div class="right-side-menu"> 
						<?php 

					wp_nav_menu(array(
						'theme_location' 	=> 'main-menu',
						'menu_class' 		=> 'navbar-nav ml-auto',
						'walker' 		=> new royalcase_menu_class(),
					));
					
					?>
					<?php $get_a_quote_button = get_field('get_a_quote_button','option');
					if($get_a_quote_button): ?>
					<ul class="navbar-nav">
						<li class="nav-item "><a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" href="#" class="nav-link">Get a Quote</a></li>
					</ul>
					<?php endif; ?>
					<?php $phone_number_text = get_field('phone_number_text','option');
					if($phone_number_text): ?>
					<div class="phone-number"> 
						<?php echo $phone_number_text; ?>
						
					</div>
					<?php endif; ?>
					</div>
				</div> <!-- / .navbar-collapse -->
	
			</div> <!-- / .container -->		
		</nav>
