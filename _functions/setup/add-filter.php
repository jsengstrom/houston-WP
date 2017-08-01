<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Runs a selection of core filters through the theme
//
//  [_1_] Allow .svg uploads
//  [_2_] Remove Empty <p> tags
//  [_3_] Remove width and height attributes from <img>
//  [_4_] Remove <p> tags from <img>
//  [_5_] Enables or disables comments (defaults to disabled)
//  [_6_] Set Custom Thumbnail sizes (if required)
//  [_7_] Set Excerpt Length

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Allow .svg uploads  //

function orbital_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter( 'upload_mimes', 'orbital_mime_types' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


// [_2_] Remove Empty <p> tags  //

function orbital_remove_empty_p($content){
  $content = force_balance_tags($content);
  return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}

add_filter('the_content', 'orbital_remove_empty_p', 20, 1);


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_3_] Remove width and height attributes from <img>  //

function orbital_remove_img_dimensions( $html ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}

//  From the_post_thumbnail  //
add_filter( 'post_thumbnail_html', 'orbital_remove_img_dimensions', 10 );

//  From the WYSIWYG editor  //
add_filter( 'image_send_to_editor', 'orbital_remove_img_dimensions', 10 );

//  From the_content  //
add_filter( 'the_content', 'orbital_remove_img_dimensions', 10 );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] Remove <p> tags from <img>  //

function orbital_remove_img_p($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'orbital_remove_img_p');


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_5_] Enables or disables comments (defaults to disabled)  //

function orbital_enable_comments() {
  //return true; // shows comments
  return false; // hides comments
}
add_filter( 'comments_open', 'orbital_enable_comments', 20, 2 );
add_filter( 'pings_open', 'orbital_enable_comments', 20, 2 );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_6_] Set Custom Thumbnail sizes (if required)  //

add_theme_support( 'post-thumbnails' );

// set_post_thumbnail_size( 150, 150, true ); //  Set basic thumbnail size, crop mode  //
// add_image_size( 'category-thumb', 100, 100, true ); //  Custom featured image size, crop mode  //


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_7_] Set Excerpt Length  //

function orbital_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'orbital_excerpt_length', 999 );