<?php
//style

//Set builder mode to debug
function builder_set_debug()
{
    return 'debug';
}

add_action('avia_builder_mode', 'builder_set_debug');

add_filter('show_admin_bar', '__return_false');

function sl_add_scripts()
{
    //Custom JS

    wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/js/slick.js', array('jquery'), null, true );

    wp_enqueue_script('all', get_stylesheet_directory_uri() . '/js/all.js', array('jquery'), null, true );

    wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/css/slick.css', [], null);

    wp_enqueue_style('all', get_stylesheet_directory_uri() . '/css/all.css', [], null);


    //Run custom JS
    wp_enqueue_script('all');

    wp_enqueue_style('all');
}
add_action('wp_enqueue_scripts', 'sl_add_scripts', 20);


function sl_tel($tel) {
    return preg_replace('/[^0-9+]/', '', $tel);
}

// // add_shortcode logo
// add_shortcode('avs_avia_logo', 'callback_avia_logo');
// function callback_avia_logo() {
//     $logo = avia_get_option('logo');
//     $logo = !empty( $logo ) ? $logo : AVIA_BASE_URL.'images/layout/logo.svg';
//     return  avia_logo($logo, '', 'strong', true);
// }


add_shortcode( 'dp_phone', 'show_phone' );
function show_phone() {
    $output = '<a href="tel:+380682181617">+38 (068) 218-16-17</a>';
    return $output;
}

add_shortcode( 'dp_adress', 'show_adress' );
function show_adress() {
    $output = '<p>Zbyszka Godlewskiego 1C/17
    65-552 Zielona Góra</p>';
    return $output;
}

add_shortcode( 'dp_mail', 'show_mail' );
function show_mail() {
    $output = '<p>bud@gmail.com</p>';
    return $output;
}

