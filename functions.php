<?php

//Load script and styles
function loadScripts()
{
//    css
    if (is_404()) {
        wp_enqueue_style('styleError', get_template_directory_uri() . '/_cdn/css/styleError.css', [], '1.0.0', 'all');
    } elseif (is_home()) {
        wp_enqueue_style('stylesheet', get_template_directory_uri() . '/_cdn/css/home.css', [], '1.0.0', 'all');
    } elseif (is_page(['corporal', 'facial', 'maos-e-pes', 'produto'])) {
        wp_enqueue_style('stylesheet', get_template_directory_uri() . '/_cdn/css/styles.css', [], '1.0.0', 'all');
    }

//    js
    wp_enqueue_script('menu', get_template_directory_uri() . '/_cdn/js/menu.js', [], '1.0.0', true);

    if (is_home()) {
        wp_enqueue_script('scroll', get_template_directory_uri() . '/_cdn/js/scroll.js', [], '1.0.0', true);
    }
}

add_action('wp_enqueue_scripts', 'loadScripts');

//Menu
function register_my_menus()
{
    register_nav_menus([
        'header-menu' => __('Header Menu'),
        'header-home' => __('Home Menu'),
    ]);
}

add_action('init', 'register_my_menus');
