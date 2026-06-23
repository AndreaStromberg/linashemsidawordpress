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
    if (is_page('illustrationer')) {
        wp_enqueue_script_module('image-masonry', get_theme_file_uri('/masonry.js'));
    }
}
add_action('wp_enqueue_scripts', 'masonry');

function show_more_illustrations()
{
    if (is_page('illustrationer')) {
        wp_enqueue_script('show-more-illustrations', get_template_directory_uri() . '/illustrationer.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'show_more_illustrations');

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
