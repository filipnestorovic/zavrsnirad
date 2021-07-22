$(document).ready(function() {

    //smal-scroll
    // $('a[href*="#scroll-"]:not([href="#"])').click(function() {
    //     if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
    //         var t = $(this.hash);
    //         if (t = t.length ? t : $("[name=" + this.hash.slice(1) + "]"),
    //             t.length)
    //             return $("html, body").animate({
    //                 scrollTop: t.offset().top
    //             }, 1e3),
    //                 !1
    //     }
    // }),

    //mobile menu
    $("#menu").slicknav({
        prependTo: ".menu__mobile",
        label: "Menu",
        'closeOnClick': true
    });

    // $('.slicknav_nav .menu__item').click(function(evt) {
    // 	evt.preventDefault();
    // });

});

//slider
$(document).ready(function() {
    $(".slider-reviews").owlCarousel({
        items: 1,
        loop: !0,
        margin: 10,
        nav: !0,
        dots: false,
        navContainerClass: "reviews-slider__arrows",
        navClass: ["arrow--left-w", "arrow--right-w"]
    }),

        $(".product-gallery").owlCarousel({
            items: 1,
            loop: !0,
            margin: 10,
            nav: !0,
            dots: false,
            navText: '',
            URLhashListener: !0,
            startPosition: "photo-one",
            navContainerClass: "product-gallery__arrows",
            navClass: ["arrow--left", "arrow--right"]
        }),

        $(".header-slider").owlCarousel({
            items: 1,
            loop: !0,
            margin: 10,
            autoplay: true,
            dots: false,
            autoplayTimeout: 4000,
        });
});

// $(document).ready(function(){
//
//     $('.feedback').click(function() {
//         $('.popup-window').removeClass('hidden');
//     });
//     $('.close-popup').click(function() {
//         $('.popup-window').addClass('hidden');
//     });
//     $('body').click(function(evt){
//         if ((!evt.target.closest('.popup-window'))&&(!evt.target.closest('.feedback'))) {
//             $('.popup-window').addClass('hidden');
//         }
//     });
//
// });

// (function (m, e, t, r, i, k, a) {
//     m[i] = m[i] || function () {
//         (m[i].a = m[i].a || []).push(arguments)
//     };
//     m[i].l = 1 * new Date();
//     k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
// })
// (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
// ym(78915415, "init", {
//     clickmap: true,
//     trackLinks: true,
//     accurateTrackBounce: true,
//     webvisor: true
// });