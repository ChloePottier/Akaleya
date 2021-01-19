<?php /* Template Name: Modèle de page Akaleya */ ?>

<?php get_template_part('template-parts/header/head', 'metadata');
// get_header(); 
get_template_part('template-parts/header/header', 'page');?>
   
<scroll-page id="">

<section class="container-fluid " id="">
    <div class="container">
        <div class="row py-5">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-12 ">
                            <h1 class="text-prune-dark pt-0 pt-sm-5"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                            </div>
                    <?php endwhile;
                    endif; ?>
                
        </div>
    </div>
</section>

</scroll-page>
</body>
<?php get_footer(); ?>