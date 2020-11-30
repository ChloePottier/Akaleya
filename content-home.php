<section id="presentation" class="container-fluid">
    <div class="container ">
        <div class="row py-5 d-flex align-items-end bg-guitare">
            <div class="col-md-2 d-none d-md-flex"></div>
            <div class="col-12 col-md-10 text-center pt-5 pb-3">
                <!--title et content administrable-->
                <h2 class="text-prune-dark pb-5 font-size-56">Une solution <br />adaptée à vos besoins <br />print et web</h2>
                <p class="text-prune font-size-18">Quelque soit votre projet, vos envies ou vos besoins,
                    nous pouvons construire une solution à votre image. </p>
            </div>
        </div>
    </div>
</section>
<section id="services" class="container-fluid bg-prune-dark text-white">
    <div class="container">
        <!-- bg en diagonal voir tete de com-->
        <div class="row py-5 d-flex ">
            <div class="col-12 text-center pt-5 pb-3">
                <!--title et content administrable-->
                <h2 class=" pb-5 font-size-56">Les services proposés</h2>
            </div>
            <?php include "template-parts/content/services.php"; ?>
        </div>
    </div>
</section>
<section id="portfolio" class="container-fluid">
    <div class="container py-5">
        <div class="row ">
            <div class="col-12 pt-5 pb-3">
                <h2 class="text-center font-size-56 text-prune-dark">Quelques réalisations</h2>
            </div>
            <div class="col-12" id="nav-portfolio">
                <ul class="pl-0 d-flex flex-row justify-content-center justify-content-md-end font-family-bebas font-size-21">
                    <li class="pr-3"><a href="">tous</a></li>
                    <li class="pr-3"><a href="">web</a></li>
                    <li><a href="">graphisme</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php include 'template-parts/content/portfolio.php'; ?>
        </div>
    </div>
</section>
<section class="container-fluid bg-contact" id="contact">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 col-md-6">
                <h2 class="text-prune-dark pt-0 pt-sm-5">Contactez Akaleya</h2>
                <p class="text-prune-dark">Pour toute demande de renseignement, devis, ...</p>
                <?php include 'template-parts/content/formulaire-contact.php'; ?>

            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center flex-column pt-2 pt-md-0">
                <!-- retrouvez moi -->
                <img src="img/ChloePottier-logo.svg" alt="Chloé Pottier logo" width="289" height="289" class="mx-auto" />
                <p class="font-family-bebas text-prune-dark font-size-31 line-height text-center pt-5">
                    Retrouvez-moi<br />aussi sur :</p>
                <div class="d-flex flex-row justify-content-center">
                    <a href="https://facebook.com/akaleya????" target="_blank" class="w-66px facebook d-flex mr-4">fb</a>
                    <a href="https://instagram.com/akaleya????" target="_blank" class="w-66px instagram d-flex mr-4"></a>
                    <a href="https://github.com/ChloePottier" target="_blank" class="w-66px github d-flex mr-4"></a>
                    <a href="https://www.linkedin.com/in/chlo%C3%A9-pottier-b17b60196/" target="_blank" class="ml-4 w-66px linkedin d-flex"></a>
                </div>
            </div>
        </div>
    </div>
</section>