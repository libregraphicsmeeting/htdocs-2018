<?php

if (!empty($_SERVER['HTTPS'])) {
  function add_hsts_header($headers) {
    $headers['strict-transport-security'] = 'max-age=31536000; includeSubDomains';
    // $headers['Content-Security-Policy'] = 'default-src https:; script-src self nonce-lgm2018';
    $headers['Content-Security-Policy'] = 'default-src https:; script-src \'self\' \'unsafe-inline\'';
    $headers['X-Frame-Options'] = 'SAMEORIGIN';
    $headers['X-XSS-Protection'] = '1; mode=block';
    $headers['X-Content-Type-Options'] = 'X-Content-Type-Options: nosniff';
    $headers['Referrer-Policy'] = 'strict-origin';


    return $headers;
  }

add_filter('wp_headers', 'add_hsts_header');
}

/**
 *    lgm2018_enqueue_theme_scripts
 *    Append theme scripts to document
 */

function lgm2018_enqueue_theme_scripts()
{
    wp_enqueue_script(
        'theme-scripts',
        get_stylesheet_directory_uri() . '/js/scripts.js',
        array(),
        '1.0.0',
        true
    );
    if(is_page('2018-edition')) {
        wp_enqueue_script(
            'leaflet',
            'https://unpkg.com/leaflet@1.2.0/dist/leaflet.js',
            array(),
            '1.2.0',
            true
        );
        wp_enqueue_script(
            '2018map',
            get_stylesheet_directory_uri() . '/js/map.js',
            array('leaflet'),
            '1.0.0',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'lgm2018_enqueue_theme_scripts' );

/**

 *    lgm2018_enqueue_theme_styles
 *    Append theme stylesheets to document
 */

function lgm2018_enqueue_theme_styles()
{
    $parent_style = 'twentyseventeen-style';
    wp_enqueue_style( 'lgm2018-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    if(is_page('2018-edition')) wp_enqueue_style(
        'leaflet',
        'https://unpkg.com/leaflet@1.2.0/dist/leaflet.css',
        array(), '1.2.0'
    );
}
add_action( 'wp_enqueue_scripts', 'lgm2018_enqueue_theme_styles' );
