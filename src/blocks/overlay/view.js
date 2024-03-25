const overlays = document.getElementsByClassName(
	'wp-block-wmf-reports-overlay'
);

Array.from( overlays ).forEach( ( overlay ) => {
	const innerHtml = ( overlay?.innerHTML || '' ).replace(
		/<\/?[^>]+(>|$)/g,
		''
	);

	if ( ! innerHtml.trim() ) {
		return;
	}

	const parent = overlay.closest( '.wp-block-wmf-reports-story' );
	const button = parent.querySelector(
		'.carousel-slide__button, overlay-trigger'
	);

	if ( ! button ) {
		return;
	}

	button.addEventListener( 'click', ( e ) => {
		e.preventDefault();

		alert( 'TRIGGER' + innerHtml.trim() );

		return false;
	} );
} );
