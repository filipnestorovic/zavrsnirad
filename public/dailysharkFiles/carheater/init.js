$(document).ready(function () {

    $('a[href^="#"]').click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 600);
        return false;
    });

    $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 250,
        fade: false,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 1700
    });

});

