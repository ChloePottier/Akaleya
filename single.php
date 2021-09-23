<?php /* Template Name: Modèle de page Akaleya */
get_template_part('template-parts/header/head', 'metadata');
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id='post-<?php the_ID(); ?>'>
    <div class='container'>
        <div class='row py-5'>
            <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
            <div class="col-12">
                <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    } ?>
            </div>
            <div class='col-12' id='content-post'>
                <h1 class='text-prune-dark pt-0 pt-sm-5'><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <?php endwhile;
                endif; ?>
        </div>
        <?php do_action('akaleya_pagination'); ?>
    </div>
    </div>
</section>
</body>
<?php get_footer(); ?>

</html>