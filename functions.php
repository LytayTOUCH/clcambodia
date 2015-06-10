<?php
function load_main_script(){ 
  wp_enqueue_style( 'default_style', get_stylesheet_uri());
  //Load custom javascript at the bottom of the body tag
  wp_enqueue_script('mini-script',get_stylesheet_directory_uri().'/assets/semantic.min.js', array('jquery'), '', false );
  // wp_enqueue_script('accordion-script',get_stylesheet_directory_uri().'/assets/components/min.js/accordion.min.js', array('jquery'), '', true );
  // wp_enqueue_script('api-script',get_stylesheet_directory_uri().'/assets/components/min.js/api.min.js', array('jquery'), '', true );
  // wp_enqueue_script('checkbox-script',get_stylesheet_directory_uri().'/assets/components/min.js/checkbox.min.js', array('jquery'), '', true );
  // wp_enqueue_script('dimmer-script',get_stylesheet_directory_uri().'/assets/components/min.js/dimmer.min.js', array('jquery'), '', true );
  // wp_enqueue_script('dropdown-script',get_stylesheet_directory_uri().'/assets/components/min.js/dropdown.min.js', array('jquery'), '', true );
  // wp_enqueue_script('form-script',get_stylesheet_directory_uri().'/assets/components/min.js/form.min.js', array('jquery'), '', true );
  // wp_enqueue_script('modal-script',get_stylesheet_directory_uri().'/assets/components/min.js/modal.min.js', array('jquery'), '', true );
  // wp_enqueue_script('nag-script',get_stylesheet_directory_uri().'/assets/components/min.js/nag.min.js', array('jquery'), '', true );
  // wp_enqueue_script('popup-script',get_stylesheet_directory_uri().'/assets/components/min.js/popup.min.js', array('jquery'), '', true );
  // wp_enqueue_script('progress-script',get_stylesheet_directory_uri().'/assets/components/min.js/progress.min.js', array('jquery'), '', true );
  // wp_enqueue_script('rating-script',get_stylesheet_directory_uri().'/assets/components/min.js/rating.min.js', array('jquery'), '', true );
  // wp_enqueue_script('search-script',get_stylesheet_directory_uri().'/assets/components/min.js/search.min.js', array('jquery'), '', true );
  // wp_enqueue_script('shape-script',get_stylesheet_directory_uri().'/assets/components/min.js/shape.min.js', array('jquery'), '', true );
  // wp_enqueue_script('sidebar-script',get_stylesheet_directory_uri().'/assets/components/min.js/sidebar.min.js', array('jquery'), '', true );
  // wp_enqueue_script('site-script',get_stylesheet_directory_uri().'/assets/components/min.js/site.min.js', array('jquery'), '', true );
  // wp_enqueue_script('state-script',get_stylesheet_directory_uri().'/assets/components/min.js/state.min.js', array('jquery'), '', true );
  // wp_enqueue_script('sticky-script',get_stylesheet_directory_uri().'/assets/components/min.js/sticky.min.js', array('jquery'), '', true );
  // wp_enqueue_script('tab-script',get_stylesheet_directory_uri().'/assets/components/min.js/tab.min.js', array('jquery'), '', true );
  // wp_enqueue_script('transition-script',get_stylesheet_directory_uri().'/assets/components/min.js/transition.min.js', array('jquery'), '', true );
  // wp_enqueue_script('video-script',get_stylesheet_directory_uri().'/assets/components/min.js/video.min.js', array('jquery'), '', true );
  // wp_enqueue_script('visibility-script',get_stylesheet_directory_uri().'/assets/components/min.js/visibility.min.js', array('jquery'), '', true );
  wp_enqueue_script('custom-script',get_stylesheet_directory_uri().'/assets/custom.js', array('jquery'), '', true );
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
    'before_title' => '<h4 class="ui dividing header"><span class="ui large label" style="background-color: #12408F;color: #ffffff;">',
    'after_title' => '</h4></span>'
  ) );
  register_sidebar( array(
    'name' => __( 'Address Box', 'clcambodia' ),
    'id' => 'sidebar-5',
    'description' => __( 'Show Address', 'clcambodia'),
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="ui dividing header"><span class="ui large label" style="background-color: #12408F;color: #ffffff;"> ',
    'after_title' => '</h4></span>'
  ) );
  register_sidebar( array(
    'name' => __( 'Facebook Like Page', 'clcambodia' ),
    'id' => 'sidebar-6',
    'description' => __( 'Show embeded iframe of facebook', 'clcambodia' ),
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="ui dividing header"><span class="ui large label" style="background-color: #12408F;color: #ffffff;"> ',
    'after_title' => '</h4></span>'
  ) );
  register_sidebar( array(
    'name' => __( 'Footer', 'clcambodia' ),
    'id' => 'sidebar-2',
    'description' => __( 'Show footer of the website', 'clcambodia' ),
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="ui dividing header"><span class="ui large label" style="background-color: #12408F;color: #ffffff;"> ',
    'after_title' => '</h4></span>'
  ) );
}
add_action( 'widgets_init', 'hongstar_widgets_init' );


?>