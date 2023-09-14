<?php

function get_stylesheet_child() {
    $stylesheet_dir_uri = get_stylesheet_directory_uri();
    $stylesheet_uri     = $stylesheet_dir_uri . '';
    /**
     * Filters the URI of the active theme stylesheet.
     *
     * @since 1.5.0
     *
     * @param string $stylesheet_uri     Stylesheet URI for the active theme/child theme.
     * @param string $stylesheet_dir_uri Stylesheet directory URI for the active theme/child theme.
     */
    return apply_filters( 'stylesheet_uri', $stylesheet_uri, $stylesheet_dir_uri );
}

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'generate-child' );
    wp_enqueue_style( 'custom-theme-child', get_stylesheet_child() . '/assets/css/custom-theme.css' );
}, 999 );
