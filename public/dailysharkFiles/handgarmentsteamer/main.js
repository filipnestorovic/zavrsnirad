
$('video').parent().click(function () {
    if($(this).children("video").get(0).paused){
        $(this).children("video").get(0).play();
        $(this).children(".playpause").fadeOut();
    }else{
        $(this).children("video").get(0).pause();
        $(this).children(".playpause").fadeIn();
    }
});

$(".carousel-slider").owlCarousel({
    loop:!0,
    nav:!0,
    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
    items: 2,
    responsive: {
        0: {
            items: 1,
            nav:!0,
            dots:!0
        },
        600: {
            items: 1
        },
        1e3: {
            items: 2,
            nav:!0
        }
    }
});

$(".match_height").matchHeight();

