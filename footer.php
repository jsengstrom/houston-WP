<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for displaying the footer. It is used universally,
//  for all posts and page templates.
//
//  It contains the closing tags for <main> and for the opening .container div.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

</div><?php //  .main__content end  // ?>

</main><?php //  End  // ?>

<footer>

  <div class="container">

    <p>
      &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?><br>
      Created by <a href="htp://www.orbital.vision" target="_blank" rel="nofollow">Orbital</a></a>
    </p>

    <?php //  This calls the company number if it has been set in the global options  //

    orbital_company_number('Company No: '); ?>

    <?php //  Calls the schema address from the global options page, if there is one  //

    orbital_address_schema(); ?>

    <?php //  Calls wp_nav_menu function with our default settings to remove redundant markup  //

    orbital_clean_nav('footer-menu', 'footer__nav'); ?>

  </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
