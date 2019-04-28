<?php

/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {
	
	wp_enqueue_script( 'jquery-1.10.2', get_theme_file_uri( 'js/jquery-1.10.2.min.js' ), array(), '1.0', true );
	wp_enqueue_script( 'jquery-easing-1.3', get_theme_file_uri( 'js/jquery-easing-1.3.js' ), array(), '1.0', true );
	wp_enqueue_script( 'flexy-menu', get_theme_file_uri( 'js/flexy-menu.js' ), array(), '1.0', true );
	wp_enqueue_script( 'jquery.themepunch.tools', get_theme_file_uri( 'megafolio/js/jquery.themepunch.tools.min.js' ), array(), '1.0', true );
	wp_enqueue_script( 'jquery.themepunch.megafoliopro', get_theme_file_uri( 'megafolio/js/jquery.themepunch.megafoliopro.js' ), array(), '1.0', true );
	wp_enqueue_script( 'jquery-transit-modified', get_theme_file_uri( 'layerslider/jQuery/jquery-transit-modified.js' ), array(), '1.0', true );
	wp_enqueue_script( 'layerslider.transitions', get_theme_file_uri( 'layerslider/js/layerslider.transitions.js' ), array(), '1.0', true );
	wp_enqueue_script( 'layerslider.kreaturamedia.jquery', get_theme_file_uri( 'layerslider/js/layerslider.kreaturamedia.jquery.js' ), array(), '1.0', true );
	wp_enqueue_script( 'jquery.fancybox.pack', get_theme_file_uri( 'megafolio/fancybox/jquery.fancybox.pack.js?v=2.1.3' ), array(), '1.0', true );
	wp_enqueue_script( 'jquery.fancybox-media', get_theme_file_uri( 'megafolio/fancybox/helpers/jquery.fancybox-media.js?v=1.0.5' ), array(), '1.0', true );
	wp_enqueue_script( 'custom', get_theme_file_uri( 'js/custom.js' ), array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function learningWordPress_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');



// Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
		
	}
	
	return $post->ID;
	
}

// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}

// Customize excerpt word count length
function custom_excerpt_length() {
	return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');



// Theme setup
function learningWordPress_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
	
	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}


add_action('after_setup_theme', 'learningWordPress_setup');

// Add Widget Areas
function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
}

add_action('widgets_init', 'ourWidgetsInit');


// Customize Appearance Options
function learningWordPress_customize_register( $wp_customize ) {

	$wp_customize->add_setting('lwp_link_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('lwp_btn_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('lwp_btn_hover_color', array(
		'default' => '#004C87',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('lwp_standard_colors', array(
		'title' => __('Standard Colors', 'LearningWordPress'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_link_color_control', array(
		'label' => __('Link Color', 'LearningWordPress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_link_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_btn_color_control', array(
		'label' => __('Button Color', 'LearningWordPress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_btn_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lwp_btn_hover_color_control', array(
		'label' => __('Button Hover Color', 'LearningWordPress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_btn_hover_color',
	) ) );

}

add_action('customize_register', 'learningWordPress_customize_register');



// Output Customize CSS
function learningWordPress_customize_css() { ?>

	<style type="text/css">

		a:link,
		a:visited {
			color: <?php echo get_theme_mod('lwp_link_color'); ?>;
		}

		.site-header nav ul li.current-menu-item a:link,
		.site-header nav ul li.current-menu-item a:visited,
		.site-header nav ul li.current-page-ancestor a:link,
		.site-header nav ul li.current-page-ancestor a:visited {
			background-color: <?php echo get_theme_mod('lwp_link_color'); ?>;
		}

		.btn-a,
		.btn-a:link,
		.btn-a:visited,
		div.hd-search #searchsubmit {
			background-color: <?php echo get_theme_mod('lwp_btn_color'); ?>;
		}

		.btn-a:hover,
		div.hd-search #searchsubmit:hover {
			background-color: <?php echo get_theme_mod('lwp_btn_hover_color'); ?>;
		}

	</style>

<?php }

add_action('wp_head', 'learningWordPress_customize_css');


// Add Categories
wp_insert_term(	'Photo Editing', 'category',array('slug' => 'photo-editing'));
wp_insert_term(	'Video Editing', 'category',array('slug' => 'video-editing'));
wp_insert_term(	'Logo Design', 'category',array('slug' => 'logo-design'));
wp_insert_term(	'Web Design', 'category',array('slug' => 'web-design'));