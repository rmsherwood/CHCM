<?php
/**
 * cilantro functions and definitions
 *
 * @package cilantro
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'cilantro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cilantro_setup() {

	// This theme styles the visual editor to resemble the theme style.
	$font_url = 'http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic';
	add_editor_style( array( 'inc/editor-style.css', str_replace( ',', '%2C', $font_url ) ) );
	
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cilantro, use a find and replace
	 * to change 'cilantro' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cilantro', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('large-thumb', 1060, 650, true);
	add_image_size('index-thumb', 780, 250, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cilantro' ),
		'social' => __( 'Social Menu', 'cilantro' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside'
	) );

	// // Setup the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'cilantro_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // cilantro_setup
add_action( 'after_setup_theme', 'cilantro_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cilantro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cilantro' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'cilantro' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Footer widgets area appears in the footer of the site.', 'cilantro' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'cilantro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cilantro_scripts() {
	wp_enqueue_style( 'cilantro-style', get_stylesheet_uri() );

	if (is_page_template('page-templates/page-nosidebar.php')) {
	    wp_enqueue_style( 'cilantro-layout-style' , get_template_directory_uri() . '/layouts/no-sidebar.css');
	} 
		elseif (is_page_template('page-templates/home.php')) {
	    wp_enqueue_style( 'cilantro-layout-style' , get_template_directory_uri() . '/layouts/home.css');
	}
		elseif (is_page_template('page-templates/chcm-blank.php')) {
	    wp_enqueue_style( 'cilantro-layout-style' , get_template_directory_uri() . '/layouts/chcm-blank.css');
	}
		elseif (is_page_template('page-templates/social.php')) {
	    wp_enqueue_style( 'cilantro-layout-style' , get_template_directory_uri() . '/layouts/social.css');
	}	
		elseif (is_page_template('page-templates/template-team.php')) {
	    wp_enqueue_style( 'cilantro-layout-style' , get_template_directory_uri() . '/layouts/team.css');
	}	
		elseif (is_page_template('page-templates/template-vendor.php')) {
	    wp_enqueue_style( 'cilantro-layout-style' , get_template_directory_uri() . '/layouts/vendor.css');
	}	
	else {
	    wp_enqueue_style( 'cilantro-layout-style' , get_template_directory_uri() . '/layouts/content-sidebar.css');
	}

	wp_enqueue_style('cilantro-google-fonts','http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic');

	wp_enqueue_style('cilantro-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

	wp_enqueue_script( 'cilantro-google-maps', esc_url_raw('https://maps.googleapis.com/maps/api/js'), array(), null );

	wp_enqueue_script( 'cilantro-google-maps-settings', get_template_directory_uri() . '/js/google-maps.js', array(), '20141115', true );

	wp_enqueue_script( 'cilantro-superfish', get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20141104', true );

	wp_enqueue_script( 'cilantro-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('cilantro-superfish'), '20141104', true );

	wp_enqueue_script( 'cilantro-hide-search', get_template_directory_uri() . '/js/hide-search.js', array(), '20141104', true );

	wp_enqueue_script( 'cilantro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20141104', true );

	wp_enqueue_script( 'cilantro-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141104', true );

	wp_enqueue_script( 'cilantro-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20141104', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cilantro_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Register `vendor` post type
 */

function vendor_post_type() {
   
   // Labels
	$labels = array(
		'name' => _x("Vendor", "post type general name"),
		'singular_name' => _x("Vendor", "post type singular name"),
		'menu_name' => 'Vendor Profiles',
		'add_new' => _x("Add New", "vendor item"),
		'add_new_item' => __("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item' => __("New Profile"),
		'view_item' => __("View Profile"),
		'search_items' => __("Search Profiles"),
		'not_found' =>  __("No Profiles Found"),
		'not_found_in_trash' => __("No Profiles Found in Trash"),
		'parent_item_colon' => ''
	);
	
	// Register post type
	register_post_type('vendor' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => get_stylesheet_directory_uri() . '/lib/TeamProfiles/team-icon.png',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'vendor_post_type', 0 );


/**
 * Register `team` post type
 */
function team_post_type() {
   
   // Labels
	$labels = array(
		'name' => _x("Team", "post type general name"),
		'singular_name' => _x("Team", "post type singular name"),
		'menu_name' => 'Team Profiles',
		'add_new' => _x("Add New", "team item"),
		'add_new_item' => __("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item' => __("New Profile"),
		'view_item' => __("View Profile"),
		'search_items' => __("Search Profiles"),
		'not_found' =>  __("No Profiles Found"),
		'not_found_in_trash' => __("No Profiles Found in Trash"),
		'parent_item_colon' => ''
	);
	
	// Register post type
	register_post_type('team' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => get_stylesheet_directory_uri() . '/lib/TeamProfiles/team-icon.png',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'team_post_type', 0 );

/**
 * Register `department` taxonomy
 */
function team_taxonomy() {
	
	// Labels
	$singular = 'Department';
	$plural = 'Departments';
	$labels = array(
		'name' => _x( $plural, "taxonomy general name"),
		'singular_name' => _x( $singular, "taxonomy singular name"),
		'search_items' =>  __("Search $singular"),
		'all_items' => __("All $singular"),
		'parent_item' => __("Parent $singular"),
		'parent_item_colon' => __("Parent $singular:"),
		'edit_item' => __("Edit $singular"),
		'update_item' => __("Update $singular"),
		'add_new_item' => __("Add New $singular"),
		'new_item_name' => __("New $singular Name"),
	);

	// Register and attach to 'team' post type
	register_taxonomy( strtolower($singular), 'team', array(
		'public' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'hierarchical' => true,
		'query_var' => true,
		'rewrite' => false,
		'labels' => $labels
	) );
}
add_action( 'init', 'team_taxonomy', 0 );



