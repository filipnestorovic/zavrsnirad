$(window).load(function () {
    $('.bx-slider').bxSlider({
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 5,
        adaptiveHeight: true,
        touchEnabled: true,
        infiniteLoop: true
    });
});

$(document).ready(function () {
    $('.toform').click(function () {
        $("html, body").animate({scrollTop: $(".order__form").offset().top}, 700);
        return false;
    });

    // var _currentDate = new Date();
    // var count = 74; // 8 hours
    // var _toDate = new Date(_currentDate.getFullYear(), _currentDate.getMonth(), _currentDate.getDate(), _currentDate.getHours(), _currentDate.getMinutes() + count, 1);
    //
    //   $('.timer').countdown({
    //       until: _toDate,
    //       format: 'HMS',
    //       compact: true,
    //       layout: $('.timer').html()
    //
    //   }).removeClass('hidden');

});

