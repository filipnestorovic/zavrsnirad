"use strict";
// function getUrlVars() {
//     for (var e, t = [], n = window.location.href.slice(window.location.href.indexOf("?") + 1).split("&"), i = 0; i < n.length; i++) (e = n[i].split("=")), t.push(e[0]), (t[e[0]] = e[1]);
//     return t;
// }
// function _defineProperty(e, t, n) {
//     return t in e ? Object.defineProperty(e, t, { value: n, enumerable: !0, configurable: !0, writable: !0 }) : (e[t] = n), e;
// }
// function _toConsumableArray(e) {
//     if (Array.isArray(e)) {
//         for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
//         return n;
//     }
//     return Array.from(e);
// }
// function createReport() {
//     var e = [];
//     gu_checkout.cart.forEach(function (t) {
//         var n = { priceInfo: t.tags, productId: t.product_id, productTitle: t.name, quantity: t.qty, sku: t.sku, variantId: t.variant_id, variantName: t.name, variantTitle: t.name },
//             i = void 0,
//             a = "Products",
//             o = "Other Products",
//             r = t.type;
//         if (void 0 !== t.bundle_id)
//             switch (t.type) {
//                 case "bundle":
//                     for (var s = 0, l = componentOffer.bundle_info.length, d = 0; d < componentOffer.bundle_info.length; d++)
//                         if (componentOffer.bundle_info[d].bundle_slug === t.bundle_id) {
//                             s = d + 1;
//                             break;
//                         }
//                     a = "offer-" + l + "-bundle-" + s;
//                     break;
//                 case "presell":
//                     a = "presell";
//                     break;
//                 case "presell popup":
//                     a = "presell-popup-1";
//                     break;
//                 default:
//                     a = "other";
//             }
//         switch (t.type) {
//             case "bundle":
//                 o = t.bundle_name;
//                 break;
//             case "presell":
//                 o = "Presell";
//                 break;
//             case "presell popup":
//                 o = "Presell Popup";
//                 break;
//             default:
//                 o = "Other Products";
//         }
//         if (
//             (e.forEach(function (e) {
//                 e.type === r && (i = !0);
//             }),
//                 i)
//         ) {
//             var c = 0;
//             try {
//                 c = e.findIndex(function (e) {
//                     return e.type === r;
//                 });
//             } catch (u) {
//                 for (var p = 0; p < e.length; ++p)
//                     if (e[p].type === r) {
//                         c = p;
//                         break;
//                     }
//             }
//             e[c].lineItems.push(n);
//         } else e.push({ id: a, name: o, lineItems: [n], quantity: 1, type: r });
//     });
//     for (var t = "", n = "", i = 0; i < e.length; i++) {
//         (t += e[i].name + ";;;"), (t += e[i].id + ";;;"), (t += e[i].quantity + ";;;"), (t += e[i].type + ";");
//         for (var a = 0; a < e[i].lineItems.length; a++)
//             (t += ";;"),
//                 (t += e[i].lineItems[a].productId + ";"),
//                 (t += e[i].lineItems[a].variantName + ";"),
//                 (t += e[i].lineItems[a].variantId + ";"),
//                 (t += e[i].lineItems[a].quantity + ";"),
//                 (t += e[i].lineItems[a].priceInfo.tp + ";"),
//                 (t += e[i].lineItems[a].priceInfo.rp + ";"),
//                 (t += e[i].lineItems[a].priceInfo.wp + ";"),
//                 (t += e[i].lineItems[a].productTitle + ";"),
//                 (t += e[i].lineItems[a].sku ? e[i].lineItems[a].sku : "NoSku");
//         (n += e[i].type + ":" + e[i].name + ";quantity:" + e[i].quantity), i != e.length - 1 && (";" === t.slice(-1) && (t = t.slice(0, -1)), (t += ";;;;"), (n += ";"));
//     }
//     var o = { selectedUnits: t, gu_bundles: n };
//     return o;
// }
// function startCheckout(e) {
//     gu_checkout.startCheckout(e);
// }
// function initGalleries() {
//     $(function () {
//         $(".gallery-container").trigger("init");
//     });
// }
// function showUpsellPopUp(e) {
//     var t = $("#" + e + ".upsell-popup .popup-image"),
//         n = $("#" + e + ".upsell-popup .popup-image img"),
//         i = t.find("img").attr("src"),
//         a = t.find("img").attr("data-cfsrc"),
//         o = void 0;
//     if (((o = a ? a : i), gu_vs.check() !== !1))
//         if ("variety" !== gu_vs.data()) {
//             var r = /.+\/1-[a-zA-Z].+\.(png|jpg)/g,
//                 s = i.split(".").pop();
//             if (r.test(o)) {
//                 var l = gu_vs.data(),
//                     d = o.match(/.+\/1-/gi)[0];
//                 if (2 === l.split(/\W+/).length) {
//                     var c = l.trim().split(/\s+/).join("-");
//                     l = c;
//                 }
//                 "png" === s ? ((o = d + l + ".png"), t.find("img").attr("src", o)) : ((o = d + l + ".jpg"), t.find("img").attr("src", o));
//             }
//         } else n.attr("src", o);
// }
// function _toConsumableArray(e) {
//     if (Array.isArray(e)) {
//         for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
//         return n;
//     }
//     return Array.from(e);
// }
// function getBrandConfig(e) {
//     var t = new XMLHttpRequest();
//     "en" === gu_language && "us" === gu_country
//         ? t.open("GET", "https://9xuzl3lle5.execute-api.us-west-2.amazonaws.com/prod/offers/v20-" + e + "-domestic/web-config", !0)
//         : t.open("GET", "https://9xuzl3lle5.execute-api.us-west-2.amazonaws.com/prod/offers/v20-" + e + "-intl/web-config", !0),
//         (t.responseType = "json"),
//         (t.onreadystatechange = function () {
//             4 == t.readyState &&
//             (t.status < 300 && t.status >= 200
//                 ? t.response && ("TRUE" === t.response.isdefault ? (console.log("got old default config, fetch new default config"), getBrandConfig("default")) : bannerLoader(t.response))
//                 : console.log("Brand config failed to load"));
//         }),
//         t.send(JSON.stringify({}));
// }
// function bannerLoader(e) {
//     var t = gu_qs.gubn,
//         n = gu_qs.gunt,
//         i = null,
//         a = null,
//         o = "#2C2C2C",
//         r = "#B52E25",
//         s = "0" === n || "TRUE" != e.countdownenabled ? "none" : "block",
//         l = e.bannerend;
//     if ("TRUE" === e.bannerenabled && getTimeRemaining(e.bannerstart).total < 0 && getTimeRemaining(l).total > 0 && "0" !== t) {
//         e.followupbannerstart && getTimeRemaining(e.followupbannerstart).total > 0 && (l = e.followupbannerstart),
//             e.followupbannerstart && getTimeRemaining(e.followupbannerstart).total < 0
//                 ? ((i = e.followupbannerheadline1),
//                     (a = e.followupbannerheadline2),
//                     (o = o = e.followupbannerbgcolor ? e.followupbannerbgcolor : e.bannerbgcolor),
//                     (r = r = e.followupbannertimerbgcolor ? e.followupbannertimerbgcolor : e.bannerbgcolor))
//                 : ((i = e.bannerheadline1), (a = e.bannerheadline2), (o = e.bannerbgcolor), (r = e.bannertimerbgcolor));
//         var d = null === a || "null" === a ? "none" : "block",
//             c = document.createElement("div");
//         c.innerHTML =
//             "<div id='holidayBanner' style='color: " +
//             lightOrDark(o) +
//             "; text-align: center; padding: 20px 20px 15px 20px !important; background-color: " +
//             o +
//             "; display: none; position: relative; z-index: 1001;'>                <span id='bannerHeadline' style='font-size: 28px; font-family: Arial; display: block; padding-right: 5px;'>                    <strong>" +
//             guSubstituteString(i) +
//             "</strong>                     <br/>                    <strong style='font-size: 0.75em;display:" +
//             d +
//             "'>" +
//             guSubstituteString(a) +
//             "</strong>                 </span>                <span style='font-size: 16px; display: " +
//             s +
//             "; padding: 0px 5px 5px 5px; font-weight: bold; max-width: 282px; background: " +
//             r +
//             "; margin: 10px auto !important; border-radius: 2px; -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.35); -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.35); box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.35); color: " +
//             lightOrDark(r) +
//             "; letter-spacing: 1.45px; font-weight: 700;' id='bannerSubHead'>                </span>\t\t    </div>";
//         var u = getTimeRemaining(l),
//             p = document.getElementById("main-wrapper");
//         u.total > 0 && (p.insertBefore(c, p.firstChild), initializeClock("bannerSubHead", l)),
//             setTimeout(function () {
//                 jQuery("#holidayBanner").slideDown(), jQuery("#yoHolder").css("z-index", 100);
//             }, 1e3);
//     }
// }
// function initializeClock(e, t) {
//     var n = document.getElementById(e),
//         i = setInterval(function () {
//             var e = getTimeRemaining(t);
//             (n.innerHTML =
//                 '<div style="font-size:30px; padding: 0px 3px; margin: -5px 0;"><span>' +
//                 e.days +
//                 " : " +
//                 e.hours +
//                 " : " +
//                 e.minutes +
//                 " : " +
//                 e.seconds +
//                 '</span></div>\t    \t          <div style="font-size:13px; letter-spacing: 1.2px;"><span> DAYS <span style="padding:0px 10px;">-</span> HRS <span style="padding:0px 10px;">-</span> MINS <span style="padding:0px 10px;">-</span> SEC</span></div>'),
//             e.total <= 0 && clearInterval(i);
//         }, 1e3);
// }
// function getTimeRemaining(e) {
//     var t = new Date(e);
//     t = t.getTime() + 60 * t.getTimezoneOffset() * 1e3;
//     var n = t - Date.now(),
//         i = Math.floor((n / 1e3) % 60),
//         a = Math.floor((n / 1e3 / 60) % 60),
//         o = Math.floor((n / 36e5) % 24),
//         r = Math.floor(n / 864e5);
//     return r < 10 && (r = "0" + r), o < 10 && (o = "0" + o), a < 10 && (a = "0" + a), i < 10 && (i = "0" + i), { total: n, days: r, hours: o, minutes: a, seconds: i };
// }
// function lightOrDark(e) {
//     var t = void 0,
//         n = void 0,
//         i = void 0,
//         a = void 0;
//     e = e.replace(/[^0-9A-F]/gi, "");
//     var o = parseInt(e, 16);
//     return (t = (o >> 16) & 255), (n = (o >> 8) & 255), (i = 255 & o), (a = Math.sqrt(0.299 * (t * t) + 0.587 * (n * n) + 0.114 * (i * i))), a > 127.5 ? "#333" : "white";
// }
// function replaceTokens(rawPhrase) {
//     var regex = /\[\[(.*?)\]\]/,
//         token = rawPhrase.match(regex)[1];
//     try {
//         var result = eval(token),
//             newPhrase = rawPhrase.replace(regex, result);
//         return newPhrase;
//     } catch (e) {
//         return !1;
//     }
// }
// var cleanSelector = function (e) {
//     return (
//         (e.match(/(#[0-9][^\s:,]*)/g) || []).forEach(function (t) {
//             e = e.replace(t, '[id="' + t.replace("#", "") + '"]');
//         }),
//             e
//     );
// };
// if ("undefined" != typeof gu_qs.guoffer) {
//     var activeOfferName = window.gu_qs.guoffer;
//     if ((console.log("is this working", window.gu_qs.guoffer), activeOfferName && $(".additional-offer-container").length)) {
//         $("#offer").hide(), $("#" + activeOfferName).show();
//         var currentUrl = window.location.href,
//             additional_offer = "#" + activeOfferName,
//             cleanoffername = cleanSelector(additional_offer),
//             bundleClass = ".bundle",
//             bundles = cleanoffername + " " + bundleClass,
//             objectBundleName = $(cleanoffername).data("offername"),
//             extras = ".extras",
//             quantity_el = ".qty",
//             ribbon_el = ".ribbon",
//             ribbonTxt_el = "h6",
//             qtyActivator = ".qtyActivator",
//             selectedClass = "selected",
//             checkmark = ".checkbox input",
//             multi_bundleData = componentAdditionalOffer[objectBundleName],
//             bundleNumber = 0;
//         if (void 0 !== multi_bundleData) {
//             window.mobileDevice = (window.innerWidth > 0 ? window.innerWidth : screen.width) <= 767;
//             for (
//                 var variant_type = void 0 !== multi_bundleData[0] ? multi_bundleData[0].bundle_object[0].bundle_variant_info.options[0].name : "",
//                     allowMultipleBundles = "upgrade" == variant_type.toLowerCase(),
//                     offers_arr = document.querySelectorAll(bundles),
//                     i = 0;
//                 i < offers_arr.length;
//                 i++
//             ) {
//                 var offer_id = offers_arr[i].getAttribute("id");
//                 console.log("addtl offers id", offer_id);
//                 var offer_el = document.getElementById("#" + offer_id);
//             }
//             var gu_additional_offers = (function () {
//                 function e() {
//                     if ("en" !== window.gu_language && $(this).is(":visible") && "auto" === $(this).css("clip")) {
//                         var e = $(this).children(),
//                             t = parseInt($(this).css("font-size"));
//                         "" === $(this).attr("data-translation-textsizer")
//                             ? (0 === e.length && ($(this).wrapInner("<span></span>"), (e = $("span", $(this)))), t !== parseInt($(e).css("font-size")) && $(e).css("font-size", t + "px"), $(this).attr("data-translation-textsizer", t))
//                             : t > parseInt($(e).css("font-size")) && ($(e).css("font-size", t + "px"), $(this).attr("data-translation-textsizer", t));
//                         var n = 0;
//                         "none" !== $(this).css("transform") && (n = $(this).height() * (window.innerWidth >= 768 ? 2 : 2.25) + 2);
//                         var i = $(this).width() - n,
//                             a = parseInt($(this).attr("data-translation-textsizer"));
//                         $(e).css("font-size", a + "px");
//                         for (var o = $(e).width(), r = 1; o > i && r < 10; ) (a = parseInt($(e).css("font-size"))), $(e).css("font-size", a - r + "px"), (o = $(e).width()), (i = $(this).width() - n), r++;
//                     }
//                 }
//                 function t(e) {
//                     multi_bundleData.filter(function (t, n) {
//                         return t.bundle_slug === e && (bundleNumber = n), bundleNumber;
//                     });
//                 }
//                 function n(e) {
//                     var t = $(bundles + ".selected").data("slug"),
//                         n = $(additional_offer).data("title"),
//                         i = $(additional_offer + " .bundle.selected").data("index"),
//                         a = $(bundles + ".selected").attr("data-bundle-qty"),
//                         o = multi_bundleData[i - 1].bundle_object;
//                     console.log(multi_bundleData);
//                     var r = i,
//                         l = o[0].bundle_variant_info.id;
//                     s.length > 0 &&
//                     ($.each(s, function (e, t) {
//                         gu_checkout.removeProduct(t);
//                     }),
//                         (s = []));
//                     var d = [];
//                     (d = "undefined" != typeof discount_bundle_object ? o.concat(discount_bundle_object) : o),
//                         $.each(d, function (e, i) {
//                             if (!(i.bundle_variant_info.variants.length > 1)) {
//                                 var o = "fixed" != a ? $(bundles + "." + selectedClass + " " + quantity_el).text() : 1,
//                                     c = i.discount > 0;
//                                 if (~a.indexOf("conditional")) {
//                                     var u = a.split("-")[1];
//                                     if (o > u) {
//                                         if (d.length > 1)
//                                             if (c) {
//                                                 if (l != i.pid) return;
//                                                 o -= u;
//                                             } else o = u;
//                                     } else if (c) return;
//                                 }
//                                 var p = {
//                                         product_id: i.bundle_variant_info.variants[0].product_id,
//                                         variant_id: i.bundle_variant_info.variants[0].id,
//                                         name: i.bundle_variant_info.title,
//                                         price: i.bundle_variant_info.variants[0].price,
//                                         qty: i.qty * o,
//                                         weight: i.bundle_variant_info.weight + i.bundle_variant_info.weight_unit,
//                                         img: i.bundle_variant_info.images[0] ? i.bundle_variant_info.images[0].src : "/wp-content/themes/giddyupio-prototype/images/image-placeholder.png",
//                                         sku: i.bundle_variant_info.variants[0].sku,
//                                         tags: gu_products.getPriceInfoForProduct(i.bundle_variant_info.variants[0].product_id),
//                                         bundle_name: n,
//                                         bundle_id: t,
//                                         bundle_position: r,
//                                         type: "bundle",
//                                     },
//                                     f = 0,
//                                     g = "";
//                                 gu_checkout.cart.forEach(function (e, t) {
//                                     p.product_id === e.product_id && ((f = e.qty + 1), (g = e.upi));
//                                 });
//                                 try {
//                                     if (0 == f) {
//                                         var _ = gu_checkout.addProduct(p);
//                                         s.push(_);
//                                     } else (p.qty = f), gu_checkout.updateProduct(g, p);
//                                 } catch (h) {
//                                     console.error("Failure to add or update cart \r\n", h);
//                                 }
//                             }
//                         }),
//                     e && gu_checkout.startCheckout(),
//                         gu_events.fireAndLogEvent(gu_events.eventList.bundleSelected);
//                 }
//                 function i(e) {
//                     var t = $(e.currentTarget),
//                         i = $(e.target).closest(".checkout").length,
//                         o = $(e.target).closest(".next").length,
//                         r = $(t).attr("data-index"),
//                         s = $(t).data("bundle-qty"),
//                         l = $(e.target).closest("[data-quantify]").length,
//                         d = ($(".qty", $(t)).text(), !(!i && !o && "fixed" != s));
//                     if (
//                         ($(e.target).closest(".no-checkout").length && (d = !1),
//                             multi_bundleData.forEach(function (e) {
//                                 e.hasOwnProperty("selected_bundle") && delete e.selected_bundle;
//                             }),
//                             allowMultipleBundles)
//                     )
//                         if (i || l)
//                             $(bundles).each(function (e) {
//                                 $(this).hasClass("selected") ? (multi_bundleData[e].selected_bundle = !0) : 0 != $(".qty", $(this)).text() && ($(this).addClass("selected"), (multi_bundleData[e].selected_bundle = !0));
//                             });
//                         else {
//                             var c = $(t).closest("#offer").hasClass("with-variants-upgrade");
//                             c &&
//                             $(bundles).length > 2 &&
//                             (0 == $(".qty", $(t)).text() && ($(".qty", $(t)).text("1"), (d = !0)),
//                                 $(bundles).each(function (e) {
//                                     0 != $(".qty", $(this)).text() && ($(this).addClass("selected"), (multi_bundleData[e].selected_bundle = !0));
//                                 }));
//                         }
//                     else multi_bundleData[r - 1].selected_bundle = !0;
//                     d ? (a($(t)), n(!0)) : mobileDevice && (a($(t)), n(!1)), gu_offer_events.updateTotalbarTotal();
//                 }
//                 function a(e) {
//                     if (allowMultipleBundles) {
//                         var t = $(".bundle-qty-selector", $(e));
//                         if (t.length) {
//                             var n = parseInt($(t).data("start-qty")),
//                                 i = parseInt($(".qty", $(t)).text());
//                             i <= n ? (e.removeClass(selectedClass), $(checkmark, $(e)).prop("checked", !1)) : (e.addClass(selectedClass), $(checkmark, $(e)).prop("checked", !0));
//                         }
//                     } else e.hasClass(selectedClass) || ($(bundleClass, $(".additional-offer-container")).removeClass(selectedClass), $(checkmark).prop("checked", !1), e.addClass(selectedClass), $(checkmark, $(e)).prop("checked", !0));
//                 }
//                 function o(e) {
//                     var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
//                         n = $(e).hasClass(bundleClass) ? e : $(e.currentTarget).closest(bundleClass),
//                         i = $(".bundle-qty-selector", $(n)),
//                         o = parseInt($(i).data("start-qty")),
//                         r = null != t ? t : $(e.currentTarget).data("quantify"),
//                         s = $(".qty", $(i)),
//                         l = Math.max(0 == o ? 0 : 1, parseInt($(s).text()) + parseInt(r));
//                     $(s).text(l).trigger("change"), 0 == o && (l > 0 ? $(".checkout.visually-hidden", $(n)).trigger("click") : (a($(n)), gu_vs.check() && allowMultipleBundles && gu_vs.update()));
//                 }
//                 function r() {
//                     !(function () {
//                         $(".hidden").hide(),
//                             $(bundles).each(function () {
//                                 if (this.classList.contains("selected")) {
//                                     var e = this.getAttribute("data-index");
//                                     console.log(multi_bundleData), (multi_bundleData[e - 1].selected_bundle = !0);
//                                 }
//                             });
//                     })(),
//                         $(window)
//                             .on("load", function () {
//                                 $("[data-translation-textsizer]").each(e);
//                             })
//                             .on("resize", function () {
//                                 clearTimeout(window.resizedFinished),
//                                     (window.resizedFinished = setTimeout(function () {
//                                         $("[data-translation-textsizer]").each(e);
//                                     }, 100));
//                             }),
//                         $(document)
//                             .on("click", ".cta.checkout.mobile, .cta.next.mobile", function (e) {
//                                 e.preventDefault();
//                                 var t = document.querySelector(".bundle.selected");
//                                 $(".cta-button", $(t)).click(), $(this).hide();
//                             })
//                             .on("click", bundles, function (e) {
//                                 e.preventDefault(), i(e);
//                             })
//                             .on("click", "[data-quantify]", function (e) {
//                                 o(e), allowMultipleBundles && i(e);
//                             });
//                 }
//                 var s = ($("#checkout"), $("#chat-widget-container"), $("#footer"), []);
//                 return (
//                     (function () {
//                         var e = $("#google-translate");
//                         e.length &&
//                         setTimeout(function () {
//                             $(".goog-logo-link", e).removeAttr("href");
//                         }, 1e3);
//                     })(),
//                         { init: r, getActiveBundle: t }
//                 );
//             })();
//             gu_additional_offers.init();
//         } else $("#offer").show();
//     }
// }
// var gu_checkout_validation = (function () {
//     function e() {
//         var e = $('input:not([type="checkbox"]):not([type="promo"]), select');
//         e.on("focus", function () {
//             $(this).parent().find("label.form-field-label").addClass("move").removeClass("success"), $(this).parent().removeClass("valid-field"), $(this).removeClass("error valid"), $(this).next("label.error").hide();
//         }),
//             e.on("blur", function (e) {
//                 var t = $(this).parent().find("label.form-field-label"),
//                     n = $(this).closest("form").validate();
//                 t.removeClass("move"), $(this).hasClass("valid") && (t.addClass("success"), $(this).parent().addClass("valid-field")), 0 !== $(this).val().length && n.element($(this));
//             });
//     }
//     function t() {
//         $("#form-field-billing_method_radio-1").on("click", function () {
//             (gu_checkout_validation.hasBillingAddress = !0), $(".billing-address").slideDown({ duration: 400 });
//         }),
//             $("#form-field-billing_method_radio-0").on("click", function () {
//                 (gu_checkout_validation.hasBillingAddress = !1), $(".billing-address").slideUp({ duration: 400 });
//             });
//     }
//     function n() {
//         $("#form-field-paypalShippingInfo-1").on("click", function () {
//             $(".alt-paypal-shipping-address").slideDown({ duration: 400 });
//             var e = $("#form-field-paypal_shipping_info_country").children("option").filter(":selected").val();
//             I(e, "paypal_shipping_info"), R();
//         }),
//             $("#form-field-paypalShippingInfo-0").on("click", function () {
//                 m(Z.country_code, $("#form-field-paypal_info_phone"), !1), $(".alt-paypal-shipping-address").slideUp({ duration: 400 });
//             });
//     }
//     function i(e) {
//         var t = void 0,
//             n = void 0,
//             i = void 0;
//         if ("paypal" === e) {
//             if (document.getElementById("form-field-paypalShippingInfo-1").checked === !0) {
//                 var a = document.getElementById("form-field-paypal_shipping_info_country"),
//                     o = document.getElementById("form-field-paypal_shipping_info_state").value.toLowerCase().trim(),
//                     r = a.options[a.selectedIndex];
//                 r.text;
//                 if (
//                     ((i = r.value),
//                         (t = {
//                             email: Z.email,
//                             first_name: document.getElementById("form-field-paypal_shipping_info_fname").value,
//                             last_name: document.getElementById("form-field-paypal_shipping_info_lname").value,
//                             address1: document.getElementById("form-field-paypal_shipping_info_address").value,
//                             address2: document.getElementById("form-field-paypal_shipping_info_address2").value || "",
//                             city: document.getElementById("form-field-paypal_shipping_info_city").value,
//                             province_code: te,
//                             province: ne,
//                             country_code: i.toUpperCase(),
//                             zip: document.getElementById("form-field-paypal_shipping_info_zip").value,
//                         }),
//                         (n = Q[i].provinces),
//                         Q[i].provinces.length)
//                 )
//                     for (var s in n)
//                         if (n.hasOwnProperty(s)) {
//                             var l = void 0,
//                                 d = void 0,
//                                 c = void 0;
//                             try {
//                                 (c = o
//                                     .normalize("NFD")
//                                     .replace(/[\u0300-\u036f]/g, "")
//                                     .toLowerCase()),
//                                     (l = n[s].name
//                                         .normalize("NFD")
//                                         .replace(/[\u0300-\u036f]/g, "")
//                                         .toLowerCase()),
//                                     (d = n[s].code
//                                         .normalize("NFD")
//                                         .replace(/[\u0300-\u036f]/g, "")
//                                         .toLowerCase());
//                             } catch (u) {
//                                 String.prototype.normalize || ((c = gu_common.removeDiacritics(o).toLowerCase()), (l = gu_common.removeDiacritics(n[s].name).toLowerCase()), (d = gu_common.removeDiacritics(n[s].code).toLowerCase()));
//                             }
//                             (l !== c && d !== c) || ((t.province_code = n[s].code), (t.province = n[s].name));
//                         }
//             } else t = Z;
//             t.email = Z.email;
//             var p = document.getElementById("form-field-paypal_info_phone").value;
//             return "" !== p && (t.phone = p), t;
//         }
//         var f = document.getElementById("form-field-shipping_info_country"),
//             g = document.getElementById("form-field-shipping_info_state").value.toLowerCase(),
//             _ = f.options[f.selectedIndex];
//         if (
//             ((i = _.value),
//                 (t = {
//                     email: document.getElementById("form-field-shipping_info_email").value,
//                     first_name: document.getElementById("form-field-shipping_info_fname").value,
//                     last_name: document.getElementById("form-field-shipping_info_lname").value,
//                     address1: document.getElementById("form-field-shipping_info_address").value,
//                     address2: document.getElementById("form-field-shipping_info_address2").value || "",
//                     city: document.getElementById("form-field-shipping_info_city").value,
//                     province_code: te,
//                     province: ne,
//                     country_code: i.toUpperCase(),
//                     zip: document.getElementById("form-field-shipping_info_zip").value,
//                 }),
//                 (n = Q[i].provinces),
//                 Q[i].provinces.length)
//         )
//             for (var h in n)
//                 if (n.hasOwnProperty(h)) {
//                     var v = void 0,
//                         m = void 0,
//                         y = void 0;
//                     try {
//                         (y = g
//                             .normalize("NFD")
//                             .replace(/[\u0300-\u036f]/g, "")
//                             .toLowerCase()),
//                             (v = n[h].name
//                                 .normalize("NFD")
//                                 .replace(/[\u0300-\u036f]/g, "")
//                                 .toLowerCase()),
//                             (m = n[h].code
//                                 .normalize("NFD")
//                                 .replace(/[\u0300-\u036f]/g, "")
//                                 .toLowerCase());
//                     } catch (u) {
//                         String.prototype.normalize || ((y = gu_common.removeDiacritics(g).toLowerCase()), (v = gu_common.removeDiacritics(n[h].name).toLowerCase()), (m = gu_common.removeDiacritics(n[h].code).toLowerCase()));
//                     }
//                     (v !== y && m !== y) || ((t.province_code = n[h].code), (t.province = n[h].name));
//                 }
//         var b = document.getElementById("form-field-shipping_info_phone").value;
//         return "" !== b && (t.phone = b), t;
//     }
//     function a() {
//         var e = document.getElementById("form-field-billing_info_country"),
//             t = document.getElementById("form-field-billing_info_state").value.toLowerCase(),
//             n = e.options[e.selectedIndex],
//             i = n.value,
//             a = void 0,
//             o = Q[i].provinces;
//         if (Y) a = _defineProperty({ email: Z.email, first_name: K.first_name, last_name: K.last_name, address1: K.address1, city: K.city, province_code: K.province_code, zip: K.zip, country_code: K.country_code }, "email", K.email);
//         else if (
//             ((a = {
//                 first_name: document.getElementById("form-field-billing_info_fname").value,
//                 last_name: document.getElementById("form-field-billing_info_lname").value,
//                 address1: document.getElementById("form-field-billing_info_address").value,
//                 address2: document.getElementById("form-field-billing_info_address2").value,
//                 city: document.getElementById("form-field-billing_info_city").value,
//                 country_code: i.toUpperCase(),
//                 zip: document.getElementById("form-field-billing_info_zip").value,
//             }),
//                 Q[i].provinces.length)
//         )
//             for (var r in o) o.hasOwnProperty(r) && ((o[r].code.toLowerCase() !== t && o[r].name.toLowerCase() !== t) || ((a.province_code = o[r].code), (a.province = o[r].name)));
//         return a;
//     }
//     function o() {
//         var e = document.getElementById("form-field-payment_info_exp").value,
//             t = $.payment.cardExpiryVal(e),
//             n = document.getElementById("form-field-payment_info_cc").value;
//         return {
//             first_name: document.getElementById("form-field-shipping_info_fname").value,
//             last_name: document.getElementById("form-field-shipping_info_lname").value,
//             number: n.replace(/\s/g, ""),
//             month: t.month.toString(),
//             year: t.year.toString(),
//             verification_value: document.getElementById("form-field-payment_info_cvc").value,
//         };
//     }
//     function r() {
//         var e = $("#form-field-payment_info_cc"),
//             t = $("#form-field-payment_info_exp"),
//             n = $("#form-field-payment_info_cvc"),
//             i = ["amex", "visa", "mastercard", "discover"];
//         e.payment("formatCardNumber"),
//             t.payment("formatCardExpiry"),
//             n.payment("formatCardCVC"),
//             e.on("keyup", function () {
//                 var t = $.payment.cardType(e.val());
//                 if (null !== t) {
//                     var n = $(".cc-" + t),
//                         a = i.filter(function (e) {
//                             return e !== t;
//                         });
//                     n.addClass("active").removeClass("inactive");
//                     var o = !0,
//                         r = !1,
//                         s = void 0;
//                     try {
//                         for (var l, d = a[Symbol.iterator](); !(o = (l = d.next()).done); o = !0) {
//                             var c = l.value;
//                             $(".cc-" + c)
//                                 .addClass("inactive")
//                                 .removeClass("active");
//                         }
//                     } catch (u) {
//                         (r = !0), (s = u);
//                     } finally {
//                         try {
//                             !o && d["return"] && d["return"]();
//                         } finally {
//                             if (r) throw s;
//                         }
//                     }
//                 }
//             });
//     }
//     function s() {
//         $("#form-field-payment_info_cc").on("blur", function (e) {
//             var t = $(this).parent();
//             $.payment.validateCardNumber(e.target.value)
//                 ? ($(this).removeClass("error").addClass("success"), $(t).addClass("valid-field"), $("label", $(t)).addClass("success"))
//                 : ($(this).removeClass("success").addClass("error"), $(t).removeClass("valid-field"), $("label", $(t)).removeClass("success"));
//         });
//     }
//     function l() {
//         if ("stripe" === gu_payments.paymentProcessorSetting) return gu_payments.stripeValidation ? $("#card-element").removeClass("error") : $("#card-element").addClass("error"), gu_payments.stripeValidation;
//         var e = document.getElementById("form-field-payment_info_cc").value,
//             t = document.getElementById("form-field-payment_info_exp").value,
//             n = document.getElementById("form-field-payment_info_cvc").value,
//             i = $.payment.cardType(e),
//             a = $.payment.cardExpiryVal(t);
//         return !!($.payment.validateCardNumber(e) && $.payment.validateCardExpiry(a.month.toString(), a.year.toString()) && $.payment.validateCardCVC(n, i));
//     }
//     function d(e) {
//         (V = i(e)), "credit" === e && gu_payments.createOrder(e, V), u();
//     }
//     function c() {
//         $("#checkout").on("click", 'input[name="shipping-method"]', function () {
//             gu_payments.selectShippingRate(this.dataset.handle);
//         });
//     }
//     function u() {
//         var e = $("#shipping_method");
//         e.empty();
//         var t =
//             '<div class="option" id="fetchingShipping"><input type="radio" style="display: none" /><label class="fetch-ship" for="fetchingShipping">' +
//             guSubstituteString("Fetching shipping options...") +
//             '</label><span class="loading-icon"><img alt="loading" width="20" src="' +
//             checkoutScript.theme_directory +
//             '/images/checkout-loading-compressed.gif"/></span></div>';
//         e.append(t), P("disable");
//     }
//     function p(e) {
//         $("#fetchingShipping").hide(), (ee = e);
//         var t = $("#shipping_method");
//         t.empty(),
//             e.forEach(function (e, n) {
//                 var i = "form-field-shipping_method_radio-" + n,
//                     a =
//                         '<div class="option"><input type="radio" name="shipping-method" id="' +
//                         i +
//                         '" data-handle="' +
//                         e.handle +
//                         '"/><label class="display-ship" for="' +
//                         i +
//                         '">' +
//                         e.title +
//                         '</label><span class="shipping-rate">' +
//                         gu_common.guDisplayCurrency(e.price) +
//                         "</span></div>";
//                 t.append(a);
//             }),
//             (document.getElementById("form-field-shipping_method_radio-0").checked = !0),
//             P("enable");
//     }
//     function f() {
//         var e = '<div id="refreshShipping">' + ae + '<a class="refresh-btn">' + oe + "</a></div>",
//             t = $("#shipping_method"),
//             n = $("#refreshShipping");
//         n.is(":visible") || (t.empty(), t.append(e), P("disable"), M());
//     }
//     function g(e) {
//         var t = document.getElementById("form-field-" + e + "_info_country"),
//             n = t.options[t.selectedIndex];
//         t.options.length > 1 && (t.removeChild(n), t.insertBefore(n, t.firstChild), $('<option disabled value="_________________">_________________</option>').insertAfter(n)), I(n.value, "shipping_info");
//     }
//     function _(e) {
//         var t = $("#form-field-billing_info_country");
//         e.forEach(function (e) {
//             var n = "<option value='" + e[0].toLowerCase() + "' " + (gu_country === e[0].toLowerCase() ? "selected" : "") + "> " + e[1] + "</option>";
//             G.append(n), W.append(n), t.append(n);
//         }),
//             g("shipping"),
//             g("billing"),
//             g("paypal_shipping");
//     }
//     function h(e) {
//         var t = "";
//         if (
//             ((t += void 0 !== e.address1 ? e.address1 : ""),
//                 (t += void 0 !== e.city ? ", " + e.city : ""),
//                 (t += void 0 !== e.province_code ? ", " + e.province_code : ""),
//                 (t += void 0 !== e.zip ? ", " + e.zip : ""),
//             void 0 !== e.country_code && "us" !== e.country_code.toLowerCase())
//         ) {
//             var n = gu_countries.getCountryByAbbreviation(),
//                 i = n[e.country_code.toLowerCase()];
//             t += void 0 !== i ? ", " + i : ", " + e.country_code;
//         }
//         $('label[for="form-field-paypalShippingInfo-0"]').text(t), m(e.country_code, $("#form-field-paypal_info_phone"));
//         var a = N().find(function (t, n) {
//             if (t[0].toLowerCase() === e.country_code.toLowerCase()) return !0;
//         });
//         void 0 === a ? (console.error("Paypal Shipping: country " + e.country_code + " is not allowed"), v(!0)) : v(!1), d("paypal");
//     }
//     function v(e) {
//         if (e) {
//             $("#form-field-paypalShippingInfo-1").trigger("click"), $("#form-field-paypalShippingInfo-0").addClass("silently-disabled"), $('label[for="form-field-paypalShippingInfo-0"]').addClass("invalid silently-disabled");
//             var t = guSubstituteString("Sorry, we don't ship to that country. Please provide a different shipping address");
//             $("#checkout-error.modal .message").html("<p>" + t + "</p>"), $("#checkout-error.modal").modal();
//         } else
//             $("#form-field-paypalShippingInfo-0").removeClass("silently-disabled"),
//                 $('label[for="form-field-paypalShippingInfo-0"]').removeClass("invalid silently-disabled"),
//             $("#alt-shipping_info").is(":visible") && $("#form-field-paypalShippingInfo-0").trigger("click");
//     }
//     function m(e, t) {
//         var n = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2];
//         if ("us" !== e.toLowerCase() || t.data("validate-required") === !0) {
//             if ((t.attr("placeholder", le), t.prev().text(guSubstituteString("Required")), t.next("label").show(), t.removeClass("valid"), n)) {
//                 var i = $("#shipping_info").validate();
//                 i.showErrors({ "form_fields[shipping_info_phone]": "Required" });
//             }
//         } else t.attr("placeholder", de), t.prev().text(de), t.next("label").hide(), t.removeClass("error");
//     }
//     function y() {
//         G.on("change", function () {
//             var e = $("#form-field-shipping_info_phone"),
//                 t = G.children("option").filter(":selected").val();
//             0 === Object.keys(Q).length && (Q = gu_countries.getCountries()), I(t, "shipping_info"), m(t, e), q(t);
//         });
//     }
//     function b() {
//         W.on("change", function () {
//             var e = $("#form-field-paypal_shipping_info_country").children("option").filter(":selected").val();
//             $("#form-field-paypal_info_phone");
//             I(e, "paypal_shipping_info");
//         });
//     }
//     function k() {
//         0 === Object.keys(Q).length && (Q = gu_countries.getCountries());
//         var e = G.val(),
//             t = $("#form-field-shipping_info_state").val().toLowerCase().trim(),
//             n = Q[e].provinces;
//         if (Q[e].provinces.length)
//             for (var i in n)
//                 if (n.hasOwnProperty(i)) {
//                     var a = void 0,
//                         o = void 0,
//                         r = void 0;
//                     try {
//                         (r = t
//                             .normalize("NFD")
//                             .replace(/[\u0300-\u036f]/g, "")
//                             .toLowerCase()),
//                             (a = n[i].name
//                                 .normalize("NFD")
//                                 .replace(/[\u0300-\u036f]/g, "")
//                                 .toLowerCase()),
//                             (o = n[i].code
//                                 .normalize("NFD")
//                                 .replace(/[\u0300-\u036f]/g, "")
//                                 .toLowerCase());
//                     } catch (s) {
//                         String.prototype.normalize || ((r = gu_common.removeDiacritics(t).toLowerCase()), (a = gu_common.removeDiacritics(n[i].name).toLowerCase()), (o = gu_common.removeDiacritics(n[i].code).toLowerCase()));
//                     }
//                     if (a === r || o === r) return (te = n[i].code), (ne = n[i].name), void $("#form-field-shipping_info_state").addClass("valid").removeClass("error");
//                     $("#form-field-shipping_info_state").addClass("error").removeClass("valid");
//                 }
//     }
//     function w() {
//         $("#form-field-shipping_info_state, #form-field-paypal_shipping_info_state, #form-field-shipping_info_country, #form-field-paypal_shipping_info_country").on("blur", function (e) {
//             return k();
//         });
//     }
//     function x() {
//         var e = $("#form-field-shipping_info_country"),
//             t = $("#form-field-shipping_info_zip"),
//             n = void 0;
//         $("#form-field-shipping_info_zip, #form-field-paypal_shipping_info_zip").on("blur", function () {
//             "ca" === e.val() &&
//             ((7 === t.val().length && " " === t.val()[3]) ||
//                 (7 === t.val().length && "-" === t.val()[3] ? ((n = t.val().replace("-", " ")), t.val(n)) : 6 === t.val().length && ((n = t.val().slice(0, 3) + " " + t.val().slice(3)), t.val(n))));
//         });
//     }
//     function C(e) {
//         (Y = !0), e && ((Z = e.shipping_address), (K = e.billing_address)), E(!1), h(Z);
//     }
//     function S(e) {
//         E(!0),
//         e &&
//         ($("#form-field-shipping_info_email").val(e.email).blur().blur(),
//             $("#form-field-shipping_info_fname").val(e.first_name).blur().blur(),
//             $("#form-field-shipping_info_lname").val(e.last_name).blur().blur(),
//             $("#form-field-shipping_info_phone").val(e.phone).blur().blur(),
//             $("#form-field-shipping_info_address").val(e.address1).blur().blur(),
//             $("#form-field-shipping_info_address2")
//                 .val(e.address2 || "")
//                 .blur()
//                 .blur(),
//             $("#form-field-shipping_info_city").val(e.city).blur().blur(),
//             $("#form-field-shipping_info_zip").val(e.zip).blur().blur(),
//             $("#form-field-shipping_info_country").val(e.country_code.toLowerCase()).blur().blur(),
//             $("#form-field-shipping_info_state").val(e.province_code).blur().blur()),
//             T();
//     }
//     function E(e) {
//         e = e || !1;
//         var t = $(".gu-checkout-form-reveal");
//         t.wrapAll("<div class='gu-checkout-form' style=\"width: 100%\" />"),
//             $("#shipInfoNext").hide(),
//             e
//                 ? ($(".payment-info, .payment-method, .billing-address-form, .billing-address-header").removeClass("gu-hidden"), gu_events.fireAndLogEvent(gu_events.eventList.shippingInfo))
//                 : ($(".shipping-info, .billing-address-header, .billing-address, .paypal-hide, .or-pay-with, .payment-info").addClass("gu-hidden"),
//                     $(".shipping-address-form, .paypal-shipping-address, .phone-number-header, .phone-number-field").removeClass("gu-hidden"),
//                     (document.getElementById("form-field-paypalShippingInfo-0").checked = !0),
//                     y()),
//             $(".complete-order, .shipping-method-form, .shipping-method-header").removeClass("gu-hidden"),
//             (document.getElementById("form-field-billing_method_radio-0").checked = !0),
//             $(".gu-checkout-form").slideDown({ duration: 400 }),
//             $("#form-field-shipping_info_country").blur();
//     }
//     function q(e) {
//         var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "shipping_info";
//         0 === Object.keys(Q).length && (Q = gu_countries.getCountries());
//         var n = $("#form-field-" + t + "_city"),
//             i = $("#form-field-" + t + "_state"),
//             a = $("#form-field-" + t + "_zip"),
//             o = guSubstituteString(Q[e].cityLabel),
//             r = guSubstituteString(Q[e].provinceLabel),
//             s = guSubstituteString(Q[e].postalLabel);
//         n.attr("placeholder", o).prev("label").text(o), i.attr("placeholder", r).prev("label").text(r), a.attr("placeholder", s).prev("label").text(s);
//     }
//     function I(e, t) {
//         var n = Q[e].formBuilder,
//             i = $("#" + t + " .wrapper")
//                 .parent()
//                 .filter(function () {
//                     return this.className.match(/\bcol/);
//                 });
//         if (
//             (i.each(function () {
//                 $(this).show();
//             }),
//                 !n)
//         ) {
//             n = X ? "e-100_f-50_l-50_a1-50_a2-50_ci-100_s-50_z-50_co-100_p-100" : "e-100_f-50_l-50_a1-50_a2-50_ci-100_co-33_s-33_z-33_p-100";
//             var a = void 0;
//             Q[e].postal.length > 0 && (a = !0);
//             var o = void 0;
//             Q[e].provinces.length > 0 && (o = !0),
//                 a && !o
//                     ? (console.log("has only zip"), (n = X ? "e-100_f-50_l-50_a1-50_a2-50_ci-50_s-0_z-50_co-100_p-100" : "e-100_f-50_l-50_a1-50_a2-50_ci-100_co-70_s-0_z-30_p-100"))
//                     : !a && o
//                     ? (console.log("has only prov"), (n = X ? "e-100_f-50_l-50_a1-50_a2-50_ci-50_s-50_z-0_co-100_p-100" : "e-100_f-50_l-50_a1-50_a2-50_ci-100_co-50_s-50_z-0_p-100"))
//                     : a || o || (console.log("has neither"), (n = X ? "e-100_f-50_l-50_a1-50_a2-50_ci-100_s-0_z-0_co-100_p-100" : "e-100_f-50_l-50_a1-50_a2-50_ci-100_co-100_s-0_z-0_p-100"));
//         }
//         for (var r = n.split("_"), s = [], l = [], d = 0; d < r.length; d++) s.push(r[d].split("-")[0]), l.push(r[d].split("-")[1]);
//         var c = void 0;
//         c = "paypal_shipping_info" === t ? $("#alt-shipping_info .row") : $("#" + t + " .row");
//         for (var u = 0, p = 0; p < s.length; p++) {
//             var f = "",
//                 g = void 0;
//             switch (s[p]) {
//                 case "e":
//                     (f = "email"),
//                         (g = $("#form-field-" + t + "_email")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "f":
//                     (f = "fname"),
//                         (g = $("#form-field-" + t + "_fname")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "l":
//                     (f = "lname"),
//                         (g = $("#form-field-" + t + "_lname")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "a1":
//                     (f = "address1"),
//                         (g = $("#form-field-" + t + "_address")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "a2":
//                     (f = "address2"),
//                         (g = $("#form-field-" + t + "_address2")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "ci":
//                     (f = "city"),
//                         (g = $("#form-field-" + t + "_city")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "co":
//                     (f = "country"),
//                         (g = $("#form-field-" + t + "_country")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "s":
//                     (f = "state"),
//                         (g = $("#form-field-" + t + "_state")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "z":
//                     (f = "zip"),
//                         (g = $("#form-field-" + t + "_zip")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 case "p":
//                     (f = "phone"),
//                         (g = $("#form-field-" + t + "_phone")
//                             .closest(".wrapper")
//                             .parent());
//                     break;
//                 default:
//                     console.log("Error: unrecognized field code");
//             }
//             var _ = l[p];
//             if ("0" === _) g.hide();
//             else {
//                 switch ((g.show(), _)) {
//                     case "100":
//                         (_ = "col-12 py-1 px-0"), (u += 12);
//                         break;
//                     case "70":
//                         (_ = "col-8 py-1 " + O(u, 8)), (u += 8);
//                         break;
//                     case "50":
//                         (_ = "col-6 py-1 " + O(u, 6)), (u += 6);
//                         break;
//                     case "33":
//                         (_ = "col-4 py-1 " + O(u, 4)), (u += 4);
//                         break;
//                     case "30":
//                         (_ = "col-4 py-1 " + O(u, 4)), (u += 4);
//                 }
//                 u >= 12 && (u = 0), g.removeClass(), g.addClass(_);
//             }
//             c.append(g);
//         }
//         "paypal_shipping_info" === t ? m(e, $("#form-field-paypal_info_phone"), !1) : m(e, $("#form-field-" + t + "_phone"), !1);
//     }
//     function O(e, t) {
//         var n = "";
//         return 0 === e ? (n += "pl-0") : e > 0 && (n += "pl-1"), (n += e + t < 12 ? " pr-1" : " pr-0");
//     }
//     function D() {
//         $("body").on("click", "#completeOrder", function (e) {
//             e.preventDefault();
//             var t = $("#payment_info"),
//                 n = $("#shipping_address"),
//                 r = $("#billing_info"),
//                 s = document.querySelector('input[name="shipping-method"]:checked').dataset.handle,
//                 d = document.getElementById("form-field-shipping_info_phone"),
//                 c = { shipping_method: s, shipping_address: Y ? i("paypal") : i(), payment_info: Y ? "PayPal" : o(), billing_address: a() };
//             return (
//                 !!n.valid() &&
//                 !!r.valid() &&
//                 !!t.valid() &&
//                 ($("#form-field-shipping_info_phone").valid() || "us" === G.val() ? void (l() ? ((H = o()), gu_payments.completeOrder(c)) : Y && gu_payments.completeOrder(c)) : (d.scrollIntoView(), !1))
//             );
//         });
//     }
//     function P(e) {
//         "disable" === e ? $("#completeOrder").css({ opacity: ".5", pointerEvents: "none" }) : "enable" === e && $("#completeOrder").css({ opacity: "1", pointerEvents: "all" });
//     }
//     function F() {
//         var e = '<a class="phone-tip" data-title=""><img src="' + checkoutScript.theme_directory + '/images/checkout-question.svg" alt="?"></a>',
//             t = '<a class="cvc-tip" data-title=""><img src="' + checkoutScript.theme_directory + '/images/checkout-question.svg" alt="?"></a>',
//             n = $("#form-field-shipping_info_phone"),
//             i = $("#form-field-paypal_info_phone"),
//             a = $("#form-field-payment_info_cvc");
//         n.after(e), i.after(e), a.after(t);
//         var o = $(".phone-tip"),
//             r = $(".cvc-tip");
//         o.attr("data-title", re),
//             r.attr("data-title", se),
//             o.on("click", function () {
//                 o.hasClass("active") ? o.removeClass("active") : o.addClass("active");
//             }),
//             r.on("click", function () {
//                 r.hasClass("active") ? r.removeClass("active") : r.addClass("active");
//             }),
//             $(document).on("mouseup touchstart", function (e) {
//                 !o.is(e.target) && 0 === o.has(e.target).length && o.hasClass("active") && o.removeClass("active"), !r.is(e.target) && 0 === r.has(e.target).length && r.hasClass("active") && r.removeClass("active");
//             });
//     }
//     function L() {
//         $("#shipInfoNext").on("click", function (e) {
//             e.preventDefault();
//             var t = $(".shipping-method-header"),
//                 n = $("#shipping_info"),
//                 i = $(".paypal-shipping-address");
//             if (n.is(":visible")) {
//                 if (!n.valid()) return (t = $(".shipping-info")), !1;
//                 E(!0);
//             } else if (i.is(":visible")) {
//                 if (!$("#shipping_address").valid()) return (t = $("#shipping_address")), !1;
//                 E();
//             }
//             d("credit"),
//                 r(),
//                 R(),
//                 setTimeout(function () {
//                     var e = t.height();
//                     $("html, body").animate({ scrollTop: t.offset().top - e }, 1e3);
//                 }, 150);
//         });
//     }
//     function T() {
//         var e = i(Y ? "paypal" : site_vars.cc_processor),
//             t = a();
//         u(), ie ? gu_payments.refreshShipping(e, t) : gu_payments.refreshShipping(e);
//     }
//     function M() {
//         $(document).on("click", ".refresh-btn", function (e) {
//             return e.preventDefault(), e.stopImmediatePropagation(), !!$("#shipping_info").valid() && void T();
//         });
//     }
//     function R() {
//         var e = $(".paypal-shipping-address");
//         $("#shipping_info").valid() &&
//         !e.is(":visible") &&
//         $("#form-field-shipping_info_city, #form-field-shipping_info_country, #form-field-shipping_info_state, #form-field-shipping_info_zip").on("change", function () {
//             f();
//         }),
//         e.is(":visible") &&
//         $("#form-field-paypal_shipping_info_city, #form-field-paypal_shipping_info_country, #form-field-paypal_shipping_info_state, #form-field-paypal_shipping_info_zip").on("change", function () {
//             f();
//         });
//     }
//     function A(e) {
//         var t = $("#paypal-button-container");
//         "show" === e ? t.parent().css({ opacity: "1", pointerEvents: "all" }) : t.parent().css({ opacity: ".5", pointerEvents: "none" });
//     }
//     function B() {
//         var e = '<div class="payment-error-container"></div>',
//             t = "Weâ€™re sorry but your credit card was declined. Please recheck all information or use an alternative credit card and try submitting again.";
//         t = guSubstituteString(t);
//         var n = $(".payment-info.payment-info-header");
//         0 === $(".payment-error-container").length && (n.after(e), $(".payment-error-container").text(t).slideDown()), $("html, body").animate({ scrollTop: $("#checkout .payment-info-header").offset().top }, 500);
//     }
//     function z(e, t) {
//         var n = $("#shipping_info"),
//             i = $("#shipping_address"),
//             a = $("#billing_info"),
//             o = !1,
//             r = !1,
//             s = "shipping_info_",
//             l = void 0,
//             d = "Zip code does not match state";
//         n.valid() &&
//         ($("#form-field-billing_method_radio-1").is(":checked")
//             ? ((l = a.validate()), (o = !0), (s = "billing_info_"))
//             : $("#form-field-paypalShippingInfo-1").is(":checked")
//                 ? ((l = i.validate()), (r = !0), (s = "paypal_shipping_info_"))
//                 : (l = n.validate()));
//         var c = $("#form-field-" + s + e);
//         c.parent(".wrapper").removeClass("valid-field"), c.prev("label").removeClass("success");
//         var u = $("#form-field-" + s + "country")
//                 .children("option")
//                 .filter(":selected")
//                 .val(),
//             p = void 0;
//         "email" === e
//             ? o
//             ? l.showErrors({ "form_fields[billing_info_email]": "Incorrect email" })
//             : l.showErrors({ "form_fields[shipping_info_email]": "Incorrect email" })
//             : "zip" === e &&
//             ((p = "us" === u ? guSubstituteString("Incorrect Zip code") : guSubstituteString("Incorrect Postal code")),
//                 (d = "us" !== u ? "Postal code does not match the other parts of your address" : "Zip code does not match State"),
//                 o ? l.showErrors({ "form_fields[billing_info_zip]": p }) : r ? l.showErrors({ "form_fields[paypal_shipping_info_zip]": p }) : l.showErrors({ "form_fields[shipping_info_zip]": p }),
//                 gu_checkout.alert("confirm", guSubstituteString(d))),
//         "billing" !== t && i.validate();
//     }
//     function N() {
//         var e = !(arguments.length > 0 && void 0 !== arguments[0]) || arguments[0],
//             t = gu_countries.getCountryByAbbreviation(),
//             n = gu_shippingZones.getZones(),
//             i = window.site_vars.excluded_countries.toLowerCase().split(",");
//         i = i.map(function (e) {
//             return e.trim();
//         });
//         var a = void 0;
//         e
//             ? (a = gu_remote_data.shippingCountries)
//             : ((a = window.site_vars.included_countries.toLowerCase().split(",")),
//                 (a = a.map(function (e) {
//                     return e.trim();
//                 })));
//         for (var o in n)
//             if (n.hasOwnProperty(o)) {
//                 if (~i.indexOf(o)) {
//                     i.splice(i.indexOf(o), 1);
//                     for (var r in n[o]) n[o].hasOwnProperty(r) && ((r = r.toLowerCase()), ~i.indexOf(r) || i.push(r));
//                 }
//                 if (~a.indexOf(o) && !e) {
//                     a.splice(a.indexOf(o), 1);
//                     for (var s in n[o]) n[o].hasOwnProperty(s) && ((s = s.toLowerCase()), ~a.indexOf(s) || a.push(s));
//                 }
//             }
//         ~a.indexOf("us") || e || a.push("us");
//         var l = [];
//         return (
//             e
//                 ? a.forEach(function (e, t) {
//                     ~i.indexOf(e[0].toLowerCase()) || l.push(e);
//                 })
//                 : (a.forEach(function (e, n) {
//                     ~i.indexOf(e.toLowerCase()) ? a.splice(n, 1) : l.push([e.toUpperCase(), t[e]]);
//                 }),
//                     l.sort(function (e, t) {
//                         return e[0] > t[0] ? 1 : -1;
//                     })),
//                 l
//         );
//     }
//     function j() {
//         (Q = gu_countries.getCountries()), (J = N()), q(gu_country), _(J);
//     }
//     function U() {
//         e(), L(), c(), t(), n(), D(), w(), y(), b(), A("hide"), F(), x(), s();
//         var i = window.innerWidth > 0 ? window.innerWidth : screen.width;
//         i <= 480 && (X = !0), guRemoteDataRegisterCallback(j, !0);
//     }
//     var V = {},
//         H = {},
//         G = $("#form-field-shipping_info_country"),
//         W = $("#form-field-paypal_shipping_info_country"),
//         J = void 0,
//         Q = {},
//         Y = !1,
//         X = !1,
//         Z = {},
//         K = {},
//         ee = void 0,
//         te = void 0,
//         ne = void 0,
//         ie = !1,
//         ae = guSubstituteString("Refresh shipping"),
//         oe = guSubstituteString("Refresh"),
//         re = guSubstituteString("In case we need to contact you about your order"),
//         se = guSubstituteString("3-digit security code usually found on the back of your card. American Express cards have a 4-digit code located on the front."),
//         le = guSubstituteString("Phone"),
//         de = guSubstituteString("Phone (optional)");
//     return (
//         $("#promo_wrap button").on("click", function () {
//             gu_payments.submitPromoCode($("#form-field-promo").val());
//         }),
//             {
//                 init: U,
//                 displayShippingOptions: p,
//                 updatePayPalShippingInfo: C,
//                 togglePayPalButton: A,
//                 handlePaymentError: B,
//                 refreshShippingOptions: f,
//                 prepareForShippingRates: u,
//                 handleReturnCartOrder: S,
//                 fieldMismatch: z,
//                 validatePaymentDetails: l,
//                 getShippingCountries: N,
//                 hasBillingAddress: ie,
//             }
//     );
// })();
// document.addEventListener("DOMContentLoaded", function () {
//     gu_checkout_validation.init(),
//         $(window).keydown(function (e) {
//             if (13 === e.keyCode) return e.preventDefault(), !1;
//         });
//     var e = (guSubstituteString("Please specify a valid phone number"), guSubstituteString("Please specify a valid credit card")),
//         t = guSubstituteString("Email address must have an @"),
//         n = guSubstituteString("Incorrect email address"),
//         i = guSubstituteString("Required");
//     jQuery.validator.addMethod(
//         "validCard",
//         function (e) {
//             return $.payment.validateCardNumber(e.value);
//         },
//         e
//     ),
//         jQuery.validator.addMethod(
//             "emailHasSpecialCharacter",
//             function (e) {
//                 return e.indexOf("@") !== -1;
//             },
//             t
//         ),
//         jQuery.validator.addMethod(
//             "notEmpty",
//             function (e) {
//                 return "" !== e.value;
//             },
//             ""
//         ),
//         jQuery.validator.addMethod(
//             "isValidEmailAddress",
//             function (e) {
//                 var t = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
//                 return t.test(e);
//             },
//             n
//         ),
//         jQuery.validator.addMethod(
//             "requiredNotBlank",
//             function (e, t) {
//                 return $.validator.methods.required.call(this, $.trim(e), t);
//             },
//             ""
//         ),
//         $("#shipping_info").validate({
//             focusCleanup: !0,
//             rules: {
//                 "form_fields[shipping_info_fname]": { required: !1 },
//                 "form_fields[shipping_info_lname]": { requiredNotBlank: !0 },
//                 "form_fields[shipping_info_email]": { requiredNotBlank: !0, emailHasSpecialCharacter: !0, isValidEmailAddress: !0, email: !1 },
//                 "form_fields[shipping_info_address]": { requiredNotBlank: !0 },
//                 "form_fields[shipping_info_address2]": { requiredNotBlank: !1 },
//                 "form_fields[shipping_info_city]": { requiredNotBlank: !0 },
//                 "form_fields[shipping_info_state]": { requiredNotBlank: !0 },
//                 "form_fields[shipping_info_zip]": { requiredNotBlank: !0 },
//                 "form_fields[shipping_info_phone]": {
//                     requiredNotBlank: {
//                         depends: function () {
//                             return !!$(this).data("validate-required") || "us" !== $("#form-field-shipping_info_country").children("option").filter(":selected").val();
//                         },
//                     },
//                 },
//             },
//             messages: {
//                 "form_fields[shipping_info_fname]": "",
//                 "form_fields[shipping_info_lname]": { requiredNotBlank: "" },
//                 "form_fields[shipping_info_email]": { required: "" },
//                 "form_fields[shipping_info_address]": { requiredNotBlank: "" },
//                 "form_fields[shipping_info_address2]": { requiredNotBlank: "" },
//                 "form_fields[shipping_info_city]": { requiredNotBlank: "" },
//                 "form_fields[shipping_info_state]": { requiredNotBlank: "" },
//                 "form_fields[shipping_info_zip]": { requiredNotBlank: "" },
//                 "form_fields[shipping_info_phone]": { required: i, requiredNotBlank: i },
//             },
//             onkeyup: !1,
//         }),
//         $("#shipping_address").validate({
//             focusCleanup: !0,
//             rules: {
//                 "form_fields[paypal_shipping_info_lname]": { requiredNotBlank: !0 },
//                 "form_fields[paypal_shipping_info_address]": { requiredNotBlank: !0 },
//                 "form_fields[paypal_shipping_info_city]": { requiredNotBlank: !0 },
//                 "form_fields[paypal_shipping_info_state]": { requiredNotBlank: !0 },
//                 "form_fields[paypal_shipping_info_zip]": { requiredNotBlank: !0 },
//                 "form_fields[shipping_info_phone]": {
//                     requiredNotBlank: {
//                         depends: function () {
//                             return !!$(this).data("validate-required") || "us" !== $("#form-field-paypal_shipping_info_country").children("option").filter(":selected").val();
//                         },
//                     },
//                 },
//             },
//             messages: {
//                 "form_fields[paypal_shipping_info_lname]": "",
//                 "form_fields[paypal_shipping_info_address]": "",
//                 "form_fields[paypal_shipping_info_city]": "",
//                 "form_fields[paypal_shipping_info_state]": "",
//                 "form_fields[paypal_shipping_info_zip]": "",
//                 "form_fields[shipping_info_phone]": { required: i, notEmpty: i },
//             },
//             onkeyup: !1,
//         }),
//         $("#billing_info").validate({
//             rules: {
//                 "form_fields[billing_info_fname]": { required: !1 },
//                 "form_fields[billing_info_lname]": { requiredNotBlank: !0 },
//                 "form_fields[billing_info_email]": { requiredNotBlank: !0, email: !0 },
//                 "form_fields[billing_info_address]": { requiredNotBlank: !0 },
//                 "form_fields[billing_info_city]": { requiredNotBlank: !0 },
//                 "form_fields[billing_info_zip]": { requiredNotBlank: !0 },
//             },
//             messages: { "form_fields[billing_info_fname]": "", "form_fields[billing_info_lname]": "", "form_fields[billing_info_email]": "", "form_fields[billing_info_address]": "", "form_fields[billing_info_city]": "" },
//         }),
//         $("#payment_info").validate({
//             rules: { "form_fields[payment_info_cc]": { requiredNotBlank: !0 }, "form_fields[payment_info_exp]": { requiredNotBlank: !0 }, "form_fields[payment_info_cvc]": { requiredNotBlank: !0 } },
//             messages: { "form_fields[payment_info_cc]": i, "form_fields[payment_info_exp]": i, "form_fields[payment_info_cvc]": i },
//         });
// });
// var gu_order_summary = (function () {
//     function e() {
//         var e = document.querySelector(".cart-trigger"),
//             t = document.getElementById("mobile-order-summary");
//         e &&
//         e.addEventListener("click", function (n) {
//             n.preventDefault();
//             var i = document.querySelector(".hide-reveal-mobile"),
//                 a = $(".product-wrapper img");
//             i.classList.contains("closed")
//                 ? (i.classList.remove("closed"), e.classList.remove("closed"), t.classList.add("open"), a.css({ visibility: "visible", display: "block" }))
//                 : (i.classList.add("closed"), e.classList.add("closed"), t.classList.remove("open"));
//         });
//     }
//     return { toggleMobileDetails: e };
// })();
// gu_order_summary.toggleMobileDetails();
// var _typeof =
//         "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
//             ? function (e) {
//                 return typeof e;
//             }
//             : function (e) {
//                 return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e;
//             },
//     errorRed = "#a62727",
//     warningYellow = "#e2da50",
//     successGreen = "#528045",
//     note_attributes = {
//         offer: gu_offer,
//         landing_site: document.location.href,
//         referring_site: document.referrer,
//         gu_language: gu_language,
//         gu_country: gu_country,
//         gu_currency: gu_currency,
//         gu_checkout_ver: gu_checkout_ver,
//         gu_qs: gu_qs_to_str(gu_qs),
//     },
//     gu_payments = (function () {
//         function e(e) {
//             e.length > 0 && (B.gu_transaction_id ? d(e) : l(e));
//         }
//         function t(e, t) {
//             if ("undefined" == typeof B || "undefined" == typeof B.checkout)
//                 return void console.log(
//                     "%c Can't create order because a cart hasn't been created yet. Please create a cart before trying to create an order with one.",
//                     'background: " + errorRed + "; color: white; display: block; padding: 5px;'
//                 );
//             if ((y(t), (e = "credit" === e && G === !0 ? "stripe" : "shopify"), g(e), "stripe" === V)) {
//                 var n = new XMLHttpRequest();
//                 n.open("POST", serverURL + "/v2/payments/" + gu_shopify_domain + "/transactions/create"),
//                     n.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"),
//                     (n.responseType = "json"),
//                     (n.onreadystatechange = function () {
//                         if (4 == n.readyState)
//                             if (n.status < 300 && n.status >= 200) {
//                                 if (n.response) {
//                                     var e = F(n.response);
//                                     e.errors
//                                         ? (console.log("%c Order creation failed! Errors: " + e.message, "background:  " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                             gu_events.error("Failure in creating order. Status: " + e.message),
//                                             M(!0))
//                                         : (console.log("%c Order created!", "background: " + successGreen + "; color: white; display: block; padding: 5px;"),
//                                             x(e),
//                                             f(function () {
//                                                 gu_payments.getShippingRates();
//                                             }));
//                                 }
//                             } else
//                                 console.log("%c Failure in creating order :( Status: " + n.response, "background:  " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                     gu_events.error("Failure in creating order. Status: " + n.response),
//                                     n.response.error.shipping_address ? M(!0) : n.response.error.email && M(!1);
//                     }),
//                     n.send(JSON.stringify(B));
//             } else
//                 f(function () {
//                     gu_payments.getShippingRates();
//                 });
//         }
//         function n(e) {
//             var t = new XMLHttpRequest();
//             t.open("GET", serverURL + "/v2/shopify/" + gu_shopify_domain + "/checkouts/" + B.checkout.token + "/shipping_rates?_=" + new Date().getTime(), !0),
//                 (t.responseType = "json"),
//                 (t.onreadystatechange = function () {
//                     if (4 == t.readyState)
//                         if (t.status < 300 && t.status >= 200) {
//                             if (t.response) {
//                                 var a = void 0;
//                                 if (
//                                     ((a = "object" == _typeof(t.response) ? JSON.parse(JSON.stringify(t.response)) : JSON.parse(t.response)),
//                                     "undefined" != typeof a.error &&
//                                     (console.log("%c Failure in getting rates :( Status: " + a.errors, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                         gu_checkout_validation.refreshShippingOptions(),
//                                         M(Object.keys(a.error))),
//                                     0 == a.shipping_rates.length)
//                                 )
//                                     if ((console.log("%c Shipping rates came back empty  :( Trying again.", "background: " + warningYellow + "; color: black; display: block; padding: 5px;"), W > 5)) {
//                                         (W = 0),
//                                             console.log("%c Failure in getting rates :( Status: " + a, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                             gu_events.error("Shipping rates came back empty 5 times.");
//                                         var o = $(selectedBundle).attr("id");
//                                         window._guLogger.error("CODE RED: Failed to load shipping rates after 5 attempts.", null, { selectedBundle: o, shopifyDomain: gu_shopify_domain, severity: "critical" }), M(!0);
//                                     } else
//                                         W++,
//                                             gu_events.debug("Shipping rates came back empty. Trying again."),
//                                             setTimeout(function () {
//                                                 n();
//                                             }, 1e3);
//                                 else
//                                     (J = a.shipping_rates),
//                                         console.log("%c Successfully got shipping rates!", "background: " + successGreen + "; color: white; display: block; padding: 5px;"),
//                                         (W = 0),
//                                         (J = $.grep(J, function (e) {
//                                             return e.id.includes("Giddyup Rate Provider");
//                                         })),
//                                         $.each(J, function () {
//                                             (this.title = this.title.substring(1)), (this.title = guSubstituteString(this.title));
//                                         }),
//                                         e
//                                             ? i(J[0].handle, function () {
//                                                 s();
//                                             })
//                                             : i(J[0].handle),
//                                         gu_checkout_validation.displayShippingOptions(J),
//                                         gu_checkout_validation.togglePayPalButton("show");
//                             }
//                         } else
//                             "paypal" === B.paymentMethod && void 0 === B.checkout.shipping_address
//                                 ? console.error("Can't get shipping rates. Paypal order started but address not set")
//                                 : (console.log("%c Failure in getting rates :( Status: " + t.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                     gu_events.error("Fetching shipping rates has failed"),
//                                     M(!0));
//                 }),
//                 t.send(JSON.stringify({}));
//         }
//         function i(e, t) {
//             (Q = $.grep(J, function (t) {
//                 return t.id === e;
//             })[0]),
//                 delete B.checkout.billing_address.company,
//                 delete B.checkout.shipping_address.company,
//                 (B.checkout.shipping_line = { handle: e, price: Q.price, title: Q.title }),
//                 delete Q.displayTitle,
//                 (B.checkout.shipping_rate = Q),
//                 (B.checkout.total_price = B.checkout.shipping_rate.checkout.total_price),
//                 (B.checkout.payment_due = B.checkout.shipping_rate.checkout.total_price),
//                 delete B.checkout.billing_address.company,
//                 t ? f(t) : f();
//         }
//         function a(e, t) {
//             (B.checkout.shipping_rate = null),
//                 (B.checkout.shipping_line = null),
//                 y(e),
//                 b(t ? t : e),
//                 f(function () {
//                     gu_payments.getShippingRates();
//                 });
//         }
//         function o() {
//             var e = {};
//             return (
//                 B.checkout.shipping_rate
//                     ? ((e.subtotal = Q.checkout.subtotal_price),
//                         (e.total = Q.checkout.total_price),
//                         (e.tax = Q.checkout.total_tax),
//                         (e.shipping = Q.price),
//                         (e.promo = B.checkout.applied_discount ? B.checkout.applied_discount.amount : null))
//                     : ((e.subtotal = B.checkout.total_line_items_price),
//                         (e.total = B.checkout.total_price),
//                         (e.tax = B.checkout.total_tax),
//                         (e.shipping = null),
//                         (e.promo = B.checkout.applied_discount ? B.checkout.applied_discount.amount : null)),
//                     e
//             );
//         }
//         function r(e) {
//             gu_checkout.alert("show"), console.log("did this run");
//             var t = new XMLHttpRequest(),
//                 n = { gu_transaction_id: e };
//             t.open("POST", serverURL + "/v2/payments/" + gu_shopify_domain + "/transactions/" + e, !0),
//                 (t.responseType = "json"),
//                 (t.onreadystatechange = function () {
//                     if (4 == t.readyState)
//                         if (t.status < 300 && t.status >= 200) {
//                             if (t.response) {
//                                 gu_checkout.alert("hide"), gu_checkout_validation.togglePayPalButton("show");
//                                 var e = t.response;
//                                 if ((e.checkout.checkout.shipping_rate && (e.checkout.checkout.shipping_rate = null), g(e.paymentMethod), x(e), "created" !== t.response.transaction_status && "updated" !== t.response.transaction_status))
//                                     (R = B.order.order_status_url), C(R);
//                                 else {
//                                     var n = [];
//                                     n = B.checkout.line_items && B.checkout.line_items.length > 0 ? B.checkout.line_items : B.order.line_items;
//                                     for (var i = 0; i < n.length; i++) {
//                                         var a = { product_id: n[i].product_id, variant_id: n[i].id, name: n[i].title, price: n[i].price, qty: n[i].quantity, img: n[i].image_url, sku: n[i].sku };
//                                         gu_checkout.addProduct(a);
//                                     }
//                                     var o = B.checkout.shipping_address;
//                                     (o.email = B.checkout.email), ("credit" !== B.paymentMethod && "shopify" !== B.paymentMethod) || gu_checkout_validation.handleReturnCartOrder(o);
//                                 }
//                             }
//                         } else gu_checkout.alert("hide");
//                 }),
//                 t.send(JSON.stringify(n));
//         }
//         function s(e) {
//             gu_checkout.alert("show", guSubstituteString("Processing"));
//             var t = null,
//                 n = null,
//                 i = !1;
//             e && ((t = e.shipping_address), (n = e.billing_address), (z = e.payment_info)),
//             n && gu_checkout_validation.hasBillingAddress && (b(n), (i = !0)),
//             t && !w(t, B.checkout.shipping_address) && (y(t), (i = !0)),
//                 i
//                     ? f(function () {
//                         gu_payments.getShippingRates(!0);
//                     })
//                     : "paypal" === B.paymentMethod || "adyen" === B.paymentMethod
//                     ? v()
//                     : "shopify" === B.paymentMethod
//                         ? _(z)
//                         : "stripe" === B.paymentMethod
//                             ? h()
//                             : m();
//         }
//         function l(e) {
//             var t = createReport();
//             (t && t.selectedUnits && t.gu_bundles) || (gu_events.error("CODE RED: Failure creating report."), (t = {}), (t.selectedUnits = "ReportFailure"), (t.gu_bundles = "ReportFailure")),
//                 (note_attributes.selectedUnits = t.selectedUnits),
//                 (note_attributes.gu_bundles = t.gu_bundles),
//                 (note_attributes.selected_user_bundle = finduserselected);
//             var n = new XMLHttpRequest(),
//                 a = { checkout: { landing_site_ref: document.location.href, line_items: e, note_attributes: note_attributes } };
//             n.open("POST", serverURL + "/v2/shopify/" + gu_shopify_domain + "/checkouts", !0),
//                 (n.responseType = "json"),
//                 (n.onreadystatechange = function () {
//                     if (4 == n.readyState)
//                         if (n.status < 300 && n.status >= 200) {
//                             if (n.response) {
//                                 gu_checkout.alert("hide"),
//                                     console.log("%c Cart created! ", "background: " + successGreen + "; color: white; display: block; padding:5px;"),
//                                     (Y = 0),
//                                     gu_checkout_validation.togglePayPalButton("show"),
//                                     x(n.response);
//                                 var t = ("" !== location.search ? location.search + "&" : "?") + "gucheckouttoken=" + B.gu_transaction_id;
//                                 if (
//                                     ((note_attributes.checkout_url = "" + location.origin + location.pathname + t),
//                                     "1" === gu_checkout_paypal_pay &&
//                                     "1" != gu_checkout_native_paypal &&
//                                     $("#paypal-button")
//                                         .attr("onclick", "gu_payments.paypalRedirect(this.id);")
//                                         .data("page", B.checkout.web_url + "/express/redirect?"),
//                                     "stripe" === V || "stripealt" === V || (isMobile.any && "stripemobile" === V) || (!isMobile.any && "stripedesktop" === V))
//                                 ) {
//                                     var a = [];
//                                     console.log(" ");
//                                     for (var r = 0; r < B.checkout.line_items.length; r++) {
//                                         var s = {
//                                             amount: parseInt(B.checkout.line_items[r].line_price.replace(".", "")),
//                                             label:
//                                             B.checkout.line_items[r].title +
//                                             (B.checkout.line_items[r].variant_title ? " - " + B.checkout.line_items[r].variant_title : "") +
//                                             (B.checkout.line_items[r].quantity > 1 ? " x" + B.checkout.line_items[r].quantity : ""),
//                                         };
//                                         a.push(s);
//                                     }
//                                     a.push({ amount: parseInt(B.checkout.subtotal_price.replace(".", "")), label: "Subtotal" }),
//                                         ae.update({
//                                             total: { label: "Total", amount: parseInt(B.checkout.payment_due.replace(".", "")), pending: !0 },
//                                             displayItems: [
//                                                 { amount: parseInt(B.checkout.subtotal_price.replace(".", "")), label: "Subtotal" },
//                                                 { amount: 0, label: "Shipping", pending: !0 },
//                                                 { amount: 0, label: "Estimated Tax", pending: !0 },
//                                             ],
//                                         }),
//                                         ae.on("shippingoptionchange", function (e) {
//                                             var t = [];
//                                             "googlepay" === oe &&
//                                             (t = N.reduce(function (t, n) {
//                                                 return n.id === e.shippingOption.id ? [n].concat(_toConsumableArray(t)) : [].concat(_toConsumableArray(t), [n]);
//                                             }, [])),
//                                                 i(e.shippingOption.id, function () {
//                                                     var n = {
//                                                         status: "success",
//                                                         total: { amount: B.payment.amount, label: "Total", pending: !1 },
//                                                         displayItems: [
//                                                             { amount: parseInt(B.checkout.subtotal_price.replace(".", "")), label: "Subtotal" },
//                                                             { amount: parseInt(B.checkout.shipping_rate.price.replace(".", "")), label: "Shipping" },
//                                                             { amount: parseInt(B.checkout.total_tax.replace(".", "")), label: "Estimated Tax" },
//                                                         ],
//                                                     };
//                                                     0 !== t.length && (n.shippingOptions = t), e.updateWith(n);
//                                                 });
//                                         }),
//                                         ae.on("shippingaddresschange", function (e) {
//                                             gu_events.fireAndLogEvent(gu_events.eventList.shippingInfo);
//                                             var t = gu_checkout_validation.getShippingCountries().find(function (t, n) {
//                                                 if (t[0].toLowerCase() === e.shippingAddress.country.toLowerCase()) return !0;
//                                             });
//                                             if (t) {
//                                                 console.log("update order and fetch rates now");
//                                                 var n = {
//                                                     address1: "123 Main St",
//                                                     last_name: "Lastname",
//                                                     city: e.shippingAddress.city,
//                                                     country_code: e.shippingAddress.country,
//                                                     phone: e.shippingAddress.phone,
//                                                     province_code: e.shippingAddress.region,
//                                                     zip: e.shippingAddress.postalCode,
//                                                 };
//                                                 y(n),
//                                                     g("stripe"),
//                                                     fetch(serverURL + "/v2/payments/" + gu_shopify_domain + "/transactions/create", {
//                                                         headers: { "Content-Type": "application/x-www-form-urlencoded" },
//                                                         method: "post",
//                                                         body: JSON.stringify(B),
//                                                     })
//                                                         .then(function (e) {
//                                                             return e.json();
//                                                         })
//                                                         .then(function (t) {
//                                                             gu_payments.syncOrder(t),
//                                                                 f(function () {
//                                                                     O(e);
//                                                                 });
//                                                         });
//                                             } else e.updateWith({ status: "invalid_shipping_address" });
//                                         }),
//                                         ae.on("paymentmethod", function (e) {
//                                             (B.payment.paymentSubMethod = oe),
//                                                 gu_checkout.alert("show", guSubstituteString("Processing")),
//                                                 (Q = $.grep(J, function (t) {
//                                                     return t.id === e.shippingOption.id;
//                                                 })[0]),
//                                                 delete B.checkout.billing_address.company,
//                                                 delete B.checkout.shipping_address.company,
//                                                 (B.checkout.shipping_line = { handle: e.shippingOption.id, price: Q.price, title: Q.title }),
//                                                 (B.checkout.email = e.payerEmail),
//                                                 delete Q.displayTitle,
//                                                 (B.checkout.shipping_rate = Q),
//                                                 (B.checkout.total_price = B.checkout.shipping_rate.checkout.total_price),
//                                                 (B.checkout.payment_due = B.checkout.shipping_rate.checkout.total_price),
//                                                 (B.checkout.shipping_address.address1 = e.shippingAddress.addressLine[0]),
//                                             e.shippingAddress.addressLine[1] && (B.checkout.shipping_address.address2 = e.shippingAddress.addressLine[1]),
//                                                 (B.checkout.shipping_address.first_name = e.payerName.split(" ")[0]),
//                                                 (B.checkout.shipping_address.last_name = e.payerName.split(" ")[1]),
//                                                 (B.checkout.shipping_address.phone = e.shippingAddress.phone.replace("+", "")),
//                                                 delete B.checkout.shipping_address.company,
//                                                 (B.checkout.billing_address.address1 = e.paymentMethod.billing_details.address.line1),
//                                             e.paymentMethod.billing_details.address.line2 && (B.checkout.billing_address.address2 = e.paymentMethod.billing_details.address.line2),
//                                                 (B.checkout.billing_address.first_name = e.payerName.split(" ")[0]),
//                                                 (B.checkout.billing_address.last_name = e.payerName.split(" ")[1]),
//                                                 (B.checkout.billing_address.phone = e.shippingAddress.phone.replace("+", "")),
//                                                 delete B.checkout.billing_address.company;
//                                             var t = B.payment.paymentIntent ? B.payment.paymentIntent.client_secret : B.payment.client_secret;
//                                             K.confirmCardPayment(t, { payment_method: e.paymentMethod.id }, { handleActions: !1 }).then(function (n) {
//                                                 n.error
//                                                     ? (e.complete("fail"), gu_checkout.alert("hide"))
//                                                     : (e.complete("success"),
//                                                         "requires_action" === n.paymentIntent.status
//                                                             ? K.confirmCardPayment(t).then(function (e) {
//                                                                 e.error;
//                                                             })
//                                                             : (console.log("Payment success!"), console.log(n), (B.payment = n.paymentIntent), (B.payment.pm_token = n.paymentIntent.payment_method), (B.payment.paymentSubMethod = oe), m()));
//                                             });
//                                         });
//                                 } else $("#payment-request-button").hide();
//                                 A = o();
//                             }
//                         } else
//                             0 == n.status
//                                 ? gu_checkout.alert("show", guSubstituteString("Unable to connect to the Internet. Trying again..."))
//                                 : n.response.error.line_items
//                                 ? console.log("%c Failure creating cart :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding:5px;")
//                                 : gu_checkout.alert("show", guSubstituteString("Our servers are temporarily unavailable. Trying again...")),
//                                 console.log("%c Failure creating cart :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding:5px;"),
//                                 gu_checkout.alert("show", guSubstituteString("Your internet is disconnected.")),
//                                 gu_events.fire(gu_events.eventList.internetOrShopifyDown),
//                                 Y++,
//                                 Y > 5 ? gu_events.error("CODE RED: Failure creating cart 5+ times.") : gu_events.debug("Retrying connection with cart. Tried to create a cart " + Y + " times."),
//                                 setTimeout(function () {
//                                     l(e);
//                                 }, 1e3);
//                 });
//             Date.now();
//             n.send(JSON.stringify(a));
//         }
//         function d(e) {
//             if ("undefined" == typeof B || "undefined" == typeof B.gu_transaction_id)
//                 return void console.log("%c Can't update cart because it hasn't been created yet. Please create a cart before trying to update it.", "background: " + warningYellow + "; color: black; display: block; padding: 5px;");
//             (B.checkout.line_items = e), console.log("%c Cart updated! ", "background: " + successGreen + "; color: white; display: block; padding:5px;"), gu_checkout_validation.togglePayPalButton();
//             var t = createReport();
//             (t && t.selectedUnits && t.gu_bundles) || (gu_events.error("CODE RED: Failure creating report."), (t = {}), (t.selectedUnits = "ReportFailure"), (t.gu_bundles = "ReportFailure")),
//                 (B.checkout.note_attributes.selectedUnits = t.selectedUnits),
//                 (B.checkout.note_attributes.gu_bundles = t.gu_bundles),
//                 (B.checkout.note_attributes.selected_user_bundle = finduserselected),
//                 B.payment.id
//                     ? ((B.checkout.shipping_line = null),
//                         (B.checkout.shipping_rate = null),
//                     0 == U && void 0 !== B.checkout.shipping_address && (B.checkout.shipping_address.company = k(B.checkout.shipping_address)),
//                         gu_checkout_validation.prepareForShippingRates())
//                     : (delete B.checkout.shipping_address, delete B.checkout.billing_address);
//             var n = B,
//                 i = new XMLHttpRequest();
//             i.open("PUT", serverURL + "/v2/shopify/" + gu_shopify_domain + "/checkouts/" + B.checkout.token),
//                 (i.responseType = "json"),
//                 (i.onreadystatechange = function () {
//                     4 == i.readyState &&
//                     (i.status < 300 && i.status >= 200
//                         ? i.response
//                             ? (x(i.response),
//                                 console.log("%c Successfully updated the cart!", "background: " + successGreen + "; color: white; display: block; padding: 5px;"),
//                                 gu_events.fireAndLogEvent(gu_events.eventList.cartUpdatedSuccessfully),
//                                 (X = 0),
//                                 gu_checkout.alert("hide"),
//                                 B.payment.id
//                                     ? f(
//                                     H
//                                         ? function () {
//                                             O();
//                                         }
//                                         : function () {
//                                             gu_payments.getShippingRates();
//                                         }
//                                     )
//                                     : (gu_checkout_validation.togglePayPalButton("show"),
//                                     H &&
//                                     ae.update({
//                                         total: { label: "Total", amount: parseInt(B.checkout.payment_due.replace(".", "")), pending: !0 },
//                                         displayItems: [
//                                             { amount: parseInt(B.checkout.subtotal_price.replace(".", "")), label: "Subtotal" },
//                                             { amount: 0, label: "Shipping", pending: !0 },
//                                             { amount: 0, label: "Estimated Tax", pending: !0 },
//                                         ],
//                                     })))
//                             : (console.log("%c Failure in updating cart :( Status: " + i.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                 gu_events.fireAndLogEvent(gu_events.eventList.errorUpdatingCart),
//                                 X++,
//                                 X > 5
//                                     ? (gu_events.error("CODE RED: Failure updating cart 5+ times."), gu_checkout.alert("show", "Our servers are temporarily unavailable. Trying again..."))
//                                     : gu_events.debug("Retrying connection with update order. Tried to update " + X + " times."),
//                                 setTimeout(function () {
//                                     d(e);
//                                 }, 1e3))
//                         : (console.log("%c Failure in updating order :( Status: " + i.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                             gu_events.fireAndLogEvent(gu_events.eventList.errorUpdatingCart),
//                             Z++,
//                             X > 5
//                                 ? (gu_events.error("CODE RED: Failure updating cart 5+ times."), gu_checkout.alert("show", "Our servers are temporarily unavailable. Trying again..."))
//                                 : gu_events.debug("Retrying connection with update order. Tried to update " + X + " times."),
//                             setTimeout(function () {
//                                 d(e);
//                             }, 1e3)));
//                 }),
//                 i.send(JSON.stringify(n));
//         }
//         function c(e) {
//             var t = B;
//             if ((delete B.checkout.applied_discount, (B.checkout.discount_code = e), "undefined" == typeof B))
//                 return void console.log(
//                     "%c Can't update order with promo code because it hasn't been created yet. Please create an order before trying to update it.",
//                     "background: " + warningYellow + "; color: black; display: block; padding: 5px;"
//                 );
//             var n = new XMLHttpRequest();
//             n.open("PUT", serverURL + "/v2/shopify/" + gu_shopify_domain + "/checkouts/" + B.checkout.token),
//                 (n.responseType = "json"),
//                 (n.onreadystatechange = function () {
//                     4 == n.readyState &&
//                     (n.status < 300 && n.status >= 200
//                         ? n.response
//                             ? n.response.checkout.checkout &&
//                             (null != n.response.checkout.checkout.applied_discount
//                                 ? (console.log("%c Successfully applied a discount!", "background: " + successGreen + "; color: white; display: block; padding: 5px;"),
//                                     u("valid"),
//                                     gu_events.fireAndLogEvent(gu_events.eventList.couponAddedSuccessfully),
//                                     $("#checkout .pricing .promo").show())
//                                 : (u(""), gu_events.fireAndLogEvent(gu_events.eventList.badCoupon), $("#checkout .pricing .promo").hide()),
//                                 x(n.response))
//                             : (console.log("%c Failure in updating order with promo code :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                 gu_events.fireAndLogEvent(gu_events.eventList.errorUpdatingCart))
//                         : (u("invalid"), gu_events.fireAndLogEvent(gu_events.eventList.badCoupon)));
//                 }),
//                 n.send(JSON.stringify(t));
//         }
//         function u(e) {
//             "valid" == e
//                 ? ($("#promo_wrap .promo").addClass("valid-field"),
//                     $("#promo_wrap #form-field-promo").addClass("valid").removeClass("error"),
//                     $("#promo_wrap #form-field-promo-error").hide(),
//                     $("#promo_wrap .form-field-label").addClass("success"))
//                 : "invalid" == e
//                 ? ($("#promo_wrap .promo").removeClass("valid-field"),
//                     $("#promo_wrap #form-field-promo").removeClass("valid").addClass("error"),
//                     $("#promo_wrap #form-field-promo-error").show(),
//                     $("#promo_wrap .form-field-label").removeClass("success"))
//                 : ($(this).parent().find("label.form-field-label").removeClass("move").removeClass("success"), $(this).parent().removeClass("valid-field"), $(this).removeClass("error valid"));
//         }
//         function p() {
//             $("#form-field-promo").on("blur", function (e) {
//                 var t = $(this).parent().find("label.form-field-label");
//                 t.removeClass("move");
//             }),
//                 $("#form-field-promo").on("focus", function () {
//                     $(this).parent().find("label.form-field-label").addClass("move").removeClass("success"), $(this).parent().removeClass("valid-field"), $(this).removeClass("error valid"), $(this).next("label.error").hide();
//                 });
//         }
//         function f(e) {
//             var t = B;
//             if ("undefined" == typeof B || "undefined" == typeof B.paymentMethod)
//                 return void console.log(
//                     "%c Can't update order because it hasn't been created yet. Please create an order before trying to update it. Maybe you meant to update the cart instead?",
//                     "background: " + warningYellow + "; color: black; display: block; padding: 5px;"
//                 );
//             var n = new XMLHttpRequest();
//             n.open("PUT", serverURL + "/v2/payments/" + gu_shopify_domain + "/transactions/" + B.gu_transaction_id + "/update"),
//                 (n.responseType = "json"),
//                 (n.onreadystatechange = function () {
//                     4 == n.readyState &&
//                     (n.status < 300 && n.status >= 200
//                         ? n.response
//                             ? (x(n.response),
//                                 console.log("%c Successfully updated the order!", "background: " + successGreen + "; color: white; display: block; padding: 5px;"),
//                                 gu_events.fireAndLogEvent(gu_events.eventList.cartUpdatedSuccessfully),
//                                 (Z = 0),
//                                 e ? e() : gu_checkout_validation.togglePayPalButton("show"))
//                             : (console.log("%c Failure in updating order :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                 gu_events.fireAndLogEvent(gu_events.eventList.errorUpdatingCart),
//                                 Z++,
//                                 Z > 5
//                                     ? (gu_events.error("CODE RED: Failure updating cart 5+ times."), M(Object.keys(n.response.error) || "shipping_address"), gu_checkout_validation.refreshShippingOptions())
//                                     : (gu_events.debug("Retrying connection with update order. Tried to update " + Z + " times."),
//                                         setTimeout(function () {
//                                             f(e);
//                                         }, 1e3)))
//                         : 422 === n.status
//                             ? n.response
//                                 ? (console.log("%c Failure in updating order :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                     console.log("Error Response", n.response),
//                                     gu_events.fireAndLogEvent(gu_events.eventList.errorUpdatingCart),
//                                     gu_events.error("Failure updating order"),
//                                     "undefined" != typeof n.response.error
//                                         ? (M(Object.keys(n.response.error)), gu_checkout_validation.refreshShippingOptions())
//                                         : (Z++,
//                                             Z > 5
//                                                 ? (gu_events.error("CODE RED: Failure updating cart 5+ times."), M(Object.keys(n.response.error)), gu_checkout_validation.refreshShippingOptions())
//                                                 : (gu_events.debug("Retrying connection with update order. Tried to update " + Z + " times."),
//                                                     setTimeout(function () {
//                                                         f(e);
//                                                     }, 1e3))))
//                                 : console.log(n)
//                             : (console.log("%c Failure in updating order :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                 gu_events.fireAndLogEvent(gu_events.eventList.errorUpdatingCart),
//                                 Z++,
//                                 Z > 5
//                                     ? (gu_events.error("CODE RED: Failure updating cart 5+ times."), M(Object.keys(n.response.error)), gu_checkout_validation.refreshShippingOptions())
//                                     : (gu_events.debug("Retrying connection with update order. Tried to update " + Z + " times."),
//                                         setTimeout(function () {
//                                             f(e);
//                                         }, 1e3)),
//                                 gu_events.error("Failed updating order " + Z + " times.")));
//                 }),
//                 n.send(JSON.stringify(t));
//         }
//         function g(e) {
//             "stripe" === e && (B.payment_method_types = ["card"]), (B.paymentMethod = e);
//         }
//         function _(e) {
//             var t = new XMLHttpRequest(),
//                 n = { payment: { amount: B.checkout.payment_due, unique_token: B.checkout.token, credit_card: e } };
//             t.open("POST", "https://elb.deposit.shopifycs.com/sessions", !0),
//                 (t.responseType = "json"),
//                 t.setRequestHeader("Content-Type", "application/json"),
//                 (t.onreadystatechange = function () {
//                     4 == t.readyState &&
//                     (t.status < 300 && t.status >= 200
//                         ? t.response && (console.log("%c Credit card processed!", "background: " + successGreen + "; color: white; display: block; padding: 5px;"), (B.payment.session_id = F(t.response).id), v())
//                         : (console.log("%c Credit card failure! :( Status: " + t.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                             gu_checkout.alert("hide"),
//                             gu_events.debug("Customer's card failed Shopify Card Vaulting"),
//                             gu_checkout_validation.handlePaymentError()));
//                 }),
//                 t.send(JSON.stringify(n));
//         }
//         function h() {
//             var e = B.payment.paymentIntent ? B.payment.paymentIntent.client_secret : B.payment.client_secret;
//             K.confirmCardPayment(e, {
//                 payment_method: {
//                     card: ne,
//                     billing_details: {
//                         address: {
//                             city: B.checkout.billing_address.city,
//                             country: B.checkout.billing_address.country_code,
//                             line1: B.checkout.billing_address.address1,
//                             line2: B.checkout.billing_address.address2,
//                             postal_code: B.checkout.billing_address.zip,
//                             state: B.checkout.billing_address.province_code,
//                         },
//                         email: B.checkout.email,
//                         name: B.checkout.billing_address.first_name + " " + B.checkout.billing_address.last_name,
//                         phone: B.checkout.billing_address.phone,
//                     },
//                 },
//             }).then(function (e) {
//                 var t = e.paymentIntent ? e.paymentIntent : e;
//                 t.error
//                     ? (console.log("%c Credit card failure! :( Error: " + t.error, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                         gu_checkout.alert("hide"),
//                         gu_events.debug("Customer's card failed Stripe Card Processing"),
//                         gu_checkout_validation.handlePaymentError())
//                     : "succeeded" === t.status &&
//                     (console.log("%c Card processed with Stripe! ", "background: " + successGreen + "; color: white; display: block; padding:5px;"), (B.payment = t), (B.payment.pm_token = t.payment_method), m());
//             });
//         }
//         function v() {
//             "adyen" === B.paymentMethod &&
//             ((j.originalReference = B.gu_transaction_id),
//                 (j.originalMerchantReference = B.gu_transaction_id),
//                 (j.amount.value = B.checkout.payment_due),
//                 (j.paymentMethod.encryptedCardNumber = gu_payments.adyenCard.state.data.encryptedCardNumber),
//                 (j.paymentMethod.encryptedExpiryMonth = gu_payments.adyenCard.state.data.encryptedExpiryMonth),
//                 (j.paymentMethod.encryptedExpiryYear = gu_payments.adyenCard.state.data.encryptedExpiryYear),
//                 (j.paymentMethod.encryptedSecurityCode = gu_payments.adyenCard.state.data.encryptedSecurityCode),
//                 (j.paymentMethod.holderName = B.checkout.billing_address.first_name + " " + B.checkout.billing_address.last_name),
//                 (B.checkout.adyen = j));
//             var e = B,
//                 t = new XMLHttpRequest();
//             t.open("POST", serverURL + "/v2/payments/" + gu_shopify_domain + "/transactions/" + B.gu_transaction_id + "/authorize"),
//                 t.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"),
//                 (t.responseType = "json"),
//                 (t.onreadystatechange = function () {
//                     if (4 == t.readyState)
//                         if (t.status < 300 && t.status >= 200) {
//                             if (t.response) {
//                                 var e = F(t.response);
//                                 if (e.errors)
//                                     console.log("%c Failure in order authorization :( Status: " + e.message, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                         gu_checkout.alert("hide"),
//                                         gu_checkout_validation.handlePaymentError(error),
//                                         gu_events.fireAndLogEvent(gu_events.eventList.ccFailed),
//                                         gu_events.debug("Customer's card failed Authorize");
//                                 else {
//                                     var e = F(t.response);
//                                     console.log("%c Order authorized! ", "background: " + successGreen + "; color: white; display: block; padding:5px;"),
//                                         "paypal" === B.paymentMethod
//                                             ? (B.payment.authorization = { id: e.payment.purchase_units[0].payments.authorizations[0].id })
//                                             : "adyen" === B.paymentMethod && ((B.payment = e.payment), (B.checkout.adyen.originalReference = B.payment.originalReference), (B.checkout.adyen.pspReference = B.payment.pspReference)),
//                                         m();
//                                 }
//                             }
//                         } else gu_events.fireAndLogEvent(gu_events.eventList.ccFailed), gu_checkout.alert("hide"), gu_events.debug("Customer's card failed Authorize"), gu_checkout_validation.handlePaymentError();
//                 }),
//                 t.send(JSON.stringify(e));
//         }
//         function m() {
//             "adyen" === B.paymentMethod && ((B.checkout.adyen.originalReference = B.payment.id), (B.checkout.adyen.pspReference = B.payment.id)),
//             "stripe" === B.paymentMethod && "undefined" == typeof B.payment.paymentSubMethod && (B.payment.paymentSubMethod = "card"),
//                 delete B.checkout.shipping_address.company,
//                 delete B.checkout.billing_address.company,
//                 (B.checkout.billing_address.company = ""),
//                 (B.checkout.shipping_address.company = "");
//             var e = createReport();
//             (e && e.selectedUnits && e.gu_bundles) || (gu_events.error("CODE RED: Failure creating report."), (e = {}), (e.selectedUnits = "ReportFailure"), (e.gu_bundles = "ReportFailure")),
//                 (note_attributes.selectedUnits = e.selectedUnits),
//                 (note_attributes.gu_bundles = e.gu_bundles),
//                 (B.checkout.note_attributes = note_attributes),
//                 gu_events.fireAndLogEvent(gu_events.eventList.submitOrder);
//             var t = B,
//                 n = new XMLHttpRequest();
//             n.open("POST", serverURL + "/v2/payments/" + gu_shopify_domain + "/transactions/" + B.gu_transaction_id + "/complete"),
//                 (n.responseType = "json"),
//                 (n.onreadystatechange = function () {
//                     4 == n.readyState &&
//                     (201 === n.status
//                         ? setTimeout(function () {
//                             console.log("%c Order isn't ready yet, let's try again", "background: " + warningYellow + "; color: black; display: block; padding:5px;"),
//                                 gu_events.debug("Process order attempted, but order isn't ready yet. Trying again."),
//                                 m();
//                         }, 1e3)
//                         : n.status < 300 && n.status >= 200 && 201 !== n.status
//                             ? n.response
//                                 ? (console.log("%c Order processed! ", "background: " + successGreen + "; color: white; display: block; padding:5px;"), x(n.response), (R = B.order.order_status_url), C(R))
//                                 : (console.log(n), gu_events.error("Major order process error. Valid status with no response."))
//                             : 406 === n.status
//                                 ? n.response
//                                     ? (console.log("%c Failure in processing order :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                         gu_events.fireAndLogEvent(gu_events.eventList.ccFailed),
//                                         gu_checkout.alert("hide"),
//                                         gu_events.debug("Customer's card failed Process Order"),
//                                         gu_checkout_validation.handlePaymentError())
//                                     : console.log(n)
//                                 : 504 === n.status
//                                     ? n.response
//                                         ? (console.log("%c Failure in processing order :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                             gu_events.fireAndLogEvent(gu_events.eventList.errorProcessingOrder),
//                                             gu_events.error("Failure processing order"),
//                                             r(B.gu_transaction_id))
//                                         : console.log(n)
//                                     : 422 === n.status
//                                         ? n.response
//                                             ? (console.log("%c Failure in processing order :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                                 gu_events.fireAndLogEvent(gu_events.eventList.errorProcessingOrder),
//                                                 gu_events.error("Failure processing order"),
//                                                 "undefined" != typeof n.response.error
//                                                     ? (M(Object.keys(n.response.error)), gu_checkout_validation.refreshShippingOptions())
//                                                     : "paypal" === B.paymentMethod || (gu_checkout.alert("hide"), gu_checkout_validation.handlePaymentError(B.paymentMethod)))
//                                             : console.log(n)
//                                         : (console.log("%c Failure in processing order :( Status: " + n.status, "background: " + errorRed + "; color: white; display: block; padding: 5px;"),
//                                             gu_events.fireAndLogEvent(gu_events.eventList.errorProcessingOrder),
//                                             gu_events.error("Failure processing order"),
//                                         "paypal" === B.paymentMethod || (gu_checkout.alert("hide"), gu_checkout_validation.handlePaymentError(B.paymentMethod))));
//                 }),
//                 n.send(JSON.stringify(t));
//         }
//         function y(e) {
//             var t = e.email;
//             (B.checkout.shipping_address = e), B.checkout.billing_address || (B.checkout.billing_address = e), (B.checkout.email = t), 0 == U && (B.checkout.shipping_address.company = k(e));
//         }
//         function b(e) {
//             B.checkout.billing_address = e;
//         }
//         function k(e) {
//             for (var t = "", n = void 0, i = 0; i < componentOffer.bundle_info.length; i++)
//                 if (componentOffer.bundle_info[i].selected_bundle) {
//                     n = gu_vs.check() ? gu_vs.checkRates(componentOffer.bundle_info[i].bundle_shipping) : componentOffer.bundle_info[i].bundle_shipping;
//                     break;
//                 }
//             if ("us" === e.country_code.toLowerCase()) {
//                 for (var a = void 0, o = 0; o < n.domestic_shipping.domestic_rate_exceptions.length; o++)
//                     for (var r = n.domestic_shipping.domestic_rate_exceptions[o].override_zones.split(","), s = 0; s < r.length; s++)
//                         e.province_code.toLowerCase() === r[s] && (a = n.domestic_shipping.domestic_rate_exceptions[o].shipping_charge);
//                 var l = "";
//                 if (
//                     ((l = T(a ? a : n.domestic_shipping.default_domestic_shipping_rate)),
//                         (t +=
//                             n.domestic_shipping.custom_default_rate_name_toggle.length && n.domestic_shipping.custom_default_rate_name
//                                 ? "-" + n.domestic_shipping.custom_default_rate_name + ":" + l
//                                 : "000" === l
//                                 ? "-Free Shipping:" + l
//                                 : "-Standard Shipping:" + l),
//                     "" != n.domestic_shipping.expedited_domestic_shipping)
//                 ) {
//                     console.log("there is an expedited rate");
//                     for (var d = void 0, c = 0; c < n.domestic_shipping.dom_exp_rate_overrides.length; c++)
//                         for (var u = n.domestic_shipping.dom_exp_rate_overrides[c].override_zones.split(","), p = 0; p < u.length; p++)
//                             e.province_code.toLowerCase() === u[p] && (d = n.domestic_shipping.dom_exp_rate_overrides[c].shipping_charge);
//                     (l = T(d ? d : n.domestic_shipping.default_expedited_rate)),
//                         (t +=
//                             n.domestic_shipping.custom_expedited_rate_name_toggle.length && n.domestic_shipping.custom_expedited_rate_name
//                                 ? ";-" + n.domestic_shipping.custom_expedited_rate_name + ":" + l
//                                 : "000" === l
//                                 ? ";-Free Shipping:" + l
//                                 : ";-Expedited Shipping:" + l);
//                 }
//             } else {
//                 for (var f = gu_shippingZones.getZones(), g = void 0, _ = 0; _ < n.international_shipping.intl_rate_exceptions.length; _++)
//                     for (var h = n.international_shipping.intl_rate_exceptions[_].override_zones.split(","), v = 0; v < h.length; v++)
//                         h[v] in f
//                             ? Object.keys(f[h[v]]).includes(e.country_code) && (g = n.international_shipping.intl_rate_exceptions[_].shipping_charge)
//                             : e.country_code.toLowerCase() === h[v] && (g = n.international_shipping.intl_rate_exceptions[_].shipping_charge);
//                 var m = "";
//                 if (
//                     ((m = T(g ? g : n.international_shipping.default_intl_shipping_rate)),
//                         (t +=
//                             n.international_shipping.custom_default_intl_rate_name_toggle.length && n.international_shipping.custom_default_intl_rate_name
//                                 ? ";-" + n.international_shipping.custom_default_intl_rate_name + ":" + m
//                                 : "000" === m
//                                 ? "-Free Shipping:" + m
//                                 : "-Standard Shipping:" + m),
//                     "" != n.international_shipping.expedited_intl_shipping)
//                 ) {
//                     console.log("there is an expedited rate");
//                     for (var y = void 0, b = 0; b < n.international_shipping.intl_exp_rate_overrides.length; b++)
//                         for (var k = n.international_shipping.intl_exp_rate_overrides[b].override_zones.split(","), $ = 0; $ < k.length; $++)
//                             k[$] in f
//                                 ? e.country_code.toLowerCase() === Object.keys(f[k[$]])[0].toLowerCase() && (y = n.international_shipping.intl_exp_rate_overrides[b].shipping_charge)
//                                 : e.country_code.toLowerCase() === k[$] && (y = n.international_shipping.intl_exp_rate_overrides[b].shipping_charge);
//                     t += y ? ";-Expedited Shipping:" + T(y) : ";-Expedited Shipping:" + T(n.international_shipping.default_international_expedited_rate);
//                 }
//             }
//             return t;
//         }
//         function w(e, t) {
//             return (
//                 delete t.id,
//                     delete t.company,
//                     delete t.country,
//                 t.province_code && (t.province_code = t.province_code.toLowerCase()),
//                     delete e.email,
//                 (!e.hasOwnProperty("phone") || null === e.phone || "" === e.phone || e.phone === t.phone) && L(e, t)
//             );
//         }
//         function x(e, t) {
//             if (
//                 ((e = F(e)),
//                 e.checkout &&
//                 ("undefined" != typeof checkout && "undefined" != typeof checkout.order_id && (e.checkout.order_id = checkout.order_id),
//                     (B.checkout = e.checkout.checkout),
//                     B.checkout.applied_discount ? (B.checkout.applied_discount = B.checkout.applied_discount) : (B.checkout.applied_discount = ""),
//                     (B.gu_transaction_id = e.gu_transaction_id),
//                     (B.shopify_domain = e.shopify_domain),
//                     (B.shopifydomain_checkout_token = e.shopify_domain + "_" + e.checkout.checkout.token),
//                     (B.paymentStatus = e.status),
//                 B.checkout.phone || delete B.checkout.phone,
//                 B.checkout.credit_card || delete B.checkout.credit_card,
//                 B.checkout.shipping_address || delete B.checkout.shipping_address,
//                 B.checkout.billing_address || delete B.checkout.billing_address,
//                     delete B.checkout.tax_lines,
//                 gu_qs.gucheckouttoken || (B.checkout.note_attributes = note_attributes),
//                     gu_checkout.updatePrices(o())),
//                     e.payment)
//             ) {
//                 if (
//                     ("undefined" != typeof e.payment.id && (B.payment.id = e.payment.id),
//                     "stripe" === e.paymentMethod && (B.payment = e.payment),
//                         (B.payment.payment_token = e.payment_token),
//                         (B.payment.checkout_token = e.checkout.checkout.token),
//                     e.payment.payer && "created" == e.transaction_status)
//                 ) {
//                     B.checkout.email = e.payment.payer.email_address;
//                     var n = {
//                         first_name: e.payment.payer.name.given_name,
//                         last_name: e.payment.payer.name.surname,
//                         address1: e.payment.purchase_units[0].shipping.address.address_line_1,
//                         address2: e.payment.purchase_units[0].shipping.address.address_line_2,
//                         city: e.payment.purchase_units[0].shipping.address.admin_area_2,
//                         province_code: e.payment.purchase_units[0].shipping.address.admin_area_1,
//                         zip: e.payment.purchase_units[0].shipping.address.postal_code,
//                         country_code: e.payment.purchase_units[0].shipping.address.country_code,
//                     };
//                     (B.checkout.shipping_address = n), (B.checkout.billing_address = n);
//                 }
//                 if (t) {
//                     var i = B.checkout;
//                     (i.email = B.checkout.email),
//                         (i.phone = B.checkout.phone),
//                     B.checkout.shipping_line && delete B.checkout.shipping_line,
//                     B.checkout.shipping_rate && delete B.checkout.shipping_rate,
//                     0 == U && (B.checkout.shipping_address.company = k(B.checkout.shipping_address)),
//                         gu_checkout_validation.updatePayPalShippingInfo(i);
//                 }
//             }
//             e.order && (B.order = e.order);
//         }
//         function C(e) {
//             gu_events.fireAndLogEvent(gu_events.eventList.orderConversion),
//                 setTimeout(function () {
//                     var t = e.split("?")[1];
//                     "undefined" != typeof t && "key" == t.split("=")[0] && ((e = e.split("?")[0] + "/"), (gu_qs.key = t.split("=")[1])), (e = E(e)), (window.location = e + gu_qs_to_str(gu_qs));
//                 }, 1e3);
//         }
//         function S(e) {
//             gu_events.fireAndLogEvent(gu_events.eventList.paypalClicked), gu_events.fireAndLogEvent(gu_events.eventList.shippingInfo);
//             var t = $("#" + e).data("page");
//             "?" == t.charAt(t.length - 1) && (t = t.slice(0, -1)),
//                 (t = E(t)),
//                 setTimeout(function () {
//                     window.location = t + gu_qs_to_str(gu_qs);
//                 }, 500);
//         }
//         function E(e) {
//             var t = document.createElement("a");
//             return (t.href = e), (t.hostname = "shop." + site_vars.shopifyname + ".io"), t;
//         }
//         function q() {
//             (G = !0),
//                 $("#payment_info").hide(),
//                 ne.mount("#card-element"),
//                 ne.on("change", function (e) {
//                     var t = document.getElementById("card-errors");
//                     e.error ? ($("#card-element").addClass("error"), (t.textContent = e.error.message), t.classList.add("visible")) : ($("#card-element").removeClass("error"), t.classList.remove("visible")),
//                         (gu_payments.stripeValidation = !(e.empty || e.error || !e.complete));
//                 });
//         }
//         function I() {
//             H = !0;
//             var e = { country: gu_country.toUpperCase(), currency: "usd", total: { label: "Subtotal", amount: 0, pending: !0 }, requestPayerName: !0, requestPayerEmail: !0, requestShipping: !0 };
//             ae = K.paymentRequest(e);
//             var t = ee.create("paymentRequestButton", { paymentRequest: ae, style: { paymentRequestButton: { height: "50px" } } });
//             ae.canMakePayment().then(function (e) {
//                 e ? (t.mount("#payment-request-button"), (oe = e.applePay ? "applepay" : e.googlePay ? "googlepay" : "credit")) : (document.getElementById("payment-request-button").style.display = "none");
//             });
//         }
//         function O(e) {
//             fetch(serverURL + "/v2/shopify/" + gu_shopify_domain + "/checkouts/" + B.checkout.token + "/shipping_rates?_=" + new Date().getTime(), { headers: { "Content-Type": "application/x-www-form-urlencoded" }, method: "get" })
//                 .then(function (e) {
//                     return e.json();
//                 })
//                 .then(function (t) {
//                     if (((J = t.shipping_rates), 0 == J.length))
//                         if ((console.log("%c Shipping rates came back empty  :( Trying again.", "background: " + warningYellow + "; color: black; display: block; padding: 5px;"), W > 5)) {
//                             (W = 0), console.log("%c Failure in getting rates :( Status: " + t, "background: " + errorRed + "; color: white; display: block; padding: 5px;"), gu_events.error("Shipping rates came back empty 5 times.");
//                             var n = $(selectedBundle).attr("id");
//                             window._guLogger.error("CODE RED: Failed to load shipping rates after 5 attempts.", null, { selectedBundle: n, shopifyDomain: gu_shopify_domain, severity: "critical" }),
//                                 e.updateWith({ status: "invalid_shipping_address" });
//                         } else
//                             W++,
//                                 gu_events.debug("Shipping rates came back empty. Trying again."),
//                                 setTimeout(function () {
//                                     O(e);
//                                 }, 1e3);
//                     else {
//                         W = 0;
//                         var a = $.grep(t.shipping_rates, function (e) {
//                                 return e.id.includes("Giddyup Rate Provider");
//                             }),
//                             o = [];
//                         console.log("fetched the shiping rates");
//                         for (var r = 0; r < a.length; r++) {
//                             var s = {};
//                             (s.id = a[r].id), (s.label = a[r].title.substring(1)), (s.amount = parseInt(a[r].price.replace(".", ""))), (s.tax = parseInt(a[r].checkout.total_tax.replace(".", ""))), o.push(s);
//                         }
//                         i(o[0].id, function () {
//                             (N = o),
//                                 e
//                                     ? e.updateWith({
//                                         status: "success",
//                                         shippingOptions: N,
//                                         total: { amount: B.payment.amount, label: "Total", pending: !1 },
//                                         displayItems: [
//                                             { amount: parseInt(B.checkout.subtotal_price.replace(".", "")), label: "Subtotal" },
//                                             { amount: parseInt(B.checkout.shipping_rate.price.replace(".", "")), label: "Shipping" },
//                                             { amount: parseInt(B.checkout.total_tax.replace(".", "")), label: "Estimated Tax" },
//                                         ],
//                                     })
//                                     : ae.update({
//                                         shippingOptions: N,
//                                         total: { amount: B.payment.amount, label: "Total", pending: !1 },
//                                         displayItems: [
//                                             { amount: parseInt(B.checkout.subtotal_price.replace(".", "")), label: "Subtotal" },
//                                             { amount: parseInt(B.checkout.shipping_rate.price.replace(".", "")), label: "Shipping" },
//                                             { amount: parseInt(B.checkout.total_tax.replace(".", "")), label: "Estimated Tax" },
//                                         ],
//                                     }),
//                                 gu_checkout_validation.togglePayPalButton("show");
//                         }),
//                             gu_checkout_validation.displayShippingOptions(J);
//                     }
//                 });
//         }
//         function D() {
//             var e = { url: window.location.origin },
//                 t = new XMLHttpRequest();
//             t.open("POST", serverURL + "/v2/" + gu_shopify_domain + "/origin_keys"),
//                 (t.responseType = "json"),
//                 (t.onreadystatechange = function () {
//                     4 == t.readyState && t.status < 300 && t.status >= 200 && 201 !== t.status && (t.response && !t.response.hasOwnProperty("error") ? P(t.response.originKey[window.location.origin]) : console.log(t.response));
//                 }),
//                 t.send(JSON.stringify(e));
//         }
//         function P(e) {
//             function t(e, t) {
//                 e.isValid, e.data;
//             }
//             var n = { locale: "en_US", environment: "test", originKey: e, onChange: t };
//             (gu_payments.adyenCheckout = new AdyenCheckout(n)),
//                 (gu_payments.adyenCard = gu_payments.adyenCheckout
//                     .create("securedfields", {
//                         type: "card",
//                         brands: ["mc", "visa", "amex", "bcmc", "maestro"],
//                         styles: { error: { color: "red" }, validated: { color: "green" }, placeholder: { color: "#d8d8d8" } },
//                         ariaLabels: { lang: "en-GB", encryptedCardNumber: { label: "Credit or debit card number field" } },
//                         onChange: function () {},
//                         onValid: function () {},
//                         onLoad: function () {},
//                         onConfigSuccess: function () {},
//                         onFieldValid: function () {},
//                         onBrand: function () {},
//                         onError: function () {},
//                         onFocus: function () {},
//                         onBinValue: function (e) {},
//                     })
//                     .mount("#adyenCard-container"));
//         }
//         function F(e) {
//             var t = null;
//             return (t = "object" == ("undefined" == typeof e ? "undefined" : _typeof(e)) ? e : JSON.parse(e));
//         }
//         function L(e, t) {
//             var n = Object.getOwnPropertyNames(e),
//                 i = Object.getOwnPropertyNames(t);
//             if (n.length != i.length) return console.log("Objects checked for equivalency aren't even the same length and cannot match"), !1;
//             for (var a = 0; a < n.length; a++) {
//                 var o = n[a];
//                 if ((e[o] || (e[o] = ""), e[o] || (e[o] = ""), e[o] !== e[o]))
//                     return console.log("%c Looks like the " + o + " was changed since last order update. Need to redo checkout with this new info", "background: " + warningYellow + "; color: black; display: block; padding: 5px;"), !1;
//             }
//             return !0;
//         }
//         function T(e) {
//             return e.includes(".") ? (e = e.split(".").join("")) : (e += "00"), e;
//         }
//         function M(e) {
//             var t = !1;
//             switch (e[0]) {
//                 case "email":
//                     gu_checkout_validation.fieldMismatch("email");
//                     break;
//                 case "phone":
//                     gu_checkout_validation.fieldMismatch("phone");
//                     break;
//                 case "shipping_address":
//                     gu_checkout_validation.fieldMismatch("zip");
//                     break;
//                 case "shipping_line":
//                     gu_checkout_validation.fieldMismatch("zip");
//                     break;
//                 case "billing_address":
//                     gu_checkout_validation.fieldMismatch("zip", "billing"), (t = !0);
//                     break;
//                 default:
//                     gu_checkout_validation.fieldMismatch("zip");
//             }
//             t !== !0 && gu_checkout_validation.refreshShippingOptions();
//         }
//         var R = void 0,
//             A = void 0,
//             B = {
//                 checkout: void 0,
//                 gu_transaction_id: void 0,
//                 paymentMethod: void 0,
//                 shopify_domain: void 0,
//                 shopifydomain_checkout_token: void 0,
//                 payment: { id: void 0, payment_token: void 0, checkout_token: void 0, authorization: { id: "" }, accept_language: "en-US", user_agent: navigator.userAgent, session_id: void 0, status: void 0 },
//                 intent: "AUTHORIZE",
//             },
//             z = {},
//             N = [],
//             j = {
//                 reference: "GiddyUp Test",
//                 originalReference: "",
//                 originalMerchantReference: "",
//                 additionalData: { authorisationType: "PreAuth" },
//                 amount: { currency: gu_currency, value: "" },
//                 paymentMethod: { type: "scheme", encryptedCardNumber: "", encryptedExpiryMonth: "", encryptedExpiryYear: "", encryptedSecurityCode: "", holderName: "" },
//             },
//             U = site_vars.v20_interim_shipping,
//             V = site_vars.cc_processor,
//             H = !1,
//             G = !1;
//         if ("undefined" != typeof gu_qs.gupcon)
//             switch (gu_qs.gupcon) {
//                 case "08247":
//                     V = "shopify";
//                     break;
//                 case "11039":
//                     V = "stripe";
//                     break;
//                 case "29423":
//                     V = "stripealt";
//                     break;
//                 case "30693":
//                     V = "stripemobile";
//                     break;
//                 case "49429":
//                     V = "stripedesktop";
//             }
//         var W = 0,
//             J = [],
//             Q = {},
//             Y = 0,
//             X = 0;
//         1 == gu_qs.gu47 && ($("#promo_wrap").addClass("show"), p());
//         var Z = 0;
//         "1" === gu_checkout_paypal_pay
//             ? "1" === gu_checkout_native_paypal &&
//             ($("#paypal-button").hide(),
//                 paypal
//                     .Buttons({
//                         style: { layout: "horizontal", color: "gold", shape: "rect", label: "paypal", tagline: !1, height: 50, fundingicons: "false" },
//                         createOrder: function (e, t) {
//                             return (
//                                 gu_events.fireAndLogEvent(gu_events.eventList.paypalClicked),
//                                     gu_payments.setPaymentMethod("paypal"),
//                                     fetch(serverURL + "/v2/payments/" + gu_shopify_domain + "/transactions/create", { headers: { "Content-Type": "application/x-www-form-urlencoded" }, method: "post", body: JSON.stringify(gu_payments.order) })
//                                         .then(function (e) {
//                                             return e.json();
//                                         })
//                                         .then(function (e) {
//                                             var t = e;
//                                             return "undefined" == typeof t.payment.id
//                                                 ? (gu_events.error("Failure creating Paypal order"), null)
//                                                 : (console.log("%c Paypal order created! ", "background: " + successGreen + "; color: white; display: block; padding:5px;"), gu_payments.syncOrder(e), t.payment.id);
//                                         })
//                             );
//                         },
//                         onApprove: function (e, t) {
//                             return (
//                                 gu_checkout.alert("show"),
//                                     fetch(serverURL + "/v2/payments/" + gu_shopify_domain + "/transactions/" + gu_payments.order.gu_transaction_id, {
//                                         headers: { "Content-Type": "application/x-www-form-urlencoded" },
//                                         method: "post",
//                                         body: JSON.stringify(gu_payments.order),
//                                     })
//                                         .then(function (e) {
//                                             return e.json();
//                                         })
//                                         .then(function (e) {
//                                             return (
//                                                 console.log("%c Paypal order posted! ", "background: " + successGreen + "; color: white; display: block; padding:5px;"),
//                                                     (gu_payments.order.checkout = { checkout: gu_payments.order.checkout }),
//                                                     gu_events.fireAndLogEvent(gu_events.eventList.shippingInfo),
//                                                     gu_payments.syncOrder(e, !0),
//                                                     gu_payments.updateOrder(function () {
//                                                         gu_payments.getShippingRates();
//                                                     }),
//                                                     gu_checkout.alert("hide"),
//                                                     null
//                                             );
//                                         })
//                             );
//                         },
//                     })
//                     .render("#paypal-button-container"))
//             : ($("#paypal-button").hide(), $(".or-pay-with").hide());
//         var K = void 0,
//             ee = void 0,
//             te = {
//                 base: { color: "#000", fontFamily: "Arial, sans-serif", fontSmoothing: "antialiased", fontSize: "16px", "::placeholder": { color: "#7a7a7a" } },
//                 invalid: { fontFamily: "Arial, sans-serif", color: "#ff1b1b", iconColor: "#ff1b1b" },
//             },
//             ne = void 0,
//             ie = !1,
//             ae = void 0,
//             oe = null;
//         "shopify" != V
//             ? ((K = Stripe(site_vars.stripe_key)),
//                 (ee = K.elements()),
//                 "stripe" === V || (isMobile.any && "stripemobile" === V) || (!isMobile.any && "stripedesktop" === V)
//                     ? ((ne = ee.create("card", { style: te })), q(), I())
//                     : "stripealt" === V
//                     ? (I(), $("#payment-form").hide())
//                     : ($("#payment-form").hide(), $("#payment-request-button").hide()))
//             : ($("#payment-form").hide(), $("#payment-request-button").hide());
//         var re = {},
//             se = {};
//         return (
//             "adyen" === site_vars.cc_processor && D(),
//                 {
//                     startCart: e,
//                     createOrder: t,
//                     getShippingRates: n,
//                     selectShippingRate: i,
//                     refreshShipping: a,
//                     getPrices: o,
//                     completeOrder: s,
//                     restoreOrder: r,
//                     paypalRedirect: S,
//                     submitPromoCode: c,
//                     validatePromo: u,
//                     stripeValidation: ie,
//                     paymentProcessorSetting: V,
//                     order: B,
//                     setPaymentMethod: g,
//                     syncOrder: x,
//                     updateOrder: f,
//                     adyenCheckout: re,
//                     adyenCard: se,
//                 }
//         );
//     })(),
//     _typeof =
//         "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
//             ? function (e) {
//                 return typeof e;
//             }
//             : function (e) {
//                 return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e;
//             },
//     gu_checkout = (function () {
//         function e(e) {
//             if (e) {
//                 $(y).slideUp(), $(b).slideUp(), $(k).slideUp(), $(w).slideUp();
//                 var t = [];
//                 gu_checkout.cart.forEach(function (e) {
//                     t.push({ variant_id: e.variant_id, quantity: e.qty });
//                 }),
//                     gu_payments.startCart(t);
//             } else gu_offer_events.startExtras();
//         }
//         function t(e, t) {
//             var n = void 0,
//                 i = void 0,
//                 a = void 0,
//                 o = void 0;
//             if (((n = i = a = o = 0), "object" === ("undefined" == typeof e ? "undefined" : _typeof(e)))) (o = e.promo ? e.promo : 0), (n = e.tax ? e.tax : 0), (i = e.shipping ? e.shipping : 0), (a = e.total ? e.total : 0);
//             else {
//                 var r = [];
//                 $.each(gu_checkout.cart, function (e, t) {
//                     r.push(t.price * t.qty);
//                 }),
//                     $.each(r, function (e, t) {
//                         a = Big(a).add(t);
//                     }),
//                     (a = a.toFixed(2));
//             }
//             0 !== o && ($(T).closest(".promo").removeClass("hidden"), $(T).text("- " + gu_common.guDisplayCurrency(o))), 0 !== n && $(M).text(gu_common.guDisplayCurrency(n)), 0 !== i && $(R).text(gu_common.guDisplayCurrency(i));
//             var s = gu_common.guDisplayCurrency(a);
//             $(A).attr("data-total", a).text(s),
//                 $(B).text(s),
//                 setTimeout(function () {
//                     $(F).fadeOut("slow");
//                 }, 500);
//         }
//         function n() {
//             (gu_checkout.cart = []), gu_checkout.updatePrices();
//         }
//         function i() {
//             $(N).length || $(x).wrapAll("<div class='" + z + "'></div>"), $(N).empty(), (gu_checkout.cart = []);
//         }
//         function a(e, t, n) {
//             $(F).length ? $(F).is(":visible") || $(F).show() : $(f).prepend("<div class='" + P + '\'><img width="60" alt="Loading..." src="' + L + '" /></div>');
//             var i = gu_checkout.createProductHTML(e);
//             if (
//                 ($(N).append(i.html),
//                     gu_checkout.cart.push({
//                         upi: i.upi,
//                         product_id: e.product_id,
//                         variant_id: e.variant_id,
//                         name: e.name,
//                         subtitle: e.subtitle,
//                         price: e.price,
//                         qty: e.qty,
//                         weight: e.weight,
//                         sku: e.sku,
//                         tags: gu_products.getPriceInfoForProduct(e.product_id),
//                         bundle_name: e.bundle_name,
//                         type: e.type,
//                     }),
//                 void 0 !== e.bundle_name && void 0 !== e.bundle_id)
//             ) {
//                 var a = gu_checkout.cart[gu_checkout.cart.length - 1];
//                 (a.bundle_name = e.bundle_name), (a.bundle_id = e.bundle_id);
//             }
//             return (
//                 t
//                     ? $(u).is(":visible")
//                     ? gu_checkout.updatePrices()
//                     : (console.log(
//                         "%c Cannot update server cart while the checkout is hidden! :( ",
//                         "background: #240100; color: #ef8783; display: block; padding: 10px 5px; border-top: 1px solid #540a04; border-bottom: 1px solid #540a04; "
//                     ),
//                         console.log(
//                             "%c This is not a serious error. Everything continued to work as it should. If you want to learn more, please refer to the guCheckout owner's manual. ",
//                             "background: #240100; color: #ababab; font-style: italic; display: block; padding: 5px;"
//                         ))
//                     : (gu_checkout.updatePrices(!1, !0), gu_offer_events.showTotalbar()),
//                     i.upi
//             );
//         }
//         function o(e, t, n) {
//             if (
//                 (void 0 !== t.name && $(q, x + '[data-upi="' + e + '"]').text(l(t.name)),
//                     void 0 !== t.subtitle
//                         ? $(I, x + '[data-upi="' + e + '"]')
//                             .text(l(t.subtitle))
//                             .show()
//                         : $(I, x + '[data-upi="' + e + '"]').hide(),
//                 void 0 !== t.price)
//             ) {
//                 var i = Big(t.price).mul(t.qty);
//                 $(O, x + '[data-upi="' + e + '"]').text(gu_common.guDisplayCurrency(i));
//             }
//             void 0 !== t.qty && $(E, x + '[data-upi="' + e + '"]').text(t.qty),
//             void 0 !== t.img &&
//             $(S, x + '[data-upi="' + e + '"]')
//                 .attr("src", t.img)
//                 .attr("srcset", t.img)
//                 .attr("data-cfsrc", t.img);
//             for (var a = 0; a < gu_checkout.cart.length; a++)
//                 gu_checkout.cart[a].upi === e &&
//                 (void 0 !== t.name && (gu_checkout.cart[a].name = t.name),
//                 void 0 !== t.price && (gu_checkout.cart[a].price = t.price),
//                 void 0 !== t.qty && (gu_checkout.cart[a].qty = t.qty),
//                 void 0 !== t.product_id && (gu_checkout.cart[a].product_id = t.product_id),
//                 void 0 !== t.variant_id && (gu_checkout.cart[a].variant_id = t.variant_id),
//                 void 0 !== t.subtitle && (gu_checkout.cart[a].subtitle = t.subtitle),
//                 void 0 !== t.weight && (gu_checkout.cart[a].weight = t.weight),
//                 void 0 !== t.sku && (gu_checkout.cart[a].sku = t.sku),
//                 void 0 !== t.tags && (gu_checkout.cart[a].tags = t.tags),
//                 void 0 !== t.bundle_name && (gu_checkout.cart[a].bundle_name = t.bundle_name),
//                 void 0 !== t.type && (gu_checkout.cart[a].type = t.type));
//             n
//                 ? $(u).is(":visible")
//                 ? gu_checkout.updatePrices()
//                 : (console.log(
//                     "%c Cannot update server cart while the checkout is hidden! :( ",
//                     "background: #240100; color: #ef8783; display: block; padding: 10px 5px; border-top: 1px solid #540a04; border-bottom: 1px solid #540a04; "
//                 ),
//                     console.log(
//                         "%c This is not a serious error. Everything continued to work as it should. If you want to learn more, please refer to the guCheckout owner's manual. ",
//                         "background: #240100; color: #ababab; font-style: italic; display: block; padding: 5px;"
//                     ))
//                 : (gu_checkout.updatePrices(!1, !0), gu_offer_events.showTotalbar());
//         }
//         function r(e, t) {
//             $(x + '[data-upi="' + e + '"]').remove();
//             for (var n = 0; n < gu_checkout.cart.length; n++) gu_checkout.cart[n].upi === e && gu_checkout.cart.splice(n, 1);
//             t
//                 ? $(u).is(":visible")
//                 ? gu_checkout.updatePrices()
//                 : (console.log(
//                     "%c Cannot update server cart while the checkout is hidden! :( ",
//                     "background: #240100; color: #ef8783; display: block; padding: 10px 5px; border-top: 1px solid #540a04; border-bottom: 1px solid #540a04; "
//                 ),
//                     console.log(
//                         "%c This is not a serious error. Everything continued to work as it should. If you want to learn more, please refer to the guCheckout owner's manual. ",
//                         "background: #240100; color: #ababab; font-style: italic; display: block; padding: 5px;"
//                     ))
//                 : gu_checkout.updatePrices(!1, !0);
//         }
//         function s(e) {
//             var t = $(C),
//                 n = "upi-" + Math.floor(1e9 * Math.random());
//             t.attr("data-upi", n),
//             void 0 === e.name && (e.name = "Error: Missing Product Name"),
//                 t.find(q).text(l(e.name)),
//                 void 0 !== e.subtitle ? t.find(I).text(l(e.subtitle)).show() : t.find(I).hide(),
//             void 0 === e.img && (e.img = D),
//                 t.find(S).attr("src", e.img).attr("srcset", e.img).attr("data-cfsrc", e.img),
//             void 0 === e.qty && (e.qty = 1),
//                 t.find(S).after('<div class="qty">' + e.qty + "</div>"),
//             void 0 === e.price && (e.price = "0");
//             var i = Big(e.price).mul(e.qty).toFixed(2);
//             return t.find(O).text(gu_common.guDisplayCurrency(i)), { upi: n, html: t };
//         }
//         function l(e) {
//             var t = e,
//                 n = t.split("-");
//             if (n.length > 1) {
//                 for (var i = "", a = 0; a < n.length; a++) {
//                     var o = gu_common.guSubstituteString(n[a].trim());
//                     (i += o), a != n.length - 1 && (i += " - ");
//                 }
//                 t = i;
//             } else t = gu_common.guSubstituteString(e);
//             return t;
//         }
//         function d() {
//             return $(A).attr("data-total");
//         }
//         function c(e, t) {
//             "show" === e.toLowerCase()
//                 ? ($(g + " .overlay").show(), $(g + " .confirmation").hide(), $(g).fadeIn().css("pointer-events", "auto"), void 0 === t ? $(_).hide() : ($(_).text(t), $(_).show()), gu_offer_events.scrollTo($(u)))
//                 : "confirm" === e.toLowerCase()
//                 ? ($(g + " .overlay").hide(), $(g + " .confirmation").show(), $(g).fadeIn().css("pointer-events", "auto"), void 0 === t ? $(h).hide() : ($(h).text(t), $(_).show()))
//                 : "hide" === e.toLowerCase()
//                     ? $(g).fadeOut().css("pointer-events", "none")
//                     : "" === e && $(g).fadeOut().css("pointer-events", "none");
//         }
//         var u = "#checkout",
//             p = "#checkout-form",
//             f = u + " .details",
//             g = u + " #checkout-alert",
//             _ = g + " .text",
//             h = g + " .text p",
//             v = g + " .confirmation a",
//             m = "#mobile-order-summary",
//             y = "#main-wrapper .additional-footer-message",
//             b = "#footer",
//             k = "#footer-badges, .mobile-only.guarantee",
//             w = "#faq",
//             x = f + " .product",
//             C = $("<div />").append($(x).eq(0).clone()).html(),
//             S = ".img img",
//             E = ".img .qty",
//             q = ".name h6",
//             I = ".name .subtitle",
//             O = ".price h6",
//             D = checkoutScript.theme_directory + "/images/missing-image.jpg",
//             P = "prod-loading-animation",
//             F = f + " ." + P,
//             L = checkoutScript.theme_directory + "/images/checkout-loading-compressed.gif",
//             T = f + " .promo .price h6",
//             M = f + " .tax .price h6",
//             R = f + " .shipping .price h6",
//             A = f + " .total .price h6",
//             B = m + " .price p",
//             z = "product-wrapper",
//             N = f + " ." + z;
//         return (
//             $(v).click(function () {
//                 gu_checkout.alert("hide");
//             }),
//                 $(p).prepend($(g)),
//                 { createProductHTML: s, addProduct: a, removeProduct: r, updateProduct: o, initCart: i, clearCart: n, updatePrices: t, getTotal: d, alert: c, startCheckout: e }
//         );
//     })();
// gu_checkout.initCart(),
//     jQuery(function (e) {
//         e(document).ready(function () {
//             if (e(".easysteps-section").length) {
//                 var t = ".easysteps-section",
//                     n = e(t).data("block-id");
//                 e("#easysteps-modal-" + n, e(t)).appendTo("body");
//                 var i = e(e(".modal-link-placeholder", e(t)).length ? e(".modal-link-placeholder", e(t)) : e(".button-continue a", e(t))).text();
//                 "" != i ? e(".easysteps-modal-link span", e(t)).text(guSubstituteString(i)) : e(".easysteps-modal-link span", e(t)).remove();
//             }
//             e(document)
//                 .on("shown.bs.modal", ".video-modal", function (t) {
//                     var n = e("iframe", e(this)).attr("src");
//                     void 0 === e("iframe", e(this)).attr("data-src") && ((n += (n.indexOf("?") > -1 ? "&" : "?") + "autoplay=1&modestbranding=1&showinfo=0&rel=0"), e("iframe", e(this)).attr("data-src", n));
//                     var i = e("iframe", e(this)).data("src");
//                     e("iframe", e(this)).attr("src", i);
//                 })
//                 .on("hide.bs.modal", ".video-modal", function (t) {
//                     e("iframe", e(this)).attr("src", "");
//                 });
//         });
//     }),
//     jQuery(function (e) {
//         e(document).ready(function () {
//             if (e('.shortcode-modal[data-opener="on-page"]').length) {
//                 var t = ".shortcode-modal";
//                 e(t).each(function () {
//                     var t = e(this).attr("data-id");
//                     e("a[href]").each(function () {
//                         var n = e(this).attr("href").split("#");
//                         n.length > 1 &&
//                         n[1] == t &&
//                         e(this)
//                             .contents()
//                             .unwrap()
//                             .wrap('<span class="shortcode-link" data-toggle="modal" data-target="#' + t + '"/>');
//                     }),
//                         e(this).attr("id", t);
//                 });
//             }
//             if (e('.shortcode-modal[data-opener="link"]').length || e('.shortcode-modal[data-opener="button"]').length) {
//                 var n = ".shortcode-modal";
//                 e(n).each(function () {
//                     var t = e(this).attr("data-id");
//                     e(this).attr("id", t);
//                 });
//             }
//         });
//     }),
//     console.log("did this load up at all for staging?");
// var $upsell = $(".upsell"),
//     finduserselected = "";
// if (($(".gu-extras").addClass("bundle-extra"), $upsell.length && $upsell.css("height", "auto"), "undefined" != typeof gu_qs.guoffer)) var activeOfferName = window.gu_ua.guoffer;
// var offerEventData = window.upsellData.offer_event_data,
//     eventData = offerEventData,
//     offerEventStatus = window.upsellData.offer_event_status,
//     upsellIndex = 0,
//     upsellsVisible = !1,
//     variantVisible = !1,
//     bundleSelected = void 0;
// (offerEventStatus.checkout_status = "page_load"), (offerEventStatus.upsellsRemaining = eventData.length);
// var gu_offer_events = (function () {
//     function e() {
//         var e = this;
//         (e.popup = []),
//             (e.inline = []),
//             (e.clear = function () {
//                 (e.popup = []), (e.inline = []);
//             }),
//             (e.isShown = function () {
//                 return e.popup.length > 0 || e.inline.length > 0;
//             });
//     }
//     function t(e) {
//         $("html, body").stop().animate({ scrollTop: e.offset().top }, 500);
//     }
//     function n() {
//         return E <= I;
//     }
//     function i() {
//         var e = document.querySelector(".bundle.selected");
//         return null !== e ? e.id : "";
//     }
//     function a() {
//         function e() {
//             d
//                 ? (u.modal(), showUpsellPopUp(l), $(".button", $('[data-slug="' + l + '"]')).removeClass("disabled"), O.popup.push(!0))
//                 : (u.slideDown(),
//                     gu_events.fireAndLogEvent(gu_events.eventList.viewInlineUpsell),
//                     O.inline.push(!0),
//                     setTimeout(function () {
//                         t(u);
//                     }, 500)),
//             void 0 === offerEventData[E] || offerEventData[E].hasOwnProperty("upsell_seen") || (offerEventData[E].upsell_seen = !0),
//             E + 1 < I && (o(), r()),
//                 offerEventStatus.upsellsRemaining--,
//                 E++;
//         }
//         var n = $(".upsell.bundle-extra").is(":visible"),
//             s = eventData[E];
//         if (null === s.upsell_name) return offerEventStatus.upsellsRemaining--, E++, void (offerEventStatus.upsellsRemaining > 0 ? a() : c());
//         var l = s.upsell_name.toString(),
//             d = "popup" === s.upsell_type,
//             u = $("#" + l);
//         n &&
//         setTimeout(function () {
//             t(u);
//         }, 500),
//             null === s.bundle_to_trigger_upsell ? e() : s.bundle_to_trigger_upsell === i() ? e() : (offerEventStatus.upsellsRemaining--, E++, offerEventStatus.upsellsRemaining > 0 ? a() : c());
//     }
//     function o() {
//         var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "";
//         "undefined" == typeof o.displayMode && (o.displayMode = ""),
//             "" === o.displayMode && "" === e
//                 ? (g.attr("data-display-type", "checkout"), $("body").addClass("totalbar-shown"))
//                 : "hide" === e
//                 ? (g.attr("data-display-type", "hide"),
//                     setTimeout(function () {
//                         g.attr("data-display-type", ""), $("body").removeClass("totalbar-shown");
//                     }, 1e3))
//                 : "next" === e
//                     ? ((o.displayMode = "next"), g.attr("data-display-type", "next"), $("body").addClass("totalbar-shown"))
//                     : "checkout" === e && ((o.displayMode = ""), g.attr("data-display-type", "checkout"), $("body").addClass("totalbar-shown")),
//         f.is(":visible") && f.slideUp();
//     }
//     function r() {
//         if ((gu_checkout.updatePrices(), void 0 !== gu_checkout.getTotal())) {
//             g.attr("data-display-total", parseInt(gu_checkout.getTotal()));
//             var e = gu_common.guSubstituteString("Total: ") + gu_common.guDisplayCurrency(gu_checkout.getTotal());
//             _.html(e);
//         }
//     }
//     function s(e) {
//         offerEventStatus.checkout_status = e;
//     }
//     function l() {
//         var e = !0,
//             t = !1,
//             n = void 0;
//         try {
//             for (var i, a = eventData[Symbol.iterator](); !(e = (i = a.next()).done); e = !0) {
//                 var o = i.value;
//                 eventData.hasOwnProperty(o) && o.upsell_seen === !0 && ((upsellsVisible = !0), (o.upsell_seen = !1));
//             }
//         } catch (r) {
//             (t = !0), (n = r);
//         } finally {
//             try {
//                 !e && a["return"] && a["return"]();
//             } finally {
//                 if (t) throw n;
//             }
//         }
//         f.is(":visible") && f.slideUp(), S.is(":visible") && S.slideUp(), S.length && S.css("height", "auto"), (E = 0), (eventData = offerEventData), (offerEventStatus.upsellsRemaining = eventData.length), (I = eventData.length);
//     }
//     function d() {
//         m.slideUp(), h.slideUp(), v.slideUp(), y.slideUp(), b.slideUp();
//         var e = i();
//         (eventData = offerEventData.filter(function (t) {
//             return t.bundle_to_trigger_upsell === e || null === t.bundle_to_trigger_upsell;
//         })),
//             (offerEventStatus.upsellsRemaining = eventData.length);
//         var t = gu_vs.check(),
//             n = q.is(":visible");
//         if (t) return n || q.addClass(p), gu_vs.update(), void r();
//         i();
//         s("bundle_selected"), offerEventStatus.upsellsRemaining > 0 ? a() : c();
//     }
//     function c() {
//         return (
//             !gu_vs.addonCheck() &&
//             void (offerEventStatus.upsellsRemaining > 0
//                 ? a()
//                 : (o("hide"),
//                     f.slideDown("slow"),
//                     s("checkout_initiated"),
//                     setTimeout(function () {
//                         t(f);
//                     }, 1e3),
//                     $(C).css({ opacity: "0", "pointer-events": "none" }),
//                     gu_upsell_checkout.displayCheckoutUpsells(),
//                     gu_checkout.startCheckout(!0),
//                     gu_events.fireAndLogEvent(gu_events.eventList.checkoutInitiated)))
//         );
//     }
//     function u() {
//         k.on("click", function () {
//             k.toggleClass("active"), w.scrollTop(0);
//         }),
//             $(".cta-button").on("click", function () {
//                 console.log("did it click");
//                 var e = $(this);
//                 finduserselected = e.parent().parent().attr("id");
//             }),
//             $("#offer .bundle, .additional-offer .bundle").click(function () {
//                 var e = $(this);
//                 finduserselected = e[0].id;
//             }),
//             x.on("click", function (e) {
//                 if ((e.preventDefault(), gu_offer_events.upsellDisplay.isShown())) c();
//                 else if ("" !== i()) {
//                     var t = $('.bundle[data-slug="' + i() + '"]');
//                     "fixed" === $(t).data("bundle-qty") || gu_vs.check() ? c() : $(".cta-button", $(t)).click();
//                 } else c();
//             }),
//             window.addEventListener(
//                 "orientationchange",
//                 function () {
//                     $("#checkout").is(":visible") &&
//                     setTimeout(function () {
//                         gu_offer_events.scrollTo($("#checkout"));
//                     }, 300);
//                 },
//                 !1
//             );
//     }
//     var p = "bundle-extra",
//         f = $("#checkout"),
//         g = $("#total-bar"),
//         _ = g.find(".price"),
//         h = $("#footer-badges"),
//         v = $(".guarantee.mobile-only"),
//         m = $("#faq"),
//         y = $("#footer"),
//         b = $(".additional-footer-message"),
//         k = f.find(".mobile-nav"),
//         w = f.find(".details .content"),
//         x = g.find(".checkout"),
//         C = "#yoHolder",
//         S = $(".upsell"),
//         E = 0,
//         q = $("#variant-selector"),
//         I = eventData.length,
//         O = new e();
//     return { init: u, startExtras: d, checkout: c, scrollTo: t, checkForExtras: n, showTotalbar: o, updateTotalbarTotal: r, showNextHiddenExtra: a, upsellStatusReset: l, getCurrentBundle: i, upsellDisplay: O };
// })();
// gu_offer_events.init();
// var currentUrl = window.location.href,
//     offer = "#offer",
//     bundleClass = ".bundle",
//     bundles = offer + " " + bundleClass,
//     extras = ".extras",
//     quantity_el = ".qty",
//     ribbon_el = ".ribbon",
//     ribbonTxt_el = "h6",
//     qtyActivator = ".qtyActivator",
//     selectedClass = "selected",
//     checkmark = ".checkbox input",
//     bundleData = componentOffer.bundle_info,
//     bundleNumber = 0;
// window.mobileDevice = (window.innerWidth > 0 ? window.innerWidth : screen.width) <= 767;
// var variant_type = void 0 !== bundleData[0] ? bundleData[0].bundle_object[0].bundle_variant_info.options[0].name : "";
// window.allowMultipleBundles = "upgrade" == variant_type.toLowerCase();
// for (var offers_arr = document.querySelectorAll(bundles), i = 0; i < offers_arr.length; i++) {
//     var offer_id = offers_arr[i].getAttribute("id"),
//         offer_el = document.getElementById("#" + offer_id),
//         selectedBundle = $(".bundle.selected");
//     selectedBundle.length && $(".checkbox input", $(selectedBundle)).prop("checked", !0);
// }
// $(".bundle").each(function () {
//     var e = $(this);
//     if ("undefined" != typeof e.data("chu")) {
//         var t = e.data("chu"),
//             n = gu_qs_to_str(gu_qs);
//         if (t.match("ref=")) {
//             var i = t.split("ref=")[0],
//                 a = encodeURIComponent(window.location);
//             t = i + "ref=" + a;
//         } else t += n;
//         e.bind("click", function () {
//             window.location = t;
//         });
//     }
// });
// var gu_offers = (function () {
//     function e() {
//         if ("en" !== window.gu_language && $(this).is(":visible") && "auto" === $(this).css("clip")) {
//             var e = $(this).children(),
//                 t = parseInt($(this).css("font-size"));
//             "" === $(this).attr("data-translation-textsizer")
//                 ? (0 === e.length && ($(this).wrapInner("<span></span>"), (e = $("span", $(this)))), t !== parseInt($(e).css("font-size")) && $(e).css("font-size", t + "px"), $(this).attr("data-translation-textsizer", t))
//                 : t > parseInt($(e).css("font-size")) && ($(e).css("font-size", t + "px"), $(this).attr("data-translation-textsizer", t));
//             var n = 0;
//             "none" !== $(this).css("transform") && (n = $(this).height() * (window.innerWidth >= 768 ? 2 : 2.25) + 2);
//             var i = $(this).width() - n,
//                 a = parseInt($(this).attr("data-translation-textsizer"));
//             $(e).css("font-size", a + "px");
//             for (var o = $(e).width(), r = 1; o > i && r < 10; ) (a = parseInt($(e).css("font-size"))), $(e).css("font-size", a - r + "px"), (o = $(e).width()), (i = $(this).width() - n), r++;
//         }
//     }
//     function t(e) {
//         bundleData.filter(function (t, n) {
//             return t.bundle_slug === e && (bundleNumber = n), bundleNumber;
//         });
//     }
//     function n(e) {
//         var t = $(bundles + ".selected").data("slug"),
//             n = $("#offer").data("title"),
//             i = $(bundles + ".selected").attr("data-bundle-qty"),
//             a = $("#offer .bundle.selected").data("index");
//         if (void 0 === a) return !1;
//         var o = bundleData[a - 1].bundle_object,
//             r = a,
//             l = o[0].bundle_variant_info.id;
//         s.length > 0 &&
//         ($.each(s, function (e, t) {
//             gu_checkout.removeProduct(t);
//         }),
//             (s = []));
//         var d = [];
//         (d = "undefined" != typeof discount_bundle_object ? o.concat(discount_bundle_object) : o),
//             $.each(d, function (e, a) {
//                 if (a.bundle_variant_info.variants.length > 1) return void console.log("Product has variants");
//                 var o = "fixed" != i ? $(bundles + "." + selectedClass + " " + quantity_el).text() : 1,
//                     c = a.discount > 0;
//                 if (~i.indexOf("conditional")) {
//                     var u = i.split("-")[1];
//                     if (o > u) {
//                         if (d.length > 1)
//                             if (c) {
//                                 if (l != a.pid) return;
//                                 o -= u;
//                             } else o = u;
//                     } else if (c) return;
//                 }
//                 var p = {
//                     product_id: a.bundle_variant_info.variants[0].product_id,
//                     variant_id: a.bundle_variant_info.variants[0].id,
//                     name: a.bundle_variant_info.title,
//                     price: a.bundle_variant_info.variants[0].price,
//                     qty: a.qty * o,
//                     weight: a.bundle_variant_info.weight + a.bundle_variant_info.weight_unit,
//                     img: a.bundle_variant_info.images[0] ? a.bundle_variant_info.images[0].src : "/wp-content/themes/giddyupio-prototype/images/image-placeholder.png",
//                     sku: a.bundle_variant_info.variants[0].sku,
//                     tags: gu_products.getPriceInfoForProduct(a.bundle_variant_info.variants[0].product_id),
//                     bundle_name: n,
//                     bundle_id: t,
//                     bundle_position: r,
//                     type: "bundle",
//                 };
//                 (null !== p.product_id && "" !== p.product_id) ||
//                 (console.log("product data came back null"),
//                     window._guLogger.error("CODE RED: Shopify Product Error. Product ID not found in Shopify store.", Error("Product ID not found"), {
//                         shopifyDomain: gu_shopify_domain,
//                         severity: "critical",
//                         bundle_id: t,
//                         variants: a.bundle_variant_info.variants[0],
//                     })),
//                 (null !== p.variant_id && "" !== p.variant_id) ||
//                 (console.log("variant data came back null"),
//                     window._guLogger.error("CODE RED: Shopify Variant Error. ShopifyData Product ID not found in Shopify store.", Error("Product ID not found"), {
//                         shopifyDomain: gu_shopify_domain,
//                         severity: "critical",
//                         bundle_id: t,
//                         variants: a.bundle_variant_info.variants[0],
//                     }));
//                 var f = 0,
//                     g = "";
//                 gu_checkout.cart.forEach(function (e, t) {
//                     p.product_id === e.product_id && ((f = e.qty + 1), (g = e.upi));
//                 });
//                 try {
//                     if (0 == f) {
//                         var _ = gu_checkout.addProduct(p);
//                         s.push(_);
//                     } else (p.qty = f), gu_checkout.updateProduct(g, p);
//                 } catch (h) {
//                     console.error("Failure to add or update cart in offer \r\n", h);
//                 }
//             }),
//         e && gu_checkout.startCheckout(),
//             gu_events.fireAndLogEvent(gu_events.eventList.bundleSelected);
//     }
//     function i(e) {
//         var t = $(e.currentTarget),
//             i = $(e.target).closest(".checkout").length,
//             o = $(e.target).closest(".next").length,
//             r = $(t).attr("data-index"),
//             s = $(t).data("bundle-qty"),
//             l = $(e.target).closest("[data-quantify]").length,
//             d = ($(".qty", $(t)).text(), !(!i && !o && "fixed" != s));
//         $(e.target).closest(".no-checkout").length && (d = !1),
//             bundleData.forEach(function (e) {
//                 e.hasOwnProperty("selected_bundle") && delete e.selected_bundle;
//             }),
//             window.allowMultipleBundles
//                 ? i || l
//                 ? $(bundles).each(function () {
//                     if ($(this).hasClass("selected") || 0 !== parseInt($(".qty", $(this)).text())) {
//                         $(this).addClass("selected");
//                         var e = $(this).data("slug"),
//                             t = bundleData.find(function (t, n) {
//                                 if (t.bundle_slug === e) return (t.selected_bundle = !0), !0;
//                             });
//                         void 0 === t && console.error("Qty selector: Not able to select bundle");
//                     }
//                 })
//                 : (0 === parseInt($(".qty", $(t)).text()) && ($(".qty", $(t)).text("1"), (d = !0)),
//                     $(bundles).each(function () {
//                         if (0 !== parseInt($(".qty", $(this)).text())) {
//                             $(this).addClass("selected");
//                             var e = $(this).data("slug"),
//                                 t = bundleData.find(function (t, n) {
//                                     if (t.bundle_slug === e) return (t.selected_bundle = !0), !0;
//                                 });
//                             void 0 === t && console.error("Qty selector: Not able to select bundle");
//                         }
//                     }))
//                 : (bundleData[r - 1].selected_bundle = !0),
//             d ? (a($(t)), n(!0)) : mobileDevice && (a($(t)), n(!1)),
//             gu_offer_events.updateTotalbarTotal();
//     }
//     function a(e) {
//         if (window.allowMultipleBundles) {
//             var t = $(".bundle-qty-selector", $(e));
//             if (t.length) {
//                 var n = parseInt($(t).data("start-qty")),
//                     i = parseInt($(".qty", $(t)).text());
//                 i <= n ? (e.removeClass("author-selected"), e.removeClass(selectedClass), $(checkmark, $(e)).prop("checked", !1)) : (e.addClass(selectedClass), $(checkmark, $(e)).prop("checked", !0));
//             }
//         } else e.hasClass(selectedClass) || ($(bundles).removeClass("author-selected"), $(bundles).removeClass(selectedClass), $(checkmark).prop("checked", !1), e.addClass(selectedClass), $(checkmark, $(e)).prop("checked", !0));
//     }
//     function o(e) {
//         var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
//             n = $(e).hasClass(bundleClass) ? e : $(e.currentTarget).closest(bundleClass),
//             i = $(".bundle-qty-selector", $(n)),
//             o = parseInt($(i).data("start-qty")),
//             r = null != t ? t : $(e.currentTarget).data("quantify"),
//             s = $(".qty", $(i)),
//             l = Math.max(0 == o ? 0 : 1, parseInt($(s).text()) + parseInt(r));
//         $(s).text(l).trigger("change"), 0 == o && (l > 0 ? $(".checkout.visually-hidden", $(n)).trigger("click") : (a($(n)), gu_vs.check() && gu_vs.update()));
//     }
//     function r() {
//         !(function () {
//             $(".hidden").hide(),
//                 $(bundles).each(function () {
//                     if (this.classList.contains("selected")) {
//                         var e = this.getAttribute("data-index");
//                         bundleData[e - 1].selected_bundle = !0;
//                     }
//                 });
//         })(),
//             $(window)
//                 .on("load", function () {
//                     $("[data-translation-textsizer]").each(e);
//                 })
//                 .on("resize", function () {
//                     clearTimeout(window.resizedFinished),
//                         (window.resizedFinished = setTimeout(function () {
//                             $("[data-translation-textsizer]").each(e);
//                         }, 100));
//                 }),
//             $(document)
//                 .on("click", ".cta.checkout.mobile, .cta.next.mobile", function (e) {
//                     e.preventDefault();
//                     var t = document.querySelector(".bundle.selected");
//                     $(".cta-button", $(t)).click(), $(this).hide();
//                 })
//                 .on("click", bundles, function (e) {
//                     e.preventDefault(), i(e);
//                 })
//                 .on("click", "[data-quantify]", function (e) {
//                     o(e), window.allowMultipleBundles && i(e);
//                 });
//     }
//     var s = ($("#checkout"), $("#chat-widget-container"), $("#footer"), []);
//     return (
//         (function () {
//             var e = $("#google-translate");
//             e.length &&
//             setTimeout(function () {
//                 $(".goog-logo-link", e).removeAttr("href");
//             }, 1e3);
//         })(),
//             { init: r, getActiveBundle: t }
//     );
// })();
// gu_offers.init();
// var gu_upsell_checkout = (function () {
//     function e() {
//         t(),
//             $(".inline-upsell-checkout").each(function () {
//                 var e = $(this).data("related-bundle");
//                 $(".inlineUpsellCheck", $(this)).prop("checked", !1), e !== gu_offer_events.getCurrentBundle() && "all" !== e ? $(this).attr("data-upsell-enabled", !1) : $(this).attr("data-upsell-enabled", !0);
//             });
//     }
//     function t() {
//         r.length > 0 &&
//         ($.each(r, function (e, t) {
//             gu_checkout.removeProduct(t, !0);
//         }),
//             (r = []),
//             gu_payments.updateOrder(),
//             gu_offer_events.updateTotalbarTotal());
//     }
//     function n() {
//         var e = $(this).closest(".inline-upsell-checkout").data("upsell-enabled");
//         if (e) {
//             var t = $(this).val().split(",");
//             $(this).is(":checked") === !0
//                 ? $.each(s, function (e, n) {
//                     var i = "",
//                         o = n[0].variants[0].product_id,
//                         s = n[0].variants[0].sku,
//                         d = n[0].variants[0].price,
//                         c = "",
//                         u = n[0].title,
//                         p = n[0].options[0].name,
//                         f = "",
//                         g = "",
//                         _ = "";
//                     if (~t.indexOf(o.toString())) {
//                         (i = n[0].variants.length > 1 && "variety" !== variantIndex ? n[0].variants[variantIndex].id : n[0].variants[0].id),
//                             (c = n[0].images.length > 1 && "variety" !== gu_vs.data() ? n[0].images[variantIndex].src : n[0].images[0].src),
//                             gu_vs.check() === !1
//                                 ? (_ = u)
//                                 : ((f = gu_vs.data()),
//                                     (g = f.toLowerCase().replace(/\b[a-z]/g, function (e) {
//                                         return e.toUpperCase();
//                                     })),
//                                     (_ = "Color" === p ? u + " - " + g : u));
//                         var h = { variant_id: i, product_id: o, bundle_name: a, bundle_id: l, name: _, price: d, qty: 1, img: c, sku: s, tags: gu_products.getPriceInfoForProduct(o), type: "inline checkout upsell" },
//                             v = gu_checkout.addProduct(h, !0);
//                         r.push(v);
//                     }
//                 })
//                 : r.length > 0 &&
//                 gu_checkout.cart.forEach(function (e, n) {
//                     ~t.indexOf(e.product_id.toString()) &&
//                     (gu_checkout.removeProduct(e.upi, !0),
//                         (r = r.filter(function (t) {
//                             return t !== e.upi;
//                         })));
//                 }),
//                 gu_payments.updateOrder(),
//                 gu_offer_events.updateTotalbarTotal();
//         }
//     }
//     function i() {
//         $(document).on("click", ".inlineUpsellCheck", n);
//     }
//     var a = (upsellCheckoutData.upsell_inline_info, upsellCheckoutData.upsell_popup_info, upsellCheckoutData.upsell_inline_name, upsellCheckoutData.upsell_popup_name),
//         o = upsellCheckoutData.upsell_inline_info,
//         r = (upsellCheckoutData.upsell_popup_info, []),
//         s = o,
//         l = $(".bundle.selected").data("slug");
//     return { init: i, clearUpsellsFromCart: t, displayCheckoutUpsells: e };
// })();
// gu_upsell_checkout.init();
// var gu_upsells = (function () {
//     function e() {
//         componentOffer.bundle_info.forEach(function (e) {
//             e.bundle_shipping.hasOwnProperty("domestic_shipping_default") && ((e.bundle_shipping.domestic_shipping = Object.assign({}, e.bundle_shipping.domestic_shipping_default)), delete e.bundle_shipping.domestic_shipping_default),
//             e.bundle_shipping.hasOwnProperty("international_shipping_default") &&
//             ((e.bundle_shipping.international_shipping = Object.assign({}, e.bundle_shipping.international_shipping_default)), delete e.bundle_shipping.international_shipping_default);
//         }),
//             offerEventData.forEach(function (e) {
//                 e.hasOwnProperty("upsell_seen") && delete e.upsell_seen;
//             });
//     }
//     function t(e, t) {
//         var n = !(arguments.length > 2 && void 0 !== arguments[2]) || arguments[2],
//             i = componentOffer.bundle_info[e].bundle_shipping,
//             a = window.offerEventData;
//         if (n) {
//             i.hasOwnProperty("domestic_shipping_default") || (i.domestic_shipping_default = Object.assign({}, i.domestic_shipping)),
//             i.hasOwnProperty("international_shipping_default") || (i.international_shipping_default = Object.assign({}, i.international_shipping));
//             var o = !0,
//                 r = !1,
//                 s = void 0;
//             try {
//                 for (var l, d = c[Symbol.iterator](); !(o = (l = d.next()).done); o = !0) {
//                     var p = l.value;
//                     p[0].upsell_slug === t && (p[0].free_domestic_shipping === !0 && (y = !0), p[0].free_international_shipping === !0 && (b = !0));
//                 }
//             } catch (f) {
//                 (r = !0), (s = f);
//             } finally {
//                 try {
//                     !o && d["return"] && d["return"]();
//                 } finally {
//                     if (r) throw s;
//                 }
//             }
//             var g = !0,
//                 _ = !1,
//                 h = void 0;
//             try {
//                 for (var v, m = u[Symbol.iterator](); !(g = (v = m.next()).done); g = !0) {
//                     var k = v.value;
//                     k[0].upsell_slug === t && (k[0].free_domestic_shipping === !0 && (y = !0), k[0].free_international_shipping === !0 && (b = !0));
//                 }
//             } catch (f) {
//                 (_ = !0), (h = f);
//             } finally {
//                 try {
//                     !g && m["return"] && m["return"]();
//                 } finally {
//                     if (_) throw h;
//                 }
//             }
//             if (y) {
//                 (i.domestic_shipping.custom_default_rate_name = "Free Shipping!"), (i.domestic_shipping.default_domestic_shipping_rate = "0.00"), (i.domestic_shipping.default_expedited_rate = "0.00");
//                 var $ = !0,
//                     w = !1,
//                     x = void 0;
//                 try {
//                     for (var C, S = a[Symbol.iterator](); !($ = (C = S.next()).done); $ = !0) {
//                         var E = C.value;
//                         E.upsell_name === t && (E.triggerFreeDomesticShipping = !0);
//                     }
//                 } catch (f) {
//                     (w = !0), (x = f);
//                 } finally {
//                     try {
//                         !$ && S["return"] && S["return"]();
//                     } finally {
//                         if (w) throw x;
//                     }
//                 }
//             }
//             if (b) {
//                 (i.international_shipping.custom_default_intl_rate_name = "Free International Shipping!"),
//                     (i.international_shipping.default_intl_shipping_rate = "0.00"),
//                     (i.international_shipping.default_international_expedited_rate = "0.00");
//                 var q = !0,
//                     I = !1,
//                     O = void 0;
//                 try {
//                     for (var D, P = a[Symbol.iterator](); !(q = (D = P.next()).done); q = !0) {
//                         var F = D.value;
//                         F.upsell_name === t && (F.triggerFreeIntlShipping = !0);
//                     }
//                 } catch (f) {
//                     (I = !0), (O = f);
//                 } finally {
//                     try {
//                         !q && P["return"] && P["return"]();
//                     } finally {
//                         if (I) throw O;
//                     }
//                 }
//             }
//         } else {
//             i.hasOwnProperty("domestic_shipping_default") && ((i.domestic_shipping = Object.assign({}, i.domestic_shipping_default)), delete i.domestic_shipping_default),
//             i.hasOwnProperty("international_shipping_default") && ((i.international_shipping = Object.assign({}, i.international_shipping_default)), delete i.international_shipping_default);
//             var L = !0,
//                 T = !1,
//                 M = void 0;
//             try {
//                 for (var R, A = a[Symbol.iterator](); !(L = (R = A.next()).done); L = !0) {
//                     var B = R.value;
//                     B.hasOwnProperty("triggerFreeDomesticShipping") && delete B.triggerFreeDomesticShipping, B.hasOwnProperty("triggerFreeIntlShipping") && delete B.triggerFreeIntlShipping;
//                 }
//             } catch (f) {
//                 (T = !0), (M = f);
//             } finally {
//                 try {
//                     !L && A["return"] && A["return"]();
//                 } finally {
//                     if (T) throw M;
//                 }
//             }
//         }
//     }
//     function n(e) {
//         var n = !(arguments.length > 1 && void 0 !== arguments[1]) || arguments[1],
//             i = $("section#variant-selector .colors .active").data("index"),
//             a = void 0,
//             o = void 0;
//         a = n ? c : u;
//         var r = !0,
//             s = !1,
//             l = void 0;
//         try {
//             for (var p, _ = a[Symbol.iterator](); !(r = (p = _.next()).done); r = !0) {
//                 var h = p.value;
//                 h[0].upsell_slug === e && (o = h);
//             }
//         } catch (v) {
//             (s = !0), (l = v);
//         } finally {
//             try {
//                 !r && _["return"] && _["return"]();
//             } finally {
//                 if (s) throw l;
//             }
//         }
//         var m = !0,
//             y = !1,
//             b = void 0;
//         try {
//             for (var k, w = offerEventData[Symbol.iterator](); !(m = (k = w.next()).done); m = !0) {
//                 var x = k.value;
//                 x.upsell_name === e && (x.upsell_taken = !0);
//             }
//         } catch (v) {
//             (y = !0), (b = v);
//         } finally {
//             try {
//                 !m && w["return"] && w["return"]();
//             } finally {
//                 if (y) throw b;
//             }
//         }
//         $.each(o, function (a, r) {
//             var s = "",
//                 l = "";
//             try {
//                 r.variants.length > 1 && "variety" !== i ? ((s = r.variants[i].id), (l = r.title.split("-")[0])) : ((s = r.variants[0].id), (l = r.title));
//             } catch (c) {
//                 console.error("Bundle products may need to be refreshed \n\r", c);
//             }
//             t($(".bundle.selected").data("index") - 1, e);
//             var u = r.variants[0].product_id,
//                 p = r.variants[0].sku,
//                 _ = r.variants[0].price;
//             void 0 === h && (h = "");
//             var h = "";
//             r.images.length > 0
//                 ? "variety" !== gu_vs.data() && null !== gu_vs.data()
//                 ? $.each(r.images, function (e, t) {
//                     var n = "";
//                     0 === t.variant_ids.length ? ((n = r.variants[e].product_id), t.product_id === n && (h = t.src)) : ((n = r.variants[i].image_id), t.id === n && (h = t.src));
//                 })
//                 : (h = r.images[0].src)
//                 : (h = "/wp-content/themes/giddyupio-prototype/images/image-placeholder.png");
//             var v = r.title,
//                 m = r.options[0].name,
//                 y = "",
//                 b = "",
//                 k = "",
//                 w = $("#" + e + '.upsell.upsell-container input[name="quantity"]').val();
//             if (gu_vs.check() === !1 || null === gu_vs.data()) k = v;
//             else if (
//                 ((y = gu_vs.data()),
//                     (b = y.toLowerCase().replace(/\b[a-z]/g, function (e) {
//                         return e.toUpperCase();
//                     })),
//                 "Color" === m && r.variants.length > 1)
//             ) {
//                 if (((k = v), "variety" === gu_vs.data())) {
//                     var x = r.variants[0].title.split("-")[0];
//                     b = x;
//                 }
//             } else (k = v), (b = "");
//             var C = { variant_id: s, product_id: u, bundle_name: d, bundle_id: e, name: k, subtitle: b, price: _, qty: w, img: h, sku: p, tags: gu_products.getPriceInfoForProduct(u), type: "presell" },
//                 S = $("#" + e + ".upsell .qtybox input"),
//                 E = gu_checkout.addProduct(C);
//             (o[0].upi = E), n ? f.push(E) : g.push(E), gu_checkout.updateProduct(E, C), (C.qty = S.val());
//         });
//     }
//     function i(e) {
//         var t = void 0;
//         if ($(".upsell").length > 0) {
//             var n = !0,
//                 i = !1,
//                 a = void 0;
//             try {
//                 for (var o, r = c[Symbol.iterator](); !(n = (o = r.next()).done); n = !0) {
//                     var s = o.value;
//                     s[0].upsell_slug === e && (t = s);
//                 }
//             } catch (l) {
//                 (i = !0), (a = l);
//             } finally {
//                 try {
//                     !n && r["return"] && r["return"]();
//                 } finally {
//                     if (i) throw a;
//                 }
//             }
//         }
//         if (f.length > 0) {
//             var d = t[0].upi;
//             f.indexOf(d) !== -1 && gu_checkout.removeProduct(d, !1);
//         }
//         if (g.length > 0) {
//             var u = t[0].upi;
//             g.indexOf(u) !== -1 && gu_checkout.removeProduct(u, !1);
//         }
//         gu_offer_events.updateTotalbarTotal();
//     }
//     function a() {
//         $(".upsell").css("height", "auto"),
//             $(".upsell").hide(),
//             gu_upsell_checkout.clearUpsellsFromCart(),
//         g.length > 0 &&
//         ($.each(g, function (e, t) {
//             gu_checkout.removeProduct(t, !0);
//         }),
//             (g = [])),
//         f.length > 0 &&
//         ($.each(f, function (e, t) {
//             gu_checkout.removeProduct(t, !0);
//         }),
//             (f = [])),
//             gu_offer_events.upsellDisplay.clear(),
//             gu_offer_events.upsellStatusReset(),
//             gu_offer_events.updateTotalbarTotal();
//     }
//     function o(e) {
//         var t = $("#" + e + " .button-container"),
//             n = t.find(".original-button-text").text(),
//             i = t.find(".button.already-opened .original-button");
//         t.find(".button").show(),
//             i.text(n),
//             $('div[class~="upsell-popup"]').modal("hide"),
//         i.length && (i.removeClass(".already-opened"), i.find(".original-button").text(n), t.parent().find(".remove-upsell").hide(), t.parent().find(".cancel-upsell").show()),
//             gu_events.fireAndLogEvent(gu_events.eventList.upsellReject),
//             h.hide(),
//             $("#" + e + " .button-container .button").show();
//     }
//     function r(e, t) {
//         var n = $("#" + e + ' input[name="quantity"]'),
//             a = n.val();
//         "add" === t ? a++ : "sub" === t && a--, a > 0 && n.val(a).trigger("change"), 0 === a && (i(e), o(e));
//     }
//     function s() {
//         var e = $(this).parent().find(".button-container").find(".original-button-text").text(),
//             t = $(this).parent().find(".button-container").find(".button .already-opened .original-button");
//         t.text(e), $('div[class~="upsell-popup"]').modal("hide"), t.length && (t.removeClass(".already-opened"), t.find(".original-button").text(e));
//     }
//     function l() {
//         _.hide(), h.hide();
//         var o = $(".upsell-popup");
//         $(".upsell .upsell-info").on("click", ".button-container .button", function () {
//             var e = $(this),
//                 t = e.find(".original-button"),
//                 i = e.closest(".bundle-extra").data("slug"),
//                 a = e.parent().parent().find(".remove-upsell"),
//                 o = e.parent().parent().find(".cancel-upsell"),
//                 r = e.parent().parent().find(".qtybox"),
//                 s = e.parent().parent().find(".qtybox.qtynew");
//             (v = $("#" + i + '.upsell-container input[name="quantity"]').val()),
//                 (p = e.find(".original-button-text").text()),
//                 e.addClass("already-opened"),
//                 t.text(guSubstituteString("Added!")),
//                 e.delay(300).fadeOut("slow"),
//                 a.show(),
//                 o.hide(),
//             s.length > -1 && r.hide(),
//                 s.hasClass("min-qty-disc") ? $("#" + i + '.upsell.upsell-container input[name="quantity"]').val(v) : $("#" + i + '.upsell.upsell-container input[name="quantity"]').val("1"),
//                 n(i),
//                 e.parent().parent().find(".qtybox.qtynew").length > 0 ? r.show() : gu_offer_events.checkout(),
//                 gu_offer_events.updateTotalbarTotal(),
//                 gu_events.fireAndLogEvent(gu_events.eventList.yesInlineUpsell);
//         }),
//             o.on("click", ".button-container .button", function () {
//                 var e = $(this);
//                 p = e.text();
//                 var t = e.closest(".bundle-extra").data("slug").toString(),
//                     i = u,
//                     a = void 0,
//                     o = !0,
//                     r = !1,
//                     s = void 0;
//                 try {
//                     for (var l, d = i[Symbol.iterator](); !(o = (l = d.next()).done); o = !0) {
//                         var c = l.value;
//                         c[0].upsell_slug === t && (a = c);
//                     }
//                 } catch (f) {
//                     (r = !0), (s = f);
//                 } finally {
//                     try {
//                         !o && d["return"] && d["return"]();
//                     } finally {
//                         if (r) throw s;
//                     }
//                 }
//                 n(t, !1),
//                     offerEventStatus.upsellsRemaining > 0 ? (gu_offer_events.updateTotalbarTotal(), gu_offer_events.showNextHiddenExtra()) : gu_offer_events.checkout(),
//                     gu_events.fireAndLogEvent(gu_events.eventList.presellPopupAccept),
//                     $('div[class~="upsell-popup"]').modal("hide");
//             }),
//             o.on("click", ".popup-content p.cancel-upsell", function () {
//                 gu_events.fireAndLogEvent(gu_events.eventList.presellPopupReject);
//             }),
//             m.on("click", ".cancel-upsell", function (e) {
//                 e.preventDefault(), s.call(this), gu_events.fireAndLogEvent(gu_events.eventList.noInlineUpsell), gu_offer_events.checkout();
//             }),
//             m.on("click", ".upsell .upsell-info .remove-upsell", function () {
//                 var e = $(this),
//                     n = e.parent().find(".button-container"),
//                     a = e.parent().find(".cancel-upsell"),
//                     o = n.find(".original-button-text").text(),
//                     r = e.closest(".bundle-extra").data("slug"),
//                     s = e.parent().parent().find(".qtybox");
//                 n.find(".button").show(),
//                     n.find(".already-opened").find(".original-button").text(o),
//                     e.hide(),
//                     a.show(),
//                     gu_events.fireAndLogEvent(gu_events.eventList.removeInlineUpsell),
//                 $(".already-opened").length > 0 && ($(".min-qty-disc").length > 0 ? $("#" + r + ' .upsell.upsell-container input[name="quantity"]').val(v) : $("#" + r + ' .upsell.upsell-container input[name="quantity"]').val("1")),
//                 $("#" + r + " .qtybox .qtynew").length > -1 && s.hide(),
//                     i(r);
//                 var l = !0,
//                     d = !1,
//                     c = void 0;
//                 try {
//                     for (var u, p = offerEventData[Symbol.iterator](); !(l = (u = p.next()).done); l = !0) {
//                         var f = u.value;
//                         f.upsell_name === r && delete f.upsell_taken;
//                     }
//                 } catch (g) {
//                     (d = !0), (c = g);
//                 } finally {
//                     try {
//                         !l && p["return"] && p["return"]();
//                     } finally {
//                         if (d) throw c;
//                     }
//                 }
//                 t($(".bundle.selected").data("index") - 1, r, !1), $("#checkout").is(":visible") && gu_checkout.startCheckout(!0);
//             }),
//             $('div[class~="upsell-popup"] .modal-content .close').click(function () {
//                 gu_offer_events.checkout(), $(".upsell-popup").modal("hide");
//             }),
//             $(document)
//                 .on("click", ".upsell .qtybox .plus, .upsell .qtybox .minus", function (e) {
//                     e.preventDefault();
//                     var t = $(this).closest(".bundle-extra").data("slug");
//                     $(this).hasClass("plus") ? r(t, "add") : $(this).hasClass("minus") && r(t, "sub");
//                 })
//                 .on("change", '.upsell .qtybox input[name="quantity"]', function (e) {
//                     var t = $(this).closest(".bundle-extra").data("slug"),
//                         n = $(this).val(),
//                         i = void 0,
//                         a = !0,
//                         o = !1,
//                         r = void 0;
//                     try {
//                         for (var s, l = c[Symbol.iterator](); !(a = (s = l.next()).done); a = !0) {
//                             var d = s.value;
//                             d[0].upsell_slug === t && (i = d);
//                         }
//                     } catch (u) {
//                         (o = !0), (r = u);
//                     } finally {
//                         try {
//                             !a && l["return"] && l["return"]();
//                         } finally {
//                             if (o) throw r;
//                         }
//                     }
//                     var p = { variant_id: i[0].variants[0].id, product_id: i[0].variants[0].product_id, price: i[0].variants[0].price, qty: n };
//                     gu_checkout.updateProduct(i[0].upi, p), gu_offer_events.updateTotalbarTotal();
//                 }),
//             $(document).on("click", "#variant-selector .colors", function (t) {
//                 $(".remove-upsell").click(),
//                     a(),
//                     e(),
//                 g.length > 0 &&
//                 ($.each(g, function (e, t) {
//                     gu_checkout.removeProduct(t, !0);
//                 }),
//                     (g = [])),
//                     gu_offer_events.upsellStatusReset(),
//                     gu_offer_events.updateTotalbarTotal();
//             }),
//             $(".bundle").on("click", function (t) {
//                 $("#checkout").hide();
//                 var n = gu_offer_events.upsellDisplay.isShown(),
//                     i = 0 != $(".bundle-qty-selector", $(this)).data("start-qty"),
//                     o = "fixed" === $(this).data("bundle-qty"),
//                     r = $(t.target).closest("[data-quantify]").length;
//                 n && !r && ($(".remove-upsell").click(), a(), e()), gu_vs.check() && (o || i) && gu_offer_events.startExtras(), gu_offer_events.updateTotalbarTotal();
//             });
//     }
//     var d = upsellData.upsell_inline_name,
//         c = (upsellData.upsell_popup_name, upsellData.upsell_inline_info),
//         u = upsellData.upsell_popup_info,
//         p = void 0,
//         f = [],
//         g = [],
//         _ = $(".upsell .upsell-info .remove-upsell"),
//         h = $(".upsell .upsell-info .qtybox"),
//         v = void 0,
//         m = $(".offer-section, .multi-offer-upsell-section"),
//         y = !1,
//         b = !1;
//     return { init: l };
// })();
// document.addEventListener("DOMContentLoaded", function () {
//     gu_upsells.init();
// });
// var _slicedToArray = (function () {
//         function e(e, t) {
//             var n = [],
//                 i = !0,
//                 a = !1,
//                 o = void 0;
//             try {
//                 for (var r, s = e[Symbol.iterator](); !(i = (r = s.next()).done) && (n.push(r.value), !t || n.length !== t); i = !0);
//             } catch (l) {
//                 (a = !0), (o = l);
//             } finally {
//                 try {
//                     !i && s["return"] && s["return"]();
//                 } finally {
//                     if (a) throw o;
//                 }
//             }
//             return n;
//         }
//         return function (t, n) {
//             if (Array.isArray(t)) return t;
//             if (Symbol.iterator in Object(t)) return e(t, n);
//             throw new TypeError("Invalid attempt to destructure non-iterable instance");
//         };
//     })(),
//     gu_vs = (function () {
//         function ViewModel() {
//             var e = this;
//             (e.data = void 0 !== multi_bundleData ? multi_bundleData : componentOffer.bundle_info),
//             void 0 !== e.data[0] &&
//             ((e.common_data = e.data[0].bundle_object[0]),
//                 (e.discount_bundles = "undefined" != typeof discount_bundle_object ? discount_bundle_object : []),
//                 (e.addon_bundles = "undefined" != typeof addon_bundle_object ? addon_bundle_object : []),
//                 (e.bundled_product_ids = []),
//                 (e.module = "#variant-selector"),
//                 (e.display = { initialized: !1, ready: !1, title: e.common_data.bundle_variant_info.title, country: gu_country }),
//                 (e.ad_hoc_logic = { PSM: "ThePhotoStick Checkout" }),
//                 (e.offer = { vendor: e.common_data.bundle_variant_info.vendor, allow_multiple_bundles: !1 }),
//                 (e.variants = {
//                     title: e.common_data.bundle_variant_info.title,
//                     type: e.common_data.bundle_variant_info.options[0].name.toLowerCase(),
//                     apply_to_all: !0,
//                     addon: !1,
//                     options: e.common_data.bundle_variant_info.variants,
//                     images: e.common_data.bundle_variant_info.images,
//                     tags: e.common_data.bundle_variant_info.tags,
//                     excluded: window.site_vars.excluded_variants.split(","),
//                     variety_pack: ["color"],
//                     registered_types: ["color", "size", "upgrade"],
//                 }),
//                 (e.variants.count = e.variants.options.length),
//                 (e.sync = function () {
//                     (e.offer.elements = []),
//                         (e.offer.selected = []),
//                         (e.offer.selected_bundles = []),
//                     "upgrade" === e.variants.type &&
//                     ((e.offer.allow_multiple_bundles = !0),
//                         e.data.sort(function (e, t) {
//                             return e.bundle_price > t.bundle_price ? -1 : 1;
//                         })),
//                         e.data.forEach(function (t, n) {
//                             if (void 0 !== e.data[n]) {
//                                 if (((t.bundle_element = $('[data-slug="' + t.bundle_slug + '"')), (t.bundle_price = t.bundle_object[0].bundle_variant_info.variants[0].price), t.selected_bundle)) {
//                                     var i = parseInt($(".qty", $(t.bundle_element)).text());
//                                     (i = isNaN(i) ? 1 : 0 === i ? 1 : i), e.offer.selected.push(i), e.offer.selected_bundles.push(t.bundle_object), (t.selected_qty = i);
//                                 } else e.offer.selected.push(0), (t.selected_qty = 0);
//                                 t.bundle_object.forEach(function (t) {
//                                     ~e.bundled_product_ids.indexOf(t.bundle_variant_info.id) || e.bundled_product_ids.push(t.bundle_variant_info.id);
//                                 });
//                             }
//                         }),
//                         (e.variants.elements = []),
//                         (e.variants.selected = {});
//                     var t = $("[data-variant-selected]").attr("data-variant-selected");
//                     $("[data-variant-index]", $(e.module)).each(function (n) {
//                         e.variants.elements.push($(this)),
//                             n == t
//                                 ? ($(this).addClass("active"), $('input[type="checkbox"]', $(this)).prop("checked", !0), (e.variants.selected.index = t), (e.variants.selected.title = e.variants.options[t].title))
//                                 : ($(this).removeClass("active"), $('input[type="checkbox"]', $(this)).prop("checked", !1));
//                     }),
//                     e.addon_bundles.length &&
//                     ("size" === e.variants.type
//                         ? (e.addon_bundles.forEach(function (t, n) {
//                             ~e.bundled_product_ids.indexOf(parseInt(t.pid)) ? (e.variants.addon = !0) : e.addon_bundles.splice(n, 1);
//                         }),
//                         0 !== e.addon_bundles.length || e.variants.addon || console.error("* Variant Addons: product IDs & variant PIDs have no matching bundles"))
//                         : console.error("* Variant Addons: " + e.variants.type + " variant addons are disabled. Only size variants are supported.")),
//                     "size" === e.variants.type && (e.variants.apply_to_all = !1),
//                     e.display.initialized || e.curateOptions();
//                 }),
//                 (e.isReady = function (t) {
//                     return void 0 === t
//                         ? e.display.ready
//                         : (t
//                             ? e.display.ready ||
//                             (e.enableAdHocLogic("PSM") && "upgrade" === e.variants.type ? (gu_offer_events.showTotalbar("next"), $(e.module).addClass("pending")) : gu_offer_events.showTotalbar(),
//                                 ~e.variants.registered_types.indexOf(e.variants.type) ? $(e.module).attr("data-variant-type", e.variants.type) : $(e.module).attr("data-variant-type", "generic"),
//                                 $(document)
//                                     .on("click", "[data-variant-index]", optionChooser)
//                                     .on("click", "[data-enable-addon]", enableAddon)
//                                     .on("click", "[data-variant-index-remote] input", remoteSelector)
//                                     .on("click", "#total-bar .next", revealVariants),
//                                 (e.display.ready = !0),
//                             e.display.initialized || (e.doPageScripts(), (e.display.initialized = !0)))
//                             : ($(e.module).attr("data-variant-type", ""),
//                                 $(document)
//                                     .off("click", "[data-variant-index]", optionChooser)
//                                     .off("click", "[data-enable-addon]", enableAddon)
//                                     .off("click", "[data-variant-index-remote] input", remoteSelector)
//                                     .off("click", "#total-bar .next", revealVariants),
//                                 (e.display.ready = !1)),
//                             void e.adjustView("top"));
//                 }),
//                 (e.buildDisplay = function () {
//                     return "upgrade" !== e.variants.type || !viewModel.isReady();
//                 }),
//                 (e.isAnyOfferSelected = function () {
//                     var t = e.offer.selected.reduce(function (e, t) {
//                         return e + t;
//                     }, 0);
//                     return 0 != t;
//                 }),
//                 (e.curateOptions = function () {
//                     var t = [];
//                     e.variants.options.forEach(function (n, i) {
//                         ~e.variants.excluded.indexOf(n.id.toString()) || t.push(n);
//                     }),
//                     ~e.variants.variety_pack.indexOf(e.variants.type) && "variety" !== e.variants.options[0].id && t.unshift({ id: "variety", title: "variety" }),
//                         (e.variants.options = t),
//                         (e.variants.count = t.length);
//                 }),
//                 (e.isVariantType = function () {
//                     var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null;
//                     return null != t ? e.variants.type == t : e.variants.type;
//                 }),
//                 (e.selectedVariant = function (t) {
//                     var n = t.bundle_variant_info.variants[e.variants.selected.index],
//                         i = n.image_id,
//                         a = "";
//                     t.bundle_variant_info.images.forEach(function (e) {
//                         e.id == i && void 0 !== e.src && (a = e.src);
//                     }),
//                         "" !== a
//                             ? (n.variant_image = a)
//                             : console.log("%c MISSING PRODUCT IMAGE ", "background: #240100; color: #ef8783; display: block; padding: 10px 5px; border-top: 1px solid #540a04; border-bottom: 1px solid #540a04; ");
//                     var o = t.bundle_variant_info.title;
//                     return void 0 === o && (o = e.variants.title), (n.variant_name = o), n;
//                 }),
//                 (e.getVariantImages = function (t) {
//                     var n = "";
//                     return (
//                         e.variants.images.forEach(function (e) {
//                             ~e.variant_ids.indexOf(t) && void 0 !== e.src && (n = e.src);
//                         }),
//                         "" !== n && n
//                     );
//                 }),
//                 (e.combineDiscountBundlesWith = function (t) {
//                     return e.addon_bundles.length > 0 ? t.concat(e.addon_bundles) : t.concat(e.discount_bundles);
//                 }),
//                 (e.enableAdHocLogic = function (t) {
//                     return e.ad_hoc_logic[t].toLowerCase() === e.offer.vendor.toLowerCase();
//                 }),
//                 (e.doTranslation = function () {
//                     $("[data-translate]").each(function (e) {
//                         var t = $(this).data("translate"),
//                             n = guSubstituteString(t);
//                         $(this).html(n);
//                     });
//                 }),
//                 (e.doPageScripts = function () {
//                     variantPageScripts();
//                 }),
//                 (e.resetPageDisplay = function () {
//                     e.isReady(!1),
//                         $('#main-wrapper > div[style~="display:"], #footer[style~="display:"]').each(function () {
//                             $(this).removeAttr("style");
//                         });
//                 }),
//                 (e.adjustView = function () {
//                     var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : top;
//                     setTimeout(function () {
//                         var n = "scrollBehavior" in document.documentElement.style;
//                         if (n)
//                             switch (t) {
//                                 case "top":
//                                 default:
//                                     document.querySelector(e.module).scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
//                                     break;
//                                 case "center":
//                                     document.querySelector(e.module).scrollIntoView({ behavior: "smooth", block: "center", inline: "nearest" });
//                                     break;
//                                 case "bottom":
//                                     document.querySelector(e.module).scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
//                             }
//                         else {
//                             var i = $(e.module).offset().top,
//                                 a = $(e.module)[0].offsetHeight,
//                                 o = a > window.innerHeight ? a - window.innerHeight : 0,
//                                 r = 500;
//                             "bottom" === t && ((i += o), (r = 200)), $("html, body").stop().animate({ scrollTop: i }, r);
//                         }
//                     }, 300);
//                 }),
//                 (e.resetEvents = function () {}));
//         }
//         function CartController() {
//             var e = this;
//             (e.products = []),
//                 (e.addItem = function (t) {
//                     var n = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
//                         i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "";
//                     if (t.product_id && t.variant_id && t.qty > 0) {
//                         var a = 0,
//                             o = "";
//                         gu_checkout.cart.forEach(function (e, i) {
//                             n ? t.product_id === e.product_id && t.variant_id === e.variant_id && ((a = t.qty + e.qty), (o = e.upi)) : t.product_id === e.product_id && ((a = t.qty), (o = e.upi));
//                         });
//                         try {
//                             if (0 == a) {
//                                 var r = gu_checkout.addProduct(t);
//                                 e.products.push(r);
//                             } else (t.qty = a), gu_checkout.updateProduct(o, t);
//                         } catch (s) {
//                             console.error("Failure to add or update cart \r\n", s);
//                         }
//                         if ((e.updateTotal(), "log" == i)) {
//                             var l = [],
//                                 d = !0,
//                                 c = !1,
//                                 u = void 0;
//                             try {
//                                 for (var p, f = Object.entries(t)[Symbol.iterator](); !(d = (p = f.next()).done); d = !0) {
//                                     var g = _slicedToArray(p.value, 2),
//                                         _ = g[0],
//                                         h = g[1],
//                                         v = { key: _, value: h };
//                                     l.push(v);
//                                 }
//                             } catch (s) {
//                                 (c = !0), (u = s);
//                             } finally {
//                                 try {
//                                     !d && f["return"] && f["return"]();
//                                 } finally {
//                                     if (c) throw u;
//                                 }
//                             }
//                             try {
//                                 console.table(l);
//                             } catch (s) {
//                                 console.info(l);
//                             }
//                             console.log("* Cart: " + gu_checkout.cart.length + " line item(s)", "\r\n", gu_checkout.cart);
//                         }
//                     }
//                 }),
//                 (e.updateItem = function (t, n) {
//                     var i = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "";
//                     try {
//                         gu_checkout.updateProduct(t, n);
//                     } catch (a) {
//                         console.error("Failure to update upi " + t + " in cart \r\n", a);
//                     }
//                     if ((e.updateTotal(), "log" == i)) {
//                         var o = [],
//                             r = !0,
//                             s = !1,
//                             l = void 0;
//                         try {
//                             for (var d, c = Object.entries(n)[Symbol.iterator](); !(r = (d = c.next()).done); r = !0) {
//                                 var u = _slicedToArray(d.value, 2),
//                                     p = u[0],
//                                     f = u[1],
//                                     g = { key: p, value: f };
//                                 o.push(g);
//                             }
//                         } catch (a) {
//                             (s = !0), (l = a);
//                         } finally {
//                             try {
//                                 !r && c["return"] && c["return"]();
//                             } finally {
//                                 if (s) throw l;
//                             }
//                         }
//                         try {
//                             console.table(o);
//                         } catch (a) {
//                             console.info(o);
//                         }
//                         console.log("* Cart: " + gu_checkout.cart.length + " line item(s)", "\r\n", gu_checkout.cart);
//                     }
//                 }),
//                 (e.removeItem = function (t) {
//                     if ("" != t) {
//                         try {
//                             gu_checkout.removeProduct(t),
//                                 (e.products = e.products.filter(function (e) {
//                                     return e != t;
//                                 }));
//                         } catch (n) {
//                             console.error("Failure to remove product " + product_id + " cart using upi " + t + " \r\n", n);
//                         }
//                         e.updateTotal();
//                     }
//                 }),
//                 (e.discardProduct = function (t) {
//                     "" != t &&
//                     gu_checkout.cart.forEach(function (n, i) {
//                         t == n.product_id && e.removeItem(n.upi);
//                     }),
//                         e.updateTotal();
//                 }),
//                 (e.emptyCart = function () {
//                     e.products.forEach(function (e) {
//                         gu_checkout.removeProduct(e);
//                     }),
//                         (e.products = []);
//                 }),
//                 (e.updateTotal = function () {
//                     gu_offer_events.updateTotalbarTotal();
//                 }),
//                 (e.thisProductQty = function (e) {
//                     var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "",
//                         n = 0;
//                     return (
//                         "" != e &&
//                         gu_checkout.cart.forEach(function (i, a) {
//                             e == i.product_id && ("" === t ? (n += i.qty) : t == i.variant_id && (n += i.qty));
//                         }),
//                             n
//                     );
//                 });
//         }
//         function optionBuilder() {
//             if (viewModel.buildDisplay()) {
//                 theCart.emptyCart();
//                 var e = { headline: viewModel.variants.title, variants: [], apply_to_all: viewModel.variants.apply_to_all };
//                 if (viewModel.variants.apply_to_all)
//                     viewModel.variants.options.forEach(function (t, n) {
//                         (t.display_index = n),
//                             (t.display_type = viewModel.variants.type),
//                             (t.display_title = t.title.replace(/-/g, " ")),
//                             (t.display_image = viewModel.getVariantImages(t.id)),
//                             (t.display_shipping_info = ""),
//                             (t.display_pricing_info = "");
//                         var a = "";
//                         switch (t.display_type) {
//                             case "color":
//                                 break;
//                             case "upgrade":
//                                 t.display_visually_hidden = 0 === n;
//                                 break;
//                             default:
//                                 var o = "";
//                                 if ("us" === viewModel.display.country) {
//                                     var r = 0,
//                                         s = t.title.split("_");
//                                     for (i = 0; i < s.length && r < 3; i++) (o += 2 == s[i].length ? s[i] : s[i].substring(0, 1)), (r = o.length);
//                                 } else o = guSubstituteString(t.title.substring(0, 1));
//                                 (a += '<rect width="100%" height="100%"/>'), (a += '<text x="50%" y="50%" dy="0.35em" text-anchor="middle">' + o + "</text>");
//                         }
//                         if (viewModel.enableAdHocLogic("PSM")) {
//                             if (0 !== n) {
//                                 if ($(viewModel.module).attr("data-override-starting-price")) {
//                                     var l = $(viewModel.module).attr("data-override-starting-price").split(",");
//                                     (t.display_upgrade_base_price = l[n - 1]), console.log("Variant pricing message starts at", l[n - 1], "for variant", n);
//                                 } else t.display_upgrade_base_price = Number(t.price - viewModel.variants.options[0].price).toFixed(0);
//                                 t.display_pricing_info =
//                                     '+<span data-variant-dynamic-pricing="' + t.display_upgrade_base_price + '">' + guDisplayCurrency(Big(t.display_upgrade_base_price)) + "</span> " + guSubstituteString("per PhotoStick");
//                             }
//                             1 === n && (t.display_featured_msg = guSubstituteString("Most Popular")), "us" === viewModel.display.country && (t.display_shipping_info = "<span>PLUS FREE USA Shipping</span> <span>($7.99 Value!)</span>");
//                         }
//                         (t.display_selector = a), (t.display_title = guSubstituteString(t.display_title)), e.variants.push(t);
//                     });
//                 else {
//                     e.addon = !1;
//                     var t = 1,
//                         n = viewModel.offer.selected_bundles[0].length,
//                         a = viewModel.combineDiscountBundlesWith(viewModel.offer.selected_bundles[0]);
//                     a.forEach(function (i, a) {
//                         for (var o = i.bundle_variant_info, r = {}, s = 0; s < i.qty; s++) {
//                             if (((r.title = guSubstituteString(viewModel.display.title)), (r.product = o.title), (r.choices = o.variants), (r.enabled = !0), a >= n)) {
//                                 if (!(t > 0)) return;
//                                 (e.addon = !0),
//                                     (e.discount_percent = i.discount),
//                                     (r.enabled = !1),
//                                     (r.discount_percent = i.discount),
//                                     (r.discount_price = guSubstituteString("$$OnlyPrice").replace("$$TP", guDisplayCurrency(Big(o.variants[0].price)))),
//                                     (r.retail_price = guSubstituteString("$$Retail").replace("$$RP", guDisplayCurrency(Big(i.rp)))),
//                                     (r.addon_text_lead = guSubstituteString("Special Offer!")),
//                                     (r.addon_text_copy = guSubstituteString("One More for " + i.discount + "% OFF!")),
//                                     (r.addon_text_discount = "en" === window.gu_language ? '<div class="text-lockup"><span>' + i.discount + "</span><span>%</span><span>Off</span></div>" : guSubstituteString(i.discount + "% Off")),
//                                     (r.addon_row_label = guSubstituteString(i.discount + "% Off")),
//                                     resetAddon(),
//                                     t--;
//                             }
//                             e.variants.push(r);
//                         }
//                     });
//                 }
//                 var o = wp.template("product-variants-template");
//                 $(".content", $(viewModel.module)).html(o(e)), viewModel.isReady(!0), optionChooser();
//             } else optionToCart();
//         }
//         function optionChooser(e) {
//             if ((viewModel.resetEvents(), viewModel.variants.apply_to_all)) {
//                 var t = void 0 !== e ? e.currentTarget : $('[data-variant-index="0"]'),
//                     n = $(t).data("variant-index");
//                 n != viewModel.variants.selected.index ? $(viewModel.module).attr("data-variant-selected", n) : viewModel.enableAdHocLogic("PSM") && $(viewModel.module).attr("data-variant-selected", "0");
//             }
//             optionToCart();
//         }
//         function optionToCart() {
//             viewModel.sync(),
//                 theCart.emptyCart(),
//                 viewModel.data.forEach(function (e, t) {
//                     var n = $(e.bundle_element).attr("data-bundle-qty"),
//                         i = e.bundle_object[0].bundle_variant_info.id,
//                         a = [];
//                     e.bundle_object.forEach(function (e) {
//                         var t = $.extend(!0, {}, e),
//                             n = a.find(function (e, n) {
//                                 if (e.bundle_variant_info.id === t.bundle_variant_info.id) return (a[n].qty = (parseInt(a[n].qty) + parseInt(t.qty)).toString()), !0;
//                             });
//                         void 0 === n && a.push(t);
//                     });
//                     var o = viewModel.combineDiscountBundlesWith(a);
//                     o.forEach(function (t, a) {
//                         if (viewModel.variants.apply_to_all) {
//                             var r = parseInt(e.selected_qty);
//                             if (r > 0) {
//                                 var s = viewModel.selectedVariant(t),
//                                     l = t.discount > 0;
//                                 if (~n.indexOf("conditional")) {
//                                     var d = parseInt(n.split("-")[1]);
//                                     if (viewModel.offer.allow_multiple_bundles)
//                                         if (theCart.products.length < d) {
//                                             if (l) return void theCart.discardProduct(s.product_id);
//                                             r = d;
//                                         } else {
//                                             if (!l) return void theCart.discardProduct(s.product_id);
//                                             if (i != t.pid) return;
//                                             r -= theCart.thisProductQty(i);
//                                         }
//                                     else if (r > d) {
//                                         if (o.length > 1)
//                                             if (l) {
//                                                 if (i != t.pid) return;
//                                                 r -= d;
//                                             } else r = d;
//                                     } else if (l) return void theCart.discardProduct(s.product_id);
//                                 }
//                                 theCart.addItem({
//                                     product_id: s.product_id,
//                                     variant_id: s.id,
//                                     name: s.variant_name || t.bundle_variant_info.title,
//                                     subtitle: s.title,
//                                     price: s.price,
//                                     qty: r,
//                                     weight: s.weight + s.weight_unit,
//                                     img: s.variant_image,
//                                     sku: null === s.sku ? "" : s.sku,
//                                     bundle_name: e.bundle_slug,
//                                     bundle_id: e.bundle_slug,
//                                     type: "bundle",
//                                 });
//                             } else theCart.discardProduct(i), viewModel.isAnyOfferSelected() || (theCart.emptyCart(), viewModel.resetPageDisplay());
//                         } else {
//                             var c = parseInt(e.selected_qty);
//                             if (c > 0) {
//                                 var u = $('.option[data-product-id="' + t.bundle_variant_info.id + '"][data-variant-enabled="true"] input[type="radio"]');
//                                 $(u, $(viewModel.module)).each(function () {
//                                     if ($(this).is(":checked")) {
//                                         var n = {};
//                                         (n.title = $(this).data("title")), (n.id = parseInt($(this).val())), (n.product_iD = parseInt($(this).data("product-id")));
//                                         var i = {};
//                                         t.bundle_variant_info.variants.forEach(function (e) {
//                                             if (n.id === e.id) return (i = e), !1;
//                                         }),
//                                         void 0 !== i.id &&
//                                         void 0 === i.variant_image &&
//                                         (t.bundle_variant_info.images.forEach(function (e) {
//                                             ~e.variant_ids.indexOf(i.id) && (i.variant_image = e.src);
//                                         }),
//                                         (void 0 !== i.variant_image && "" !== i.variant_image) ||
//                                         ("" !== t.bundle_variant_info.images[0].src
//                                             ? (i.variant_image = t.bundle_variant_info.images[0].src)
//                                             : console.log(
//                                                 "%c MISSING PRODUCT IMAGE ",
//                                                 "background: #240100; color: #ef8783; display: block; padding: 10px 5px; border-top: 1px solid #540a04; border-bottom: 1px solid #540a04; "
//                                             ))),
//                                             theCart.addItem(
//                                                 {
//                                                     product_id: i.product_id,
//                                                     variant_id: i.id,
//                                                     name: i.variant_name || t.bundle_variant_info.title,
//                                                     subtitle: i.title,
//                                                     price: i.price,
//                                                     qty: c,
//                                                     weight: i.weight + i.weight_unit,
//                                                     img: i.variant_image,
//                                                     sku: null === i.sku ? "" : i.sku,
//                                                     bundle_name: e.bundle_slug,
//                                                     bundle_id: e.bundle_slug,
//                                                     type: "bundle",
//                                                 },
//                                                 !0
//                                             );
//                                     }
//                                 });
//                             }
//                         }
//                     });
//                 });
//         }
//         function variantPageScripts() {
//             viewModel.enableAdHocLogic("PSM") &&
//             $(document).on("change", ".bundle-qty-selector .qty", function (e) {
//                 var t = [];
//                 $(".bundle .qty").each(function () {
//                     t.push(parseInt($(this).text()));
//                 });
//                 var n = t.reduce(function (e, t) {
//                     return e + t;
//                 }, 0);
//                 $("[data-variant-dynamic-pricing]").each(function () {
//                     if (n > 1) {
//                         var e = parseInt($(this).attr("data-variant-dynamic-pricing")),
//                             t = viewModel.discount_bundles[0].discount / 100,
//                             i = e - e * t,
//                             a = ((e + i * (n - 1)) / n).toFixed(2);
//                         $(this).html(guDisplayCurrency(Big(a)));
//                     } else {
//                         var o = parseInt($(this).attr("data-variant-dynamic-pricing"));
//                         $(this).html(guDisplayCurrency(Big(o)));
//                     }
//                 });
//             });
//         }
//         function variantShippingRates(e) {
//             if (viewModel.enableAdHocLogic("PSM")) {
//                 var t = parseInt(viewModel.variants.selected.index) >= 1;
//                 t
//                     ? (void 0 === e.bundled_domestic_shipping && (e.bundled_domestic_shipping = $.extend(!0, {}, e.domestic_shipping)),
//                         (e.domestic_shipping.custom_default_rate_name = "Free USA Shipping!"),
//                         (e.domestic_shipping.default_domestic_shipping_rate = "0.00"),
//                         (e.domestic_shipping.default_expedited_rate = "0.00"))
//                     : void 0 !== e.bundled_domestic_shipping && (e.domestic_shipping = e.bundled_domestic_shipping);
//             }
//             return e;
//         }
//         function enableAddon(e) {
//             var t = "",
//                 n = !0;
//             void 0 !== e && (e.preventDefault(), (t = $(e.currentTarget).data("enable-addon")), 0 !== $(e.currentTarget).closest(".modal").length && ($("#addon-modal").off("hidden.bs.modal", dismissAddon), $("#addon-modal").modal("hide"))),
//                 "" === t ? (t = $("[data-variant-index]").length - 1) : "remove" === t.toString().toLowerCase() && ((t = $("[data-variant-index]").length - 1), (n = !1)),
//                 $('[data-variant-index="' + t + '"]', $(viewModel.module)).attr("data-variant-enabled", n),
//                 optionChooser(),
//                 n ? ($(viewModel.module).addClass("addon-selected"), dismissAddon()) : $(viewModel.module).removeClass("addon-selected"),
//                 viewModel.adjustView("bottom");
//         }
//         function displayAddon() {
//             var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : null,
//                 t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
//             return (
//                 "undefined" == typeof displayAddon.active ? (displayAddon.active = !0) : null !== e && (displayAddon.active = e),
//                 !t && !!displayAddon.active && !!viewModel.variants.addon && ($("#addon-modal").modal(), $("#addon-modal").on("hidden.bs.modal", dismissAddon), !0)
//             );
//         }
//         function dismissAddon() {
//             setTimeout(function () {
//                 displayAddon(!1), gu_offer_events.checkout();
//             }, 0);
//         }
//         function resetAddon() {
//             $(viewModel.module).removeClass("addon-selected"), displayAddon(!0, !0);
//         }
//         function remoteSelector(e) {
//             var t = $(e.currentTarget).closest(".option-remote"),
//                 n = $(t).data("variant-index-remote"),
//                 i = $(this).val();
//             $('[data-variant-index="' + n + '"] input[value="' + i + '"]').prop("checked", !0);
//         }
//         function revealVariants(e) {
//             e.preventDefault(), $(viewModel.module).removeClass("pending"), viewModel.adjustView("top"), gu_offer_events.showTotalbar("checkout");
//         }
//         function data() {
//             if (viewModel.isVariantType("color")) {
//                 var index = $($colors + "." + $activeClass).data("index"),
//                     type = $($colors + "." + $activeClass).data("colortype");
//                 if ("variety" === type) return "variety";
//                 if ("mixed" === type) return "mixed";
//                 var _data = eval($bundleObj + "[0]." + $variantsLoc)[index],
//                     color = _data.title.toLowerCase();
//                 return ~color.indexOf("-") && (color = color.split("-")[0]), color;
//             }
//             return null;
//         }
//         function getQty() {
//             var qty = 0;
//             return (
//                 eval($bundleObj).forEach(function (e) {
//                     qty += parseInt(e.qty);
//                 }),
//                     qty
//             );
//         }
//         function check() {
//             return void 0 !== viewModel.variants ? viewModel.variants.count > 1 || (theCart.emptyCart(), !1) : (theCart.emptyCart(), !1);
//         }
//         function click(el) {
//             if (!$(el).hasClass($activeClass)) {
//                 var index = $(el).data("index"),
//                     selectors = $(el).parent().children();
//                 if ((selectors.hasClass($activeClass) ? (selectors.removeClass($activeClass), $(el).addClass($activeClass), updateVariant(index)) : ($(el).addClass($activeClass), addVariant(index)), viewModel.isVariantType("color"))) {
//                     var color = isFinite(index) ? eval($variants)[index].title.split("-")[0].toLowerCase().replace(/\s/g, "") : $varietyClass,
//                         qty = 0;
//                     eval($bundleObj).forEach(function (e) {
//                         qty += parseInt(e.qty);
//                     });
//                     var src = $galleryDirectory + "/" + qty + "-" + color + ".png";
//                     $($colorImage).attr("src", src);
//                 }
//             }
//         }
//         function displayBuilder() {
//             if (viewModel.isVariantType("color")) {
//                 viewModel.adjustView("top"),
//                     theCart.emptyCart(),
//                 "" == $($title).text() && $($title).text(viewModel.display.title),
//                     $(viewModel.module).addClass($colorsClass),
//                     $(viewModel.module).show(),
//                     $($colorsEl).show(),
//                     $($colorsWrap).empty();
//                 var counter = 0;
//                 eval($variants).forEach(function (e, t) {
//                     var n = e.id;
//                     if (null !== n) {
//                         if ($excludedVariants.indexOf(e.id.toString()) === -1) {
//                             var i = $($colorSampleHTML),
//                                 a = e.title.split("-")[0];
//                             if ("mixed" === a.toLowerCase()) {
//                                 var o = $.grep(viewModel.variants.tags, function (e) {
//                                         return e.indexOf("colors:") > -1;
//                                     }),
//                                     r = $.grep(o[0].split(/[:;-]/), function (e) {
//                                         return e.indexOf("|") > -1;
//                                     }),
//                                     s = buildGradient(r[0].split("|"));
//                                 i.find($colorsCircle).attr("style", "background: " + s), i.attr("data-colortype", "mixed");
//                             } else {
//                                 var l = getHexValue(a);
//                                 i.find($colorsCircle).css("background-color", "#" + l), i.attr("data-colortype", "single");
//                             }
//                             i.find($colorsTitle).text(guSubstituteString(a)), i.attr("data-index", t), $($colorsWrap).append(i), counter++;
//                         }
//                     } else console.log("Not displaying variant: " + e.title + ". Shopify Product ID not found in Shopify store."), window._guLogger.error("CODE RED: Shopify Product Error. Variant ID is null.", Error("Product ID not found"), { shopifyDomain: gu_shopify_domain, variantID: n, variantTitle: e.title, severity: "critical" });
//                 }),
//                 void 0 !== getVarietyPack() && getVarietyPack().length > 0 && counter++,
//                     $($colorsWrap).attr("data-option-count", counter),
//                     $($colors).first().click(),
//                     setupVarietyPacks();
//             } else
//                 setTimeout(function () {
//                     viewModel.sync(), optionBuilder();
//                 }, 0);
//         }
//         function isHex(e) {
//             return /^[A-F0-9]+$/i.test(e);
//         }
//         function getHexValue(e) {
//             if (isHex(e)) return e;
//             var t = $.grep(viewModel.variants.tags, function (e) {
//                 return e.indexOf("colors:") > -1;
//             });
//             (t = t[0].split(":").pop().split(";")), ~e.indexOf("-") && (e = e.split("-")[0]);
//             var n = $.grep(t, function (t) {
//                 return t.toLowerCase().indexOf(e.toLowerCase()) > -1;
//             });
//             return n.length ? n[0].split("-").pop() : (console.log("The color " + e + " is missing a hex on it's title. Please add one in."), "000000");
//         }
//         function getVarietyPack() {
//             var e = $.grep(viewModel.variants.tags, function (e) {
//                 return 0 === e.indexOf("vp:");
//             });
//             return (
//                 e.length > 0 &&
//                 (e.forEach(function (t, n) {
//                     var i = t.replace("vp: ", "").replace("vp:", "");
//                     e[n] = 0 === i.indexOf("-") ? i.split(";") : i.split("-").pop().split(";");
//                 }),
//                     (e = $.grep(e, function (e) {
//                         return e.length === getQty();
//                     })),
//                     e[0])
//             );
//         }
//         function setupVarietyPacks() {
//             var e = getVarietyPack();
//             if (e) {
//                 var t = [];
//                 try {
//                     t = [].concat(_toConsumableArray(new Set(e)));
//                 } catch (n) {
//                     t = e.filter(function (e, t, n) {
//                         return n.indexOf(e) === t;
//                     });
//                 }
//                 var i = buildGradient(t),
//                     a = $($colorSampleHTML);
//                 a.find($colorsTitle).text(guSubstituteString($varietyColorName)),
//                     a.find($colorsCircle).attr("style", "background: " + i),
//                     a.attr("data-index", $varietyClass),
//                     a.attr("data-colortype", "variety"),
//                     $($colorsWrap).prepend(a),
//                     $($colors).first().click();
//             } else $($colors).hasClass($varietyClass) && $(colors + " .variety").remove();
//         }
//         function buildGradient(e) {
//             var t = (100 / e.length).toFixed(0),
//                 n = 0,
//                 i = "";
//             return (
//                 e.forEach(function (e) {
//                     var a = getHexValue(e),
//                         o = parseInt(n) + parseInt(t),
//                         r = ", #" + a + " " + n + "%, #" + a + " " + o + "%";
//                     (i += r), (n = o);
//                 }),
//                 "linear-gradient(to right" + i + ");"
//             );
//         }
//         function addVariant(variantIndex, productIndex) {
//             eval($bundleObj).forEach(function (value, index) {
//                 var data = eval($bundleObj + "[" + index + "]." + $variantsLoc)[variantIndex],
//                     img = "";
//                 value.bundle_variant_info.images.forEach(function (e) {
//                     e.variant_ids[0] === data.id && void 0 !== e.src && (img = e.src);
//                 }),
//                 "" === img && console.log("%c MISSING PRODUCT IMAGE ", "background: #240100; color: #ef8783; display: block; padding: 10px 5px; border-top: 1px solid #540a04; border-bottom: 1px solid #540a04; ");
//                 var name = eval($bundleObj)[index].bundle_variant_info.title;
//                 void 0 === name && (name = eval($label));
//                 var upi = gu_checkout.addProduct({
//                     bundle_id: eval($bundleSlug),
//                     bundle_name: eval($bundleSlug),
//                     product_id: data.product_id,
//                     variant_id: data.id,
//                     name: name,
//                     subtitle: data.title.split("-")[0],
//                     price: data.price,
//                     qty: value.qty,
//                     weight: data.weight,
//                     img: img,
//                     sku: null === data.sku ? "" : data.sku,
//                     type: "bundle",
//                 });
//                 theCart.products.push(upi);
//             });
//         }
//         function updateVariant(variantIndex, productIndex) {
//             if (variantIndex === $varietyClass) {
//                 theCart.emptyCart();
//                 var vp = getVarietyPack();
//                 eval($bundleObj).forEach(function (value, index) {
//                     for (
//                         var variants = eval($bundleObj + "[" + index + "]." + $variantsLoc),
//                             qty = eval($bundleObj + "[" + index + "].qty"),
//                             _loop = function _loop(_i2) {
//                                 var variant = $.grep(variants, function (e) {
//                                         return 0 === e.title.toLowerCase().replace(" ", "").indexOf(vp[0]);
//                                     }),
//                                     variantIndex = 0;
//                                 try {
//                                     variantIndex = variants.findIndex(function (e) {
//                                         return 0 === e.title.toLowerCase().indexOf(vp[0]);
//                                     });
//                                 } catch (err) {
//                                     for (var vi = 0; vi < variants.length; ++vi)
//                                         if (0 === variants[vi].title.toLowerCase().indexOf(vp[0])) {
//                                             variantIndex = vi;
//                                             break;
//                                         }
//                                 }
//                                 variant = variant[0];
//                                 var img = "no image match";
//                                 value.bundle_variant_info.images.forEach(function (e) {
//                                     e.variant_ids[0] === variant.id && (img = e.src);
//                                 });
//                                 var name = eval($bundleObj)[index].bundle_variant_info.title;
//                                 void 0 === name && (name = eval($label));
//                                 var cartQty = 0,
//                                     cartUpi = "";
//                                 if (
//                                     (gu_checkout.cart.forEach(function (e, t) {
//                                         variant.id === e.variant_id && ((cartQty = e.qty + 1), (cartUpi = e.upi));
//                                     }),
//                                     0 == cartQty)
//                                 ) {
//                                     var upi = gu_checkout.addProduct({
//                                         bundle_id: eval($bundleSlug),
//                                         bundle_name: eval($bundleSlug),
//                                         product_id: variant.product_id,
//                                         variant_id: variant.id,
//                                         name: name,
//                                         subtitle: variant.title.split("-")[0],
//                                         price: variant.price,
//                                         qty: 1,
//                                         weight: variant.weight,
//                                         img: img,
//                                         sku: null === variant.sku ? "" : variant.sku,
//                                         type: "bundle",
//                                     });
//                                     theCart.products.push(upi);
//                                 } else
//                                     gu_checkout.updateProduct(cartUpi, {
//                                         bundle_id: eval($bundleSlug),
//                                         bundle_name: eval($bundleSlug),
//                                         product_id: variant.product_id,
//                                         variant_id: variant.id,
//                                         name: name,
//                                         subtitle: variant.title.split("-")[0],
//                                         price: variant.price,
//                                         qty: cartQty,
//                                         weight: variant.weight,
//                                         img: img,
//                                         sku: null === variant.sku ? "" : variant.sku,
//                                         type: "bundle",
//                                     });
//                                 vp.splice(0, 1);
//                             },
//                             _i2 = 0;
//                         _i2 < qty;
//                         _i2++
//                     )
//                         _loop(_i2);
//                 });
//             } else
//                 theCart.products.forEach(function (value, index) {
//                     if (void 0 !== eval($bundleObj + "[" + index + "]")) {
//                         var _data2 = eval($bundleObj + "[" + index + "]." + $variantsLoc)[variantIndex],
//                             images = eval($bundleObj + "[" + index + "].bundle_variant_info.images"),
//                             _img = "";
//                         images.forEach(function (e) {
//                             e.variant_ids[0] === _data2.id && (_img = e.src);
//                         }),
//                         "" === _img && console.log("%c MISSING PRODUCT IMAGE ", "background: #240100; color: #ef8783; display: block; padding: 10px 5px; border-top: 1px solid #540a04; border-bottom: 1px solid #540a04; ");
//                         var _name = eval($bundleObj)[index].bundle_variant_info.title;
//                         void 0 === _name && (_name = eval($label)),
//                             gu_checkout.updateProduct(value, {
//                                 bundle_id: eval($bundleSlug),
//                                 bundle_name: eval($bundleSlug),
//                                 product_id: _data2.product_id,
//                                 variant_id: _data2.id,
//                                 name: _name,
//                                 subtitle: _data2.title.split("-")[0],
//                                 price: _data2.price,
//                                 qty: eval($bundleObj + "[" + index + "].qty"),
//                                 weight: _data2.weight,
//                                 img: _img,
//                                 sku: null === _data2.sku ? "" : _data2.sku,
//                                 type: "bundle",
//                             });
//                     } else gu_checkout.removeProduct(value);
//                 });
//         }
//         var viewModel = new ViewModel(),
//             theCart = new CartController(),
//             $offer = ".main-visible-offer",
//             $activeOfferName = window.gu_qs.guoffer,
//             $additionalOffer = $activeOfferName && void 0 !== multi_bundleData ? "#" + $activeOfferName : $offer,
//             $selectedBundle = $additionalOffer + "  .bundle.selected",
//             $offerData = void 0 !== multi_bundleData ? multi_bundleData : componentOffer.bundle_info,
//             $bundleIndex = '$($selectedBundle).data("index") - 1',
//             $bundleData = "$offerData[eval($bundleIndex)]",
//             $bundleObj = $bundleData + ".bundle_object",
//             $bundleSlug = $bundleData + ".bundle_slug",
//             $variantsLoc = "bundle_variant_info.variants",
//             $variants = $bundleObj + "[0]." + $variantsLoc,
//             $variantImages = $bundleObj + "[0].bundle_variant_info.images",
//             $label = $bundleObj + "[0].bundle_variant_info.title",
//             $tags = $bundleObj + "[0].bundle_variant_info.tags",
//             $excludedVariants = site_vars.excluded_variants.split(","),
//             $variantDescriptions = site_vars.variant_descriptions,
//             $activeClass = "active",
//             $galleryDirectory = templateUrl.theme_directory,
//             $vs = "#variant-selector",
//             $title = $vs + " .title",
//             $type = $bundleObj + "[0].bundle_variant_info.options[0].name",
//             $colorsEl = $vs + " #vsc-colors",
//             $colorsTitle = "h6",
//             $colorImage = ".product-image",
//             $colorsCircle = ".circle",
//             $colorsClass = "color",
//             $colorsWrap = $colorsEl + " .colors",
//             $colors = $colorsWrap + " ." + $colorsClass,
//             $colorSampleHTML = $("<div />").append($($colors).eq(0).clone()).html(),
//             $varietyColorName = "Variety",
//             $varietyClass = "variety";
//         return { data: data, click: click, check: check, update: displayBuilder, addonCheck: displayAddon, checkRates: variantShippingRates };
//     })(),
//     disclaimerLoadAttempts = 0;
// getBrandConfig(gu_offer);
