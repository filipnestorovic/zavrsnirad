$(document).ready(function(e) {

    $('.toform').click(function() {
        $("html, body").animate({
            scrollTop: $(".order_button").offset().top - 300
        }, 700);
        return false;
    });

});
