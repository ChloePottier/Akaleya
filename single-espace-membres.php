<?php /* Template Name: Modèle d'article Akaleya */
get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id='private-tuto-<?php the_ID(); ?>'>
<div class='container'>
    <?php if (! is_user_logged_in()) :?>
        <div class='row'>
            <div class='col-12 col-md-6 mx-auto'>
                <?php get_template_part('template-parts/content/content','private' );?>
            </div>
        </div>
    <?php else :?>
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
                            <h1 class='text-prune-dark pt-0 pt-sm-5'><?php the_title(); ?></h1>
                            <?php the_content();?>
                            <?php if (!empty($urlRea)) : ?>
                                <div><a class='btn-url font-family-bebas font-size-21' href='<?php the_field('url_realisation');?>' target='_blank'>Voir le site</a></div>
                            <?php endif;?>
                        </div>
                        <div class='col-12 font-weight-bold'>
                            <?php do_action('akaleya_pagination');?>
                        </div>
                    <?php endwhile;
            endif; 
            wp_reset_postdata();
            wp_reset_query();
        endif;?>
    </div>
</div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>