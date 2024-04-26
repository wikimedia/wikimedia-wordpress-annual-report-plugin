/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 */
const ANIMATION_DURATION = 1200;

/**
 * Pause the animation of a specific widget.
 *
 * Used both to "reset" the animation if it gets re-initialized, and to
 * disable active animations if prefers-reduced-motion setting changes.
 *
 * @param {HTMLDivElement} widget Container node.
 */
function pauseAnimation( widget ) {
	const intervalId = widget.dataset.thankYouAnimation;
	if ( ! isNaN( parseInt( intervalId, 10 ) ) ) {
		clearInterval( intervalId );
	}
}

/**
 * Initialize the looping animation for a specific widget.
 *
 * @param {HTMLDivElement} widget Container node.
 */
function initWidget( widget ) {
	// There can only be one! [animation per widget].
	pauseAnimation( widget );
	widget.dataset.thankYouAnimation = setInterval(
		animate( widget ),
		ANIMATION_DURATION
	);
}

/**
 * Generate an interval function to loop the specified node.
 *
 * @param {HTMLDivElement} widget Container node.
 * @return {Function} Animation interval function.
 */
const animate = ( widget ) => () => {
	const lines = Array.from(
		widget.querySelectorAll( '.wmf-thank-you-line' )
	);

	const firstLine = lines[ 0 ];
	const lastLine = lines[ lines.length - 1 ];

	lastLine.after( firstLine );
};

// Initialize!
function initializeAll() {
	const widgetSelector = '.wp-block-wmf-reports-thank-you';
	const prefersReducedMotion = window.matchMedia(
		'(prefers-reduced-motion: reduce)'
	);

	if ( ! prefersReducedMotion.matches ) {
		// Only start if it does not conflict with user preferences.
		document.querySelectorAll( widgetSelector ).forEach( initWidget );
	}

	// Play or pause animation as user setting changes.
	prefersReducedMotion.addEventListener( 'change', () => {
		if ( prefersReducedMotion.matches ) {
			// Pause any in-progress animations.
			document
				.querySelectorAll( widgetSelector )
				.forEach( pauseAnimation );
		} else {
			// Safe to initialize!
			document.querySelectorAll( widgetSelector ).forEach( initWidget );
		}
	} );
}

// Kick if off.
initializeAll();

if ( module.hot ) {
	module.hot.accept();
}
