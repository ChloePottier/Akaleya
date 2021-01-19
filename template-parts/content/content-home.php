<scroll-page id="section-presentation">
    <section id="presentation" class="container-fluid">
        <div class="container ">
            <div class="row py-5 d-flex align-items-end bg-guitare">
                <div class="col-md-2 d-none d-md-flex"></div>
                <div class="col-12 col-md-10 text-center pt-5 pb-5">
                    <h2 class="text-prune-dark pb-2 font-size-56">Une solution <br />adaptée à vos besoins <br />print et web</h2>
                    <?php $loop = new WP_Query(array('post_type' => 'presentation', 'post_status' => 'publish'));
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="text-prune font-size-18"><?php the_content(); ?></div>
                    <?php endwhile;
                    else :
                        echo 'Page introuvable';
                    endif; ?>
                </div>
            </div>
        </div>
    </section>
</scroll-page>
<scroll-page id="section-services">
    <!-- <svg version="1.0" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="138.102px" viewBox="0 0 1024 138.102" enable-background="new 0 0 1024 138.102" xml:space="preserve">
                <image display="none" overflow="visible" xlink:href="3A4FFA47.jpg" transform="matrix(0.9999 0 0 0.9999 -391.5 17.5)">
                </image>
                <polygon fill="#000" points="1024,138.102 0,51.107 0,0 1024,0 " />
            </svg> -->

    <section id="services" class="container-fluid bg-prune-dark text-white">
        <div class="container">
            <!-- bg en diagonal voir tete de com-->
            <div class="row py-5 d-flex justify-content-md-center justify-content-lg-start">
                <div class="col-12 text-center pt-5 pb-3">
                    <h2 class=" pb-3 font-size-56">Les services proposés</h2>
                </div>
                <?php get_template_part('template-parts/content/content', 'services'); ?>
            </div>
        </div>
    </section>
</scroll-page>
<scroll-page id="section-portfolio">

    <section id="portfolio" class="container-fluid">
        <div class="container py-5">
            <div class="row ">
                <div class="col-12 pt-5 pb-3">
                    <h2 class="text-center font-size-56 text-prune-dark">Quelques réalisations</h2>
                </div>
                <div class="col-12" id="nav-portfolio">
                    <ul class="pl-0 mb-2 d-flex flex-row justify-content-center justify-content-md-end font-family-bebas font-size-21 pb-3 pb-lg-0">
                        <li class="pr-3"><a onclick="loadAll()">tous</a></li>
                        <li class="pr-3"><a onclick="loadWeb()">web</a></li>
                        <li><a onclick="loadPrint()">graphisme</a></li>
                    </ul>
                </div>
            </div>

            <div class="row" id="content-portfolio">
                <?php get_template_part('template-parts/content/content', 'portfolio'); ?>
            </div>
        </div>
    </section>
</scroll-page>
<scroll-page id="section-contact">

    <section class="container-fluid bg-contact" id="contact">
        <div class="container">
            <div class="row py-5">
                <?php if (is_page(83) OR is_page( 'contact' )) : ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-12 col-md-6">
                                <h2 class="text-prune-dark pt-0 pt-sm-5">Contactez Akaleya</h2>
                                <p class="text-prune-dark">Pour toute demande de renseignement, devis, ...</p>
                                <?php the_content(); ?>
                                </div>
                        <?php endwhile;
                        endif;
                    endif;   ?>
                            <div class="col-12 col-md-6 d-flex justify-content-center flex-column pt-2 pt-md-0">
                                <!-- retrouvez moi -->
                                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/Akaleya-logo.svg" alt="Akaleya - web and print logo" title="Akaleya - création graphique et web - Jura" width="289" height="289" class="mx-auto" />
                                <p class="font-family-bebas text-prune-dark font-size-31 line-height text-center pt-5">
                                    Retrouvez-moi<br />aussi sur :</p>
                                <div class="d-flex flex-row justify-content-center" id="link-rs">
                                    <?php $loop = new WP_Query(array('post_type' => 'liens',  'order'   => 'ASC'));
                                    if ($loop->have_posts()) :
                                        while ($loop->have_posts()) : $loop->the_post(); ?>

                                            <a href="<?php the_field('url_profil'); ?>" target="_blank" class="font-size-58 w-66px d-flex mr-4"><?php the_field('icone'); ?></a>

                                    <?php endwhile;
                                    endif; ?>

                                </div>
                            </div>
            </div>
        </div>
    </section>

</scroll-page>