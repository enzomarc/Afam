$(document).ready(function(){

    // Device screen size
    var screenHeight = window.innerHeight;
    var screenWidth = window.innerWidth;

    var screenResize = function () {
        $('section.hero').css('height', innerHeight)
    }

    screenResize()

    $(".navbar-burger").click(function() {

        $(".navbar-burger").toggleClass("is-active")
        $(".navbar-menu").toggleClass("is-active")
  
    })
});