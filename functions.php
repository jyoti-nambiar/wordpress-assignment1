<?php

//adds dynamic title tag support 

function wpshout_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wpshout_theme_support');


function wp_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('style', get_template_directory_uri() . "/css/style.css", array('bootstrap'), $version, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/css/bootstrap.css", array(), '1.0', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . "/css/font-awesome.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'wp_register_styles');


function wp_register_scripts()
{

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.1.0', true);
    wp_enqueue_script('myscript', get_template_directory_uri() . '/js/myscript.js', array(), '1.0', true);
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
