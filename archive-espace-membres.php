<?php /* Template Name: Modèle des archives Espace Membres Akaleya */ 
get_template_part('template-parts/header/head', 'meta');
get_template_part('template-parts/header/header', 'page');?>
<scroll-page id='espace_membres'>
    <section class='container-fluid content' id='private_zone'>
        <div class='container pb-5'>
            <?php // Formulaire de connexion
        if (! is_user_logged_in()) {?>
            <div class='row'>
                <div class='col-12 col-md-6 mx-auto'>
                    <h1 class='pt-0 pt-sm-5'>Espace membres</h1>
                    <?php get_template_part('template-parts/content/content','form-connection' );?>
                </div>
            </div>
        <?php } else {?>
            <div class='row'>
                <div class='col-12'>
                    <h1 class='pt-5 pb-5'>Espace membres</h1>
                    <?php //pour le moment je choisis que mes clients ne peuvent pas modifier leur profil
                    // echo '<a href="' . admin_url('user-edit.php?user_id='. get_current_user_id()) .'">Gérer mon profil</a>';
                    $user = new WP_User(get_current_user_id());      
                    $userRole = $user->roles[0];
                    $userData = get_user_meta(get_current_user_id());
                    echo '<p>Bonjour <b>'.$user->display_name.'</b> !</p>';?>
                    <p class='text-justify'>Bienvenue dans <b>votre espace personnel</b> ! <br />
                    Cette zone vous permet d'accéder à la liste de tous <b>les tutoriels d'utilisation</b> concernant votre site internet (ou boutique en ligne).</p>
                    <p class='text-justify'><b>Pour toutes questions</b> supplémentaires, n'hésitez pas à nous contacter via <b><a href ='https://akaleya.fr/contactez-nous/'>notre formulaire de contact</a></b>.<br />
                    Nous restons à votre disposition.</p>
                    <div class= 'bg-light-grey p-3 mt-5 block-75'>
                    <p><b>L'URL de votre site est :</b> 
                    <?php if(isset($userData['website_user'][0])):
                        $userUrl = $userData['website_user'][0];
                        echo "<a href='$userUrl' class='fw-bold' target='_blank' rel='noreferrer noopener'>$userUrl </a>";
                    else:
                        echo "Vous n'avez pas encore de lien disponible.";
                    endif; ?>
                    </p>            
                    <p><b>L'URL de l'administration est :</b>
                    <?php if(isset($userData['website_user'][0])):
                        $userDashboard = $userData['dashboard_user'][0];
                        echo "<a href='$userDashboard' class='fw-bold' target='_blank' rel='noreferrer noopener'>$userDashboard</a>";
                    else:
                        echo "Vous n'avez pas encore de lien disponible.";
                    endif; ?> 
                    </p>  
                    </div>
                </div>
            </div>
            <div class='row py-5'>
                    <h2 class=' col-12 text-prune-dark pb-2'>Mes tutoriels d'utlisation</h2>
                    <div class='card col-12 col-md-6 col-lg-4 mt-5' >
                
                        <div class='card-body bg-prune-dark text-white-op8'>
                            <h4 class='card-title font-family-bebas text-white'>Glossaire du web</h4>
                            <p>Vous trouverez ici tous le lexique du web ! Gardez le sous la main lorque vous parcourez vos tutoriels, il vous sera utile.</p>
                            <a href='https://akaleya.fr/lexique/' class='btn-blog' target='_blank' rel='bookmark'>Lire la suite</a>
                        </div>
                    </div>
                    <?php 
                    $loop = new WP_Query( array('post_type'  => 'espace-membres', 'post_status' => 'publish','tax_query' => array(
                        array('taxonomy' => 'categorie-tutos','field' => 'slug','terms' => $user->display_name,)
                    ), 'order' => 'ASC'));
                    require 'template-parts/content/loop/loop-post.php'; ?>
            </div>        
            <?php 
                $userWP = array('post_type'  => 'espace-membres', 'post_status' => 'publish','tax_query' => array(
                array('taxonomy' => 'categorie-tutos','field' => 'slug','terms' => 'user_wp',)
            ), 'order' => 'ASC','paged' => $paged);
            $userWC = array('post_type'  => 'espace-membres', 'post_status' => 'publish','tax_query' => array(
                array('taxonomy' => 'categorie-tutos','field' => 'slug','terms' => 'user_wc',)
            ), 'order' => 'ASC','paged' => $paged);
            $userPS = array('post_type'  => 'espace-membres', 'post_status' => 'publish','tax_query' => array(
                array('taxonomy' => 'categorie-tutos','field' => 'slug','terms' => 'user_ps',)
            ), 'order' => 'ASC','paged' => $paged);
            if($userRole == 'user_wp'):
                echo"<div class='row py-5'>";
                echo '<h3 class="col-12 text-prune">WordPress</h3>';
                $loop = new WP_Query( $userWP );
                require 'template-parts/content/loop/loop-post.php';
                echo '</div>';
            elseif($userRole == 'user_wc'):
                echo"<div class='row py-5'>";
                echo '<h3 class="col-12  text-prune">WordPress</h3>';
                $loop = new WP_Query($userWP);
                require 'template-parts/content/loop/loop-post.php'; 
                echo "</div> <div class='row py-5'>";
                echo '<h3 class="col-12 text-prune">WooCommerce</h3>';
                $loop = new WP_Query($userWC);
                require 'template-parts/content/loop/loop-post.php'; 
                echo "</div>";
            elseif($userRole == 'user_ps'):
                echo"<div class='row py-5'>";
                echo '<h3 class="col-12 text-prune">PrestaShop</h3>';
                $loop = new WP_Query($userPS);
                require 'template-parts/content/loop/loop-post.php';
                echo "</div>";
            elseif(current_user_can('edit_posts')):                                                              
                echo "<div class='row py-5'>";
                echo '<h3 class="col-12 text-prune">WordPress</h3>';
                $loop = new WP_Query($userWP);
                require 'template-parts/content/loop/loop-post.php';
                echo "</div> <div class='row py-5'>";
                echo '<h3 class="col-12 text-prune">WooCommerce</h3>';
                $loop = new WP_Query($userWC);
                require 'template-parts/content/loop/loop-post.php'; 
                echo "</div> <div class='row py-5'>";
                echo '<h3 class="col-12 text-prune">PrestaShop</h3>';
                $loop = new WP_Query($userPS);
                require 'template-parts/content/loop/loop-post.php'; 
                echo '</div>';
            endif;?>
            <div class='row py-5'>
                <h3 class="col-12 text-prune">Les autres plateformes</h3><?php 
                $loop = new WP_Query( array('post_type'  => 'espace-membres', 'post_status' => 'publish','tax_query' => array(
                    array('taxonomy' => 'categorie-tutos','field' => 'slug','terms' => 'autres-plateformes',)
                ), 'order' => 'ASC','paged' => $paged));
                require 'template-parts/content/loop/loop-post.php';
                echo '</div>';
            };?>
        </div>
    </section>
</scroll-page>
</body>
<?php get_footer(); ?>
</footer>
</html>