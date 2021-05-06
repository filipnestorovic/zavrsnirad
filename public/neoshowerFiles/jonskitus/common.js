$(document).ready(function() {
    $(".rev_block").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        loop: true,
        lazyLoad: false,
        nav: true,
        items: 1,
        margin: 5
    });
    $(".nature_slider").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        loop: true,
        lazyLoad: false,
        nav: true,
        items:1,
        margin: 0,
        responsiveClass:true,
        dots:false,
        responsive:{
            665:{
                items:2,
                margin: 10,
                dots:false
            },
            980:{
                items:3,
                margin: 10,
                dots:false
            }

        }
    })
});