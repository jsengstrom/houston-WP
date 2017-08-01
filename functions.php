<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file acts as a manifest for theme functions and controllers.
//  These files live in the '_functions' folder.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  THEME SETUP
//
//  These files prepare the theme for us, overwriting a few Wordpress defaults
//  and adding some additional theme agnostic functionality.

require_once('_functions/setup/add-action.php');    //  Actions adapt or extend WordPress fucntionality
require_once('_functions/setup/add-filter.php');    //  Filters control the post output directly
require_once('_functions/setup/enqueue-files.php'); //  Enqueue scripts and styles to wp_head


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  REGISTER
//
//  For lack of a better name, the files below register additional theme
//  specific functionality, including menus, sidebars and post types.

require_once('_functions/register/register-menus.php');    //  Register three preset menus
require_once('_functions/register/register-sidebar.php');  //  Register default widget area
require_once('_functions/register/custom-post-types.php'); //  Creates additional post types
require_once('_functions/register/custom-taxonomies.php'); //  Creates additional taxonomies



//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  TEMPLATE TAGS
//
//  The following template tags can be called to display specific reusable
//  content at any point during the theme.

require_once('_functions/template/global.php');    //  Adds a number of global settings to Wordpress
require_once('_functions/template/schema.php');    //  Outputs global data using schema.org markup
require_once('_functions/template/clean-nav.php'); //  Functions for controlling post meta info and navigations
require_once('_functions/template/posts.php');     //  Navigation for next/prev posts (home.php / index.php)