<?php
/**
 * Colinear functions and definitions
 * Child theme definition for theme: Hans Strootman Lezingen
 * @package colinear
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}

add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
return ' <a class="more-link" href="' . get_permalink() . '">Lees verder...</a>';
}

add_filter('sanitize_file_name', 'sa_sanitize_additional_chars', 10);
function sa_sanitize_additional_chars ($filename) {
return remove_accents( $filename );
}

?>