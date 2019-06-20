import 'jquery';

jQuery(function ($) {

    // Smooth scrolling when clicking on a hash link
    $('a[href^="#vetsHomeContent"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 700, 'swing');
    });
    $('a[href^="#vetsTeam"]').on('click', function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 700, 'swing');
    });
});