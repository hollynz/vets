<?php

    $wp_customize->add_section(
        'vets-clinic-hours',
        array(
            'title'     => 'Clinic Hours',
            'priority'  => 30
        )
    );
    
    $wp_customize->add_setting(
        'vets-address-setting',
        array(
            'default'      => '154 Forbury Road, St. Clair, Dunedin',
            'transport'    => 'postMessage'
        )
    );
    
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'vets-address-control',
            array(
                'label'    => 'Address',
                'settings' => 'vets-address-setting',
                'section'  => 'vets-address',
                'type' => 'text'
            )
        )
    );