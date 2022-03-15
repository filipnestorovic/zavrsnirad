$(document).ready(function() {

    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    });

    $(".show_slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        pagination: true,
        loop: true,
        lazyLoad: false,
        nav: true,
        dots: false,
        navText: false,
        items: 1,
        responsiveClass: true,
        responsive: {
            0: {
                margin: 10,
                items: 1
            },
            665: {
                margin: 18,
                items: 2
            },
            980: {
                margin: 21,
                items: 3
            }
        }
    });

    $(".feedback_slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        pagination: true,
        loop: true,
        lazyLoad: false,
        nav: true,
        navText:false,
        items:1,
        dots:true,
        responsiveClass: true,
        items: 1,
        responsive: {
            0: {
                margin: 10
            },
            980: {
                margin: 10
            }
        }
    });
});