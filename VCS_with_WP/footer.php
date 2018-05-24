<section class="header-section">
	<div class=" c container flex Helvetica_Neue_Medium">
		<?php
			// check if the repeater field has rows of data
			if( have_rows('footer_box_repeater','option') ):
			 	// loop through the rows of data
			    while ( have_rows('footer_box_repeater','option') ) : the_row();
					?>
						<div class="box_4">
							<h3> <?php the_sub_field('fb_footer_header','option');?></h3>
							<div><?php the_sub_field('fb_footer_box_text','option');?></div>
						</div>
					<?php

			    endwhile;
			endif;
		?>	
		<div class="box_4">
			<?php dynamic_sidebar('Easy-twitter-feed-widget'); ?>
		</div>

		<div class="box_4">
			<?php dynamic_sidebar('flickr'); ?>
		</div>
	</div>

	<footer class="footer-color simple-text-color">
		<div class="v container  flex space-between Helvetica_Neue ">
			<div class="flex">
				<div class="logo logo_border">
					<?php 
						if(get_field('l_logo_type','option')=='image'){
							$logo='<img src="'.get_field('l_logo_image','option')["sizes"]["logo"].'" alt="'.get_bloginfo('name','option').'">';
						}else{
							$logo= get_field('l_logo_text','option');
						}
					?>
					<a class="simple-text-color2" href="<?php echo home_url();?> "><?php echo $logo; ?>
					</a>
				</div>
				<div>
					<div class="p_plotis"><?php echo get_field('fc_tel','option');?></div>
				</div>
			</div>
			<div>
				<div class="p_plotis"><?php echo get_field('fc_copyright','option');?></div>
			</div>	
		</div>
	</footer>	
</section>

	<?php wp_footer(); ?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.burger').click(function(){
				jQuery('.navi').toggleClass('show');
			});
		});
	</script>
</body>
</html>