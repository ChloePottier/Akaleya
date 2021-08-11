<div class='container d-none d-md-block'>
    <div class='row bg-white'>
        <div class='col d-flex align-items-center'>
            <?php the_custom_logo(  ) ?>
        </div>
        <div class='col d-flex justify-content-end'>
            <nav class='menu-nav text-right d-none d-md-flex' >
                <ul class='  d-flex justify-content-end font-family-bebas font-size-21 align-items-center mb-0 my-3' itemscope itemtype='https://schema.org/BreadcrumbList'>
                    <?php
                     if(is_user_logged_in()):
                        get_template_part('template-parts/navigation/navigation', 'items-private');
                    else :
                        get_template_part('template-parts/navigation/navigation', 'items');
                    endif;
                         ?>                    
                </ul>
            </nav>
        </div>
    </div>
</div>