$(document).ready((function () {
    // function t(t) {
    //     return "<span>" + (t = ("00" + t).substr(-2))[0] + "</span><span>" + t[1] + "</span>"
    // }

    $("a[href^='#']").click((function () {
        var t = $(this).attr("href");
        return $("html, body").animate({scrollTop: $(t).offset().top + "px"}), !1
    }));
}));
