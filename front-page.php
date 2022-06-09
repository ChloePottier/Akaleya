<?php /*Template Name: AkaleyaAccueil*/?>

<?php get_template_part('template-parts/header/head','meta-google');
    get_header(); 
    // get_template_part('template-parts/content/content','home');
     if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif; 
    wp_reset_postdata();  
    get_footer(); ?>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/navigation/nav-fixed.js' async defer></script>
    <script  src='<?php echo get_template_directory_uri(); ?>/assets/js/slider-header.js' async defer></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/gallery.js' async defer></script>
</footer>
</html>