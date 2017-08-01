<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template part used for displaying content.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<div class="article__post">

<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

<?php if ( 'post' == get_post_type() ) : ?>
  
  <?php orbital_posted_on(); ?>
  
<?php endif; ?>

<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rj' ) ); ?>
  
<?php
  wp_link_pages( array(
    'before' => '<div class="page-links">' . __( 'Pages:', 'rj' ),
    'after'  => '</div>',
  ) );
?>

<div class="post__meta">

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

</div>

</div>