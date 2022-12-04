<?php 

function montheme_supports(){
    add_theme_support('title-tag');
}
 
// function montheme_register_assets() {
//     wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap-grid.min.css');
//     wp_enqueue_style('bootstrap');
// }
wp_enqueue_style('load_css', get_theme_file_uri('/style.css'));
wp_enqueue_style('bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
wp_enqueue_script('bootstrap-cdn-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', 'jquery', false, true);

// wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') ); 
wp_enqueue_style('load_css', get_theme_file_uri('/style.css'));
wp_enqueue_style('bootstrap-cdn-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
wp_enqueue_script('bootstrap-cdn-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', 'jquery', false, true);

// wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') ); 


add_action('after_setup_theme', 'montheme_supports');
// add_action('wp_enqueue_scipts', 'montheme_register_assets'); 
