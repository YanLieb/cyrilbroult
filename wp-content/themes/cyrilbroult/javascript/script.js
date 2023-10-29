/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

const responsiveMenuToggle = () => {
	const responsiveMenuBtn = document.querySelector('#responsive-menu-btn');
	const header = document.querySelector('header#masthead');
	if ( Boolean( header ) && header.classList.contains( 'is-menu-mobile-visible' ) ) {
		header.classList.remove( 'is-menu-mobile-visible' );
	}
	if ( Boolean( responsiveMenuBtn ) && Boolean( header ) ) {
		responsiveMenuBtn.addEventListener( 'click', () => {
			header.classList.toggle( 'is-menu-mobile-visible' );
		} );
	}
}
document.addEventListener('DOMContentLoaded', () => {
	responsiveMenuToggle();
})
