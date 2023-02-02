$(document).ready(function () {
    $("a[href^='#']").click(function () {
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top + "px"});
        return false;
    });

    $(".reviews_list").owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 300,
        mouseDrag: false,
        pullDrag: false,
        dots: false,
        nav: true,
        navText: ""
    });
});
