<?php /**
 * Header file for the Akaleya theme
 * @package WordPress
 * @subpackage akaleya-theme
 * @since 1.0
 * @version 1.0
 */
?>
<body id='top' <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class='container-fluid bg-graphiste bg-cover'>
        <div class='container d-none d-md-flex justify-content-end pt-3' id='navbarTop'>
            <div class='row'>
                <div class='col d-flex justify-content-end'>
                    <nav class='menu-nav text-right d-none d-md-flex'>
                        <ul class='  d-flex justify-content-end font-family-bebas font-size-21 align-items-center mb-0 my-3' itemscope itemtype='https://schema.org/BreadcrumbList'>
                            <?php  get_template_part('template-parts/navigation/navigation', 'items'); ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php  get_template_part('template-parts/navigation/navigation','burger');
         get_template_part('template-parts/header/logo','header'); 
         get_template_part('template-parts/header/header','slider'); 
         ?>
    </div>
    <div class='container-fluid nav-top bg-white dis-none' id='navbar'>
        <?php  get_template_part('template-parts/navigation/navigation', 'top'); ?>
    </div>
</header>