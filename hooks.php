<?php 
add_action('wp_enqueue_scripts', 'akaleya_styles_scripts');
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
add_theme_support( 'post-thumbnails' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action( 'init', 'cpt_slider_init' );
add_action( 'init', 'cpt_presentation_init' );
add_action( 'init', 'cpt_services_init' );
add_action( 'init', 'cpt_portfolio_init' );
add_action( 'init', 'create_galerie_tax', 0 );
add_action( 'init', 'cpt_link_init' );
// ajout format d'image      
if(function_exists('add_theme_support')):
    add_image_size('thumbnail_portfolio_sm',545,368,false);
    add_image_size('thumbnail_portfolio',370,250,false);    
endif;
add_filter( 'the_content', 'my_sharing_buttons');
add_action( 'login_enqueue_scripts', 'my_login_logo' );
add_filter( 'login_headerurl', 'my_login_logo_url' );
add_filter( 'login_headertext', 'my_login_logo_url_title' );
// espace membres
add_filter( 'login_form_bottom', 'lien_mot_de_passe_perdu' );
add_action( 'current_screen', 'redirect_non_authorized_user' );
// ajout rôle
add_action( 'init', 'roles_users');
//Shortcodes
add_shortcode( 'private-content', 'private_content' );
add_shortcode( 'website_user', 'display_url_user' );
add_shortcode( 'dashboard_user', 'display_dashboard_user' );




if ( ! current_user_can( 'manage_options' ) ) {
    add_filter( 'show_admin_bar', '__return_false' );
}
// menu
add_action('menu_top','menu_top_user_logged_in');
//ajout champs profil utilisateur
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );