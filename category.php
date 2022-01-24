<?php /* Template Name: Catégorie d'articles Akaleya */
get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page');?>
<scroll-page id='category'>
    <section class='container-fluid content' id='category-post-<?php the_ID(); ?>'>
        <div class='container'>
            <div class='row py-5'>
            <div class='col-12'>
                <?php if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                    } ?>
            </div>
                    <?php if(!is_user_logged_in() && is_category('non-classe') OR is_user_logged_in()):?>
                        <div class='col-12'>
                            <h1 class='text-prune-dark pt-0 pt-sm-5'><?php single_cat_title(); ?></h1>
                            <ul class='liste-articles mb-5' itemscope itemtype='https://schema.org/BreadcrumbList'>
                        <?php if (have_posts()) :
                            while (have_posts()) :  the_post();?>
                                    <li class='text-prune-dark py-2 bold border-bottom' itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                                        <a class='tutos-items' href='<?php echo esc_url(get_permalink($post->ID)); ?>' itemprop='name'><?php the_title(); ?></a>
                                    </li>
                            <?php endwhile;
                        wp_reset_postdata();
                        endif;
                        echo'</ul></div>';
                    else:?>
                        <div class='col-12 col-md-6 mx-auto'>
                            <h1 class='text-prune-dark pt-0 pt-sm-5'><?php single_cat_title(); ?></h1>
                            <?php get_template_part('template-parts/content/content','form-connection' ); ?>
                        </div>
                    <?php endif; ?>
            </div>
        </div>
    </section>
</scroll-page>
</body>
<?php get_footer(); ?>
</footer>

</html>