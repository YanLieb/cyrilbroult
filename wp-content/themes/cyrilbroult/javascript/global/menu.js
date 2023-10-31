const responsiveMenuToggle = () => {
	const responsiveMenuBtn = document.querySelector('#responsive-menu-btn');
	const body = document.querySelector('body');
	if ( Boolean( body ) && body.classList.contains( 'is-menu-mobile-visible' ) ) {
		body.classList.remove( 'is-menu-mobile-visible' );
	}
	if ( Boolean( responsiveMenuBtn ) && Boolean( body ) ) {
		responsiveMenuBtn.addEventListener( 'click', () => {
			body.classList.toggle( 'is-menu-mobile-visible' );
		} );
	}
}
document.addEventListener('DOMContentLoaded', () => {
	responsiveMenuToggle();
})
