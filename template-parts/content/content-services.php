<?php $loop = new WP_Query(array('post_type' => 'service', 'order'   => 'ASC','posts_per_page' => '9',));
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class='col-12 col-md-6 col-lg-4 service mt-3 '>
            <div class='bg-prune-dark card-body'>
            <div class='title d-flex flex-row align-items-center align-items-md-start align-items-lg-center justify-content-md-center mb-3'>                          
                <?php $image = get_field('icone');
                if( !empty( $image ) ): ?>
                    <img src='<?php echo esc_url($image['url']); ?>' width='40' height='30' alt='<?php echo esc_attr($image['alt']); ?>' class='mr-3'/>
                <?php endif; ?>
                <h3 class='text-center mb-0'><?php the_title() ?></h3>
            </div>
            <p> <?php the_field('resume_service'); ?></p>
            <a href='<?php echo esc_url(get_permalink());?>' class='savoir-plus font-size-24'>+</a>
            </div>
        </div>
<?php endwhile;
    wp_reset_postdata();
else :
    echo '<p>Aucun Service proposé pour le moment...</p>';
endif; ?>