<?php

function add_theme_scripts(){
    wp_enqueue_style('bootstrap-style', get_template_directory_uri().'assets/css/bootstrap.css', array(), 1.0, 'all');
    wp_enqueue_style('font-style', get_template_directory_uri().'assets/css/font-awsome.css', array(), 1.0, 'all');
    wp_enqueue_style('style', get_template_directory_uri().'assets/css/style.css', array(), 1.0, 'all');
    
}

add_action('wp_scripts', 'add_theme_scripts)';



?>