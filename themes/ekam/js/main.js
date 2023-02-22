(function ($) {

    Drupal.behaviors.ekamtheme = {
        attach: function (context, settings) {

            'use strict';

            $(window).scroll(function () {
                $('.front').toggleClass("sticky bg-dark", ($(window).scrollTop() > 100));
            });

        }
    }

    var header = $('body');
    var menu = $('#sidebar');
    var hieghtThreshold = $(".sidebar").offset().top;
    var hieghtThreshold_end = $(".sidebar").offset().top + $(".sidebar").height();

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= hieghtThreshold && scroll <= hieghtThreshold_end) {
            header.addClass('fixed-sidebar');
            menu.addClass('fixed-sidebar');
        } else {
            header.removeClass('fixed-sidebar');
            menu.removeClass('fixed-sidebar');
        }
    });

})(jQuery, Drupal);
