<scroll-page id='section-presentation'>
    <section id='presentation' class='container-fluid'>
        <div class='container '>
            <div class='row py-5 d-flex align-items-end bg-guitare'>
                <div class='col-md-2 d-none d-md-flex'></div>
                <div class='col-12 col-md-10 text-center pt-5 pb-5'>
                    <h2 class='text-prune-dark pb-2 font-size-56 pb-5'><span class='text-prune font-size-36'>Une</span> solution <span class='text-prune font-size-36'>adaptée<br />à vos </span>besoins <br /></h2>
                    <?php $loop = new WP_Query(array('post_type' => 'presentation', 'post_status' => 'publish'));
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class='text-prune font-size-18'><?php the_content(); ?></div>
                    <?php endwhile;
                     wp_reset_postdata();
                    else :
                        echo 'Page introuvable';
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
</scroll-page>
<scroll-page id='section-services'>
    <div class='container-fluid p-0 m-0 container-diagonale'>
        <img src='https://akaleya.fr/wp-content/uploads/2021/01/diagonale1.svg' width='1900' height='190' alt='background diagonale akaleya' />
    </div>
    <section id='services' class='container-fluid bg-prune-dark text-white'>
        <div class='container'>
            <div class='row  d-flex justify-content-md-center justify-content-lg-start'>
                <div class='col-12 text-center pb-3'>
                    <h2 class='text-white pb-3 font-size-56'>Les services proposés</h2>
                </div>
                <?php echo do_shortcode('[services_block]'); ?>
            </div>
        </div>
    </section>
    <div class='container-fluid p-0 m-0 container-diagonale'>
        <img src='https://akaleya.fr/wp-content/uploads/2021/01/diagonale2.svg' width='1900' height='190'  alt='background diagonale akaleya' />
    </div>
</scroll-page>
<scroll-page id='section-portfolio'>
  <?php get_template_part('template-parts/content/content', 'gallery'); ?>
</scroll-page>

<scroll-page id='section-contact'>
    <div class='container mb-5'>
        <div class='row bg-prune-medium text-white py-5 text-center'>
            <h2 class='col-12 text-white mb-2'>Un projet graphique ou web ?</h2>
            <p class='col-12 mb-3 text-blue'>
                La réalisation de chaque nouveau projet passe par ces 4 étapes :
            </p>
            <div class='col-12 col-sm-6 col-lg-3 d-flex flex-column'>
                <!-- <span class='contact-order mb-3'>1</span> -->
                <img src='<?php echo get_template_directory_uri(); ?>/images/icons8-contact-BL.png' width='100' height='100' class='img-zone-contact'/>
                <p>Description du projet par mail</p>

            </div>
            <div class='col-12 col-sm-6 col-lg-3 d-flex flex-column'>
                <!-- <span class='contact-order mb-3'>2</span> -->
                <img src='<?php echo get_template_directory_uri(); ?>/images/icons8-communication-BL.png' width='100' height='100' class='img-zone-contact'/>

                <p>Discutons un peu de votre projet</p>

            </div>
            <div class='col-12 col-sm-6 col-lg-3 d-flex flex-column'>
                <!-- <span class='contact-order mb-3'>3</span>-->
                <img src='<?php echo get_template_directory_uri(); ?>/images/devis.png' width='100' height='100' class='img-zone-contact'/>
                <p>Réalisation du devis sur-mesure</p>

            </div>
            <div class='col-12 col-sm-6 col-lg-3 d-flex flex-column'>
                <!-- <span class='contact-order mb-3'>4</span> -->
                <img src='<?php echo get_template_directory_uri(); ?>/images/wacom-tablet-BL.png' width='100' height='100' class='img-zone-contact'/>
                <p>Maquettage et conception du projet</p>
            </div>
            <div class='col-12 pt-3'>
                <a href='https://akaleya.fr/contactez-nous/' class='bouton btn-blue'>Contactez-nous</a>
            </div>
        </div>
    </div>
</scroll-page>
