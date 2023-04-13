$(document).ready(function() {

	/* scroll */

	$("a[href^='#']").click(function(){
		var _href = $(this).attr("href");
		$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
		return false;
	});

	/* sliders */

	$(".owl-carousel").owlCarousel({
		items: 1,
		loop: true,
		smartSpeed: 300,
		mouseDrag: false,
		pullDrag: false,
		dots: false,
		nav: true,
		navText: ""
	});

	/* vote */

	var voice_count = $(".voice_count b").text().replace(/\D/g,"");
	$(".question_item").one("click", function(){
		$(".questions_list").addClass("active");
		voice_count++;
		$(".questions_list").children().each(function(){
			var percents = parseInt($(this).find(".percents").text().replace(/\D/g,""), 10);
			$(this).find(".value").text((Math.round(voice_count * percents / 100)+"").replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 "));
            $(this).find(".line").animate({width: percents + "%"}, 700);
		});
		$(".voice_count b").text((voice_count+"").replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 "));
		$.cookie("voice_cookie", voice_count);
	});
	if ($.cookie("voice_cookie") != null) {
        voice_count = $.cookie("voice_cookie")-1;
        $(".question_item:eq(0)").click();
    }

});
