jQuery(function($) {

    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        responsive: true,
        adaptiveHeight: true,
        auto: true,
        speed: 1000
    });

    $('.gallery a').each(function() {
        $(this).attr({ 'data-lightbox': $(this).parent().parent().parent().attr('id') });
    });

});