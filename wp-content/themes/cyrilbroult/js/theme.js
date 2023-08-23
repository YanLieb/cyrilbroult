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
	if ( Boolean( body ) && body.classList.contains( 'is-menu-mobile-visible' ) ) {
		body.classList.remove( 'is-menu-mobile-visible' );
	}
	if ( Boolean( menuBtn ) && Boolean( body ) ) {
		menuBtn.addEventListener( 'click', () => {
			body.classList.toggle( 'is-menu-mobile-visible' );
		} );
	}
};

const changeMenuHeight = () => {
	const menu = document.querySelector( '#masthead.site-header' );
	const siteLogo = document.querySelector( '.custom-logo-link img' );

	if ( Boolean( menu ) && Boolean( siteLogo ) ) {
		menu.style.height = '0px';
		siteLogo.style.width = '40px';
	}
};

const menuObserver = new IntersectionObserver( ( entries ) => {
	entries.forEach( ( entry ) => {
		const menu = document.querySelector( '#masthead.site-header' );
		const siteLogo = document.querySelector( '.custom-logo-link img' );
		if ( ( Boolean( menu ) && Boolean( siteLogo ) ) && entry.isIntersecting ) {
			menu.style.padding = '0.25em 0';
			siteLogo.style.width = '40px';
		} else {
			menu.style.padding = '1em 0';
			siteLogo.style.width = '90px';
		}
	} );
}, {
	threshold: 0.5,
} );

document.addEventListener( 'DOMContentLoaded', () => {
	mobileMenu();
	menuObserver.observe( document.querySelector( '.entry-content>section+section' ) );
	homeSlider.init();
} );
