<!-- Portfolio : vignette = custom field Images_réalisations -->

<div class='col-12 col-sm-6 col-lg-4 d-flex flex-column mb-3 col-370'>
    <?php
    $url = get_field('url_realisation');
    $image = get_field('image_realisation'); ?>
    <div class='portfolio-gallery-container'>
        <a class='card' href='<?php echo esc_url(get_permalink($post->ID)); ?>'>
            <div class='card__side card__side--back text-center text-white font-size-18 d-flex flex-row'>Plus d'infos<i class='fas fa-arrow-right ps-3'></i></div>
            <div class='img-link-galery card__side card__side--front'>
                <div class='d-md-none'><?php the_post_thumbnail('thumbnail_portfolio_sm'); ?></div>
                <div class='d-none d-md-block '><?php the_post_thumbnail('thumbnail_portfolio'); ?></div>
            </div>
        </a>
        <h3 class='pt-3 text-prune-dark'><?php the_title(); ?></h3>
        <div class='text-prune text-justify'><?php the_excerpt(); ?></div>
    </div>

</div>