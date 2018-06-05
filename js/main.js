function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

var myEfficientFn = debounce(function() {
	if (document.body.scrollTop > (document.getElementsByTagName("header")[0].offsetHeight)-50) {
		document.getElementById("smallHeader").classList.add("fixedHeader");
	} else {
		document.getElementById("smallHeader").classList.remove("fixedHeader");
	}
}, 50);

(function() {
   var giftofspeed = document.createElement('link');
   	giftofspeed.rel = 'stylesheet';
   	giftofspeed.href = 'min/?f=css/fonts.css';
   	giftofspeed.type = 'text/css';
   	var godefer = document.getElementsByTagName('link')[0];
   	godefer.parentNode.insertBefore(giftofspeed, godefer);

   	var bLazy = new Blazy({
   		loadInvisible: true,
   		offset: 5000
   	});

   	document.addEventListener("scroll", myEfficientFn);
})();