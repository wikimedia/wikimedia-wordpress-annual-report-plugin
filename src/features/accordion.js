document.addEventListener( 'DOMContentLoaded', () => {
	const accordions = document.querySelectorAll(
		'.single-wmf-report .wp-block-shiro-accordion'
	);

	if ( ! accordions ) {
		return;
	}

	Array.from( accordions ).forEach( ( accordion ) => {
		accordion
			.querySelector( '.accordion-item' )
			.setAttribute( 'aria-expanded', '' );
	} );
} );
