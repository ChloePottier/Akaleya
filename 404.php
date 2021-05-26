<?php /* Template Name: Page 404 Akaleya */ ?>

<?php get_template_part('template-parts/header/head', 'metadata'); ?>

<body id="top" class="h-75">
    <div class="container-fluid nav-top bg-white" >
        <?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
        <?php  get_template_part('template-parts/navigation/navigation','burger');?>
    </div>
    <section class="container-fluid page-404" id="404">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 d-flex justify-content-center align-items-center my-5">
                    <p class="text-prune font-size-24">Désolé, cette page n'existe pas<br />
                Merci de retourner en <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link text-underline">page accueil</a></p>
                  
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
