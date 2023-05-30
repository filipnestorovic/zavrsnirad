$(document).ready(function() {

    $("a").on("click", function(event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 1500);
    });

    $(".problems_block").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        loop: true,
        lazyLoad: false,
        nav: true,
        margin: 0,
        responsive:{
        0:{
            items:1
        },
        665:{
            items:2
        },
        980:{
            items:3
        }
    }
    });

    $(".ba_block").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        loop: true,
        lazyLoad: false,
        nav: true,
        margin: 0,
        responsive:{
        420:{
            items:1
        },
        665:{
            items:3
        },
        980:{
            items:3
        },
        1120:{
            items:4
        },
    }
    });

    $(".reviews_block").owlCarousel({
        navigation: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        loop: true,
        lazyLoad: false,
        nav: true,
        margin: 0,
        responsive:{
        0:{
            items:1
        },
        665:{
            items:2
        },
        980:{
            items:3,
            navigation: false,
            nav: false,
            mouseDrag:false,
            touchDrag:false
        }
    }
    });
});
