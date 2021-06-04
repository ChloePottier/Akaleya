<scroll-page id="section-presentation">
    <section id="presentation" class="container-fluid">
        <div class="container ">
            <div class="row py-5 d-flex align-items-end bg-guitare">
                <div class="col-md-2 d-none d-md-flex"></div>
                <div class="col-12 col-md-10 text-center pt-5 pb-5">
                    <h2 class="text-prune-dark pb-2 font-size-56 pb-5"><span class="text-prune font-size-36">Une</span> solution <span class="text-prune font-size-36">adaptée<br />à vos </span>besoins <br /></h2>
                    <?php $loop = new WP_Query(array('post_type' => 'presentation', 'post_status' => 'publish'));
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="text-prune font-size-18"><?php the_content(); ?></div>
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
<scroll-page id="section-services">
    <div class="container-fluid p-0 container-diagonale">
        <img src="https://akaleya.fr/wp-content/uploads/2021/01/diagonale1.svg" width="1900" height="190" alt="background diagonale akaleya" />
    </div>
    <section id="services" class="container-fluid bg-prune-dark text-white">
        <div class="container">
            <div class="row  d-flex justify-content-md-center justify-content-lg-start">
                <div class="col-12 text-center pb-3">
                    <h2 class=" pb-3 font-size-56">Les services proposés</h2>
                </div>
                <?php get_template_part('template-parts/content/content', 'services'); ?>
            </div>
        </div>
    </section>
    <div class="container-fluid p-0 container-diagonale">
        <img src="https://akaleya.fr/wp-content/uploads/2021/01/diagonale2.svg" width="1900" height="190"  alt="background diagonale akaleya" />
    </div>
</scroll-page>
<scroll-page id="section-portfolio">
  <?php get_template_part('template-parts/content/content', 'gallery'); ?>
</scroll-page>
<scroll-page id="section-contact">
    <section class="container-fluid bg-contact" id="contact">
        <div class="container">
            <div class="row py-5">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-12 col-md-6 contact">
                            <h2 class="text-prune-dark pt-0 pt-sm-5">Contactez Akaleya</h2>
                            <p class="text-prune-dark">Pour toute demande de renseignement, devis, ...</p>
                            <p class="contact-print">n'hésitez pas à nous contacter par mail : contact@akaleya.fr</p>
                            <?php the_content(); ?>
                        </div>
                <?php endwhile;
                endif; ?>
                <div class="col-12 col-md-6 d-flex justify-content-center flex-column pt-2 pt-md-0">
                    <!-- retrouvez moi -->
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/Akaleya-logo.svg" alt="Akaleya - web and print logo" title="Akaleya - création graphique et web - Jura" width="289" height="289" class="mx-auto" />
                    <p class="font-family-bebas text-prune-dark font-size-31 line-height text-center pt-5">
                        Retrouvez-nous<br />aussi sur :</p>
                    <div class="d-flex flex-row justify-content-center" id="link-rs">
                        <?php $loop = new WP_Query(array('post_type' => 'liens',  'order'   => 'ASC'));
                        if ($loop->have_posts()) :
                            while ($loop->have_posts()) : $loop->the_post(); ?>
                                <a href="<?php the_field('url_profil'); ?>" target="_blank" class="font-size-58 w-66px d-flex mx-2"><?php the_field('icone'); ?></a>
                        <?php endwhile;
                        wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</scroll-page>