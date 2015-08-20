$(document).ready(function(){
	//console.log("helloworld test"); // for testing purposes


	//Giving anchor scrolling some animation (ease).
	//Increased performance by caching $('html, body') selector
	var $root = $('html, body');

	$("a").click(function(){
		$root.animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 1000);
		return false;
	});
});