<?php

function myFirstThemeStylesAndScripts()
{

    wp_enqueue_style(
        'materialize_style',
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'
    );
    wp_enqueue_style(
        'my_style',
        get_stylesheet_uri(),
        ['materialize_style']
    );

    wp_enqueue_script(
        'materialize_script',
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',
        [],
        false,
        true
    );
}

add_action('wp_enqueue_scripts', 'myFirstThemeStylesAndScripts');


function registerMyMenus()
{
    register_nav_menus(
        [
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        ]
    );
}

add_action('init', 'registerMyMenus');

?>