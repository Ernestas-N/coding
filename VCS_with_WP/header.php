<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title();?></title>

	<?php wp_head();?>

</head>
<body>
	<section class="header-section">
		<header>
			<div class="container flex space-between Helvetica_Neue">
				<div class="logo ">
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
				<nav>
					<div class="burger"><i class="fa fa-align-justify"> </i></div>
					<?php
						$args = ['theme_location'=>'primary-navigation',
								'container'=>false,
								'menu_class'=>'flex navi'];
								 wp_nav_menu($args);
					?>
				</nav>	
			</div>
		</header>
	</section>