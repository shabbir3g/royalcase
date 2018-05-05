<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package royalcase
 */

?>


<section id="title" style="background: #163679; padding-top: 150px;  padding-bottom: 30px; z-index: -999999">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title text-center">
					<h1 class="text-uppercase"  style="color: #fff"><?php the_title(); ?></span></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="content" >
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="section-title">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>