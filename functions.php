<?php

/**
 * Lägga till styles och scripts
 */

function linashemsida_styles_and_scripts()
{
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), '1.0');
}

add_action('wp_enqueue_scripts', 'linashemsida_styles_and_scripts');


/**
 * Registrera menyer
 */

function linashemsida_register_menus()
{
    register_nav_menus(array(
        'main_menu' => 'Huvudmeny',
        'pagang_hover_menu' => 'På gång - hovermeny',
        'expandable_hamburger_menu' => 'Hamburgermeny'
    ));
}

add_action('after_setup_theme', 'linashemsida_register_menus');
