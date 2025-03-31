/**
 * @type {HTMLDivElement}
 */
const jumplist = document.querySelector( '.wmf-toc-jumplist' );

/**
 * @type {HTMLAnchorElement[]}
 */
const jumplistItems = jumplist
	? Array.from( jumplist.querySelectorAll( '.wmf-toc-jumplist__items a' ) )
	: [];

/**
 * @type {HTMLDivElement}
 */
const progressIndicator = jumplist
	? jumplist.querySelector( '.wmf-toc-progress' )
	: null;

const ACTIVE_SECTION_HEADER_MARGIN = 200;

if ( jumplist ) {
	// Clone the download button into the modal footer, if present.
	const downloadButton = document.querySelector(
		'.wp-block-button.has-icon-download'
	);
	if ( downloadButton && ! jumplist.querySelector( '.has-icon-download' ) ) {
		jumplist
			.querySelector( '.wmf-toc-jumplist__modal-footer' )
			.prepend( downloadButton.cloneNode( true ) );
	}
}

/**
 * Update all ToC progress circles and bars on scroll.
 */
function updateProgressIndicators() {
	if ( ! progressIndicator ) {
		return;
	}
	const documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
	const scrollPosition = document.documentElement.scrollTop;
	const percentage = ( scrollPosition / documentHeight ) * 100;
	const remaining = ( 100 - percentage ) / 100;

	// Handle linear (desktop) indicator.
	progressIndicator.setAttribute( 'style', `width:${ percentage.toFixed( 2 ) }%` );

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

	// Update share button.
	const anchor = activeSectionLink.getAttribute( 'href' );
	const button = jumplist.querySelector(
		'.wp-block-button.is-share-button a'
	);
	if ( anchor && button && button.href ) {
		const url = button.href;
		button.href = url.replace( /#.*$/, '' );
	}

	// Update highlighted class.
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
	if ( progressIndicator ) {
		updateProgressIndicators();
	}
	if ( jumplist ) {
		updateJumplistActiveItem();
	}
}

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

const handleCloseModalClick = ( { target } ) => {
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
};

let pinned = false;
const maybePinJumplist = () => {
	if ( window.innerWidth < 1024 ) {
		return;
	}
	if ( ! pinned && window.scrollY > 46 ) {
		jumplist.classList.add( 'wmf-toc-jumplist--pinned' );
		pinned = true;
	} else if ( pinned && window.scrollY <= 46 ) {
		jumplist.classList.remove( 'wmf-toc-jumplist--pinned' );
		pinned = false;
	}
};

/**
 * Read the ToC and initialize progress indicator menus.
 */
function initializeProgressIndicatorAndJumplist() {
	window.addEventListener( 'scroll', onScroll );
	window.addEventListener( 'hashchange', updateJumplistActiveItem );

	document
		.querySelector( '.wmf-toc-progress button' )
		.addEventListener( 'click', openJumplistModal );

	// Delegated lister. Switch behavior based on element clicked.
	document.addEventListener( 'click', handleCloseModalClick );

	document.addEventListener( 'scroll', maybePinJumplist );
}

if ( document.querySelector( '.wp-block-wmf-reports-table-of-contents' ) ) {
	// Only kick off logic if the right elements are present on the page.
	initializeProgressIndicatorAndJumplist();
}

if ( module.hot ) {
	module.hot.accept();
	module.hot.dispose( () => {
		if (
			! document.querySelector(
				'.wp-block-wmf-reports-table-of-contents'
			)
		) {
			return;
		}
		window.removeEventListener( 'scroll', onScroll );
		window.removeEventListener( 'hashchange', updateJumplistActiveItem );
		document.removeEventListener( 'click', handleCloseModalClick );
		document
			.querySelector( '.wmf-toc-progress button' )
			.removeEventListener( 'click', openJumplistModal );
	} );
}
