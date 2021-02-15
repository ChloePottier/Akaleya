<div class="col-12 col-sm-6 col-lg-4 d-flex flex-column  mb-3 ">
    <?php
    $url = get_field('url_realisation');
    $image = get_field('image_realisation');
    if (empty($url)) : ?>
        <div class="card">
            <?php if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" class="responsive" width="545" height="368" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    <?php else : ?>
        <a class="card" href="<?php the_field('url_realisation'); ?>" target="_blank">
            <div class="card__side card__side--back text-center text-white font-size-18 d-flex flex-row">Voir le site <i class="fas fa-arrow-right pl-3"></i></div>
            <div class="img-link-galery card__side card__side--front">
                <?php if (!empty($image)) : ?>
                    <img src="<?php echo esc_url($image['url']); ?>" class="responsive" width="545" height="368" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <?php get_template_part('template-parts/content/content', 'hover-img'); ?>
            </div>
        </a>
    <?php endif; ?>
    <h3 class="pt-3 text-prune-dark"><?php the_title(); ?></h3>
    <div class="text-prune"><?php the_content(); ?></div>
</div>