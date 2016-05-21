<?php
/**
 * Colinear functions and definitions
 * Child theme definition for theme: Hans Strootman Lezingen
 * @package colinear
 */

function my_post_queries( $query ) {
  // not an admin page and is the main query
  if (!is_admin() && $query->is_main_query()){
    if(is_category()){
      $query->set('posts_per_page', 50);
    }
  }
}
add_action( 'pre_get_posts', 'my_post_queries' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function modify_read_more_link() {
    return ' <a class="more-link" href="' . get_permalink() . '">Lees verder...</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

function sa_sanitize_additional_chars ($filename) {
    return remove_accents( $filename );
}
add_filter('sanitize_file_name', 'sa_sanitize_additional_chars', 10);

function my_child_theme_locale() {
    load_child_theme_textdomain( 'colinear', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_locale' );

?>