/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
jQuery(function($) {

    var container, button, menu;

    container = $('#site-navigation');
    if (!container) {
        return;
    }

    button = $('.menu-toggle');
    if ('undefined' === typeof button) {
        return;
    }

    buttonUp = $('.button-up');

    menu = container.find('ul');

    // Hide menu toggle button if menu is empty and return early.
    if (!menu) {
        button.css('display', 'none');
        return;
    }

    menu.attr('aria-expanded', 'false');
    if (!menu.hasClass('nav-menu')) {
        menu.addClass(' nav-menu');
    }
    // toggle menu on mobile view
    button.click(function(e) {
        e.preventDefault();
        container.toggleClass('toggled');

    });


    // button up
    buttonUp.hide();

    // show or hide on scroll
    $(window).scroll(function() {

        if ($(this).scrollTop() > 200) {

            buttonUp.fadeIn();

        } else {

            buttonUp.fadeOut();
        }

    });

    // button up on click scroll top
    buttonUp.click(function(e) {
        e.preventDefault();
        $('html,body').animate({ scrollTop: 0 }, 500);
    })

});