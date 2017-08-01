<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Register navigation menus for our theme.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function orbital_nav_menus() {
  
  register_nav_menus(
    array(
      'header-menu'   => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
      
      //  Add additional navigation menus here  //
    )
  );
  
}

add_action( 'init', 'orbital_nav_menus' );