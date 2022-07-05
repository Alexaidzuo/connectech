<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package connectech
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-top">
					<?php

					$telephone = get_field( 'telephone', 'option' );
					$location = get_field( 'location', 'option' );
					$email = get_field( 'email', 'option');
					$days = get_field( 'working_days', 'option' );
					$hours = get_field( 'working_hours', 'option' );

					?>

					<div class="container footer-top_container">
						<div class="row footer-top_row">
							<div class="col-md-3 footer-top_phone">
								<?php if ($telephone) : ?>
								<i class="icon-tel"></i>
								<span>TELEPHONE</span>
								<a href="tel:<?php echo $telephone; ?>"><?php echo $telephone ?></a>
								<?php endif; ?>
							</div>
							<div class="col-md-3 footer-top_location">
								<?php if ($location) : ?>
								<i class="icon-location"></i>
								<a href="#"><?php echo $location; ?></a>
								<?php endif; ?>
							</div>
							<div class="col-md-3 footer-top_email">
								<?php if ($email) : ?>
									<i class="icon-email"></i>
									<span>SUPPORT</span>
									<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
								<?php endif; ?>
							</div>
							<div class="col-md-3 footer-top_working-time">
							<i class="icon-time"></i>
							<?php

							if ($days) {
								echo '<span>';
								echo $days;
								echo '</span>';
							}

							if ($hours) {
								echo '<span>';
								echo $hours;
								echo '</span>';
							}

							?>
							</div>
						</div>
					</div>
				</div>
				<div class="widget-wrapper">
					<div class="container">
						<div class="row footer-widgets-wrapper">
							<?php get_template_part('template-parts/footer', 'widgets'); ?>
						</div>
					</div>
				</div>
				<?php if (get_theme_mod('footer_customizer_text') != ''): ?>
					<div class="site-info">
						<div class="container">
							<div class="footer-copyright col-md-12 align-center"><?php echo get_theme_mod('footer_customizer_text'); ?></div>
						</div>
					</div><!-- .site-info -->
				<?php endif; ?>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<!-- W3TC-include-css -->
		<?php wp_footer(); ?>
	<!-- W3TC-include-js-head -->
	</body>
</html>
