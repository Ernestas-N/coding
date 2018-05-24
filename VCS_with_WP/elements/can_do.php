<section>
	<div class="container flex box_container read_more_border word_wrap">			
		<?php
			// check if the repeater field has rows of data
			if( have_rows('cn_box_repeater') ):
			 	// loop through the rows of data
			    while ( have_rows('cn_box_repeater') ) : the_row();
			    	$link= get_sub_field('b_box_more');
					?>
					<div class="boxas">	
					    <div>
							<h2 class="four-color"><?php the_sub_field('b_box_header'); ?></h2>
							<div class="box_text_style"><?php the_sub_field('b_box_subheader'); ?></div>
							<div class="box_text_style2"><?php the_sub_field('b_box_content'); ?></div>
							<a class="box_read_more_style" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
						</div>
					</div>
					<?php
			    endwhile;
			endif;
		?>			
	</div>
</section>