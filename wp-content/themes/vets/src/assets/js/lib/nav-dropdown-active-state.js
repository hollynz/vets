import 'jquery';

jQuery(function($) {
    if(window.location.pathname.indexOf('services') > 0) {
        $('#menu-primary .menu-item#menu-item-176').addClass('current-menu-parent');
        $('#menu-primary .menu-item#menu-item-177').addClass('current-menu-item');
    }else if(window.location.pathname.indexOf('pet-care') > 0) {
        $('#menu-primary .menu-item#menu-item-176').addClass('current-menu-parent');
        $('#menu-primary .menu-item#menu-item-179').addClass('current-menu-item');
    }
});