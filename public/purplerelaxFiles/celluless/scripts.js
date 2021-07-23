$(document).ready(function() {

    /* scroll */

    $("a[href^='#']").click(function(){
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
        return false;
    });

    /* sliders */

    $(".types_list").owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 300,
        mouseDrag: false,
        pullDrag: false
    });

    $(".reviews_list").owlCarousel({
        smartSpeed: 300,
        mouseDrag: false,
        pullDrag: false,
        dots: false,
        navText: "",
        responsive: {
            0: {
                items: 1,
                margin: 0,
                nav: true,
                loop: true
            },
            640: {
                items: 2,
                margin: 20,
                nav: true,
                loop: true
            },
            1170: {
                items: 3,
                margin: 25,
                nav: false,
                loop: false
            }
        }
    });

});
$(document).ready(function(){

    $('.feedback').click(function() {
        $('.popup-window').removeClass('hidden');
    });
    $('.close-popup').click(function() {
        $('.popup-window').addClass('hidden');
    });
    $('body').click(function(evt){
        if ((!evt.target.closest('.popup-window'))&&(!evt.target.closest('.feedback'))) {
            $('.popup-window').addClass('hidden');
        }
    });

});