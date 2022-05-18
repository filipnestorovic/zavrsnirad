"use strict";

function _typeof(e) {
   "@babel/helpers - typeof";
   return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
      return typeof e
   } : function (e) {
      return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
   })(e)
}
window.CTR_IMG_LAZY_LOADER = new Blazy({
   loadInvisible: !0,
   src: "data-ctr-lazy-src",
   selector: ".ctr-lazy-image",
   breakpoints: [{
      width: 768,
      src: "data-ctr-lazy-mobile-src"
   }, {
      width: 1024,
      src: "data-ctr-lazy-tablet-src"
   }],
   success: function (e) {},
   error: function (e) {
       e.setAttribute("src", e.getAttribute("data-ctr-lazy-src"))
   }
}), window.addEventListener("load", function () {
   window.CTR_IMG_LAZY_LOADER.revalidate()
});
// for (var props = {
//       ie6l: {
//          ctr__pageConfig: {
//             declineUrl: "",
//             successUrl: "",
//             checkoutUrl: "",
//             confirmUrl: "",
//             cid: "584ea331-0cd2-4c48-85d9-737f9dddfa0b",
//             gtmID: null,
//             crmEndpoint: "https://sales-prod.tryemanagecrm.com/api",
//             websaleApiUrl: "https://sales-prod.tryemanagecrm.com/api",
//             fpUserInfoGetCode: "hjQxSRcBk48Gii/2xmzwb2d08D1sazWO3qzOLwiRwndnSQ3w9zNITw==",
//             fpUserInfoPostCode: "hjQxSRcBk48Gii/2xmzwb2d08D1sazWO3qzOLwiRwndnSQ3w9zNITw==",
//             sourceConfig: {
//                source: null
//             }
//          }
//       }
//    }, ids = Object.keys(props).map(function (e) {
//       return "#" + e
//    }).join(","), i = 0, len = (els = document.querySelectorAll(ids)).length; i < len; i++) {
//    var el = els[i];
//    (function (e) {
//       try {
//          var t = e.addToCartEventName,
//             n = e.ctr__pageConfig,
//             i = e.ctrwowPackageVersion;
//          window.__ctrPageConfiguration = n, i && i.length && (window.__ctrwowPackageVersion = i),
//             function (n) {
//                if (n) {
//                   var i = window.ctrwowUtils;
//                   i.getDependencies(["https://cdnjs.cloudflare.com/ajax/libs/pubsub-js/1.7.0/pubsub.min.js"]).then(function () {
//                      var t = document.querySelector(".ctr_wow_body");
//                      t.addEventListener("keyup", function e() {
//                         i.tracking.pushGtmTrackingEvent(n), t.removeEventListener("keyup", e), window.PubSub && window.PubSub.unsubscribe("show-exit-popup")
//                      })
//                   })
//                }
//             }(t)
//       } catch (e) {
//          console.log(e)
//       }
//    }).bind(el)(props[el.id])
// }
// for (i = 0, len = (items = document.querySelectorAll("#i95iho")).length; i < len; i++)(function () {
//    var e, t = this,
//       n = [],
//       i = t.getAttribute("url"),
//       o = t.getAttribute("box-title");
//
//    function r(e) {
//       return new RegExp(/({\[(\s|\S)*?\]})/g).test(e)
//    }
//    if (o && o.length) document.querySelectorAll('[title="'.concat(o, '"]')).forEach(function (e) {
//       n.push(e), e.dataset.title = e.getAttribute("title"), e.removeAttribute("title")
//    });
//    else if (r(i) || i && (e = i, new RegExp(/[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/gi).test(e))) {
//       var a, l = document.querySelectorAll("a");
//       if (!l.length) return;
//       for (a = 0; a < l.length; a++) {
//          var c = new RegExp(i, "gi"),
//             d = decodeURI(l[a].href);
//          r(i) && (c = new RegExp(i.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&"), "gi")), d.match(c) && !l[a].closest(".sticky-bar") && l[a].hasAttribute("call-to-action") && n.push(l[a])
//       }
//    }
//
//    function s() {
//       n.some(function (e) {
//          return t = e.getBoundingClientRect(), n = t.top, i = t.bottom, o = t.width, r = t.height, a = window.innerHeight || document.documentElement.clientHeight, (0 < n || 0 < i) && n < a && 0 < o && 0 < r;
//          var t, n, i, o, r, a
//       }) ? !t.classList.contains("hidden") && t.classList.add("hidden") : t.classList.contains("hidden") && t.classList.remove("hidden")
//    }
//    setTimeout(function () {
//       s();
//       var e = window["__ctrStickyBarScrollEvent__".concat(t.id)] = s;
//       window.addEventListener("scroll", e)
//    }, 2e3)
// }).bind(items[i])();
// for (props = {
//       irfj7z: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iraqyh: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       in5w2f: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iecs1: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ihj1rz: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       i2jpyh: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       i6vnqa: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ilbsjl: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       i5qwrl: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       i1sqje: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ipprea: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       icj0h5: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       itr98j: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       in5ih9: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iqrava: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       i9uty4: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       i1jluh: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ipwesk: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       inhkgf: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       itw9ge: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       it55lx: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iwryj8: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ibh0vd: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ikdsvf: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ikyo41: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iqeaml: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iij0uf: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ichuc8: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       i48b2j: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ij9a6y: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       irk4ks: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iem79g: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ir7lq8: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ipdky5: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iqhijg: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iv6f17: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       iy2f4d: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       ib3bvx: {
//          "tracking-value": "",
//          handleOnClick: ""
//       },
//       i0uw6: {
//          "tracking-value": "",
//          handleOnClick: ""
//       }
//    }, ids = Object.keys(props).map(function (e) {
//       return "#" + e
//    }).join(","), i = 0, len = (els = document.querySelectorAll(ids)).length; i < len; i++) {
//    el = els[i];
//    (function (u) {
//       $(this).click(function (e) {
//          var t = $("#wrapper"),
//             n = $(this).attr("href"),
//             i = $(this).attr("target"),
//             o = $(this).attr("anchor");
//          if (n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length) {
//             var r = (u = u || {})["tracking-value"],
//                a = u.handleOnClick;
//             if (r && window.ctrwowUtils.tracking.pushGtmTrackingEvent(r), a) try {
//                new Function(a)()
//             } catch (e) {
//                console.warn("handleOnClick error: " + e)
//             }
//             if ("popup" == i && !window.ctrwowUtils.isPreviewMode()) {
//                e.preventDefault();
//                var l = $('div[ctrLinkContentId="'.concat(this.id, '"] .ctrwow-modal')),
//                   c = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="'.concat(n, '"></iframe>');
//                if (l) {
//                   var d = $(l[0]).find(".ctr_modal_iframe");
//                   d.length && $(d[0]).html(c), $(l[0]).addClass("show")
//                }
//                return
//             }
//             if (void 0 !== $(this).attr("call-to-action") && n && n.includes("ctr_fid")) return e.preventDefault(), $(this).removeAttr("href"), void(window.location.href = n);
//             if (o && "#" === o[0]) {
//                var s = document.querySelector(o);
//                s && s.scrollIntoView ? s.scrollIntoView({
//                   behavior: "smooth"
//                }) : window.location.replace("".concat(n).concat(o)), e.preventDefault()
//             }
//          }
//       })
//    }).bind(el)(props[el.id])
// }
let items;
let i;
let len;
for (i = 0, len = (items = document.querySelectorAll("#iicm")).length; i < len; i++)(function () {
   if (window.ctrwowUtils) {
      var e = window.ctrwowUtils,
         t = function () {
            setTimeout(function () {
               return window.ctrwowUtils.addCommonLinkHandler()
            }, 0), setTimeout(function () {
               return window.ctrwowUtils.addCommonImageHandler()
            }, 0), setTimeout(function () {
               return window.ctrwowUtils.addCommonTextHandler()
            }, 0)
         };
      e.isPreviewMode() || e.isBuilderMode() || /complete|interactive|loaded/.test(document.readyState) ? t() : document.addEventListener("DOMContentLoaded", t, !1)
   }
}).bind(items[i])();
for (i = 0, len = (items = document.querySelectorAll("#ivraf9")).length; i < len; i++)(function () {
   for (var e = document.querySelectorAll("#itr4a5"), t = 0, n = e.length; t < n; t++)(function () {
      window.ctrwowUtils.isBuilderMode() || $(this).click(function (e) {
         var t = $("#wrapper"),
            n = $(this).attr("href"),
            i = $(this).attr("target"),
            o = $(this).attr("anchor");
         if (n && n.match(/({\[(\s|\S)*?\]})/g) && e.preventDefault(), !t.length) {
            window.ctrwowUtils.tracking.pushGtmTrackingEvent("");
            try {
               new Function("")()
            } catch (e) {
               console.warn("handleOnClick error: " + e)
            }
            if ("popup" == i && !window.ctrwowUtils.isPreviewMode()) {
               e.preventDefault();
               var r = $('div[ctrLinkContentId="' + this.id + '"] .ctrwow-modal'),
                  a = '<iframe id="iframe" frameBorder="0" width="100%" height="100%" src="' + n + '"></iframe>';
               if (r) {
                  var l = $(r[0]).find(".ctr_modal_iframe");
                  l.length && $(l[0]).html(a), $(r[0]).addClass("show")
               }
               return
            }
            if (o && "#" === o[0]) {
               var c = $(o);
               if (c.length) {
                  var d = c.offset().top;
                  $("body, html").animate({
                     scrollTop: d + "px"
                  }, 800)
               } else window.location.replace("" + n + o);
               e.preventDefault()
            }
         }
      })
   }).bind(e[t])()
}).bind(items[i])();
// for (props = {
//       i3647x: {
//          "ctr-select-offers": '{"offerId":16207,"webKey":"565D41F9-574E-491F-B34D-CAD66AD280E9","offerName":"YourBuzzBGone Zap EN (HPF 39.99) (GS - Yellow Pop) (Test GiftCard)"}'
//       }
//    }, ids = Object.keys(props).map(function (e) {
//       return "#" + e
//    }).join(","), i = 0, len = (els = document.querySelectorAll(ids)).length; i < len; i++) {
//    el = els[i];
//    (function (e) {
//       try {
//          if (window.ctrDebug && window.ctrDebug.run(this, "widget-customer-location", e)) return !0;
//          (function (n) {
//             var i = {};
//
//             function o(e) {
//                if (i[e]) return i[e].exports;
//                var t = i[e] = {
//                   i: e,
//                   l: !1,
//                   exports: {}
//                };
//                return n[e].call(t.exports, t, t.exports, o), t.l = !0, t.exports
//             }
//             return o.m = n, o.c = i, o.d = function (e, t, n) {
//                o.o(e, t) || Object.defineProperty(e, t, {
//                   enumerable: !0,
//                   get: n
//                })
//             }, o.r = function (e) {
//                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
//                   value: "Module"
//                }), Object.defineProperty(e, "__esModule", {
//                   value: !0
//                })
//             }, o.t = function (t, e) {
//                if (1 & e && (t = o(t)), 8 & e) return t;
//                if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
//                var n = Object.create(null);
//                if (o.r(n), Object.defineProperty(n, "default", {
//                      enumerable: !0,
//                      value: t
//                   }), 2 & e && "string" != typeof t)
//                   for (var i in t) o.d(n, i, function (e) {
//                      return t[e]
//                   }.bind(null, i));
//                return n
//             }, o.n = function (e) {
//                var t = e && e.__esModule ? function () {
//                   return e.default
//                } : function () {
//                   return e
//                };
//                return o.d(t, "a", t), t
//             }, o.o = function (e, t) {
//                return Object.prototype.hasOwnProperty.call(e, t)
//             }, o.p = "", o(o.s = 1)
//          })([function (e, t) {
//             e.exports = function (e, t, n) {
//                return t in e ? Object.defineProperty(e, t, {
//                   value: n,
//                   enumerable: !0,
//                   configurable: !0,
//                   writable: !0
//                }) : e[t] = n, e
//             }, e.exports.default = e.exports, e.exports.__esModule = !0
//          }, function (e, t, n) {
//             n.r(t), n.d(t, "default", function () {
//                return o
//             });
//             var i = n(0),
//                a = n.n(i);
//
//             function u(t, e) {
//                var n = Object.keys(t);
//                if (Object.getOwnPropertySymbols) {
//                   var i = Object.getOwnPropertySymbols(t);
//                   e && (i = i.filter(function (e) {
//                      return Object.getOwnPropertyDescriptor(t, e).enumerable
//                   })), n.push.apply(n, i)
//                }
//                return n
//             }
//
//             function o(l, e) {
//                var c = l.querySelector(".customer-location"),
//                   o = e["ctr-select-offers"] ? JSON.parse(e["ctr-select-offers"]) : null,
//                   d = l.hasAttribute("hide-location"),
//                   r = window.ctrwowUtils.isBuilderMode();
//
//                function s(t) {
//                   var e = l.querySelectorAll(".location-detail");
//                   Array.prototype.slice.call(e).forEach(function (e) {
//                      e.style.display = t
//                   })
//                }
//                r && c.classList.remove("loading"),
//                   function () {
//                      if (!r && o) {
//                         !c.classList.contains("loading") && c.classList.add("loading"), d && s("none");
//                         var e = window.__CTRWOW_CONFIG,
//                            t = "".concat(e.crmEndpoint, "/campaigns/").concat(o.webKey, "/customers/location");
//                         window.ctrwowUtils.callAjax(t, {
//                            method: "GET",
//                            headers: function (t) {
//                               for (var e = 1; e < arguments.length; e++) {
//                                  var n = null != arguments[e] ? arguments[e] : {};
//                                  e % 2 ? u(Object(n), !0).forEach(function (e) {
//                                     a()(t, e, n[e])
//                                  }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(t, Object.getOwnPropertyDescriptors(n)) : u(Object(n)).forEach(function (e) {
//                                     Object.defineProperty(t, e, Object.getOwnPropertyDescriptor(n, e))
//                                  })
//                               }
//                               return t
//                            }({}, (n = e, i = {
//                               "content-type": "application/json"
//                            }, n && n.X_CID && (i.X_CID = n.X_CID), i))
//                         }).then(function (e) {
//                            if (e) {
//                               ! function (e) {
//                                  for (var t = l.querySelector(".customer-location"), n = e.regionName || "", i = e.city || "", o = e.countryName || "", r = document.createTreeWalker(t); r.nextNode();) {
//                                     var a = r.currentNode;
//                                     a.textContent = a.textContent.replace(/{state}/g, n).replace(/{city}/g, i).replace(/{country}/g, o)
//                                  }
//                                  c.classList.contains("loading") && (c.classList.remove("loading"), Array.prototype.slice.call(l.querySelectorAll(".dot-flashing")).forEach(function (e) {
//                                     e.remove()
//                                  })), d && s("inherit")
//                               }(e);
//                               var t = {
//                                  offerSelected: o,
//                                  data: e
//                               };
//                               window.ctrwowUtils.events.emit("customerLocationWidget", t), window.localStorage.setItem("customerLocationWidget", JSON.stringify(t))
//                            }
//                         })
//                      }
//                      var n, i
//                   }()
//             }
//          }]).default(this, e)
//       } catch (e) {
//          console.log(e)
//       }
//    }).bind(el)(props[el.id])
// }
var els;
for (let props = {
      iwc4vs: {
         provider: "Wista",
         layerType: "normal",
         videoId: "edx8anuwnp",
         muted: "YES",
         "btn-type": "below-video"
      },
      i43bew: {
         provider: "Wista",
         layerType: "normal",
         videoId: "jfyimuyrg8",
         muted: "YES",
         "btn-type": "below-video"
      },
      in985l: {
         provider: "Wista",
         layerType: "normal",
         videoId: "3s3aauyrxc",
         muted: "YES",
         "btn-type": "below-video"
      },
      ihjt4w: {
         provider: "Wista",
         layerType: "normal",
         videoId: "vmi2tweuax",
         muted: "YES",
         "btn-type": "below-video"
      }
   }, ids = Object.keys(props).map(function (e) {
      return "#" + e
   }).join(","), i = 0, len = (els = document.querySelectorAll(ids)).length; i < len; i++) {
   let el = els[i];
   (function (e) {
      try {
         if (window.ctrDebug && window.ctrDebug.run(this, "widget-cta-button-on-video-gjs", e)) return !0;
         (function (n) {
            var i = {};

            function o(e) {
               if (i[e]) return i[e].exports;
               var t = i[e] = {
                  i: e,
                  l: !1,
                  exports: {}
               };
               return n[e].call(t.exports, t, t.exports, o), t.l = !0, t.exports
            }
            return o.m = n, o.c = i, o.d = function (e, t, n) {
               o.o(e, t) || Object.defineProperty(e, t, {
                  enumerable: !0,
                  get: n
               })
            }, o.r = function (e) {
               "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                  value: "Module"
               }), Object.defineProperty(e, "__esModule", {
                  value: !0
               })
            }, o.t = function (t, e) {
               if (1 & e && (t = o(t)), 8 & e) return t;
               if (4 & e && "object" == _typeof(t) && t && t.__esModule) return t;
               var n = Object.create(null);
               if (o.r(n), Object.defineProperty(n, "default", {
                     enumerable: !0,
                     value: t
                  }), 2 & e && "string" != typeof t)
                  for (var i in t) o.d(n, i, function (e) {
                     return t[e]
                  }.bind(null, i));
               return n
            }, o.n = function (e) {
               var t = e && e.__esModule ? function () {
                  return e.default
               } : function () {
                  return e
               };
               return o.d(t, "a", t), t
            }, o.o = function (e, t) {
               return Object.prototype.hasOwnProperty.call(e, t)
            }, o.p = "", o(o.s = 0)
         })([function (e, t, n) {
            function i(w, p) {
               var e = w,
                  v = e.querySelector(".video"),
                  t = e.querySelector(".cta-area"),
                  n = e.querySelector(".cta-btn"),
                  g = p.provider,
                  m = p.layerType,
                  h = p.videoId,
                  y = "YES" === p.muted ? 0 : 1,
                  b = e.hasAttribute("autoPlay") ? 1 : 0,
                  k = e.hasAttribute("loop") ? 1 : 0,
                  O = e.hasAttribute("hidecontrol") ? 1 : 0,
                  i = e.getAttribute("animation") || !1,
                  o = p["btn-type"],
                  C = window.ctrwowUtils.isBuilderMode();
               i && n && n.classList.add("cta-btn-bouncing"), C && t && t.classList.add("builder");
               var r = "true",
                  a = "true",
                  l = 1,
                  S = 1,
                  c = e.hasAttribute("loop") ? "loop" : "default",
                  d = 1,
                  s = "false",
                  u = "true",
                  f = "true",
                  _ = "true",
                  j = e.getAttribute("delay-load") ? parseInt(e.getAttribute("delay-load")) : 0,
                  L = !1;

               function A() {
                  if (!L) {
                     if (L = !0, window.removeEventListener("touchstart", A, !0), window.removeEventListener("click", A, !0), window.removeEventListener("scroll", A, !0), "wista" === g.toLowerCase()) {
                        if (!window.importedLibs) {
                           var e = document.createElement("script");
                           e.src = "https://fast.wistia.com/assets/external/E-v1.js", e.defer = !0, document.head.appendChild(e), window.importedLibs = !0
                        }
                     } else if ("vimeo" === g.toLowerCase()) {
                        v.classList.add("vimeo");
                        var t = "background" === m.toLowerCase() ? 'style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;max-width:100%;height:auto;"' : "",
                           n = "background" === m.toLowerCase() ? 'style="position:absolute;top:0;left:0;width:100%;height:100%;"' : "",
                           i = "background" === m.toLowerCase() || 1 === O ? "&background=1" : "",
                           o = 0 === y ? 1 : 0,
                           r = "https://player.vimeo.com/video/".concat(h, "?title=0&autoplay=").concat(b, "&loop=").concat(k, "&muted=").concat(o).concat(i),
                           a = C ? r : "",
                           l = '<div class="vimeo-wrapper" data-videoid="'.concat(h, '" ').concat(t, ">\n                <iframe ").concat(n, ' loading="lazy" data-src=').concat(r, ' width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen src=').concat(a, "></iframe>\n            </div>");
                        v.innerHTML = l
                     } else if ("youtube" === g.toLowerCase()) {
                        v.classList.add("youtube");
                        var c = "YES" === p.muted,
                           d = "https://www.youtube.com/embed/".concat(h, "?autoplay=").concat(b, "&mute=").concat(c, "&loop=").concat(k, "&playlist=").concat(h, "&controls=").concat(S),
                           s = C ? d : "",
                           u = '<div class="youtube-wrapper" data-videoid="'.concat(h, '">\n        <iframe loading="lazy" width="420" height="315" data-src=').concat(d, ' frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src=').concat(s, "></iframe>\n      </div>");
                        v.innerHTML = u
                     }
                     if (!C) {
                        var f = w.querySelectorAll('iframe[loading="lazy"]');
                        Array.prototype.forEach.call(f, function (e) {
                           e.src = e.dataset.src
                        })
                     }
                     window.ctrwowUtils.events.emit("startVideoFinished")
                  }
               }("background" === m.toLowerCase() || O) && (c = "loop", d = S = l = 0, s = "true", _ = f = u = a = r = "false", O ? S = "false" : e.querySelector(".video-cta-group") && e.querySelector(".video-cta-group").classList.add("background")),
               function () {
                  if ("wista" === g.toLowerCase()) {
                     var e = '<div class="myVideo w_wistia" data-videoid="'.concat(h, "\">\n                  <div style='height:100%;width:100%' class='wistia_embed videoFoam=true wistia_async_").concat(h, "  autoPlay=").concat(b, " endVideoBehavior=").concat(c, " playbar=").concat(r, " playButton=").concat(a, " controlsVisibleOnLoad=").concat(l, " settingsControl=").concat(S, " playbackRateControl=").concat(d, " volumeControl=").concat(u, " smallPlayButton=").concat(f, " fullscreenButton=").concat(_, " muted=").concat(s, " volume=").concat(y, "' ></div>\n              </div>");
                     v.innerHTML = e
                  }
                  "video-end" === o ? "wista" === g.toLowerCase() && (window._wq = window._wq || [], window._wq.push({
                     id: h,
                     onReady: function (e) {
                        e.bind("end", function () {
                           C || (window.ctrwowUtils.events.emit("endVideo_" + h), t && t.classList.add("show"))
                        })
                     }
                  })) : "below-video" === o && t && t.classList.add("show-below")
               }(), C ? A() : window.addEventListener("load", function () {
                  window.ctrwowUtils.events.emit("startVideo"), j < 0 && (j = 0), setTimeout(A, j), window.addEventListener("touchstart", A, !0), window.addEventListener("click", A, !0), window.addEventListener("scroll", A, !0)
               })
            }
            n.r(t), n.d(t, "default", function () {
               return i
            })
         }]).default(this, e)
      } catch (e) {
         console.log(e)
      }
   }).bind(el)(props[el.id])
}
// for (i = 0, len = (items = document.querySelectorAll("#id62")).length; i < len; i++)(function () {
//    var e;
//    (e = document.querySelector(".DMCA_Logo a")) && (e.href += e.href.includes("refurl") ? "" : "&refurl=".concat(location.href))
// }).bind(items[i])();
// var items;
// for (i = 0, len = (items = document.querySelectorAll("#iovrr, #inv12g")).length; i < len; i++)(function () {
//    var t = this,
//       e = parseInt(t.getAttribute("day-bias")) || 0,
//       n = new Date,
//       i = new Date(n.setDate(n.getDate() + e));
//    try {
//       var o = t.getAttribute("date-time-locale") || "en-US",
//          r = JSON.parse(t.getAttribute("date-formatter"));
//       t.innerHTML = new Intl.DateTimeFormat(o, r || {}).format(i)
//    } catch (e) {
//       t.innerHTML = new Intl.DateTimeFormat("en-US").format(i)
//    }
// }).bind(items[i])();;
document.addEventListener('DOMContentLoaded', function () {
   function isInViewport(el) {
      const rect = el.getBoundingClientRect();
      return (
         rect.top >= 0 &&
         rect.left >= 0 &&
         rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
         rect.right <= (window.innerWidth || document.documentElement.clientWidth)

      );
   }


   const box = document.querySelector('.box');
   const btn = document.querySelector('.btn');
   const sub = document.querySelector('.sub');
   const floatingBar = document.querySelector('.sticky-bar');

   document.addEventListener('scroll', function () {
      if (isInViewport(box) || isInViewport(btn) || isInViewport(sub)) {
         floatingBar.style.display = "none";
      } else {
         floatingBar.style.display = "block";
      }
   }, {
      passive: true
   });

}, false);;

// let isFirstLoad = false;

// function customerLocationWidgetLoaded() {
//    if (isFirstLoad) return
//
//    const customerLocationLink = document.querySelectorAll('.customer-location-link');
//    const customerLocationMsg = document.querySelectorAll('.customer-location-msg');
//
//    customerLocationLink.forEach(link => {
//       link.style.display = 'inline';
//    })
//    customerLocationMsg.forEach(msg => {
//       msg.style.display = 'none';
//    })
//
//    isFirstLoad = true
// }

// window.ctrwowUtils.events.on('customerLocationWidget', customerLocationWidgetLoaded);