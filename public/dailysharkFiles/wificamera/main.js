$(document).ready(function(){

    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 600);
        return false;
    });

    $('.reviews').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        adaptiveHeight: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1119,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 660,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.btn').addClass('autoink').append('<div class="ink animate" style="height: 200px;width: 250px;top: -20px;left: -140px;"></div>');

});
