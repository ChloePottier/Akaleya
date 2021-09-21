<?php /*Template Name: AkaleyaAccueil*/?>

<?php get_template_part('template-parts/header/head','metadata');
    get_header(); 
    get_template_part('template-parts/content/content','home');
    get_footer(); ?>
    <script  src='<?php echo get_template_directory_uri(); ?>/assets/js/slider-header.js' async defer></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/gallery.js' async defer></script>
</footer>
</html>