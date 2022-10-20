<?php /*Template Name: Akaleya Index*/
get_template_part('template-parts/header/head', 'meta');
get_template_part('template-parts/header/header', 'page'); ?>
<section class='container-fluid content' id='realisation'>
    <div class='container'>
        <div class='row py-5'>
            <div class='col-12'>
                <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                } ?>
            </div>
            <div class='col-12 pb-5'>
                <h1 class='text-center'>Quelques réalisations</h1>
            </div>
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content/content', 'portfolio-img');
                endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</footer>

</html>