<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<header class="site-header" role="banner">
		<div class="grid-container vets-nav-top">
			<?php get_template_part('library/vets-contact-menu'); ?>
			<div class="vets-contact-item">
				<a href="https://www.facebook.com/pages/category/Veterinarian/Vets-at-St-Clair-109278152427055/" target="_blank">
					<i class="fab fa-facebook-square"></i>
				</a>
			</div>
		</div>

		<div class="grid-container vets-nav">
			<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
				<!-- Mobile left nav (logo) -->
				<div class="title-bar-left">
					<button aria-label="<?php _e( 'Main Menu', 'foundationpress' ); ?>" class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
					<span class="site-mobile-title title-bar-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="vets-logo" src="<?php bloginfo('template_directory');?>/src/assets/images/vets/logo-transparent.png" alt="Vets@St.Clair">
						</a>
					</span>
				</div>
			</div>

			<nav class="site-navigation top-bar" role="navigation" id="<?php foundationpress_mobile_menu_id(); ?>">
				<!-- Desktop left nav (logo) -->
				<div class="top-bar-left">
					<div class="site-desktop-title top-bar-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="vets-logo" src="<?php bloginfo('template_directory');?>/src/assets/images/vets/logo-transparent.png" alt="Vets@St.Clair">
						</a>
					</div>
				</div>
				<!-- Link to right nav template (mobile and desktop) -->
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>
					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
		</div>

	</header>

	<!-- main body content after fixed nav -->
	<div class="vets-main-content">
