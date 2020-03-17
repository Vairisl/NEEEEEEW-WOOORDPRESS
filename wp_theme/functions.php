<?php

function my_scripts_stylesheets(){
// Theme's main stylesheet ( style.css ).
wp_enqueue_style( 'style', get_stylesheet_uri() );
// Normalize
wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
// Bootstrap
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
// Font Awesome
wp_enqueue_style( 'font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

//jQuery
wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array(), false, true );
//Popper
wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), false, true );
//Multilevel
wp_enqueue_script('multilevel', get_template_directory_uri() . '/js/multilevel.js');
}

add_action( 'wp_enqueue_scripts', 'my_scripts_stylesheets');


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


add_theme_support( 'post-thumbnails', apply_filters( 'pagelines_post-thumbnails', array('post', 'recipe') ) );
















?>
