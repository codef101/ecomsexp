var ht_ctc_settings = {
    display: ""
};
! function(d) {
    d(function() {
        var t, e, i = window.location.href,
            o = void 0 !== document.title ? document.title : "",
            r = void 0 !== screen.width && 1024 < screen.width ? "no" : "yes";

        function a(t) {
            var e, a, n;
            "yes" == r ? "show" == t.getAttribute("data-display_mobile") && ((n = document.querySelector(".ht_ctc_desktop_chat")) && n.remove(), a = t.getAttribute("data-css"), e = t.getAttribute("data-position_mobile"), t.style.cssText = e + a, c(t)) : "show" == t.getAttribute("data-display_desktop") && ((n = document.querySelector(".ht_ctc_mobile_chat")) && n.remove(), a = t.getAttribute("data-css"), n = t.getAttribute("data-position"), t.style.cssText = n + a, c(t))
        }

        function c(e) {
            try {
                var t = parseInt(e.getAttribute("data-show_effect"));
                d(e).show(t)
            } catch (t) {
                e.style.display = "block"
            }
            try {
                n = (a = e).getAttribute("data-an_type"), setTimeout(function() {
                    a.classList.add("ht_ctc_animation", n)
                }, 120), d(".ht-ctc-chat").hover(function() {
                    d(".ht-ctc-chat .ht-ctc-cta-hover").show(120)
                }, function() {
                    d(".ht-ctc-chat .ht-ctc-cta-hover").hide(100)
                })
            } catch (t) {}
            var a, n
        }

        function n(t) {
            d(document).trigger("ht_ctc_analytics");
            var e = t.getAttribute("data-number"),
                a = "Click to Chat for WhatsApp",
                n = "chat: " + e,
                c = o + ", " + i;
            "yes" == t.getAttribute("data-is_ga_enable") && ("undefined" != typeof gtag ? gtag("event", n, {
                event_category: a,
                event_label: c
            }) : "undefined" != typeof ga && void 0 !== ga.getAll ? ga.getAll()[0].send("event", a, n, c) : "undefined" != typeof __gaTracker && __gaTracker("send", "event", a, n, c)), "undefined" != typeof dataLayer && dataLayer.push({
                event: "Click to Chat",
                event_category: a,
                event_label: c,
                event_action: n
            }), "yes" == t.getAttribute("data-ga_ads") && "undefined" != typeof gtag_report_conversion && gtag_report_conversion(), "yes" == t.getAttribute("data-is_fb_pixel") && "undefined" != typeof fbq && fbq("trackCustom", "Click to Chat by HoliThemes", {
                Category: "Click to Chat for WhatsApp",
                return_type: "chat",
                ID: e,
                Title: o,
                URL: i
            })
        }
        d(document).trigger("ht_ctc_ce_settings"), (e = document.querySelector(".ht-ctc-chat")) && (d(e).trigger("ht_ctc_ce_chat"), t = e, "hide" == ht_ctc_settings.display ? d(document).trigger("ht_ctc_display", [a, t]) : a(t), e.addEventListener("click", function() {
            ! function(t) {
                var e = t.getAttribute("data-number"),
                    a = t.getAttribute("data-pre_filled");
                a = a.replace(/\[url]/gi, i), a = encodeURIComponent(a);
                var n, c = t.getAttribute("data-webandapi");
                if ("" == e) return t.innerHTML = t.getAttribute("data-no_number");
                "webapi" == c ? (n = "yes" == r ? "https://api.whatsapp.com/send" : "https://web.whatsapp.com/send", window.open(n + "?phone=" + e + "&text=" + a, "_blank", "noopener")) : (n = "https://wa.me/", window.open(n + e + "?text=" + a, "_blank", "noopener"))
            }(e), n(e)
        })), d(document).on("click", ".ht-ctc-sc-chat", function() {
            var t, e = this.getAttribute("data-number"),
                a = (a = this.getAttribute("data-pre_filled")).replace(/\[url]/gi, i);
            a = encodeURIComponent(a), "webapi" == this.getAttribute("data-webandapi") ? (t = "yes" == r ? "https://api.whatsapp.com/send" : "https://web.whatsapp.com/send", window.open(t + "?phone=" + e + "&text=" + a, "_blank", "noopener")) : (t = "https://wa.me/", window.open(t + e + "?text=" + a, "_blank", "noopener")), n(this)
        })
    })
}(jQuery);