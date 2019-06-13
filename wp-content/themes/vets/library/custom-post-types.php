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
                'menu_position' => 5,
                'supports' => array(
                    'title',
                    'editor',
                    'thumbnail'
                ),
                // non-custom taxonomies
                'taxonomies' => array('category')
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
                'menu_position' => 6,
                'supports' => array(
                    'title',
                    'editor',
                    'thumbnail'
                )
            )
        );
    }
endif;
add_action('init', 'vets_create_post_types');