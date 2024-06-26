import scrollToElement from '../../helpers/scroll-to-element';

import './frontend.scss';

/**
 * Toggle container height and update aria state appropriately.
 *
 * @param {HTMLButtonElement} button      Toggle button.
 * @param {HTMLDivElement}    container   Container div.
 * @param {boolean}           forceExpand Force the expansion state.
 */
function toggleContainer( button, container, forceExpand = false ) {
	if ( ! button || ! container ) {
		// eslint-disable-next-line no-console
		console.error( 'Invalid expandable container nodes', {
			button,
			container,
		} );
		return;
	}

	const { showmoretext, showlesstext } = button.dataset;
	const { visibleAmount, visibleUnit } = container.dataset;

	// Expand if explicitly requested or if container was previously NOT expanded.
	const expanded =
		forceExpand || button.getAttribute( 'aria-expanded' ) !== 'true';

	// Update the button text and content height.
	button.setAttribute( 'aria-expanded', expanded );
	button.innerText = expanded ? showlesstext : showmoretext;
	container.setAttribute(
		'style',
		`height: ${ expanded ? 'auto' : visibleAmount + visibleUnit }`
	);
	container.classList.toggle( 'is-expanded', expanded );

	// Specific hack for a 2023 request, to anchor to the top of the containing SECTION
	// rather than just to the top of the expander.
	if ( ! expanded ) {
		scrollToElement(
			container.closest( '.wp-block-group[id^="toc-"]' ) || container
		);
	}
}

/**
 * Toggle the state of an expander.
 *
 * @param {MouseEvent} event Click event.
 */
function onClickExpander( event ) {
	if ( ! event.target.classList.contains( 'expandable-expander' ) ) {
		return;
	}
	event.preventDefault();
	const targetContainerId = event.target.getAttribute( 'aria-controls' );
	const targetContainer = document.getElementById( targetContainerId );
	toggleContainer( event.target, targetContainer );
}

/**
 * Listen for focus events within expandable-content containers and auto-open
 * the container if an element within it gains focus, for accessibility.
 */
function onFocusWithinExpander() {
	/**
	 * This event is attached to .expandable-content <div>s.
	 *
	 * @type {HTMLDivElement}
	 */
	const targetContainer = this;
	const button = document.querySelector(
		`[aria-controls="${ targetContainer.id }"]`
	);
	toggleContainer( button, targetContainer, true );
}

// Add a click event listener to each expandable block.
// When the button is clicked, toggle the is-expanded class on the content.
document.addEventListener( 'click', onClickExpander );
document.querySelectorAll( '.expandable-content' ).forEach( ( container ) => {
	container.addEventListener( 'focusin', onFocusWithinExpander );
} );

if ( module.hot ) {
	module.hot.accept();
	module.hot.dispose( () => {
		document.removeEventListener( 'click', onClickExpander );
		document.removeEventListener( 'focusin', onFocusWithinExpander );
		document
			.querySelectorAll( '.expandable-content' )
			.forEach( ( container ) => {
				container.removeEventListener(
					'focusin',
					onFocusWithinExpander
				);
			} );
	} );
}
