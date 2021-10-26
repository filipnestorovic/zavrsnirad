$(document).ready(function () {
    $('.opinions-carousel').slick({
        centerMode: true,
        centerPadding: '250px',
        slidesToShow: 1,
        arrows: false,
        dots: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                centerMode: false,
                dots: true
            }
        }]
    });
    $('.box-banner-carousel').slick({
        adaptiveHeight: true,
        dots: false,
        arrows: false,
        slidesToShow: 3,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            }
        }]
    });
    //mobile menu
    $("#navMenu .mobile-menu").click(function() {
        if(!$("#navMenu ul.menu li").is(":visible")) {
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
        if (event.target.closest('#navMenu')) {
            $("#navMenu ul.menu li").slideUp("fast", function() {
                $("#navMenu ul.menu li").removeAttr("style");
                $("#navMenu .mobile-menu").removeClass("is-active");
                $("#navMenu").removeClass("open");
            });
        }
        var jump = $(this).attr('href');
        var new_position = $(jump).offset();
        $('html, body').stop().animate({ scrollTop: new_position.top }, 500);
    });
});