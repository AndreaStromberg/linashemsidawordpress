<?php

/**
 * Theme Support
 */
add_theme_support('post-thumbnails');

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
        // 'pagang_hover_menu' => 'På gång - hovermeny',
        'expandable_hamburger_menu' => 'Hamburgermeny'
    ));
}

add_action('after_setup_theme', 'linashemsida_register_menus');


function expandable_menu()
{
    wp_enqueue_script('expandable-menu', get_template_directory_uri() . '/expandableMenu.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'expandable_menu');

function masonry()
{
    // wp_enqueue_script('image-masonry', get_template_directory_uri() . '/masonry.js', array(), '1.0', true);
    wp_enqueue_script_module('image-masonry', get_theme_file_uri('/masonry.js'));
}
add_action('wp_enqueue_scripts', 'masonry');


function prepareImageData($attachment_id)
{
    $uploads_baseurl = wp_upload_dir()['baseurl'];

    $prepared = [];
    $data = wp_get_attachment_metadata($attachment_id);
    $prepared = [
        'mime_type' => get_post_mime_type($attachment_id),
        'url' => $uploads_baseurl . '/' . $data['file'],
        'sizes' => [],
    ];

    foreach ($data['sizes'] as $size => $sizeInfo) {
        $prepared['sizes'][$size] = [
            'url' => $uploads_baseurl . '/' . $sizeInfo['file'],
        ];
    }

    return $prepared;
}

// function my_custom_head_code()
// {
//     echo '<meta name="author" content="Your Name">';
// }
// add_action('wp_head', 'my_custom_head_code');


// // ===================================================================================================================================
// // ===================================================================================================================================
// /**
//  * Script and Styles
//  */

// // Funktion som läser in publika skript, alltså skript som används bara i frontend. 
// function uv_public_scripts()
// {
//     // Det sista värdet i funktionen som vi satt till true, är att scriptet läses in i footern, alltså när hela sidan är laddad. Motsvarar "defer" som vi använt tidigare. 
//     wp_enqueue_script('header-scroll', get_template_directory_uri() . '/src/js/headerScroll.js', array(), '1.0', true);
//     wp_enqueue_script('responsive-menu', get_template_directory_uri() . '/src/js/responsiveMenu.js', array(), '1.0', true);
//     wp_enqueue_script('video-control', get_template_directory_uri() . '/src/js/videoControl.js', array(), '1.0', true);
// }
// add_action('wp_enqueue_scripts', 'uv_public_scripts');


// function uv_script_and_styles()
// {
//     wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
//     add_editor_style('style.css');
// }

// add_action('enqueue_block_assets', 'uv_script_and_styles');


// /**
//  * Register nav menus
//  */
// if (! function_exists('uv_register_nav_menu')) {

//     function uv_register_nav_menu()
//     {
//         register_nav_menus(array(
//             'main_menu' => __('Main Menu', 'uv-theme'),

//         ));
//     }
//     add_action('after_setup_theme', 'uv_register_nav_menu', 0);
// }
// // ===================================================================================================================================
// // ===================================================================================================================================
