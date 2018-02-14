<?php
/**
 * solido functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package solido
 */

if ( ! function_exists( 'solido_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function solido_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on solido, use a find and replace
		 * to change 'solido' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'solido', get_template_directory() . '/languages' );

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

		add_image_size('slider', 1350, 500, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Header menu', 'solido' ),
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
		add_theme_support( 'custom-background', apply_filters( 'solido_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'solido_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function solido_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'solido_content_width', 640 );
}
add_action( 'after_setup_theme', 'solido_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function solido_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'solido' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'solido' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widgets 1', 'solido' ),
		'id'            => 'footer-widgets-1',
		'description'   => esc_html__( 'Add widgets here.', 'solido' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widgets 2', 'solido' ),
		'id'            => 'footer-widgets-2',
		'description'   => esc_html__( 'Add widgets here.', 'solido' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer widgets 3', 'solido' ),
		'id'            => 'footer-widgets-3',
		'description'   => esc_html__( 'Add widgets here.', 'solido' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'solido_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function solido_scripts() {

	$directory_uri = get_template_directory_uri();

	wp_enqueue_style( 'solido-font-awesome', $directory_uri . '/assets/css/fontawesome-all.min.css' );

	wp_enqueue_style( 'solido-slider-css', $directory_uri . '/assets/css/jquery.bxslider.min.css' );
		
	wp_enqueue_style( 'solido-style', get_stylesheet_uri() );

	wp_enqueue_script( 'solido-slider', $directory_uri . '/assets/js/jquery.bxslider.min.js', array('jquery'), '4.2.12', true );

	wp_enqueue_script( 'solido-main', $directory_uri . '/assets/js/main.js', array('jquery'), '20151215', true );
		
	wp_enqueue_script( 'solido-navigation', $directory_uri . '/assets/js/navigation.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'solido-skip-link-focus-fix', $directory_uri . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'solido_scripts' );


/**
* Exlude category 'slider' to loop, it`s used for slider object
*/
function solido_remove_home_category( $query ) {

	$idObj = get_category_by_slug('slider'); 
	$id = $idObj->term_id;
	
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-'.$id);
    }
}
add_filter( 'pre_get_posts', 'solido_remove_home_category' );

/** 
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/customizer/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer defaults 
 */
require get_template_directory() . '/inc/customizer/customizer-defaults.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer.php';


/**
 * template hooks.
 */
require get_template_directory() . '/inc/hooks.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

