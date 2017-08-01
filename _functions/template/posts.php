<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Functions for controlling and outputting various post meta information
//
//  [_1_] PAGING NAV
//  [_2_] POST NAV
//  [_3_] POST META
//  [_3_] ARCHIVE TITLE

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] PAGING NAV

if ( ! function_exists( 'orbital_paging_nav' ) ) :

function orbital_paging_nav() {
  
  //  Don't print empty markup if there's only one page  //
  
  if ( $GLOBALS['wp_query']->max_num_pages < 2 ) { return; } ?>
  
  <nav class="nav--paging">
    
    <?php if ( get_next_posts_link() ) : ?>
      <div class="nav__previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'rj' ) ); ?></div>
    <?php endif; ?>
    
    <?php if ( get_previous_posts_link() ) : ?>
      <div class="nav__next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'rj' ) ); ?></div>
    <?php endif; ?>
    
  </nav>
  
  <?php
}
endif;


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_2_] POST NAV

if ( ! function_exists( 'orbital_post_nav' ) ) :

function orbital_post_nav() {
  
  // Don't print empty markup if there's nowhere to navigate  //
  
  $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
  $next     = get_adjacent_post( false, '', false );
  
  if ( ! $next && ! $previous ) { return; } ?>
  
  <nav class="nav--posts">
   
    <?php
      previous_post_link( '<div class="nav__previous">%link</div>', _x( '<span class="meta-nav">&larr;</span>&nbsp;%title', 'Previous post link', 'rj' ) );
      next_post_link(     '<div class="nav__next">%link</div>',     _x( '%title&nbsp;<span class="meta-nav">&rarr;</span>', 'Next post link',     'rj' ) );
    ?>
    
  </nav>
  
  <?php
}
endif;


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_3_] POST META

if ( ! function_exists( 'orbital_posted_on' ) ) :

function orbital_posted_on() {
  
  $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
  
  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );
  
  $posted_on = sprintf(
    _x( 'Posted on %s', 'post date', 'rj' ),
    '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
  );
  
  $byline = sprintf(
    _x( 'by %s', 'post author', 'rj' ),
    '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
  );
  
  echo '<div class="post__meta"><span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span></div>';
  
}

endif;


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] ARCHIVE TITLE

if ( ! function_exists( 'orbital_archive_title' ) ) :

function orbital_archive_title() {
  
  if ( is_category() ) :
    single_cat_title();
    
  elseif ( is_tag() ) :
    single_tag_title();
    
  elseif ( is_author() ) :
    printf( __( 'Author: %s', 'rj' ), '<span class="vcard">' . get_the_author() . '</span>' );
    
  elseif ( is_day() ) :
    printf( __( 'Day: %s', 'rj' ), '<span>' . get_the_date() . '</span>' );
    
  elseif ( is_month() ) :
    printf( __( 'Month: %s', 'rj' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'rj' ) ) . '</span>' );
    
  elseif ( is_year() ) :
    printf( __( 'Year: %s', 'rj' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'rj' ) ) . '</span>' );
    
  elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
    _e( 'Asides', 'rj' );
    
  elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
    _e( 'Galleries', 'rj' );
    
  elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
    _e( 'Images', 'rj' );
    
  elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
    _e( 'Videos', 'rj' );
    
  elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
    _e( 'Quotes', 'rj' );
    
  elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
    _e( 'Links', 'rj' );
    
  elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
    _e( 'Statuses', 'rj' );
    
  elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
    _e( 'Audios', 'rj' );
    
  elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
    _e( 'Chats', 'rj' );
    
  else :
    _e( 'Archives', 'rj' );
    
  endif;
  
}

endif;