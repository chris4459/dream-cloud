var captionLength = 0;
var caption = 'Dream Cloud';
var textLength = 0;
var text ="Submit your dreams!";
var is_paused = false;

$(document).ready(function() {
    setInterval ('cursorAnimation()', 600);
    captionEl = $('#caption');
    type();



});


function type() {
    captionEl.html(caption.substr(0, captionLength++));
    setTimeout('type()', 50);

}

function cursorAnimation() {
    $('#cursor').animate({
        opacity: 0
    }, 'slow', 'swing').animate({
        opacity: 1
    }, 'slow', 'swing');
}