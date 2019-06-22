import 'jquery';

jQuery(function($) {
    let button_submit = $('.button-submit'), button_reset = $('.button-reset');
    button_submit.addClass('vets-button');
    button_reset.addClass('vets-button');
    button_submit.html('<svg><rect/></svg><span>Submit</span>');
    button_reset.html('<svg><rect/></svg><span>Submit</span>');
});