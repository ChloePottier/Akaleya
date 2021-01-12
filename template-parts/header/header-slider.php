<div class="container mt-7" id="slider-header">
    <div class="row">
        <!-- Conteneur du slider -->
        <div class="col slider-wrapper my-auto ">
            <nav class="slider-nav position-absolute ">
                <span class="slider-prev mt-5"></span>
                <span class="slider-next mt-5"></span>
                <span class="clear"></span>
            </nav>
            <?php $loop = new WP_Query(array('post_type' => 'slider'));
            while ($loop->have_posts()) : $loop->the_post();?>
                <div class="slider-items text-white text-center font-size-24">
                    <h1 class=" text-shadow"><?php the_title(); ?></h1>
                    <p class="w-75 mx-auto text-shadow"><?php the_content(); ?></p>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</div>