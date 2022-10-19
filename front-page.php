<?php /*Template Name: AkaleyaAccueil*/?>

<?php get_template_part('template-parts/header/head','meta');?>
    <meta property=" og:image " content='<?php echo get_template_directory_uri(); ?>/images/akaleya-header.jpg'/>
    <?php get_header(); 
    get_template_part('template-parts/content/content','home');
?>

    
    <?php get_footer(); ?>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/navigation/nav-fixed.js' async defer></script>
    <script  src='<?php echo get_template_directory_uri(); ?>/assets/js/slider-header.js' async defer></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/gallery.js' async defer></script>
</footer>
</html>