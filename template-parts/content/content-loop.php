<?php
if (have_posts()) :
    while (have_posts()) : the_post();?>
    <h2 class="text-prune-dark pt-0 pt-sm-5"><?php the_title(); ?></h2>
        <p class="text-prune-dark"><?php the_content(); ?></p>
    <?php endwhile;
endif;