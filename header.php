<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<!--Google Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900|Oswald:400,300,700' rel='stylesheet'
        type='text/css'>
	</head>
	
<!-- <body <?php body_class(); ?>>
	
	<div class="container">
	
		<header class="site-header">
			
			<div class="hd-search">
				<?php get_search_form(); ?>
			</div>
			
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?> <?php if (is_page('portfolio')) { ?>
				- Thank you for viewing our work
			<?php }?></h5>
			
			
			
			<nav class="site-nav">
				
				<?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
			</nav>
			
		</header> -->
<body>

<!--Header Start-->
<header class="header-section">
	<div class="wrapper header">

		<div class="logo">
			<a href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo" /></a>
		</div>

		<!--Navigation Menu Start-->
		<ul class="flexy-menu thick">

		<?php 

			
						
		$menu_locations = get_nav_menu_locations();

		$menus = wp_get_nav_menu_items( $menu_locations['primary'] );

		if($menus){

			foreach ($menus as $menu) {

				$active = "";

				if(is_page($menu->title)){
					$active = "active";
				}

				echo '<li class="'.$active.'"><a href="'.$menu->url.'">'.$menu->title.'</a></li>';
			} 
		}

		?>
		</ul>
		<!--Navigation Menu End-->
	</div>
</header>
<!--Header End-->

<div class="container">