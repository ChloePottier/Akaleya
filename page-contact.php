
<?php /* Template Name: Page Contact Akaleya */ ?>
<?php
get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page'); ?>
    <section class='container-fluid' id='page-contact'>
        <div class='container'>
            <div class='row py-5'>
                
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class='col-12 text-prune-dark'>
                                <h1 class='pt-0 pt-sm-5'>Contactez Akaleya - Web & Print</h1>
                                <p class=' mb-4'>Vous avez un projet graphique ou web ? Quelque soit vos envies, nous pouvons construire une solution à votre image. Contactez-nous ici pour toute demande de renseignements, de devis ou encore derendez-vous téléphonique.</p>
                                <p class='contact-print'>N'hésitez pas à nous contacter par mail : contact@akaleya.fr</p>                              
                            </div>
                            <div class='col-12 col-md-6'>
                                <?php the_content(); ?>
                            </div>

                        <?php endwhile;                    
                        else:
                            echo 'Désolé, cette page n\'existe pas';
                        endif;
                    ?>
                <div class='col-12 col-md-6 d-flex justify-content-center flex-column pt-2 pt-md-0'>
                    <img src='<?php echo get_site_url(); ?>/wp-content/uploads/2021/01/Akaleya-logo.svg' alt='Akaleya - web and print logo' title='Akaleya - création graphique et web - Jura' width='289' height='289' class='mx-auto' />
                    <p class='font-family-bebas text-prune-dark font-size-31 line-height text-center pt-5'>
                        Retrouvez-nous <br />aussi sur :</p>
                    <div class='d-flex flex-row justify-content-center font-size-58 ' id='link-rs'>
                        <?php $loop = new WP_Query(array('post_type' => 'liens',  'order'   => 'ASC'));
                        if ($loop->have_posts()) :
                            while ($loop->have_posts()) : $loop->the_post(); ?>
                                <a href='<?php the_field("url_profil"); ?>' target='_blank' class='d-flex'>
                                <?php the_field('icone'); ?>
                                </a>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php get_footer(); ?>
</footer>

</html>