<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This displays the widgets from the default sidebar with fallback content
//  if no widgets exist.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>
<aside>
 
  <?php if ( is_active_sidebar( 'default-sidebar' ) ) : ?>
	
	<?php dynamic_sidebar( 'default-sidebar' ); ?>
	
  <?php else :
    
    //  If there are no widgets set, then do all this stuff instead!  // ?>
    
    <?php get_search_form(); ?>
  	
  	<div class="widget">
  	  <h2 class="widget-title"><?php _e( 'Archives', 'rj' ); ?></h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
  	</div>
  	
  	<div class="widget">
  	  <h2 class="widget-title"><?php _e( 'Categories', 'rj' ); ?></h2>
      <ul>
        <?php wp_list_categories('show_count=1&title_li='); ?>
      </ul>
  	</div>
  	
  <?php endif; ?>
	
</aside>