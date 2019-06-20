<?php

function dcm_customize_register($wp_customize) {
    require_once('custom-phone-number.php');
    require_once('custom-address.php');
}
add_action('customize_register', 'dcm_customize_register');