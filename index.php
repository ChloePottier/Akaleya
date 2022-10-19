<?php /*Template Name: Akaleya Index*/
get_template_part('template-parts/header/head', 'meta');?>
    <meta property=" og:image " content='<?php echo get_template_directory_uri(); ?>/images/akaleya-header.jpg'/>
<?php get_template_part('template-parts/header/header', 'page'); ?>
<section class='container-fluid content <?php the_taxonomies(); ?> ' id='index'>
    <div class='container'>
        <div class='row py-5'>
            <?php 
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class='card col-12 col-md-6 col-lg-4 mt-5'>
                        <div class='card d-md-none'><?php the_post_thumbnail('thumbnail_blog_xs'); ?></div>
                        <div class='card d-none d-md-block '><?php the_post_thumbnail('thumbnail_blog_md'); ?></div>
                        <div class='card-body bg-prune-dark text-white-op8'>
                            <h4 class='card-title font-family-bebas text-white'><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <a href='<?php echo esc_url(get_permalink()) ?>' class='btn-blog' target='_blank' rel='bookmark'>Lire la suite</a>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</footer>
</html>