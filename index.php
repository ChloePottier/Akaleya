<?php /*Template Name: AkaleyaAccueil*/?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php include 'template-parts/header/metadata.php'; ?>

<body id="top">
    <!-- <div id="btnScrollToTop"><img src="img/scrollToTop.png" width="50px" height="50px" alt="scroll to top"/></div> 
a continuer : https://www.w3schools.com/howto/howto_js_scroll_to_top.asp -->

    <?php get_header(); 
    ?>
    <?php get_template_part('template-parts/content/content','home'); ?>
    <?php get_footer(); ?>
</body>
</html>