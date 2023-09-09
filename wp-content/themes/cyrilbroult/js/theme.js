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

// const menuObserver = new IntersectionObserver( ( entries ) => {
// 	entries.forEach( ( entry ) => {
// 		if ( ( Boolean( document.querySelector( 'body' ) ) ) && entry.isIntersecting ) {
// 			document.querySelector( 'body' ).classList.add( 'is-desktop-menu-scrolled' );
// 		} else {
// 			document.querySelector( 'body' ).classList.remove( 'is-desktop-menu-scrolled' );
// 		}
// 	} );
// }, {
// 	threshold: 0.5,
// } );

// document.addEventListener( 'DOMContentLoaded', () => {
// 	mobileMenu();
// 	menuObserver.observe( document.querySelector( '.entry-content>section+section' ) );
// 	homeSlider.init();
// } );

// Menu Reduction on scroll
window.addEventListener( 'scroll', () => {
	let scrollLimit;
	// eslint-disable-next-line no-unused-expressions
	document.querySelector( 'body' ).classList.contains( 'home' ) ? scrollLimit = 500 : scrollLimit = 100;
	if ( window.scrollY > scrollLimit ) {
		document.querySelector( 'body' ).classList.add( 'is-desktop-menu-scrolled' );
	} else {
		document.querySelector( 'body' ).classList.remove( 'is-desktop-menu-scrolled' );
	}
} );
