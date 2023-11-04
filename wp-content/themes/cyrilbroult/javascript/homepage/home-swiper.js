import Swiper from 'swiper/bundle';
import {Navigation, Pagination, EffectFade, EffectCreative} from "swiper/modules";
import 'swiper/css';

new Swiper('#home-slider .swiper', {
	modules: [Pagination, EffectFade],
	slidesPerView: 1,
	effect: 'fade',
	fadeEffect: {
		crossFade: true,
	},
	loop: true,
	speed: 2500,
	autoplay: {
		delay: 5000,
	},
	pagination: {
		el: '#home-slider .swiper-pagination',
		type: 'progressbar'
	}
});

new Swiper('#home-reassurances .swiper', {
	modules: [Navigation],
	slidesPerView: 1,
	navigation: {
		nextEl: '#home-reassurances .swiper-button-next',
		prevEl: '#home-reassurances .swiper-button-prev',
	},
	breakpoints: {
		640: {
			slidesPerView: 3
		}

	}
})

new Swiper('#home-testimonials .swiper', {
	modules: [Pagination, EffectCreative],
	slidesPerView: 1,
	pagination: {
		el: '#home-testimonials .swiper-pagination',
		dynamicBullets: true,
	},
	grabCursor: true,
	effect: "creative",
	creativeEffect: {
		prev: {
			scale: "0.8",
			opacity: "0"
		},
		next: {
			scale: "1",
			opacity: "0"
		},
	},
})

new Swiper('#home-latest-news .swiper', {
	modules: [Navigation],
	slidesPerView: 1,
	spaceBetween: 20,
	navigation: {
		nextEl: '#home-latest-news .swiper-button-next',
		prevEl: '#home-latest-news .swiper-button-prev',
	},
	breakpoints: {
		640: {
			slidesPerView: 1.1
		},
		768: {
			slidesPerView: 2.1
		},
		1024: {
			slidesPerView: 3
		}
	}
});
