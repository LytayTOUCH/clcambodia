<?php

function load_main_script(){ 
  wp_enqueue_style( 'default_style', get_stylesheet_uri());
  //Load custom javascript at the bottom of the body tag
  wp_enqueue_script('mini-script',get_stylesheet_directory_uri().'/assets/semantic.min.js', array('jquery'), '', false );
}
add_action('wp_enqueue_scripts', 'load_main_script');

function remove_wp_version_tag() {
	return null;
}
add_filter( 'the_generator', 'remove_wp_version_tag' );

//Remove version of styl link and script link
function remove_wp_version_strings( $src ) {
	global $wp_version;
		parse_str(parse_url($src, PHP_URL_QUERY), $query);
	if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}
add_filter( 'script_loader_src', 'remove_wp_version_strings' );
add_filter( 'style_loader_src', 'remove_wp_version_strings' );


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


function hongstar_widgets_init() {
  register_sidebar( array(
    'name' => __( 'Banner Header Image', 'clcambodia' ),
    'id' => 'sidebar-1',
    'description' => __( 'This Widget is use to show the banner of the website', 'clcambodia' ),
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ) );
  register_sidebar( array(
    'name' => __( 'Sitemap', 'clcambodia' ),
    'id' => 'sidebar-4',
    'description' => __( 'Show the sitemap of website', 'clcambodia' ),
    'class'         => '',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="ui dividing header"><span class="ui big header" style="color: #12408f;">',
    'after_title' => '</h4></span>'
  ) );
  register_sidebar( array(
    'name' => __( 'Address Box', 'clcambodia' ),
    'id' => 'sidebar-5',
    'description' => __( 'Show Address', 'clcambodia'),
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="ui dividing header"><span class="ui big header" style="color: #12408f;">',
    'after_title' => '</h4></span>'
  ) );
  register_sidebar( array(
    'name' => __( 'Facebook Like Page', 'clcambodia' ),
    'id' => 'sidebar-6',
    'description' => __( 'Show embeded iframe of facebook', 'clcambodia' ),
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="ui dividing header"><span class="ui big header" style="color: #12408f;">',
    'after_title' => '</h4></span>'
  ) );
  register_sidebar( array(
    'name' => __( 'Footer', 'clcambodia' ),
    'id' => 'sidebar-2',
    'description' => __( 'Show footer of the website', 'clcambodia' ),
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="ui dividing header"><span class="ui big header" style="color: #12408f;">',
    'after_title' => '</h4></span>'
  ) );
}
add_action( 'widgets_init', 'hongstar_widgets_init' );

$args = array(
  'flex-width'    => true,
  'flex-height'    => true,
  'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
?>