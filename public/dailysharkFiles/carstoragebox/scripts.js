$(document).ready(function() {
	// /* scroll */
    //
	// $("a[href^='#']").click(function(){
	// 	var _href = $(this).attr("href");
	// 	$("html, body").animate({scrollTop: $(_href).offset().top+"px"});
	// 	return false;
	// });

    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    })

    $('.prim').slick({
        dots: false,
        infinite: true,
        speed: 200,
        fade: true,
        cssEase: 'linear'
    });
    $('.rewiews').slick({
        dots: false,
        infinite: true,
        speed: 200,
        fade: true,
        cssEase: 'linear'
    });

    // $('.rewiew-mobile').slick({
    //     dots: false,
    //     infinite: true,
    //     speed: 200,
    //     fade: true,
    //     cssEase: 'linear',
    //     autoHeight: false,
    // });
    // $('.rewiew-tablet').slick({
    //     dots: false,
    //     infinite: true,
    //     speed: 200,
    //     fade: true,
    //     cssEase: 'linear'
    // });

    // $('.reviews').slick({
    //     dots: true,
    //     infinite: true,
    //     speed: 500,
    //     fade: false,
    //     cssEase: 'linear'
    // });

});
