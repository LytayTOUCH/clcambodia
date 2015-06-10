<!DOCTYPE html>
<html>
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php bloginfo('name');?><?php wp_title('|', true, 'rigth'); ?> </title>
		<?php wp_head(); ?>
	</head>
<body>

<div class="ui page stackable wide two column grid" style="padding-top: 10px;">
    
    <div class="three wide column" style="padding-bottom: 0px;padding-right: 0px;">
        <div class="centered">
          <?php if ( dynamic_sidebar('Banner Header Image') ) : else : endif; ?>
        </div>
    </div>

    <div class="thirteen wide column" style="padding-bottom: 0px;">
          <div class="ui menu">
              <?php
                foreach ( wp_get_nav_menu_items( 'header-menu' ) as $nav_item ) {
                  echo '<a href="' . $nav_item->url . '"class="item ' . implode(' ', $nav_item->classes) . '">' . $nav_item->title . '</a>';
                }
              ?>
          </div>

    </div>  
</div>

<div class="ui page grid">



  <!-- <div class="ui sixteen wide column center aligned" style="padding-bottom: 5px;">
    
    <div class="ui menu">
    <?php
      $nav = wp_get_nav_menu_items( 'header-menu' );
      foreach ( $nav as $nav_item ) {
        echo '<a href="' . $nav_item->url . '"class="item ' . implode(' ', $nav_item->classes) . '">' . $nav_item->title . '</a>';
      }
    ?>
    </div>

  </div> -->
  
  <!-- <div class="sixteen wide column" style="padding-bottom: 3px;padding-top: 3px;">
    <?php if ( dynamic_sidebar('Banner Header Image') ) : else : endif; ?>
  </div> -->