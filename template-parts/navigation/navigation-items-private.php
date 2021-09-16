    <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='<?php echo esc_url( home_url( "/" ) ); ?>' class='text-prune-dark' itemprop='item'>
            <span itemprop='name'>Accueil</span><meta itemprop='position' content='1'/>
        </a>
    </li>
    <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='<?php echo esc_url( home_url( "/" ) ); ?>/espace-membres' class='text-prune-dark' itemprop='item'>
            <span itemprop='name'>Mon espace</span><meta itemprop='position' content='2'/>
        </a>
    </li>
    <!-- A activer quand formulaire modification sera créé -->
    <!-- <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='
        <?php //echo esc_url( home_url( "/" ) ); ?>
        ' class='text-prune-dark' itemprop='item'>
            <span itemprop='name'>Mon compte</span><meta itemprop='position' content='3'/>
        </a>
    </li> -->
    <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='<?php echo esc_url( home_url( "/" ) ); ?>#section-contact' class='text-prune-dark' itemprop='item'>
            <span itemprop='name'>Contact</span><meta itemprop='position' content='4'/>
        </a>
    </li>
    <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='<?php echo wp_logout_url(site_url('/')) ?>' class='text-prune-dark' itemprop='item'>
            <span itemprop='name'>Se déconnecter</span>
            <meta itemprop='position' content='5'/>
        </a>
    </li>
    
