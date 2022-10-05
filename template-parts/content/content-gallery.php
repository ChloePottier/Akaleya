
<section id='portfolio' class='container-fluid'>
        <div class='container py-5'>
            <div class='row '>
                <div class='col-12 pt-5 pb-3'>
                    <h2 class='text-center font-size-56 text-prune-dark'>Quelques réalisations</h2>
                </div>
                <nav class='col-12' id='nav-portfolio'>
                    <ul class='ps-0 mb-2 d-flex flex-row justify-content-center justify-content-md-end font-family-bebas font-size-21 pb-3 pb-lg-0'>
                        <li class='pe-3'><a href='https://akaleya.fr/realisation' class='nav-portfolio-btn active2' id='all-gallery' onclick="return false;">tous</a></li>
                        <li class='pe-3'><a href='https://akaleya.fr/type/web/' class='nav-portfolio-btn' id='web-gallery'onclick="return false;" >web</a></li>
                        <li><a href='https://akaleya.fr/type/print/' class='nav-portfolio-btn' id='print-gallery'onclick="return false;">graphisme</a></li>
                    </ul> 
                </nav>
            </div>
            <div class='row display-flex2' id='content-portfolio'>
                <?php get_template_part('template-parts/content/content', 'portfolio'); ?>
            </div>
            <div class='row display-none' id='content-web'>
                <?php get_template_part('template-parts/content/content', 'web'); ?>
            </div>
            <div class='row display-none' id='content-print'>
                <?php get_template_part('template-parts/content/content', 'print'); ?>
            </div>
        </div>
    </section>