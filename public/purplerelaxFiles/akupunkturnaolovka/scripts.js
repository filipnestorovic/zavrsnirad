$(document).ready(function() {

    /* scroll */
    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });

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
            660:{
                items:2,
                nav:true,
            },
            980:{
                items:3,
                nav:false,
                loop:false
            }
        }
    });

});

