<?php /* Template Name: Page Single Réalisation Akaleya */ ?>
<?php
get_template_part('template-parts/header/head', 'metadata');
get_template_part('template-parts/header/header', 'page'); ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post();
        $url = get_field('url_realisation');
        $image = get_field('image_realisation'); ?>
        <section class="container-fluid content" <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        } ?>
                    </div>
                    <div class="col-12">
                        <h3 class="pt-3 text-prune-dark"><?php the_title(); ?></h3>
                        <div class="text-prune"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif;
wp_reset_postdata();
wp_reset_query(); ?>
</body>
<?php get_footer(); ?>