$(document).ready(function(){

    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });

    $('.owl-carousel_1').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        dotsEach:true,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
    $('.owl-carousel_2').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        dotsEach:true,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:3,
                margin:10,
                loop:false,
                dots:false
            }
        }
    });
})
