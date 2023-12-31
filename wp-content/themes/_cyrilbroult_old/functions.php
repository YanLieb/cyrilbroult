<?php

/**
 * cyrilbroult functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cyrilbroult
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cyrilbroult_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on cyrilbroult, use a find and replace
		* to change 'cyrilbroult' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('cyrilbroult', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'cyrilbroult'),
			'menu-2' => esc_html__('Secondary', 'cyrilbroult'),
		)
	);

	add_filter('wp_nav_menu_objects', 'add_title_as_css_classes', 10, 2);

	function add_title_as_css_classes($items, $args)
	{
		if ($args->menu->slug == 'reseaux-sociaux-header' || $args->menu->term_id == 3) {
			foreach ($items as &$item) {
				if ($item->post_name !== "" && !in_array($item->post_name, $item->classes))
					array_push($item->classes, $item->post_name);
			}
		}
		return $items;
	}


	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cyrilbroult_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 90,
			'width'       => 90,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'cyrilbroult_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cyrilbroult_content_width()
{
	$GLOBALS['content_width'] = apply_filters('cyrilbroult_content_width', 640);
}
add_action('after_setup_theme', 'cyrilbroult_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cyrilbroult_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'cyrilbroult'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'cyrilbroult'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="widget-title">',
			'after_title'   => '</p>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__('Footer', 'cyrilbroult'),
			'id'            => 'footer-widget-area',
			'description'   => esc_html__('Widgets added here will appear in the footer', 'cyrilbroult'),
			'before_widget' => '<div id="%1$s" class="widget %2$s container">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="widget-title">',
			'after_title'   => '</p>',
		)
	);
}
add_action('widgets_init', 'cyrilbroult_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function cyrilbroult_scripts()
{
	wp_enqueue_style('cyrilbroult-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_enqueue_style('swipercss', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.min.css');
	wp_style_add_data('cyrilbroult-style', 'rtl', 'replace');

	wp_enqueue_script('theme', get_template_directory_uri() . '/js/theme.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'cyrilbroult_scripts');

function add_type_attribute($tag, $handle, $src)
{
	// if not your script, do nothing and return original $tag
	if ('theme' !== $handle) {
		return $tag;
	}
	// change the script tag by adding type="module" and return it.
	$tag = '<script type="module" src="' . esc_url($src) . '"></script>';
	return $tag;
}

add_filter('script_loader_tag', 'add_type_attribute', 10, 3);

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Deactivate Gutenberg */
add_filter( 'use_block_editor_for_post', '__return_false' );