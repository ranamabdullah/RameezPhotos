jQuery(document).ready(function () {
    "use strict";
    // MEGAFOLIO PRO GALLERY SETTING
    var api = jQuery('.megafolio-container').megafoliopro({
        filterChangeAnimation: "rotatescale",
        filterChangeSpeed: 800,
        filterChangeRotate: 99,
        filterChangeScale: 0.6,
        delay: 20,
        paddingHorizontal: 0,
        paddingVertical: 0,
        layoutarray: [8]
    });

    // CALL FILTER FUNCTION IF ANY FILTER HAS BEEN CLICKED
    jQuery('.filter').click(function () {
        jQuery('.filter').each(function () {
            jQuery(this).removeClass("selected")
        });
        api.megafilter(jQuery(this).data('category'));
        jQuery(this).addClass("selected");
    });

    // THE FANCYBOX PLUGIN INITALISATION
    jQuery(".fancybox").fancybox();

    // FLEXY MENU SETTING
    $(".flexy-menu").flexymenu({
        align: "right",
        indicator: true
    });

    // LAYERSLIDER SETTING
    $('#layerslider').layerSlider({
        skinsPath: 'layerslider/skins/',
        skin: 'fullwidthdark',
        thumbnailNavigation: 'disabled',
        showCircleTimer: false,
        showBarTimer: false,
        touchNav: true,
        navStartStop: false,
        navButtons: false,
        animateFirstLayer: true,
        responsive: false,
        responsiveUnder: 984,
        sublayerContainer: 984
    });

    // GO TO TOP SETTING
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function (event) {
        event.preventDefault();
        jQuery('html, body').animate({
            scrollTop: 0
        }, duration);
        return false;
    })
});