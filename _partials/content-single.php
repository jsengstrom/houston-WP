<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content in 'single.php'

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<div class="article__post">

<? the_title( '<h1>', '</h1>' ); ?>

<?php orbital_posted_on(); ?>

<?php the_content(); ?>

<?php
  wp_link_pages( array(
    'before' => '<div class="page-links">' . __( 'Pages:', 'rj' ),
    'after'  => '</div>',
  ) );
?>

<div class="post__meta">

<?php
  
  // translators: used between list items, there is a space after the comma
  
  $category_list = get_the_category_list( __( ', ', 'rj' ) );
  
  // translators: used between list items, there is a space after the comma
  
  $tag_list = get_the_tag_list( '', __( ', ', 'rj' ) );

  if ( ! orbital_categorized_blog() ) {
    
    // If the blog has just one category we only need to display tags
    
    if ( '' != $tag_list ) {
      
      $meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'rj' );
      
    } else {
      
      $meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'rj' );
      
    }
    
  } else {
    
    // But if the blog hasmultiple categories we should display them here
    
    if ( '' != $tag_list ) {
      
      $meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'rj' );
      
    } else {
      
      $meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'rj' );
      
    }
    
  } // end check for categories on this blog

  printf(
    $meta_text,
    $category_list,
    $tag_list,
    get_permalink()
  );
?>

<?php edit_post_link( __( 'Edit', 'rj' ), '<span class="edit-link">', '</span>' ); ?>

</div>

</div>