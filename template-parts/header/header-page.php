<?php /**
 * Header file for the Akaleya theme
 * @package WordPress
 * @subpackage akaleya-theme
 * @since 1.0
 * @version 1.0
 */
?>
<body id="top">
<header onload=sliding() class="">
    <!-- https://akaleya.fr/wp-content/uploads/2021/01/akaleya-logo-menu-bl.png -->
    <div class="container-fluid bg-graphiste-small height-200">
        <div class="container d-none d-md-block" id="navbarTop">
            <div class="row">
                <div class="col d-flex align-items-center">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src= "<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/01/akaleya-logo-menu-bl.png"/>
                        </a>
                </div>
                <div class="col d-flex justify-content-end" id="menu-page">
                    <nav class="menu-nav text-right d-none d-md-flex" >
                        <ul class="  d-flex justify-content-end font-family-bebas font-size-21 align-items-center mb-0 my-3" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <?php  get_template_part('template-parts/navigation/navigation', 'items'); ?>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php  get_template_part('template-parts/navigation/navigation','burger');?>
    </div>
    <div class="container-fluid nav-top bg-white dis-none" id="navbar">
        <?php  get_template_part('template-parts/navigation/navigation', 'top'); ?>
    </div>
</header>