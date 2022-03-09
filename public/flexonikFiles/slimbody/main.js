$ = jQuery.noConflict(); //Fix
$(document).ready(function() {

    //intialize flickity
    var sliders = [];
    sliders.push($('.opinions-carousel').flickity({
        cellAlign: 'center',
        adaptiveHeight: true,
        prevNextButtons: false,
        resize: true,
        contain: true,
        pageDots: false,
        imagesLoaded: true,
        autoPlay: 5000,
        wrapAround: true
    }));
    sliders.push($('.box-banner-carousel').flickity({
        cellAlign: 'center',
        adaptiveHeight: true,
        prevNextButtons: true,
        resize: true,
        contain: true,
        pageDots: false,
        imagesLoaded: true,
        autoPlay: 5000,
        /*wrapAround: true,*/
        pauseAutoPlayOnHover: false
    }));
    $('.wrapper').imagesLoaded(function() {
        for (index = 0; index < sliders.length; ++index) {
            sliders[index].flickity('resize');
        }
    });
    //mobile menu
    $("#navMenu .mobile-menu").click(function() {
        if (!$("#navMenu ul.menu li").is(":visible")) {
            $("#navMenu .mobile-menu").addClass("is-active");
            $("#navMenu").addClass("open");
            $("#navMenu ul.menu li").slideDown("fast");
        } else {
            $("#navMenu ul.menu li").slideUp("fast", function() {
                $("#navMenu ul.menu li").removeAttr("style");
                $("#navMenu .mobile-menu").removeClass("is-active");
                $("#navMenu").removeClass("open");
            });
        }
    });
    //scroll to order
    $(document).on('click', '.scroll_to', function(event) {
        event.preventDefault();
        var jump = $(this).attr('href');
        var new_position = $(jump).offset();
        $('html, body').stop().animate({ scrollTop: new_position.top }, 500);
    });
});
