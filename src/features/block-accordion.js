/**
 * Accordion Item open/close Triggers
 */

/**
 * Toggle an accordion item open or closed.
 *
 * @param {Event} e Click event.
 */
const toggleAccordionItem = ( e ) => {
	e.preventDefault();

	const parent = e.target.closest( '.wmf-accordion-item' );
	const isExpanded = parent.getAttribute( 'aria-expanded' );

	// Open items should have the empty string as the attribute value.
	parent.toggleAttribute( 'aria-expanded', isExpanded !== '' );
	parent.scrollIntoView( { block: 'center' } );
};

/**
 * Add click handlers to accordion item titles.
 *
 * @param {Element} item The concerned element.
 */
const addAccordionToggleHandlers = ( item ) => {
	const button = item.querySelector( '.wmf-accordion-item__title' );
	button.addEventListener( 'click', toggleAccordionItem );
};

/**
 * Initialize Accordion functionality.
 */
const initializeAccordionItems = () => {
	// Hook in click events to each item.
	[ ...document.querySelectorAll( '.wmf-accordion-item' ) ].forEach(
		( item ) => addAccordionToggleHandlers( item )
	);

	// Open and scroll FAQ into view if visiting page with the anchor link for a section.
	if ( document.location.hash ) {
		const targetNode = document.querySelector( document.location.hash );
		const targetedItem =
			targetNode && targetNode.closest( '.accordion-item' );
		if ( targetedItem ) {
			targetedItem.querySelector( 'button' ).click();
			setTimeout( () => {
				// scroll-margin-top is not working as expected, possibly due to
				// the overflow on the accordion item container. Do it in JS.
				const position = targetedItem.getBoundingClientRect();
				const headerHeight = document.body.classList.contains(
					'admin-bar'
				)
					? 94
					: 62;
				window.scrollTo(
					0,
					position.top + window.scrollY - headerHeight
				);
			} );
		}
	}
};

document.addEventListener( 'DOMContentLoaded', () => {
	initializeAccordionItems();
} );
