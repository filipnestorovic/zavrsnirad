(function($) {
    $.fn.panorama = function(options) {
        this.each(function(){
            var settings = {
                speed: 30000
            };
            if(options) $.extend(settings, options);

            var elemWidth = parseInt($(this).attr('width'));
            var elemHeight = parseInt($(this).attr('height'));
            var elemCount = Math.floor(screen.width / elemWidth)+1;
            var currentElement = this;
            var panoramaViewport, panoramaContainer;

            if(elemCount < 3) elemCount = 2;

            $(this).css({
                '-moz-user-select' : 'none',
                '-webkit-user-select' : 'none',
                'margin' : '0',
                'padding' : '0',
                'border' : 'none'
            })
                .wrap("<div class='panorama-container'></div>");

            panoramaContainer = $(this).parent();
            panoramaContainer.css({
                'width' : elemWidth*elemCount+'px',
                'height' : elemHeight+'px',
                'overflow' : 'hidden'
            })
                .wrap("<div class='panorama-viewport'></div>")
                .parent().css({
                'width' : '100%',
                'overflow' : 'hidden',
                'margin-left' : '0px',
                'text-align' : 'left'
            })
            for (i = 0; i < elemCount-1; i++) {
                $(this).clone().insertAfter(this);
            }

            panorama_animate(panoramaContainer, elemWidth, settings);

        });

        function panorama_animate(element, elemWidth, settings) {
            var rightlimit = elemWidth;
            currentPosition = 0-parseInt($(element).css('margin-left'));
            $(element).animate({marginLeft: -rightlimit}, ((settings.speed / rightlimit) * (rightlimit - currentPosition)), 'linear', function (){
                $(element).css('margin-left', 0);
                panorama_animate(element, elemWidth, settings);
            });

        }

    };
})(jQuery);

$(document).ready(function() {

    /* scroll */
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });

    $('img.panorama').panorama();

    ! function(i) {
        var o, n;
        i(".title-accordion").on("click", function() {
            o = i(this).parents(".accordion_item"), n = o.find(".info"),
                o.hasClass("active_block") ? (o.removeClass("active_block"),
                    n.slideUp()) : (o.addClass("active_block"), n.stop(!0, !0).slideDown(),
                    o.siblings(".active_block").removeClass("active_block").children(
                        ".info").stop(!0, !0).slideUp())
        })
    }(jQuery);

});

$(window).on("load", function(){
    $('.reviews').owlCarousel({
        loop:true,
        margin:10,
        autoHeight: true,
        navText: "",
        dots: false,
        responsive:{
            0:{
                items:1,
                nav:true,
            },
            659:{
                items:2,
                nav:true,
            },
            960:{
                items:3,
                nav:false,
                loop:false
            }
        }
    });
});

