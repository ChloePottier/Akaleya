<?php /*Template Name: Akaleya Archives Service*/
get_template_part('template-parts/header/head', 'meta-google');
get_template_part('template-parts/header/header', 'page'); ?>
<section class='container-fluid content' id='all-services'>
    <div class='container'>
        <div class='row py-5'>
            <h1 class='col-12'>Les services proposés</h1>
        </div>
        <div class='row py-3 mb-5 text-white'>
            <?php get_template_part('template-parts/content/content' , 'services') ?>
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>