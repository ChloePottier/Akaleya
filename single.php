<?php /* Template Name: Modèle d'article Akaleya */
get_template_part('template-parts/header/head', 'metadata');
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id='post-<?php the_ID(); ?>'>
<div class='container'>
    <div class='row py-5'>
        <div class='col-12'>
            <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                } ?>
        </div> 
        <?php if (have_posts()) :
                    while (have_posts()) : the_post(); 
                        $categoryPost = get_the_category();
                        if(!is_user_logged_in()):
                            if($categoryPost[0]->slug == 'non-classe'):?>
                                <div class='col-12' id='content-post'> 
                                    <h1 class='text-prune-dark'><?php the_title(); ?></h1>
                                    <?php the_content();?>
                                </div>
                            <?php else:?>
                                <div class='col-12 col-md-6 mx-auto'> 
                                    <h1 class='text-prune-dark pt-0 pt-sm-5'><?php the_title(); ?></h1>
                                    <?php get_template_part('template-parts/content/content','form-connection' );?>
                                </div>
                            <?php endif;
                        else:?>
                            <div class='col-12 pb-5' id='content-post'> 
                                <h1 class='text-prune-dark'><?php the_title(); ?></h1>
                                <?php the_content();?>
                            </div>                            
                         <?php endif;?>
                         <div class='col-12'> 
                            <?php do_action('akaleya_pagination'); //uniquement pour les user connectés?>
                        </div> 
                    <?php endwhile;
            endif; ?>
    </div>

</div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>