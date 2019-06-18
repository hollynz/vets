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
					<div class="footer-content-text grid-x">
						<div class="cell medium-4 primary-menu">
							<?php foundationpress_top_bar_r(); ?>
						</div>
						<div class="cell medium-4 clinic-hours">
							<div class="hours">
							<h2 class="vets-heading-size-small">Clinic Hours</h2>

								<p class="subheading">
									Mon/Tues
								</p>
								<p>
									8.30–6.00
								</p>
								<p class="subheading">
									Wed–Fri
								</p>
								<p>
									8.30–5.00
								</p>
							</div>
						</div>
						<div class="cell medium-4 contact-details">
							<?php get_template_part('template-parts/vets-contact-menu'); ?>
							<div class="vets-contact-item facebook">
								<a href="https://www.facebook.com/pages/category/Veterinarian/Vets-at-St-Clair-109278152427055/" target="_blank">
									<div><p>Become our Friend!</p></div><i class="fab fa-facebook-square"></i>
								</a>
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
