<?php

    $wp_customize->add_section(
        'vets-phone-number',
        array(
            'title'     => 'Phone Number',
            'priority'  => 30
        )
    );
    
    $wp_customize->add_setting(
        'vets-phone-number-setting',
        array(
            'default'      => '',
            'transport'    => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'vets-phone-number-control',
            array(
                'label'    => 'Phone Number',
                'settings' => 'vets-phone-number-setting',
                'section'  => 'vets-phone-number',
                'type' => 'text'
            )
        )
    );