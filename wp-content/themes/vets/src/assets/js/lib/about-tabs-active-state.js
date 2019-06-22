import 'jquery';

jQuery(function($) {
    if(window.location.pathname.indexOf('services') > 0) {
        $('.services-tab-hr').addClass('is-active');
        $('.appointments-tab-hr').removeClass('is-active');
        $('.pet-care-tab-hr').removeClass('is-active');
    }else if(window.location.pathname.indexOf('appointments') > 0) {
        $('.services-tab-hr').removeClass('is-active');
        $('.appointments-tab-hr').addClass('is-active');
        $('.pet-care-tab-hr').removeClass('is-active');
    }else if(window.location.pathname.indexOf('pet-care') > 0) {
        $('.services-tab-hr').removeClass('is-active');
        $('.appointments-tab-hr').removeClass('is-active');
        $('.pet-care-tab-hr').addClass('is-active');
    }
});