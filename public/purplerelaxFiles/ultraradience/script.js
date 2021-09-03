"use strict";
function _extends() {
    return (_extends =
        Object.assign ||
        function (e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r]);
            }
            return e;
        }).apply(this, arguments);
}
function _typeof(e) {
    "@babel/helpers - typeof";
    return (_typeof =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
            ? function (e) {
                return typeof e;
            }
            : function (e) {
                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e;
            })(e);
}
console.log("CTR_IMG_LAZY_LOADER"),
    (window.CTR_IMG_LAZY_LOADER = new Blazy({
        loadInvisible: !0,
        src: "data-ctr-lazy-src",
        selector: ".ctr-lazy-image",
        breakpoints: [
            { width: 768, src: "data-ctr-lazy-mobile-src" },
            { width: 1024, src: "data-ctr-lazy-tablet-src" },
        ],
        success: function (e) {},
        error: function (e) {
            console.log("load image error", e.getAttribute("data-ctr-lazy-src")), e.setAttribute("src", e.getAttribute("data-ctr-lazy-src"));
        },
    })),
    window.addEventListener("load", function () {
        window.CTR_IMG_LAZY_LOADER.revalidate();
    });
for (
    var props = {
            iz8y: {
                addToCartEventName: "AddToCart",
                ctr__pageConfig: {
                    declineUrl: "https://www.ultraradianceskin.com/en/decline.html",
                    successUrl: "https://www.ultraradianceskin.com/en/success.html",
                    checkoutUrl: "https://www.ultraradianceskin.com/en/order-list.html",
                    confirmUrl: "https://www.ultraradianceskin.com/en/confirm.html",
                    cid: "e1ec116b-04c6-4301-9475-6f6fdaa5be9d",
                    gtmID: null,
                    crmEndpoint: "https://sales-prod.tryemanagecrm.com/api",
                    websaleApiUrl: "https://sales-prod.tryemanagecrm.com/api",
                    fpUserInfoGetCode: "hjQxSRcBk48Gii/2xmzwb2d08D1sazWO3qzOLwiRwndnSQ3w9zNITw==",
                    fpUserInfoPostCode: "hjQxSRcBk48Gii/2xmzwb2d08D1sazWO3qzOLwiRwndnSQ3w9zNITw==",
                    webKey: "9C4ABE3D-06B9-4150-B17F-9DEBAFEDCA38",
                    offerName: "Ultra Radiance EN 89 List",
                    offerId: 17,
                    sourceConfig: { source: null },
                },
            },
        },
        ids = Object.keys(props)
            .map(function (e) {
                return "#" + e;
            })
            .join(","),
        i = 0,
        len = (els = document.querySelectorAll(ids)).length;
    i < len;
    i++
) {
    var el = els[i];
    (function (e) {
        try {
            var t = e.addToCartEventName,
                n = e.ctr__pageConfig,
                r = e.ctrwowPackageVersion;
            (window.__ctrPageConfiguration = n),
            r && r.length && (window.__ctrwowPackageVersion = r),
                (function (n) {
                    if (n) {
                        var r = window.ctrwowUtils;
                        r.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/pubsub-js/1.7.0/pubsub.min.js"]).then(function () {
                            var t = document.querySelector(".ctr_wow_body");
                            t.addEventListener("keyup", function e() {
                                r.tracking.pushGtmTrackingEvent(n), t.removeEventListener("keyup", e), window.PubSub && window.PubSub.unsubscribe("show-exit-popup");
                            });
                        });
                    }
                })(t);
        } catch (e) {
            console.log(e);
        }
    }.bind(el)(props[el.id]));
}
for (i = 0, len = (items = document.querySelectorAll("#io1kwf4")).length; i < len; i++)
    (function () {
        var e,
            t = this,
            n = [],
            r = t.getAttribute("url"),
            i = t.getAttribute("box-title");
        function o(e) {
            return new RegExp(/({\[(\s|\S)*?\]})/g).test(e);
        }
        if (i && i.length)
            document.querySelectorAll('[title="' + i + '"]').forEach(function (e) {
                n.push(e), (e.dataset.title = e.getAttribute("title")), e.removeAttribute("title");
            });
        else if (o(r) || (r && ((e = r), new RegExp(/[-a-zA-Z0-9@:%_\+.~#?&\/\/=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)?/gi).test(e)))) {
            var a = document.querySelectorAll("a");
            if (!a.length) return;
            var s = void 0;
            for (s = 0; s < a.length; s++) {
                var c = new RegExp(r, "gi"),
                    l = decodeURI(a[s].href);
                o(r) && (c = new RegExp(r.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&"), "gi")), l.match(c) && !a[s].closest(".sticky-bar") && a[s].hasAttribute("call-to-action") && n.push(a[s]);
            }
        }
        function d() {
            n.some(function (e) {
                return (n = (t = e.getBoundingClientRect()).top), (r = t.bottom), (i = t.width), (o = t.height), (a = window.innerHeight || document.documentElement.clientHeight), (0 < n || 0 < r) && n < a && 0 < i && 0 < o;
                var t, n, r, i, o, a;
            })
                ? !t.classList.contains("hidden") && t.classList.add("hidden")
                : t.classList.contains("hidden") && t.classList.remove("hidden");
        }
        setTimeout(function () {
            d();
            var e = (window["__ctrStickyBarScrollEvent__" + t.id] = d);
            window.addEventListener("scroll", e);
        }, 500);
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#isfxvie")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#idkx")).length; i < len; i++)
    (function () {
        if ((console.log("run - onInitPage - onInitPage"), window.ctrwowUtils)) {
            var e = window.ctrwowUtils;
            if (e.isPreviewMode() || e.isBuilderMode()) return e.addCommonLinkHandler(), e.addCommonImageHandler(), void e.addCommonTextHandler();
            $(document).ready(function () {
                e.addCommonLinkHandler(), e.addCommonImageHandler(), e.addCommonTextHandler();
            });
        }
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i5zdbcs")).length; i < len; i++)
    (function () {
        try {
            var e;
            try {
                e = {
                    dkItems: "4",
                    tbItems: "3",
                    mbItems: "1",
                    dkScrollItems: "1",
                    tbScrollItems: "1",
                    mbScrollItems: "1",
                    sliderMode: "default",
                    slideType: "syncing",
                    dkItemsPerRow: "4",
                    tbItemsPerRow: "4",
                    mbItemsPerRow: "4",
                    arrows: "",
                    thumbArrows: "",
                    infinite: "",
                    bullets: "",
                    fade: "true",
                    autoplay: "",
                    adaptiveHeight: "",
                    makeArrowCenter: "",
                    initUnder: "99999",
                    initialSlide: "",
                    centerPadding: "0",
                    slideSpeed: "500",
                    bulletsColor: "gray",
                    bulletActiveColor: "black",
                    bulletsSize: "10px",
                    dkRows: "1",
                    tbRows: "1",
                    mbRows: "1",
                };
            } catch (e) {
                console.log(e);
            }
            if (window.ctrDebug && window.ctrDebug.run(this, "widget-slider", e)) return !0;
            (function (n) {
                var r = {};
                function i(e) {
                    if (r[e]) return r[e].exports;
                    var t = (r[e] = { i: e, l: !1, exports: {} });
                    return n[e].call(t.exports, t, t.exports, i), (t.l = !0), t.exports;
                }
                return (
                    (i.m = n),
                        (i.c = r),
                        (i.d = function (e, t, n) {
                            i.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n });
                        }),
                        (i.r = function (e) {
                            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                        }),
                        (i.t = function (t, e) {
                            if ((1 & e && (t = i(t)), 8 & e)) return t;
                            if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
                            var n = Object.create(null);
                            if ((i.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                                for (var r in t)
                                    i.d(
                                        n,
                                        r,
                                        function (e) {
                                            return t[e];
                                        }.bind(null, r)
                                    );
                            return n;
                        }),
                        (i.n = function (e) {
                            var t =
                                e && e.__esModule
                                    ? function () {
                                        return e.default;
                                    }
                                    : function () {
                                        return e;
                                    };
                            return i.d(t, "a", t), t;
                        }),
                        (i.o = function (e, t) {
                            return Object.prototype.hasOwnProperty.call(e, t);
                        }),
                        (i.p = ""),
                        i((i.s = 0))
                );
            })([
                function (e, t, n) {
                    function r(e, t) {
                        if (
                            (void 0 === window.definedWidgetCSlider &&
                            (window.definedWidgetCSlider = function () {
                                var n,
                                    r = $(window),
                                    i = "onorientationchange" in window ? "orientationchange.resizecslider" : "resize.resizecslider";
                                function o(e) {
                                    (this.element = $(e)), this.initWidget();
                                }
                                (o.prototype = {
                                    initWidget: function () {
                                        var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {},
                                            t = this;
                                        (this.options = $.extend({}, $.fn.cslider.defaults, JSON.parse(this.element.attr("data-".concat("cslider"))), e)),
                                            (this.handle = this.element.find(this.options.handle)),
                                        this.handle.is(":visible") &&
                                        (this.options.initUnder
                                            ? r.width() < this.options.initUnder
                                                ? (this.element.removeClass("wrap-no-slide"), this.handle.removeClass("no-slide"), this.initialize())
                                                : (this.element.addClass("wrap-no-slide"), this.handle.addClass("no-slide"))
                                            : this.initialize(),
                                            r.off(i).on(i, function () {
                                                n && clearTimeout(n), (n = setTimeout(t.reRenderSlide, 600));
                                            }),
                                            this.listener());
                                    },
                                    listener: function () {
                                        this.zoomInEvent();
                                    },
                                    zoomInEvent: function () {
                                        var t = this.element.find(".zoomin");
                                        if (0 !== t.length && this.element.closest(".widget-slider").attr("popup-class")) {
                                            var n = "." + this.element.closest(".widget-slider").attr("popup-class");
                                            t.off("click.zoomIn").on("click.zoomIn", function () {
                                                var e = $(t).index($(this));
                                                $(n).find(".ctrwow-modal").addClass("show"),
                                                    $(n).find(".widget-slider").show(),
                                                    $(n).find(".ctrwow-modal").css("pointer-events", "none"),
                                                    $(n).find(".ctrwow-modal-content").css("pointer-events", "auto"),
                                                    $(n).find("[data-cslider]").cslider("initWidget", { initialSlide: e }),
                                                    $(n).addClass("show-popup-slide");
                                            }),
                                                $(n)
                                                    .find(".zoomout")
                                                    .off("click.zoomOut")
                                                    .on("click.zoomOut", function () {
                                                        $(n).find("[data-cslider]").cslider("destroy"), $(n).find(".widget-slider").hide(), $(n).find(".ctrwow-modal").removeClass("show"), $(n).removeClass("show-popup-slide");
                                                    }),
                                                $(n)
                                                    .off("click.zoomOutPopup")
                                                    .on("click.zoomOutPopup", function (e) {
                                                        $(e.target).hasClass("popup-slide") &&
                                                        ($(n).find("[data-cslider]").cslider("destroy"), $(n).find(".widget-slider").hide(), $(n).find(".ctrwow-modal").removeClass("show"), $(n).removeClass("show-popup-slide"));
                                                    });
                                        }
                                    },
                                    reRenderSlide: function () {
                                        $("[data-cslider]").each(function () {
                                            $(".slick", this).is(":visible") &&
                                            ($(this).find(".slick-track > .slick-list").remove(),
                                                $(this).data().cslider.options.initUnder
                                                    ? r.width() < $(this).data().cslider.options.initUnder
                                                    ? ($(".slick", this).removeClass("no-slide"),
                                                        $(this).removeClass("wrap-no-slide"),
                                                        $(".slick", this).hasClass("slick-initialized") ? $(this).cslider("setPositionArrows") : $(this).cslider("initWidget"))
                                                    : $(".slick", this).hasClass("slick-initialized") && ($(".slick", this).addClass("no-slide"), $(this).addClass("wrap-no-slide"), $(this).cslider("destroy"))
                                                    : window.ctrwowUtils.isBuilderMode()
                                                    ? ($(this).cslider("destroy"), $(this).cslider("initWidget"))
                                                    : ($(this).cslider("setPositionArrows"), $(this).cslider("slickNoSlide"), $(".slick", this).hasClass("no-slide") && ($(this).cslider("destroy"), $(this).cslider("initWidget"))));
                                        });
                                    },
                                    initialize: function () {
                                        this.element.find(".slick").find("img").length ? this.checkImgLoad() : this.initSlider();
                                    },
                                    checkImgLoad: function () {
                                        var e = this,
                                            t = this.element.find(".slick").find("img").first().attr("data-ctr-lazy-src");
                                        t || (t = this.element.find(".slick").find("img").first().attr("src")),
                                            $("<img />")
                                                .attr("src", t)
                                                .css("display", "none")
                                                .on("load.cslider", function () {
                                                    e.initSlider();
                                                })
                                                .on("error.cslider", function () {
                                                    e.initSlider();
                                                });
                                    },
                                    updateSetting: function () {
                                        var e = {},
                                            t = [];
                                        if (
                                            (void 0 !== this.options.desktopItems && (e = $.extend(e, { slidesToShow: this.options.desktopItems, rows: this.options.dkRows || 1, slidesToScroll: this.options.dkScrollItems || 1 })),
                                            void 0 !== this.options.tabletItems || void 0 !== this.options.mobileItems)
                                        ) {
                                            if (void 0 !== this.options.tabletItems) {
                                                var n = { breakpoint: 992, settings: { slidesToShow: this.options.tabletItems, rows: this.options.tbRows || 1, slidesToScroll: this.options.tbScrollItems || 1 } };
                                                t.push(n);
                                            }
                                            if (void 0 !== this.options.mobileItems) {
                                                var r = { breakpoint: 576, settings: { slidesToShow: this.options.mobileItems, rows: this.options.mbRows || 1, slidesToScroll: this.options.mbScrollItems || 1 } };
                                                t.push(r);
                                            }
                                            e = $.extend(e, { responsive: t });
                                        }
                                        return e;
                                    },
                                    initSlider: function () {
                                        var e,
                                            t,
                                            n = this,
                                            r = {};
                                        switch (this.options.type) {
                                            case "normal":
                                                e = $.extend({}, this.options.normal, this.updateSetting());
                                                break;
                                            case "syncing":
                                                (r.asNavFor = this.options.navFor), (e = this.options.view ? $.extend({}, this.options.normal, r) : $.extend({}, this.options.normal, { focusOnSelect: !0 }, r, this.updateSetting()));
                                                break;
                                            default:
                                                e = this.options.normal;
                                        }
                                        if (
                                            ((e = $.extend(e, {
                                                dots: this.options.dots,
                                                arrows: this.options.arrows,
                                                fade: this.options.fade,
                                                infinite: this.options.infinite,
                                                adaptiveHeight: this.options.adaptiveHeight,
                                                prevArrow: this.options.prevArrow,
                                                nextArrow: this.options.nextArrow,
                                                arrowWrapper: this.options.arrowWrapper,
                                                appendDots: this.options.dotWrapper,
                                                initialSlide: this.options.initialSlide,
                                                speed: this.options.slideSpeed,
                                            })),
                                            this.options.autoplay && (e = $.extend(e, { autoplay: !0, pauseOnHover: !0, autoplaySpeed: 3e3 })),
                                            "verticalmode" === this.options.sliderMode && (e = $.extend(e, { vertical: !0, verticalSwiping: !0 })),
                                            "centermode" === this.options.sliderMode)
                                        ) {
                                            var i = { centerMode: !0, centerPadding: this.options.centerPadding ? this.options.centerPadding : 0 };
                                            e = $.extend(e, i);
                                        }
                                        (window._wq = window._wq || []),
                                            this.handle.on("init", function () {
                                                n.handle.find(".slick-track > .slick-list").remove(),
                                                    $(".slick-current", n.element).find(".w_wistia").length
                                                        ? window._wq.push({
                                                            id: $(".slick-current", n.element).find(".w_wistia").data("videoid"),
                                                            onReady: function (e) {
                                                                $(window).resize(), n.setPositionArrows();
                                                            },
                                                        })
                                                        : n.setPositionArrows();
                                            }),
                                            this.handle.slick(e),
                                            this.handle.on("beforeChange.cslider", function () {
                                                try {
                                                    var e = $(".slick-current", n.element).find(".wistia_embed").attr("id");
                                                    e && (t = window.Wistia.api(e)).pause();
                                                } catch (e) {
                                                    console.log(e);
                                                }
                                            }),
                                            this.handle.on("afterChange.cslider", function () {
                                                window.CTR_IMG_LAZY_LOADER && window.CTR_IMG_LAZY_LOADER.revalidate();
                                                try {
                                                    t && t.pause();
                                                } catch (e) {
                                                    console.log(e);
                                                }
                                                n.setPositionArrows();
                                            }),
                                            this.slickNoSlide();
                                    },
                                    setPositionArrows: function () {
                                        var e = this.element.find(".slick-arrow"),
                                            t = this.handle.find('[aria-hidden="false"] .img-view').length ? this.handle.find('[aria-hidden="false"] .img-view') : this.handle.find('[aria-hidden="true"] .img-view'),
                                            n = 0,
                                            r = 0;
                                        e.length &&
                                        t.length &&
                                        this.options.setPositionArrows &&
                                        ($(t).each(function () {
                                            n = Math.max($(this).outerHeight(), n);
                                        }),
                                            (r = n / 2),
                                            e.animate({ top: r }, 300));
                                    },
                                    slickNoSlide: function () {
                                        var e = this.handle.slick("getSlick");
                                        e.slideCount && e.slideCount <= e.options.slidesToShow
                                            ? (this.element.addClass("wrap-no-slide"), this.handle.addClass("no-slide"))
                                            : (this.element.removeClass("wrap-no-slide"), this.handle.removeClass("no-slide"));
                                    },
                                    destroy: function () {
                                        this.handle.hasClass("slick-initialized") &&
                                        (this.element.find(".slick-arrow").length && this.element.find(".slick-arrow").removeAttr("style"),
                                            this.handle.slick("unslick").off("afterChange.cslider"),
                                            this.element.find(".slick-dots").remove());
                                    },
                                }),
                                    ($.fn.cslider = function (t, n) {
                                        return this.each(function () {
                                            var e = $.data(this, "cslider");
                                            e ? e[t] && e[t](n) : $.data(this, "cslider", new o(this, t));
                                        });
                                    }),
                                    ($.fn.cslider.defaults = { handle: ".slick", normal: { infinite: !1, speed: 600, slidesToShow: 1, slidesToScroll: 1, zIndex: 5, rtl: "rtl" === $("html").attr("dir"), accessibility: !1 } });
                            }),
                            void 0 === window.$.fn.slick)
                        ) {
                            var n = document.createElement("script");
                            (n.src = "https://ctrwow-commonstorage.azureedge.net/common/js/libs/slick-v1.8.0.js"),
                                document.body.appendChild(n),
                                (n.onload = function () {
                                    window.definedWidgetCSlider(),
                                        window.addEventListener("load", function () {
                                            $("[data-cslider]").cslider();
                                        });
                                });
                        } else
                            window.ctrwowUtils.isBuilderMode() &&
                            $(e)
                                .find("[data-cslider]")
                                .each(function () {
                                    $.data(this, "cslider") && $(this).cslider("destroy"), $(this).cslider("initWidget");
                                });
                    }
                    n.r(t),
                        n.d(t, "default", function () {
                            return r;
                        });
                },
            ]).default(this, e);
            console.log("run controller");
        } catch (e) {
            console.log(e);
        }
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i8o5yzz")).length; i < len; i++)
    (function () {
        try {
            var e = { provider: "Wista", layerType: "normal", videoId: "kw1cwld4a5", muted: "", "btn-type": "below-video" };
        } catch (e) {
            console.log(e);
        }
        if (window.ctrDebug && window.ctrDebug.run(this, "widget-cta-button-on-video", e)) return !0;
        (function (n) {
            var r = {};
            function i(e) {
                if (r[e]) return r[e].exports;
                var t = (r[e] = { i: e, l: !1, exports: {} });
                return n[e].call(t.exports, t, t.exports, i), (t.l = !0), t.exports;
            }
            return (
                (i.m = n),
                    (i.c = r),
                    (i.d = function (e, t, n) {
                        i.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n });
                    }),
                    (i.r = function (e) {
                        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                    }),
                    (i.t = function (t, e) {
                        if ((1 & e && (t = i(t)), 8 & e)) return t;
                        if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
                        var n = Object.create(null);
                        if ((i.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                            for (var r in t)
                                i.d(
                                    n,
                                    r,
                                    function (e) {
                                        return t[e];
                                    }.bind(null, r)
                                );
                        return n;
                    }),
                    (i.n = function (e) {
                        var t =
                            e && e.__esModule
                                ? function () {
                                    return e.default;
                                }
                                : function () {
                                    return e;
                                };
                        return i.d(t, "a", t), t;
                    }),
                    (i.o = function (e, t) {
                        return Object.prototype.hasOwnProperty.call(e, t);
                    }),
                    (i.p = ""),
                    i((i.s = 1))
            );
        })([
            function (e, t, n) {},
            function (e, t, n) {
                function r(e) {
                    var t = e,
                        n = t.querySelector(".video"),
                        r = t.querySelector(".cta-area"),
                        i = t.querySelector(".cta-btn"),
                        o = "",
                        a = "Wista",
                        s = "kw1cwld4a5",
                        c = t.hasAttribute("autoPlay") ? 1 : 0,
                        l = t.hasAttribute("loop") ? 1 : 0,
                        d = t.hasAttribute("hidecontrol") ? 1 : 0,
                        u = t.getAttribute("animation") || !1,
                        p = String("below-video"),
                        w = window.ctrwowUtils.isBuilderMode();
                    u && i.classList.add("cta-btn-bouncing"), w && r.classList.add("builder");
                    var f = 0,
                        m = "true",
                        h = "true",
                        g = 1,
                        y = 1,
                        v = t.hasAttribute("loop") ? "loop" : "default",
                        b = 1,
                        k = "false";
                    (e = "true"), (u = "true"), (i = "true");
                    (o = "YES" === o ? 0 : 1),
                    ("background" !== "normal".toLowerCase() && !d) ||
                    ((v = "loop"), (b = y = g = 0), (k = "true"), (i = u = e = h = m = "false"), d ? (y = "false") : (t.querySelector(".video-cta-group").classList.add("background"), (f = 1))),
                        "wista" === a.toLowerCase()
                            ? (((S = document.createElement("script")).src = "//fast.wistia.com/assets/external/E-v1.js"), document.head.appendChild(S))
                            : "youtube" === a.toLowerCase()
                            ? n.classList.add("youtube")
                            : n.classList.add("vimeo");
                    var S = "";
                    switch (
                        ("wista" === a.toLowerCase()
                            ? (S = '<div class="myVideo w_wistia" data-videoid="'
                                .concat(s, "\">\n                <div style='height:100%;width:100%' class='wistia_embed videoFoam=true wistia_async_")
                                .concat(s, "  autoPlay=")
                                .concat(c, " endVideoBehavior=")
                                .concat(v, " playbar=")
                                .concat(m, " playButton=")
                                .concat(h, " controlsVisibleOnLoad=")
                                .concat(g, " settingsControl=")
                                .concat(y, " playbackRateControl=")
                                .concat(b, " volumeControl=")
                                .concat(e, " smallPlayButton=")
                                .concat(u, " fullscreenButton=")
                                .concat(i, " muted=")
                                .concat(k, " volume=")
                                .concat(o, "' ></div>\n            </div>"))
                            : "vimeo" === a.toLowerCase()
                                ? (S = '<div class="vimeo-wrapper" data-videoid="'
                                    .concat(s, '">\n              <iframe src="https://player.vimeo.com/video/')
                                    .concat(s, "?background=")
                                    .concat(f, "&autoplay=")
                                    .concat(c, "&loop=")
                                    .concat(l, '&title=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>\n          </div>'))
                                : "youtube" === a.toLowerCase() &&
                                (S = '<div class="youtube-wrapper" data-videoid="'
                                    .concat(s, '">\n      <iframe width="420" height="315" src="https://www.youtube.com/embed/')
                                    .concat(s, "?autoplay=")
                                    .concat(c, "&mute=1&loop=")
                                    .concat(l, "&playlist=")
                                    .concat(s, "&controls=")
                                    .concat(y, '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>\n    </div>')),
                            (n.innerHTML = S),
                            p)
                        ) {
                        case "video-end":
                            (window._wq = window._wq || []),
                                window._wq.push({
                                    id: s,
                                    onReady: function (e) {
                                        e.bind("end", function () {
                                            w || r.classList.add("show");
                                        });
                                    },
                                });
                            break;
                        case "below-video":
                            r && r.classList.add("show-below");
                    }
                }
                n.r(t),
                    n.d(t, "default", function () {
                        return r;
                    }),
                    n(0);
            },
        ]).default(this, e);
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ikm3c0o")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i5qgpw3")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i5a67j")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iqbf81e")).length; i < len; i++)
    (function () {
        var o = this,
            a = o.getAttribute("param-control") ? o.getAttribute("param-control") : "";
        !(function () {
            var e = !1;
            if ("" !== a) {
                var t = a.split("=");
                o && o.style && 1 < t.length && window.ctrwowUtils.link.getParameterByName(t[0]) === t[1] && (e = !0);
            }
            if (!0 !== e) {
                var n = !!o.hasAttribute("show-comment-with-action");
                n && !ctrwowUtils.isBuilderMode() && o.querySelector(".comment-content") && o.querySelector(".comment-content").classList.add("hidden");
                var r = o.querySelector(".ctr-handle-toggle-click"),
                    i = o.querySelector(".comment-content");
                r &&
                n &&
                r.addEventListener("click", function (e) {
                    e.preventDefault(), i.classList.toggle("hidden"), i.scrollIntoView({ behavior: "smooth" });
                });
            } else o.style.display = "none";
        })();
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i2he9so")).length; i < len; i++)
    (function () {
        try {
            var e;
            try {
                e = {
                    dkItems: "1",
                    tbItems: "1",
                    mbItems: "1",
                    dkScrollItems: "1",
                    tbScrollItems: "1",
                    mbScrollItems: "1",
                    sliderMode: "default",
                    slideType: "normal",
                    dkItemsPerRow: "0",
                    tbItemsPerRow: "0",
                    mbItemsPerRow: "0",
                    arrows: "true",
                    thumbArrows: "",
                    infinite: "",
                    bullets: "true",
                    fade: "",
                    autoplay: "",
                    adaptiveHeight: "",
                    makeArrowCenter: "",
                    initUnder: "99999",
                    initialSlide: "",
                    centerPadding: "0",
                    slideSpeed: "500",
                    bulletsColor: "gray",
                    bulletActiveColor: "black",
                    bulletsSize: "10px",
                    dkRows: "1",
                    tbRows: "1",
                    mbRows: "1",
                };
            } catch (e) {
                console.log(e);
            }
            if (window.ctrDebug && window.ctrDebug.run(this, "widget-slider", e)) return !0;
            (function (n) {
                var r = {};
                function i(e) {
                    if (r[e]) return r[e].exports;
                    var t = (r[e] = { i: e, l: !1, exports: {} });
                    return n[e].call(t.exports, t, t.exports, i), (t.l = !0), t.exports;
                }
                return (
                    (i.m = n),
                        (i.c = r),
                        (i.d = function (e, t, n) {
                            i.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n });
                        }),
                        (i.r = function (e) {
                            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                        }),
                        (i.t = function (t, e) {
                            if ((1 & e && (t = i(t)), 8 & e)) return t;
                            if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
                            var n = Object.create(null);
                            if ((i.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                                for (var r in t)
                                    i.d(
                                        n,
                                        r,
                                        function (e) {
                                            return t[e];
                                        }.bind(null, r)
                                    );
                            return n;
                        }),
                        (i.n = function (e) {
                            var t =
                                e && e.__esModule
                                    ? function () {
                                        return e.default;
                                    }
                                    : function () {
                                        return e;
                                    };
                            return i.d(t, "a", t), t;
                        }),
                        (i.o = function (e, t) {
                            return Object.prototype.hasOwnProperty.call(e, t);
                        }),
                        (i.p = ""),
                        i((i.s = 0))
                );
            })([
                function (e, t, n) {
                    function r(e, t) {
                        if (
                            (void 0 === window.definedWidgetCSlider &&
                            (window.definedWidgetCSlider = function () {
                                var n,
                                    r = $(window),
                                    i = "onorientationchange" in window ? "orientationchange.resizecslider" : "resize.resizecslider";
                                function o(e) {
                                    (this.element = $(e)), this.initWidget();
                                }
                                (o.prototype = {
                                    initWidget: function () {
                                        var e = 0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : {},
                                            t = this;
                                        (this.options = $.extend({}, $.fn.cslider.defaults, JSON.parse(this.element.attr("data-".concat("cslider"))), e)),
                                            (this.handle = this.element.find(this.options.handle)),
                                        this.handle.is(":visible") &&
                                        (this.options.initUnder
                                            ? r.width() < this.options.initUnder
                                                ? (this.element.removeClass("wrap-no-slide"), this.handle.removeClass("no-slide"), this.initialize())
                                                : (this.element.addClass("wrap-no-slide"), this.handle.addClass("no-slide"))
                                            : this.initialize(),
                                            r.off(i).on(i, function () {
                                                n && clearTimeout(n), (n = setTimeout(t.reRenderSlide, 600));
                                            }),
                                            this.listener());
                                    },
                                    listener: function () {
                                        this.zoomInEvent();
                                    },
                                    zoomInEvent: function () {
                                        var t = this.element.find(".zoomin");
                                        if (0 !== t.length && this.element.closest(".widget-slider").attr("popup-class")) {
                                            var n = "." + this.element.closest(".widget-slider").attr("popup-class");
                                            t.off("click.zoomIn").on("click.zoomIn", function () {
                                                var e = $(t).index($(this));
                                                $(n).find(".ctrwow-modal").addClass("show"),
                                                    $(n).find(".widget-slider").show(),
                                                    $(n).find(".ctrwow-modal").css("pointer-events", "none"),
                                                    $(n).find(".ctrwow-modal-content").css("pointer-events", "auto"),
                                                    $(n).find("[data-cslider]").cslider("initWidget", { initialSlide: e }),
                                                    $(n).addClass("show-popup-slide");
                                            }),
                                                $(n)
                                                    .find(".zoomout")
                                                    .off("click.zoomOut")
                                                    .on("click.zoomOut", function () {
                                                        $(n).find("[data-cslider]").cslider("destroy"), $(n).find(".widget-slider").hide(), $(n).find(".ctrwow-modal").removeClass("show"), $(n).removeClass("show-popup-slide");
                                                    }),
                                                $(n)
                                                    .off("click.zoomOutPopup")
                                                    .on("click.zoomOutPopup", function (e) {
                                                        $(e.target).hasClass("popup-slide") &&
                                                        ($(n).find("[data-cslider]").cslider("destroy"), $(n).find(".widget-slider").hide(), $(n).find(".ctrwow-modal").removeClass("show"), $(n).removeClass("show-popup-slide"));
                                                    });
                                        }
                                    },
                                    reRenderSlide: function () {
                                        $("[data-cslider]").each(function () {
                                            $(".slick", this).is(":visible") &&
                                            ($(this).find(".slick-track > .slick-list").remove(),
                                                $(this).data().cslider.options.initUnder
                                                    ? r.width() < $(this).data().cslider.options.initUnder
                                                    ? ($(".slick", this).removeClass("no-slide"),
                                                        $(this).removeClass("wrap-no-slide"),
                                                        $(".slick", this).hasClass("slick-initialized") ? $(this).cslider("setPositionArrows") : $(this).cslider("initWidget"))
                                                    : $(".slick", this).hasClass("slick-initialized") && ($(".slick", this).addClass("no-slide"), $(this).addClass("wrap-no-slide"), $(this).cslider("destroy"))
                                                    : window.ctrwowUtils.isBuilderMode()
                                                    ? ($(this).cslider("destroy"), $(this).cslider("initWidget"))
                                                    : ($(this).cslider("setPositionArrows"), $(this).cslider("slickNoSlide"), $(".slick", this).hasClass("no-slide") && ($(this).cslider("destroy"), $(this).cslider("initWidget"))));
                                        });
                                    },
                                    initialize: function () {
                                        this.element.find(".slick").find("img").length ? this.checkImgLoad() : this.initSlider();
                                    },
                                    checkImgLoad: function () {
                                        var e = this,
                                            t = this.element.find(".slick").find("img").first().attr("data-ctr-lazy-src");
                                        t || (t = this.element.find(".slick").find("img").first().attr("src")),
                                            $("<img />")
                                                .attr("src", t)
                                                .css("display", "none")
                                                .on("load.cslider", function () {
                                                    e.initSlider();
                                                })
                                                .on("error.cslider", function () {
                                                    e.initSlider();
                                                });
                                    },
                                    updateSetting: function () {
                                        var e = {},
                                            t = [];
                                        if (
                                            (void 0 !== this.options.desktopItems && (e = $.extend(e, { slidesToShow: this.options.desktopItems, rows: this.options.dkRows || 1, slidesToScroll: this.options.dkScrollItems || 1 })),
                                            void 0 !== this.options.tabletItems || void 0 !== this.options.mobileItems)
                                        ) {
                                            if (void 0 !== this.options.tabletItems) {
                                                var n = { breakpoint: 992, settings: { slidesToShow: this.options.tabletItems, rows: this.options.tbRows || 1, slidesToScroll: this.options.tbScrollItems || 1 } };
                                                t.push(n);
                                            }
                                            if (void 0 !== this.options.mobileItems) {
                                                var r = { breakpoint: 576, settings: { slidesToShow: this.options.mobileItems, rows: this.options.mbRows || 1, slidesToScroll: this.options.mbScrollItems || 1 } };
                                                t.push(r);
                                            }
                                            e = $.extend(e, { responsive: t });
                                        }
                                        return e;
                                    },
                                    initSlider: function () {
                                        var e,
                                            t,
                                            n = this,
                                            r = {};
                                        switch (this.options.type) {
                                            case "normal":
                                                e = $.extend({}, this.options.normal, this.updateSetting());
                                                break;
                                            case "syncing":
                                                (r.asNavFor = this.options.navFor), (e = this.options.view ? $.extend({}, this.options.normal, r) : $.extend({}, this.options.normal, { focusOnSelect: !0 }, r, this.updateSetting()));
                                                break;
                                            default:
                                                e = this.options.normal;
                                        }
                                        if (
                                            ((e = $.extend(e, {
                                                dots: this.options.dots,
                                                arrows: this.options.arrows,
                                                fade: this.options.fade,
                                                infinite: this.options.infinite,
                                                adaptiveHeight: this.options.adaptiveHeight,
                                                prevArrow: this.options.prevArrow,
                                                nextArrow: this.options.nextArrow,
                                                arrowWrapper: this.options.arrowWrapper,
                                                appendDots: this.options.dotWrapper,
                                                initialSlide: this.options.initialSlide,
                                                speed: this.options.slideSpeed,
                                            })),
                                            this.options.autoplay && (e = $.extend(e, { autoplay: !0, pauseOnHover: !0, autoplaySpeed: 3e3 })),
                                            "verticalmode" === this.options.sliderMode && (e = $.extend(e, { vertical: !0, verticalSwiping: !0 })),
                                            "centermode" === this.options.sliderMode)
                                        ) {
                                            var i = { centerMode: !0, centerPadding: this.options.centerPadding ? this.options.centerPadding : 0 };
                                            e = $.extend(e, i);
                                        }
                                        (window._wq = window._wq || []),
                                            this.handle.on("init", function () {
                                                n.handle.find(".slick-track > .slick-list").remove(),
                                                    $(".slick-current", n.element).find(".w_wistia").length
                                                        ? window._wq.push({
                                                            id: $(".slick-current", n.element).find(".w_wistia").data("videoid"),
                                                            onReady: function (e) {
                                                                $(window).resize(), n.setPositionArrows();
                                                            },
                                                        })
                                                        : n.setPositionArrows();
                                            }),
                                            this.handle.slick(e),
                                            this.handle.on("beforeChange.cslider", function () {
                                                try {
                                                    var e = $(".slick-current", n.element).find(".wistia_embed").attr("id");
                                                    e && (t = window.Wistia.api(e)).pause();
                                                } catch (e) {
                                                    console.log(e);
                                                }
                                            }),
                                            this.handle.on("afterChange.cslider", function () {
                                                window.CTR_IMG_LAZY_LOADER && window.CTR_IMG_LAZY_LOADER.revalidate();
                                                try {
                                                    t && t.pause();
                                                } catch (e) {
                                                    console.log(e);
                                                }
                                                n.setPositionArrows();
                                            }),
                                            this.slickNoSlide();
                                    },
                                    setPositionArrows: function () {
                                        var e = this.element.find(".slick-arrow"),
                                            t = this.handle.find('[aria-hidden="false"] .img-view').length ? this.handle.find('[aria-hidden="false"] .img-view') : this.handle.find('[aria-hidden="true"] .img-view'),
                                            n = 0,
                                            r = 0;
                                        e.length &&
                                        t.length &&
                                        this.options.setPositionArrows &&
                                        ($(t).each(function () {
                                            n = Math.max($(this).outerHeight(), n);
                                        }),
                                            (r = n / 2),
                                            e.animate({ top: r }, 300));
                                    },
                                    slickNoSlide: function () {
                                        var e = this.handle.slick("getSlick");
                                        e.slideCount && e.slideCount <= e.options.slidesToShow
                                            ? (this.element.addClass("wrap-no-slide"), this.handle.addClass("no-slide"))
                                            : (this.element.removeClass("wrap-no-slide"), this.handle.removeClass("no-slide"));
                                    },
                                    destroy: function () {
                                        this.handle.hasClass("slick-initialized") &&
                                        (this.element.find(".slick-arrow").length && this.element.find(".slick-arrow").removeAttr("style"),
                                            this.handle.slick("unslick").off("afterChange.cslider"),
                                            this.element.find(".slick-dots").remove());
                                    },
                                }),
                                    ($.fn.cslider = function (t, n) {
                                        return this.each(function () {
                                            var e = $.data(this, "cslider");
                                            e ? e[t] && e[t](n) : $.data(this, "cslider", new o(this, t));
                                        });
                                    }),
                                    ($.fn.cslider.defaults = { handle: ".slick", normal: { infinite: !1, speed: 600, slidesToShow: 1, slidesToScroll: 1, zIndex: 5, rtl: "rtl" === $("html").attr("dir"), accessibility: !1 } });
                            }),
                            void 0 === window.$.fn.slick)
                        ) {
                            var n = document.createElement("script");
                            (n.src = "https://ctrwow-commonstorage.azureedge.net/common/js/libs/slick-v1.8.0.js"),
                                document.body.appendChild(n),
                                (n.onload = function () {
                                    window.definedWidgetCSlider(),
                                        window.addEventListener("load", function () {
                                            $("[data-cslider]").cslider();
                                        });
                                });
                        } else
                            window.ctrwowUtils.isBuilderMode() &&
                            $(e)
                                .find("[data-cslider]")
                                .each(function () {
                                    $.data(this, "cslider") && $(this).cslider("destroy"), $(this).cslider("initWidget");
                                });
                    }
                    n.r(t),
                        n.d(t, "default", function () {
                            return r;
                        });
                },
            ]).default(this, e);
            console.log("run controller");
        } catch (e) {
            console.log(e);
        }
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iepevu")).length; i < len; i++)
    (function () {
        (function () {
            try {
                var e = { "default-product": "21", "selected-products": '["17","21","22"]' };
            } catch (e) {
                console.log(e);
            }
            if (window.ctrDebug && window.ctrDebug.run(this, "widget-product-list", e)) return !0;
            !(function (e) {
                var i = {
                        couponText: ".js-coupon-text",
                        "productPrices.FullRetailPrice.FormattedValue": ".js-retail-price",
                        "productPrices.DiscountedPrice.FormattedValue": ".js-discount-price",
                        "productPrices.UnitDiscountRate.FormattedValue": ".js-unit-price",
                        shippingFee: ".js-shipping-fee",
                        productPricesSavePrice: ".js-save-price",
                    },
                    a = ["haov", "hcvr", "haov3", "hcvr3"],
                    t = ["qn", "tw", "kl", "mp"];
                function c() {}
                function s(e) {
                    return document.querySelector(e);
                }
                (c.toggleClass = function (e, t, n) {
                    n ? e.classList.add(t) : e.classList.remove(t);
                }),
                    (c.getIndexInArray = function (e, t) {
                        return Array.prototype.indexOf.call(e, t);
                    }),
                    (c.getDescendantProp = function (e, t) {
                        var n = t.split(".");
                        for (0 === n.length && t && n.push(t); n.length; ) e = e[n.shift()];
                        return e || "";
                    }),
                    (c.getQueryParameter = function (e) {
                        var t = "";
                        return (e = (t = location.href.indexOf("?") ? location.href.substr(location.href.indexOf("?")) : t).match(new RegExp("[?&]" + e + "=([^&]*)(&?)", "i"))) ? e[1] : null;
                    }),
                    (c.getSavePrice = function (e) {
                        var t = e.productPrices.FullRetailPrice.Value || 0,
                            n = e.productPrices.FullRetailPrice.FormattedValue || 0;
                        e = e.productPrices.DiscountedPrice.Value || 0;
                        return window.ctrwowUtils.number && window.ctrwowUtils.number.formaterNumberByFormattedValue(t - e || 0, n);
                    });
                var l = function (t) {
                        return a.find(function (e) {
                            return e === t;
                        });
                    },
                    d = function (e) {
                        return t.indexOf(e);
                    },
                    u = function (e, t) {
                        var n = s(".item-1"),
                            r = s(".item-2"),
                            i = s(".item-3"),
                            o = a.indexOf(t);
                        e.element.classList.add(t), (0 === o && i ? i : 1 === o && n ? n : r).click();
                    };
                function p(o, a, e) {
                    for (
                        var s = _extends(i, 2 < arguments.length && void 0 !== e ? e : {}),
                            t = function (t, e) {
                                var n,
                                    r = a.items[t].dataset.id,
                                    i = o.find(function (e) {
                                        return e.productId == r;
                                    });
                                i &&
                                (!(n = i) ||
                                !n.shippings ||
                                (n.shippings && n.shippings.length <= 1) ||
                                (n.shippings.sort(function (e, t) {
                                    return e.price - t.price;
                                }),
                                    "1" === window.ctrwowUtils.link.queryURLParameter("rm") || window.isFreeShip ? (window.shippingIndex = 0) : (window.shippingIndex = n.shippings.length - 1),
                                    n.shippings.forEach(function (e, t) {
                                        e.isExpress === window.isExpressShipping && "boolean" == typeof window.isExpressShipping && (window.shippingIndex = t);
                                    })),
                                    (i = n)),
                                    Object.keys(s).forEach(function (r) {
                                        var e = s[r];
                                        e = a.items[t].querySelectorAll(e);
                                        Array.prototype.slice.call(e).forEach(function (e) {
                                            var t, n;
                                            i
                                                ? (e.classList.remove("loading"),
                                                    (n = ""),
                                                    (n = c.getDescendantProp(i, r)),
                                                "productPricesSavePrice" === r && (n = c.getSavePrice(i)),
                                                "couponText" === r && (n && e.parentNode.classList.remove("hidden"), (t = e.textContent), (n = n ? t.replace("{{couponText}}", n) : t)),
                                                "shippingFee" === r &&
                                                (n = (function (e) {
                                                    window.shippingIndex = window.shippingIndex || 0;
                                                    var t = e.shippings[window.shippingIndex].formattedPrice;
                                                    return 0 === e.shippings[window.shippingIndex].price ? window.freeShip || "FREE" : t;
                                                })(i)),
                                                    (e.textContent = n))
                                                : ("couponText" !== r && (e.textContent = ""), e.classList.add("loading"));
                                        });
                                    });
                            },
                            n = 0,
                            r = a.items.length;
                        n < r;
                        n++
                    )
                        t(n);
                }
                function o(t) {
                    if (!t) return null;
                    var e = window.localStorage.getItem("products");
                    return (e = e ? JSON.parse(e) : []).find(function (e) {
                        return e.productId == t;
                    });
                }
                function w(e, t) {
                    var n = c.getIndexInArray(e.items, t),
                        r = t.dataset.id,
                        i = e.inputs[n];
                    i &&
                    (i.checked
                        ? i.focus()
                        : ((i.checked = !e.inputs[n].checked),
                            i.dispatchEvent(new CustomEvent("change")),
                            i.focus(),
                        !r || ((r = o(r)) && ((t = t.querySelector(".js-title")), (r.productName = t ? t.textContent : r.productName), console.log("Emit product data", r), window.ctrwowCheckout.checkoutData.setProduct(r)))));
                }
                function f(e) {
                    for (var t = 0; t < e.items.length; t++)
                        !(function (e, t) {
                            if (e.inputs[t] && e.inputs[t].checked) {
                                var n = e.inputs[t].closest(".js-list-item"),
                                    r = o(n.dataset.id);
                                if (!r) return;
                                (n = n.querySelector(".js-title")), (r.productName = n ? n.textContent : r.productName), r && window.ctrwowCheckout.checkoutData.setProduct(r);
                            }
                            c.toggleClass(e.items[t], "list-item--checked", !!e.inputs[t] && e.inputs[t].checked);
                        })(e, t);
                }
                function n(e, t, n) {
                    c.toggleClass(e.items[t], "list-item--focus", n);
                }
                function m(e, t) {
                    return (
                        (e = (function (e, t) {
                            if (!e || !t) return t;
                            var i,
                                n,
                                r,
                                o,
                                a,
                                s,
                                c,
                                l,
                                d,
                                u,
                                p,
                                w,
                                f,
                                m,
                                h,
                                g = t,
                                y = t.element,
                                v =
                                    ((i = e),
                                        (d = (n = t).element.querySelectorAll(".js-list-item")),
                                        (u = n.items),
                                        (p = n.inputs),
                                        (w = !0),
                                        (f = []),
                                        (m = []),
                                        (h = []),
                                        i.map(function (e) {
                                            var t, n, r;
                                            (t = e),
                                                2 <
                                                i.filter(function (e) {
                                                    return e === t;
                                                }).length
                                                    ? (w = !1)
                                                    : ((e = parseInt(e)), (n = d[e]), (r = u[e]), (e = p[e]), n && r && e ? (f.push(n), m.push(r), h.push(e)) : (w = !1));
                                        }),
                                        h.length < n.inputs.length
                                            ? ((r = { element: f, items: m, inputs: h }),
                                                (a = i),
                                                (s = (o = n).element.querySelectorAll(".js-list-item")),
                                                (c = o.items),
                                                (l = o.inputs),
                                                (function (e) {
                                                    for (var t = [], n = 0; n < e; n++) t.push(n);
                                                    return t;
                                                })(o.items.length)
                                                    .filter(function (e) {
                                                        return -1 === a.indexOf(e);
                                                    })
                                                    .map(function (e) {
                                                        var t = s[e],
                                                            n = c[e];
                                                        (e = l[e]), r.element.push(t), r.items.push(n), r.inputs.push(e);
                                                    }),
                                                { element: (n = r).element, items: n.items, inputs: n.inputs, flag: w })
                                            : { element: f, items: m, inputs: h, flag: w });
                            if (!v || (v && !v.flag)) return g;
                            v.element.reverse(), (y.innerHTML = "");
                            for (var b = 0; b < v.element.length; b++) y.insertBefore(v.element[b], y.firstChild);
                            return (t.element = y), (t.items = v.items), (t.inputs = v.inputs), t;
                        })(e, t)) || t
                    );
                }
                function r(e, t, n) {
                    var r, i, o;
                    window.localStorage.setItem("currencyCode", n.location.currencyCode),
                        window.localStorage.setItem("ip", n.location.ip),
                        window.localStorage.setItem("mainCampaignName", n.campaignName),
                    n.location && window.localStorage.setItem("ctr__countryCode", n.location.countryCode),
                        t.element.classList.remove("loading"),
                    e &&
                    (window.localStorage.setItem("products", JSON.stringify(e)),
                        (function (e) {
                            try {
                                var t,
                                    n,
                                    r,
                                    i,
                                    o,
                                    a =
                                        e.prices && e.prices.length
                                            ? e.prices.filter(function (e) {
                                                return e.quantity && 1 == e.quantity;
                                            })
                                            : [];
                                0 < a.length &&
                                ((n = (t = a[0]).productPrices.DiscountedPrice ? t.productPrices.DiscountedPrice.Value : 0),
                                    (i = (((r = t.productPrices.FullRetailPrice ? Number(t.productPrices.FullRetailPrice.Value) : 0) - (t.productPrices.DiscountedPrice ? Number(t.productPrices.DiscountedPrice.Value) : 0)) / r) * 100),
                                    (o = { productPrice: n, productId: t.productId, productName: t.productName, sku: t.sku, discountedPercent: Math.round(i), fullPrice: r, currencyCode: e.location.currencyCode }),
                                    window.__CTR_FP_TRACKING.trackProductPrice(o),
                                    console.log("Track Product Price ok", o));
                            } catch (e) {
                                console.warn("fireFpProductPriceEvent error: ", e);
                            }
                        })(n)),
                        p(
                            e,
                            (t = (n = (function () {
                                var t, n, e;
                                if (
                                    (e = c.getQueryParameter("wz_id")) &&
                                    "" !== e &&
                                    ((e = e.toLowerCase()), isNaN(e)) &&
                                    (e = !((e = e).length <= 0 && e.length % 2 != 0) && !(!(e = (e = e.toString()).match(/.{1,2}/g)) && e.length <= 0) && e) &&
                                    ((t = !0),
                                        (n = []),
                                        e.map(function (e) {
                                            "number" == typeof (e = d(e)) || -1 !== e ? n.push(e) : (t = !1);
                                        }),
                                        (e = !!t && n))
                                )
                                    return e;
                            })())
                                ? m(n, t)
                                : t)
                        ),
                        f(t),
                        (e = t),
                    (n = c.getQueryParameter("temp")) && ((n = n.toLowerCase()), l(n) && u(e, n)),
                        (r = t),
                    !(o = c.getQueryParameter("qt")) || ((i = parseInt(o)), !Number.isInteger(i)) || o <= 0 || ((o = parseInt(o) - 1), (o = r.element.querySelectorAll(".js-list-item")[o]) && w(r, o));
                }
                function h(s) {
                    s.element.addEventListener("click", function (e) {
                        (e = e.target.closest(".js-list-item")) && (window.PubSub && window.PubSub.unsubscribe("show-exit-popup"), w(s, e));
                    });
                    for (var e = 0; e < s.items.length; e++)
                        !(function (e) {
                            var t = s.inputs[e];
                            t &&
                            (t.addEventListener("change", function () {
                                f(s);
                            }),
                                t.addEventListener("focus", function () {
                                    n(s, e, !0);
                                }),
                                t.addEventListener("blur", function () {
                                    n(s, e, !1);
                                }));
                        })(e);
                    var c = window.PubSub.subscribe("apply-coupon-code", function (e, t) {
                        var n, o, r, i, a;
                        (n = s),
                        (o = t) &&
                        ((r = window.localStorage.getItem("products") || []),
                            (r = JSON.parse(r)),
                            window.ctrwowCheckout.checkoutData.setCouponCode(o.code),
                            (r = r.map(function (e) {
                                var t,
                                    n,
                                    r,
                                    i =
                                        ((t = o),
                                            (n = (i = e).productPrices.DiscountedPrice.Value),
                                            (r = t.discount),
                                            (i = 0),
                                            (i = Number((n - r).toFixed(2))),
                                            0 < (i = "Percentage" === t.discountType ? Number(((n * (100 - r)) / 100).toFixed(2)) : i) ? i : 0);
                                return (
                                    (e.productPrices.DiscountedPrice.Value = Math.round(100 * i + Number.EPSILON) / 100),
                                        (e.productPrices.DiscountedPrice.FormattedValue = window.ctrwowUtils.number.formaterNumberByFormattedValue(i, e.productPrices.DiscountedPrice.FormattedValue)),
                                    (!o.formattedDiscount || o.formattedDiscount < 0) && (o.formattedDiscount = window.ctrwowUtils.number.formaterNumberByFormattedValue(0, e.productPrices.DiscountedPrice.FormattedValue)),
                                        (e.couponText = o.formattedDiscount),
                                        e
                                );
                            })),
                            (i = n.element.querySelector(".list-item--checked").dataset.id),
                        (a = r.find(function (e) {
                            return e.productId == i;
                        })) && window.ctrwowCheckout.checkoutData.setProduct(a),
                            window.localStorage.setItem("products", JSON.stringify(r)),
                            p(r, n)),
                            window.PubSub.unsubscribe(c);
                    });
                }
                function g(e) {
                    var t, n;
                    (this.element = e),
                        (this.items = this.element.getElementsByClassName("js-list-item")),
                        (this.inputs = (function (e) {
                            for (var t = [], n = 0; n < e.items.length; n++) t.push(e.items[n].getElementsByTagName("input")[0]);
                            return t;
                        })(this)),
                        (t = this),
                        console.log("Init product list"),
                        (n = t),
                        console.log("Loaded product list"),
                        n.element.classList.add("loading"),
                        window.ctrwowCheckout.ready().then(function () {
                            p([], n),
                                window.ctrwowCheckout.getCrmInstance().Campaign.getProducts(function (e) {
                                    r(e.prices, n, e);
                                }, !0);
                        }),
                        h(this);
                }
                window.ctrwowUtils.getDependencies([window.ctrwowUtils.getCtrLibLink("ctrwowCheckout", "2.1.0"), "https://cdnjs.cloudflare.com/ajax/libs/pubsub-js/1.7.0/pubsub.min.js"]).then(function () {
                    window.ctrwowUtils.isBuilderMode() || new g(e);
                });
            })(this),
                console.log("run controller");
        }.apply(this));
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ikwvykp")).length; i < len; i++)
    (function () {
        try {
            var e = { "tracking-value": "", "processor-type": "" };
        } catch (e) {
            console.log(e);
        }
        if (window.ctrDebug && window.ctrDebug.run(this, "widget-google-apple-checkout", e)) return !0;
        (function (n) {
            var r = {};
            function i(e) {
                if (r[e]) return r[e].exports;
                var t = (r[e] = { i: e, l: !1, exports: {} });
                return n[e].call(t.exports, t, t.exports, i), (t.l = !0), t.exports;
            }
            return (
                (i.m = n),
                    (i.c = r),
                    (i.d = function (e, t, n) {
                        i.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n });
                    }),
                    (i.r = function (e) {
                        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                    }),
                    (i.t = function (t, e) {
                        if ((1 & e && (t = i(t)), 8 & e)) return t;
                        if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
                        var n = Object.create(null);
                        if ((i.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                            for (var r in t)
                                i.d(
                                    n,
                                    r,
                                    function (e) {
                                        return t[e];
                                    }.bind(null, r)
                                );
                        return n;
                    }),
                    (i.n = function (e) {
                        var t =
                            e && e.__esModule
                                ? function () {
                                    return e.default;
                                }
                                : function () {
                                    return e;
                                };
                        return i.d(t, "a", t), t;
                    }),
                    (i.o = function (e, t) {
                        return Object.prototype.hasOwnProperty.call(e, t);
                    }),
                    (i.p = ""),
                    i((i.s = 5))
            );
        })([
            function (e, t, n) {
                e.exports = n(3);
            },
            function (e, t) {
                function c(e, t, n, r, i, o, a) {
                    try {
                        var s = e[o](a),
                            c = s.value;
                    } catch (e) {
                        return void n(e);
                    }
                    s.done ? t(c) : Promise.resolve(c).then(r, i);
                }
                (e.exports = function (s) {
                    return function () {
                        var e = this,
                            a = arguments;
                        return new Promise(function (t, n) {
                            var r = s.apply(e, a);
                            function i(e) {
                                c(r, t, n, i, o, "next", e);
                            }
                            function o(e) {
                                c(r, t, n, i, o, "throw", e);
                            }
                            i(void 0);
                        });
                    };
                }),
                    (e.exports.default = e.exports),
                    (e.exports.__esModule = !0);
            },
            function (e, t) {
                (e.exports = function (e, t, n) {
                    return t in e ? Object.defineProperty(e, t, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : (e[t] = n), e;
                }),
                    (e.exports.default = e.exports),
                    (e.exports.__esModule = !0);
            },
            function (e, t, n) {
                e = (function (a) {
                    var c,
                        e = Object.prototype,
                        l = e.hasOwnProperty,
                        t = "function" == typeof Symbol ? Symbol : {},
                        r = t.iterator || "@@iterator",
                        n = t.asyncIterator || "@@asyncIterator",
                        i = t.toStringTag || "@@toStringTag";
                    function o(e, t, n) {
                        return Object.defineProperty(e, t, { value: n, enumerable: !0, configurable: !0, writable: !0 }), e[t];
                    }
                    try {
                        o({}, "");
                    } catch (e) {
                        o = function (e, t, n) {
                            return (e[t] = n);
                        };
                    }
                    function s(e, t, n, r) {
                        var i, o, a, s;
                        (t = t && t.prototype instanceof h ? t : h), (t = Object.create(t.prototype)), (r = new _(r || []));
                        return (
                            (t._invoke =
                                ((i = e),
                                    (o = n),
                                    (a = r),
                                    (s = u),
                                    function (e, t) {
                                        if (s === w) throw new Error("Generator is already running");
                                        if (s === f) {
                                            if ("throw" === e) throw t;
                                            return A();
                                        }
                                        for (a.method = e, a.arg = t; ; ) {
                                            var n = a.delegate;
                                            if (n) {
                                                var r = (function e(t, n) {
                                                    var r;
                                                    if ((r = t.iterator[n.method]) === c) {
                                                        if (((n.delegate = null), "throw" === n.method)) {
                                                            if (t.iterator.return && ((n.method = "return"), (n.arg = c), e(t, n), "throw" === n.method)) return m;
                                                            (n.method = "throw"), (n.arg = new TypeError("The iterator does not provide a 'throw' method"));
                                                        }
                                                        return m;
                                                    }
                                                    return "throw" === (r = d(r, t.iterator, n.arg)).type
                                                        ? ((n.method = "throw"), (n.arg = r.arg), (n.delegate = null), m)
                                                        : (r = r.arg)
                                                            ? r.done
                                                                ? ((n[t.resultName] = r.value), (n.next = t.nextLoc), "return" !== n.method && ((n.method = "next"), (n.arg = c)), (n.delegate = null), m)
                                                                : r
                                                            : ((n.method = "throw"), (n.arg = new TypeError("iterator result is not an object")), (n.delegate = null), m);
                                                })(n, a);
                                                if (r) {
                                                    if (r === m) continue;
                                                    return r;
                                                }
                                            }
                                            if ("next" === a.method) a.sent = a._sent = a.arg;
                                            else if ("throw" === a.method) {
                                                if (s === u) throw ((s = f), a.arg);
                                                a.dispatchException(a.arg);
                                            } else "return" === a.method && a.abrupt("return", a.arg);
                                            if (((s = w), "normal" === (r = d(i, o, a)).type)) {
                                                if (((s = a.done ? f : p), r.arg !== m)) return { value: r.arg, done: a.done };
                                            } else "throw" === r.type && ((s = f), (a.method = "throw"), (a.arg = r.arg));
                                        }
                                    })),
                                t
                        );
                    }
                    function d(e, t, n) {
                        try {
                            return { type: "normal", arg: e.call(t, n) };
                        } catch (e) {
                            return { type: "throw", arg: e };
                        }
                    }
                    a.wrap = s;
                    var u = "suspendedStart",
                        p = "suspendedYield",
                        w = "executing",
                        f = "completed",
                        m = {};
                    function h() {}
                    function g() {}
                    function y() {}
                    var v = {};
                    o(v, r, function () {
                        return this;
                    }),
                    (t = (t = Object.getPrototypeOf) && t(t(P([])))) && t !== e && l.call(t, r) && (v = t);
                    var b = (y.prototype = h.prototype = Object.create(v));
                    function k(e) {
                        ["next", "throw", "return"].forEach(function (t) {
                            o(e, t, function (e) {
                                return this._invoke(t, e);
                            });
                        });
                    }
                    function S(a, s) {
                        var t;
                        this._invoke = function (n, r) {
                            function e() {
                                return new s(function (e, t) {
                                    !(function t(e, n, r, i) {
                                        if ("throw" !== (e = d(a[e], a, n)).type) {
                                            var o = e.arg;
                                            return (n = o.value) && "object" == _typeof(n) && l.call(n, "__await")
                                                ? s.resolve(n.__await).then(
                                                    function (e) {
                                                        t("next", e, r, i);
                                                    },
                                                    function (e) {
                                                        t("throw", e, r, i);
                                                    }
                                                )
                                                : s.resolve(n).then(
                                                    function (e) {
                                                        (o.value = e), r(o);
                                                    },
                                                    function (e) {
                                                        return t("throw", e, r, i);
                                                    }
                                                );
                                        }
                                        i(e.arg);
                                    })(n, r, e, t);
                                });
                            }
                            return (t = t ? t.then(e, e) : e());
                        };
                    }
                    function C(e) {
                        var t = { tryLoc: e[0] };
                        1 in e && (t.catchLoc = e[1]), 2 in e && ((t.finallyLoc = e[2]), (t.afterLoc = e[3])), this.tryEntries.push(t);
                    }
                    function x(e) {
                        var t = e.completion || {};
                        (t.type = "normal"), delete t.arg, (e.completion = t);
                    }
                    function _(e) {
                        (this.tryEntries = [{ tryLoc: "root" }]), e.forEach(C, this), this.reset(!0);
                    }
                    function P(t) {
                        if (t) {
                            if ((e = t[r])) return e.call(t);
                            if ("function" == typeof t.next) return t;
                            if (!isNaN(t.length)) {
                                var e,
                                    n = -1;
                                return ((e = function e() {
                                    for (; ++n < t.length; ) if (l.call(t, n)) return (e.value = t[n]), (e.done = !1), e;
                                    return (e.value = c), (e.done = !0), e;
                                }).next = e);
                            }
                        }
                        return { next: A };
                    }
                    function A() {
                        return { value: c, done: !0 };
                    }
                    return (
                        o(b, "constructor", (g.prototype = y)),
                            o(y, "constructor", g),
                            (g.displayName = o(y, i, "GeneratorFunction")),
                            (a.isGeneratorFunction = function (e) {
                                return !!(e = "function" == typeof e && e.constructor) && (e === g || "GeneratorFunction" === (e.displayName || e.name));
                            }),
                            (a.mark = function (e) {
                                return Object.setPrototypeOf ? Object.setPrototypeOf(e, y) : ((e.__proto__ = y), o(e, i, "GeneratorFunction")), (e.prototype = Object.create(b)), e;
                            }),
                            (a.awrap = function (e) {
                                return { __await: e };
                            }),
                            k(S.prototype),
                            o(S.prototype, n, function () {
                                return this;
                            }),
                            (a.AsyncIterator = S),
                            (a.async = function (e, t, n, r, i) {
                                void 0 === i && (i = Promise);
                                var o = new S(s(e, t, n, r), i);
                                return a.isGeneratorFunction(t)
                                    ? o
                                    : o.next().then(function (e) {
                                        return e.done ? e.value : o.next();
                                    });
                            }),
                            k(b),
                            o(b, i, "Generator"),
                            o(b, r, function () {
                                return this;
                            }),
                            o(b, "toString", function () {
                                return "[object Generator]";
                            }),
                            (a.keys = function (n) {
                                var e,
                                    r = [];
                                for (e in n) r.push(e);
                                return (
                                    r.reverse(),
                                        function e() {
                                            for (; r.length; ) {
                                                var t = r.pop();
                                                if (t in n) return (e.value = t), (e.done = !1), e;
                                            }
                                            return (e.done = !0), e;
                                        }
                                );
                            }),
                            (a.values = P),
                            (_.prototype = {
                                constructor: _,
                                reset: function (e) {
                                    if (((this.prev = 0), (this.next = 0), (this.sent = this._sent = c), (this.done = !1), (this.delegate = null), (this.method = "next"), (this.arg = c), this.tryEntries.forEach(x), !e))
                                        for (var t in this) "t" === t.charAt(0) && l.call(this, t) && !isNaN(+t.slice(1)) && (this[t] = c);
                                },
                                stop: function () {
                                    this.done = !0;
                                    var e = this.tryEntries[0].completion;
                                    if ("throw" === e.type) throw e.arg;
                                    return this.rval;
                                },
                                dispatchException: function (n) {
                                    if (this.done) throw n;
                                    var r = this;
                                    function e(e, t) {
                                        return (o.type = "throw"), (o.arg = n), (r.next = e), t && ((r.method = "next"), (r.arg = c)), !!t;
                                    }
                                    for (var t = this.tryEntries.length - 1; 0 <= t; --t) {
                                        var i = this.tryEntries[t],
                                            o = i.completion;
                                        if ("root" === i.tryLoc) return e("end");
                                        if (i.tryLoc <= this.prev) {
                                            var a = l.call(i, "catchLoc"),
                                                s = l.call(i, "finallyLoc");
                                            if (a && s) {
                                                if (this.prev < i.catchLoc) return e(i.catchLoc, !0);
                                                if (this.prev < i.finallyLoc) return e(i.finallyLoc);
                                            } else if (a) {
                                                if (this.prev < i.catchLoc) return e(i.catchLoc, !0);
                                            } else {
                                                if (!s) throw new Error("try statement without catch or finally");
                                                if (this.prev < i.finallyLoc) return e(i.finallyLoc);
                                            }
                                        }
                                    }
                                },
                                abrupt: function (e, t) {
                                    for (var n = this.tryEntries.length - 1; 0 <= n; --n) {
                                        var r = this.tryEntries[n];
                                        if (r.tryLoc <= this.prev && l.call(r, "finallyLoc") && this.prev < r.finallyLoc) {
                                            var i = r;
                                            break;
                                        }
                                    }
                                    var o = (i = i && ("break" === e || "continue" === e) && i.tryLoc <= t && t <= i.finallyLoc ? null : i) ? i.completion : {};
                                    return (o.type = e), (o.arg = t), i ? ((this.method = "next"), (this.next = i.finallyLoc), m) : this.complete(o);
                                },
                                complete: function (e, t) {
                                    if ("throw" === e.type) throw e.arg;
                                    return (
                                        "break" === e.type || "continue" === e.type
                                            ? (this.next = e.arg)
                                            : "return" === e.type
                                            ? ((this.rval = this.arg = e.arg), (this.method = "return"), (this.next = "end"))
                                            : "normal" === e.type && t && (this.next = t),
                                            m
                                    );
                                },
                                finish: function (e) {
                                    for (var t = this.tryEntries.length - 1; 0 <= t; --t) {
                                        var n = this.tryEntries[t];
                                        if (n.finallyLoc === e) return this.complete(n.completion, n.afterLoc), x(n), m;
                                    }
                                },
                                catch: function (e) {
                                    for (var t = this.tryEntries.length - 1; 0 <= t; --t) {
                                        var n = this.tryEntries[t];
                                        if (n.tryLoc === e) {
                                            var r,
                                                i = n.completion;
                                            return "throw" === i.type && ((r = i.arg), x(n)), r;
                                        }
                                    }
                                    throw new Error("illegal catch attempt");
                                },
                                delegateYield: function (e, t, n) {
                                    return (this.delegate = { iterator: P(e), resultName: t, nextLoc: n }), "next" === this.method && (this.arg = c), m;
                                },
                            }),
                            a
                    );
                })(e.exports);
                try {
                    regeneratorRuntime = e;
                } catch (t) {
                    "object" == ("undefined" == typeof globalThis ? "undefined" : _typeof(globalThis)) ? (globalThis.regeneratorRuntime = e) : Function("r", "regeneratorRuntime = r")(e);
                }
            },
            function (e, t, n) {},
            function (e, t, n) {
                n.r(t),
                    n.d(t, "default", function () {
                        return o;
                    });
                t = n(2);
                var r = n.n(t);
                (t = n(1)), (t = n(0));
                function h() {
                    try {
                        var e = window.__ctrPageConfiguration || {};
                        return (
                            (!e.successUrl || e.successUrl.length < 1) && (e.successUrl = "./success.html"),
                            (!e.declineUrl || e.declineUrl.length < 1) && (e.declineUrl = "./decline.html"),
                            (!e.confirmUrl || e.confirmUrl.length < 1) && (e.confirmUrl = "./confirm.html"),
                                e
                        );
                    } catch (e) {
                        console.error("[ctrwow-checkout-flow][checkoutData][getPageSettings] cannot read __ctrPageConfiguration"), console.error(window.__ctrPageConfiguration);
                    }
                }
                function i(t, e) {
                    var n,
                        r = Object.keys(t);
                    return (
                        Object.getOwnPropertySymbols &&
                        ((n = Object.getOwnPropertySymbols(t)),
                        e &&
                        (n = n.filter(function (e) {
                            return Object.getOwnPropertyDescriptor(t, e).enumerable;
                        })),
                            r.push.apply(r, n)),
                            r
                    );
                }
                function g(t) {
                    for (var e = 1; e < arguments.length; e++) {
                        var n = null != arguments[e] ? arguments[e] : {};
                        e % 2
                            ? i(Object(n), !0).forEach(function (e) {
                                r()(t, e, n[e]);
                            })
                            : Object.getOwnPropertyDescriptors
                            ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n))
                            : i(Object(n)).forEach(function (e) {
                                Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e));
                            });
                    }
                    return t;
                }
                function o(e) {
                    var r,
                        d,
                        t,
                        n,
                        i,
                        o,
                        u = ["JPY", "VND"],
                        p = e,
                        w = "",
                        f = p.getAttribute("upsell-popup") ? p.getAttribute("upsell-popup") : "NO",
                        a = p.querySelector(".google_apple_pay");
                    function m() {
                        var e, t, n, r;
                        window.ctrwowUtils.isBuilderMode() ||
                        ((e = document.querySelector("#wrapper-creditcard")),
                            (t = document.querySelector("#button-wrapper")),
                            (n = p.querySelector("#btn-checkout-credit")),
                            (r = document.querySelector(".btn_display_form.creditcard_button_display_form")),
                            !0 === window.displayCreditWrapper
                                ? (e && (e.style.display = ""), t && (t.style.display = ""), n && (n.style.display = "none"), r && r.classList.add("hidden"))
                                : !1 === window.displayCreditWrapper
                                ? (e && (e.style.display = "none"), t && (t.style.display = "none"), n && (n.style.display = ""), r && r.classList.remove("hidden"))
                                : (e && (e.style.display = ""), t && (t.style.display = ""), n && (n.style.display = "none")));
                    }
                    a && a.classList.add("hidden"),
                    window.ctrwowUtils.isBuilderMode() &&
                    ((t = p.querySelector("#btn-google-pay")),
                        (e = p.querySelector("#btn-apple-pay")),
                        (a = p.querySelector(".divider")),
                    t && t.classList.remove("hidden"),
                    e && e.classList.remove("hidden"),
                    a && a.classList.remove("hidden")),
                        (n = p.querySelector("#btn-checkout-credit")),
                        (i = document.querySelector("#wrapper-creditcard")),
                    (o = document.querySelector("#button-wrapper")) && (o.style.display = "none"),
                    window.ctrwowUtils.isBuilderMode() || (i && (i.style.display = "none")),
                        document.querySelector(".stripe_wrapper")
                            ? (n && n.classList.add("hidden"), (o = p.querySelector(".creditcard_button_display_form")) && o.classList.remove("hidden"))
                            : n &&
                            n.addEventListener("click", function (e) {
                                e.preventDefault(), i && (i.style.display = "block"), i && i.scrollIntoView({ behavior: "smooth" });
                            }),
                        window.ctrwowUtils
                            .getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/pubsub-js/1.7.0/pubsub.min.js", "https://js.stripe.com/v3/", window.ctrwowUtils.getCtrLibLink("ctrwowCheckout", "2.2.0-alpha.1")])
                            .then(function () {
                                return window.ctrwowCheckout.ready().then(function () {
                                    var a, s;
                                    p.hasAttribute("is-preorder-confirm") && window.ctrwowUtils.localStorage().set("isPreOrderConfirm", !0);
                                    var e = window.ctrwowUtils,
                                        t = { declineUrl: (t = h()).declineUrl, successUrl: t.confirmUrl, webKey: t.webKey, CID: t.cid };
                                    null !== localStorage.getItem("webkey_for_success_page") && (t.webKey = localStorage.getItem("webkey_for_success_page"));
                                    var c = new window.EmanageCRMJS({ webkey: t.webKey, cid: t.CID, lang: "", isTest: !!e.link.getParameterByName("isCardTest") });
                                    function n() {
                                        var e = window.ctrwowCheckout.checkoutData.getProduct(),
                                            t = 0;
                                        (n = document.querySelector(".js-grand-total")) && (t = Number(n.innerText.replace(/[^0-9]/g, ""))),
                                        window.additionPriceValue &&
                                        ((window.taxPercent = window.taxPercent || 0),
                                            (r = window.additionPriceValue * (1 + window.taxPercent)),
                                            (i = 0),
                                            (i = -1 < u.indexOf(window.localStorage.getItem("currencyCode")) ? r.toFixed(2) : r.toFixed(2).replace(/[^0-9]/g, "")),
                                            (t += Number(i)));
                                        var n = document.querySelector(".ph__products__predefinedData .list-item--checked .js-name"),
                                            r = document.querySelector(".ph__products__predefinedData .list-item--checked .js-diggy-name"),
                                            i = "";
                                        i = !0 === window.diggy__HasUpgrade ? (r ? r.innerText : e.productName) : n ? n.innerText : e.productName;
                                        window.paymentRequest.update({ currency: localStorage.getItem("currencyCode").toLowerCase(), total: { label: i, amount: t } }), window.paymentRequest.show();
                                    }
                                    function l() {
                                        console.log("paypay - trackingValue" + w),
                                            window.ctrwowUtils.tracking.pushGtmTrackingEvent(w),
                                            (window.paymentProcessorId = 54),
                                            (p.querySelector(".paymentProccessing").style.display = "block"),
                                            (d = window.ctrwowCheckout.checkoutData.getProduct().quantity),
                                            p.hasAttribute("use-diggy-popup") && document.querySelector(".extra-popup")
                                                ? window.ctrwowUtils.events.emit("triggerPaypalOrder")
                                                : document.querySelector(".widget_modal_upsell")
                                                ? (document.querySelector(".widget_modal_upsell").style.display = "block")
                                                : window.preventCheckoutGAP || n();
                                    }
                                    window.ctrwowCheckout.productListData.onProductListChange(function (e) {
                                        (r = e.prices), localStorage.setItem("countryCode", e.location.countryCode), localStorage.setItem("currencyCode", r[0].productPrices.DiscountedPrice.GlobalCurrencyCode);
                                        try {
                                            console.log("gap start get mid"),
                                                c.Order.getMidAndPrn(function (e) {
                                                    if (void 0 !== e)
                                                        try {
                                                            console.log("gap get mid success"),
                                                                (function (e) {
                                                                    console.log("gap init stripe button"), (a = c.isTest ? e.midId.toString().substr(0, 3) : e.midId);
                                                                    var t = window.Stripe(e.prnCode.split(";")[0], { stripeAccount: e.prnCode.split(";")[1] }),
                                                                        n = localStorage.getItem("countryCode"),
                                                                        r = localStorage.getItem("currencyCode"),
                                                                        i = 1,
                                                                        o = setInterval(function () {
                                                                            n && r ? ((n = localStorage.getItem("countryCode")), (r = localStorage.getItem("currencyCode")), clearInterval(o)) : (20 <= i && clearInterval(o), i++);
                                                                        }, 100);
                                                                    (e = window.ctrwowUtils.link.getQueryParameter("isTestGAP")) && "true" === e && ((n = "US"), (r = "usd")),
                                                                        n && r
                                                                            ? (console.log(n + " - " + r),
                                                                                (window.paymentRequest = t.paymentRequest({
                                                                                    country: n,
                                                                                    currency: r.toLowerCase(),
                                                                                    total: { label: "Sample Product", amount: 0 },
                                                                                    requestPayerName: !0,
                                                                                    requestPayerEmail: !0,
                                                                                    requestPayerPhone: !0,
                                                                                })),
                                                                                window.paymentRequest.canMakePayment().then(function (e) {
                                                                                    var t, n, r;
                                                                                    e
                                                                                        ? (console.log(e),
                                                                                            document.querySelector("body").classList.remove("google-in-progress", "apple-in-progres"),
                                                                                        (t = document.querySelector(".secure-logo-step2")) && (t.style.display = "none"),
                                                                                        (t = p.querySelector(".google_apple_pay")) && t.classList.remove("hidden"),
                                                                                            e.applePay
                                                                                                ? ((r = p.querySelector("#btn-apple-pay")),
                                                                                                    (n = p.querySelector(".divider")),
                                                                                                r &&
                                                                                                (localStorage.setItem("applePay", !0),
                                                                                                    r.classList.remove("hidden"),
                                                                                                n && n.classList.remove("hidden"),
                                                                                                    r.addEventListener("click", function (e) {
                                                                                                        e.preventDefault(),
                                                                                                            (window.gapFlag = !0),
                                                                                                            (window.paypalFlag = !1),
                                                                                                            (window.ccFlag = !1),
                                                                                                            document.querySelector("body").classList.add("apple-in-progress"),
                                                                                                            l();
                                                                                                    })))
                                                                                                : ((n = p.querySelector("#btn-google-pay")),
                                                                                                    (r = p.querySelector(".divider")),
                                                                                                n &&
                                                                                                (localStorage.setItem("googlePay", !0),
                                                                                                    n.classList.remove("hidden"),
                                                                                                r && r.classList.remove("hidden"),
                                                                                                    n.addEventListener("click", function (e) {
                                                                                                        e.preventDefault(),
                                                                                                            (window.gapFlag = !0),
                                                                                                            (window.paypalFlag = !1),
                                                                                                            (window.ccFlag = !1),
                                                                                                            document.querySelector("body").classList.add("google-in-progress"),
                                                                                                            l();
                                                                                                    }))))
                                                                                        : (m(), console.log("not support"));
                                                                                }),
                                                                                window.paymentRequest.on("cancel", function (e) {
                                                                                    console.log(e), (p.querySelector(".paymentProccessing").style.display = "none"), document.querySelector(".js-list .list-item--checked").click();
                                                                                    var t = Number(document.querySelector(".js-list .list-item--checked").dataset.id);
                                                                                    e = window.__productListData.data.productList.prices.find(function (e) {
                                                                                        return e.productId === t;
                                                                                    });
                                                                                    window.__checkoutData.data.product = e;
                                                                                }),
                                                                                window.paymentRequest.on("source", function (e) {
                                                                                    console.log(e), e.complete("success");
                                                                                    var t = e;
                                                                                    (s = t.source),
                                                                                        (e = t.payerName.split(" ")),
                                                                                        (t = t = {
                                                                                            customer: { email: t.payerEmail, phoneNumber: t.payerPhone, firstName: e[0] || "", lastName: e[1] || "" },
                                                                                            mid: { midId: a },
                                                                                            shippingAddress: {
                                                                                                firstName: e[0] || "",
                                                                                                lastName: e[1] || "",
                                                                                                address1: s.owner.address.line1,
                                                                                                address2: s.owner.address.line2,
                                                                                                city: s.owner.address.city,
                                                                                                zipCode: s.owner.address.postal_code,
                                                                                                state: s.owner.address.state,
                                                                                                countryCode: s.owner.address.country,
                                                                                                phoneNumber: t.payerPhone,
                                                                                            },
                                                                                            billingAddress: null,
                                                                                        }),
                                                                                    window.ctrwowUtils.isLiveMode() &&
                                                                                    t &&
                                                                                    ((t = g(g({}, t), {}, { payment: { paymentProcessorId: 54 } })),
                                                                                        (window.paymentInfo = JSON.stringify(t)),
                                                                                        console.log("use diggy popup: ", p.hasAttribute("use-diggy-popup")),
                                                                                        window.ctrwowCheckout.payment
                                                                                            .checkoutWithStripe(t, !0)
                                                                                            .then(function (t) {
                                                                                                (c.webkey = window.__ctrPageConfiguration.webKey),
                                                                                                    (c.Order.webkey = window.__ctrPageConfiguration.webKey),
                                                                                                    c.Order.confirmGoogleApplePay(t.trackingNumber, s.id, a, function (e) {
                                                                                                        console.log(e),
                                                                                                            (function () {
                                                                                                                console.log("update quantity for main order");
                                                                                                                var e = JSON.parse(window.ctrwowUtils.localStorage().get("orderInfo"));
                                                                                                                (e.quantity = d), window.ctrwowUtils.localStorage().set("orderInfo", JSON.stringify(e));
                                                                                                            })(),
                                                                                                            "YES" === f
                                                                                                                ? window.ctrwowUtils.events.emit("onDiggyGAPSuccess")
                                                                                                                : 0 < t.upsells.length && "" !== t.upsells[0].upsellUrl
                                                                                                                ? ((e = t.upsells[0].upsellUrl.substr(t.upsells[0].upsellUrl.lastIndexOf("/") + 1)), (location.href = e))
                                                                                                                : window.ctrwowUtils.link.redirectPage(h().successUrl);
                                                                                                    });
                                                                                            })
                                                                                            .catch(function () {
                                                                                                return (p.querySelector(".paymentProccessing").style.display = "none");
                                                                                            }));
                                                                                }))
                                                                            : console.log("can get country code or currency code");
                                                                })(e);
                                                        } catch (e) {
                                                            console.log("gap get mid error"), m(), console.log(e);
                                                        }
                                                    else m();
                                                }, 54);
                                        } catch (e) {
                                            console.log("can not get midid: ", e);
                                        }
                                    }),
                                        (window.gap = { handleAppleGoogleClick: n });
                                });
                            });
                }
                n(4);
            },
        ]).default(this, e);
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i07754q")).length; i < len; i++)
    (function () {
        var e = document.querySelector('[data-gjs-type="wrapper"]'),
            t = this.querySelector("#wrapper-creditcard"),
            n = this.querySelector("#button-wrapper");
        !e &&
        n &&
        n.addEventListener("click", function () {
            (t.style.display = "block"), (n.style.display = "none"), t.scrollIntoView({ behavior: "smooth" });
        }),
        (!ctrwowUtils.isBuilderMode() && n) || (t.style.display = "block");
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ibsha51")).length; i < len; i++)
    (function () {
        try {
            var e = { "enable-billing": "true", country: "en" };
        } catch (e) {
            console.log(e);
        }
        if (window.ctrDebug && window.ctrDebug.run(this, "widget-shipping-and-billing-form", e)) return !0;
        (function (n) {
            var r = {};
            function i(e) {
                if (r[e]) return r[e].exports;
                var t = (r[e] = { i: e, l: !1, exports: {} });
                return n[e].call(t.exports, t, t.exports, i), (t.l = !0), t.exports;
            }
            return (
                (i.m = n),
                    (i.c = r),
                    (i.d = function (e, t, n) {
                        i.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n });
                    }),
                    (i.r = function (e) {
                        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                    }),
                    (i.t = function (t, e) {
                        if ((1 & e && (t = i(t)), 8 & e)) return t;
                        if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
                        var n = Object.create(null);
                        if ((i.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                            for (var r in t)
                                i.d(
                                    n,
                                    r,
                                    function (e) {
                                        return t[e];
                                    }.bind(null, r)
                                );
                        return n;
                    }),
                    (i.n = function (e) {
                        var t =
                            e && e.__esModule
                                ? function () {
                                    return e.default;
                                }
                                : function () {
                                    return e;
                                };
                        return i.d(t, "a", t), t;
                    }),
                    (i.o = function (e, t) {
                        return Object.prototype.hasOwnProperty.call(e, t);
                    }),
                    (i.p = ""),
                    i((i.s = 1))
            );
        })([
            function (e, t, n) {},
            function (e, t, n) {
                n.r(t),
                    n.d(t, "default", function () {
                        return s;
                    }),
                    n(0);
                var r = function (e, t) {
                    var n,
                        r = e.querySelector("[name=isHideBilling]"),
                        i = e.querySelector("[name=billingAddress]");
                    if (document.querySelector('[data-gjs-type="wrapper"]')) return (e = t ? "block" : "none"), (r.style.display = e), void (i.style.display = e);
                    t &&
                    ((r.style.display = "block"),
                        (n = r.querySelector("input")),
                        (i.style.display = $(n).prop("checked") ? "none" : "block"),
                    n &&
                    $(n).on("change", function () {
                        i.style.display = $(n).prop("checked") ? "none" : "block";
                    }));
                };
                function c(e, t, i) {
                    var o, a;
                    e &&
                    (console.log("load state from source code"),
                        ((o = e.getElementsByClassName("state-select")[0]).options.length = 0),
                    o.classList.contains("no-required") || o.setAttribute("required", ""),
                        (a = '<option value="">----</option>'),
                        "" === t || o.classList.contains("no-required")
                            ? ((o.innerHTML = a), o.removeAttribute("disabled"))
                            : window.ctrwowCheckout.getCrmInstance().Campaign.getCountryStates(t, function (e) {
                                if (((window.states = Array.prototype.slice.call(e)), e instanceof Error || void 0 === e)) return o.removeAttribute("required"), void window.ctrwowUtils.events.emit("stateLoaded");
                                for (var t = 0, n = Object.keys(e); t < n.length; t++) {
                                    var r = n[t];
                                    !(function (e, t) {
                                        if (e && t)
                                            return (
                                                (e = e
                                                    .normalize("NFD")
                                                    .replace(/[\u0300-\u036f]/g, "")
                                                    .split(" ")
                                                    .join("")),
                                                    t
                                                        .normalize("NFD")
                                                        .replace(/[\u0300-\u036f]/g, "")
                                                        .split(" ")
                                                        .join("")
                                                        .includes(e)
                                            );
                                    })(e[r].StateName, i)
                                        ? (a += '<option value="'.concat(e[r].StateCode, '">').concat(e[r].StateName, "</option>"))
                                        : (a += '<option value="'.concat(e[r].StateCode, '" selected>').concat(e[r].StateName, "</option>"));
                                }
                                (o.innerHTML = a), $(o).trigger("change"), o.removeAttribute("disabled"), window.ctrwowUtils.events.emit("stateLoaded");
                            }));
                }
                function l(e, t) {
                    e ? ((e = decodeURIComponent(e)), t.setAttribute("postcode-pattern", e)) : t.removeAttribute("postcode-pattern");
                }
                function d(e, t) {
                    (null == t || t > e.length) && (t = e.length);
                    for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n];
                    return r;
                }
                function f(a) {
                    var s = a.getElementsByClassName("street-name-field");
                    function e(i) {
                        var o = new window.google.maps.places.Autocomplete(s[i]);
                        o.setTypes(["geocode", "establishment"]),
                            o.setFields(["address_component", "formatted_address"]),
                            o.addListener("place_changed", function () {
                                var e,
                                    t = "",
                                    n = (function (e, t) {
                                        var n = ("undefined" != typeof Symbol && e[Symbol.iterator]) || e["@@iterator"];
                                        if (!n) {
                                            if (
                                                Array.isArray(e) ||
                                                (n = (function (e, t) {
                                                    if (e) {
                                                        if ("string" == typeof e) return d(e, void 0);
                                                        var n = Object.prototype.toString.call(e).slice(8, -1);
                                                        return "Map" === (n = "Object" === n && e.constructor ? e.constructor.name : n) || "Set" === n
                                                            ? Array.from(e)
                                                            : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)
                                                                ? d(e, void 0)
                                                                : void 0;
                                                    }
                                                })(e)) ||
                                                (t && e && "number" == typeof e.length)
                                            ) {
                                                n && (e = n);
                                                var r = 0;
                                                return {
                                                    s: (t = function () {}),
                                                    n: function () {
                                                        return r >= e.length ? { done: !0 } : { done: !1, value: e[r++] };
                                                    },
                                                    e: function (e) {
                                                        throw e;
                                                    },
                                                    f: t,
                                                };
                                            }
                                            throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
                                        }
                                        var i,
                                            o = !0,
                                            a = !1;
                                        return {
                                            s: function () {
                                                n = n.call(e);
                                            },
                                            n: function () {
                                                var e = n.next();
                                                return (o = e.done), e;
                                            },
                                            e: function (e) {
                                                (a = !0), (i = e);
                                            },
                                            f: function () {
                                                try {
                                                    o || null == n.return || n.return();
                                                } finally {
                                                    if (a) throw i;
                                                }
                                            },
                                        };
                                    })(o.getPlace().address_components);
                                try {
                                    for (n.s(); !(e = n.n()).done; ) {
                                        var r = e.value;
                                        switch (r.types[0]) {
                                            case "street_number":
                                                t += r.long_name;
                                                break;
                                            case "route":
                                                t += " ".concat(r.long_name);
                                        }
                                    }
                                } catch (e) {
                                    n.e(e);
                                } finally {
                                    n.f();
                                }
                                $(s[i]).attr("data-value", t),
                                    $(s[i]).val(t),
                                0 === i &&
                                (function (e, t) {
                                    function n(t, e, n) {
                                        return (
                                            (n = 2 < arguments.length && void 0 !== n ? n : "long_name"),
                                                0 <
                                                (e = e.filter(function (e) {
                                                    return e.types[0] === t;
                                                })).length
                                                    ? e[0][n]
                                                    : ""
                                        );
                                    }
                                    var r = e.getPlace().address_components,
                                        i = n("country", r, "short_name"),
                                        o = t.getElementsByClassName("country-select"),
                                        a = window.countries
                                            ? window.countries.find(function (e) {
                                                return e.countryCode === i;
                                            })
                                            : null;
                                    (o[0].value = ""),
                                        o[0].setAttribute("value", ""),
                                        c(t, "", ""),
                                    a &&
                                    ((e = a.countryCode),
                                        (o[0].value = e),
                                        $(o[0]).trigger("change"),
                                        (o = n("administrative_area_level_1", r)),
                                        c(t, i, o),
                                    (o = t && t.querySelector('input[postcode="true"]')) && l(a.postalCodeRegex, o)),
                                        (r = n("locality", r, "short_name")),
                                        ((t = t.getElementsByClassName("city-field"))[0].value = r),
                                        console.log("change country"),
                                        console.log("change country"),
                                        console.log("change country"),
                                        $(t[0]).trigger("change");
                                })(o, a);
                            });
                    }
                    for (var t = 0; t < s.length; t++) e(t);
                }
                var i = function (e, t) {},
                    o = function (d, u) {
                        var p,
                            e = window.ctrwowCheckout.getCrmInstance();
                        function w(e) {
                            var t,
                                n = e.target.value;
                            c(d, "", ""),
                            n &&
                            ((t = n),
                                (n = (e = window.countries.find(function (e) {
                                    return e.countryCode === t;
                                })).countryCode),
                                (e = e.postalCodeRegex),
                            n && c(d, n, ""),
                            (n = d && d.querySelector('input[postcode="true"]')) && l(e, n));
                        }
                        d &&
                        e &&
                        e.webkey &&
                        ((p = d.getElementsByClassName("country-select")),
                            (function () {
                                var r, i, e, t, o;
                                window.isStickyIO ||
                                ((r = p),
                                    (i = w),
                                    (e = u),
                                    (t = window.ctrwowCheckout.getCrmInstance()),
                                    (o = (e = "undefined" === e.country ? "" : e.country).includes("{[") || !e ? null : e),
                                    t.Campaign.getCountries(function (e) {
                                        var t,
                                            n = (n = (n = window.ctrwowCheckout && (window.ctrwowCheckout.getCheckoutConfig() || [])) && window.ctrwowCheckout && (window.ctrwowCheckout.productListData.getProductFromCache(n.webKey) || null))
                                                ? n.location && (n.location.countryCode || null)
                                                : null;
                                        Array.isArray(e) &&
                                        ((window.countries = Array.prototype.slice.call(e)),
                                            (t = '<option value="">----</option>'),
                                            window.countries.forEach(function (e) {
                                                t += "<option value=".concat(e.countryCode, ">").concat("en" === o || null === o ? e.countryName : e.countryNameLocalized, "</option>");
                                            }),
                                            (r[0].innerHTML = t),
                                            r[0].addEventListener("change", i),
                                        n && ((r[0].value = n), r[0].dispatchEvent(new Event("change"))));
                                    }, o)),
                                    f(d);
                                var n,
                                    a,
                                    s,
                                    c,
                                    l = String("en");
                                (n = d),
                                    (l = l),
                                window.ctrwowUtils.isBuilderMode() ||
                                ("de" === l &&
                                    ((a = n.querySelector("[name=address1]")),
                                        (s = n.querySelector(".seperate-field__1")),
                                        (c = n.querySelector(".seperate-field__2")),
                                        $(s).on("change", function (e) {
                                            a.value = e.target.value + " " + c.value;
                                        }),
                                        $(c).on("change", function (e) {
                                            a.value = s.value + " " + e.target.value;
                                        })));
                            })());
                    },
                    a = function (e, n) {
                        var t, i, o, a, s, c, l, d, u, p, w, r;
                        function f(e) {
                            switch (e) {
                                case "1":
                                    i.value = a.value + ", " + s.value;
                                    break;
                                case "2":
                                    o.value = l.value + " " + c.value;
                            }
                        }
                        window.ctrwowUtils.isBuilderMode() ||
                        ("br" === n &&
                            ((t = e.querySelector(".shipping_cep")),
                                (i = e.querySelector('.shipping-form input[name="address1"')),
                                (o = e.querySelector('.shipping-form input[name="address2"')),
                                (a = e.querySelector(".shipping_rua")),
                                (s = e.querySelector(".shipping_number")),
                                (c = e.querySelector(".shipping_complemento")),
                                (l = e.querySelector(".shipping_bairro")),
                                (d = e.querySelector(".shipping-form .city-field")),
                                (u = e.querySelector(".shipping-form .state-select")),
                                (p = e.querySelector(".shipping-form .country-select")),
                                (w = e.querySelector('.shipping-form input[name="zipCode"]')),
                                c.removeAttribute("required"),
                                t.addEventListener("blur", function (e) {
                                    e.preventDefault();
                                    var t = this.value.replace(/[^0-9]/, "");
                                    8 === (w.value = t).length &&
                                    ((e = "https://api.findcep.com/v1/cep/".concat(t, ".json")),
                                        fetch(e)
                                            .then(function (e) {
                                                if (e.ok) return e.json();
                                                throw new Error("404 not found!");
                                            })
                                            .then(function (r) {
                                                r &&
                                                ((a.value = r.logradouro || ""),
                                                    (l.value = r.bairro || ""),
                                                    (d.value = r.cidade || ""),
                                                    (p.value = n.toLocaleUpperCase()),
                                                    (w.value = t),
                                                "" !== a.value.trim() && (a.focus(), a.setAttribute("disabled", !0)),
                                                "" !== l.value && (l.focus(), l.setAttribute("disabled", !0)),
                                                "" !== d.value && (d.focus(), d.setAttribute("disabled", !0)),
                                                    p.addEventListener("change", function () {
                                                        var e, t, n;
                                                        (e = u),
                                                            (t = r),
                                                            (n = setTimeout(function () {
                                                                1 < e.options.length &&
                                                                ((e.value = t.uf || ""),
                                                                "" !== e &&
                                                                (e.focus(),
                                                                    setTimeout(function () {
                                                                        e.setAttribute("disabled", !0);
                                                                    }, 100)),
                                                                    clearInterval(n));
                                                            }, 200));
                                                    }),
                                                    p.focus(),
                                                    p.setAttribute("disabled", !0),
                                                    p.dispatchEvent(new CustomEvent("change")),
                                                    s.focus(),
                                                    (i.value = a.value + ", " + s.value),
                                                    (o.value = l.value + " " + c.value));
                                            })
                                            .catch(function () {
                                                alert("CEP não encontrado!"),
                                                    a.removeAttribute("disabled"),
                                                    a.parentNode.querySelector(".control-label").removeAttribute("style"),
                                                    l.removeAttribute("disabled"),
                                                    l.parentNode.querySelector(".control-label").removeAttribute("style"),
                                                    d.removeAttribute("disabled"),
                                                    d.parentNode.querySelector(".control-label").removeAttribute("style"),
                                                    u.removeAttribute("disabled"),
                                                    p.removeAttribute("disabled"),
                                                    (a.value = ""),
                                                    (l.value = ""),
                                                    (d.value = ""),
                                                    (u.value = ""),
                                                    (i.value = a.value + ", " + s.value),
                                                    (o.value = l.value + " " + c.value);
                                            }));
                                }),
                                a.addEventListener("change", function () {
                                    f("1");
                                }),
                                s.addEventListener("change", function () {
                                    f("1");
                                }),
                                l.addEventListener("change", function () {
                                    f("2");
                                }),
                                c.addEventListener("change", function () {
                                    f("2");
                                }),
                                (r = "00000-000"),
                                t.addEventListener("keypress", function (e) {
                                    var t = e.which || e.keyCode,
                                        n = "";
                                    (47 < t && t < 58) || 8 === t || 46 === t || (36 < t && t < 41) || (15 < t && t < 19) || 9 === t || 13 === t
                                        ? ((n = this.value.toString().replace(/\-/g, "").replace(/\//g, "").substring(0, r.length)),
                                            (this.value = (function (e) {
                                                for (var t = e.replace("-", ""), n = [], r = 0; r < t.length; r += 5) n.length < 5 && n.push(t.substring(r, r + 5));
                                                return n.join("-");
                                            })(this.value)),
                                        n.length >= r.length - 1 && e.preventDefault())
                                        : e.preventDefault();
                                })));
                    };
                function s(e, t) {
                    window.ctrwowUtils.getDependencies(["https://maps.googleapis.com/maps/api/js?key=AIzaSyCNfkLr7y20yUe-263iDsVwu1Q1LcmmiAY&libraries=places", window.ctrwowUtils.getCtrLibLink("ctrwowCheckout", "2.1.0")]).then(function () {
                        return window.ctrwowCheckout.ready().then(function () {
                            o(e.querySelector("[name=shippingAddress]"), t), o(e.querySelector("[name=billingAddress]"), t);
                        });
                    }),
                        r(e, "true");
                    var n = String("en");
                    n.includes("{[") && (n = "en"), e.querySelector(".wrap-form") && e.querySelector(".wrap-form").classList.add(n + "-form"), a(e, n), i(e, n);
                }
            },
        ]).default(this, e);
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ismibrl")).length; i < len; i++)
    (function () {
        var l = $(this),
            e = function (e) {
                var t = l.find(e);
                return t.length ? $(t[0]) : null;
            },
            d = e(".firstname"),
            u = e(".lastname"),
            p = e(".email"),
            w = e(".phone");
        function t() {
            var n = p.val() && 0 === l.find("input[name=" + p.attr("name") + "].error").length,
                r = d.val() && 0 === l.find("input[name=" + d.attr("name") + "].error").length,
                i = u.val() && 0 === l.find("input[name=" + u.attr("name") + "].error").length,
                o = w.val() && 0 === l.find("input[name=" + w.attr("name") + "].error").length,
                e = window.ctrwowCheckout.getCheckoutConfig(),
                a = e.webKey,
                s = e.cid,
                c = (e.offerName, e.websaleApiUrl);
            n &&
            a &&
            s &&
            window.ctrwowUtils.getUserAnalyticsInfo().then(function (e) {
                var t = { analyticsV2: e, email: p.val(), firstName: r ? d.val() : "", lastName: i ? u.val() : "", phoneNumber: o ? w.val() : "", isFromEmailWidget: "false" };
                window.fetch(c + "/leadgens/" + a, { method: "POST", headers: { "content-type": "application/json", X_CID: s }, body: JSON.stringify(t) }), f(n, r, i, o);
            });
        }
        var f = function (e, t, n, r) {
            if (t && n && e) {
                var i = { email: p.val(), firstName: d.val(), lastName: u.val(), phoneNumber: w.val() };
                window.__CTR_FP_TRACKING &&
                window.__CTR_FP_TRACKING.pushUserInfo(i, function (e) {
                    console.log("__CTR_FP_TRACKING.trackUserInfo success", e);
                });
            }
        };
        function n() {
            var e = p.val() && 0 === l.find("input[name=" + p.attr("name") + "].error").length,
                t = d.val() && 0 === l.find("input[name=" + d.attr("name") + "].error").length,
                n = u.val() && 0 === l.find("input[name=" + u.attr("name") + "].error").length,
                r = w.val() && 0 === l.find("input[name=" + w.attr("name") + "].error").length;
            f(e, t, n, r);
        }
        window.ctrwowUtils.getDependencies([window.ctrwowUtils.getCtrLibLink("ctrwowCheckout", "2.1.0")]).then(function () {
            return window.ctrwowCheckout.ready().then(function () {
                p &&
                p.on("blur", function () {
                    var e = window.localStorage.getItem("customer_email");
                    (e && e === p.val().trim()) || "" === p.val().trim() || (t(), localStorage.setItem("customer_email", p.val().trim()));
                }),
                w &&
                w.on("blur", function () {
                    var e = window.localStorage.getItem("customer_phone");
                    (e && e === w.val().trim()) || "" === w.val().trim() || (t(), localStorage.setItem("customer_phone", w.val().trim()));
                }),
                d &&
                d.on("blur", function () {
                    var e = window.localStorage.getItem("customer_firstname");
                    (e && e === d.val().trim()) || "" === d.val().trim() || (n(), localStorage.setItem("customer_firstname", d.val().trim()));
                }),
                u &&
                u.on("blur", function () {
                    var e = window.localStorage.getItem("customer_lastname");
                    (e && e === u.val().trim()) || "" === u.val().trim() || (n(), localStorage.setItem("customer_lastname", u.val().trim()));
                });
            });
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#if9ym5r, #ikgevnt, #ij3h34x, #is-hide-billing-form, #billing-form")).length; i < len; i++)
    (function () {
        var s = this;
        window.ctrwowUtils.getDependencies(["https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"]).then(function () {
            if (s.id) {
                var e = {},
                    t = $("#" + s.id).find("input, textarea, select");
                if (t.length)
                    for (var n = 0; n < t.length; n++) {
                        e[t[n].name] = {};
                        var r = $(t[n]).attr("required-text"),
                            i = $(t[n]).attr("regex-text"),
                            o = $(t[n]).attr("message-rule-language");
                        r && (e[t[n].name].required = r),
                        i && (e[t[n].name].regex = i),
                        o &&
                        ((e[t[n].name].remote = o),
                            (e[t[n].name].email = o),
                            (e[t[n].name].url = o),
                            (e[t[n].name].date = o),
                            (e[t[n].name].dateISO = o),
                            (e[t[n].name].number = o),
                            (e[t[n].name].digits = o),
                            (e[t[n].name].equalTo = o),
                            (e[t[n].name].accept = o),
                            (e[t[n].name].maxlength = o),
                            (e[t[n].name].minlength = o),
                            (e[t[n].name].rangelength = o),
                            (e[t[n].name].range = o),
                            (e[t[n].name].max = o),
                            (e[t[n].name].min = o),
                            (e[t[n].name].postcode = o),
                            (e[t[n].name].creditcard = o),
                        ("creditcard" !== t[n].name && "expirydate" !== t[n].name) || (e[t[n].name].text = o));
                    }
                var a = $("#" + s.id).validate({
                    onfocusout: function (e, t) {
                        a.element("#" + e.id);
                    },
                    focusCleanup: !0,
                    onsubmit: !1,
                    messages: e,
                });
                jQuery.validator.addMethod(
                    "regex",
                    function (e, t) {
                        var n = t.getAttribute("regex");
                        return new RegExp(n, "g").test(e);
                    },
                    "Please enter a valid format."
                );
            }
            window.ctrwowUtils.events.on(s.name, function (e) {
                console.log("form data", e), s.getAttribute("action") && s.submit();
            });
        });
    }.bind(items[i])());
for (
    i = 0,
        len = (items = document.querySelectorAll(
            "#ids9tq3, #iomcfds, #i502inp, #icx5ctg, #i8skriv, #ixafsui, #i5j11eb, #iaynw87, #i4op4yg, #i72m1gc, #it6f7aq, #if20qal, #ilkcfnb, #iuyjn04, #iim6n1q, #credit_card_brand, #i6u5cre, #creditcard_expirydate, #idvmj1m, #iwcoqii"
        )).length;
    i < len;
    i++
)
    (function () {
        var t = $(this),
            e = t.parent(".form-group").find(".control-label"),
            n = function () {
                e.length && e.css({ "font-size": "0.8rem", top: "5px" });
            },
            r = function () {
                e.length && e.css({ "font-size": "1rem", top: "16px" });
            };
        t.val() ? n() : r(),
            t.on("focus", function () {
                n();
            }),
            t.on("blur change", function () {
                t.val() ? (n(), t.attr("value", t.val())) : (r(), t.removeAttr("value"));
            }),
            t.on("keyup", function () {
                "TEXTAREA" === t.prop("tagName") && (t.css("height", "1px"), t.css("height", 5 + t.prop("scrollHeight") + "px"));
            }),
            window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"]).then(function () {
                var e = t.attr("mask");
                e && t.mask(e);
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i8fay0c")).length; i < len; i++)
    (function () {
        var t = $(this),
            e = t.parent(".form-group").find(".control-label"),
            n = function () {
                e.length && e.css({ "font-size": "0.8rem", top: "5px" });
            },
            r = function () {
                e.length && e.css({ "font-size": "1rem", top: "16px" });
            };
        t.val() ? n() : r(),
            t.on("focus", function () {
                n();
            }),
            t.on("blur change", function () {
                t.val() ? (n(), t.attr("value", t.val())) : (r(), t.removeAttr("value"));
            }),
            t.on("keyup", function () {
                "TEXTAREA" === t.prop("tagName") && (t.css("height", "1px"), t.css("height", 5 + t.prop("scrollHeight") + "px"));
            }),
            window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"]).then(function () {
                var e = t.attr("mask");
                e && t.mask(e);
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i724bgf, #irhf1al, #monthddl, #yearddl, #i7np9ul, #iryxie1")).length; i < len; i++)
    (function () {
        var t = $(this),
            e = t.parent(".form-group").find(".control-label"),
            n = function () {
                e.length && e.css({ "font-size": "0.8rem", top: "5px" });
            },
            r = function () {
                e.length && e.css({ "font-size": "1rem", top: "16px" });
            };
        t.val() ? n() : r(),
            t.on("focus", function () {
                n();
            }),
            t.on("blur change", function () {
                t.val() ? (n(), t.attr("value", t.val())) : (r(), t.removeAttr("value"));
            }),
            t.on("keyup", function () {
                "TEXTAREA" === t.prop("tagName") && (t.css("height", "1px"), t.css("height", 5 + t.prop("scrollHeight") + "px"));
            }),
            window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"]).then(function () {
                var e = t.attr("mask");
                e && t.mask(e);
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#izvzqva, #ik2jos4")).length; i < len; i++)
    (function () {
        var o = $(this),
            s = function (e) {
                var t = {},
                    n = $(e).find("input, textarea, select");
                if (n.length)
                    for (var r = 0; r < n.length; r++) {
                        var i = $(n[r]).val();
                        if ("radio" === $(n[r]).attr("type") && !$(n[r]).prop("checked")) break;
                        i && "" !== n[r].name && (t[n[r].name] = i);
                    }
                return t;
            },
            a = function (e) {
                for (var t, n, r = {}, i = 0; i < e.length; i++) {
                    var o = $(e[i]).validate();
                    if ("none" !== $(e[i]).css("display"))
                        if (o && o.form() && r) {
                            var a = window.ctrwowUtils.form.asyncValidateForm();
                            a.isValid ? (r[$(e[i]).attr("name")] = s(e[i])) : ((r = null), alert(a.message));
                        } else r && ((r = null), (t = e[i]), (n = void 0), (n = t.querySelector(".error")) && n.scrollIntoView({ block: "center", behavior: "smooth" }));
                }
                return r || {};
            },
            c = function (e) {
                for (var t = 0; t < e.length; t++) {
                    var n = $(e[t]).find("input, textarea, select");
                    if (n.length)
                        for (var r = 0; r < n.length; r++) {
                            var i = $(n[r]).attr("type");
                            "radio" !== i && "checkbox" !== i && $(n[r]).val("");
                        }
                }
            };
        window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/pubsub-js/1.7.0/pubsub.min.js", "https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"]).then(function () {
            o.on("click", function (e) {
                e.preventDefault();
                var t = o.attr("type"),
                    n = o.closest("form"),
                    r = $("body").find("form");
                switch (t) {
                    case "submit":
                        var i = {};
                        n.length && (i = a(n)),
                        r.length && !n.length && (i = a(r)),
                            console.log("submitData", i),
                        Object.keys(i).length && window.PubSub.publish(o.attr("name"), i),
                        Object.keys(i).length && window.ctrwowUtils.events.emit(n.attr("name"), i),
                        Object.keys(i).length && window.ctrwowUtils.events.emit("ctr_form_" + o.attr("name"), i);
                        break;
                    case "reset":
                        n.length && c(n), r.length && !n.length && c(r), console.log("resetData");
                }
            });
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iic6jbn")).length; i < len; i++)
    (function () {
        String.prototype.formatString = function (e) {
            var t = "";
            switch (e) {
                case "0000-0000-0000-0000":
                    for (var n = [], r = 0; r < this.length; r += 4) n.length < 4 && n.push(this.substring(r, r + 4));
                    t = n.join("-");
                    break;
                case "0000-0000-0000-0000-000":
                    n = [];
                    for (var i = 0; i < this.length; i += 4) 4 == n.length ? n.push(this.substring(i, i + 3)) : n.push(this.substring(i, i + 4));
                    t = n.join("-");
                    break;
                case "0000":
                    t = 4 < this.length ? this.substring(0, 4) : this;
                    break;
                case "00/00":
                    n = [];
                    for (var o = 0; o < this.length; o += 2) n.length < 2 && n.push(this.substring(o, o + 2));
                    t = n.join("/");
                    break;
                case "0000-****-****-0000":
                    n = [];
                    for (var a = 0; a < this.length; a += 4) n.length < 4 && (0 < n.length && n.length < 3 ? n.push("****") : n.push(this.substring(a, a + 4)));
                    t = n.join("-");
                    break;
                case "00000-000":
                    n = [];
                    for (var s = 0; s < this.length; s += 5) n.length < 5 && n.push(this.substring(s, s + 5));
                    t = n.join("-");
                    break;
                default:
                    t = this;
            }
            return t;
        };
        var o = $(this),
            f = "";
        function a(e, t) {
            var n = [];
            (n[0] = "Unknown card type."),
                (n[1] = "No card number provided."),
                (n[2] = "Credit card number is in invalid format."),
                (n[3] = "Credit card number is invalid."),
                (n[4] = "Credit card number has an inappropriate number of digits."),
                (n[5] = "Warning! This credit card number is associated with a scam attempt.");
            var r = new Array();
            (r[0] = { name: "Visa", length: "13,16", prefixes: "4", checkdigit: !0 }),
                (r[1] = { name: "Master", length: "16", prefixes: "51,52,53,54,55", checkdigit: !0 }),
                (r[2] = { name: "DinersClub", length: "14,16", prefixes: "36,38,54,55", checkdigit: !0 }),
                (r[3] = { name: "CarteBlanche", length: "14", prefixes: "300,301,302,303,304,305", checkdigit: !0 }),
                (r[4] = { name: "AmEx", length: "15", prefixes: "34,37", checkdigit: !0 }),
                (r[5] = { name: "Discover", length: "16,17,18,19", prefixes: "6011,622,644,645,646,647,648,649,65", checkdigit: !0 }),
                (r[6] = { name: "JCB", length: "16", prefixes: "35", checkdigit: !0 }),
                (r[7] = { name: "enRoute", length: "15", prefixes: "2014,2149", checkdigit: !0 }),
                (r[8] = { name: "Solo", length: "16,18,19", prefixes: "6334,6767", checkdigit: !0 }),
                (r[9] = { name: "Switch", length: "16,18,19", prefixes: "4903,4905,4911,4936,564182,633110,6333,6759", checkdigit: !0 }),
                (r[10] = { name: "Maestro", length: "12,13,14,15,16,18,19", prefixes: "5018,5020,5038,6304,6759,6761,6762,6763", checkdigit: !0 }),
                (r[11] = { name: "VisaElectron", length: "16", prefixes: "4026,417500,4508,4844,4913,4917", checkdigit: !0 }),
                (r[12] = { name: "LaserCard", length: "16,17,18,19", prefixes: "6304,6706,6771,6709", checkdigit: !0 });
            for (var i = -1, o = 0; o < r.length; o++)
                if (t.toLowerCase() == r[o].name.toLowerCase()) {
                    i = o;
                    break;
                }
            if (-1 == i) return (f = n[0]), !1;
            if (0 == e.length) return (f = n[1]), !1;
            var a = (e = e.replace(/\s/g, ""));
            if (!/^[0-9]{13,19}$/.exec(a)) return (f = n[2]), !1;
            if (r[i].checkdigit) {
                var s,
                    c = 0,
                    l = 1;
                for (o = a.length - 1; 0 <= o; o--) 9 < (s = Number(a.charAt(o)) * l) && ((c += 1), (s -= 10)), (c += s), (l = 1 == l ? 2 : 1);
                if (c % 10 != 0) return { isSuccess: !1, message: n[3] };
            }
            var d = !1,
                u = !1,
                p = r[i].prefixes.split(",");
            for (o = 0; o < p.length; o++) {
                new RegExp("^" + p[o]).test(a) && (u = !0);
            }
            if (!u) return (f = n[3]), !1;
            var w = r[i].length.split(",");
            for (l = 0; l < w.length; l++) a.length == w[l] && (d = !0);
            return !!d || ((f = n[4]), !1);
        }
        function i(e, t) {
            var n,
                r = e.toString().replace(/-/g, ""),
                i = !0 === a((n = r), "Visa") ? "Visa" : !0 === a(n, "Master") ? "Master" : !0 === a(n, "AmEx") ? "AmEx" : !0 === a(n, "Discover") ? "Discover" : !0 === a(n, "JCB") ? "JCB" : void 0;
            return void 0 === i ? (t.setAttribute("value", ""), o.find("#credit_card_brand").val(""), console.warn("message", f), !1) : (t.setAttribute("value", r), o.find("#credit_card_brand").val(i), !0);
        }
        function s(e) {
            return document.getElementById(e);
        }
        function c(e) {
            return document.querySelector(e);
        }
        var l = String("dropdown");
        console.log("Select: ", l);
        var e = this.querySelector(".layout1"),
            t = this.querySelector(".layout2");
        window.ctrwowUtils.isBuilderMode() && ("textbox" === l ? (e && (e.style.display = "inherit"), t && (t.style.display = "none")) : "dropdown" === l && (e && (e.style.display = "none"), t && (t.style.display = "inherit")));
        var n = c(".ccv-popup"),
            r = n.querySelector("span.close");
        r &&
        r.addEventListener("click", function () {
            n.classList.remove("open");
        }),
            n.addEventListener("click", function (e) {
                e.target.closest(".content") || n.classList.remove("open");
            });
        var d,
            u = this.querySelector(".fa.fa-question-circle");
        function p() {
            var e = new Date(),
                t = e.getFullYear(),
                n = e.getMonth() + 1,
                r = c("#monthddl");
            s("yearddl").value === t.toString() && Number(r.value) < n && (r.value = n < 10 ? "0".concat(n) : "".concat(n));
        }
        function w() {
            if ("textbox" === l) {
                var e = document.querySelector("input[name=expirydate]"),
                    t = new Date().getFullYear().toString().substr(0, 2),
                    n = e.value.split("/"),
                    r = "";
                2 === n.length && (r = n[0] + "/" + t + n[1]), (s("creditcard_expirydate").value = r);
            } else "dropdown" === l && (s("creditcard_expirydate").value = s("monthddl").value + "/" + s("yearddl").value.toString());
        }
        function m() {
            s("monthddl").addEventListener(
                "change",
                function () {
                    var e = new Date().getMonth() + 1,
                        t = new Date().getFullYear(),
                        n = Number(s("monthddl").value),
                        r = Number(s("yearddl").value);
                    n < e && t === r && (s("yearddl").value = r + 1), w();
                },
                !1
            ),
                s("yearddl").addEventListener(
                    "change",
                    function () {
                        p(), w();
                    },
                    !1
                );
        }
        u &&
        u.addEventListener("click", function (e) {
            e.preventDefault(), n.classList.add("open");
        }),
            (function () {
                for (var e = new Date().getFullYear(), t = e + 20, n = e; n < t; n++) {
                    var r = document.createElement("option");
                    (r.value = n), (r.text = n), s("yearddl").appendChild(r);
                }
            })(),
            p(),
            w(),
            (function () {
                var e,
                    t = document.querySelectorAll("#monthddl option"),
                    n = c("#monthddl").value;
                for (e = 0; e < t.length; e++) n === t[e].value && (t[e].selected, t[e].focus());
            })(),
            m(),
        (d = document.querySelector("input[name=expirydate]")) &&
        d.addEventListener("keyup", function (e) {
            d.value = d.value.replace("/", "").formatString("00/00");
        }),
        window.ctrwowUtils.isBuilderMode() || ("textbox" === l ? t && t.remove() : "dropdown" === l && e && e.remove()),
            window.ctrwowUtils.getDependencies(["https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"]).then(function () {
                jQuery.validator.addMethod(
                    "text",
                    function (e, t) {
                        var n = t.getAttribute("name");
                        if ("creditcard" === n) return i(e, t);
                        if ("expirydate" === n) {
                            var r = (function (e, t) {
                                var n = e.toString().replace(/-/g, "").replace(/\//g, "").substring(0, "00/00".length);
                                t.value = n.formatString("00/00");
                                var r = e.toString().split("/"),
                                    i = new Date(),
                                    o = i.getFullYear().toString().substr(2),
                                    a = i.getMonth() + 1,
                                    s = parseInt(r[0]),
                                    c = parseInt(r[1]);
                                return !(2 !== r.length || s < 0 || 12 < s || c < parseInt(o) || (w(), c === parseInt(o) && parseInt(a) > s));
                            })(e, t);
                            return console.log(r), r;
                        }
                        return !0;
                    },
                    "Invalid credit card number."
                ),
                    jQuery.validator.addMethod(
                        "postcode",
                        function (e, t) {
                            var n = t.getAttribute("postcode-pattern") || "",
                                r = e || "";
                            return new RegExp(n.toLowerCase()).test(r.toLowerCase());
                        },
                        "Invalid format"
                    );
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iqvvnh, #igxkjyu")).length; i < len; i++)
    (function () {
        var t = this,
            e = t.querySelector("label");
        document.querySelector('[data-gjs-type="wrapper"]') ||
        (e &&
            e.addEventListener("click", function () {
                var e = t.querySelector("input");
                $(e).prop("checked", !e.checked), $(e).trigger("change");
            }));
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i9cccyk")).length; i < len; i++)
    (function () {
        var t = $(this),
            e = t.parent(".form-group").find(".control-label"),
            n = function () {
                e.length && e.css({ "font-size": "0.8rem", top: "5px" });
            },
            r = function () {
                e.length && e.css({ "font-size": "1rem", top: "16px" });
            };
        t.val() ? n() : r(),
            t.on("focus", function () {
                n();
            }),
            t.on("blur change", function () {
                t.val() ? (n(), t.attr("value", t.val())) : (r(), t.removeAttr("value"));
            }),
            t.on("keyup", function () {
                "TEXTAREA" === t.prop("tagName") && (t.css("height", "1px"), t.css("height", 5 + t.prop("scrollHeight") + "px"));
            }),
            window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"]).then(function () {
                var e = t.attr("mask");
                e && t.mask(e);
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ijf82bz")).length; i < len; i++)
    (function () {
        var t = $(this),
            e = t.parent(".form-group").find(".control-label"),
            n = function () {
                e.length && e.css({ "font-size": "0.8rem", top: "5px" });
            },
            r = function () {
                e.length && e.css({ "font-size": "1rem", top: "16px" });
            };
        t.val() ? n() : r(),
            t.on("focus", function () {
                n();
            }),
            t.on("blur change", function () {
                t.val() ? (n(), t.attr("value", t.val())) : (r(), t.removeAttr("value"));
            }),
            t.on("keyup", function () {
                "TEXTAREA" === t.prop("tagName") && (t.css("height", "1px"), t.css("height", 5 + t.prop("scrollHeight") + "px"));
            }),
            window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"]).then(function () {
                var e = t.attr("mask");
                e && t.mask(e);
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i0zku0v")).length; i < len; i++)
    (function () {
        var t = $(this),
            e = t.parent(".form-group").find(".control-label"),
            n = function () {
                e.length && e.css({ "font-size": "0.8rem", top: "5px" });
            },
            r = function () {
                e.length && e.css({ "font-size": "1rem", top: "16px" });
            };
        t.val() ? n() : r(),
            t.on("focus", function () {
                n();
            }),
            t.on("blur change", function () {
                t.val() ? (n(), t.attr("value", t.val())) : (r(), t.removeAttr("value"));
            }),
            t.on("keyup", function () {
                "TEXTAREA" === t.prop("tagName") && (t.css("height", "1px"), t.css("height", 5 + t.prop("scrollHeight") + "px"));
            }),
            window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"]).then(function () {
                var e = t.attr("mask");
                e && t.mask(e);
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iujomnd")).length; i < len; i++)
    (function () {
        var t = $(this),
            e = t.parent(".form-group").find(".control-label"),
            n = function () {
                e.length && e.css({ "font-size": "0.8rem", top: "5px" });
            },
            r = function () {
                e.length && e.css({ "font-size": "1rem", top: "16px" });
            };
        t.val() ? n() : r(),
            t.on("focus", function () {
                n();
            }),
            t.on("blur change", function () {
                t.val() ? (n(), t.attr("value", t.val())) : (r(), t.removeAttr("value"));
            }),
            t.on("keyup", function () {
                "TEXTAREA" === t.prop("tagName") && (t.css("height", "1px"), t.css("height", 5 + t.prop("scrollHeight") + "px"));
            }),
            window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"]).then(function () {
                var e = t.attr("mask");
                e && t.mask(e);
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iasz375")).length; i < len; i++)
    (function () {
        var t = $(this),
            e = t.parent(".form-group").find(".control-label"),
            n = function () {
                e.length && e.css({ "font-size": "0.8rem", top: "5px" });
            },
            r = function () {
                e.length && e.css({ "font-size": "1rem", top: "16px" });
            };
        t.val() ? n() : r(),
            t.on("focus", function () {
                n();
            }),
            t.on("blur change", function () {
                t.val() ? (n(), t.attr("value", t.val())) : (r(), t.removeAttr("value"));
            }),
            t.on("keyup", function () {
                "TEXTAREA" === t.prop("tagName") && (t.css("height", "1px"), t.css("height", 5 + t.prop("scrollHeight") + "px"));
            }),
            window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"]).then(function () {
                var e = t.attr("mask");
                e && t.mask(e);
            });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i1oioac")).length; i < len; i++)
    (function () {
        var r = this;
        window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/pubsub-js/1.7.0/pubsub.min.js", window.ctrwowUtils.getCtrLibLink("ctrwowCheckout", "2.1.0")]).then(function () {
            return window.ctrwowCheckout.ready().then(function () {
                r.hasAttribute("is-preorder-confirm") && ctrwowUtils.localStorage().set("isPreOrderConfirm", !0),
                    window.PubSub.subscribe("checkoutWithCreditCardV1", function (e, t) {
                        if (ctrwowUtils.isLiveMode() && t && t.payment && t.payment.creditcard)
                            if (window.isSubscriptionType && window.isSubscriptionBox) {
                                var n = document.querySelector(".subscription-box .notice");
                                n && (n.classList.remove("hidden"), n.scrollIntoView({ behavior: "smooth" }));
                            } else
                                (window.paymentInfo = t),
                                    console.log("tracking event1"),
                                    ctrwowUtils.tracking.pushGtmTrackingEvent("1"),
                                r.hasAttribute("is-preorder") && ctrwowUtils.localStorage().set("isPreOrder", !0),
                                    ctrwowUtils.events.emit("triggerBeforeShowingLoading"),
                                    (r.querySelector(".paymentProccessing").style.display = "block"),
                                    console.log(t),
                                    console.log(JSON.stringify(t)),
                                    r.hasAttribute("use-diggy-popup") && _q(".extra-popup")
                                        ? r.hasAttribute("popup-first")
                                        ? ctrwowUtils.events.emit("triggerCreditCardOrder")
                                        : window.ctrwowCheckout.payment
                                            .checkoutWithCreditCard(t, !0)
                                            .then(function (e) {
                                                console.log(e), ctrwowUtils.events.emit("triggerFinishOrder", e);
                                            })
                                            .catch(function () {
                                                return (r.querySelector(".paymentProccessing").style.display = "none");
                                            })
                                        : window.ctrwowCheckout.payment.checkoutWithCreditCard(t).catch(function () {
                                            return (r.querySelector(".paymentProccessing").style.display = "none");
                                        });
                    });
            });
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#itwltpq")).length; i < len; i++)
    (function () {
        try {
            var e = { "show-product-image": "TRUE", "show-tax": "FALSE", "show-couponcode": "FALSE", "not-use-minus": "", "show-additional-info": "", "free-text": "FREE", "tax-text": "Tax will be settled upon checkout confirmation" };
        } catch (e) {
            console.log(e);
        }
        if (window.ctrDebug && window.ctrDebug.run(this, "widget-order-summary", e)) return !0;
        (function (n) {
            var r = {};
            function i(e) {
                if (r[e]) return r[e].exports;
                var t = (r[e] = { i: e, l: !1, exports: {} });
                return n[e].call(t.exports, t, t.exports, i), (t.l = !0), t.exports;
            }
            return (
                (i.m = n),
                    (i.c = r),
                    (i.d = function (e, t, n) {
                        i.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n });
                    }),
                    (i.r = function (e) {
                        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                    }),
                    (i.t = function (t, e) {
                        if ((1 & e && (t = i(t)), 8 & e)) return t;
                        if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
                        var n = Object.create(null);
                        if ((i.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                            for (var r in t)
                                i.d(
                                    n,
                                    r,
                                    function (e) {
                                        return t[e];
                                    }.bind(null, r)
                                );
                        return n;
                    }),
                    (i.n = function (e) {
                        var t =
                            e && e.__esModule
                                ? function () {
                                    return e.default;
                                }
                                : function () {
                                    return e;
                                };
                        return i.d(t, "a", t), t;
                    }),
                    (i.o = function (e, t) {
                        return Object.prototype.hasOwnProperty.call(e, t);
                    }),
                    (i.p = ""),
                    i((i.s = 7))
            );
        })([
            function (e, t, n) {
                var r = n(1),
                    i = n(2),
                    o = n(3),
                    a = n(5);
                (e.exports = function (e, t) {
                    return r(e) || i(e, t) || o(e, t) || a();
                }),
                    (e.exports.default = e.exports),
                    (e.exports.__esModule = !0);
            },
            function (e, t) {
                (e.exports = function (e) {
                    if (Array.isArray(e)) return e;
                }),
                    (e.exports.default = e.exports),
                    (e.exports.__esModule = !0);
            },
            function (e, t) {
                (e.exports = function (e, t) {
                    var n = null == e ? null : ("undefined" != typeof Symbol && e[Symbol.iterator]) || e["@@iterator"];
                    if (null != n) {
                        var r,
                            i,
                            o = [],
                            a = !0,
                            s = !1;
                        try {
                            for (n = n.call(e); !(a = (r = n.next()).done) && (o.push(r.value), !t || o.length !== t); a = !0);
                        } catch (e) {
                            (s = !0), (i = e);
                        } finally {
                            try {
                                a || null == n.return || n.return();
                            } finally {
                                if (s) throw i;
                            }
                        }
                        return o;
                    }
                }),
                    (e.exports.default = e.exports),
                    (e.exports.__esModule = !0);
            },
            function (e, t, n) {
                var r = n(4);
                (e.exports = function (e, t) {
                    if (e) {
                        if ("string" == typeof e) return r(e, t);
                        var n = Object.prototype.toString.call(e).slice(8, -1);
                        return "Map" === (n = "Object" === n && e.constructor ? e.constructor.name : n) || "Set" === n ? Array.from(e) : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ? r(e, t) : void 0;
                    }
                }),
                    (e.exports.default = e.exports),
                    (e.exports.__esModule = !0);
            },
            function (e, t) {
                (e.exports = function (e, t) {
                    (null == t || t > e.length) && (t = e.length);
                    for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n];
                    return r;
                }),
                    (e.exports.default = e.exports),
                    (e.exports.__esModule = !0);
            },
            function (e, t) {
                (e.exports = function () {
                    throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
                }),
                    (e.exports.default = e.exports),
                    (e.exports.__esModule = !0);
            },
            function (e, t, n) {},
            function (e, t, n) {
                n.r(t),
                    n.d(t, "default", function () {
                        return r;
                    });
                t = n(0);
                var C = n.n(t);
                function x(e, t) {
                    var n = ("undefined" != typeof Symbol && e[Symbol.iterator]) || e["@@iterator"];
                    if (!n) {
                        if (
                            Array.isArray(e) ||
                            (n = (function (e, t) {
                                if (e) {
                                    if ("string" == typeof e) return s(e, void 0);
                                    var n = Object.prototype.toString.call(e).slice(8, -1);
                                    return "Map" === (n = "Object" === n && e.constructor ? e.constructor.name : n) || "Set" === n
                                        ? Array.from(e)
                                        : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)
                                            ? s(e, void 0)
                                            : void 0;
                                }
                            })(e)) ||
                            (t && e && "number" == typeof e.length)
                        ) {
                            n && (e = n);
                            var r = 0;
                            return {
                                s: (t = function () {}),
                                n: function () {
                                    return r >= e.length ? { done: !0 } : { done: !1, value: e[r++] };
                                },
                                e: function (e) {
                                    throw e;
                                },
                                f: t,
                            };
                        }
                        throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
                    }
                    var i,
                        o = !0,
                        a = !1;
                    return {
                        s: function () {
                            n = n.call(e);
                        },
                        n: function () {
                            var e = n.next();
                            return (o = e.done), e;
                        },
                        e: function (e) {
                            (a = !0), (i = e);
                        },
                        f: function () {
                            try {
                                o || null == n.return || n.return();
                            } finally {
                                if (a) throw i;
                            }
                        },
                    };
                }
                function s(e, t) {
                    (null == t || t > e.length) && (t = e.length);
                    for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n];
                    return r;
                }
                function r(S, e) {
                    function t() {
                        var s = String("");
                        function c() {}
                        c.getDescendantProp = function (e, t) {
                            for (var n = t.split("."); n.length; ) e = e[n.shift()];
                            return e;
                        };
                        var n = e["show-product-image"],
                            i = e["show-tax"],
                            r = e["show-couponcode"];
                        window.taxArray = [];
                        var l = window.ctrwowUtils.link.queryURLParameter("rm"),
                            o = e["show-additional-info"],
                            a = e["free-text"] || "",
                            d = e["tax-text"] || "",
                            f = {
                                productImageSummary: document.querySelectorAll(".order-summary__item .blockname .product-img-summary"),
                                productTax: document.querySelectorAll(".order-summary__item.order-summary__tax"),
                                productCoupon: document.querySelectorAll(".order-summary__item.order-summary__coupon"),
                                msgCoupon: window._qAll(".order-summary__coupon .coupon-msg span"),
                                taxValue: window._q(".order-summary__tax .js-tax"),
                                subTotal: window._qAll(".js-sub-total"),
                                grandTotal: window._qAll(".js-grand-total"),
                                grandTotalTop: window._q(".order-summary-total-lbl .js-grand-total-top"),
                                grandTotalValue: window._q(".order-summary__total .grand-total span"),
                                productList: window._qAll(".js-list .js-list-item"),
                                imageSumary: window._q(".order-summary__item .blockname img"),
                                couponValue: window._q(".order-summary__coupon .input-couponcode"),
                                listProductPrice: window._qAll(".order-summary__item .js-product-price"),
                                msgSuccess: window._q(".order-summary__coupon .success"),
                                msgError: window._q(".order-summary__coupon .error"),
                                btnCoupon: window._q(".order-summary__coupon .btn-couponcode"),
                                txtCoupon: window._q(".order-summary__coupon .input-couponcode"),
                                totalDiscountPrice: window._q(".js-discount-price-total"),
                                discountWarrantyPrice: window._qAll(".js-discount-warranty-price"),
                                couponPrice: window._qAll(".js-coupon-price"),
                                couponLine: window._qAll(".order-summary_couponLine"),
                                fullRetailPrice: S.querySelectorAll(".js-fullretail-price"),
                            };
                        function u(n, r, i) {
                            var e = window.ctrwowCheckout.checkoutData.getMiniUpsell() || [];
                            Object.keys(i).length &&
                            Object.keys(i).forEach(function (t) {
                                var e = i[t];
                                (e = n.querySelectorAll(e)) &&
                                Array.prototype.slice.call(e).forEach(function (e) {
                                    r ? (e.classList.remove("loading"), (e.textContent = c.getDescendantProp(r, t))) : ((e.textContent = ""), e.classList.add("loading"));
                                });
                            }),
                            f.grandTotalTop && r && r.grandTotal && (f.grandTotalTop.textContent = r.grandTotal);
                            var t = n.querySelector(".order-summary__lifetimeWarranty");
                            if (t && (r && r.ctrwow__funnelId ? ((t.style.display = "flex"), (t.style.opacity = 1)) : ((t.style.display = "none"), (t.style.opacity = 0)), 0 < e.length)) {
                                var o,
                                    a = x(e);
                                try {
                                    for (a.s(); !(o = a.n()).done; ) {
                                        var s = o.value;
                                        s.addToSummary && "warranty" === s.type && ((t.querySelector(".js-lifetime-warranty").textContent = s.formatPrice), (t.style.display = "flex"), (t.style.opacity = 1));
                                    }
                                } catch (e) {
                                    a.e(e);
                                } finally {
                                    a.f();
                                }
                            }
                        }
                        function p(t) {
                            var e = window.taxArray.find(function (e) {
                                return e.productId === t.productId;
                            });
                            window.taxPercent = e.taxRate / 100;
                            var n = t.shippings[window.shippingIndex || 0].price,
                                r = t.shippings[window.shippingIndex || 0].formattedPrice,
                                i = window.ctrwowCheckout.checkoutData.getLifetimeWarrantyConfig().warrantyPrice,
                                o = ((e = g()), t.productPrices.DiscountedPrice.Value * window.taxPercent + n * window.taxPercent + i * window.taxPercent + e * window.taxPercent),
                                a = t.productPrices.DiscountedPrice.Value + o + n + i + e + (window.priceExpand || 0),
                                s = t.productPrices.DiscountedPrice.Value + i + e + (window.priceExpand || 0);
                            Array.prototype.slice.call(window._qAll(".js-tax")).forEach(function (e) {
                                e.classList.remove("loading"), (e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(o, r)), (e.parentElement.style.display = "flex");
                            }),
                                Array.prototype.slice.call(f.grandTotal).forEach(function (e) {
                                    e.classList.remove("loading"), (e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(a, r));
                                }),
                                Array.prototype.slice.call(f.discountWarrantyPrice).forEach(function (e) {
                                    e.classList.remove("loading"), (e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(s, r));
                                });
                        }
                        function w(e) {
                            var t = !(0 < arguments.length && void 0 !== e) || e,
                                n = window.ctrwowCheckout.checkoutData.getProduct();
                            if ("TRUE" !== i || !n) return window.localStorage.removeItem("customerAddress"), void window.localStorage.removeItem("bindTax");
                            window.localStorage.setItem("bindTax", !0);
                            var r = window.__productListData.data.productList.location;
                            e = { isTest: !!window.ctrwowUtils.link.getParameterByName("isCardTest"), items: [], customerAddress: { line1: "", city: r.city, region: r.regionCode, country: r.countryCode, postalCode: r.zipCode } };
                            (r = (function () {
                                var e,
                                    t = !0,
                                    n = x(
                                        window._qAll(
                                            '[name="shippingAddress"] [name="address1"], [name="shippingAddress"] [name="city"], [name="shippingAddress"] [name="state"], [name="shippingAddress"] [name="countryCode"], [name="shippingAddress"] [name="zipCode"]'
                                        )
                                    );
                                try {
                                    for (n.s(); !(e = n.n()).done; ) {
                                        var r = e.value;
                                        if (null !== r.getAttribute("required")) {
                                            if (!r.value.trim()) {
                                                t = !1;
                                                break;
                                            }
                                            if (r.getAttribute("postcode-pattern")) {
                                                var i = r.getAttribute("postcode-pattern").toLowerCase();
                                                if (!new RegExp(i.toLowerCase()).test(r.value.toLowerCase())) {
                                                    t = !1;
                                                    break;
                                                }
                                            }
                                            r.classList.remove("error"), r.parentNode.querySelector("label.error") && (r.parentNode.querySelector("label.error").style.display = "none");
                                        } else r.classList.remove("error"), r.parentNode.querySelector("label.error") && (r.parentNode.querySelector("label.error").style.display = "none");
                                    }
                                } catch (e) {
                                    n.e(e);
                                } finally {
                                    n.f();
                                }
                                return t;
                            })()) &&
                            (e.customerAddress = {
                                line1: window._q('[name="shippingAddress"] [name="address1"]') ? window._q('[name="shippingAddress"] [name="address1"]').value : "",
                                city: window._q('[name="shippingAddress"] [name="city"]') ? window._q('[name="shippingAddress"] [name="city"]').value : "",
                                region: window._q('[name="shippingAddress"] [name="state"]') ? window._q('[name="shippingAddress"] [name="state"]').value : "",
                                country: window._q('[name="shippingAddress"] [name="countryCode"]') ? window._q('[name="shippingAddress"] [name="countryCode"]').value : "",
                                postalCode: window._q('[name="shippingAddress"] [name="zipCode"]') ? window._q('[name="shippingAddress"] [name="zipCode"]').value : "",
                            }),
                                window.localStorage.setItem("customerAddress", JSON.stringify(e.customerAddress)),
                                (e.items = window.__productListData.data.productList.prices.map(function (e) {
                                    var t = e.productPrices.DiscountedPrice.Value,
                                        n = window.isDoubleQuantity ? e.quantity / 2 : e.quantity;
                                    return { productId: e.productId, sku: e.sku, quantity: n, unitPrice: e.productPrices.UnitDiscountRate.Value, discountedPrice: t, totalPrice: t, description: e.productName };
                                })),
                                window.localStorage.setItem("customerAddress", JSON.stringify(e.customerAddress)),
                                (function (n, r, e, t) {
                                    var i,
                                        o = window.ctrwowCheckout ? window.ctrwowCheckout.getCrmInstance() : new window.EmanageCRMJS({ webkey: window.__CTRWOW_CONFIG.webKey, cid: window.__CTRWOW_CONFIG.cid }),
                                        a = "".concat(o.Order.baseAPIEndpoint, "/orders/CreateEstimate/").concat(o.Order.webkey);
                                    if (
                                        ((o = { method: "POST", headers: { X_CID: o.Order.cid, "content-type": "application/json" }, body: JSON.stringify(n) }),
                                            (i =
                                                '<span class="js-img-loading">\n                    <img src="//d16hdrba6dusey.cloudfront.net/sitecommon/images/loading-price-v1.gif" width="20" height="10" class="no-lazy"  style="width: 20px;">\n                </span>'),
                                            Array.prototype.slice.call(window._qAll(".js-tax")).forEach(function (e) {
                                                e.innerHTML = i;
                                            }),
                                            Array.prototype.slice.call(window._qAll(".js-grand-total")).forEach(function (e) {
                                                e.innerHTML = i;
                                            }),
                                        e && 0 < window.taxArray.length)
                                    )
                                        p(r);
                                    else {
                                        if (!e && !t && window.taxArrayDefault) return (t = JSON.stringify(window.taxArrayDefault)), (window.taxArray = JSON.parse(t)), p(r);
                                        window.callingTax ||
                                        (window.ctrwowUtils
                                            .callAjax(a, o)
                                            .then(function (e) {
                                                window.callingTax = !1;
                                                var t = [];
                                                (t =
                                                    e && e.items && 0 < e.items.length
                                                        ? e.items
                                                        : n.items.map(function (e) {
                                                            return (e.taxAmount = 0), (e.taxRate = 0), e;
                                                        })),
                                                    window.ctrwowUtils.events.emit("bindTax"),
                                                    (window.taxArray = t),
                                                window.taxArrayDefault || ((t = JSON.stringify(t)), (window.taxArrayDefault = JSON.parse(t))),
                                                    p(r);
                                            })
                                            .catch(function () {
                                                window.callingTax = !1;
                                                var e = n.items.map(function (e) {
                                                    return (e.taxAmount = 0), (e.taxRate = 0), e;
                                                });
                                                window.ctrwowUtils.events.emit("bindTax"), (window.taxArray = e), window.taxArrayDefault || ((e = JSON.stringify(e)), (window.taxArrayDefault = JSON.parse(e))), p(r);
                                            }),
                                            (window.callingTax = !0));
                                    }
                                })(e, n, t, r);
                        }
                        function m(e) {
                            for (var t in ((f.imageSumary.src = e), f.imageSumary.dataset)) f.imageSumary.dataset[t] = e;
                        }
                        function h() {
                            try {
                                "TRUE" === n &&
                                Array.prototype.slice.call(f.productList).forEach(function (e) {
                                    var t;
                                    parseInt(e.getAttribute("data-id")) === window.ctrwowCheckout.checkoutData.getProduct().productId &&
                                    ((t = e.querySelector(".product-img")) && m(t.getAttribute("data-ctr-lazy-src") ? t.getAttribute("data-ctr-lazy-src") : t.src),
                                    (e = e.querySelector(".list-item__thumb img")) && m(e.getAttribute("data-ctr-lazy-src") ? e.getAttribute("data-ctr-lazy-src") : e.src));
                                });
                            } catch (e) {
                                console.log(e);
                            }
                        }
                        function g() {
                            var e = 0,
                                t = window.ctrwowCheckout.checkoutData.getMiniUpsell() || [];
                            if (0 < t.length) {
                                var n,
                                    r = x(t);
                                try {
                                    for (r.s(); !(n = r.n()).done; ) {
                                        var i = n.value;
                                        (Object.prototype.hasOwnProperty.call(i, "addToSummary") && !i.addToSummary) || (e += i && i.price ? i.price : 0);
                                    }
                                } catch (e) {
                                    r.e(e);
                                } finally {
                                    r.f();
                                }
                            }
                            return e;
                        }
                        function y() {
                            window.shippingIndex = 0;
                            var e,
                                t = (r = window.ctrwowCheckout.checkoutData.getLifetimeWarrantyConfig()).funnelId,
                                n = r.warrantyPrice;
                            if ((r = window.ctrwowCheckout.checkoutData.getProduct() || null))
                                try {
                                    !(e = r) ||
                                    !e.shippings ||
                                    (e.shippings && e.shippings.length <= 1) ||
                                    (e.shippings.sort(function (e, t) {
                                        return e.price - t.price;
                                    }),
                                        "1" === l || window.isFreeShip ? (window.shippingIndex = 0) : (window.shippingIndex = e.shippings.length - 1),
                                        e.shippings.forEach(function (e, t) {
                                            e.isExpress === window.isExpressShipping && "boolean" == typeof window.isExpressShipping && (window.shippingIndex = t);
                                        }));
                                    var r = e,
                                        i = g(),
                                        o = r.productPrices.FullRetailPrice.Value - r.productPrices.DiscountedPrice.Value;
                                    o < 0 && (o = 0), (r.fullRetailPrice = r.productPrices.FullRetailPrice.FormattedValue), (o += window.priceSaleOfExpand || 0), (r.discountPrice = r.productPrices.DiscountedPrice.FormattedValue);
                                    var a = r.shippings[window.shippingIndex] ? r.shippings[window.shippingIndex].price : 0;
                                    (r.shipping = window.ctrwowUtils.number.formaterNumberByFormattedValue(a, r.discountPrice)),
                                        (r.totalDiscountPrice = window.ctrwowUtils.number.formaterNumberByFormattedValue(o, r.discountPrice)),
                                    s || (r.totalDiscountPrice = "-" + r.totalDiscountPrice),
                                        (r.subTotal = window.ctrwowUtils.number.formaterNumberByFormattedValue(r.productPrices.DiscountedPrice.Value + i + n, r.discountPrice)),
                                        (r.grandTotal = window.ctrwowUtils.number.formaterNumberByFormattedValue(r.productPrices.DiscountedPrice.Value + a + i + n + (window.priceExpand || 0), r.discountPrice)),
                                        (r.discountWarrantyPrice = window.ctrwowUtils.number.formaterNumberByFormattedValue(r.productPrices.DiscountedPrice.Value + i + n + (window.priceExpand || 0), r.discountPrice)),
                                        (r.ctrwow__warrantyPrice = window.ctrwowUtils.number.formaterNumberByFormattedValue(n, r.discountPrice)),
                                        (r.ctrwow__funnelId = t);
                                } catch (e) {
                                    console.log(e);
                                }
                            return r;
                        }
                        function v(e) {
                            var t = window._qById("donateCheckbox");
                            return t && t.checked
                                ? ((t = e.shippings[0].price),
                                    (e = e.shippings[0].formattedPrice),
                                    window.localStorage.setItem("shippingFeeNotDonate", t),
                                    window.localStorage.setItem("shippingFeeNotDonateFormated", e),
                                    void (window._q(".shipping-price.js-shipping-price") && (window._q(".shipping-price.js-shipping-price").textContent = e)))
                                : (window.localStorage.removeItem("shippingFeeNotDonate"), void window.localStorage.removeItem("shippingFeeNotDonateFormated"));
                        }
                        function b(e) {
                            var t;
                            (this.element = e),
                                (this.updateFields = {
                                    productName: ".js-product-name",
                                    quantity: ".js-product-qty",
                                    discountPrice: ".js-product-price",
                                    shipping: ".js-shipping-price",
                                    totalDiscountPrice: ".js-discount-price-total",
                                    grandTotal: ".js-grand-total",
                                    discountWarrantyPrice: ".js-discount-warranty-price",
                                    subTotal: ".js-sub-total",
                                    ctrwow__warrantyPrice: ".js-lifetime-warranty",
                                    fullRetailPrice: ".js-fullretail-price",
                                }),
                                u((t = this).element, null, t.updateFields),
                                window.ctrwowUtils.events.emit("bindDataOrderSummary"),
                                window.ctrwowCheckout.checkoutData.onProductChange(function () {
                                    var e = y();
                                    u(t.element, e, t.updateFields), v(e), h(), w();
                                }),
                            window.ctrwowCheckout.checkoutData.onLifetimeWarrantyConfigChange &&
                            window.ctrwowCheckout.checkoutData.onLifetimeWarrantyConfigChange(function () {
                                console.log("handle change Lifetime Warranty");
                                var e = y();
                                u(t.element, e, t.updateFields), v(e), w();
                            }),
                            window.ctrwowCheckout.checkoutData.onMiniUpsellChange &&
                            window.ctrwowCheckout.checkoutData.onMiniUpsellChange(function () {
                                console.log("handle change Mini Upsell");
                                var e = y();
                                u(t.element, e, t.updateFields), v(e), w();
                            });
                        }
                        function k() {
                            f.btnCoupon &&
                            f.btnCoupon.addEventListener("click", function () {
                                !(function () {
                                    var e = new window.EmanageCRMJS();
                                    if (f.couponValue) {
                                        var w = f.couponValue.value,
                                            t = window.ctrwowUtils.localStorage().get("currencyCode");
                                        if (!w) return (f.msgSuccess.style.display = "none"), (f.msgError.style.display = "block");
                                        (t = "".concat(e.Order.baseAPIEndpoint, "/campaigns/").concat(window.__ctrPageConfiguration.webKey, "/coupons/").concat(w, "/?currencyCode=").concat(t)),
                                            window.ctrwowCheckout.checkoutData.setCouponCode(""),
                                            window.ctrwowUtils
                                                .callAjax(t, { headers: { X_CID: window.__ctrPageConfiguration.cid }, "Content-Type": "application/json" })
                                                .then(function (e) {
                                                    console.log(e);
                                                    var t,
                                                        n = window.ctrwowCheckout.checkoutData.getProduct();
                                                    if (e) {
                                                        if (!e.discountType || !e.discount) return;
                                                        f.btnCoupon.classList.add("btn-apply-disable"), (f.txtCoupon.readOnly = !0);
                                                        var r = n.shippings[0].formattedPrice,
                                                            i = e.discount,
                                                            o = e.discount;
                                                        (window.discountTypeCoupOn = e.discountType),
                                                            (window.discountCoupOn = e.discount),
                                                        "Money Amount" !== window.discountTypeCoupOn && ((i = (n.productPrices.DiscountedPrice.Value * i) / 100), (o = (n.productPrices.FullRetailPrice.Value * i) / 100));
                                                        var a = Number((n.productPrices.DiscountedPrice.Value - i).toFixed(2));
                                                        (n.productPrices.DiscountedPrice.Value = a), (n.productPrices.DiscountedPrice.FormattedValue = window.ctrwowUtils.number.formaterNumberByFormattedValue(a, r));
                                                        var s = Number((n.productPrices.FullRetailPrice.Value - o).toFixed(2));
                                                        (n.productPrices.FullRetailPrice.Value = s),
                                                            (n.productPrices.FullRetailPrice.FormattedValue = window.ctrwowUtils.number.formaterNumberByFormattedValue(s, r)),
                                                            (e = window._q('[life-time-warranty] input[type="checkbox"]')),
                                                            (o = (function () {
                                                                if (
                                                                    (t = (t = (document.querySelector("[life-time-warranty]") && document.querySelector("[life-time-warranty]").getAttribute("life-time-warranty")) || "")
                                                                        .trim()
                                                                        .split("__p")).length < 2
                                                                )
                                                                    return [];
                                                                var e = t[0],
                                                                    t = parseInt(t[1]);
                                                                return e && t ? [e, t] : [];
                                                            })()),
                                                            (o = (s = C()(o, 2))[0]);
                                                        var c = (t = s[1]) ? n.productPrices.DiscountedPrice.Value * (t / 100) : 0;
                                                        (s = window._qAll(".warranty_price")),
                                                            Array.prototype.slice.call(s).forEach(function (e) {
                                                                e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(c, n.productPrices.DiscountedPrice.FormattedValue);
                                                            }),
                                                        e && window.ctrwowCheckout.checkoutData.setLifetimeWarrantyConfig("type", e.checked ? { funnelId: o, warrantyPrice: c } : { funnelId: 0, warrantyPrice: 0 }),
                                                            (e = n.shippings[window.shippingIndex || 0].price),
                                                            (o = g());
                                                        var l = a * (window.taxPercent || 1) + e * (window.taxPercent || 1) + c * (window.taxPercent || 1) + o * (window.taxPercent || 1),
                                                            d = a + o + c,
                                                            u = a + l + e + o + c + (window.priceExpand || 0),
                                                            p = a + o + c + (window.priceExpand || 0);
                                                        Array.prototype.slice.call(window._qAll(".js-tax")).forEach(function (e) {
                                                            e.classList.remove("loading"), (e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(l, r));
                                                        }),
                                                            Array.prototype.slice.call(f.subTotal).forEach(function (e) {
                                                                e.classList.remove("loading"), (e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(d, r));
                                                            }),
                                                            Array.prototype.slice.call(f.grandTotal).forEach(function (e) {
                                                                e.classList.remove("loading"), (e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(u, r));
                                                            }),
                                                            (o = n.productPrices.FullRetailPrice.Value - n.productPrices.DiscountedPrice.Value),
                                                            (o = window.ctrwowUtils.number.formaterNumberByFormattedValue(o, r)),
                                                        -1 < f.totalDiscountPrice.textContent.indexOf("-") && (o = "-" + o),
                                                            (f.totalDiscountPrice.textContent = o),
                                                        f.grandTotalValue && (f.grandTotalValue.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(u, r)),
                                                            Array.prototype.slice.call(f.discountWarrantyPrice).forEach(function (e) {
                                                                e.classList.remove("loading"), (e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(p, r));
                                                            }),
                                                            Array.prototype.slice.call(f.couponPrice).forEach(function (e) {
                                                                e.classList.remove("loading"), (e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(Number(i.toFixed(2)), r));
                                                            }),
                                                        0 < i &&
                                                        Array.prototype.slice.call(f.couponLine).forEach(function (e) {
                                                            e.style.display = "flex";
                                                        }),
                                                            Array.prototype.slice.call(f.listProductPrice).forEach(function (e) {
                                                                return (e.textContent = n.productPrices.DiscountedPrice.FormattedValue);
                                                            }),
                                                            (f.msgSuccess.style.display = "block"),
                                                            (f.msgError.style.display = "none"),
                                                            window.ctrwowCheckout.checkoutData.setCouponCode(w);
                                                    } else (f.msgSuccess.style.display = "none"), (f.msgError.style.display = "block");
                                                    window.ctrwowCheckout.checkoutData.setProduct(n);
                                                })
                                                .catch(function (e) {
                                                    (f.msgSuccess.style.display = "none"), (f.msgError.style.display = "block");
                                                });
                                    }
                                })();
                            }),
                            f.txtCoupon &&
                            f.txtCoupon.addEventListener("input", function (e) {
                                (f.msgError.style.display = "none"), "" !== e.currentTarget.value ? f.btnCoupon.classList.remove("btn-apply-disable") : f.btnCoupon.classList.add("btn-apply-disable");
                            }),
                                Array.prototype.slice.call(f.productList).forEach(function (e) {
                                    e.addEventListener("click", function () {
                                        f.txtCoupon &&
                                        "TRUE" === r &&
                                        (window.ctrwowCheckout.checkoutData.setCouponCode(""),
                                            (f.txtCoupon.value = ""),
                                            (f.txtCoupon.readOnly = !1),
                                            f.btnCoupon.classList.add("btn-apply-disable"),
                                            (f.msgSuccess.style.display = "none"),
                                            (f.msgError.style.display = "none"));
                                    });
                                });
                            var e,
                                t,
                                n = window._qAll('[name="shippingAddress"] [name="address1"], [name="shippingAddress"] [name="city"], [name="shippingAddress"] [name="state"], [name="shippingAddress"] [name="zipCode"]');
                            Array.prototype.slice.call(n).forEach(function (e) {
                                e.addEventListener("change", function () {
                                    w(!1);
                                });
                            }),
                                window.ctrwowUtils.events.on("stateLoaded", function () {
                                    w(!1);
                                }),
                            "true" === o &&
                            ((e = window.ctrwowUtils.isBuilderMode()),
                                (t = S.querySelector(".shipping-price")),
                                (n = document.querySelector(".js-tax-text")),
                            e && (t && (t.parentElement.style.display = "flex"), (n.style.display = "block")),
                            "1" === l &&
                            (t && ((t.style.display = "none"), t.parentElement.insertAdjacentHTML("beforeend", '<span class="free-shipping">'.concat(a, "</span>")), (t.parentElement.style.display = "flex")),
                            n && (n.textContent = d) && (n.style.display = "block")));
                        }
                        window.ctrwowUtils.isBuilderMode() &&
                        [
                            document.querySelectorAll(".order-summary .js-product-price"),
                            document.querySelectorAll(".order-summary .js-donation-price"),
                            document.querySelectorAll(".order-summary .js-tax"),
                            document.querySelectorAll(".order-summary .js-shipping-price"),
                            document.querySelectorAll(".order-summary .js-lifetime-warranty"),
                            document.querySelectorAll(".order-summary .js-discount-price-total"),
                            document.querySelectorAll(".order-summary .js-grand-total"),
                            document.querySelectorAll(".order-summary .js-fullretail-price"),
                        ].forEach(function (e) {
                            0 < e.length &&
                            Array.prototype.slice.call(e).forEach(function (e) {
                                e && (e.innerHTML = "$xx.xx");
                            });
                        }),
                            (function () {
                                if (
                                    (window.ctrwowUtils.isBuilderMode() &&
                                    Array.prototype.slice.call(f.msgCoupon).forEach(function (e) {
                                        e.style.display = "block";
                                    }),
                                        Array.prototype.slice.call(f.productImageSummary).forEach(function (e) {
                                            e.style.display = "TRUE" === n ? "block" : "none";
                                        }),
                                        Array.prototype.slice.call(f.productTax).forEach(function (e) {
                                            e.style.display = "TRUE" === i ? "flex" : "none";
                                        }),
                                        Array.prototype.slice.call(f.productCoupon).forEach(function (e) {
                                            e.style.display = "TRUE" === r ? "block" : "none";
                                        }),
                                        !window.ctrwowUtils.isBuilderMode())
                                ) {
                                    var e = document.getElementsByClassName("js-order-summary");
                                    if (0 < e.length) for (var t = 0; t < e.length; t++) new b(e[t]);
                                    k();
                                }
                            })(),
                            window.ctrwowUtils.events.on("selectedIKCapacity", function () {
                                var e = {},
                                    t = document.getElementsByClassName("js-order-summary");
                                if (0 < t.length)
                                    for (var n = 0; n < t.length; n++) {
                                        (e.element = t[n]),
                                            (e.updateFields = {
                                                productName: ".js-product-name",
                                                quantity: ".js-product-qty",
                                                discountPrice: ".js-product-price",
                                                shipping: ".js-shipping-price",
                                                totalDiscountPrice: ".js-discount-price-total",
                                                grandTotal: ".js-grand-total",
                                                discountWarrantyPrice: ".js-discount-warranty-price",
                                                subTotal: ".js-sub-total",
                                                ctrwow__warrantyPrice: ".js-lifetime-warranty",
                                            });
                                        var r = y();
                                        u(e.element, r, e.updateFields), h(), w();
                                    }
                            });
                    }
                    window.ctrwowUtils.getDependencies([window.ctrwowUtils.getCtrLibLink("ctrwowCheckout", "2.1.0")]).then(function () {
                        return window.window.ctrwowCheckout.ready().then(t);
                    });
                }
                n(6);
            },
        ]).default(this, e);
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iefp89")).length; i < len; i++)
    (function () {
        function r(e) {
            var t = e.element.getAttribute("target");
            return document.querySelector(t);
        }
        var e = function (e) {
                var t, n;
                (this.element = e),
                    (this.target = r(this)),
                    (this.hideClass = "component-hidden"),
                (t = this).element.hasAttribute("hide-target-on-init") && t.target && t.target.classList.add(t.hideClass),
                    (n = t).element.addEventListener("click", function () {
                        var e = r(n);
                        e && e.classList.toggle(n.hideClass);
                    });
            },
            t = document.querySelectorAll(".js-toggle-trigger");
        if (0 < t.length) for (var n = 0; n < t.length; n++) new e(t[n]);
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ctrwow-accordion")).length; i < len; i++)
    (function () {
        var a = !1;
        this.addEventListener("click", function (e) {
            var t = e.target.closest(".accordion__header");
            t &&
            (function (e) {
                !a &&
                (function (e) {
                    var t = document.querySelector(".js-accordion__item.accordion__item--is-open");
                    if (t) {
                        var n = t.querySelector(".js-tab-focus");
                        n && n != e && n.click();
                    }
                })(e);
                var t = "true" === e.getAttribute("aria-expanded"),
                    n = t ? "false" : "true";
                e.parentNode.classList.toggle("accordion__item--is-open"), e.setAttribute("aria-expanded", n);
                var r,
                    i,
                    o = e.nextElementSibling;
                t
                    ? (i = o.querySelectorAll("iframe")).length &&
                    i.forEach(function (e) {
                        var t = e.src;
                        -1 !== t.indexOf("autoPlay=1") && (e.setAttribute("autoPlay", 1), (t = t.replace("autoPlay=1", "autoPlay=0"))), (e.src = t);
                    })
                    : (r = o.querySelectorAll("iframe")).length &&
                    r.forEach(function (e) {
                        var t = e.src;
                        1 == e.getAttribute("autoPlay") && ((t = t.replace("autoPlay=0", "autoPlay=1")), (e.src = t));
                    });
            })(t);
        });
    }.bind(items[i])());
var els;
for (
    props = { ix9h5ee: {} },
        ids = Object.keys(props)
            .map(function (e) {
                return "#" + e;
            })
            .join(","),
        i = 0,
        len = (els = document.querySelectorAll(ids)).length;
    i < len;
    i++
) {
    el = els[i];
    (function (e) {
        try {
            if ((console.log(e), window.ctrDebug && window.ctrDebug.run(this, "widget-diggy-popup-mini-upsell-gjs", e))) return !0;
            (function (n) {
                var r = {};
                function i(e) {
                    if (r[e]) return r[e].exports;
                    var t = (r[e] = { i: e, l: !1, exports: {} });
                    return n[e].call(t.exports, t, t.exports, i), (t.l = !0), t.exports;
                }
                return (
                    (i.m = n),
                        (i.c = r),
                        (i.d = function (e, t, n) {
                            i.o(e, t) || Object.defineProperty(e, t, { enumerable: !0, get: n });
                        }),
                        (i.r = function (e) {
                            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 });
                        }),
                        (i.t = function (t, e) {
                            if ((1 & e && (t = i(t)), 8 & e)) return t;
                            if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
                            var n = Object.create(null);
                            if ((i.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: t }), 2 & e && "string" != typeof t))
                                for (var r in t)
                                    i.d(
                                        n,
                                        r,
                                        function (e) {
                                            return t[e];
                                        }.bind(null, r)
                                    );
                            return n;
                        }),
                        (i.n = function (e) {
                            var t =
                                e && e.__esModule
                                    ? function () {
                                        return e.default;
                                    }
                                    : function () {
                                        return e;
                                    };
                            return i.d(t, "a", t), t;
                        }),
                        (i.o = function (e, t) {
                            return Object.prototype.hasOwnProperty.call(e, t);
                        }),
                        (i.p = ""),
                        i((i.s = 7))
                );
            })([
                function (e, t) {
                    (e.exports = function (e, t) {
                        (null == t || t > e.length) && (t = e.length);
                        for (var n = 0, r = new Array(t); n < t; n++) r[n] = e[n];
                        return r;
                    }),
                        (e.exports.default = e.exports),
                        (e.exports.__esModule = !0);
                },
                function (e, t, n) {
                    var r = n(3),
                        i = n(4),
                        o = n(5),
                        a = n(6);
                    (e.exports = function (e) {
                        return r(e) || i(e) || o(e) || a();
                    }),
                        (e.exports.default = e.exports),
                        (e.exports.__esModule = !0);
                },
                function (t, e) {
                    function n(e) {
                        return (
                            "function" == typeof Symbol && "symbol" == _typeof(Symbol.iterator)
                                ? (t.exports = n = function (e) {
                                    return _typeof(e);
                                })
                                : (t.exports = n = function (e) {
                                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : _typeof(e);
                                }),
                                (t.exports.default = t.exports),
                                (t.exports.__esModule = !0),
                                n(e)
                        );
                    }
                    (t.exports = n), (t.exports.default = t.exports), (t.exports.__esModule = !0);
                },
                function (e, t, n) {
                    var r = n(0);
                    (e.exports = function (e) {
                        if (Array.isArray(e)) return r(e);
                    }),
                        (e.exports.default = e.exports),
                        (e.exports.__esModule = !0);
                },
                function (e, t) {
                    (e.exports = function (e) {
                        if (("undefined" != typeof Symbol && null != e[Symbol.iterator]) || null != e["@@iterator"]) return Array.from(e);
                    }),
                        (e.exports.default = e.exports),
                        (e.exports.__esModule = !0);
                },
                function (e, t, n) {
                    var r = n(0);
                    (e.exports = function (e, t) {
                        if (e) {
                            if ("string" == typeof e) return r(e, t);
                            var n = Object.prototype.toString.call(e).slice(8, -1);
                            return "Object" === n && e.constructor && (n = e.constructor.name), "Map" === n || "Set" === n ? Array.from(e) : "Arguments" === n || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n) ? r(e, t) : void 0;
                        }
                    }),
                        (e.exports.default = e.exports),
                        (e.exports.__esModule = !0);
                },
                function (e, t) {
                    (e.exports = function () {
                        throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
                    }),
                        (e.exports.default = e.exports),
                        (e.exports.__esModule = !0);
                },
                function (e, t, n) {
                    n.r(t),
                        n.d(t, "default", function () {
                            return o;
                        });
                    var r = n(1),
                        I = n.n(r),
                        i = n(2),
                        j = n.n(i),
                        E = "Paypal",
                        L = "Braintree",
                        U = "BlueSnap_Google",
                        D = [
                            { id: 66, name: "AlePay", className: "ale-logo" },
                            { id: 61, name: "Amazon_Pay", className: "amazon-logo" },
                            { id: 58, name: U, className: "bluesnap-google-logo" },
                            { id: 55, name: "BraintreeVenmo", className: "braintree-venmo-logo" },
                            { id: 47, name: "Sepa", className: "sepa-logo" },
                            { id: 52, name: L, className: "braintree-logo" },
                            { id: 42, name: "Ideal", className: "ideal-logo" },
                            { id: 41, name: "Sofort", className: "sofort-logo" },
                            { id: 40, name: "Sezzle", className: "sezzle-logo" },
                            { id: 39, name: "AfterPay", className: "afterpay-logo" },
                            { id: 54, name: "Google_Apple_Pay", className: "google_apple-logo" },
                            { id: 5, name: E, className: "paypal-logo" },
                            { id: 31, name: E, className: "paypal-logo" },
                            { id: 0, name: "CreditCard", className: "creditcard-logo" },
                        ],
                        O = function (t) {
                            var e = D.find(function (e) {
                                return e.id === parseInt(t);
                            });
                            return e ? e.name : "";
                        };
                    function o(e) {
                        var l = e,
                            d = [],
                            u = [],
                            p = l.getAttribute("btn-add-param") ? l.getAttribute("btn-add-param") : "",
                            t = l.getAttribute("btn-cancel-param") ? l.getAttribute("btn-cancel-param") : "",
                            w = l.getAttribute("upsell-webkey") ? l.getAttribute("upsell-webkey").trim() : "",
                            n = l.getAttribute("use-pid"),
                            f = Number(l.getAttribute("qty-ratio")),
                            m = l.getAttribute("trial") ? l.getAttribute("trial") : "NO",
                            o = l.getAttribute("fake-popup") ? l.getAttribute("fake-popup") : "NO",
                            h = null,
                            g = "CC",
                            r = [];
                        window.miniUpsells = [];
                        var i,
                            a = {};
                        function y(n) {
                            return (
                                n.callBackUrl ||
                                (function () {
                                    try {
                                        return n.paymentContinueResult.actionUrl;
                                    } catch (e) {
                                        return;
                                    }
                                })() ||
                                (function () {
                                    try {
                                        var e = window.upsellIndex || 0,
                                            t = n.upsells[e].upsellUrl;
                                        return t.substr(t.lastIndexOf("/") + 1);
                                    } catch (e) {
                                        return;
                                    }
                                })() ||
                                window.__ctrPageConfiguration.confirmUrl
                            );
                        }
                        function v() {
                            var t,
                                e = window.miniUpsells[0];
                            return (
                                n &&
                                ((t = "object" === j()(JSON.parse(n)) ? JSON.parse(n.trim())[window.ctrwowCheckout.checkoutData.getProduct().productId] : Number(n.trim())),
                                    (e = window.miniUpsells.find(function (e) {
                                        return e.productId === t;
                                    }))),
                                    (window.diggy__productMiniUpsell = e)
                            );
                        }
                        function s() {
                            l.classList.remove("creditcard-jspopup", "popup_widget--opened"),
                                D.forEach(function (e) {
                                    l.classList.remove("".concat(e.className.replace("-logo", "-jspopup")));
                                }),
                                (window._q("body").style.overflow = "visible");
                        }
                        function c(e) {
                            l.classList.add("creditcard-jspopup"),
                                (g = "CC"),
                                (h = e),
                                JSON.parse(window.ctrwowUtils.localStorage().get("products")).forEach(function (e) {
                                    -1 === d.indexOf(e.productId) && u.push(e);
                                });
                            var t,
                                n = v(),
                                r =
                                    ((t = null),
                                        Array.prototype.slice.call(window._qAll(".js-list .list-item")).forEach(function (e) {
                                            e.classList.contains("list-item--checked") && (t = e);
                                        }),
                                        t),
                                i = window.ctrwowCheckout.checkoutData.getProduct().quantity / f,
                                o = 1 < n.quantity ? n.quantity / f : n.quantity;
                            window.ctrwowUtils.localStorage().get("quantityOnUI") && "0" !== window.ctrwowUtils.localStorage().get("quantityOnUI")
                                ? (i = parseInt(window.ctrwowUtils.localStorage().get("quantityOnUI")))
                                : ("true" === window.ctrwowUtils.localStorage().get("doubleQuantityHiden") || window.isDoubleQuantity) && ((i /= 2), (o /= 2)),
                                (l.querySelector(".ordered-qty").textContent = i),
                                Array.prototype.slice.call(l.querySelectorAll(".price-item .ordered-full-price")).forEach(function (e) {
                                    e.textContent = window.ctrwowCheckout.checkoutData.getProduct().productPrices.FullRetailPrice.FormattedValue;
                                }),
                                Array.prototype.slice.call(l.querySelectorAll(".price-item .ordered-price")).forEach(function (e) {
                                    e.textContent = window.ctrwowCheckout.checkoutData.getProduct().productPrices.DiscountedPrice.FormattedValue;
                                });
                            var a = r.querySelector(".js-diggy-name") || r.querySelector(".product-name");
                            a &&
                            Array.prototype.slice.call(l.querySelectorAll(".product-name")).forEach(function (e) {
                                e.textContent = a.textContent;
                            });
                            var s = r.querySelector(".js-diggy-subname") || r.querySelector(".root-desc");
                            s &&
                            Array.prototype.slice.call(l.querySelectorAll(".item-details .dynamic-desc .name")).forEach(function (e) {
                                e.textContent = s.textContent;
                            }),
                                Array.prototype.slice.call(l.querySelectorAll(".extra-item .extra-qty")).forEach(function (e) {
                                    e.textContent = i + o;
                                }),
                                (window.additionPriceValue = n ? n.productPrices.DiscountedPrice.Value : ""),
                                Array.prototype.slice.call(l.querySelectorAll(".full-addition-price")).forEach(function (e) {
                                    e.textContent = n ? n.productPrices.FullRetailPrice.FormattedValue : "";
                                }),
                                Array.prototype.slice.call(l.querySelectorAll(".additionPrice")).forEach(function (e) {
                                    e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(window.additionPriceValue, n.productPrices.DiscountedPrice.FormattedValue);
                                });
                            var c = n ? n.productPrices.FullRetailPrice.Value - n.productPrices.DiscountedPrice.Value : 0;
                            Array.prototype.slice.call(l.querySelectorAll(".saveDiscountPrice")).forEach(function (e) {
                                e.textContent = window.ctrwowUtils.number.formaterNumberByFormattedValue(c, n.productPrices.DiscountedPrice.FormattedValue);
                            }),
                            0 < n.shippings.length &&
                            l.querySelector(".shippingPrice") &&
                            (window.shippingIndex || (window.shippingIndex = 0),
                                n.shippings.sort(function (e, t) {
                                    return e.price - t.price;
                                }),
                                (window.shippingIndex = n.shippings.length <= window.shippingIndex ? 0 : window.shippingIndex),
                                Array.prototype.slice.call(l.querySelectorAll(".shippingPrice")).forEach(function (e) {
                                    e.textContent = n.shippings[window.shippingIndex].formattedPrice;
                                })),
                                (window._q("body").style.overflow = "hidden"),
                                l.classList.add("popup_widget--opened");
                        }
                        function b() {
                            Array.prototype.slice.call(l.querySelectorAll(".popup_widget_header img")).forEach(function (e) {
                                e.style.display = "none";
                            }),
                                D.forEach(function (e) {
                                    if (e.id === parseInt(window.paymentProcessorId))
                                        if ((l.classList.add("".concat(e.className.replace("-logo", "-jspopup"))), "google_apple_pay" === e.name.toLocaleLowerCase())) {
                                            if ("true" === localStorage.getItem("googlePay")) {
                                                var t = l.querySelector(".google-logo");
                                                t && (t.style.display = "inline");
                                            }
                                            if ("true" === localStorage.getItem("applePay")) {
                                                var n = l.querySelector(".apple-logo");
                                                n && (n.style.display = "inline");
                                            }
                                        } else {
                                            var r = l.querySelector(".".concat(e.className));
                                            r && (r.style.display = "inline");
                                        }
                                }),
                                c(null),
                                l.classList.remove("creditcard-jspopup"),
                                (g = "PP");
                        }
                        function k() {
                            c(null), (g = "CC_FIRST");
                        }
                        function S(e) {
                            var t = y(h),
                                n = 0 < t.indexOf("?") ? "&clickid=" + e : "?clickid=" + e;
                            if (t) {
                                var r = $("button.checkoutWithPaypal");
                                if ("CC" === g) {
                                    var i = $('button[name="checkoutWithCreditCardV1"]');
                                    r = i.length ? i : $('button[name="checkoutWithCreditCard"]');
                                }
                                var o = window.ctrwowCheckout.appendCtaClickIdTrackingParam(t, r);
                                location.href = o + n;
                            } else window.ctrwowUtils.link.redirectPage(C().confirmUrl);
                        }
                        function C() {
                            try {
                                return window.__ctrPageConfiguration || {};
                            } catch (e) {
                                console.error("[ctrwow-checkout-flow][checkoutData][getPageSettings] cannot read __ctrPageConfiguration"), console.error(window.__ctrPageConfiguration);
                            }
                        }
                        function x(e) {
                            var t = O(e);
                            if ("google_apple_pay" === t.toLocaleLowerCase()) window.gap.handleAppleGoogleClick();
                            else
                                switch (t) {
                                    case E:
                                        window.ctrwowCheckout.payment.checkoutWithPaypal(e).catch(function () {
                                            return (l.querySelector(".paymentProccessing").style.display = "none");
                                        });
                                        break;
                                    case L:
                                        window.checkout.paypal.initAuthFlow();
                                        break;
                                    case U:
                                        window.__paymentWithBlueSnapGoogle();
                                        break;
                                    default:
                                        window.ctrwowCheckout.payment.checkoutWithStripe(JSON.parse(window.paymentInfo)).catch(function () {
                                            return (l.querySelector(".paymentProccessing").style.display = "none");
                                        });
                                }
                        }
                        function _(e, t) {
                            console.log(e);
                            var n = JSON.parse(window.ctrwowUtils.localStorage().get("orderInfo"));
                            (n.quantity = t), window.ctrwowUtils.localStorage().set("orderInfo", JSON.stringify(n));
                            var r = y(e),
                                i = 0 < r.indexOf("?") ? "&clickid=" + p : "?clickid=" + p;
                            if (r) {
                                var o = window.ctrwowCheckout.appendCtaClickIdTrackingParam(r, $("button.checkoutWithPaypal"));
                                location.href = o + i;
                            } else window.ctrwowUtils.link.redirectPage(C().confirmUrl);
                        }
                        function P() {
                            var e = v();
                            r.push({
                                name: e.productDisplayName,
                                productId: e.productId,
                                price: e.productPrices.DiscountedPrice.Value,
                                formatPrice: e.productPrices.DiscountedPrice.FormattedValue,
                                addToSummary: !1,
                                type: "mini",
                                shippingMethodId: 0 < e.shippings.length ? e.shippings[0].shippingMethodId : null,
                            }),
                                console.log("mini", e.productDisplayName);
                            var t = window.ctrwowCheckout.checkoutData.getMiniUpsell() ? window.ctrwowCheckout.checkoutData.getMiniUpsell() : [],
                                n = [].concat(I()(t), r);
                            window.ctrwowCheckout.checkoutData.setMiniUpsell(n);
                        }
                        function A(e) {
                            window.ctrwowCheckout.payment.checkoutWithCreditCard(e).catch(function () {
                                return (l.querySelector(".paymentProccessing").style.display = "none");
                            });
                        }
                        function q() {
                            Array.prototype.slice.call(window._qAll(".js-list .list-item")).forEach(function (e) {
                                d.push(parseInt(e.getAttribute("data-id")));
                            });
                            var e = l.querySelectorAll(".btn-close, .btn-cancel");
                            Array.prototype.slice.call(e).forEach(function (e) {
                                e.addEventListener("click", function () {
                                    switch (((window.additionPriceValue = 0), window.ctrwowUtils.handleParam.addParamIntoUrl("clickid", t), s(), g)) {
                                        case "CC":
                                            S(t);
                                            break;
                                        case "PP":
                                            x(window.paymentProcessorId);
                                            break;
                                        default:
                                            A(window.paymentInfo);
                                    }
                                });
                            }),
                                l.querySelector(".section-button .btn-add").addEventListener("click", function () {
                                    switch ((window.ctrwowUtils.handleParam.addParamIntoUrl("clickid", p), s(), g)) {
                                        case "CC":
                                            if ("YES" === o) return void S(p);
                                            (e = new window.EmanageCRMJS({ webkey: w, cid: window.__ctrPageConfiguration.cid, lang: "", isTest: !!window.ctrwowUtils.link.getParameterByName("isCardTest") })),
                                                (t = (function () {
                                                    var e,
                                                        t = JSON.parse(window.ctrwowUtils.localStorage().get("orderInfo")),
                                                        n = v(),
                                                        r = { cardId: t.cardId };
                                                    "5" === t.paymentProcessorId || "31" === t.paymentProcessorId
                                                        ? (r = { paymentProcessorId: Number(t.paymentProcessorId) })
                                                        : t.installmentValue && "" !== t.installmentValue && (r.Instalments = t.installmentValue);
                                                    try {
                                                        e = JSON.parse(window.ctrwowUtils.localStorage().get("antiFraud"));
                                                    } catch (t) {
                                                        console.log(t), (e = null);
                                                    }
                                                    return {
                                                        campaignUpsell: { webKey: w, relatedOrderNumber: t.orderNumber },
                                                        productId: n.productId,
                                                        shippingMethodId: 0 < n.shippings.length ? n.shippings[0].shippingMethodId : null,
                                                        comment: "",
                                                        useShippingAddressForBilling: !0,
                                                        customer: { email: t.cusEmail },
                                                        payment: r,
                                                        funnelBoxId: 0,
                                                        shippingAddress: null != t.addressId ? { id: t.addressId } : null,
                                                        billingAddress: null,
                                                        antiFraud: { sessionId: e ? e.sessionId : "" },
                                                    };
                                                })()),
                                                e.Order.placeUpsellOrder(t, w, function (e) {
                                                    if (e.success) {
                                                        var o = window._q("body"),
                                                            a = 0,
                                                            s = 1,
                                                            t = JSON.parse(window.ctrwowUtils.localStorage().get("orderInfo")),
                                                            n = t.upsellUrls,
                                                            r = void 0 === n ? [] : n,
                                                            i = v();
                                                        "YES" === m
                                                            ? ((t.orderTotal = Number((parseFloat(t.orderTotal) + i.productPrices.DiscountedPrice.Value).toFixed(2))),
                                                                (t.orderTotalFull = Number((parseFloat(t.orderTotalFull) + i.productPrices.DiscountedPrice.Value).toFixed(2))))
                                                            : ((t.orderTotal = Number((parseFloat(t.orderTotal) + window.additionPriceValue).toFixed(2))),
                                                                (t.orderTotalFull = Number((parseFloat(t.orderTotalFull) + window.additionPriceValue).toFixed(2)))),
                                                            r.push({
                                                                index: t.upsellIndex,
                                                                price: i.productPrices.DiscountedPrice.Value,
                                                                campaignWebKey: w,
                                                                campaignName: "",
                                                                orderNumber: e.orderNumber,
                                                                customerId: e.customerResult.customerId,
                                                                url: location.href,
                                                                orderedProducts: [{ sku: i.sku, pid: i.productId, name: i.productName, quantity: i.quantity || "" }],
                                                            }),
                                                            (t.upsellUrls = r),
                                                            window.ctrwowUtils.localStorage().set("orderInfo", JSON.stringify(t));
                                                        var c = setInterval(function () {
                                                            if (350 === a) {
                                                                clearInterval(c);
                                                                var e = y(h),
                                                                    t = -1 < e.indexOf("?") ? "&clickid=" + p : "?clickid=" + p,
                                                                    n = $('button[name="checkoutWithCreditCardV1"]'),
                                                                    r = n.length ? n : $('button[name="checkoutWithCreditCard"]'),
                                                                    i = window.ctrwowCheckout.appendCtaClickIdTrackingParam(e, r);
                                                                window.location.href = i + t;
                                                            } else (a += 10), (o.style.right = a + "px"), (o.style.opacity = s), (s -= 0.05);
                                                        }, 10);
                                                    } else window.ctrwowUtils.link.redirectPage(window.ctrwowCheckout.getCrmInstance().declineUrl);
                                                });
                                            break;
                                        case "PP":
                                            if ("YES" === o) return void x(window.paymentProcessorId);
                                            !(function (e) {
                                                window.diggy__HasUpgrade = !0;
                                                var t = window.ctrwowCheckout.checkoutData.getProduct().quantity;
                                                P();
                                                var n = O(e);
                                                if ("google_apple_pay" === n.toLocaleLowerCase()) window.gap.handleAppleGoogleClick();
                                                else
                                                    switch (n) {
                                                        case E:
                                                            window.ctrwowCheckout.payment
                                                                .checkoutWithPaypal(e, !0)
                                                                .then(function (e) {
                                                                    _(e, t);
                                                                })
                                                                .catch(function () {
                                                                    return (l.querySelector(".paymentProccessing").style.display = "none");
                                                                });
                                                            break;
                                                        case L:
                                                            window.initBraintree(),
                                                                setTimeout(function () {
                                                                    window.checkout.paypal.initAuthFlow();
                                                                }, 1500);
                                                            break;
                                                        case U:
                                                            window.__paymentWithBlueSnapGoogle();
                                                            break;
                                                        default:
                                                            window.ctrwowCheckout.payment
                                                                .checkoutWithStripe(JSON.parse(window.paymentInfo), !0)
                                                                .then(function (e) {
                                                                    _(e, t);
                                                                })
                                                                .catch(function () {
                                                                    return (l.querySelector(".paymentProccessing").style.display = "none");
                                                                });
                                                    }
                                            })(window.paymentProcessorId);
                                            break;
                                        default:
                                            if ("YES" === o) return void A(window.paymentInfo);
                                            (n = window.paymentInfo),
                                                (i = window.ctrwowCheckout.checkoutData.getProduct().quantity),
                                                P(),
                                                window.ctrwowCheckout.payment
                                                    .checkoutWithCreditCard(n, !0)
                                                    .then(function (e) {
                                                        console.log(e);
                                                        var t = JSON.parse(window.ctrwowUtils.localStorage().get("orderInfo"));
                                                        (t.quantity = i), window.ctrwowUtils.localStorage().set("orderInfo", JSON.stringify(t));
                                                        var n = y(e),
                                                            r = 0 < n.indexOf("?").length ? "&clickid=" + p : "?clickid=" + p;
                                                        n ? (location.href = n + r) : window.ctrwowUtils.link.redirectPage(C().confirmUrl);
                                                    })
                                                    .catch(function () {
                                                        return (l.querySelector(".paymentProccessing").style.display = "none");
                                                    });
                                    }
                                    var e, t, n, i, r;
                                    "YES" === m &&
                                    ((r = v()),
                                        (a.productId = r.productId || ""),
                                        (a.quantity = r.quantity || 1),
                                        (a.sku = r.sku || ""),
                                        (a.imgUrl = l.querySelector(".extra-item .thumbnail img").src || ""),
                                        window.ctrwowUtils.localStorage().set("productTrial", JSON.stringify(a)));
                                }),
                                window.ctrwowUtils.events.on("triggerFinishOrder", c),
                                window.ctrwowUtils.events.on("triggerPaypalOrder", b),
                                window.ctrwowUtils.events.on("triggerCreditCardOrder", k);
                        }
                        window.addEventListener("load", function (e) {
                            q();
                        }),
                            (i = window.__ctrPageConfiguration.crmEndpoint + "/campaigns/" + window.__ctrPageConfiguration.webKey + "/products/all/miniupsells"),
                            window.ctrwowUtils.callAjax(i, { headers: { X_CID: window.__ctrPageConfiguration.cid }, "Content-Type": "application/json" }).then(function (e) {
                                e && 0 < e.length && (window.miniUpsells = e);
                            });
                    }
                },
            ]).default(this, e);
        } catch (e) {
            console.log("[widget-diggy-popup-mini-upsell-gjs] controller - exception handler"), console.log(e);
        }
        console.log("[widget-diggy-popup-mini-upsell-gjs]run controller");
    }.bind(el)(props[el.id]));
}
for (i = 0, len = (items = document.querySelectorAll("#i3wdcil")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#io21v8k")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iz5qbqz")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ibhmjsu")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ito7trd")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ibao9n4")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#i1dp5a")).length; i < len; i++)
    (function () {
        (function (i, e) {
            var t = JSON.parse("{}");
            console.log("component, settings, change", t);
            var n = t.webKey,
                o = i.__CTRWOW_CONFIG ? i.__CTRWOW_CONFIG.X_CID : "",
                r = function (e, t) {
                    var n = { "content-type": "application/json" };
                    o && (n.X_CID = o);
                    var r = i.ctrwowUtils.getCrmBaseUrl() + "/leadgens/" + e;
                    return i.ctrwowUtils.callAjax(r, { method: "POST", body: JSON.stringify(t), headers: n }).catch(function (e) {
                        console.warn(e);
                    });
                },
                a = {
                    isEmailValid: function (e) {
                        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(e).toLowerCase());
                    },
                    validateForm: function (e) {
                        if (!this.isEmailValid(e.email)) throw new Error("Invalid Email format");
                        if (!n) throw new Error("Missing Webkey Settings");
                    },
                    isShowWidget: function () {
                        return !0;
                    },
                    showWidget: function () {
                        this.isShowed || (e("#ctr-ec").css({ display: "block" }), (this.isShowed = !0));
                    },
                    hideWidget: function () {
                        e("#ctr-ec").css({ display: "none" });
                    },
                    isShowed: !1,
                },
                s = {
                    handleFormSubmit: function () {
                        try {
                            var t = e('#ctr-ec input[name="ctr_leaden__col_email"]').val();
                            a.validateForm({ email: t }),
                                i.ctrwowUtils.showGlobalLoading(),
                                i.ctrwowUtils.getUserAnalyticsInfo().then(function (e) {
                                    console.log(e),
                                        r(n, { isFromEmailWidget: !0, email: t, analyticsV2: e })
                                            .then(function () {
                                                i.localStorage.setItem("_CTR_LEADGEN__EMAIL_COLLECTION_EMAIL", t), a.hideWidget(), window.ctrwowUtils.events.emit("triggerEmailCollectionSubmitSuccess");
                                            })
                                            .catch(function (e) {
                                                throw new Error(e);
                                            })
                                            .finally(i.ctrwowUtils.hideGlobalLoading);
                                });
                        } catch (e) {
                            i.ctrwowUtils.hideGlobalLoading(), console.warn(e), alert(e);
                        }
                    },
                };
            return {
                run: function () {
                    try {
                        if (!n) throw new Error("Missing Offer Webkey setting");
                        if (!o) throw new Error("Missing x_cid config");
                        a.isShowWidget() ? (a.showWidget(), e("button.ctr-ec__action_button").on("click", s.handleFormSubmit)) : a.hideWidget();
                    } catch (e) {
                        console.warn(e);
                    }
                },
            };
        })(window, $).run();
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#iuvini")).length; i < len; i++)
    (function () {
        var e;
        (e = document.querySelector(".DMCA_Logo a")) && -1 === e.href.indexOf("refurl=") && (e.href += (0 <= e.href.indexOf("?") ? "&" : "?") + "refurl=" + location.href.split("?")[0]);
    }.bind(items[i])());
for (i = 0, len = (items = document.querySelectorAll("#ix4r554")).length; i < len; i++)
    (function () {
        var e;
        (e = document.querySelector(".DMCA_Logo a")) && (e.href += e.href.includes("refurl") ? "" : "&refurl=" + location.href);
    }.bind(items[i])());
var items;
for (i = 0, len = (items = document.querySelectorAll("#i8vdrr")).length; i < len; i++)
    (function () {
        window.ctrwowUtils.isBuilderMode() ||
        $(this).click(function (e) {
            var t = $("#wrapper"),
                n = $(this).attr("href"),
                r = $(this).attr("target"),
                i = $(this).attr("anchor");
            if ((n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length)) {
                window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
                try {
                    new Function("")();
                } catch (e) {
                    console.warn("handleOnClick error: " + e);
                }
                if ("popup" == r && !window.ctrwowUtils.isPreviewMode()) {
                    e.preventDefault(), console.log("link popup click");
                    var o = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                        a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
                    if (o) {
                        var s = $(o[0]).find(".ctr_modal_iframe");
                        s.length && $(s[0]).html(a), $(o[0]).addClass("show");
                    }
                    return;
                }
                if (i && "#" === i[0]) {
                    var c = $(i);
                    if (c.length) {
                        var l = c.offset().top;
                        $("body, html").animate({ scrollTop: l + "px" }, 800);
                    } else window.location.replace("" + n + i);
                    e.preventDefault();
                }
            }
        });
    }.bind(items[i])());
window.mobileCheck = function () {
    let check = false;
    (function (a) {
        if (
            /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
                a
            ) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                a.substr(0, 4)
            )
        )
            check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return check;
};

// handle product list call api success
function replaceSavePrice(dataProducts) {
    const listProducts = document.querySelectorAll(".js-list-item");
    if (dataProducts.length > 0) {
        for (let i = 0, n = dataProducts.length; i < n; i++) {
            if (listProducts.length > 0) {
                Array.prototype.slice.call(listProducts).forEach((item) => {
                    var productId = parseInt(item.dataset.id),
                        product = dataProducts[i];

                    if (productId == product.productId) {
                        var fullPriceValue = Number(product.productPrices.FullRetailPrice.Value.toFixed(2)),
                            discountPriceValue = Number(product.productPrices.DiscountedPrice.Value.toFixed(2)),
                            discountPriceFormat = product.productPrices.DiscountedPrice.FormattedValue,
                            savePriceValue = Number((fullPriceValue - discountPriceValue).toFixed(2)),
                            savePriceFormat = ctrwowUtils.number.formaterNumberByFormattedValue(savePriceValue, discountPriceFormat);

                        Array.prototype.slice.call(item.querySelectorAll(".js-save-price")).forEach((it) => {
                            it.innerHTML = it.innerHTML.replace(/{savePrice}/g, savePriceFormat);
                        });
                    }
                });
            }
        }
    }
}

function detectEditMode() {
    if (ctrwowUtils.isBuilderMode()) {
        _q("#billing-form").style.display = "block";
        _q(".customer-info").style.display = "flex";
    }
}

function removeSelectedProductList() {
    setTimeout(function () {
        Array.prototype.slice.call(_qAll(".js-list .list-item")).forEach((item) => {
            if (item.classList.contains("list-item--checked")) {
                item.classList.remove("list-item--checked");
            }

            item.addEventListener("click", function () {
                if (item.classList.contains("list-item--checked")) {
                    item.classList.add("list-item--checked");
                }
            });
        });
    }, 500);
}

function listener() {
    Array.prototype.slice.call(_qAll(".js-list .list-item__content")).forEach((item) => {
        item.querySelector(".order-btn").addEventListener("click", function () {
            if (window.mobileCheck()) {
                _q(".customer-info").style.display = "block";
                _q(".summary-col").classList.add("mobile-summary");
                _q(".customer-info").classList.add("customer-info-mobile");
            } else {
                _q(".customer-info").style.display = "flex";
                _q(".customer-info").scrollIntoView();
            }
            _q(".faq").style.display = "none";
            _q(".footer").style.display = "none";
        });
    });
    const btnOrderMobile = document.querySelector(".btn-order-mobile");
    if (btnOrderMobile) {
        btnOrderMobile.addEventListener("click", function () {
            if (window.mobileCheck()) {
                _q(".customer-info").style.display = "block";
                _q(".summary-col").classList.add("mobile-summary");
                _q(".customer-info").classList.add("customer-info-mobile");
            } else {
                _q(".customer-info").style.display = "flex";
            }
            _q(".customer-info").scrollIntoView();
            _q(".faq").style.display = "none";
            _q(".footer").style.display = "none";
        });
    }

    Array.prototype.slice.call(_qAll(".billing-group .radio-check")).forEach((item) => {
        item.innerHTML = item.innerHTML; //Clear event click default
        item.addEventListener("click", function (e) {
            if (e.currentTarget.querySelector("input").checked === false) {
                e.currentTarget.querySelector("input").checked = true;
            }

            if (e.currentTarget.querySelector("input").checked === true && e.currentTarget.classList.contains("use-billing-form")) {
                _q("#billing-form").style.display = "block";
            } else {
                _q("#billing-form").style.display = "none";
            }
        });
    });

    window.addEventListener("resize", function (event) {
        if (_q("#billing-form").style.display !== "none" && window.mobileCheck()) {
            _q(".customer-info").style.display = "block";
            _q(".summary-col").classList.add("mobile-summary");
            _q(".customer-info").classList.add("customer-info-mobile");
        } else if (_q("#billing-form").style.display !== "none" && !window.mobileCheck()) {
            _q(".customer-info").style.display = "flex";
            _q(".summary-col").classList.remove("mobile-summary");
            _q(".customer-info").classList.remove("customer-info-mobile");
        }
    });

    if (window.mobileCheck()) {
        _q(".summary-col").addEventListener("click", function () {
            if (_q(".order-summary__list").style.display === "none" || _q(".order-summary__list").style.display === "") {
                _q(".order-summary__list").style.display = "block";
                _q(".order-summary__total .arrow").classList.add("open");
            } else {
                _q(".order-summary__list").style.display = "none";
                _q(".order-summary__total .arrow").classList.remove("open");
            }
        });
    }

    if (_q(".btn-next")) {
        _q(".btn-next").addEventListener("click", function () {
            let validateForm = true;
            Array.prototype.slice.call(_qAll(".customer-info input")).forEach((item) => {
                if (item.classList.contains("error")) {
                    validateForm = false;
                }
            });
            Array.prototype.slice.call(_qAll(".customer-info select")).forEach((item) => {
                if (item.classList.contains("error")) {
                    validateForm = false;
                }
            });

            if (validateForm && _q(".credit-card-form")) {
                _q(".credit-card-form").classList.remove("hidden");
                _q(".credit-card-form").scrollIntoView({
                    behavior: "smooth",
                });
                _q(".btn-next").classList.add("hidden");
            }
        });
    }
}

function setInitialSumImg() {
    const imgSelected = document.querySelector(".js-list .list-item--checked .product-img").src;
    const imageSum = document.querySelector(".js-order-summary .order-summary__item img");
    const itemSelected = document.querySelector(".js-list .list-item--checked");
    imageSum.setAttribute("src", imgSelected);
    Array.prototype.slice.call(_qAll(".order-btn")).forEach((btn) => {
        btn.addEventListener("click", function () {
            imageSum.setAttribute("src", imgSelected);
        });
    });
}

function initData() {
    listener();
    setInitialSumImg();
}

window.ctrwowUtils.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/pubsub-js/1.7.0/pubsub.min.js", window.ctrwowUtils.getCtrLibLink("ctrwowCheckout", "1.0.0")]).then(() => {
    window.ctrwowCheckout.ready().then(() => {
        detectEditMode();
        initData();
        window.ctrwowCheckout.productListData.onProductListChange((productList) => {
            const products = productList.prices ? productList.prices : [];
            replaceSavePrice(products);
        });
        document.querySelector("#button-wrapper").style.display = "block";
    });
});

function getImgSrc() {
    const $image = $("img");
    $image.each((index) => {
        const $img = $($image[index]);
        const src = $img.attr("src") || $img.attr("data-ctr-lazy-src");
        console.log({
            imageSrc: src,
        });
    });
}
getImgSrc();
