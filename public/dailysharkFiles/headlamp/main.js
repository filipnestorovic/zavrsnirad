$(document).ready(function () {
    $("a[href^='#']").click(function () {
        var _href = $(this).attr("href");
        $("html, body").animate({scrollTop: $(_href).offset().top + "px"});
        return false;
    });
});

var swiper = new Swiper('.swiper', {
    pagination: {el: '.swiper-pagination', clickable: 'true',},
    navigation: {nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev',},
    lazyLoading: true,
});
