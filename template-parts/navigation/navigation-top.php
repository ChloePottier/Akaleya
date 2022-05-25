<div class='container d-none d-lg-block'>
    <div class='row bg-white'>
        <div class='col d-flex align-items-center'>
            <?php the_custom_logo(  ) ?>
        </div>
        <div class='col d-flex justify-content-end'>
            <nav class='menu-nav text-right d-none d-lg-flex' >
                <ul class='  d-flex justify-content-end font-family-bebas font-size-21 align-items-center mb-0 my-3' itemscope itemtype='https://schema.org/BreadcrumbList'>
                    <?php  get_template_part('template-parts/navigation/navigation', 'items');?>                    
                </ul>
            </nav>
        </div>
    </div>
</div>