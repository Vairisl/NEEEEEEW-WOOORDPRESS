<?php /*
 * Template Name: Post Template
 * Template Post Type: post
 */
?>
<?php get_header(); ?>
<?php
  if(have_posts() ) :
    while(have_posts() ) : the_post();
?>
<?php if(has_post_thumbnail()) {
 $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
} ?>

<div class="container-fluid p-0 headBig">
  <div class="post header-thumb" style="background-image:url(<?php echo (($feat_image[0])) ?>);">
    <div class="row h-100 nomargin">
      <div class="col align-self-center headerTitle">
        <h2 id="header-text"><?php the_title(); ?></h2>
      </div>
    </div>
  </div>
</div>
<!-- Main Content-->
<div class="container">
      <div class="singlePageAlt">
        <div class="row text-center">
          <div class="col title">
            <?php the_title(); ?>
          </div>
        </div>
        <div class="row">
          <div class="col text-left info">
            20. janvāris, 2020  | <a href="#">Kategorija</a>
          </div>
        </div>

        <div class="row text">
          <div class="col">
            <p>
            <?php the_content(); ?>
            </p>
          </div>
        </div>
      </div>

      <div class="row text-right">
        <div class="col">
          <a href="#" class="toTop">Atpakaļ uz augšu <i class="fa fa-chevron-up"></i></a>
        </div>
      </div>
    </div>

    <hr>


  <?php
  endwhile;
  else :
    echo 'no post';
  endif;
  ?>
<?php get_footer(); ?>
