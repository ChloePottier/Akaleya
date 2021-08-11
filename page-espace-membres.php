<?php /* Template Name: Modèle de page Akaleya */ ?>

<?php get_template_part('template-parts/header/head', 'metadata');
get_template_part('template-parts/header/header', 'page');?>
<scroll-page id='espace_membres'>
    <section class='container-fluid content' id='private_zone'>
        <div class='container'>
            <div class='row py-5'>
            <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                    
                        <?php // Formulaire de connexion
                        if (! is_user_logged_in()) {?>
                        <div class='col-12 col-md-6 mx-auto'>
                        <h1 class='text-prune-dark pt-0 pt-sm-5 pb-5'><?php the_title(); ?></h1>
                            <?php wp_login_form(array(
                                'redirect'       => get_permalink(), // par défaut renvoie vers la page courante
                                'label_username' => 'Identifiant',
                                'label_password' => 'Mot de passe',
                                'label_remember' => 'Se souvenir de moi',
                                'label_log_in'   => 'Se connecter',
                                'form_id'        => 'login-form',
                                'id_username'    => 'user-login',
                                'id_password'    => 'user-pass',
                                'id_remember'    => 'rememberme',
                                'id_submit'      => 'wp-submit',
                                'remember'       => true, //afficher l'option se souvenir de moi
                                'value_remember' => false //se souvenir par défaut ?
                            ));
                            echo '</div>';
                        } else {?>
                        <div class='col-12'>
                            <h1 class='text-prune-dark pt-0 pt-sm-5 pb-5'><?php the_title(); ?></h1>
                            <?php //pour le moment je choisis que mes clients ne peuvent pas modifier leur profil
                            // echo '<a href="' . admin_url('user-edit.php?user_id='. get_current_user_id()) .'">Gérer mon profil</a>';
                            $user = new WP_User(get_current_user_id());
                            // print_r($user);
                            echo '<p>Bonjour <b>'.$user->display_name.'</b> !</p>';?>
                            <p><?php the_content();?></p>
                            <h2 class="text-prune-dark pt-0 pt-sm-5">Mes tutos</h2>
                            <?php $user = wp_get_current_user();           
                            $userRole = $user->roles[0];
                            // $userRole == 'abonne_wordpress' 
                            if($userRole == 'abonne_wordpress'):
                                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_wp', 'order' => 'ASC') );
                                require 'template-parts/content/loop/loop-espacemembres.php';
                            elseif($userRole == 'abonne_woocommerce'):
                                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_wp,user_wc', 'order' => 'ASC') );
                                require 'template-parts/content/loop/loop-espacemembres.php';
                            elseif($userRole == 'abonne_prestashop'):
                                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_ps', 'order' => 'ASC') );
                                require 'template-parts/content/loop/loop-espacemembres.php';
                            elseif(current_user_can('edit_posts')):
                                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','order' => 'ASC'));
                                require 'template-parts/content/loop/loop-espacemembres.php';
                            endif;
                                echo '<a href="' . wp_logout_url(site_url('/')) .'" class="pb-3">Se déconnecter</a>';
                            }; ?>
                            </div>
                <?php endwhile;
                    endif; ?>
            </div>
        </div>
    </section>
</scroll-page>
</body>
<?php get_footer(); ?>

</html>