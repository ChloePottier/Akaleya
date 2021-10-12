<section class='container-fluid content' id='all-posts'>
    <div class='container'>
        <?php if(!is_user_logged_in()):
            echo '<div class="row py-5">';
            echo '<h2 class="col-12">Les articles du blog</h2>';
            $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'non-classe', 'order' => 'ASC') );
            if(isset($loop->posts[0])):
                require 'loop/loop-post.php';
            else:
                echo '<div class="col-12 d-flex justify-content-center align-items-center my-5">
                    <p class="text-prune font-size-24">Aucun article n\'est disponible pour le moment.<br />
                    Merci de retourner en <a href="'. esc_url( home_url( '/' ) ).'" class="link text-underline">page accueil</a></p>
                </div>';
            endif;
            echo '</div>';
        else:
            echo '<div class="row py-5">';
            echo '<h2 class="col-12">Les articles du blog</h2>';
            if(isset($loop->posts[0])):
                require 'loop/loop-post.php';
            else:
                echo '<div class="col-12 d-flex justify-content-center align-items-center my-5">
                    <p class="text-prune font-size-24">Aucun article n\'est disponible pour le moment.<br />
                </div>';
            endif;
                echo '</div>';
            $user = new WP_User(get_current_user_id());                      
            $userRole = $user->roles[0];
            $userData = get_user_meta(get_current_user_id());
            if($userRole == 'user_wp'):
                echo '<div class="row py-5">';
                echo '<h2 class="col-12">Wordpress</h2>';
                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_wp', 'order' => 'ASC') );
                require 'loop/loop-post.php';
                echo '</div>';
            elseif($userRole == 'user_wc'):
                echo '<div class="row py-5">';
                echo '<h2 class="col-12">Wordpress</h2>';
                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_wp', 'order' => 'ASC') );
                require 'loop/loop-post.php'; 
                echo '</div>';
                echo '<div class="row py-5">';
                echo '<h2 class="col-12">Woocommerce</h2>';
                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_wc', 'order' => 'ASC') );
                require 'loop/loop-post.php'; 
                echo '</div>';
            elseif($userRole == 'user_ps'):
                echo '<div class="row py-5">';
                echo '<h2 class="col-12">Prestashop</h2>';
                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_ps', 'order' => 'ASC') );
                require 'loop/loop-post.php';
                echo '</div>';
            elseif(current_user_can('edit_posts')):
                echo '<div class="row py-5">';
                echo '<h2 class="col-12">Wordpress</h2>';
                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_wp', 'order' => 'ASC') );
                require 'loop/loop-post.php';
                echo '</div>';
                echo '<div class="row py-5">';
                echo '<h2 class="col-12">Woocommerce</h2>';
                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_wc', 'order' => 'ASC') );
                require 'loop/loop-post.php'; 
                echo '</div>';
                echo '<div class="row py-5">';
                echo '<h2 class="col-12">Prestashop</h2>';
                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_ps', 'order' => 'ASC') );
                require 'loop/loop-post.php';  
                echo '</div>';
            endif;
        endif;
        
        
        ?> 
    </div>
</section>