<?php
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();?>
    <!-- <h2 class='text-prune-dark pt-0 pt-sm-5'></h2>
        <p class='text-prune-dark'></p> -->



        <div class='card col-12 col-sm-6 col-md-3 col-lg-4' >
            <img src='<?php the_post_thumbnail(); ?>' class='card-img-top' alt='...'>
            <div class='card-body bg-prune-dark text-white'>
                <h5 class='card-title font-family-bebas'><?php the_title(); ?></h5>
                <p class='card-text'><?php the_excerpt(); ?></p>
                <a href='<?php echo esc_url(get_permalink( ))?>' class='btn-retour'>Lire la suite</a>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata();
endif;