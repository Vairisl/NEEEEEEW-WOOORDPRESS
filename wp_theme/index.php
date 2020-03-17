<?php get_header(); ?>

<!-- Main Content-->
<div class="container-fluid p-0 headBig">
  <div class="header-bg">
    <div class="row h-100 nomargin">
      <div class="col align-self-center headerTitle">
        <h2 id="header-text">Latvijas lauki – lieliska vieta, kur dzīvot, strādāt un viesoties!</h2>
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row cards">
      <div class="col-lg-4">
        <a href="#">
          <div class="cardBase green">
            <i class="fa fa-map"></i>
            VRG Kartes links
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="#">
          <div class="cardBase">
            <i class="fa fa-calendar"></i>
            Aktivitāšu kalendārs
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="#">
          <div class="cardBase orange">
            <i class="fa fa-group"></i>
            Latvijas aktīvās lauku biedrības
          </div>
        </a>
      </div>
    </div>

    <!-- Jaunumi -->
    <div class="row justify-content-md-center text-center">
      <div class="col catTitleAlt">
        <h3>Jaunumi</h3>
      </div>
    </div>

    <div class="row justify-content-md-center news">
      <div class="col-lg-4 col-md-4">
        <div class="row ">
          <div class="col subCat">
            <h5>Jaunumu kategorija 01</h5>
          </div>
        </div>

        <div class="row newItem">
          <div class="col">
            <div class="row">
              <div class="thumb">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/css/1.jpg" alt="">
              </div>
            </div>
            <div class="row">
              <div class="head">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/post" class="title" title="Jaunuma nosaukums 01">Jaunuma nosaukums 01</a>
                <div class="date">
                  20. janvāris, 2020
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col btm">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/post" class="readMore" title="Lasīt visu"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-4 col-md-4">
        <div class="row ">
          <div class="col subCat">
            <h5>Jaunumu kategorija 02</h5>
          </div>
        </div>

        <div class="row newItem">
          <div class="col">
            <div class="row">
              <div class="thumb">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/css/1.jpg" alt="">
              </div>
            </div>
            <div class="row">
              <div class="head">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/post" class="title" title="Jaunuma nosaukums 02">Jaunuma nosaukums 02</a>
                <div class="date">
                  20. janvāris, 2020
                </div>
              </div>
            </div>
            <div class="row">
              <div class="content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col btm">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/post" class="readMore" title="Lasīt visu"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-4 col-md-4">
        <div class="row ">
          <div class="col subCat">
            <h5>Jaunumu kategorija 03</h5>
          </div>
        </div>

        <div class="row newItem">
          <div class="col">
            <div class="row">
              <div class="head">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/post-alt" class="title" title="Jaunuma nosaukums 03">Jaunuma nosaukums 03</a>
                <div class="date">
                  20. janvāris, 2020
                </div>
              </div>
            </div>
            <div class="row">
              <div class="content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col btm">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/post-alt" class="readMore" title="Lasīt visu"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="row newItem">
          <div class="col">
            <div class="row">
              <div class="head">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/post-alt" class="title" title="Jaunuma nosaukums 04">Jaunuma nosaukums 04</a>
                <div class="date">
                  20. janvāris, 2020
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col btm">
                <a href="<?php echo get_stylesheet_directory_uri(); ?>/post-alt" class="readMore" title="Lasīt visu"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-right">
      <div class="col">
        <a href="<?php echo get_stylesheet_directory_uri(); ?>/post-alt" class="toTop">Atpakaļ uz augšu <i class="fa fa-chevron-up"></i></a>
      </div>
    </div>
  </div>

  <hr>

  <?php get_footer(); ?>