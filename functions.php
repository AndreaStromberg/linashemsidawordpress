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

    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.0');
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
    wp_enqueue_script('expandable-menu', get_template_directory_uri() . '/js/expandableMenu.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'expandable_menu');

function masonry()
{
    if (is_page('illustrationer')) {
        wp_enqueue_script_module('image-masonry', get_theme_file_uri('/js/masonry.js'));
    }
}
add_action('wp_enqueue_scripts', 'masonry');

function show_more_illustrations()
{
    if (is_page('illustrationer')) {
        wp_enqueue_script('show-more-pagang_handler', get_template_directory_uri() . '/js/illustrationer.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'show_more_illustrations');

function show_more_pagang()
{
    if (is_page('pa-gang')) {
        wp_enqueue_script('show-more-pagang', get_template_directory_uri() . '/js/pagang.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'show_more_pagang');

function show_more_varldar()
{
    if (is_page('varldar-och-karaktarer')) {
        wp_enqueue_script('show-more-varldar', get_template_directory_uri() . '/js/varldarOchKaraktarer.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'show_more_varldar');

function show_more_arbetsprocesser()
{
    if (is_page('arbetsprocesser')) {
        wp_enqueue_script('show-more-arbetsprocesser', get_template_directory_uri() . '/js/arbetsprocesser.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'show_more_arbetsprocesser');

function show_more_texter()
{
    if (is_page('texter')) {
        wp_enqueue_script('show-more-texter', get_template_directory_uri() . '/js/texter.js', array(), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'show_more_texter');

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

function load_more_illustrations_handler()
{
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'category_name'     =>      'illustrationer',
        'post_type'         =>      'post',
        'paged'             =>      $page,
        'posts_per_page'    =>      6
    );

    $query = new WP_Query($args);
    $pic_width = 0;
    $pic_height = 0;

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

            if (has_post_thumbnail()) {
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                $thumbnail_data = wp_get_attachment_metadata($thumbnail_id);

                $pic_width = ceil($thumbnail_data['width'] / 100);
                $pic_height = ceil($thumbnail_data['height'] / 100);
            }

            echo '<div class="frame" style="--width: ' . $pic_width . '; --height: ' . $pic_height . ';">';
            echo '<a href="';
            echo the_permalink();
            echo '">';
            echo the_post_thumbnail('large');
            echo '</a>';
            echo '</div>';

        endwhile;
    endif;

    wp_reset_postdata();
    // Det avbryter PHP-körningen för AJAX
    wp_die();
}
add_action('wp_ajax_load_more_illustrations', 'load_more_illustrations_handler');
// För utloggade besökare
add_action('wp_ajax_nopriv_load_more_illustrations', 'load_more_illustrations_handler');

function load_more_pagang_handler()
{
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'category_name'     =>      'pa-gang',
        'post_type'         =>      'post',
        'paged'             =>      $page,
        'posts_per_page'    =>      6
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            echo '<article class="pagang-card card">';
            echo '<a href="';
            echo the_permalink();
            echo '">';

            echo '<figure class="card__image">';
            echo the_post_thumbnail('large');
            echo '</figure>';

            echo '<div class="card__content">';
            echo '<div class="card__text">';

            echo '<h3 class="card__heading">';
            echo the_title();
            echo '</h3>';

            echo the_excerpt();
            echo '</div>';

            echo '<button type="button" class="button">';
            echo 'Läs mer';
            echo '</button>';

            echo '</div>';
            echo '</a>';
            echo '</article>';

        endwhile;
    endif;
    wp_reset_postdata();

    // Det avbryter PHP-körningen för AJAX
    wp_die();
}
add_action('wp_ajax_load_more_pagang', 'load_more_pagang_handler');
// För utloggade besökare
add_action('wp_ajax_nopriv_load_more_pagang', 'load_more_pagang_handler');


function load_more_varldar_handler()
{
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'category_name'     =>      'varldar-och-karaktarer',
        'post_type'         =>      'post',
        'paged'             =>      $page,
        'posts_per_page'    =>      4
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            echo '<article class="pagang-card card">';
            echo '<a href="';
            echo the_permalink();
            echo '">';

            echo '<figure class="card__image">';
            echo the_post_thumbnail('large');
            echo '</figure>';

            echo '<div class="card__content">';
            echo '<div class="card__text">';

            echo '<h3 class="card__heading">';
            echo the_title();
            echo '</h3>';

            echo the_excerpt();
            echo '</div>';

            echo '<button type="button" class="button">';
            echo 'Läs mer';
            echo '</button>';

            echo '</div>';
            echo '</a>';
            echo '</article>';

        endwhile;
    endif;
    wp_reset_postdata();

    // Det avbryter PHP-körningen för AJAX
    wp_die();
}
add_action('wp_ajax_load_more_varldar', 'load_more_varldar_handler');
// För utloggade besökare
add_action('wp_ajax_nopriv_load_more_varldar', 'load_more_varldar_handler');


function load_more_arbetsprocesser_handler()
{
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'category_name'     =>      'arbetsprocesser',
        'post_type'         =>      'post',
        'paged'             =>      $page,
        'posts_per_page'    =>      5
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            echo '<article class="pagang-card card">';
            echo '<a href="';
            echo the_permalink();
            echo '">';

            echo '<figure class="card__image">';
            echo the_post_thumbnail('large');
            echo '</figure>';

            echo '<div class="card__content">';
            echo '<div class="card__text">';

            echo '<h3 class="card__heading">';
            echo the_title();
            echo '</h3>';

            echo the_excerpt();
            echo '</div>';

            echo '<button type="button" class="button">';
            echo 'Läs mer';
            echo '</button>';

            echo '</div>';
            echo '</a>';
            echo '</article>';

        endwhile;
    endif;
    wp_reset_postdata();

    // Det avbryter PHP-körningen för AJAX
    wp_die();
}
add_action('wp_ajax_load_more_arbetsprocesser', 'load_more_arbetsprocesser_handler');
// För utloggade besökare
add_action('wp_ajax_nopriv_load_more_arbetsprocesser', 'load_more_arbetsprocesser_handler');

function load_more_texter_handler()
{
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;

    $args = array(
        'category_name'     =>      'texter',
        'post_type'         =>      'post',
        'paged'             =>      $page,
        'posts_per_page'    =>      5
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            echo '<article class="pagang-card card">';
            echo '<a href="';
            echo the_permalink();
            echo '">';

            echo '<figure class="card__image">';
            echo the_post_thumbnail('large');
            echo '</figure>';

            echo '<div class="card__content">';
            echo '<div class="card__text">';

            echo '<h3 class="card__heading">';
            echo the_title();
            echo '</h3>';

            echo the_excerpt();
            echo '</div>';

            echo '<button type="button" class="button">';
            echo 'Läs mer';
            echo '</button>';

            echo '</div>';
            echo '</a>';
            echo '</article>';

        endwhile;
    endif;
    wp_reset_postdata();

    // Det avbryter PHP-körningen för AJAX
    wp_die();
}
add_action('wp_ajax_load_more_texter', 'load_more_texter_handler');
// För utloggade besökare
add_action('wp_ajax_nopriv_load_more_texter', 'load_more_texter_handler');
