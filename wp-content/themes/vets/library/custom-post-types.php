<?php if(!function_exists('vets_create_post_types')) :
    function vets_create_post_types()
    {
        register_post_type(
            'services',
            array(
                'labels' => array(
                    'name' => __('Services'),
                    'singular_name' => __('Service')
                ),
                'public' => true,
                // 'has_archive' => true,
                'menu_position' => 2,
                'supports' => array(
                    'title',
                    'editor'
                ),
                // non-custom taxonomies
                'taxonomies' => array('category')
            )
        );
        register_post_type(
            'pet-care',
            array(
                'labels' => array(
                    'name' => __('Pet Care'),
                    'singular_name' => __('Pet Care')
                ),
                'public' => true,
                // 'has_archive' => true,
                'menu_position' => 3,
                'supports' => array(
                    'title',
                    'editor'
                )
            )
        );
        register_post_type(
            'team-members',
            array(
                'labels' => array(
                    'name' => __('Team Members'),
                    'singular_name' => __('Team Member')
                ),
                'public' => true,
                // 'has_archive' => true,
                'menu_position' => 5,
                'supports' => array(
                    'title',
                    'editor',
                    'thumbnail',
                    'excerpt'
                )
            )
        );
    }
endif;
add_action('init', 'vets_create_post_types');