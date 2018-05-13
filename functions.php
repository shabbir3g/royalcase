<?php
/**
 * royalcase functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package royalcase
 */

if ( ! function_exists( 'royalcase_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function royalcase_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on royalcase, use a find and replace
		 * to change 'royalcase' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'royalcase', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'royalcase' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'royalcase_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		
		
		$labels = array(
			'name'               => _x( 'Services', 'royalcase' ),
			'singular_name'      => _x( 'Service', 'royalcase' ),
			'menu_name'          => _x( 'Services', 'royalcase'),
			'name_admin_bar'     => _x( 'Service', 'royalcase'),
			'add_new'            => _x( 'Add New', 'royalcase'),
			'add_new_item'       => __( 'Add New Service', 'royalcase' ),
			'new_item'           => __( 'New Service', 'royalcase'),
			'edit_item'          => __( 'Edit Service', 'royalcase'),
			'view_item'          => __( 'View Service', 'royalcase' ),
			'all_items'          => __( 'All Services', 'royalcase'),
			'search_items'       => __( 'Search Services', 'royalcase' ),
			'parent_item_colon'  => __( 'Parent Service:', 'royalcase'),
			'not_found'          => __( 'No services found.', 'royalcase' ),
			'not_found_in_trash' => __( 'No services found in Trash.', 'royalcase' )
		);

		$args = array(
			'labels'             => $labels,
					'description'        => __( 'Description.', 'royalcase' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'service' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_icon'     	 => 'dashicons-screenoptions',
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);

		register_post_type( 'service', $args );
		
		

		/* ACF OPTIONS PAGE */
		if(function_exists('acf_add_options_page')) {
			$option_page = acf_add_options_page(
				array(
					'page_title'  => 'Theme Settings',
					'menu_title'  => 'Theme Settings',
					'menu_slug'   => 'theme-settings',
					'capability'  => 'edit_posts',
					'redirect'    => true,
					'position' => 61,
					'icon_url'    => 'dashicons-layout'
				)
			);
		}


		
		
	}
endif;
add_action( 'after_setup_theme', 'royalcase_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function royalcase_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'royalcase_content_width', 640 );
}
add_action( 'after_setup_theme', 'royalcase_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function royalcase_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget', 'royalcase' ),
		'id'            => 'footer-widget-one',
		'description'   => esc_html__( 'Add Footer widgets here.', 'royalcase' ),
		'before_widget' => '<div class="footer-widgets">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'royalcase_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function royalcase_scripts() {

	
	
	wp_enqueue_style( 'royalcase-fontawesome', get_template_directory_uri() . '/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'royalcase-animated', get_template_directory_uri() . '/css/animated-slider.css' );
	wp_enqueue_style( 'royalcase-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'royalcase-theme.default', get_template_directory_uri() . '/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'royalcase-theme.green', get_template_directory_uri() . '/css/owl.theme.green.min.css' );
	wp_enqueue_style( 'royalcase-stylethemestyle', get_template_directory_uri() . '/css/style.min.css' );
	wp_enqueue_style( 'royalcase-styletheme', get_template_directory_uri() . '/css/theme.min.css' );
	wp_enqueue_style( 'royalcase-style', get_stylesheet_uri() );

	wp_enqueue_script( 'royalcase-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'royalcase-theme.minjs', get_template_directory_uri() . '/js/theme.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'royalcase-jquery.cssslider', get_template_directory_uri() . '/js/jquery.cssslider.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'royalcase-carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'royalcase-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );

	wp_enqueue_script( 'royalcase-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	
}
add_action( 'wp_enqueue_scripts', 'royalcase_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * nav walker
 */
require get_template_directory() . '/royalcase-menu.php';


