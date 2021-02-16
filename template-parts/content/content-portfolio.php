<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$loop = new WP_Query(array(
    'post_type' => 'realisation', 'orderby' => 'meta_value_num',  'meta_key'  => 'ordre_publication',
    'order'   => 'ASC', 'posts_per_page' => 6, 'paged' => $paged,
));
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
        get_template_part('template-parts/content/content', 'portfolio-img');
    endwhile;
    //pagination
    get_template_part('template-parts', 'akaleya-pagination.php'  );
endif;
wp_reset_postdata(); ?>