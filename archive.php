<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for archive pages

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<article>
 
  <?php if ( have_posts() ) : ?>
   
    <h1><?php orbital_archive_title(); ?></h1>
    
    <?php
      
      // Show an optional term description
      
      $term_description = term_description();
      
      if ( ! empty( $term_description ) ) :
        printf( '<div class="taxonomy-description">%s</div>', $term_description );
      endif;
      
    ?>
   
    <?php
    
    //  Start the loop
    
    while ( have_posts() ) : the_post(); ?>
    
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