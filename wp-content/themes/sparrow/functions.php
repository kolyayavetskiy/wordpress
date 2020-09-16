<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');

function style_theme () {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.css');
    wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome.min.css');
}

function  scripts_theme () {
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init');
    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo');
    wp_enqueue_script('jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider');

    wp_enqueue_script('jquery-migrate-1.2.1.min', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr');
}