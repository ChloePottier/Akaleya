<?php /* Template Name: Page Single Réalisation Akaleya */ ?>
<?php
get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page');
if (have_posts()) :
    while (have_posts()) : the_post();
        $urlRea = get_field('url_realisation');
        $image = get_field('image_realisation'); ?>
        <section class='container-fluid content' <?php post_class(); ?> id='post-lexique-<?php the_ID(); ?>' >
            <div class='container py-5'>
                <div class='row'>
                    <div class='col-12'>
                        <?php if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        } ?>
                    </div>
                </div>
                <div class='row'>
                    <h1 class='text-prune-dark'><?php the_title(); ?></h1>
                    <div class='col-12'>
                   <?php the_content(); ?>
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