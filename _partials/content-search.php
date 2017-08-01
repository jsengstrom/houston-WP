<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying results in search pages

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

<?php if ( 'post' == get_post_type() ) :
  
  orbital_posted_on();
  
endif; ?>

<?php the_excerpt(); ?>

<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
 
  <?php
    
    // translators: used between list items, there is a space after the comma
    
    $categories_list = get_the_category_list( __( ', ', 'rj' ) );
    if ( $categories_list && orbital_categorized_blog() ) :
  ?>
    
    <?php printf( __( 'Posted in %1$s', 'rj' ), $categories_list ); ?>
    
  <?php endif; // End if $categories_list ?>
  
  <?php
    
    // translators: used between list items, there is a space after the comma
    
    $tags_list = get_the_tag_list( '', __( ', ', 'rj' ) );
    if ( $tags_list ) :
  ?>
   
    <?php printf( __( 'Tagged %1$s', 'rj' ), $tags_list ); ?>
   
  <?php endif; // End if $tags_list ?>
  
<?php endif; // End if 'post' == get_post_type() ?>

<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
  
  <span class="comments-link">
    <?php comments_popup_link( __( 'Leave a comment', 'rj' ), __( '1 Comment', 'rj' ), __( '% Comments', 'rj' ) ); ?>
  </span>
  
<?php endif; ?>

<?php edit_post_link( __( 'Edit', 'rj' ), '<span class="edit-link">', '</span>' ); ?>