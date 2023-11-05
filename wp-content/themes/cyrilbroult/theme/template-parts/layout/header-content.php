<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyrilbroult
 */

?>

<header id="masthead">

	<div id="responsive-menu-btn">
		<span></span>
		<span></span>
		<span></span>
	</div>

	<div id="site-navigation">
		<?php if ( has_custom_logo() ) :
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
			<div id="header-site-logo">
				<img src="<?php echo esc_url( $custom_logo[0] ) ?>" alt="<?php echo get_bloginfo( 'name' ) ?>"
					 width="60"
					 height="60">
			</div>
		<?php elseif ( is_front_page() ): ?>
			<h1><?php bloginfo( 'name' ); ?></h1>
		<?php else : ?>
			<p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</p>
		<?php endif; ?>

		<nav aria-label="<?php esc_attr_e( 'Main Navigation', 'cyrilbroult' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>'
				)
			);
			$social_menu = add_social_networks_to_menu();
			echo $social_menu;
			?>
		</nav>
	</div><!-- #site-navigation -->
</header><!-- #masthead -->
