<?php 
if ( ! isset( $content_width ) ) {
	$content_width = 796;
}
function j_theme_setup() {
	add_theme_support( 'automatic-feed-links');
	add_theme_support( 'post-thumbnails');
	set_post_thumbnail_size( 796, 275, true );
	add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
	add_theme_support( 'post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery') );
	add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array('default-color' => 'f1f1f1',) ) );
	add_theme_support( 'custom-header' );
	$args = array(
		'width'         => 150,
		'height'        => 150,
	);
add_theme_support( 'custom-header', $args );
	add_editor_style( get_template_directory_uri() . 'editor-style.css');
}
add_action( 'after_setup_theme', 'j_theme_setup' );

/* Page Title */
function j_title( $j_title, $sep ) {
	global $paged, $page;
	$j_title .= get_bloginfo( 'name', 'display' );
	$j_description = get_bloginfo( 'description', 'display' );
	if ( $j_description && ( is_home() || is_front_page() ) ) {
		$j_title = "$j_title $sep $j_description";
	}
	return $j_title;
}
add_filter( 'wp_title', 'j_title', 10, 2 );
/* Register Menu */
register_nav_menu( 'primary', 'Primary Menu' );
register_nav_menu( 'footer', 'Footer Menu' );
/* Scripts and Styles */
function j_style() {
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic');
	wp_enqueue_style( 'googleFonts');
	wp_enqueue_style( 'jstyle', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'j_style' );
function j_scripts() {
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr-custom-33193.js', true );
	wp_enqueue_script( 'functionscript', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), true );
	wp_enqueue_script( 'generalscript', get_template_directory_uri() . '/js/general.js', true );
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action( 'wp_enqueue_scripts', 'j_scripts' );
/* Register widget areas. */
function j_widgets() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Main sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widgetTitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'j_widgets' );


































?>