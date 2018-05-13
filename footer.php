<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package royalcase
 */

?>

	
		<footer class="footer-section">
			<!--Content -->
			<div class="container">
				<div class="footer-one"> 
					<div class="row">
					
					
											<?php // dynamic_sidebar('footer-widget-one'); ?>

					
					
					</div> 
				</div>
				<div class="footer-two"> 
					<p style='color:#fff'>Subscribe to our mailing list</p>
					
					<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://royalcase.us15.list-manage.com/subscribe/post?u=1d0d70ce815f7c5144d80e3db&amp;id=fa309b9b43" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required> <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_1d0d70ce815f7c5144d80e3db_fa309b9b43" tabindex="-1" value=""> </div>
    <div class="clear"></div>
	</div>
	</form></p>
</div>

<!--End mc_embed_signup-->
					<ul>
					
						<?php $footer_logo = get_field('footer_logo','option'); 

							if($footer_logo): 

							foreach($footer_logo as $logo){ ?>
								
								
								<li><a href="#"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>" /></a></li>
								<?php
							}
							
							endif;
						
						?>
						
						
					</ul>
				</div>
				<?php $copy_right_text = get_field('copy_right_text','option');
				if($copy_right_text):  ?>
				<div class="footer-three"> 
					<p><?php echo $copy_right_text; ?></p>
				</div>
				<?php endif; ?>
			</div>
		</footer>
		
		<!-- modal popup -->
		
		

		<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  <div class="modal-body">
			  
			  
			  <?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>
			  
				
			  </div>
			 
			</div>
		  </div>
		</div>
		
		<!-- modal popup -->
		
		
		
		
		
		<?php wp_footer(); ?>
		
</body>
</html>