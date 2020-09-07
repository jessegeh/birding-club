<?php

function birding_club_files() {
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('birding_main_styles', get_stylesheet_uri());

    wp_register_style('style', get_template_directory_uri() . '/src/styles/app.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/src/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'birding_club_files');

function birding_club_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'birding_club_features');