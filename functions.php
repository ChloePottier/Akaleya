<?php
require 'hooks.php';
// Chargement des styles et des scripts Bootstrap sur WordPress
function akaleya_styles_scripts(){
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/font-awesome/css/all.css');
    wp_enqueue_script('jquery');
    // wp_enqueue_script('popper',''.get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), 1, true);
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
        'supports'           => array( 'title', 'editor', 'excerpt','thumbnail' ),
    ); 
    register_post_type( 'realisation', $args );
} 
// TAxonomie 'type' pour galerie
function create_galerie_tax() {
    $labels = array(
        'name'              => _x( 'Types', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Type', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Chercher un type', 'textdomain' ),
        'all_items'         => __( 'Tous les types', 'textdomain' ),
        'view_item'         => __( 'Voir le Type', 'textdomain' ),
        'edit_item'         => __( 'Editer le Type', 'textdomain' ),
        'update_item'       => __( 'Mettre à jour le Type', 'textdomain' ),
        'add_new_item'      => __( 'Ajouter un nouveau type', 'textdomain' ),
        'new_item_name'     => __( 'Nouveau Nom', 'textdomain' ),
        'not_found'         => __( 'Aucun Type trouvé', 'textdomain' ),
        'back_to_items'     => __( 'Retour aux Types de  réalisations', 'textdomain' ),
        'menu_name'         => __( 'Types de réalisation', 'textdomain' ),
    ); 
    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'type' ),
        'show_in_rest'      => true,
    );
    register_taxonomy('type','realisation',$args);
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
        'supports'           => array( 'title', 'editor'),
    ); 
    register_post_type( 'liens', $args );
} 
/*** BOUTONS DE PARTAGE RESEAUX SOCIAUX ***/
function my_sharing_buttons($content) {
    if(is_home() || is_single() && get_post_type() == 'realisation' || in_category('non-classe')){
        // Récuperer URL et titre page en cours 
        $myCurrentURL = urlencode(get_permalink());
        $myCurrentTitle = urlencode(get_field('titre_article'));      
        // Construction des URL de partage (image mise en avant en JPG) 
        $facebookURL = esc_url( 'https://www.facebook.com/sharer/sharer.php?u='.$myCurrentURL );
        $linkedInURL = esc_url( 'https://www.linkedin.com/shareArticle?mini=true&url='.$myCurrentURL );
        $email_share = esc_url( 'mailto:?subject='.$myCurrentTitle.'&BODY=Voici un article intéressant sur "'.$myCurrentTitle.'". En savoir plus : '.$myCurrentURL) ;
        // Ajout des bouton en bas des articles et des pages
        $content .= '<div class="partage-reseaux-sociaux  d-flex align-items-center justify-content-end">';
        $content .= __('<span class="font-weight-bold mr-2 partagez">Partagez  : </span>');
        $content .= '<a class="share-facebook mr-2" href="'.$facebookURL.'&t='.$myCurrentTitle.'" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i></a>';
        $content .= '<a class="share-linkedin mr-2" href="'.$linkedInURL.'" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a>';
        $content .= '<a class="share-email" href="'.$email_share.'" target="_blank" rel="noopener"><i class="fas fa-envelope"></i></a>';
        $content .= '</div>';
        }
        return $content;
};
///Logo page connexion BO
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a,.login h1 a {
            background-image: url(<?php echo get_home_url();?>/wp-content/uploads/img/Akaleya-logo.svg);
            background-repeat: no-repeat;
            background-size: cover;
            height: 120px;
            width: 120px;
        }
    </style>
    <?php }    
function my_login_logo_url(){
    return home_url();
}
function my_login_logo_url_title(){
    return get_bloginfo('description');
}
// Mot de passe perdu
function lien_mot_de_passe_perdu( $formbottom ) {
	$formbottom .= '<a href="' . wp_lostpassword_url() . '">Mot de passe perdu ?</a>';
	return $formbottom;
}
//interdire l'accès aux non admin
function redirect_non_authorized_user() {
	// Si t'es pas admin, tu vires
	if ( is_user_logged_in() && ! current_user_can( 'manage_options' ) ) {
		wp_redirect( home_url( '/' ) );
		exit();
	}}
// shortcode private
function private_content( $atts, $content ) {
	if ( is_user_logged_in() ) {
		return $content;
	} else {
		// Affiche un lien vers la page login de WordPress, 
		// puis redirige ensuite automatiquement vers la page précédente
		return '<a href="' . wp_login_url( get_permalink() ) . '">Connectez-vous pour lire ce contenu</a>';
	}}
function roles_users(){
    remove_role('subscriber');
    remove_role('editor');
    remove_role('contributor');
    remove_role('abonne_wordpress');
    remove_role('abonne_woocommerce');
    remove_role('abonne_prestashop');
    $cap_user_client = ['edit_posts' => false, 'delete_posts' => false, 'read'=> true];
    add_role('user_wp','Abonné.e Wordpress',$cap_user_client);
    add_role('user_wc','Abonné.e Woocommerce',$cap_user_client);
    add_role('user_ps','Abonné.e Prestashop',$cap_user_client); 
}
//shortcode : afficher url
function display_url_user(){
    $userData = get_user_meta(get_current_user_id());
    if(isset($userData['website_user'])):
        $userUrl = $userData['website_user'][0];
        return '<a href="'.$userUrl.'" target="blank" rel="noreferrer">'.$userUrl.'</a>';
    else:
        return 'https://mon-site.fr';
    endif;
}
function display_dashboard_user(){
    $userData = get_user_meta(get_current_user_id());
    if(isset($userData['dashboard_user'][0])):
        $userUrl = $userData['dashboard_user'][0];
        return '<a href="'.$userUrl.'" target="blank" rel="noreferrer">'.$userUrl.'</a>'; 
    else:
        return 'https://mon-site.fr/admin';
    endif;
}
//affichage menu
function menu_top_user_logged_in(){
    if(is_user_logged_in() &&  is_home()  OR is_front_page()):
        return get_template_part('template-parts/navigation/navigation', 'items');
    elseif(is_user_logged_in() &&  ! is_home()  OR is_front_page()):
            return get_template_part('template-parts/navigation/navigation', 'items-private');
    elseif(!is_user_logged_in()) :
        return get_template_part('template-parts/navigation/navigation', 'items');
    endif;
}
//ajout champs dans profil utilisateur
function extra_user_profile_fields( $user ) { ?>
	<h3>Les informations concernant votre projet</h3>
	<table class='form-table'>
		<tbody>
            <tr>
				<th>URL de votre site internet<br />
                <small>Front-office</small></th>
				<td><input class='regular-text' id='url_website_user' type='text' name='website_user' value="<?php echo esc_attr( get_the_author_meta( 'website_user', $user->ID ) ); ?>" /></td>
			</tr>
			<tr>
				<th>URL de votre administration<br />
                <small>Back-office</small></th>
				<td><input class='regular-text' id='url_dashboard_user' type='text' name='dashboard_user' value="<?php echo esc_attr( get_the_author_meta( 'dashboard_user', $user->ID ) ); ?>" /></td>
			</tr>
		</tbody>
	</table>	
<?php }
function save_extra_user_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) ) { 
		return false; 
	}
	update_user_meta( $user_id, 'website_user', $_POST['website_user'] );
    update_user_meta( $user_id, 'dashboard_user', $_POST['dashboard_user'] );	
}



