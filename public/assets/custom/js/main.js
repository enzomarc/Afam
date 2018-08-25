$(document).ready(function(){

    // Handling SVG

    $('img[src$=".svg"]').each(function() {
        var $img = jQuery(this);
        var imgURL = $img.attr('src');
        var attributes = $img.prop("attributes");

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');

            // Remove any invalid XML tags
            $svg = $svg.removeAttr('xmlns:a');

            // Loop through IMG attributes and apply on SVG
            $.each(attributes, function() {
                $svg.attr(this.name, this.value);
            });

            // Replace IMG with SVG
            $img.replaceWith($svg);
        }, 'xml');
    });

    // Device screen size
    var screenHeight = window.innerHeight;
    var screenWidth = window.innerWidth;

    var screenResize = function () {
        if (screenWidth < 700) {
            $("section.hero.home-about div.hero-body div.content div.content-text").css("columns", "1")
        } else {
            // $("section.hero.home-about div.hero-body div.content div.content-text").css("columns", "2")
        }
    }

    // Resizing items on screen resize
    screenResize()

    $(window).resize(function () {
        screenResize()
    })

    window.sr = ScrollReveal()

    // Miscellaneous
    $(".navbar-burger").click(function () {

        $(".navbar-burger").toggleClass("is-active")
        $(".navbar-menu").toggleClass("is-active")
  
    })

    $("a.hide-menu-btn").click(function () {
        $("div.navbar").slideUp(300)
        $("div.navbar-btn").show()
    })

    $("a.menu-btn").click(function () {
        $("div.navbar").slideDown(300)
        $("div.navbar-btn").hide()

        sr.reveal("a li, #socials, #contact", {
            origin: 'top',
            duration: 500,
            delay: 100,
            mobile: true,
            reset: false
        })
    })

    sr.reveal(".home-header h1", {
        origin: 'left',
        duration: 400,
        delay: 0,
        mobile: true,
        reset: false
    })

    sr.reveal(".home-services .top-section span", {
        origin: 'right',
        duration: 700,
        delay: 300,
        reset: true
    })

    sr.reveal(".content h1, .content, .content .goto", {
        origin: 'right',
        duration: 500,
        delay: 100,
        reset: true
    })

    sr.reveal("#side2, .home-services .top-section h1, .home-services .top-section p, .home-services .body-section .column", {
        origin: 'bottom',
        duration: 700,
        delay: 300,
        reset: true
    })
    
});