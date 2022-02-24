<?php $loop = new WP_Query(array('post_type' => 'realisation', 'order'   => 'DESC','posts_per_page' => '6',));
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post(); 
        get_template_part('template-parts/content/content', 'portfolio-img');
    endwhile;
else :
    echo '<p>Page introuvable</p>';
endif; ?>