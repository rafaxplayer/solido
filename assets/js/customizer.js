/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function($) {

    // Site title and description.
    wp.customize('blogname', function(value) {
        value.bind(function(to) {
            $('.site-title a').text(to);
        });
    });
    wp.customize('blogdescription', function(value) {
        value.bind(function(to) {
            $('.site-description').text(to);
        });
    });
    //footer text
    wp.customize('solido_options[footer-text]', function(value) {
        value.bind(function(to) {
            $('.footer-text').text(to);
        });
    });

    // Header text color.
    wp.customize('header_textcolor', function(value) {
        value.bind(function(to) {
            if ('blank' === to) {
                $('.site-title, .site-description').css({
                    'display': 'none'
                });
                $('.site-titles').css({
                    'padding': '0'
                });
            } else {
                $('.site-title, .site-description').css({
                    'display': 'block'
                });
                $('.site-titles').css({
                    'padding': '1rem 1.5rem'
                });
                $('.site-title a, .site-description').css({
                    'color': to
                });
            }
        });
    });

    wp.customize('solido_options[panel-text-team]', function(value) {
        value.bind(function(to) {
            $('#solido-team h2').text(to);
        });
    });

    wp.customize('solido_options[panel-text-contact]', function(value) {
        value.bind(function(to) {
            $('.contact-wrap .info h3').text(to);
        });
    });

    wp.customize('solido_options[panel-button-contact]', function(value) {
        value.bind(function(to) {
            $('.contact-wrap .info a').text(to);
        });
    });

})(jQuery);