<?php $loop = new WP_Query(array('post_type' => 'realisation',
'tax_query' => array(
    array(
        'taxonomy' => 'type',
        'field'    => 'slug',
        'terms'    => 'graphisme',
    )),
'orderby' => 'meta_value_num',  'meta_key'  => 'ordre_publication', 'order'   => 'ASC','posts_per_page' => '6',));if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
    get_template_part('template-parts/content/content', 'portfolio-img');
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>Page introuvable</p>';
endif; ?>