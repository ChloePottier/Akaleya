<?php $loop = new WP_Query(array('post_type' => 'realisation', 'category_name' => 'Graphisme', 'orderby' => 'meta_value_num',  'meta_key'  => 'ordre_publication', 'order'   => 'ASC','posts_per_page' => '6',));
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
    get_template_part('template-parts/content/content', 'portfolio-img');
    endwhile;
else :
    echo '<p>Page introuvable</p>';
endif; ?>