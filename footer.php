<footer class='container-fluid bg-prune-dark sub-footer'>
    <div class='container'>

        <div class='row py-3'>
                <div class='col-12 col-md-4 fs-2 nav-footer order-md-last'><!--Réseaux sociaux-->
                    <div class='d-flex flex-row justify-content-center justify-content-md-end ' id='link-rs-footer'>
                        <?php $loop = new WP_Query(array('post_type' => 'liens',  'order'   => 'ASC'));
                        if ($loop->have_posts()) :
                            while ($loop->have_posts()) : $loop->the_post(); ?>
                                <a href='<?php the_field("url_profil"); ?>' target='_blank' class='d-flex'>
                                    <?php the_field('icone'); ?>
                                </a>
                        <?php endwhile;
                        endif;
                        wp_reset_query(); ?>
                    </div>
                </div>
                <div class='col-12 col-md-4 text-blue font-size-13 mb-3 mb-lg-0'><!--Menu pages légales-->
                    <?php include 'template-parts/navigation/navigation-footer-legalnotice.php';?>
                </div>
                <div class='col-12 col-md-4 text-center text-white font-size-13' id='copyrightinfo' >
                <p class='mb-0 pb-0'>Site éco-conçus par <a href='https://akaleya.fr' class='font-weight-bold' id='copy-akaleya' title='Akaleya, Web & Print'>Akaleya</a> - Copyright © 2021</p>
                <p>Petite Montage - Jura - Ain - Saône et Loire</p>
                </div>

                
            </div>
    </div>
    <?php wp_footer(); ?>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/navigation/burger.js' async defer></script>
    <script src='<?php echo get_template_directory_uri(); ?>/assets/js/navigation/nav-fixed.js' async defer></script>


