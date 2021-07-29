/* Countdown */
var deadline = new Date("Jul 29, 2021 17:00:00").getTime();

var x = setInterval(function() {
	var now = new Date().getTime();
	var t = deadline - now;
	var tage = Math.floor(t / (1000 * 60 * 60 * 24));
	var stunden = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
	var minuten = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
	var sekunden = Math.floor((t % (1000 * 60)) / 1000);
	
	document.getElementById("days").innerHTML =  tage;
	document.getElementById("std").innerHTML = stunden;
	document.getElementById("min").innerHTML = minuten;
	document.getElementById("sek").innerHTML = sekunden;
	
	if (t < 0) {
		clearInterval(x);
		document.getElementById("days").innerHTML ='0';
		document.getElementById("std").innerHTML ='0';
		document.getElementById("min").innerHTML ='0';
		document.getElementById("sek").innerHTML = '0';
	}
}, 1000);

/* Musik */
window.onload = function() {
	var promise = document.querySelector('audio').play();

	if (promise !== undefined) {
		promise.then(_ => {
			console.log("Music - LOADED");
		}).catch(error => {
			console.log("Music - Error");
		});
	}
}