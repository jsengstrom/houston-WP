<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying all single posts

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>
 
  <article>
   
    <?php while ( have_posts() ) : the_post(); ?>
     
      <?php
      
      //  Retrieves the relevant format for the template. Post format parts
      //  can be found within the '_partials' folder.
      
      get_template_part( '_partials/content', 'single' ); ?>
      
      <?php orbital_post_nav(); ?>
      
      <?php if ( comments_open() || '0' != get_comments_number() ) :
        
        //  Load the comment template if comments are open or if there is at least one comment  //
        
        comments_template();
        
      endif; ?>
      
    <?php endwhile; ?>
    
  </article><!-- <?php //  This comment removes ambiant space from the html for the grid system  // ?>
  
--><?php get_sidebar(); ?>

<?php get_footer(); ?>