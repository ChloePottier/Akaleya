jQuery(function($){
    var webGalleryNav= $('#web-gallery');
    var printGalleryNav= $('#print-gallery');
    var allGalleryNav= $('#all-gallery');


    var contentPortfolio = $('#content-portfolio');
    var contentPrint = $('#content-print');
    var contentWeb = $('#content-web');
        $(webGalleryNav).on('click', function(event){
            contentWeb.addClass('display-flex2');
            contentWeb.removeClass('display-none');
            contentPortfolio.removeClass('display-flex2');
            contentPortfolio.addClass('display-none');
            contentPrint.removeClass('display-flex2');
            contentPrint.addClass('display-none');
        });

        $(PrintGalleryNav).on('click', function(event){
            contentPrint.addClass('display-flex2');
            contentPrint.removeClass('display-none');
            contentPortfolio.removeClass('display-flex2');
            contentPortfolio.addClass('display-none');
            contentWeb.removeClass('display-flex2');
            contentWeb.addClass('display-none');
        });
        $(AllGalleryNav).on('click', function(event){
            contentPortfolio.addClass('display-flex2');
            contentPortfolio.removeClass('display-none');
            contentPrint.removeClass('display-flex2');
            contentPrint.addClass('display-none');
            contentWeb.removeClass('display-flex2');
            contentWeb.addClass('display-none');
        });
})