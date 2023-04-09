<?php

function add_theme_styles(){
    wp_enqueue_style('style', get_template_directory_uri(). "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('style-bootstrap', get_template_directory_uri(). "css/bootstrap.css", array(), '1.0', 'all');
    wp_enqueue_style('style-fontawesome', get_template_directory_uri(). "css/font-awesome.css", array(), '1.0', 'all');

}

add_action( 'wp_enqueue_scipts', 'style');
add_action( 'wp_enqueue_scipts', 'style-bootstrap');
add_action( 'wp_enqueue_scipts', 'style-fontawesome');

?>