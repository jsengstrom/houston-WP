<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<article>
 
  <?php while ( have_posts() ) : the_post(); ?>
   
    <?php if () {
      
      //  Retrieves the relevant format for the template. Post format parts
      //  can be found within the '_partials' folder.
      
      get_template_part( '_partials/content', 'front' );
      
    } else {
      
      //  Retrieves the relevant format for the template. Post format parts
      //  can be found within the '_partials' folder.
      
      get_template_part( '_partials/content', 'page' );
      
    } ?>
    
  <?php endwhile; ?>
  
</article><!-- <?php //  This comment removes ambiant space from the html for the grid system  // ?>

--><?php get_sidebar(); ?>

<?php get_footer(); ?>