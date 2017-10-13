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

add_action('wp_enqueue_scripts','custom_scripts');

function custom_scripts(){
    wp_register_style('bootstrap','/wp-content/themes/portfolio-theme/vendor/bootstrap/css/bootstrap.min.css',[],1.1,false);
    wp_register_style('modern-css','/wp-content/themes/portfolio-theme/css/modern-business.css',['bootstrap'],1.1,false);

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('modern-css');

};

?>


<!-- Bootstrap core CSS -->
<link href="/wp-content/themes/basic-acf-portfolio/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/wp-content/themes/basic-acf-portfolio/css/modern-business.css" rel="stylesheet">

