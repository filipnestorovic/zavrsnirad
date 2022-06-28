$(document).ready(function() {

    /* scroll */

    $("a[href^='#']").click(function(){
        var target = $(this).attr("href");
        $("html, body").animate({scrollTop: $(target).offset().top+"px"});
        return false;
    });

    /* sliders */

    $(".reviews_list").owlCarousel({
        smartSpeed: 300,
        mouseDrag: false,
        pullDrag: false,
        dots: false,
        navText: "",
        responsive: {
            0: {
                items: 1,
                margin: 0,
                nav: true,
                loop: true
            },
            640: {
                items: 2,
                margin: 20,
                nav: true,
                loop: true
            },
            960: {
                items: 3,
                margin: 20,
                nav: false,
                loop: false
            }
        }
    });

    $('img.panorama').panorama();

    /* Фиксация меню при прокрутке */
    $('.header-menu-wrp')
        .addClass('original')
        .clone()
        .insertAfter('.header-menu-wrp')
        .addClass('cloned')
        .removeClass('original');

    function resizeMenu(){
        var $original = $('.header-menu-wrp.original');
        var $cloned = $('.header-menu-wrp.cloned');

        if ($(window).scrollTop() >= ($original.offset().top)){
            $cloned.css({
                'top': 0,
                'width': $original.css('width'),
                'display': 'block',
                'left': $original.offset().left+'px'
            });
            $original.css('visibility', 'hidden');
        } else {
            $cloned.css('display', 'none');
            $original.css('visibility', 'visible');
        }
    }

    $(window).scroll(function(){
        resizeMenu();
    });

    $(window).resize(function(){
        resizeMenu();
    });

    /* Выделение активных пунктов меню */
    var last_id;
    var $top_menu = $('.header-menu-wrp.cloned');
    var menu_height = $top_menu.outerHeight(true);
    var $menu_items = $top_menu.find('a');
    var $scroll_items = $menu_items.map(function(){
        var item = $($(this).attr('href'));
        if (item.length){
            return item;
        }
    });

    $menu_items.click(function(e){
        var href = $(this).attr('href'),
            offset_top = href === '#' ? 0 : $(href).offset().top - menu_height;
        $('html, body').stop().animate({
            scrollTop: offset_top
        }, 300);
        e.preventDefault();
    });

    $(window).scroll(function(){
        var from_top = $(this).scrollTop() + menu_height;
        var mar = parseInt($top_menu.css('margin-bottom'));
        var cur = $scroll_items.map(function(){
            if ($(this).offset().top < from_top + mar){
                return this;
            }
        });
        cur = cur[cur.length - 1];
        var id = cur && cur.length ? cur[0].id : '';
        if (last_id !== id){
            last_id = id;
            $menu_items.parent()
                .removeClass('active')
                .end()
                .filter("[href='#" + id + "']")
                .parent()
                .addClass('active');
        }
    });

});
