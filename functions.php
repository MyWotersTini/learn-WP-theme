<?php 

function base_script_styles(){


    //style 
    wp_enqueue_style('main-theme-style',
    get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts','base_script_styles');