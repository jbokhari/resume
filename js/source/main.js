(function(){
	"use strict";

	// $(document).ready(function(){
		
	// });

	window.onload(function(){

	var decorative = document.getElementsByClassName("decorative");
	console.log( decorative.item(0) )
	for (var i = 0; i < 32; i++) {
		var div = document.createElement("div");
		decorative.item(0).appendChild(div);
	}
	});


})();