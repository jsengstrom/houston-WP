<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content on the front page

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

the_title( '<h1>', '</h1>' ); ?>

<?php the_content(); ?>

<?php
  wp_link_pages( array(
    'before' => '<div class="page-links">' . __( 'Pages:', 'rj' ),
    'after'  => '</div>',
  ) );
?>

<?php edit_post_link( __( 'Edit', 'rj' ), '<span class="edit-link">', '</span>' ); ?>