<!DOCTYPE html>
<html>
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title('|', true, 'right');?><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
	</head>
<body>
<div class="ui page stackable wide two column grid" style="padding-top: 10px;">
    <div class="three wide column" style="padding-bottom: 0px;padding-right: 0px;">
        <div class="centered">
          <a href="<?php bloginfo('url'); ?>/">
               <img src="<?php header_image(); ?>" class="ui medium rounded image centered"/>
          </a>
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