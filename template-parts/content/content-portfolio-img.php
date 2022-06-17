<!-- Portfolio : vignette = thumbnail -->
<div class='col-12 col-sm-6 col-lg-4 d-flex flex-column  mb-3 '>
    <?php
    $url = get_field('url_realisation');
    $image = get_field('image_realisation');?>
        <a class='card' href='<?php echo esc_url(get_permalink($post->ID)); ?>' >
            <div class='card__side card__side--back text-center text-white font-size-18 d-flex flex-row'>Plus d'infos<i class='fas fa-arrow-right pl-3'></i></div>
            <div class='img-link-galery card__side card__side--front'>
            <?php the_post_thumbnail(); ?>                  
            </div>
        </a>
    <h3 class='pt-3 text-prune-dark'><?php the_title(); ?></h3>
    <div class='text-prune'><?php the_excerpt(); ?></div>
</div>