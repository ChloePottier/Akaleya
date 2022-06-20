<?php /* Template Name: Modèle des archives Réalisations */ ?>

<?php get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page'); ?>

<section id='archive-portfolio' class='container-fluid'>
    <div class='container py-5'>
        <div class='row '>
            <div class='col-12 pt-5 pb-3'>
                <h1 class='text-center'>Quelques réalisations</h1>
            </div>
        </div>
            <div class='row mt-2' id='archives-web'>
                <div class='col-12 mb-4'>
                    <h2 class='bg-prune-dark text-white ps-2 pt-1'>Les réalisations web</h2>
                </div>
                <?php $loop = new WP_Query(array(
                    'post_type' => 'realisation',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'type',
                            'field'    => 'slug',
                            'terms'    => 'web',
                        )),
                    'orderby' => 'meta_value_num',  'meta_key'  => 'ordre_publication', 'order'   => 'ASC',
                ));
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        get_template_part('template-parts/content/content', 'portfolio-img');
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Désolés, nous n\'avons pas trouvé de réalisations web</p>';
                endif; ?>
            </div>
            <div class='row my-5' id='archives-print'>
                <div class='col-12 mb-4 '>
                    <h2 class='bg-prune-dark text-white ps-2 pt-1'>Les réalisations print</h2>
                </div>
                <?php $loop = new WP_Query(array(
                    'post_type' => 'realisation',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'type',
                            'field'    => 'slug',
                            'terms'    => 'graphisme',
                        )),
                    'orderby' => 'meta_value_num',  'meta_key'  => 'ordre_publication', 'order'   => 'ASC',
                ));
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post();
                        get_template_part('template-parts/content/content', 'portfolio-img');
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Désolés, nous n\'avons pas trouvé de réalisations web</p>';
                endif; ?> </div>
        </div>
</section>

<?php get_footer(); ?>
</html>