<?php $loop = new WP_Query(array('post_type' => 'service'));
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="col-12 col-md-4" id="services-graphisme">
            <div class="title d-flex flex-row justify-content-center align-items-center mb-3">
            <img src="<?php the_field('icone'); ?>"  width="50" height="37" class="mr-3"/>
                <h3 class="text-center mb-0"><?php the_title() ?></h3>
            </div>
            <p><?php the_content(); ?></p>
        </div>

<?php endwhile;
else :
    echo '<p>Page introuvable</p>';
endif; ?>
