$(document).on('ready', function () {

	var $form = $('.js-form');

	$('.owl-carousel').owlCarousel({
		loop: true,
		margin: 10,
		nav: true,
		items: 1,
		dots: false
	});

});
$(function () {
    $('.js-scroll-to').on('click touchstart', function (e) {

        $("html, body").animate({scrollTop: $('form').offset().top}, 700);

    });
});