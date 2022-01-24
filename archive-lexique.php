<?php /* Template Name: Modèle des archives Lexique */ 
get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id='archive-lexique'>
    <div class='container pb-5'>
        <div class='row py-5'>
            <div class='col-12'><h1 class='text-prune-dark'>Glossaire du language web</h1></div>
        </div>
        <?php $loop = new WP_Query( array('post_type'  => 'lexique', 'post_status' => 'publish', 'order' => 'ASC' , 'orderby' => 'title','nopaging' => true) );
        if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class='row border-bottom py-3' id='<?php the_ID(); ?>'>
                    <div class='col-12 col-sm-3 text-prune-dark font-weight-bold '><?php the_title();?></div>
                    <div class='col-12 col-sm-9 '><?php the_content();?></div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>
</html>