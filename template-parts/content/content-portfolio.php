<?php $loop = new WP_Query(array('post_type' => 'realisation', 'orderby' => 'ordre_publication', 'order'   => 'ASC',));
if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="col-12 col-sm-6 col-lg-4 d-flex flex-column  mb-3">
            <a href="">
                <img src="img/rumbleinn-min.jpg" width="370" height="250" alt="" title="" class="responsive" />
            </a>
            <h3 class="pt-3 text-prune-dark">Rumble Inn Studio</h3>
            <p class="text-prune">Création de la charte graphique, création du thème et personnalisation du back-office pour que chaques pages soit administrables</p>
        </div>
<?php endwhile;
else :
    echo '<p>Page introuvable</p>';
endif; ?>