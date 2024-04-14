const ADDITIONAL_MARGIN = 8; // 0.5rem, for comfort.

/**
 * Variant of scrollIntoView( { block: 'start' } ) that accounts for the fixed header size.
 *
 * @param {HTMLElement} element A DOM node to scroll into view.
 */
export default function scrollToElement( element ) {
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
