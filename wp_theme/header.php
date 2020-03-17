<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Latvijas Lauku forums</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/css/icon.png">
  <!-- Place favicon.ico in the root directory -->
  <?php wp_head(); ?>
  <meta name="theme-color" content="#fafafa">
  <style media="screen">
  .logo {
    background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/css/LLF-logo.jpg') !important;
  }
  </style>
</head>

<body>
  <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
  <!-- Navigation -->
  <div class="navigation">
    <div class="inner">
      <div class="row justify-content-md-center text-center">
        <div class="col-lg-2">
          <!-- Logo -->
          <a href="<?php echo get_stylesheet_directory_uri(); ?>/sakums" title="Latvijas Lauku forums">
            <div class="logo"></div>
          </a>
        </div>
        <div class="col-lg">
          <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mainNav collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
              <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 3,
                    'container'         => 'div',
                    'container_class'   => 'mainNav',
                    'container_id'      => 'navbarNavDropdown',
                    'menu_class'        => 'navbar-nav',
                    'menu_id'           => '',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
              ?>
                <div class="scndNav">
                  <li class="nav-item">
                    <a class="nav-link" href="#" title="Par Latvijas Lauku forums">EN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_stylesheet_directory_uri(); ?>/Search" title="Par Latvijas Lauku forums"><i class="fa fa-search"
                        aria-hidden="true"></i></a>
                  </li>
                </div>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>