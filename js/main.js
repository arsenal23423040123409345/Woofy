$(document).ready(function()
{
	var qwer = document.getElementById('proposition');
	var opacity = 0;
    qwer.style.opacity = opacity;
	$(".text").mouseenter(function()
	{
    	var increment = 0.035;
    	var instance = window.setInterval(function() {
        qwer.style.opacity = opacity
        opacity = opacity + increment;
        if(opacity > 1){
            window.clearInterval(instance);
        }
    },100)
	});
/*
	var photo = document.getElementById('photo322');
	$(".proposition").mouseenter(function()
	{
		photo.animate({left: '250px'});
	});
*/
});