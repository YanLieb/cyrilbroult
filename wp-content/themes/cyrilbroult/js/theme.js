/**
 * File theme.js.
 */
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs';

//homepage background slider
const homeSlider = new Swiper( '#home-bg-slider.swiper', {
	slidesPerView: 1,
	speed: 3000,
	effect: 'fade',
	loop: true,
	allowTouchMove: false,
	fadeEffect: {
		crossFade: true,
	},
	autoplay: {
		delay: 6000,
	},
}
);

//responsive menu
const mobileMenu = () => {
	const menuBtn = document.querySelector( '#responsive-menu-icon' );
	const body = document.querySelector( 'body' );
	if ( Boolean( menuBtn ) && Boolean( body ) ) {
		menuBtn.addEventListener( 'click', () => {
			body.classList.toggle( 'is-responsive-menu-visible' );
		} );
	}
};

document.addEventListener( 'DOMContentLoaded', () => {
	mobileMenu();
	homeSlider.init();
} );
