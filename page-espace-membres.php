<?php /* Template Name: Modèle de page Akaleya */ ?>

<?php get_template_part('template-parts/header/head', 'metadata');
get_template_part('template-parts/header/header', 'page');?>
<scroll-page id=''>
    <section class='container-fluid content' id=''>
        <div class='container'>
            <div class='row py-5'>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <div class='col-12 '>
                    <h1 class='text-prune-dark pt-0 pt-sm-5'><?php the_title(); ?></h1>
                    <?php // Formulaire de connexion
                    if (! is_user_logged_in()) {
                        wp_login_form(array(
                            'redirect'       => get_permalink(), // par défaut renvoie vers la page courante
                            'label_username' => 'Login',
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
                    } else {
                        //pour le moment je choisis que mes clients ne peuvent pas modifier leur profil
                        // echo '<a href="' . admin_url('user-edit.php?user_id='. get_current_user_id()) .'">Gérer mon profil</a>';
                        $user = new WP_User(get_current_user_id());
                        var_dump($user);
                        echo '<p>Bonjour <b>'.$user->display_name.'</b> !</p>';
                        echo '<p>'.the_content().'</p>';
                        $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish','category_name' => 'user_wp') );

                        echo '<h2 class="text-prune-dark pt-0 pt-sm-5">Mes tutos</h2>';
                        echo '<ul class="liste-articles mb-5">';
                        if ($loop->have_posts()) : ?>
                        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                <li class='text-prune-dark py-2 bold border-bottom'>
                                    
                                <?php the_title(); ?>
                            </li>
                        <?php endwhile;
                        endif;
                            echo '</ul>';
                            echo '<a href="' . wp_logout_url(site_url('/')) .'">Se déconnecter</a>';
                        }
                        ; ?>
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