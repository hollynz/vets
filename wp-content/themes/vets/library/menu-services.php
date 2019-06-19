<?php 

wp_nav_menu(
			array(
                'menu_class' => 'services-list',
				'container_class'     => 'services-menu services-menu',
				'theme_location' => 'services-menu',
				'fallback_cb'    => false,
				// 'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);