var element = document.getElementById('logo');
function fading(){
    var increment = 0.045;
    var opacity = 0;
    var instance = window.setInterval(function() {
        element.style.opacity = opacity
        opacity = opacity + increment;
        if(opacity > 1){
            window.clearInterval(instance);
        }
    },100)
}
fading();

