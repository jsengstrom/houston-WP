<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the main template file. It is used to display a page if nothing
//  more specific matches a query. It puts together the home page where no
//  'home.php' template exists.
//
//  Learn more: http://codex.wordpress.org/Template_Hierarchy

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<article>
 
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
    <?php
    
    //  Retrieves the relevant format for the template. Post format parts
    //  can be found within the '_partials' folder.
    
    get_template_part( '_partials/content', get_post_format() ); ?>
    
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