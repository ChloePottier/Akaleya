<?php // Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', ''. get_home_url() .'/wp-content/themes/akaleya-theme/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_script('burger',''. get_home_url() .'/wp-content/themes/akaleya-theme/js/navigation/burger.js');
    wp_enqueue_script('nav-fixed',''. get_home_url() .'/wp-content/themes/akaleya-theme/js/navigation/nav-fixed.js');
    wp_enqueue_script('slider',''. get_home_url() .'/wp-content/themes/akaleya-theme/js/slider-header.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper',''. get_home_url() .'/wp-content/themes/akaleya-theme/assets/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script( 'validator', 'https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js' );
    wp_enqueue_script('boostrap', ''. get_home_url() .'/wp-content/themes/akaleya-theme/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
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
add_theme_support( 'post-thumbnails' );

