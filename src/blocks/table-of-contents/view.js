/**
 * Update all ToC progress circles and bars on scroll.
 */
function onScroll() {
	const clientHeight = (
		document.querySelector( 'main' ) ||
		document.querySelector( 'article' ) ||
		document.body
	).clientHeight;
	const scrollTop = document.documentElement.scrollTop;
	// Cap at 100, shiro theme structure can lead to >100% values.
	const percentage = +Math.min(
		( scrollTop / clientHeight ) * 100,
		100
	).toFixed( 2 ); // eslint-disable-line
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

/**
 * Read the ToC and initialize progress indicator menus.
 */
function initializeProgressIndicator() {
	window.addEventListener( 'scroll', onScroll );
}

initializeProgressIndicator();

if ( module.hot ) {
	module.hot.accept();
	module.hot.dispose( () => {
		window.removeEventListener( 'scroll', onScroll );
	} );
}
