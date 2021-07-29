<?php
require 'hooks.php';
// Chargement des styles et des scripts Bootstrap sur WordPress
function akaleya_styles_scripts(){
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/font-awesome/css/all.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper',''.get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script( 'validator',''.get_template_directory_uri(). '/assets/js/validator.min.js' );
    wp_enqueue_script('bootstrap-js', ''.get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('print', get_template_directory_uri() .'/assets/print.css', array(), '1.0', 'print');
    wp_enqueue_style('style', get_stylesheet_uri());
}
function wpm_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //On autorise les .svg
    $mime_types['webp'] = 'image/webp'; //On autorise les .webp
    return $mime_types;
}
//Ajouter le logo
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 52,
    'width'       => 200,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' )
    );
    add_theme_support( 'custom-logo', $defaults );
   }
// Masquer admin bar
   show_admin_bar( false );
   add_filter( 'show_admin_bar', '__return_false' );
//Custom post type
function cpt_slider_init() {
$labels = array(
    'name'                  => _x( 'Slider', 'Post type general name', 'textdomain' ),
    'singular_name'         => _x( 'Slide', 'Post type singular name', 'textdomain' ),
    'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'textdomain' ),
    'add_new'               => __( 'Ajouter un slide', 'textdomain' ),
    'add_new_item'          => __( 'Ajouter un nouveau slide', 'textdomain' ),
    'new_item'              => __( 'Nouveau slide', 'textdomain' ),
    'edit_item'             => __( 'Editer le slide', 'textdomain' ),
    'view_item'             => __( 'Voir le slide', 'textdomain' ),
    'all_items'             => __( 'Tous les slides', 'textdomain' ),
    'search_items'          => __( 'Rechercher des slides', 'textdomain' ),
    'archives'              => _x( 'Archives des slides', 'The post type archive label used in nav menus', 'textdomain' ),
); 
$args = array(
    'labels'             => $labels,
    'public'             => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'slider' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-star-filled',
    'supports'           => array( 'title', 'editor'),
); 
register_post_type( 'slider', $args );
} 
function cpt_presentation_init() {
    $labels = array(
        'name'                  => _x( 'Présentation', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Présentation', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Présentation', 'Admin Menu text', 'textdomain' ),
    ); 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'presentation' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-universal-access',
        'supports'           => array( 'title', 'editor',  // 'thumbnail', 'excerpt' 
        ),
    ); 
register_post_type( 'presentation', $args );
}    
function cpt_services_init() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'textdomain' ),
        'add_new'               => __( 'Ajouter un service', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un nouveau service', 'textdomain' ),
        'new_item'              => __( 'Nouveau service', 'textdomain' ),
        'edit_item'             => __( 'Editer le service', 'textdomain' ),
        'view_item'             => __( 'Voir le service', 'textdomain' ),
        'all_items'             => __( 'Tous les services', 'textdomain' ),
        'search_items'          => __( 'Rechercher des service', 'textdomain' ),
        'archives'              => _x( 'Archives des service', 'The post type archive label used in nav menus', 'textdomain' ),
    ); 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array( 'title', 'editor'),
    ); 
register_post_type( 'service', $args );
}     
    function cpt_portfolio_init() {
        $labels = array(
            'name'                  => _x( 'Réalisations', 'Post type general name', 'textdomain' ),
            'singular_name'         => _x( 'Réalisation', 'Post type singular name', 'textdomain' ),
            'menu_name'             => _x( 'Réalisations', 'Admin Menu text', 'textdomain' ),
            'add_new'               => __( 'Ajouter une réalisation', 'textdomain' ),
            'add_new_item'          => __( 'Ajouter une nouvelle réalisation', 'textdomain' ),
            'new_item'              => __( 'Nouvelle réalisation', 'textdomain' ),
            'edit_item'             => __( 'Editer la réalisation', 'textdomain' ),
            'view_item'             => __( 'Voir la réalisation', 'textdomain' ),
            'all_items'             => __( 'Toutes les réalisations', 'textdomain' ),
            'search_items'          => __( 'Rechercher des réalisations', 'textdomain' ),
            'archives'              => _x( 'Archives des réalisations', 'The post type archive label used in nav menus', 'textdomain' ),
        ); 
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'realisation' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-art',
            'supports'           => array( 'title', 'editor','category', 'excerpt','thumbnail' ),
        ); 
register_post_type( 'realisation', $args );
} 
// ajouter les category au portfolio
function category_realisation() {
    register_taxonomy_for_object_type ( 'category' , 'realisation') ;
} 
//Custom post type liens Externes
function cpt_link_init() {
    $labels = array(
        'name'                  => _x( 'Liens externe', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Lien externe', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Liens externe', 'Admin Menu text', 'textdomain' ),
        'add_new'               => __( 'Ajouter un lien', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un nouveau lien', 'textdomain' ),
        'new_item'              => __( 'Nouveau lien ', 'textdomain' ),
        'edit_item'             => __( 'Editer le lien', 'textdomain' ),
        'view_item'             => __( 'Voir lae lien', 'textdomain' ),
        'all_items'             => __( 'Tous les liens', 'textdomain' ),
        'search_items'          => __( 'Rechercher des lien', 'textdomain' ),
        'archives'              => _x( 'Archives des liens', 'The post type archive label used in nav menus', 'textdomain' ),
    ); 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'liens' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-admin-links',
        'supports'           => array( 'title', 'editor',),
    ); 
    register_post_type( 'liens', $args );
    } 
/*** BOUTONS DE PARTAGE RESEAUX SOCIAUX ***/
function my_sharing_buttons($content) {
    //si le blog est en page d'accueil ou si c'est un post seul
    if(is_home() || is_single()){
        // Récuperer URL de la page en cours 
        $myCurrentURL = urlencode(get_permalink());
        // Récuperer TITRE de la page en cours
        $myCurrentTitle = urlencode(get_the_title()); 
        // Récuperer MINIATURE si l'image à la une existe
        if(has_post_thumbnail($post->ID)) {
            $myCurrentThumbnail = wp_get_attachment_image_src(urlencode(get_the_post_thumbnail()), 'full'); // correction du 9 février 2017
        }
        
        // Construction des URL de partage 
        $facebookURL = esc_url( 'https://www.facebook.com/sharer/sharer.php?u='.$myCurrentURL );
        $linkedInURL = esc_url( 'https://www.linkedin.com/shareArticle?mini=true&url='.$myCurrentURL.'&amp;title='.$myCurrentTitle );
        $email_share = esc_url( 'mailto:?subject=Regarde cet article !&BODY=Hey ! Je voulais partager avec toi cet article intéressant  : '
        .$myCurrentURL.'&amp;title='.$myCurrentTitle) ;
        // Ajout des bouton en bas des articles et des pages
        $content .= '<div class="partage-reseaux-sociaux  d-flex align-items-center justify-content-end">';
        $content .= __('<span class="font-weight-bold mr-2 partagez">Partagez  : </span>');
        $content .= '<a class="share-facebook mr-2" href="'.$facebookURL.'&t='.$myCurrentTitle.'" target="_blank"><i class="fab fa-facebook-square"></i></a>';

        // $content .= '<a class="share-facebook mr-2" href="'.$facebookURL.'" target="_blank"><i class="fab fa-facebook-square"></i></a>';
        $content .= '<a class="share-linkedin mr-2" href="'.$linkedInURL.'" target="_blank"><i class="fab fa-linkedin"></i></a>';
        $content .= '<a class="share-email" href="'.$email_share.'" target="_blank"><i class="fas fa-envelope"></i></a>';
        $content .= '</div>';
        }
        return $content;
};
