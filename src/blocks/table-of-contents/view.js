/**
 * Update all ToC progress circles and bars on scroll.
 */
function onScroll() {
	// Measure off of body, not document, to handle fixed viewport in Shiro.
	const clientHeight = document.body.clientHeight;
	const scrollHeight = document.documentElement.scrollHeight;
	const scrollTop = document.documentElement.scrollTop;
	// Cap at 100, shiro theme structure can lead to >100% values.
	const percentage = Math.min(
		scrollTop / ( scrollHeight - clientHeight ),
		100
	);
	const remaining = ( 100 - percentage ) / 100;

	document
		.querySelectorAll( '.wmf-toc-progress' )
		.forEach( ( progressElement ) => {
			progressElement.setAttribute( 'style', `width:${ percentage }%` );
		} );

	document
		.querySelectorAll( '.wmf-toc-progress circle' )
		.forEach( ( circle ) => {
			const radius = +circle.getAttribute( 'r' );
			if ( isNaN( radius ) ) {
				return;
			}

			const circumference = Math.PI * radius * 2;
			circle.setAttribute(
				'stroke-dashoffset',
				`${ ( remaining * circumference ).toFixed( 0 ) }px`
			);
		} );
}

const debouncedOnScroll = debounce( onScroll, 17 );

/**
 * Read the ToC and initialize progress indicator menus.
 */
function initializeProgressIndicator() {
	window.addEventListener( 'scroll', onScroll );
}

console.log( document.querySelector( '.wmf-toc-progress' ) ); // eslint-disable-line
initializeProgressIndicator();

if ( module.hot ) {
	module.hot.accept();
	module.hot.dispose( () => {
		window.removeEventListener( 'scroll', onScroll );
	} );
}
