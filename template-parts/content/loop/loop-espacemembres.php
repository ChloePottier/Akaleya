<?php echo '<ul class="liste-articles mb-5">';
                        if ($loop->have_posts()) : ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                <li class='text-prune-dark py-2 bold border-bottom'>
                                    <a class="" href="<?php echo esc_url(get_permalink($post->ID)); ?>" ><?php the_title(); ?></a>
                                </li>                                
                            </li>
                        <?php endwhile;
                        wp_reset_postdata();
                        endif;
                        
                            echo '</ul>';