<scroll-page id='blog'>
    <section class='container-fluid content' id='archive-content'>
        <div class='container pb-5'>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='pt-5'>Les articles du blog</h1>
                </div>
            </div>
            <div class='row pb-5'>
                <?php $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','order' => 'ASC', 'paged' => $paged) );
                if(isset($loop->posts[0])):
                    require 'loop/loop-post.php';
                else:
                    echo '<div class="col-12 text-prune-dark my-5">
                            <p class="font-size-24">Désolé, il n\'y a pas d\'article disponible pour le moment.</p>
                            <p>Pour toute question, rendez-vous sur notre page <a href="https://akaleya.fr/#section-contact" class="bold">Contact</a>. Nous vous répondrons dans les plus bref délais.</p>
                            <div class="bold pt-5"><a href="https://akaleya.fr" class=""><i class="fas fa-arrow-left"></i> Retour accueil</a></div>
                        </div>';                      
                endif;?>  
            </div>                     
        </div>
    </section>
</scroll-page>