const overlays = document.getElementsByClassName(
	'wp-block-wmf-reports-overlay'
);

/**
 * Build an object containing the DOM elements needed for tab trapping.
 *
 * This calculates the "allowed" items for tab navigation, as well as
 * determining the first and last items in the resulting list.
 *
 * @param {Element} all       Every focusable element available.
 * @param {Array}   [skip=[]] The elements (if any) to skip.
 * @return {{last, allowed, skip, first}} Compiled object with DOM element lists.
 */
const calculateFocusableElements = ( all, skip = [] ) => {
	const allowed = all.filter( ( element ) => ! skip.includes( element ) );
	return {
		first: allowed[ 0 ],
		last: allowed[ allowed.length - 1 ],
		all,
		allowed,
		skip,
	};
};

/**
 * Return all focusable elements in a DOM element.
 *
 * @param {Element} element A DOM element.
 * @return {Array} All potentially focusable elements in the element.
 */
const getFocusableInside = ( element ) => {
	return Array.from(
		element.querySelectorAll(
			'a:not([disabled]), button:not([disabled]), input:not([disabled]), textarea:not([disabled]), select:not([disabled]), details:not([disabled]), [tabindex]:not([tabindex="-1"]:not([disabled]))'
		)
	);
};

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

		// eslint-disable-next-line @wordpress/no-global-active-element
		const activeElement = document.activeElement;

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
			document.removeEventListener( 'keydown', trapFocusListener );
			wrapper.style.opacity = 0;
			popover.style.opacity = 0;

			setTimeout( () => {
				body.style.overflow = null;
				activeElement.focus();
				wrapper.remove();
			}, 300 );
		} );

		// Get the first focusable item in the overlay.
		const { first } = calculateFocusableElements(
			getFocusableInside( popover )
		);

		first.focus();
		document.addEventListener( 'keydown', trapFocusListener );

		return false;
	} );
} );

/**
 * Detect keydown events.
 *
 * @param {Object} event Event object.
 */
const trapFocusListener = ( event ) => {
	const isTabPressed = event.key === 'Tab' || event.keyCode === 9;

	if ( ! isTabPressed ) {
		return;
	}

	const popover = document.querySelector(
		'.wmf-annual-reports-overlay-popover'
	);

	// Get the first and last focusable item in the overlay.
	const { first, last } = calculateFocusableElements(
		getFocusableInside( popover )
	);

	if ( event.shiftKey ) {
		// If shift key pressed for shift + tab combination.
		// eslint-disable-next-line @wordpress/no-global-active-element
		if ( document.activeElement === first ) {
			last.focus(); // Add focus for the last focusable element.
			event.preventDefault();
		}
	} else {
		// If only the tab key is pressed.
		// eslint-disable-next-line @wordpress/no-global-active-element
		if ( document.activeElement !== last ) {
			return;
		}

		// If focus has reached the last focusable element,
		// then focus first focusable element after pressing tab.
		first.focus(); // Add focus for the first focusable element.
		event.preventDefault();
	}
};
