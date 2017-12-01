
$(function() {
    var productOverlay = $('.image-overlay');
    var overlayImage = $('.image-overlay img');
    

    $("#result").on("click", "img", function(event) {
        
        
        if($(window).width() <= 992) {
             var imageSource = $(this).attr("src").replace('/thumb', '/mobile');
        } else {
             var imageSource = $(this).attr("src").replace('/thumb', '');
        }
        
        
        
        overlayImage.attr('src', imageSource);
        productOverlay.fadeIn(400);
        $('body').css('overflow', 'hidden');
        
        $(".image-overlay, .image-overlay-close").on("click", function() {
            $(".image-overlay").fadeOut(300); 
            $('body').css('overflow', 'auto');
            overlayImage.attr('src', '');
        });
        
    });
});
