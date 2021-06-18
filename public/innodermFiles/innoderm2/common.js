$(function() {
    var user = detect.parse(navigator.userAgent);
    console.log(
        user.browser.family
    );
    if (user.browser.family != 'IE' && user.browser.family != 'Edge') {
        if ($(window).width() > 991) {
            var rellax = new Rellax('.parallax', {
                center: false,
                wrapper: null,
                round: true,
                vertical: true,
                horizontal: false
            });
        }
    };
    
    $('.pre_toform').click(function () {
        $("html, body").animate({scrollTop: $('#order_form').offset().top - 100}, 1000);
        return false;
    });

    $('.progress__slider').slick({
        adaptiveHeight: true,
        arrows: true,
        dots: false,
        infinite: false,
        centerMode: true,
        centerPadding: '20px',
        //cssEase: 'linear',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                    centerPadding: '0px',
                }
            },
        ]
    });

    var flag = 0;
    if (window.innerWidth <= 991 && flag === 0) {
        flag = 1;
        $('.reviews__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            dots: false,
            fade: true,
            adaptiveHeight: true,
        });

    };
    $(window).on('resize', function (event) {
        if (event.target.innerWidth <= 991 && flag === 0) {
            flag = 1;
            $('.reviews__slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: false,
                fade: true,
                adaptiveHeight: true,
            });

        }
        else if (event.target.innerWidth > 991 && flag === 1) {
            flag = 0;
            $('.reviews__slider').slick('unslick');
        }
    });

});
