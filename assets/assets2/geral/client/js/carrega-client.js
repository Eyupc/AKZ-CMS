window.$ = window.$ || function() {};
window.$.prototype.fadeOut = window.$.prototype.fadeOut || function() {};
(function() {
	function u() {
		l = !0;
		var b = document.createElement("div");
		b.innerHTML = '<a href="https://get.adobe.com/flashplayer/" target="_blank"><div id="flashi"><div class="carrega-error-image"></div><div class="carrega-error"><div class="escolher-titulo">Youre almost there!</div><div class="escolher-info">Click here, and then click "Allow" when prompted. See you at the Hotel!<br><br>If you are using an iPad, iPhone, or Android device, you must download the Puffin Web Browser from the App Store or Google PlayStore before you can enter the Hotel.</div></div>';
		h.remove();
		c.classList.add("carrega-error-color");
		e.parentNode.replaceChild(b, e);
		"object" === typeof window.chrome && window.addEventListener("click", function() {
			var a = document.createElement("iframe");
			a.src = "https://get.adobe.com/flashplayer/";
			a.sandbox = "";
			a.style.width = 1;
			a.style.height = 1;
			a.style.display = "none";
			document.body.appendChild(a)
		})
	}

	function m() {
		if (!n) {
			n = !0;
			var b = document.createElement("div");
			b.classList.add("carrega-loading-heading");
			b.innerHTML = "Please wait! Zubbo is loading ...";
			var a = document.createElement("div");
			a.classList.add("carrega-loading-bar");
			var d = document.createElement("div");
			d.classList.add("carrega-loading-bar-inner-bar");
			f.push(function(a) {
				d.style.width = a + "%"
			});
			k.classList.add("carrega-loading-percentage");
			f.push(function(a) {
				k.innerHTML = Math.min(a, 100) + "%"
			});
			a.appendChild(d);
			e.appendChild(b);
			e.appendChild(a);
			e.appendChild(k);
			c.appendChild(e);
			g = c
		}
	}
	var k = document.createElement("div");
	k.innerHTML = "0%";
	var d = 0,
		p = {
			"client.init.start": 10,
			"client.init.swf.loaded": 20,
			"client.init.core.init": 50,
			"client.init.socket.ok": 60,
			"client.init.handshake.start": 65,
			"client.init.auth.ok": 75,
			"client.init.localization.loaded": 90,
			"client.init.core.running": 95,
			"client.init.config.loaded": 100
		},
		g;
	window.SponsorPay = {};
	window.SponsorPay.loadIntegration = function() {
		setTimeout(function() {
			g && "function" === typeof g.remove && g.remove()
		}, 5E3)
	};
	var f = [],
		q = 0,
		r = 0,
		v = new Audio("/inc/tpl/geral/som/client.mp3");
	window.FlashExternalInterface = {};
	window.FlashExternalInterface.logDebug = function(b) {
		try {
			if (!(49 <= d)) {
				var a = b.split(" ");
				if (a[2] && "PROGRESS" === a[2] && a[5]) {
					var c = a.pop().split("/"),
						e = parseInt(c[0], 10) / parseInt(c[1], 10);
					e && ('"hh_human_body.swf"' === a[5] ? f.forEach(function(a) {
						return a(Math.min(d += Math.round(e / 10 * 100), 100))
					}) : '"hh_human_item.swf"' === a[5] && f.forEach(function(a) {
						return a(Math.min(d += Math.round(e / 10 * 100), 100))
					}))
				}
			}
		} catch (w) {}
	};
	window.FlashExternalInterface.logLoginStep = function(b) {
		m();
		if (p[b]) {
			q = Date.now();
			var a = setInterval(function() {
				f.forEach(function(a) {
					return a(Math.min(d++, 100))
				});
				d > p[b] && clearInterval(a)
			}, 40)
		}
		b && "client.init.config.loaded" === b && setTimeout(function() {
			$(g).fadeOut();
			v.play()
		}, 500);
		if (b && "client.init.start" === b) var c = setInterval(function() {
			100 <= d && clearInterval(c);
			if (1900 < Date.now() - q) {
				r++;
				if (25 < r) return clearInterval(c);
				f.forEach(function(a) {
					return a(Math.min(d++, 100))
				})
			}
		}, 2E3)
	};
	window.flashvars["processlog.enabled"] = "1";
	var c = document.createElement("div");
	c.classList.add("carrega");
	var h = document.createElement("div");
	//h.classList.add("carrega-image");
	//c.appendChild(h);
	var t = document.createElement("div");
	t.classList.add("carrega-bg");
	var e = document.createElement("div");
	e.classList.add("carrega-loading");
	c.appendChild(t);
	var n = !1;
	window.addEventListener("load", function() {
		document.body.appendChild(c);
		var t = document.querySelector(".client-error");
		if (b) {
			var b = document.createElement("div");
			a.innerHTML = '<div class="carrega-error-image"></div><div class="carrega-error"><div class="escolher-titulo">Youre almost there!</div><div class="escolher-info">Click here, and then click "Allow" when prompted. See you at the Hotel!<br><br>If you are using an iPad, iPhone, or Android device, you must download the Puffin Web Browser from the App Store or Google PlayStore before you can enter the Hotel.</div></div>';
			h.remove();
			b.classList.add("carrega-error-color", "carrega");
			b.innerHTML = "";
			b.appendChild(a)
		}
	});
	var l = !1;
	window.swfobject && window.swfobject.getFlashPlayerVersion && 0 === window.swfobject.getFlashPlayerVersion().major && (m(), u());
	"object" === typeof window.safari ? setTimeout(function() {
		0 !== d || l || $(c).fadeOut()
	}, 2500) : setTimeout(function() {
		0 !== d || l || $(c).fadeOut()
	}, 1E4)
})();