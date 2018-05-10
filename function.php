<?php
/**
 * Functions
 *
 * @package WordPress
 **/
/** Add_theme_support **/
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
/**
 * Custom-fields
 */
/**
 * Stylesheet, scriptの読み込み
 */
function add_files() {
  wp_enqueue_script(
    'main', get_template_directory_uri() . '/assets/**.js' );
  wp_enqueue_style(
    'main', get_template_directory_uri() . '**.css' );
}
add_action( 'add_files' );
