<?php

function birding_club_files() {
    wp_enqueue_style('birding_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'birding_club_files');