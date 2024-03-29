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
	const button = parent.querySelector( '.carousel-slide__button' );

	if ( ! button ) {
		return;
	}

	button.setAttribute( 'aria-label', 'Open content in overlay' );

	button.addEventListener( 'click', ( e ) => {
		e.preventDefault();

		const body = document.querySelector( 'body' );
		body.style.overflow = 'hidden';

		const wrapper = document.createElement( 'div' );
		wrapper.classList.add( 'wmf-annual-reports-overlay-wrapper' );
		wrapper.style.opacity = 0;
		wrapper.setAttribute( 'role', 'alertdialog' );
		wrapper.setAttribute( 'aria-modal', 'true' );

		const popover = document.createElement( 'div' );
		popover.classList.add( 'wmf-annual-reports-overlay-popover' );
		popover.classList.add( 'overlay' );
		popover.append( overlay.content.cloneNode( true ) );
		popover.style.opacity = 0;

		const close = document.createElement( 'button' );
		close.classList.add( 'wmf-annual-reports-overlay-popover-close' );
		wrapper.setAttribute( 'aria-label', 'Close overlay' );

		const closeText = document.createElement( 'span' );
		closeText.classList.add( 'screen-reader-text' );
		closeText.innerHTML = 'Close Overlay';

		close.appendChild( closeText );
		wrapper.appendChild( popover );
		popover.appendChild( close );
		body.appendChild( wrapper );

		popover.focus();

		// Do fadeIn.
		setTimeout( () => {
			wrapper.style.opacity = 1;
			popover.style.opacity = 1;
		}, 1 );

		close.addEventListener( 'click', () => {
			wrapper.style.opacity = 0;
			popover.style.opacity = 0;

			setTimeout( () => {
				body.style.overflow = null;
				popover.blur();
				wrapper.remove();
			}, 300 );
		} );

		return false;
	} );
} );
