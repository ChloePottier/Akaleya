<?php // Chargement des styles et des scripts Bootstrap sur WordPress
function wpbootstrap_styles_scripts(){
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/font-awesome/css/all.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('popper',''.get_template_directory_uri().'/assets/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script( 'validator',''.get_template_directory_uri(). '/assets/js/validator.min.js' );
    wp_enqueue_script('bootstrap-js', ''.get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('style', get_stylesheet_uri());

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
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

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
add_action( 'init', 'cpt_slider_init' );// Le hook init lance la fonction


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
        'supports'           => array( 'title', 'editor', 
        // 'thumbnail', 'excerpt' 
        ),
    ); 
    register_post_type( 'presentation', $args );
    } 
    add_action( 'init', 'cpt_presentation_init' );// Le hook init lance la fonction

    
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
    add_action( 'init', 'cpt_services_init' );// Le hook init lance la fonction
    

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
            'supports'           => array( 'title', 'editor','category'),
        ); 
        register_post_type( 'realisation', $args );
        } 
        add_action( 'init', 'cpt_portfolio_init' );// Le hook init lance la fonction

// ajouter les category au portfolio
function category_realisation() {
    register_taxonomy_for_object_type ( 'category' , 'realisation') ;
} 
add_action( 'init', 'category_realisation' );
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
        'supports'           => array( 'title', 'editor', 'excerpt'),
    ); 
    register_post_type( 'liens', $args );
    } 
    add_action( 'init', 'cpt_link_init' );// Le hook init lance la fonction

// ajout format d'image      
if(function_exists('add_theme_support')):
    add_image_size('thumbnail_portfolio_sm',545,368,false);
    add_image_size('thumbnail_portfolio',370,250,false);    

endif;

//menu ajax gallerie
function galery_assets() {
    // Charger notre script
    wp_enqueue_script( 'menu-ajax', get_template_directory_uri() . '/assets/js/navigation/nav-ajax-galery.js', array( 'jquery' ), '1.0', true );
    // Envoyer une variable de PHP à JS proprement
    wp_localize_script( 'menu-ajax', 'ajaxurl', admin_url( 'admin-ajax.php' ) );  
  }
  add_action( 'wp_enqueue_scripts', 'galery_assets' );

