<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for displaying 404 Error pages

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<section class="error404__container">
 
  <h1><?php _e( '404', 'rj' ); ?></h1>
  <p><?php _e( 'Page Not Found', 'rj' ); ?></p>
  <a class="btn--ghost btn--round" href="<?php echo esc_url( home_url( '/' ) ); ?>">&larr; Take me Home</a>
  
</section>

<?php get_footer(); ?>