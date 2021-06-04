<?php /* Template Name: Page Single Réalisation Akaleya */ ?>
<?php
get_template_part('template-parts/header/head', 'metadata');
get_template_part('template-parts/header/header', 'page'); ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post();
        $urlRea = get_field('url_realisation');
        $image = get_field('image_realisation'); ?>
        <section class="container-fluid content" <?php post_class(); ?> id="post-<?php the_ID(); ?>" >
            <div class="container py-5">
                <div class="row content-realisation">
                    <div class="col-12">
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                        } ?>
                    </div>
                    <div class="col-12 col-md-4">
                        <?php if (!empty($image)) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" class="responsive" width="350" height="256" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="col-12 col-md-8">
                        <h3 class="pt-3 pt-md-0 text-prune-dark"><?php the_title(); ?></h3>
                        <div class="text-prune text-justify"><?php the_content(); ?></div>
                        <?php if (!empty($urlRea)) : ?>
                            <div><a class="btn-url font-family-bebas font-size-21" href="<?php the_field('url_realisation');?>" target="_blank">Voir le site</a></div>
                        <?php endif;?>
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