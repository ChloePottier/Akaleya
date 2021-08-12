<?php /*Template Name: AkaleyaAccueil*/?>

<?php get_template_part('template-parts/header/head','metadata'); ?>

    <!-- <div id="btnScrollToTop"><img src="img/scrollToTop.png" width="50px" height="50px" alt="scroll to top"/></div> 
a continuer : https://www.w3schools.com/howto/howto_js_scroll_to_top.asp -->

    <?php get_header(); 
    get_template_part('template-parts/content/content','home');
    get_footer(); ?>
    <!-- <script  src="<?php// echo esc_url( home_url( '/' ) ); ?>wp-content/themes/akaleya-theme/assets/js/navigation/load-portfolio.js" async defer></script>  -->
    <script  src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/akaleya-theme/assets/js/slider-header.js" async defer></script>
</html>