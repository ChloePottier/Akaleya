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
                            <?php include 'template-parts/navigation/navigation-items.php'; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <?php include 'template-parts/navigation/navigation-burger.php'; ?>
        <?php include 'template-parts/header/logo-header.php'; ?>
        <div class="container" id="slider-header">
            <div class="row">
                <!-- Conteneur du slider -->
                <div class="col slider-wrapper ">
                    <nav class="slider-nav position-absolute bg-blue-light ">
                        <a href="" class="slider-prev">
                            Prev
                            </abs>
                            <!-- <button class="slider-play">
                        Play
                    </button> -->
                            <a href="" class="slider-next">
                                Next
                            </a>
                    </nav>
                    <div class="slider-items bg-red">
                        <h1> Slide 1</h1>
                    </div>
                    <div class="slider-items bg-green">
                        Slide 02
                    </div>
                    <div class="slider-items bg-blue">
                        Slide 03
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid nav-top bg-white dis-none" id="navbar">
        <?php include 'template-parts/navigation/navigation-top.php'; ?>
    </div>
</header>