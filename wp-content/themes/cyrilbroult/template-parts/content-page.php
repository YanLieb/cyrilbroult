<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cyrilbroult
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (!is_front_page()) : ?>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<?php $home_slider = get_field('slider_homepage'); ?>
	<div id="home-bg-slider" class="swiper">
		<div class="swiper-wrapper">
			<?php if (isset($home_slider) && !empty($home_slider)) : ?>
				<?php foreach ($home_slider as $key => $photo) : ?>
					<?php if (!empty($photo['sizes']['2048x2048'])) : ?>
						<img src="<?php echo $photo['sizes']['2048x2048']; ?>" id="home_bg_<?php echo $key; ?>" class="home-bg-image swiper-slide" alt="<?php if ($photo['alt']) {
																																							echo $photo['alt'];
																																						} else {
																																							echo $photo['name'];
																																						} ?>">
					<?php endif; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>

	<?php cyrilbroult_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'cyrilbroult'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'cyrilbroult'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<div class="edit-link container">',
				'</div>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->