import 'jquery';

jQuery(function($) {
    let dropdownMenu = $('.about-menu');
    let dropdownHeading = $('.about-dropdown-heading');
    let hr = $('.about-menu-hr');
    let dropdownIcon = $('.fa-sort-down');
    let upIcon = $('.fa-sort-up');
    dropdownHeading.click(function() {
        dropdownMenu.toggleClass('is-active');
        hr.toggleClass('is-active');
        dropdownIcon.toggleClass('is-active');
        upIcon.toggleClass('is-active');
    });
});