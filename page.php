<?php /* Template Name: Modèle de page Akaleya */ 
get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id='page-'>
    <div class='container'>
        <div class='row py-5'>
            <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                    <div class='col-12 '>
                        <h1 class='text-prune-dark pt-0 pt-sm-5'><?php the_title(); ?></h1>
                        <?php the_content(); ?>
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