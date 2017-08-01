<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Adds a selection of core actions through the theme
//
//  [_1_] Set SEO friendly permalink structure
//  [_2_] Add HTML5 theme support
//  [_3_] Add support for Post Formats
//  [_4_] Clean Up <head>
//  [_4_] Sort Category functionality

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Set SEO friendly permalink structure

function orbital_update_permalinks() {
  
  if (get_option('permalink_structure') == '') {
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%');
    $wp_rewrite->flush_rules();
  }
  
}

add_action( 'after_switch_theme', 'orbital_update_permalinks' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_2_] Add HTML5 theme support

function orbital_html5_support() {
  
  add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
  ) );
  
}

add_action( 'after_setup_theme', 'orbital_html5_support' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_3_] Add support for Post Formats (http://codex.wordpress.org/Post_Formats)

function orbital_post_formats() {
  
  add_theme_support( 'post-formats',
    array(
      'aside',
      'image',
      'video',
      'quote',
      'link',
    )
  );
  
}

add_action( 'after_setup_theme', 'orbital_post_formats' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] Clean Up <head>

function orbital_clean_the_head() {
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
}

add_action('init', 'orbital_clean_the_head');


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] Sort Category functionality

//  Decide if this blog is categories or not  //

function orbital_categorized_blog() {
  if ( false === ( $all_the_cool_cats = get_transient( 'orbital_categories' ) ) ) {
    
    //  Create an array of all the categories that are attached to posts  //
    $all_the_cool_cats = get_categories( array(
      'fields'     => 'ids',
      'hide_empty' => 1,
      
      //  We only need to know if there is more than one category  //
      'number'     => 2,
    ) );
    
    //  Count the number of categories that are attached to the posts  //
    $all_the_cool_cats = count( $all_the_cool_cats );
    
    set_transient( 'orbital_categories', $all_the_cool_cats );
  }
  
  if ( $all_the_cool_cats > 1 ) {
    
    //  This blog has more than 1 category so orbital_categorized_blog should return true  //
    return true;
    
  } else {
    
    //  This blog has only 1 category so orbital_categorized_blog should return false  //
    return false;
    
  }
}

//  Flush out the transients used in orbital_categorized_blog  //

function orbital_category_transient_flusher() {
  // Like, beat it. Dig?
  delete_transient( 'orbital_categories' );
}

add_action( 'edit_category', 'orbital_category_transient_flusher' );
add_action( 'save_post',     'orbital_category_transient_flusher' );