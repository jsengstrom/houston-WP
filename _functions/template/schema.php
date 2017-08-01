<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Functions that call and print various global (wehre it exists) into the
//  corrct schema.org markup.
//
//  [_1_] LOGO
//  [_2_] PHONE NUMBER
//  [_3_] COMPANY NUMBER
//  [_4_] ADDRESS

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] LOGO

if ( ! function_exists( 'orbital_logo_schema' ) ) :

function orbital_logo_schema() { ?>
  
  <div class="header__logo" itemscope itemtype="http://schema.org/Organization">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url">
        
        <?php $options = get_option( 'theme_options' );
        
        if ( $options['custom_logo'] != '' )
        
        //  If the logo has been set by the user, use that  //
        
        { ?>
          
          <img src="<?php echo $options['custom_logo']; ?>" alt="<?php bloginfo( 'name' ); ?>" itemprop="logo">
          
        <?php } else {
       
        //  If the user has not set a custom logo, use the site name and description instead  //
        
        ?>
          
          <h1 class="site-title" itemprop="logo"><?php bloginfo( 'name' ); ?></h1>
          <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
          
        <?php } ?>
        
      </a>
    </div>
  
  <?php }
  
endif;


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_2_] PHONE NUMBER

if ( ! function_exists( 'orbital_phone_number' ) ) :

function orbital_phone_number($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['phone_number'] != '' ) {
    
    $tel_number = $options['phone_number'];
    $tel_meta = str_replace( " ", "", $tel_number ); ?>
    
    <p><?php _e( $string, 'rj' ); ?><a href="<?php echo $tel_meta; ?>"><?php echo $tel_number; ?></a></p>
    
  <?php } }
  
endif;


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_3_] COMPANY NUMBER

if ( ! function_exists( 'orbital_company_number' ) ) :

function orbital_company_number($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['company_number'] != '' ) {
    
     _e( $string, 'rj' ); echo $options['company_number'];
    
  } }
  
endif;


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] ADDRESS

if ( ! function_exists( 'orbital_address_schema' ) ) :

function orbital_address_schema($itemscope = 'ul', $itemprop = 'li') {
  
  $options = get_option( 'theme_options' ); ?>
    
    <<?php echo $itemscope; ?> class="address" itemscope itemtype="http://schema.org/PostalAddress">
     
      <?php
        //  Address Line One  //
        if ( $options['address_street_1'] != '' ) { 
          echo'<'. $itemprop .' itemprop="streetAddress">'. $options['address_street_1'] .',&nbsp;</'. $itemprop .'>';
        }
        
        //  Address Line Two  //
        if ( $options['address_street_2'] != '' ) { 
          echo'<'. $itemprop .' itemprop="streetAddress">'. $options['address_street_2'] .',&nbsp;</'. $itemprop .'>'; 
        }
        
        //  Town/City  //
        if ( 
          $options['address_city'] != '' ) { echo'<'. $itemprop .' itemprop="addressLocality">'. $options['address_city'] .',&nbsp;</'. $itemprop .'>';
        }
        
        //  County/State  //
        if ( $options['address_county'] != '' ) { 
          echo'<'. $itemprop .' itemprop="addressRegion">'. $options['address_county'] .',&nbsp;</'. $itemprop .'>';
        }
        
        //  Postcode/Zip  //
        if ( $options['address_postcode'] != '' ) { 
          echo'<'. $itemprop .' itemprop="postalCode">'. $options['address_postcode'] .'</'. $itemprop .'>';
        }
      ?>
     
    </<?php echo $itemscope; ?>>
    
  <?php }
  
endif;


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //