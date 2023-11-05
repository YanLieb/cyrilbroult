<?php
	/**
	 * Template part for displaying the footer content
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package cyrilbroult
	 */

?>

<footer id="colophon">
	<div class="footer-wrapper container">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<aside role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'cyrilbroult' ); ?>">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside>
		<?php endif; ?>

		<div id="footer-logo">
			<?php
				if ( get_custom_logo() ) {
					the_custom_logo();
				} ?>
		</div>
		<div id="footer-links">
			<div id="footer-social">
				<?php $social_menu = add_social_networks_to_menu();
					echo $social_menu; ?>
			</div>

			<?php if ( has_nav_menu( 'menu-2' ) ) : ?>
				<nav id="footer-menu" aria-label="<?php esc_attr_e( 'Footer Menu', 'cyrilbroult' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_class'     => 'footer-menu',
								'depth'          => 1,
							)
						);
					?>
				</nav>
			<?php endif; ?>
		</div>
	</div>
		<div id="footer-credits">

			<?php
				/* translators: 1: WordPress link, 2: WordPress. */
				printf(
					'<a href="%1$s">Dev & Design %2$s</a>.',
					esc_url( __( 'https://www.linkedin.com/in/yannickliebnau/', 'cyrilbroult' ) ),
					'Yannick Liebnau'
				);
			?>
		</div>
</footer><!-- #colophon -->
