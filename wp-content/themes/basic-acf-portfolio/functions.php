<?php

function custom_title () {
    $title = get_bloginfo('name');
    $desc = get_bloginfo('description');
    $page_title = wp_title();
    $result = $page_title . ' | ' . $title . ' ~ ' . $desc;
    return $result;
}

add_action('init','register_menus');

function register_menus(){
    register_nav_menus([
        'main-menu'=> 'Main Menu top of the page'

    ]);
}

add_action('wp_enqueue_scripts','custom_styles');

function custom_styles(){
    wp_register_style('bootstrap',
        get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css',
        [],
        1.1
    );
    wp_register_style('modern-css',
        get_template_directory_uri().'/css/modern-business.css',
        ['bootstrap'],
        1.1
    );

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('modern-css');

};
add_action('wp_enqueue_scripts','custom_scripts');

function custom_scripts(){
    wp_register_script(
        'jQuery',
        get_template_directory_uri().'/vendor/jquery/jquery.min.js',
        [],
        3.21,
        false );

    wp_register_script(
        'popper',
        get_template_directory_uri().'/vendor/popper/popper.min.js',
        [],
        11.111,
        true);

    wp_register_script(
        'bootstrap',
        get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.js',
        [],
        4.0,
        true);

    wp_enqueue_script('jQuery');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
};