<?php /*Template Name: Akaleya Index*/
get_template_part('template-parts/header/head', 'meta');?>
    <meta property=" og:image " content='<?php echo get_template_directory_uri(); ?>/images/akaleya-header.jpg'/>
<?php get_template_part('template-parts/header/header', 'page'); ?>
<section class='container-fluid content' id='index'>
    <div class='container'>
        <div class='row py-5'>
            <?php get_template_part('template-parts/content/loop/loop', 'template-file-post'); ?>  
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>