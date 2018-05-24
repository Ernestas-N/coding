<div class="container flex res Helvetica_Neue border_h3 contact_pad">
	<div class="contact_margin contact_width">
		<div>
			<h3 class="Helvetica_Bold"><?php the_field('cp_contact_header');?></h3>
			<div><?php the_field('cp_contact_header_content');?></div>
		</div>
			<?php the_content(); ?>		
	</div>

	<div class="contact_width2">
		<div>
			<h3 class="Helvetica_Bold"><?php the_field('cp_contact_header2');?></h3>
			<div><?php the_field('cp_contact_header_content2');?></div>
		</div>
		<div>
			<h3 class="Helvetica_Bold"><?php the_field('cp_categorie_header');?></h3>
			<div><?php the_field('cp_categorie_content');?></div>
		</div>
		<div>
			<!-- Twitter widget -->
			<?php dynamic_sidebar('Easy-twitter-feed-widget2'); ?>
		</div>
	</div>
</div>