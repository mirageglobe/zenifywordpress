<?php

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'thumb600', 600, 150, true );
add_image_size( 'thumb300', 300, 100, true );
/*
  ref: https://developer.wordpress.org/reference/functions/add_image_size/
*/

/************* ACTIVE SIDEBARS ********************/

function register_styles() {

  if (!is_admin()) {
    // register main stylesheet
    wp_register_style( 'zen-stylesheet', get_stylesheet_directory_uri() . '/library/style.css', array(), '', 'all' );

    // enqueue styles and scripts
    wp_enqueue_style( 'zen-stylesheet' );
  }

}

add_action( 'wp_enqueue_scripts', 'register_styles', 999 );

?>
