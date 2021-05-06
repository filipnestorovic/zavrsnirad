$(document).ready(function () {

    $(function () {
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            nav: true
        });

        $(".owl-prev").empty();
        $(".owl-next").empty();
    });

    // $(function(){
    //
    //     $('[data-original]').each(function(){
    //
    //         var src = $(this).data('original');
    //
    //         $(this).attr('src', src)
    //
    //     })
    //
    // })


});
