jQuery(function($){
    var webGalleryNav = $('#web-gallery');
    var printGalleryNav = $('#print-gallery');
    var allGalleryNav = $('#all-gallery');
    var contentPortfolio = $('#content-portfolio');
    var contentPrint = $('#content-print');
    var contentWeb = $('#content-web');
        $(webGalleryNav).on('click', function(event){
            contentWeb.addClass('display-flex2');
            contentWeb.removeClass('display-none');
            webGalleryNav.addClass('active2');;
            contentPortfolio.removeClass('display-flex2');            
            contentPortfolio.addClass('display-none');
            allGalleryNav.removeClass('active2');
            contentPrint.removeClass('display-flex2');
            contentPrint.addClass('display-none');
            printGalleryNav.removeClass('active2');
        });
        $(printGalleryNav).on('click', function(event){
            contentPrint.addClass('display-flex2');
            contentPrint.removeClass('display-none');
            printGalleryNav.addClass('active2');            
            contentPortfolio.removeClass('display-flex2');
            contentPortfolio.addClass('display-none');
            allGalleryNav.removeClass('active2');
            contentWeb.removeClass('display-flex2');
            contentWeb.addClass('display-none');
            webGalleryNav.removeClass('active2');
           
        });
        $(allGalleryNav).on('click', function(event){
            contentPortfolio.addClass('display-flex2');
            contentPortfolio.removeClass('display-none');
            allGalleryNav.addClass('active2');            
            contentPrint.removeClass('display-flex2');
            contentPrint.addClass('display-none');
            contentWeb.removeClass('display-flex2');
            contentWeb.addClass('display-none');
            webGalleryNav.removeClass('active2');
            printGalleryNav.removeClass('active2');
        });
});