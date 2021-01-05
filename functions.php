<?php

//Load script and styles
function loadScripts()
{
    if (is_404()) {
        wp_enqueue_style('styleError', get_template_directory_uri() . '/_cdn/css/styleError.css', [], '1.0.0', 'all');
    } else {
        wp_enqueue_style('stylesheet', get_template_directory_uri() . '/_cdn/css/styles.css', [], '1.0.0', 'all');
    }
}

add_action('wp_enqueue_scripts', 'loadScripts');

//Menu
function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu')
    ]);
}

add_action('init', 'register_my_menus');
