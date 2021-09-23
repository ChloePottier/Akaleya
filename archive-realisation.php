<?php /* Template Name: Modèle de page Réalisations */ ?>

<?php get_template_part('template-parts/header/head', 'metadata');
get_template_part('template-parts/header/header', 'page');
get_template_part('template-parts/content/content', 'gallery');
get_footer(); ?>
    <script  src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/akaleya-theme/assets/js/gallery.js" async defer></script> 
    </html>