<?php
require 'hooks.php';
require 'hcaptcha.php';
// Chargement des styles et des scripts Bootstrap sur WordPress
function akaleya_styles_scripts(){
    wp_enqueue_style('bootstrap', ''. get_template_directory_uri() .'/assets/bootstrap-5.2/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/fontawesome6/css/all.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-tabs');    wp_enqueue_script( 'validator',''.get_template_directory_uri(). '/assets/js/validator.min.js' );
    wp_enqueue_script('bootstrap-js', ''.get_template_directory_uri() .'/assets/bootstrap-5.2/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_style('print', get_template_directory_uri() .'/assets/print.css', array(), '1.0', 'print');
    wp_enqueue_style('style', get_stylesheet_uri());
}
function remove_block_library_css(){
    if(is_front_page()):
        wp_dequeue_style('wp-block-library');

    endif;
    }
function wpm_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; //On autorise les .svg
    $mime_types['webp'] = 'image/webp'; //On autorise les .webp
    return $mime_types;
}

function akaleya_theme_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo',array(
        'height'      => 52,
        'width'       => 200,
        'flex-width'  => true,
    ) );
}
// Articles devient Blog
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'Blog';
        $labels->singular_name = 'Blog';
        $labels->add_new = 'Ajouter un article';
        $labels->add_new_item = 'Ajouter un article';
        $labels->edit_item = 'Modifier l\'article';
        $labels->new_item = 'Nouvel article';
        $labels->view_item = 'Voir l\'article';
        $labels->search_items = 'Rechercher un article';
        $labels->not_found = 'Aucun article trouvé';
        $labels->not_found_in_trash = 'Aucun article dans la corbeille';
        $labels->all_items = 'Tous les articles';
        $labels->menu_name = 'Blog';
        $labels->name_admin_bar = 'Blog';    
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
        'menu_position'      => 25,
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
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-universal-access',
        'supports'           => array( 'title', 'editor' ),
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
        'search_items'          => __( 'Rechercher des services', 'textdomain' ),
        'archives'              => _x( 'Archives des services', 'The post type archive label used in nav menus', 'textdomain' ),
    ); 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'page',
        'has_archive'        => true,
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-admin-tools',
        'supports'           => array( 'title', 'editor', 'thumbnail','page-attributes'),
        'show_in_rest'      => true, 
        'hierarchical'       => true, 
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
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-art',
        'supports'           => array( 'title', 'editor', 'excerpt','thumbnail' ),
        'show_in_rest'      => true, 
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
        'rest_base'         => 'genre',
    );
    register_taxonomy('type','realisation',$args);
}
//Custom post type liens Externes
function cpt_link_init() {
    $labels = array(
        'name'                  => _x( 'Liens externe', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Lien externe', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Liens réseaux sociaux', 'Admin Menu text', 'textdomain' ),
        'add_new'               => __( 'Ajouter un lien', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un nouveau lien', 'textdomain' ),
        'new_item'              => __( 'Nouveau lien ', 'textdomain' ),
        'edit_item'             => __( 'Editer le lien', 'textdomain' ),
        'view_item'             => __( 'Voir le lien', 'textdomain' ),
        'all_items'             => __( 'Tous les liens', 'textdomain' ),
        'search_items'          => __( 'Rechercher des liens', 'textdomain' ),
        'archives'              => _x( 'Archives des liens', 'The post type archive label used in nav menus', 'textdomain' ),
    ); 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'liens' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => 25,
        'menu_icon'          => 'dashicons-admin-links',
        'supports'           => array( 'title', 'editor'),
    ); 
    register_post_type( 'liens', $args );
} 
function cpt_lexique_init() {
    $labels = array(
        'name'                  => _x( 'Lexique', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Traduction', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Lexique', 'Admin Menu text', 'textdomain' ),
        'add_new'               => __( 'Ajouter une traduction', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter une nouvelle traduction', 'textdomain' ),
        'new_item'              => __( 'Nouvelle traduction', 'textdomain' ),
        'edit_item'             => __( 'Editer la traduction', 'textdomain' ),
        'view_item'             => __( 'Voir la traduction', 'textdomain' ),
        'all_items'             => __( 'Tout le lexique', 'textdomain' ),
        'search_items'          => __( 'Rechercher des traductions', 'textdomain' ),
        'archives'              => _x( 'Archives des traductions', 'The post type archive label used in nav menus', 'textdomain' ),
    ); 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'lexique' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => array( 'title', 'editor'),
    ); 
    register_post_type( 'lexique', $args );
} 
function cpt_espace_membres_init() {
    $labels = array(
        'name'                  => _x( 'Espace Membres', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Tuto', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Espace Membres', 'Admin Menu text', 'textdomain' ),
        'add_new'               => __( 'Ajouter un tutoriel', 'textdomain' ),
        'add_new_item'          => __( 'Ajouter un nouveau tuto', 'textdomain' ),
        'new_item'              => __( 'Nouveau tuto', 'textdomain' ),
        'edit_item'             => __( 'Editer le tutoriel', 'textdomain' ),
        'view_item'             => __( 'Voir le tutoriel', 'textdomain' ),
        'all_items'             => __( 'Tous les tutos', 'textdomain' ),
        'search_items'          => __( 'Rechercher des tutos', 'textdomain' ),
        'archives'              => _x( 'Archives des tutos', 'The post type archive label used in nav menus', 'textdomain' ),
    ); 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'espace-membres' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-admin-network',
        'supports'           => array( 'title', 'editor', 'thumbnail','excerpt'),
        'show_in_rest'      => true, // pour activer guthenberg
        'hierarchical'      => true, // 
    ); 
register_post_type( 'espace-membres', $args );
}    
function create_tutos_tax() {
    $labels = array(
        'name'              => _x( 'Catégories de tutos', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Catégorie de tutos', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Chercher une catégorie', 'textdomain' ),
        'all_items'         => __( 'Toutes les catégories', 'textdomain' ),
        'view_item'         => __( 'Voir la catégorie', 'textdomain' ),
        'edit_item'         => __( 'Editer la catégorie', 'textdomain' ),
        'update_item'       => __( 'Mettre à jour la catégorie', 'textdomain' ),
        'add_new_item'      => __( 'Ajouter une nouvelle catégorie', 'textdomain' ),
        'new_item_name'     => __( 'Nouvelle catégorie', 'textdomain' ),
        'back_to_items'     => __( 'Retour aux catégories de tutos', 'textdomain' ),
        'menu_name'         => __( 'Catégories', 'textdomain' ),
    ); 
    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'sort'              => true,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categorie-tutos' ),
        'show_in_rest'      => true,
        'rest_base'         => 'categories-tutos',
    );
    register_taxonomy('categorie-tutos','espace-membres',$args);
}

/*** BOUTONS DE PARTAGE RESEAUX SOCIAUX ***/
function my_sharing_buttons($content) {
    if(is_single() && get_post_type() == 'realisation' || in_category('non-classe')){
        // Récuperer URL et titre page en cours 
        $myCurrentURL = urlencode(get_permalink());
        $myCurrentTitle = urlencode(get_field('titre_article'));      
        // Construction des URL de partage (image mise en avant en JPG) 
        $facebookURL = esc_url( 'https://www.facebook.com/sharer/sharer.php?u='.$myCurrentURL );
        $linkedInURL = esc_url( 'https://www.linkedin.com/shareArticle?mini=true&url='.$myCurrentURL );
        $email_share = esc_url( 'mailto:?subject='.$myCurrentTitle.'&BODY=Voici un article intéressant sur "'.$myCurrentTitle.'". En savoir plus : '.$myCurrentURL) ;
        // Ajout des bouton en bas des articles et des pages
        $content .= '<div class="text-end date-article pt-0 py-sm-3 text-prune-extra-dark">publié le '.get_the_date().'</div>';
        $content .= '<div class="partage-reseaux-sociaux  d-flex align-items-center justify-content-end">';
        $content .= __('<span class="fw-bold me-2 partagez">Partagez  : </span>');
        $content .= '<a class="share-facebook me-2" href="'.$facebookURL.'&t='.$myCurrentTitle.'" target="_blank" rel="noopener"><i class="fab fa-facebook"></i></a>';
        $content .= '<a class="share-linkedin me-2" href="'.$linkedInURL.'" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i></a>';
        $content .= '<a class="share-email" href="'.$email_share.'" target="_blank" rel="noopener"><i class="fas fa-envelope"></i></a>';
        $content .= '</div>';
        }
        return $content;
}
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

function add_custom_shortcode(){
    // shortcode private
    function private_content( $atts, $content ) {
        if ( is_user_logged_in() ) {
            return $content;
        } else {
            return '<a href="' . wp_login_url( get_permalink() ) . '">Merci de vous connecter pour lire ce contenu.</a>';
	}}
    //shortcode : afficher url
    function display_url_user($userUrl){
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
    function services_akaleya_archives($atts){
            extract(shortcode_atts(array(
                'type' => 'service',
                'perpage' => 9
            ), $atts));
            $output = '';
            $loop_services = new WP_Query(array('post_type' => 'service', 'order' => 'ASC','posts_per_page' => '9','post_parent'=> 0));
            while ($loop_services->have_posts()) : $loop_services->the_post();
            $output .= '<div class="col-12 col-md-6 col-lg-4 service py-5">
            <div class="bg-prune-dark card-body"> <div class="title">';                          
            $image = get_field('icone');
                if( !empty( $image ) ):
                    $output .= '<img src="'. esc_url($image['url']) .'" width="150" height="125" alt="'.  esc_attr($image['alt']) .'" class="d-block mx-auto"/>';
                endif; 
                $output .= '<h3 class="text-center mb-3 pb-0">'.get_the_title().'</h3>';
                $output .= '</div>';
                $output .= get_field('resume_service');
                $output .= '<a href='. esc_url(get_permalink()).' class="savoir-plus font-size-24" title="en savoir plus...">+</a>' ;         
                $output .= '<div class="clear"></div>';
                $output .= '</div></div>';
            endwhile;
            wp_reset_query();          
            return $output;        
    }
    add_shortcode( 'private-content', 'private_content' );
    add_shortcode( 'website_user', 'display_url_user' );
    add_shortcode( 'dashboard_user', 'display_dashboard_user' );
    add_shortcode( 'services_block', 'services_akaleya_archives');
}
//pagination
function post_pagination(){
    switch(get_post_type()){
        case 'post':?>
            <div class='d-none d-sm-flex justify-content-between'>
                <div>
                    <?php next_post_link('%link', '&lsaquo; %title',true); ?>
                </div>
                <div>
                    <?php previous_post_link('%link',  '%title &rsaquo;', true); ?>
                </div>
            </div>
            <div class='d-flex d-sm-none justify-content-between'>
                <div>
                    <?php next_post_link('%link', '&lsaquo; Précédent',true); ?>
                </div>
                <div>
                    <?php previous_post_link('%link', 'Suivant &rsaquo;',true); ?>
                </div>
            </div><?php            
            break;
        case 'espace-membres':?>
                <div class='d-none d-sm-flex justify-content-between'><div>
                        <?php previous_post_link('%link', '&lsaquo; %title', true, ' ', 'categorie-tutos'); ?>
                    </div>
                    <div>
                        <?php next_post_link('%link', '%title &rsaquo;',true, ' ', 'categorie-tutos'); ?>
                    </div>
                </div>
                <div class='d-flex d-sm-none justify-content-between'>
                    <div>
                        <?php previous_post_link('%link', '&lsaquo; Précédent',true, ' ', 'categorie-tutos'); ?>
                    </div>
                    <div>
                        <?php next_post_link('%link', 'Suivant &rsaquo;',true, ' ', 'categorie-tutos'); ?>
                    </div>
                </div><?php
            break;   
            case 'realisation':?>
                <div class='d-none d-sm-flex justify-content-between'>
                    <div>
                        <?php next_post_link('%link', '&lsaquo; %title',true, ' ', 'type'); ?>
                    </div>
                    <div>
                        <?php previous_post_link('%link', '%title &rsaquo;', true, ' ', 'type'); ?>
                    </div>
                </div>
                <div class='d-flex d-sm-none justify-content-between'>
                    <div>
                        <?php next_post_link('%link', '&lsaquo; Précédent',true, ' ', 'type'); ?>
                    </div>
                    <div>
                        <?php previous_post_link('%link', 'Suivant &rsaquo;',true, ' ', 'type'); ?>

                    </div>
                </div><?php
            break;    
    }
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


