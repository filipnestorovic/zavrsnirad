$(document).ready(function () {
    $('a[href^="#buy"]').click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({ scrollTop: destination }, 800);
        return false;
    });
    $(".reviews").slick({
        dots: false,
        infinite: true,
        speed: 240,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            { breakpoint: 976, settings: { slidesToShow: 2, slidesToScroll: 1 } },
            { breakpoint: 659, settings: { slidesToShow: 1, slidesToScroll: 1 } },
        ],
    });
    $(".goods").slick({ dots: false, infinite: true, speed: 240, slidesToShow: 1, slidesToScroll: 1 });
});
