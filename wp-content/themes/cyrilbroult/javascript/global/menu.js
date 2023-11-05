const responsiveMenuToggle = () => {
	const responsiveMenuBtn = document.querySelector('#responsive-menu-btn');
	const body = document.querySelector('body');
	if (Boolean(body) && body.classList.contains('is-menu-mobile-visible')) {
		body.classList.remove('is-menu-mobile-visible');
	}
	if (Boolean(responsiveMenuBtn) && Boolean(body)) {
		responsiveMenuBtn.addEventListener('click', () => {
			body.classList.toggle('is-menu-mobile-visible');
		});
	}
}

const scrolledMenu = () => {
	/** @type {HTMLElement} */
	let menuElement,
		elementToObserve = document.querySelector('#home-slider .slider-content h2');

	if (window.innerWidth <= 768) {
		menuElement = document.querySelector('#masthead #responsive-menu-btn');
	} else {
		menuElement = document.querySelector('#masthead');
	}

	/** @type {Object} */
	const observerOptions = {
		root: null,
		rootMargin: '0px',
		threshold: 1
	}

	/** @type {IntersectionObserver} */
	const menuObserver = new IntersectionObserver((entries) => {
		entries.forEach((entry) => {
			const observedRect = entry.target.getBoundingClientRect();
			const targetRect = menuElement.getBoundingClientRect();

			if (!menuElement.classList.contains('is-scrolled') && observedRect.top <= targetRect.bottom) {
				menuElement.classList.add('is-scrolled');
			} else {
				menuElement.classList.remove('is-scrolled');
			}
		});
	}, observerOptions);

	menuObserver.observe(elementToObserve);
}
document.addEventListener('DOMContentLoaded', () => {
	responsiveMenuToggle();
	scrolledMenu();
})
