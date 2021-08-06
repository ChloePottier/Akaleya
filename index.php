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
            if ( is_user_logged_in() && $user->roles[0] == 'abonne_wordpress' OR current_user_can('edit_posts') ) {
                $loop = new WP_Query( array('post_type'  => 'post', 'post_status' => 'publish') );
                if ($loop->have_posts()) : ?>
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                            <h1 class='text-prune-dark pt-0 pt-sm-5'><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                    <?php endwhile;
                    endif;
                } else {
                echo "<h1 class='text-prune-dark pt-0 pt-sm-5'>Article réservé aux abonnés</h1>";                
                echo '<a href="'.home_url( '/' ).'espace-membres">Connectez-vous pour lire ce contenu</a>';
            }


              ?>     
            </div>                
        </div>
    </div>
</section>
</body>
<?php get_footer(); ?>
</html>