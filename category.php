<?php /*Template Name: Akaleya Post category*/
get_template_part('template-parts/header/head', 'meta');
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id='category'>
    <div class='container'>
        <div class='row py-5'>
            <?php get_template_part('template-parts/content/loop', 'post'); ?>                
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>