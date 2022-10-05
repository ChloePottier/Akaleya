<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href='http://akaleya.fr/blog' itemprop='item'>
            <span itemprop='name'>Blog</span>
        </a>
        <meta itemprop='position' content='1'/>
    </li>
    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href='http://akaleya.fr/service' itemprop='item'>
            <span itemprop='name'>Services</span>
        </a>
        <meta itemprop='position' content='2'/>
    </li>
    <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='https://akaleya.fr/realisation' itemprop='item'>
            <span itemprop='name'>Réalisations</span>
        </a>
        <meta itemprop='position' content='3'/>
    </li>
    
    <!-- <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='<?php //echo esc_url( home_url( "/" ) ); ?>category/non-classe/' itemprop='item'>
            <span itemprop='name'>Blog</span><meta itemprop='position' content='5'/>
        </a>
    </li> -->
    <?php if (! is_user_logged_in()) :?>
        <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='https://akaleya.fr/contactez-nous/' itemprop='item'>
            <span itemprop='name'>Contact</span>
        </a>
        <meta itemprop='position' content='4'/>
    </li>
    <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='https://akaleya.fr/espace-membres' itemprop='item'>
            <span itemprop='name'>Se connecter</span>
        </a>
        <meta itemprop='position' content='5'/>
    </li>
    <?php else: ?>
    <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='https://akaleya.fr/espace-membres' class='text-prune-dark' itemprop='item'>
            <span itemprop='name'>Mon espace</span>
        </a>
        <meta itemprop='position' content='4'/>
    </li>
    <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
        <a href='https://akaleya.fr/contactez-nous/' itemprop='item'>
            <span itemprop='name'>Contact</span>
        </a>
        <meta itemprop='position' content='5'/>
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
        <a href='<?php echo wp_logout_url(site_url('/')) ?>' class='text-prune-dark' itemprop='item'>
            <span itemprop='name'>Se déconnecter</span>
        </a>
        <meta itemprop='position' content='6'/>
    </li>
    <?php endif; ?>
