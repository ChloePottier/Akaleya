<scroll-page id='blog'>
    <section class='container-fluid content' id='archive-content'>
        <div class='container pb-5'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='text-prune-dark pt-5'>Les articles du blog</h1>
                </div>
            </div>
            <div class='row pb-5'>
                <?php $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','order' => 'ASC', 'paged' => $paged) );
                if(isset($loop->posts[0])):
                    require 'loop/loop-post.php';
                else:
                    echo '<div class="col-12 d-flex justify-content-center align-items-center my-5">
                            <p class="text-prune font-size-24">Aucun article n\'est disponible pour le moment.</p>
                        </div>';
                endif;?>  
            </div>                     
        </div>
    </section>
</scroll-page>