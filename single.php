<?php /* Template Name: Modèle d'article Akaleya */
get_template_part('template-parts/header/head', 'meta');
get_template_part('template-parts/header/header', 'page');?>
<article class='container-fluid content' id='post-<?php the_ID(); ?>'>
<div class='container'>
    <div class='row py-5'>
        <div class='col-12'>
            <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                } ?>
        </div> 
        <?php if (have_posts()) :
                    while (have_posts()) : the_post();
                        $urlRea = get_field('url_realisation'); ?>
                        <div class='col-12 pb-5' id='content-post'> 
                            <div class='d-flex flex-row justify-content-between'>
                                <h1 class='pt-0 pt-sm-5'><?php the_title(); ?></h1>
                            </div>
                            <?php the_content();?>
                            <?php if (!empty($urlRea)) : ?>
                                <div><a class='bouton btn-url font-family-bebas font-size-21' href='<?php the_field('url_realisation');?>' target='_blank'>Voir le site</a></div>
                            <?php endif;?>
                        </div>
                        <!-- <div class='col-12 date-article pt-0 py-sm-3'>publié le <?php the_date(); ?></div> -->

                        <div class='col-12 fw-bold'>
                            <?php do_action('akaleya_pagination');?>
                        </div>
                    <?php endwhile;
            endif; 
            wp_reset_postdata();
            wp_reset_query();?>
    </div>
</div>
</article>
</body>
<?php get_footer(); ?>
</footer>
</html>