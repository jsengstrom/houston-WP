<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file creates any custom taxonomies we need for our theme. Get started
//  by un-commenting everything below, and customizing the taxonomy to suit.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//function orbital_taxonomies() {
//  
//  register_taxonomy(
//    'title', //  Your taxonomy title  //
//    'cpt',   //  The Custom Post Type it will belong to  //
//    array(
//      'hierarchical' => true,
//      'label'        => 'Label',
//      'query_var'    => true,
//      'rewrite'      => array('slug' => 'slug')
//    )
//  );
//  
//  //  Addd the next taxonomy here  //
//  
//  flush_rewrite_rules();
//}
//
//add_action( 'init', 'orbital_taxonomies' );