<?php /* Template Name: Modèle de page Akaleya */ 
get_template_part('template-parts/header/head', 'meta');?>
<meta property=" og:image " content='<?php echo get_template_directory_uri(); ?>/images/akaleya-header.jpg'/>
<?php get_template_part('template-parts/header/header', 'page');
if(!is_page('services')):?>
<section class='container-fluid content content-page' id='page-<?php the_ID(); ?>'>
<?php else : ?>
    <section class='container-fluid content content-services' id='all-services'>
<?php endif; ?>
    <div class='container'>
        <div class='row py-5'>
            <?php if (have_posts()) :
                    while (have_posts()) : the_post(); 
                    if(!is_page('services')):?>
                    <div class='col-12'>
                        <h1 class='pt-0 pt-sm-5'><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                    <?php else : ?>
                        <div class='col-12' >
                            <h1 class='pt-0 pt-sm-5'><?php the_title(); ?></h1>
                        </div>
                        <?php echo do_shortcode('[services_block]'); ?>
                        <div class='col-12'>

                        <?php the_content(); ?>
                    </div>
                <?php endif;
                    endwhile;
                endif; 
                wp_reset_postdata();?>                
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>