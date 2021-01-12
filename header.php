<?php /**
 * Header file for the Akaleya theme
 * @package WordPress
 * @subpackage akaleya-theme
 * @since 1.0
 * @version 1.0
 */
?>
<header onload=sliding()>
    <div class="container-fluid bg-graphiste bg-cover">
        <div class="container d-none d-md-flex justify-content-end pt-3" id="navbarTop">
            <div class="row">
                <!-- <div class="col d-flex align-items-center">
                    <a class="logo-akaleya" href="index.php"></a>
                </div> -->
                <div class="col d-flex justify-content-end">
                    <nav class="menu-nav text-right d-none d-md-flex">
                        <ul class="  d-flex justify-content-end font-family-bebas font-size-21 align-items-center mb-0 my-3" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <?php include 'wp-content/themes/akaleya-theme/template-parts/navigation/navigation-items.php'; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php include 'wp-content/themes/akaleya-theme/template-parts/navigation/navigation-burger.php';
        include 'wp-content/themes/akaleya-theme/template-parts/header/logo-header.php'; 
        include 'wp-content/themes/akaleya-theme/template-parts/header/slider.php';?>
    </div>
    <div class="container-fluid nav-top bg-white dis-none" id="navbar">
        <?php include 'wp-content/themes/akaleya-theme/template-parts/navigation/navigation-top.php'; ?>
    </div>
</header>