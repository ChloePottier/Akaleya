<!-- Portfolio : vignette = custom field Images_réalisations -->

<div class='col-12 col-sm-6 col-lg-4 d-flex flex-column mb-3 col-370'>
    <?php
    $url = get_field('url_realisation');
    $image = get_field('image_realisation'); ?>
    <div class='portfolio-gallery-container'>
        <a class='card' href='<?php echo esc_url(get_permalink($post->ID)); ?>'>
            <div class='card__side card__side--back text-center text-white font-size-18 d-flex flex-row'>Plus d'infos<i class='fas fa-arrow-right pl-3'></i></div>
            <div class='img-link-galery card__side card__side--front'>
                <?php if (!empty($image)) : ?>
                    <img src='<?php echo esc_url($image['url']); ?>' class='responsive' width='370' height='250' alt='<?php echo esc_attr($image['alt']); ?>' />
                <?php endif; ?>
            </div>
        </a>
        <h3 class='pt-3 text-prune-dark'><?php the_title(); ?></h3>
        <div class='text-prune'><?php the_excerpt(); ?></div>
    </div>

</div>