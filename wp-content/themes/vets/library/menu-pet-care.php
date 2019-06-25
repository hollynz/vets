<?php 

wp_nav_menu(
			array(
                'menu_class' => 'about-list',
				'container_class'     => 'pet-care-menu about-menu',
				'theme_location' => 'pet-care-menu',
				'fallback_cb'    => false,
				// 'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);