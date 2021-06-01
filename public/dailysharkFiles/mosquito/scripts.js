$(document).ready(function() {
    /* scroll */
    $("a[href^='#']").click(function(){
        var target = $(this).attr("href");
        $("html, body").animate({scrollTop: $(target).offset().top+"px"});
        return false;
    });
    /* slider */
    $(".reviews_list").owlCarousel({
        items: 1,
        loop: true,
        smartSpeed: 300,
        mouseDrag: false,
        pullDrag: false,
        nav: true,
        navText: ""
    });
});