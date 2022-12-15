$(document).ready(function () {

    $('.owl-carousel').owlCarousel();

    $('[data-toggle="scroll"]').on("click", function (e) {
        var anchor = $(this).attr("data-id");
        var bodyLeft = $("body").css("left");
        if (bodyLeft == "200px") {
            $("body").animate({
                left: "-=200px"
            }, 500);
        }
        $('html, body').stop().animate({
            scrollTop: $(anchor).offset().top
        }, 1000);
        e.preventDefault();
    });

    $('.feed-nav li').click(function (eventObject) {
        (function (_p) {
            $('.feed-nav li').removeClass('nav-active');
            $('.feed-body.active').stop().fadeTo(50, 1, function () {
                $(this).hide().removeClass('active');
                $('.feed-body').filter('#' + _p.attr("class")).addClass('active').fadeTo(50, 1);
                _p.addClass('nav-active');
            });
        })($(this));
        return false;
    });

    $('.feed-nav li').each(function (i, v) {
        $('<div>').attr('id', $(v).attr('class'));
    });

    $('.feed-round li').click(function (eventObject) {
        (function (_p) {
            $('.feed-round li').removeClass('nav-active');
            $('.feed-body.active').stop().fadeTo(50, 1, function () {
                $(this).hide().removeClass('active');
                $('.feed-body').filter('#' + _p.attr("class")).addClass('active').fadeTo(50, 1);
                _p.addClass('nav-active');
            });
        })($(this));
        return false;
    });
    $('.feed-round li').each(function (i, v) {
        $('<div>').attr('id', $(v).attr('class'));
    });

    $('.feed-next').click(function () {

        $textActive = $('.feed-body.active');
        if ($textActive.size() == 0) {
            $textActive = $('.feed-body:last');
        }
        $textActive.stop(true, true).fadeTo(5, 0).removeClass('active');
        if ($textActive.next().size() == 1) {
            $textActive = $textActive.next();
        } else {
            $textActive = $('.feed-body:first');
        }
        $textActive.stop(true, true).fadeTo(0, 1).addClass('active');

        $liActive = $('.feed-round li.nav-active');
        if ($liActive.size() == 0) {
            $liActive = $('.feed-round li:last');
        }
        $liActive.stop(true, true).removeClass('nav-active');
        if ($liActive.next().size() == 1) {
            $liActive = $liActive.next();
        } else {
            $liActive = $('.feed-round li:first');
        }
        $liActive.stop(true, true).addClass('nav-active');
        return false;
    });

    $('.feed-prev').click(function () {

        $textActive = $('.feed-body.active');
        $textActive.stop(true, true).fadeTo(5, 0).removeClass('active');
        if ($textActive.prev('.feed-body').size() == 0 ) {
            $textActive = $textActive.prev();
        } else {
            $textActive = $('.feed-body:last');
        }
        $textActive.stop(true, true).fadeTo(0, 1).addClass('active');

        $liActive = $('.feed-round li.nav-active');
        $liActive.stop(true, true).removeClass('nav-active');
        if ($liActive.prev('.feed-round li').size() == 1) {
            $liActive = $liActive.prev();
        } else {
            $liActive = $('.feed-round li:last');
        }
        $liActive.stop(true, true).addClass('nav-active');
        return false;
    });

    $('.take-round li').click(function (eventObject) {
        (function (_p) {
            $('.take-round li').removeClass('nav-active');
            $('.take-block-list li.active').stop().fadeTo(50, 1, function () {
                $(this).hide().removeClass('active');
                $('.take-block-list li').filter('#' + _p.attr("class")).addClass('active').fadeTo(50, 1);
                _p.addClass('nav-active');
            });
        })($(this));
        return false;
    });
    $('.take-round li').each(function (i, v) {
        $('<li>').attr('id', $(v).attr('class'));
    });


    $('.take-next').click(function () {

        $textActive = $('.take-block-list li.active');
        if ($textActive.size() == 0) {
            $textActive = $('.take-block-list li:last');
        }
        $textActive.stop(true, true).fadeTo(5, 0).removeClass('active');
        if ($textActive.next().size() == 1) {
            $textActive = $textActive.next();
        } else {
            $textActive = $('.take-block-list li:first');
        }
        $textActive.stop(true, true).fadeTo(0, 1).addClass('active');

        $liActive = $('.take-round li.nav-active');
        if ($liActive.size() == 0) {
            $liActive = $('.take-round li:last');
        }
        $liActive.stop(true, true).removeClass('nav-active');
        if ($liActive.next().size() == 1) {
            $liActive = $liActive.next();
        } else {
            $liActive = $('.take-round li:first');
        }
        $liActive.stop(true, true).addClass('nav-active');
        return false;
    });

    $('.take-prev').click(function () {

        $textActive = $('.take-block-list li.active');
        $textActive.stop(true, true).fadeTo(5, 0).removeClass('active');
        if ($textActive.prev('.take-block-list li').size() == 1) {
            $textActive = $textActive.prev();
        } else {
            $textActive = $('.take-block-list li:last');
        }
        $textActive.stop(true, true).fadeTo(0, 1).addClass('active');

        $liActive = $('.take-round li.nav-active');
        $liActive.stop(true, true).removeClass('nav-active');
        if ($liActive.prev('.take-round li').size() == 1) {
            $liActive = $liActive.prev();
        } else {
            $liActive = $('.take-round li:last');
        }
        $liActive.stop(true, true).addClass('nav-active');
        return false;
    });


    $('.feed-desc .rew-click').click(function () {
        $('.feed-desc').css('display', 'none');
        $('.feed-video').css('display', 'block');
    });
    $('.feed-video .rew-click').click(function () {
        $('.feed-desc').css('display', 'block');
        $('.feed-video').css('display', 'none');
    });

});
