<?php /* Template Name: Modèle de tutos Akaleya */
get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id='tuto-<?php the_ID(); ?>'>
<div class='container'>
    <div class='row py-5'>
        <div class='col-12'>
            <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                } ?>
        </div> 
        <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                                <div class='col-12 pb-5' id='content-espace-membres'> 
                                    <h1 class='text-prune-dark pt-0 pt-sm-5'><?php the_title(); ?></h1>
                                    <?php the_content();?>
                                </div>
                                <div class='col-12 font-weight-bold'>
                                <?php previous_post_link('%link', '%title', true, ' ','categorie-tutos');
                                next_post_link('%link', '%title', true, ' ', 'categorie-tutos'); ?>

                                </div>
                    <?php endwhile;
            endif; 
        wp_reset_postdata();
        wp_reset_query();?>
    </div>

</div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>