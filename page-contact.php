
<?php /* Template Name: Page Contact Akaleya */ ?>
<?php
get_template_part('template-parts/header/head', 'metadata');
get_header(); ?>
    <section class="container-fluid bg-contact" id="contact">
        <div class="container">
            <div class="row py-5">
                <?php if (is_page('contact')) : ?>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-12 col-md-6">
                                <h2 class="text-prune-dark pt-0 pt-sm-5">Contactez Akaleya</h2>
                                <p class="text-prune-dark">Pour toute demande de renseignement, devis, ...</p>
                                <?php the_content(); ?>
                            </div>
                <?php endwhile;
                    
                    else:
                        echo 'Désolé, cette page n\'existe pas';
            endif;
                endif;   ?>

                <div class="col-12 col-md-6 d-flex justify-content-center flex-column pt-2 pt-md-0">
                    <!-- retrouvez moi -->

                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/Akaleya-logo.svg" alt="Akaleya - web and print logo" title="Akaleya - création graphique et web - Jura" width="289" height="289" class="mx-auto" />
                    <p class="font-family-bebas text-prune-dark font-size-31 line-height text-center pt-5">
                        Retrouvez-moi<br />aussi sur :</p>
                    <div class="d-flex flex-row justify-content-center font-size-58 " id="link-rs">
                        <?php $loop = new WP_Query(array('post_type' => 'liens',  'order'   => 'ASC'));
                        if ($loop->have_posts()) :
                            while ($loop->have_posts()) : $loop->the_post(); ?>

                                <a href="<?php the_field('url_profil'); ?>" target="_blank" class="w-66px d-flex mr-4"><?php the_field('icone'); ?></a>

                        <?php endwhile;
                        endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php get_footer(); ?>