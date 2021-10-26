$(function(){
    $('.slider-cont').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        adaptiveHeight: false,
        dots: false,
        arrows: true,
        fade: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
        nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>'
    });

    $('.after-slider').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        adaptiveHeight: false,
        dots: false,
        arrows: false,
        fade: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.rev-block-v1 .rev-cont').slick({
        infinite: true,
        autoplay: false,
        adaptiveHeight: true,
        dots: true,
        arrows: true,
        fade: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
        nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>'
    });

    $('.rev-block-v3 .rev-cont').slick({
        infinite: true,
        autoplay: false,
        adaptiveHeight: true,
        dots: true,
        arrows: true,
        fade: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
        nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>'
    });

    $('.rev-block-v4 .rev-cont').slick({
        infinite: true,
        autoplay: false,
        adaptiveHeight: true,
        dots: true,
        arrows: true,
        fade: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<span data-role="none" class="slick-prev animate" aria-label="Previous" tabindex="0" role="button"></span>',
        nextArrow: '<span data-role="none" class="slick-next animate" aria-label="Next" tabindex="0" role="button"></span>'
    });

});
