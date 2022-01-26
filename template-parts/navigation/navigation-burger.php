<div class='container'>
    <div class='row'>
        <div class='col'>
            <label class='burger text-center d-flex flex-column d-lg-none text-white font-size-13 position-fixed rounded-circle bg-burger' id='burger'>MENU
                <span class='bg-white isclosed mx-auto' id='burger1'>&nbsp;</span>
                <span class='bg-white isclosed mx-auto' id='burger2'>&nbsp;</span>
                <span class='bg-white isclosed mx-auto' id='burger3'>&nbsp;</span>
            </label>
            <nav class='menu-burger display-none bg-prune-dark-op70 px-auto' id='navigation'>
                <ul class='  font-family-bebas font-size-31 text-right pt-9'>        
                <li itemprop='itemListElement' itemscope itemtype='https://schema.org/ListItem'>
                    <a href='https://akaleya.fr/' itemprop='item' >
                        <span itemprop='name'>Home</span><meta itemprop='position' content='1'/>
                    </a>
                </li>            
                    <?php get_template_part('template-parts/navigation/navigation', 'items'); ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
