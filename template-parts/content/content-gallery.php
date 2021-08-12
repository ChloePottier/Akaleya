
<section id='portfolio' class='container-fluid'>
        <div class='container py-5'>
            <div class='row '>
                <div class='col-12 pt-5 pb-3'>
                    <h2 class='text-center font-size-56 text-prune-dark'>Quelques réalisations</h2>
                </div>
                <div class='col-12' id='nav-portfolio'>
                    <ul class='pl-0 mb-2 d-flex flex-row justify-content-center justify-content-md-end font-family-bebas font-size-21 pb-3 pb-lg-0'>
                        <li class='pr-3'><a class='nav-portfolio-btn active2' id='all-gallery'>tous</a></li>
                        <li class='pr-3'><a class='nav-portfolio-btn' id='web-gallery'>web</a></li>
                        <li><a class='nav-portfolio-btn' id='print-gallery'>graphisme</a></li>
                    </ul>
                </div>
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