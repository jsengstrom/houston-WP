<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file creates any custom post types we need for our theme. Get started
//  by un-commenting everything below, and customizing the cpt to suit.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//function orbital_cpts() {
//  
//  register_post_type( 'orbital_cpt_name',
//    array(
//      
//      //  What will the CPT be known as?  //
//      'labels' => array(
//        'name'                => __( 'Names' ),
//        'singular_name'       => __( 'Name' ),
//      ),
//      
//      //  Settings - how will the CPT behave?  //
//      'public'              => true,
//      'show_ui'             => true,
//      'publicly_queryable'  => true,
//      'rewrite'             => true,
//      'exclude_from_search' => false,
//      'capability_type'     => 'post',
//      
//      //  What editable fields will the CPT support?  //
//      'supports' => array(
//        'title',
//        'editor',
//        'excerpt',
//        'thumbnail'
//      ),
//      
//      //  Which Taxonomies will be applicable?  //
//      'taxonomies'  => array(
//        'categories'
//      ),
//      
//    )
//  );
//  
//  //  Register any additional CPTs here  //
//  
//  flush_rewrite_rules();
//}
//
//add_action( 'init', 'orbital_cpts' );