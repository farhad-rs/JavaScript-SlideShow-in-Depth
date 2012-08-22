Math.rnd = Math.random;
Math.random = function (a,b) {
	return (!a && !b) ? Math.rnd() : Math.floor(Math.rnd()*(b-a+1))+a;	
}
$(function() {
	var pics = $(".slideshow a");
	MaxWidth = window.innerWidth;
	MaxHeight = window.innerWidth;
	pics.each(function() {
		$(this).animate({
			left:Math.random(0,MaxWidth-200),
			top:Math.random(0,MaxHeight-200),
			'-webkit-transform':'rotate('+Math.random(-75,75)+'deg)'
		},3500,'cubic-bezier(.05,.1,.5,.95)');
	});
});