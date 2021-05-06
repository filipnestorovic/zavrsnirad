//floating bar

function t() {
        var t = void 0,
            e = document.querySelector(".floating-bar"),
            r = window.pageYOffset,
            n = r + window.innerHeight,
            o = e.dataset.class.split(",").map(function (t) {
                return t.trim()
            });
        o[0] && (t = function (t) {
            var e = [],
                r = !0,
                n = !1,
                o = void 0;
            try {
                for (var a, i = t[Symbol.iterator](); !(r = (a = i.next()).done); r = !0) {
                    var l = a.value,
                        s = document.querySelectorAll(l),
                        c = !0,
                        d = !1,
                        u = void 0;
                    try {
                        for (var f, v = s[Symbol.iterator](); !(c = (f = v.next()).done); c = !0) {
                            var m = f.value;
                            if (m.offsetWidth || m.offsetHeight || m.getClientRects().length) {
                                var h = document.body.getBoundingClientRect(),
                                    y = m.getBoundingClientRect(),
                                    p = y.top - h.top,
                                    g = p + y.height;
                                e.push(p, g)
                            }
                        }
                    } catch (t) {
                        d = !0, u = t
                    } finally {
                        try {
                            !c && v.return && v.return()
                        } finally {
                            if (d) throw u
                        }
                    }
                }
            } catch (t) {
                n = !0, o = t
            } finally {
                try {
                    !r && i.return && i.return()
                } finally {
                    if (n) throw o
                }
            }
            return e
        }(o));
        var a = void 0,
            i = void 0;
        e.dataset.ticktopelm ? (a = e.dataset.ticktopelm, i = r) : e.dataset.tickbottomelm && (a = e.dataset.tickbottomelm, i = n);
        var l = document.body.getBoundingClientRect(),
            s = document.querySelector(a).getBoundingClientRect();
        i >= s.top - l.top ? o[0] && function (t, e, r) {
            var n = !1,
                o = !0,
                a = !1,
                i = void 0;
            try {
                for (var l, s = r[Symbol.iterator](); !(o = (l = s.next()).done); o = !0) {
                    var c = l.value;
                    if (e > c && c > t) {
                        n = !0;
                        break
                    }
                }
            } catch (t) {
                a = !0, i = t
            } finally {
                try {
                    !o && s.return && s.return()
                } finally {
                    if (a) throw i
                }
            }
            return n
        }(r, n, t) ? e.classList.contains("floating-visible") && e.classList.remove("floating-visible") : e.classList.contains("floating-visible") || e.classList.add("floating-visible") : e.classList.contains("floating-visible") && e.classList.remove("floating-visible");
        s.top + s.height <= 0 ? e.classList.add("marked-elm") : e.classList.remove("marked-elm")
    }

    function e() {
        t(), window.addEventListener("scroll", function () {
            t()
        })
    }
    window.addEventListener("load", function () {
        e()
    });
