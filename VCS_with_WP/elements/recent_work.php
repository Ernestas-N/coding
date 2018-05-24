<div class="container">
	<div class="container_bottom_border Helvetica_Neue_Medium">
		<p><?php the_field('rc_work');?></p>	
	</div>
	<div class=" b flex padding_top_34 Helvetica_Neue">
		<div class="tekstas word_wrap">
			<div class="tekstas_2">
			<p class="no_margin"><?php the_field('rc_work_content');?></p>
			<p><?php the_field('rc_work_content2');?></p>
			</div>
		</div>
		<div class="recent_work_container flex res_2">
			<?php 
				$images = get_field('rc_work_gallery');
				$size = 'rw_pic'; // (thumbnail, medium, large, full or custom size)
				if( $images ): ?>
			        <?php foreach( $images as $image ): ?>
			            <div class="recent_work">
			            	<?php echo wp_get_attachment_image( $image['ID'], $size );?>
			            </div>
			        <?php endforeach; ?>	  	
				<?php endif; 
			?>			
		</div>
	</div>
</div>