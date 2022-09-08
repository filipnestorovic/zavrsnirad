$(document).ready(function(){

    // $('[name="country"]').on('change', function() {
    //     var geoKey = $(this).find('option:selected').val();
    //     var data = $jsonData.prices[geoKey];
    //     var price = data.price;
    //     var oldPrice = data.old_price;
    //     var currency = data.currency
    //     $("[value = "+geoKey+"]").attr("selected", true).siblings().attr('selected', false);
    //
    //     $('.price_land_s1').text(price);
    //     $('.price_land_s2').text(oldPrice);
    //     $('.price_land_curr').text(currency);
    // });

    $('a[href^="#"]').click(function (){
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated), body:not(:animated)").animate({scrollTop: destination}, 800);
        return false;
    })

    $('.gallery').slick({
        dots: false,
        infinite: true,
        speed: 200,
        fade: true,
        cssEase: 'linear',
        autoplay: true
    });


    $('.reviews').slick({
        dots: false,
        infinite: true,
        speed: 200,
        fade: false,
        cssEase: 'linear',
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 5000
    });


});
