<?php 
add_action('wp_enqueue_scripts', 'akaleya_styles_scripts');
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
add_theme_support( 'post-thumbnails' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action( 'init', 'cpt_slider_init' );
add_action( 'init', 'cpt_presentation_init' );
add_action( 'init', 'cpt_services_init' );
add_action( 'init', 'cpt_portfolio_init' );
add_action( 'init', 'category_realisation' );
add_action( 'init', 'cpt_link_init' );
// ajout format d'image      
if(function_exists('add_theme_support')):
    add_image_size('thumbnail_portfolio_sm',545,368,false);
    add_image_size('thumbnail_portfolio',370,250,false);    
endif;
add_filter( 'the_content', 'my_sharing_buttons');
