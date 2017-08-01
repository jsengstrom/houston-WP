<?php
//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Register sidebar (widget areas) for our theme.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function orbital_widgets_init() {
  
  register_sidebar( 
    array(
      'name'          => __( 'Default Sidebar', 'rj' ),
      'id'            => 'default-sidebar',
      'description'   => '',
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2 class="widget__title">',
      'after_title'   => '</h2>'
    )
  );
  
  //  Add additional sidebars here  //
}

add_action( 'widgets_init', 'orbital_widgets_init' );