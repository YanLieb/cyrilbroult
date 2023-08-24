<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cyrilbroult
 */

?>

<?php if (!is_active_sidebar('footer-widget-area')) {
	return;
}
?>
<footer id="colophon" class="site-footer">
	<?php dynamic_sidebar('footer-widget-area'); ?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>