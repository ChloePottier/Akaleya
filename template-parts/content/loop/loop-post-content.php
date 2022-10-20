
<div class='card col-12 col-md-6 col-lg-4 mt-5'>
    <div class='card d-md-none'><?php the_post_thumbnail('thumbnail_blog_xs'); ?></div>
    <div class='card d-none d-md-block '><?php the_post_thumbnail('thumbnail_blog_md'); ?></div>
    <div class='card-body bg-prune-dark text-white-op8'>
        <h4 class='card-title font-family-bebas text-white'><?php the_title(); ?></h4>
        <?php the_excerpt(); ?>
        <a href='<?php echo esc_url(get_permalink()) ?>' class='btn-blog' target='_blank' rel='bookmark'>Lire la suite</a>
    </div>
</div>