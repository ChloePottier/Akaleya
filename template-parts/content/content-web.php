<?php $loop = new WP_Query(array('post_type' => 'realisation', 'orderby' => 'ordre_publication', 'order'   => 'ASC', 'category_name' => 'Web',));
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column  mb-3">
            <?php
            $url = get_field('url_realisation');
            if (empty($url)) : ?>
                <img src="<?php the_field('image_realisation'); ?>" width="370" height="250" alt="" title="" class="responsive" />
            <?php else : ?>
                <a href="<?php the_field('url_realisation'); ?>" target="_blank">
                    <img src="<?php the_field('image_realisation'); ?>" width="370" height="250" alt="" title="" class="responsive" />
                </a>
            <?php endif; ?>

            <h3 class="pt-3 text-prune-dark"><?php the_title(); ?></h3>
            <div class="text-prune"><?php the_content(); ?></div>
        </div>
<?php endwhile;
else :
    echo '<p>Page introuvable</p>';
endif; ?>