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
	wp_localize_script('custom', 'root_url', array(
		'url_base' => get_theme_file_uri('')
	));

}

function learningWordPress_resources() {
	
	wp_enqueue_style('template_style',get_theme_file_uri('css/style.css'));
	wp_enqueue_style('hexagon',get_theme_file_uri('css/hexagon.css'));
	wp_enqueue_style('form',get_theme_file_uri('css/form.css'));
	wp_enqueue_style('flexy-menu',get_theme_file_uri('css/flexy-menu.css'));
	wp_enqueue_style('responsive',get_theme_file_uri('css/responsive.css'));
	wp_enqueue_style('layerslider',get_theme_file_uri('layerslider/css/layerslider.css'));
	wp_enqueue_style('settings',get_theme_file_uri('megafolio/css/settings.css'));
	wp_enqueue_style('jquery.fancybox',get_theme_file_uri('megafolio/fancybox/jquery.fancybox.css?v=2.1.3'));
	wp_enqueue_style('style', get_stylesheet_uri());
	
}




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


// function insert_category_and_attach_to_menu($title,$slug,$menu_header_id){
// 	$term = wp_insert_term(	$title, 'category',array('slug' => $slug));
// 	if (!is_wp_error($term)){
// 		error_log("wp_update_nav_menu_item");
// 		$term_id = $term['term_id'];
// 		wp_update_nav_menu_item($menu_header_id, 0, array(
// 			'menu-item-title' => $title,
// 			'menu-item-url' => get_category_link($term_id),
// 			'menu-item-status' => 'publish',
// 			'menu-item-object' => 'category',
// 			'menu-item-parent-id' => 0)
// 		);
// 	}
// }

function attach_page_to_menu($page_title,$page_id,$menu_id){
	wp_update_nav_menu_item($menu_id, 0, 
      array(  'menu-item-title' => $page_title,
             'menu-item-object' => 'page',
             'menu-item-object-id' => $page_id,
             'menu-item-type' => 'post_type',
             'menu-item-status' => 'publish',
             'menu-item-parent-id' => 0));
}


// Theme setup
function learningWordPress_setup() {
	
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

	//get 'your_custom_menu' id to assign it to the primary menu location created
	$menu_header = get_term_by('name', 'rameez_photos_menu', 'nav_menu');
	$menu_header_id = $menu_header->term_id;

	//if menu not found, create a new one
	if($menu_header_id == 0) {
		$menu_header_id = wp_create_nav_menu('rameez_photos_menu');
	}

	//Get all locations (including the one we just created above)
	$locations = get_theme_mod('nav_menu_locations');

	//set the menu to the new location and save into database
	$locations['primary'] = $menu_header_id;
	$locations['footer'] = $menu_header_id;
	set_theme_mod( 'nav_menu_locations', $locations );

	// Add Categories
	// insert_category_and_attach_to_menu('Video Editing','video-editing',$menu_header_id);

	// insert_category_and_attach_to_menu('Logo Design','logo-design',$menu_header_id);

	// insert_category_and_attach_to_menu('Web Design','web-design',$menu_header_id);

	// insert_category_and_attach_to_menu('Photo Editing','photo-editing',$menu_header_id);

	// Add Pages
	add_home_and_attach_to_menu('Home',$menu_header_id);
	add_page_and_attach_to_menu("Portfolio",$menu_header_id);
	add_page_and_attach_to_menu("Events",$menu_header_id);
	add_page_and_attach_to_menu("About Us",$menu_header_id);
	add_page_and_attach_to_menu("Contact Us",$menu_header_id);

	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('square-thumbnail', 80, 80, true);
	add_image_size('banner-image', 920, 210, array('left', 'top'));
	
	// create home page linked pages;
	create_home_linked_pages();

	// Add post type support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}

function create_home_linked_pages(){
	$template = "services-template.php";
	add_page("Photo Editing",$template);
	add_page("Video Editing",$template);
	add_page("Logo Design",$template);
	add_page("Website Design",$template);
}

function add_home_and_attach_to_menu($title,$menu_id){
	if (isset($_GET['activated']) && is_admin()){
		wp_update_nav_menu_item($menu_id, 0, array(
			'menu-item-title' => $title,
			'menu-item-status' => 'publish',
			'menu-item-url' => get_home_url(),
			'menu-item-parent-id' => 0)
		);
	}
}

function add_page_and_attach_to_menu($page_title,$menu_id){

	$page_id = add_page($page_title);
	if($page_id != -1){
		attach_page_to_menu($page_title,$page_id,$menu_id);
	}
}

function add_page($title,$template = ''){
	$new_page_id = -1;
	if (isset($_GET['activated']) && is_admin()){
		$new_page_title = $title;
		$new_page_content = '';
		$new_page_template = ''; //ex. template-custom.php. Leave blank if you don't want a custom page template.
	  
		//don't change the code bellow, unless you know what you're doing
	  
		$page_check = get_page_by_title($new_page_title);
		$new_page = array(
			'post_type' => 'page',
			'post_title' => $new_page_title,
			'post_content' => $new_page_content,
			'post_status' => 'publish',
			'post_author' => 1,
			'page_template'  => $template
		);
		error_log($page_check->ID);

		if(!isset($page_check->ID)){
			error_log("page_check false");
			$new_page_id = wp_insert_post($new_page);
			if(!empty($new_page_template)){
				update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
			}
		}
	}
	return $new_page_id;

}





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

function theme_deactivation_function(){
	wp_delete_nav_menu('rameez_photos_menu'); 

	$page = get_page_by_title( 'Home' );
	wp_delete_post($page->ID,true);
	$page = get_page_by_title( 'Portfolio');
	wp_delete_post($page->ID,true);
	$page = get_page_by_title( 'Events');
	wp_delete_post($page->ID,true );
	$page = get_page_by_title( 'About Us' );
	wp_delete_post($page->ID, true);
	$page = get_page_by_title( 'Contact Us');
	wp_delete_post($page->ID, true);

	// delete home page linked pages;
	$page = get_page_by_title( 'Photo Editing' );
	wp_delete_post($page->ID,true);
	$page = get_page_by_title( 'Video Editing' );
	wp_delete_post($page->ID,true);
	$page = get_page_by_title( 'Logo Design' );
	wp_delete_post($page->ID,true);
	$page = get_page_by_title( 'Website Design' );
	wp_delete_post($page->ID,true);
	
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

add_action('wp_head', 'learningWordPress_customize_css');

add_action('customize_register', 'learningWordPress_customize_register');

add_action('widgets_init', 'ourWidgetsInit');

add_filter('excerpt_length', 'custom_excerpt_length');

// action hook when theme activated
add_action('after_setup_theme', 'learningWordPress_setup');

// action hook when theme deactivated
add_action('switch_theme', 'theme_deactivation_function');


// function rameez_photos_after_setup_theme(){
// 	// wp_die("enough is enough");
// 	error_log( "enough is enough" );

// }

// add_action( 'after_switch_theme', 'rameez_photos_after_setup_theme' );

