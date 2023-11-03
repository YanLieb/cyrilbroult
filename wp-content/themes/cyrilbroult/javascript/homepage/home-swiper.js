import Swiper from 'swiper/bundle';
import 'swiper/css';

new Swiper('#home-slider .swiper', {
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
	navigation: {
		nextEl: '#home-slider .swiper-controls .swiper-button-next',
		prevEl: '#home-slider .swiper-controls .swiper-button-prev',
	},
	pagination: {
		el: '#home-slider .swiper-controls .swiper-pagination',
		type: 'bullets',
		clickable: true,
	}
});

new Swiper ('#home-reassurances.swiper', {
	slidesPerView: 1,
	spaceBetween: 20,
	navigation: {
		nextEl: '#home-reassurances .swiper-controls .swiper-button-next',
		prevEl: '#home-reassurances .swiper-controls .swiper-button-prev',
	},
	breakpoints: {
		640: {
			slidesPerView: 3
		}

	}
})

new Swiper ('#home-testimonials.swiper', {
	slidesPerView: 1,
	pagination: {
		el: '#home-testimonials .swiper-controls .swiper-pagination',
		type: 'bullets',
		clickable: true,
	}
	})
