<?php 

function base_script_styles(){

    define('SITE_VERSION', '1.1.0');

    //style 
    wp_enqueue_style('main-theme-style', get_template_directory_uri() . '/assets/css/style.css', [], SITE_VERSION);

    wp_enqueue_style('uikit-style', 'https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/css/uikit.min.css');

    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/custom-style.css', [], SITE_VERSION);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', [], SITE_VERSION);
}

add_action('wp_enqueue_scripts','base_script_styles');

function theme_support() {
    add_theme_support( 'post-thumbnails' );
}
add_action('init', 'theme_support');