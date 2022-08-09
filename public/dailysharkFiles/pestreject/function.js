$( document ).ready(function() {

    //  ============= //
    // Burger
    //  ============= //

    $('.btn-burger').on('click', function (e) {
        e.preventDefault()
        $(this).toggleClass('open')
        $('.header .header-content').toggleClass('open')

    })

    $(".nav li a, .main, .footer").click(function(){
        $('.btn-burger').removeClass('open')
        $('.header .header-content').removeClass('open')
    });

    /*$(document).scroll(function(){
        $('.btn-burger').removeClass('open')
        $('.header .header-content').removeClass('open')
    });*/

    // smooth scroll
    $("a[href*='#']:not([href='#'])").click(function(e) {
        e.preventDefault();
        var hash = this.hash;
        var section = $(hash);

        if (hash) {
            $('html, body').animate({
                scrollTop: section.offset().top - 50
            }, 2000, 'swing');
        }
    });

    // grab the initial top offset of the navigation
    var stickyNavTop = $('body').offset().top;

    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop(); // our current vertical position from the top

        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scrollTop > stickyNavTop) {
            $('.header').addClass('sticky');
        } /*else {
         $('.header').removeClass('sticky');
     }*/
    };

    stickyNav();
    // and run it again every time you scroll
    $(window).scroll(function() {
        stickyNav();
    });

    /* vote */

    var voice_count = $(".voice_count b").text().replace(/\D/g,"");
    $(".question_item").one("click", function(){
        $(".questions_list").addClass("active");
        voice_count++;
        $(".questions_list").children().each(function(){
            var percents = parseInt($(this).find(".percents").text().replace(/\D/g,""), 10);
            $(this).find(".value").text((Math.round(voice_count * percents / 100)+"").replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 "));
            $(this).find(".line").animate({width: percents + "%"}, 600);
        });
        $(".voice_count b").text((voice_count+"").replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, "$1 "));
        $.cookie("voice_cookie", voice_count);
    });
    // if ($.cookie("voice_cookie") != null) {
    //     voice_count = $.cookie("voice_cookie")-1;
    //     $(".question_item:eq(0)").click();
    // }


}); // end jquery
