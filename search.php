<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for displaying search results.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<article>
 
  <?php if ( have_posts() ) : ?>
   
    <h1><?php printf( __( 'Search Results for: %s', 'rj' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    
    <?php while ( have_posts() ) : the_post(); ?>
     
      <?php
      
      //  Retrieves the relevant format for the template. Post format parts
      //  can be found within the '_partials' folder.
      
      get_template_part( '_partials/content', 'search' ); ?>
      
    <?php endwhile; ?>
     
      <?php
      
      //  Calls the pagenation function from '_default/template-tags.php'
      
      orbital_paging_nav(); ?>
      
    <?php else : ?>
   
    <?php get_template_part( '_partials/content', 'none' ); ?>
    
  <?php endif; ?>
  
</article><!-- <?php //  This comment removes ambiant space from the html for the grid system  // ?>

--><?php get_sidebar(); ?>

<?php get_footer(); ?>