<?php // Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper',''.get_template_directory_uri().'/assets/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script( 'validator',''.get_template_directory_uri(). '/js/validator.min.js' );
    wp_enqueue_script('bootstrap-js', ''.get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

/* Autoriser l'upload de tous types de format dans les médias */
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
function wpm_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //On autorise les .svg
    $mime_types['webp'] = 'image/webp'; //On autorise les .webp
    return $mime_types;
}
// Ajouter la prise en charge des images mises en avant
// add_theme_support( 'post-thumbnails' );


//ajouter le logo
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 52,
    'width'       => 200,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' )
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );