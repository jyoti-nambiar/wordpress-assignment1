<?php

//adds dynamic title tag support 

function wpshout_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wpshout_theme_support');

//load styles
function wp_register_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_register_style('style', get_template_directory_uri() . "/css/style.css", array('bootstrap'), $version, 'all');
    wp_enqueue_style('style');
    wp_register_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.css", array(), '1.0', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('fontawesome', get_template_directory_uri() . "/css/font-awesome.css", array(), '1.0', 'all');
    wp_enqueue_style('fontawesome');
}
add_action('wp_enqueue_scripts', 'wp_register_styles');

//load scripts
function wp_register_scripts()
{
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('myscript', get_template_directory_uri() . '/js/myscript.js', array(), 1, 1, 1);
    wp_enqueue_script('myscript');
}
add_action('wp_enqueue_scripts', 'wp_register_scripts');



function navbar_menus()
{
    $locations = array(
        'primary' => "Header Primary menu ",
        'secondary' => "Pages Secondary menu ",
        'footer' => "Footer Menu Items"

    );

    register_nav_menus($locations);
}

add_action('init', 'navbar_menus');


function wp_sidebar()
{
    register_sidebar(array(
        'name'          => __('blogg sidebar', 'html2wp'),
        'id'            => 'blog-2',
        'description'   => __('Widgets in this area will be shown on all blog and blog posts.', 'theme_name'),

    ));
}
add_action('widgets_init', 'wp_sidebar');
