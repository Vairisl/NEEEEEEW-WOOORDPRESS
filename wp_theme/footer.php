<!-- Footer -->
<div class="container">
  <div class="row sponsors justify-content-md-center text-center d-none d-lg-flex">
    <div class="col-lg">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/eu.png" width="200" alt="" style="margin-top: 25px;"></a>
    </div>
    <div class="col-lg">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/elflsa.png" width="200" alt="" style="margin-top: 25px;"></a>
    </div>
    <div class="col-lg">
      <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/lad.png" height="80" alt=""></a>
    </div>
  </div>
  <div id="carousel" class=" d-lg-none">
    <div class="wrapper">
      <div class="slider">
        <div class="slide">
          <!-- Slider -->
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/eu.png" width="200" alt="" style="margin-top: 25px;"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/elflsa.png" width="200" alt="" style="margin-top: 25px;"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/lad.png" height="80" alt=""></a>
        </div>
        <div class="slide">
          <!-- Slider dublējas lai izskatītos seemless transformation -->
          <!-- Ātrākai ielādei domāju būtu vajadzīga alternatīva metode -->
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/eu.png" width="200" alt="" style="margin-top: 25px;"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/elflsa.png" width="200" alt="" style="margin-top: 25px;"></a>
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/css/lad.png" height="80" alt=""></a>
        </div>
      </div>
    </div>
  </div>

  <div id="footer" class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg col-sm">
        <nav>
          <ul>
            <h6>Noderīgas saites</h6>
            <li><a href="#">Noderīga saite 01</a></li>
            <li><a href="#">Noderīga saite 02</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg col-sm">
        <nav>
          <ul>
            <h6>Noderīgas saites</h6>
            <li><a href="#">Noderīga saite 01</a></li>
            <li><a href="#">Noderīga saite 02</a></li>
          </ul>
        </nav>
      </div>
      <div class="col-lg col-sm">
        <nav>
          <ul>
            <h6>Noderīgas saites</h6>
            <li><a href="#">Noderīga saite 01</a></li>
            <li><a href="#">Noderīga saite 02</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="row socialMedia justify-content-md-center text-center">
      <div class="col">
        <ul>
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row copyrights justify-content-md-center text-center">
      <div class="col">
        <ul>
          <li>Atbalsta Zemkopības ministrija un Lauku atbalsta dienests</li>
          <li>Latvijas Lauku forums, 2015</li>
        </ul>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>