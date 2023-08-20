/**
 * File theme.js.
 */
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs';

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

console.log( homeSlider );
