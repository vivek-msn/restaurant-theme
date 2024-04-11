<?php

add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style( 'custom', get_stylesheet_directory_uri() . '/style.css','', 'all');
    wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() .'/css/responsive.css', '','all');    
    wp_enqueue_style( 'bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all');
    wp_enqueue_style( 'fontawesome' , 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3', 'all');
    wp_enqueue_script( 'main' ,get_stylesheet_directory_uri() .'/js/main.js', array(), '', true);
    wp_enqueue_script( 'bootstrap-popper' ,'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array('jquery'), '2.11.8', true);
    wp_enqueue_script( 'boostrap-js' ,'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery'), '5.3.2', true);
});

add_action( 'after_setup_theme', function() {

    add_theme_support('title-tag' );
    add_theme_support( 'post-thumbnails');

} );



/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Resturant-theme' ),
) );

require_once get_template_directory() . '/inc/customizer.php';