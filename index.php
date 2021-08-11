<?php /*Template Name: AkaleyaAccueil*/
get_template_part('template-parts/header/head', 'metadata');
get_template_part('template-parts/header/header', 'page');?>
<section class='container-fluid content' id=''>
    <div class='container'>
        <div class='row py-5'>
            <div class='col-12 '>             
            <?php $user = wp_get_current_user();
            if(!is_user_logged_in()):
                $userRole = 'Utilisateur non connecté';
            else:
                $userRole = $user->roles[0];
            endif;
            $categorieTabArticle = get_the_category();
            $categorieNameArticle = $categorieTabArticle[0];            
            if (is_user_logged_in() && $userRole == 'abonne_wordpress' ):
                if($categorieNameArticle->name == 'Utilisateurs Wordpress'):
                    get_template_part('template-parts/content/content','loop');  
                else:
                    get_template_part('template-parts/content/content','private');
                endif; 
            elseif(is_user_logged_in() && $userRole == 'abonne_woocommerce'  ):

                if($categorieNameArticle->name == 'Utilisateurs Woocommerce'):
                    get_template_part('template-parts/content/content','loop'); 
                elseif($categorieNameArticle->name == 'Utilisateurs Wordpress'):
                        get_template_part('template-parts/content/content','loop');
                else:
                    get_template_part('template-parts/content/content','private');
                endif; 
            elseif(is_user_logged_in() && $userRole == 'abonne_prestashop'  ):
                if($categorieNameArticle->name == 'Utilisateurs Prestashop'):
                    get_template_part('template-parts/content/content','loop'); 
                else:
                    get_template_part('template-parts/content/content','private');
                endif;
            elseif(is_user_logged_in() && current_user_can('edit_posts')):                
                    get_template_part('template-parts/content/content','loop');

            elseif(! is_user_logged_in()):
                if($categorieNameArticle->name == 'Non classé'):
                    get_template_part('template-parts/content/content','loop'); 
                else:
                    echo "<h1 class='text-prune-dark pt-0 pt-sm-5'>Article réservé aux abonnés</h1>";
                    echo '<a href="'.home_url('/').'espace-membres">Connectez-vous pour lire ce contenu.</a>';
                endif;
                
            endif; ?>
            </div>
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</html>