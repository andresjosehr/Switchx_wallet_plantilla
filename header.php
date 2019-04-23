<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <title><?php
      if (function_exists('is_tag') && is_tag()) {
         single_tag_title("Archive for tag &quot;"); echo '&quot; - '; }
      elseif (is_archive()) {
         wp_title(''); echo ' Archive - '; }
      elseif (is_search()) {
         echo 'Search &quot;'.wp_specialchars($s).'&quot; - '; }
      elseif (!(is_404()) && (is_single()) || ( !is_page('Homepage') )) {
         wp_title(''); echo ' - '; }
      elseif (is_404()) {
         echo '404 Not Found - '; }
      if (is_home() || is_page('Homepage') ) {
         bloginfo('name'); echo ' - '; bloginfo('description'); }
      else {
          bloginfo('name'); }
      if ($paged > 1) {
         echo ' - page '. $paged; }?></title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  


  <meta name="description" content=""/>
  <meta name="keywords" content=""/>
  <meta name="owner" content=""/>
  <meta name="rating" content="General"/>

  <meta property="og:title" content="SwitchX Wallet | Vive la experiencia Wallet"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://switch.techlatam.la/"/>
  <meta property="og:image" content="<?= get_template_directory_uri() ?>/images/Imagen-OG-Tugo"/>
  <meta property="og:site_name" content="SwitchX Wallet | Vive al experiencia Wallet"/>
  <meta property="og:description" content="Vive la experiencia de tener la mejor billetera online"/>

  <!--[if IE]>
  	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" media="screen"/>
  <![endif]-->

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href="<?php echo home_url(); ?>" rel="index" title="<?php bloginfo('name') ?> - <?php bloginfo('description'); ?>"/>

  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
  

  <script src="<?= get_template_directory_uri() ?>/js/scripts.min.js"></script>



  <?php wp_head(); ?>

	

</head>

<body <?php body_class(); ?>>
  <!-- Header Section -->
  <header class="header" style="display: block;">
    <div class="container full-height container-is-gapless-table">
      <!-- Header TOP -->
      <div class="header-container full-height">
        <div class="header__logo flex-center">
         <a href="<?php echo get_site_url(); ?>"><img class="img-prin" src="<?php bloginfo('template_directory'); ?>/images/logo_header.png" alt=""></a>
        </div>
        <div class="header__menu">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
        <div class="flex-center">
          <div id="nav-icon3" onclick="openNav()">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
      <!-- END Header TOP -->
    </div>
  </header>
    <!-- END Header Section -->


  <div class="header__separate"></div>
  <!-- END Header Section -->

  <!-- The overlay -->
  <div id="myNav" class="overlay">
    <div class="sub_overlay"></div>
    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <div class="overlay-content__logo">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo_header.png" alt="">
      </div>
      <div class="overlay-content__menu">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      </div>
      <div class="overlay-content__social">
        <a href="#" class="footer-new__social__brand"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-instagram"></i></a>
        <a href="#" class="footer-new__social__brand"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    <div class="foot">
      <div align="center" class="foot-div">
          <img class="foot-insta" src="<?= get_template_directory_uri() ?>/images/insta.png" alt="">
          <img src="<?= get_template_directory_uri() ?>/images/twit.png" alt="">
      </div>
    </div>

  </div>
