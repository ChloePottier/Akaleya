<ul class="liste-articles mb-5">
   <?php if ($loop->have_posts()) :
        while ($loop->have_posts()) : $loop->the_post(); ?>
            <li class='text-prune-dark py-2 bold border-bottom'>
                <a class='tutos-items' href='<?php echo esc_url(get_permalink($post->ID)); ?>' target='_blank'><?php the_title(); ?></a>
            </li>
        <?php endwhile;
            wp_reset_postdata();
            endif;?>            
</ul>
