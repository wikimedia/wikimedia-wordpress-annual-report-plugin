/**
 * @type {HTMLDivElement}
 */
const jumplist = document.querySelector( '.wmf-toc-jumplist' );
/**
 * @type {HTMLAnchorElement[]}
 */
const jumplistItems = jumplist.querySelectorAll( '.wmf-toc-jumplist__items a' );
/**
 * @type {HTMLDivElement}
 */
const progressIndicator = jumplist.querySelector( '.wmf-toc-progress' );

const ACTIVE_SECTION_HEADER_MARGIN = 200;

/**
 * Determine the element to use for reading progress measurements.
 *
 * @return {HTMLElement} Selected content element.
 */
function getMainElement() {
	return (
		document.querySelector( 'main' ) ||
		document.querySelector( 'article' ) ||
		document.body
	);
}

/**
 * Update all ToC progress circles and bars on scroll.
 */
function updateProgressIndicators() {
	const clientHeight = getMainElement().clientHeight;
	const scrollTop = document.documentElement.scrollTop;
	// Cap at 100, as Shiro theme structure can lead to >100% values.
	const percentage = +Math.min(
		( scrollTop / clientHeight ) * 100,
		100
	).toFixed( 2 );
	const remaining = ( 100 - percentage ) / 100;

	// Handle linear (desktop) indicator.
	progressIndicator.setAttribute( 'style', `width:${ percentage }%` );

	// Handle radial (mobile) indicator.
	const radialIndicator = progressIndicator.querySelector( 'circle' );
	const radius = +radialIndicator.getAttribute( 'r' );
	if ( isNaN( radius ) ) {
		return;
	}
	const circumference = Math.PI * radius * 2;
	radialIndicator.setAttribute(
		'stroke-dashoffset',
		`${ ( remaining * circumference ).toFixed( 0 ) }px`
	);
}

/**
 * Given the list of jumplist section anchors, identify which container is
 * visible on screen.
 *
 * @return {?HTMLAnchorElement} Active section's anchor link, or null.
 */
function identifyVisibleSection() {
	for ( const sectionLink of jumplistItems ) {
		const anchorSelector = sectionLink.getAttribute( 'href' );
		const targetContainer = document.querySelector( anchorSelector );
		const rect = targetContainer.getBoundingClientRect();
		if (
			rect.top <= ACTIVE_SECTION_HEADER_MARGIN &&
			rect.top + rect.height >= ACTIVE_SECTION_HEADER_MARGIN &&
			rect.top + rect.height >= 0
		) {
			return sectionLink;
		}
	}
	// Could not determine active section.
	return null;
}

/**
 * Update the active (visible) section indicator in the jumplist.
 */
function updateJumplistActiveItem() {
	const activeSectionLink = identifyVisibleSection();
	if ( ! activeSectionLink ) {
		return;
	}

	jumplistItems.forEach( ( sectionLink ) => {
		sectionLink.classList.toggle(
			'wmf-toc-jumplist__active-item',
			activeSectionLink === sectionLink
		);
	} );
}

/**
 * Scroll handler.
 */
function onScroll() {
	updateProgressIndicators();
	updateJumplistActiveItem();
}

/**
 * Read the ToC and initialize progress indicator menus.
 */
function initializeProgressIndicator() {
	window.addEventListener( 'scroll', onScroll );
	window.addEventListener( 'hashchange', updateJumplistActiveItem );
}

initializeProgressIndicator();

const jumplistOpenClass = 'wmf-toc-jumplist--modal-open';

/**
 * Open the jumplist modal.
 */
const openJumplistModal = () => {
	document
		.querySelector( '.wmf-toc-jumplist' )
		.classList.add( jumplistOpenClass );
};

/**
 * Close the jumplist modal.
 */
const closeJumplistModal = () => {
	document
		.querySelectorAll( `.${ jumplistOpenClass }` )
		.forEach( ( node ) => node.classList.remove( jumplistOpenClass ) );
};

document
	.querySelector( '.wmf-toc-progress button' )
	.addEventListener( 'click', openJumplistModal );

// Delegated lister. Switch behavior based on element clicked.
document.addEventListener( 'click', ( { target } ) => {
	const targetIs = ( className ) =>
		target?.classList?.contains?.( className );

	if (
		targetIs( 'wmf-toc-jumplist__modal-blanket' ) ||
		targetIs( 'wmf-toc-jumplist__modal-close' ) ||
		( target.nodeName === 'A' &&
			/^#[A-Za-z0-9-]+$/.test( target.getAttribute( 'href' ) ) )
	) {
		closeJumplistModal();
	}
} );

if ( module.hot ) {
	module.hot.accept();
	module.hot.dispose( () => {
		window.removeEventListener( 'scroll', onScroll );
	} );
}
