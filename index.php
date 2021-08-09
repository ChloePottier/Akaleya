<?php /*Template Name: AkaleyaAccueil*/?>
<?php get_template_part('template-parts/header/head', 'metadata');
// get_header();
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id=''>
    <div class='container'>
        <div class='row py-5'>
            <div class='col-12 '>

                <?php
            //   if( is_user_logged_in() && !current_user_can('edit_posts')):
            //     // else:
            //     endif;
            $user = wp_get_current_user();
            if (is_user_logged_in() && $user->roles[0] == 'abonne_wordpress' or current_user_can('edit_posts')) {
                if (have_posts()) :
                    while (have_posts()) : the_post();
                the_title();
                the_content();
                endwhile;
                wp_reset_postdata(); else :
                        echo 'Page introuvable';
                endif;
            } else {
                echo "<h1 class='text-prune-dark pt-0 pt-sm-5'>Article réservé aux abonnés</h1>";
                echo "<p>Vous ne disposez pas des droits pour lire cet article ou vous n'êtes pas connecté</p>";
                echo '<a href="'.home_url('/').'espace-membres">Je me connecte !</a>';
            }


              ?>
            </div>
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>

</html>