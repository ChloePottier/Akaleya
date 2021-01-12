<div class="container">
    <div class="row bg-white">
        <div class="col d-flex align-items-center">
            <a class="logo-akaleya my-1" href="#top">
            <?php // echo get_custom_logo();
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
               }
            ?>
            </a>
        </div>
        <div class="col d-flex justify-content-end">
            <nav class="menu-nav text-right d-none d-md-flex" >
                <ul class="  d-flex justify-content-end font-family-bebas font-size-21 align-items-center mb-0 my-3" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <?php  get_template_part('template-parts/navigation/navigation', 'items'); ?>
                    
                </ul>
            </nav>
        </div>
    </div>
</div>