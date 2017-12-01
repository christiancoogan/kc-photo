$(function() {
            
    var counter = 0;
    var imagesLoaded = 0;
    
    function imgGenerator() {
        $("#result").append('<li><img class="lazy" src="' + a[counter] + '"></li>' );
        $("li img").fadeIn();
        counter++;
    }
    
    function gallerySwitch() {
        if($(window).width() <= 992) {
            $('.lazy').each(function() {
                var $this = $(this);
                $this.attr("src", $this.attr('src').replace('/thumb/', '/mobile/'));
            });
            $('#result h1').text("Tap a photo to enlarge it!");
        } else {
            $('.lazy').each(function() {
                var $this = $(this);
                $this.attr("src", $this.attr('src').replace('/mobile/', '/thumb/'));
            });
            $('#result h1').text("Click a photo to enlarge it!");
        }
    }
    
    function removeImages() {
        $('#result li').hide( function() {
            $(this).remove(); 
        });
    }
    
    function pageGenerator() {
        var imagesLoaded = 0;
        
        for(i = 0; i <= 51; i++) {
            if(a[counter] !== undefined ) {
                imgGenerator();
                imagesLoaded++;
            } 
        }
        
        if(imagesLoaded == 52) {
            console.log('done');
        }
    }
    
    pageGenerator();
    gallerySwitch();
    
    $(window).resize(function() {
        gallerySwitch();
    });

    
    $(window).scroll(function() {  
        var winHeight = $(window).height();
        var winScroll = $(window).scrollTop();
        var docHeight = $(document).height();
        
        var win = Math.ceil((winHeight + winScroll) / 10) * 10;
        var doc = Math.ceil(docHeight / 10) * 10;

        
        if(win >= (doc - 500)) {
            pageGenerator();
            gallerySwitch();
        }
    });
    
    $(window).on('touchmove', function(event) {
        var docHeight = $(document).height() - 3744;
        var docTop = $(document).scrollTop();
        
        if(docTop >= docHeight) {
            pageGenerator();
            gallerySwitch();
        }
    
    });
    
    
     
});