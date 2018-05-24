<div style="background-image: url(<?php echo get_field('h_background_image')["url"]; ?>); ">
	<div class="container flex res">
		<div class=" text-color word_wrap w_40 ">
			<div class="margin-right Helvetica_Neue ">
				<h1 class="Helvetica_Bold"><?php the_field('h_hero_heading'); ?></h1>
				<div><?php the_field('h_hero_content'); ?></div>
			</div>
			<?php
				// check if the repeater field has rows of data
				if( have_rows('h_hero_button_repeater') ):
				 	// loop through the rows of data
				    while ( have_rows('h_hero_button_repeater') ) : the_row();
				        // display a sub field value
				        $link = get_sub_field('h_button');
				        ?>
				        <a class="btn1 Helvetica_Neue_Medium" href="<?php echo $link["url"]?>"<?php if($link["target"]!=''){ echo 'target="'.$link['target'].'"';}?>><?php echo $link["title"]; ?></a>
				        <?php
				    endwhile;
				endif;
			?>
		</div>
	
		<div class="pav w_60">
			<img class="res_p" src="<?php echo get_field('h_pc_image')["sizes"]["pc_pic"];?>">
		</div>
	</div>
</div>