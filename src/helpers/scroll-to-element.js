const ADDITIONAL_MARGIN = 8; // 0.5rem, for comfort.

/**
 * Check whether an element is fully visible within the window viewport.
 *
 * @param {HTMLElement} element
 * @return {bool} Whether the element is fully in-viewport.
 */
function isElementVisible( element ) {
	const { top, bottom } = element.getBoundingClientRect();
	const { innerHeight } = window;
	return top >= 0 && bottom <= innerHeight;
}

/**
 * Variant of scrollIntoView( { block: 'start' } ) that accounts for the fixed header size.
 *
 * @param {HTMLElement} element      A DOM node to scroll into view.
 * @param {bool}        onlyIfNeeded Only perform the scroll if element is not already in view.
 */
export default function scrollToElement( element, onlyIfNeeded ) {
	if ( onlyIfNeeded && isElementVisible( element ) ) {
		return;
	}

	const scrollMargin =
		window
			.getComputedStyle( document.body )
			.getPropertyValue( '--scroll-margin-top' ) || 0;

	window.scrollTo( {
		behavior: 'smooth',
		top:
			element.getBoundingClientRect().top -
			document.body.getBoundingClientRect().top -
			( parseInt( scrollMargin, 10 ) + ADDITIONAL_MARGIN ),
	} );
}
