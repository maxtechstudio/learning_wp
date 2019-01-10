<?php function lapizzeria_styles() {


    // adding stylesheet
    wp_register_style('normalized', get_template_directory_uri() . '/css/normalized.css', array(), '6.0.0');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array('normalized'), '1.0');

    // adding enqueue style


    wp_enqueue_style('normalized');
    wp_enqueue_style('style');

}

// 
add_action('wp_enqueue_scripts', 'lapizzeria_styles');

// Add menus 
function lapizzeria_menus(){

register_nav_menus(array(
'header-menu'=>__('Header Menu', 'lapizzeria'),
'social-menu'=>__('social Menu', 'lapizzeria')

));

}

add_action('init', 'lapizzeria_menus');