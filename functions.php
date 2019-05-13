<?php
/**
 * prokarpaty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package prokarpaty
 */

if (!function_exists('prokarpaty_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function prokarpaty_setup()
	{


		// Add default posts and comments RSS feed links to head.
		// add_theme_support( 'automatic-feed-links' );

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
		/**
		 *  Add HTML5 theme support.
		 */
		add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'top-menu-pc' => esc_html__('Top menu PC', 'prokarpaty'),
			'top-menu-mob' => esc_html__('Top menu Mobile', 'prokarpaty'),
			'footer-menu' => esc_html__('Footer menu', 'prokarpaty'),
		));

		// Add functionality from old theme 

		function new_excerpt_length($length)
		{
			return 20;
		}
		add_filter('excerpt_length', 'new_excerpt_length');

		function new_excerpt_more($more)
		{
			return '...';
		}
		add_filter('excerpt_more', 'new_excerpt_more');

		function the_breadcrumb()
		{
			if (!is_front_page()) {
				echo '<a href="';
				echo get_option('home');
				echo __('">Головна', 'prokarpaty');
				echo '</a> <img src="/wp-content/themes/prokarpaty/images/tur-breadcrumb.png"> ';
				if (is_category()) {
					$category = get_the_category();
					echo $category[0]->cat_name;
				} elseif (is_page()) {
					echo the_title();
				} else if (is_single()) {
					the_category(' ');
					echo ' <img src="/wp-content/themes/prokarpaty/images/tur-breadcrumb.png"> ';
					the_title();
				}
			} else {
				echo 'Главная';
			}
		}

		// articles pagination 
		function wp_corenavi() {
			global $wp_query;
			$pages = '';
			$max = $wp_query->max_num_pages;
			if (!$current = get_query_var('paged')) $current = 1;
			$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
			$a['total'] = $max;
			$a['current'] = $current;
			$total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
			$a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
			$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
			$a['prev_text'] = '<'; //текст ссылки "Предыдущая страница"
			$a['next_text'] = '>'; //текст ссылки "Следующая страница"
			if ($max > 1) echo '<div class="navigation">';
			if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
			echo $pages . paginate_links($a);
			if ($max > 1) echo '</div>';
		}




	}
endif;
add_action('after_setup_theme', 'prokarpaty_setup');

// Enqueue Theme Styles
function load_stylesheets()
{
	wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css', array(), null, 'all');
	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), null, 'all');
	// wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.min.css' , array(), 1, 'all');
	wp_enqueue_style('bootstrap_glyphIcons', get_template_directory_uri() . '/inc/glyphicons-only-bootstrap/css/bootstrap_glyphIcons.min.css', array(), 1, 'all');
	wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Enqueue Theme Scripts
function load_scripts()
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.0.min.js', array(), null, true);

	wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), null, true);

	wp_enqueue_script('ad-gallery', get_template_directory_uri() . '/js/jquery.ad-gallery.js', array('jquery'), 1.1, true);
	wp_enqueue_script('common-js', get_template_directory_uri() . '/js/common.js', array('jquery'), 1.1, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Register widgets 

function theme_widgets_init()
{

	register_sidebar(array(
		'name'          => __('Footer second_col widget', 'prokarpaty'),
		'id'            => 'footer_second_col',    // ID should be LOWERCASE  ! ! !
		'description'   => '', // Text description of what/where the sidebar is. Shown on widget management screen.
		'class'         => '', // CSS class to assign to the Sidebar in the Appearance -> Widget admin page. 
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="d-none">',
		'after_title'   => '</div>'
	));

	register_sidebar(array(
		'name'          => __('Front page main contact form', 'prokarpaty'),
		'id'            => 'front_top_cf',    // ID should be LOWERCASE  ! ! !
		'description'   => '', // Text description of what/where the sidebar is. Shown on widget management screen.
		'class'         => '', // CSS class to assign to the Sidebar in the Appearance -> Widget admin page. 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="d-none">',
		'after_title'   => '</div>'
	));

	register_sidebar(array(
		'name'          => __('Modal contact form', 'prokarpaty'),
		'id'            => 'modal_cf',    // ID should be LOWERCASE  ! ! !
		'description'   => '', // Text description of what/where the sidebar is. Shown on widget management screen.
		'class'         => '', // CSS class to assign to the Sidebar in the Appearance -> Widget admin page. 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="d-none">',
		'after_title'   => '</div>'
	));

	register_sidebar(array(
		'name'          => __('Sidebar in posts contact form', 'prokarpaty'),
		'id'            => 'post_sidebar_cf',    // ID should be LOWERCASE  ! ! !
		'description'   => '', // Text description of what/where the sidebar is. Shown on widget management screen.
		'class'         => '', // CSS class to assign to the Sidebar in the Appearance -> Widget admin page. 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="d-none">',
		'after_title'   => '</div>'
	));

	register_sidebar(array(
		'name'          => __('Modal in posts contact form', 'prokarpaty'),
		'id'            => 'post_modal_content_cf',    // ID should be LOWERCASE  ! ! !
		'description'   => '', // Text description of what/where the sidebar is. Shown on widget management screen.
		'class'         => '', // CSS class to assign to the Sidebar in the Appearance -> Widget admin page. 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="d-none">',
		'after_title'   => '</div>'
	));

	register_sidebar(array(
		'name'          => __('Show reviews', 'prokarpaty'),
		'id'            => 'reviews_show',    // ID should be LOWERCASE  ! ! !
		'description'   => '', // Text description of what/where the sidebar is. Shown on widget management screen.
		'class'         => '', // CSS class to assign to the Sidebar in the Appearance -> Widget admin page. 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="d-none">',
		'after_title'   => '</div>'
	));

	register_sidebar(array(
		'name'          => __('Modal in reviews', 'prokarpaty'),
		'id'            => 'reviews_add',    // ID should be LOWERCASE  ! ! !
		'description'   => '', // Text description of what/where the sidebar is. Shown on widget management screen.
		'class'         => '', // CSS class to assign to the Sidebar in the Appearance -> Widget admin page. 
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<div class="d-none">',
		'after_title'   => '</div>'
	));
}
add_action('widgets_init', 'theme_widgets_init');
