$(document).ready(function() {
    /* scroll */
	$("a[href^='#']").click(function(){
		var _href = $(this).attr("href");
		$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		return false;
	});
	$('.recall__card').slick({
		arrows: false,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		variableWidth:true,
		draggable: false,
		responsive: [
		  {
			breakpoint: 960,
			settings: {
				dots: true,
				autoplay: false,
				fade: false,
				arrows: true,
			  	slidesToShow: 2,
				slidesToScroll: 1,
			}
		  },
		  {
			breakpoint: 640,
			settings: {
				centerPadding: '0',
				arrows: true,
				dots: true,
				autoplay: false,
				centerMode: true,
			  	slidesToShow: 1,
				slidesToScroll: 1,
			}
		  }
		]
	});
});
