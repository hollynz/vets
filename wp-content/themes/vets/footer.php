<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<!-- end main body content (after fixed nav) -->
</div>
<footer>
	<div class="vets-footer">
		<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.2144408224653!2d170.4848863159401!3d-45.907022279108574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa82eaeb5c149f7ab%3A0x97518a345926510f!2svets%40st.clair!5e0!3m2!1sen!2snz!4v1560745883342!5m2!1sen!2snz">
		</iframe>
		<div class="footer-content">
			<div class="grid-container">
				<div class="grid-x">
					<div class="cell medium-3">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="vets-logo" src="<?php bloginfo('template_directory');?>/src/assets/images/vets/logo-transparent-white.png" alt="Vets@St.Clair">
						</a>
					</div>
					<div class="footer-content-right cell medium-9 grid-x">
						<div class="cell medium-3 primary-menu">
							<?php foundationpress_top_bar_r(); ?>
						</div>
						<div class="cell medium-4 clinic-hours">
							<h2>Clinic Hours</h2>
							<p>
								Mon/Tues
							</p>
							<p>
								8.30–6.00
							</p>
							<p>
								Wed–Fri
							</p>
							<p>
								8.30–5.00
							</p>
						</div>
						<div class="cell medium-5 contact-details">
							<?php get_template_part('template-parts/vets-contact-menu'); ?>
						</div>
					</div>
					
				</div>		
			</div>
		</div>
	</div>
	

	
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div>Close off-canvas content
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
