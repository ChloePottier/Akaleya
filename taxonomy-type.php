<?php /*Template Name: Akaleya Index*/
get_template_part('template-parts/header/head', 'meta');
get_template_part('template-parts/header/header', 'page'); ?>
<section class='container-fluid content' id='taxonomy'>
    <div class='container'>
        <div class='row py-5'>
        <div class='col-12'>
            <?php if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                } ?>
        </div> 
            <div class='col-12 pb-5'>
                <h1 class='text-center'>Quelques réalisations</h1>
            </div>
            <?php $loop = new WP_Query(array('orderby' => 'date',  'order'   => 'DESC',));
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); 
                get_template_part('template-parts/content/content', 'portfolio-img');
                endwhile;
            endif; ?>
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>