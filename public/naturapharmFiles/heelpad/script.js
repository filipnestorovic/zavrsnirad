
$(document).ready(function () {
    JS.init();
});

var isMobile = {
    Android: function () {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

var JS = {
    clickEvent: '',
    hoverEvent: '',

    init: function () {
        JS.clickEvent = isMobile.any() ? 'touchstart' : 'click';
        JS.hoverEvent = isMobile.any() ? 'touchstart' : 'hover';

        JS.faqToggle();

        var $page = $('html, body');
        $('.top_menu a[href*="#"]').click(function () {
            $page.animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 400);
            return false;
        });

        JS.bounce();
    },

    faqToggle: function () {
        $('body').on('click', '.faq_title', function () {
            var box = $(this).parents('.faq_item');
            if (box.hasClass('open')) {
                box.removeClass('open')
                    .find('.faq_answer').slideUp();
            } else {
                box.addClass('open')
                    .find('.faq_answer').slideDown();
            }
        });
    },

    bounce: function () {
        $('.btn_green').addClass('bounce');

        setTimeout(function () {
            $('.btn_green').removeClass('bounce');
        }, 1000);
        setTimeout(JS.bounce, 5000);
    }
};
