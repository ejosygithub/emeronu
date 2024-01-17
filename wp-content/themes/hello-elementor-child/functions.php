<?php

function bootstrap_enqueue_styles() {
    wp_register_style('bootstrap',get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri(), $dependencies); 
	wp_enqueue_style('bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css');
}

function bootstrap_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap-script', get_stylesheet_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '5.3.0', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_styles' ,1);
add_action( 'wp_enqueue_scripts', 'bootstrap_enqueue_scripts',1 );


?>