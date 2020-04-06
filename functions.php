<?php

define('THEME_IMAGE', get_template_directory_uri() . '/assets/dist/img/');

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');

    // Localisation Support
    load_theme_textdomain('wp-site', get_template_directory() . '/languages');
}


add_action('wp_enqueue_scripts', function (){
//    wp_register_style('bootstrap', get_template_directory_uri() . '/includes/bootstrap/css/bootstrap.min.css', array(), '4.1.0', 'all');
//    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('main', get_template_directory_uri() . '/assets/dist/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('main'); // Enqueue it!
});


add_action('init', function () {
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'wp-site'),
        'footer-menu' => __('Footer Menu', 'wp-site'),
    ));
});
