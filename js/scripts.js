jQuery(document).ready(function($) {

    /* preventing link default behaviour */
    $( '#sfn-gallery-wrap a' ).click(function(e){
        e.preventDefault();
    });

    /* the coda slider script */
    $( '#sfn-gallery' ).codaSlider({
        dynamicArrows: false,
        dynamicTabs: false,
        autoSlide: true,
        autoSlideInterval: 8000,
        autoSlideStopWhenClicked: true
    });

});
