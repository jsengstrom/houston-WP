<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Equeues theme scripts and stylesheets to wp_head.
//
//  NB. Because our theme does not use the default 'styles.css' file, our
//  global stylesheet (/build/css/global.css) must be enqueued here.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function orbital_enqueue_files() {
  //  Register jQuery from Google Libraries, not locally
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, '1.11.1');
  
  //  Register Global files  //
  wp_register_style( 'add-global-styles', get_template_directory_uri() . '/build/css/global.css','','', 'all' );
  wp_register_script( 'add-global-scripts', get_template_directory_uri() . '/build/js/global.min.js', '', null,''  );
  
  //  Enqueue Global Styles  //
  wp_enqueue_style( 'add-global-styles' );
  
  //  Enqueue Global Scripts  //
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'add-global-scripts' );
  
}

add_action( 'wp_enqueue_scripts', 'orbital_enqueue_files' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Scripts used for adding support for older browers should not be enqueued
//  as normal. Instead they are added to wp_head below.


function orbital_default() {
  
  echo '<!--[if lt IE 9]>';
  echo '<script src="'. get_template_directory_uri() .'/build/js/default.min.js"></script>';
  echo '<![endif]-->';
  
}
add_action('wp_head', 'orbital_default');