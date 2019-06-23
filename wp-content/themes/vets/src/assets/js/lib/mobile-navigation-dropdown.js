import 'jquery';

jQuery(function($) {
    let burger = $('.menu-icon');
    let dropdown = $('.top-bar');
    burger.click(function() {
        dropdown.toggleClass('active');
    });
});