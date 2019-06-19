<?php 

wp_nav_menu(
			array(
                'menu_class' => 'services-list',
				'container_class'     => 'pet-care-menu services-menu',
				'theme_location' => 'pet-care-menu',
				'fallback_cb'    => false,
				// 'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);