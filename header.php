<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the header for our theme. It is used universally, for all posts
//  and page templates.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?><!doctype html>
<!--[if lt IE 8 ]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class=""> <!--<![endif]-->

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/img/_default/favicon@2x.ico" />
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/_default/apple-touch-icon@2x.png" />

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

  <div class="container">

    <?php  //  Calls the logo schema function from '_default/template-tags.php'  //

    orbital_logo_schema(); ?>

    <?php //  Calls the phone number from the global options page, if it exists  //

    orbital_phone_number('Call us: '); ?>

    <?php //  Calls wp_nav_menu function with our default settings to remove redundant markup  //

    orbital_clean_nav('header-menu', 'header__nav'); ?>

  </div>

</header>

<main class="container"><?php //  This is closed in 'footer.php'  // ?>

<div class="main__content"><?php //  This is also closed in 'footer.php'  // ?>
