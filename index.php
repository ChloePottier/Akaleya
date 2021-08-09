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
            $userRole = $user->roles[0];
            $categorieTabArticle = get_the_category();
            $categorieNameArticle = $categorieTabArticle[0];
            // print_r($categorieNameArticle);
            echo 'Role Utilisateur :'.$userRole.'<br/>';
            echo'Category article :';
           the_category();
            if (is_user_logged_in() && $userRole == 'abonne_wordpress' OR current_user_can('edit_posts') ):
                if($categorieNameArticle->name == 'Utilisateurs Wordpress'):
                    get_template_part('template-parts/content/content','loop');  
                else:
                    get_template_part('template-parts/content/content','private');
                endif; 
            elseif(is_user_logged_in() && $userRole == 'abonne_woocommerce'  OR current_user_can('edit_posts') ):

                if($categorieNameArticle->name == 'Utilisateurs Woocommerce'):
                    get_template_part('template-parts/content/content','loop'); 
                elseif($categorieNameArticle->name == 'Utilisateurs Wordpress'):
                        get_template_part('template-parts/content/content','loop');
                else:
                    get_template_part('template-parts/content/content','private');
                endif; 
            elseif(is_user_logged_in() && $userRole == 'abonne_prestashop'  OR current_user_can('edit_posts') ):
                if($categorieNameArticle->name == 'Utilisateurs Prestashop'):
                    get_template_part('template-parts/content/content','loop'); 
                else:
                    get_template_part('template-parts/content/content','private');
                endif;
            else:
                echo "<h1 class='text-prune-dark pt-0 pt-sm-5'>Article réservé aux abonnés</h1>";
                echo '<a href="'.home_url('/').'espace-membres">Connectez-vous pour lire ce contenu.</a>';
            endif;


              ?>
            </div>
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>

</html>