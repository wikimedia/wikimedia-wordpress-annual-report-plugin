const overlays = document.getElementsByClassName(
	'wp-block-wmf-reports-overlay'
);

/**
 * Return or create and return a hidden div we can add images to in order to
 * trigger those images to download before we need to display them.
 *
 * @return {HTMLDivElement} Visually-hidden container for preloading images.
 */
const getHiddenImagePrimingContainer = () => {
	const containerId = 'wmf-overlay-image-priming';
	const existingContainer = document.getElementById( containerId );
	if ( existingContainer ) {
		return existingContainer;
	}
	const container = document.createElement( 'div' );
	container.classList.add( 'screen-reader-text' );
	container.id = containerId;
	document.body.appendChild( container );
	return container;
};

Array.from( overlays ).forEach( ( overlay ) => {
	const innerHtml = ( overlay?.innerHTML || '' ).replace(
		/<\/?[^>]+(>|$)/g,
		''
	);

	if ( ! innerHtml.trim() ) {
		return;
	}

	const parent = overlay.closest( '.has_overlay' );
	const button = parent?.querySelector( '.overlay__trigger' );

	if ( ! button ) {
		return;
	}

	button.setAttribute( 'aria-label', 'Open content in overlay' );

	button.addEventListener( 'mouseover', () => {
		// Create a visually-hidden div to prime any <img>s which will be used
		// in the rendered overlay.
		const images = overlay.content
			.cloneNode( true )
			.querySelectorAll( 'img' );

		if ( ! images.length ) {
			return;
		}
		const hiddenContainer = getHiddenImagePrimingContainer();
		if ( ! hiddenContainer ) {
			return;
		}
		hiddenContainer.innerHTML = '';
		images.forEach(
			/**
			 * Remove any lazy-loading from the image and add it to the container.
			 *
			 * @param {HTMLImageElement} imgNode
			 */
			( imgNode ) => {
				imgNode.removeAttribute( 'loading' );
				hiddenContainer.appendChild( imgNode );
			}
		);
	} );

	button.addEventListener( 'click', ( e ) => {
		e.preventDefault();

		// Update URL, in case it's not already updated.
		const sectionId = parent.closest( '.wp-block-group[id]' )?.id;
		location.hash = `${ sectionId }-${ parent.id }`;

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

		const popoverBounds = popover.getBoundingClientRect();
		if ( popoverBounds.height < window.innerHeight ) {
			popover.classList.add( 'center' );
		}

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
