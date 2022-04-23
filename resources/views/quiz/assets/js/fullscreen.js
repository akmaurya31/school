/*!
* screenfull
* v4.0.1 - 2019-02-18
* (c) Sindre Sorhus; MIT License
*/

!function() {
    "use strict";
    var u = "undefined" != typeof window && void 0 !== window.document ? window.document : {}
      , e = "undefined" != typeof module && module.exports
      , t = "undefined" != typeof Element && "ALLOW_KEYBOARD_INPUT"in Element
      , c = function() {
        for (var e, n = [["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"], ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"], ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"], ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"], ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"]], l = 0, r = n.length, t = {}; l < r; l++)
            if ((e = n[l]) && e[1]in u) {
                for (l = 0; l < e.length; l++)
                    t[n[0][l]] = e[l];
                return t
            }
        return !1
    }()
      , r = {
        change: c.fullscreenchange,
        error: c.fullscreenerror
    }
      , n = {
        request: function(r) {
            return new Promise(function(e) {
                var n = c.requestFullscreen
                  , l = function() {
                    this.off("change", l),
                    e()
                }
                .bind(this);
                r = r || u.documentElement,
                / Version\/5\.1(?:\.\d+)? Safari\//.test(navigator.userAgent) ? r[n]() : r[n](t ? Element.ALLOW_KEYBOARD_INPUT : {}),
                this.on("change", l)
            }
            .bind(this))
        },
        exit: function() {
            return new Promise(function(e) {
                if (this.isFullscreen) {
                    var n = function() {
                        this.off("change", n),
                        e()
                    }
                    .bind(this);
                    u[c.exitFullscreen](),
                    this.on("change", n)
                } else
                    e()
            }
            .bind(this))
        },
        toggle: function(e) {
            return this.isFullscreen ? this.exit() : this.request(e)
        },
        onchange: function(e) {
            this.on("change", e)
        },
        onerror: function(e) {
            this.on("error", e)
        },
        on: function(e, n) {
            var l = r[e];
            l && u.addEventListener(l, n, !1)
        },
        off: function(e, n) {
            var l = r[e];
            l && u.removeEventListener(l, n, !1)
        },
        raw: c
    };
    c ? (Object.defineProperties(n, {
        isFullscreen: {
            get: function() {
                return Boolean(u[c.fullscreenElement])
            }
        },
        element: {
            enumerable: !0,
            get: function() {
                return u[c.fullscreenElement]
            }
        },
        enabled: {
            enumerable: !0,
            get: function() {
                return Boolean(u[c.fullscreenEnabled])
            }
        }
    }),
    e ? module.exports = n : window.screenfull = n) : e ? module.exports = !1 : window.screenfull = !1
}();


 $(".s-expand").on('click', function(e) {
     if (typeof screenfull != 'undefined') {
         if (screenfull.enabled) {
             screenfull.toggle();
         }
     }
 });
 if (typeof screenfull != 'undefined') {
		if (screenfull.enabled) {
			$(document).on(screenfull.raw.fullscreenchange, function() {
				if (screenfull.isFullscreen) {
					$('.s-expand').find('i').toggleClass('fas fa5-expand fas fa5-expand-arrows-alt');
				} else {
					$('.s-expand').find('i').toggleClass('fas fa5-expand-arrows-alt fas fa5-expand');
				}
			});
		}
	}