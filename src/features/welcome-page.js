document.addEventListener( 'DOMContentLoaded', () => {
	const welcomePageIntro = document.querySelector( '.wmf-pattern-report-into-hero' );

	if ( ! welcomePageIntro ) {
		return;
	}

	// Visibly hide the main header. We use an h2, so its still good to have the h1 in the code.
	const headerMain = document.querySelector( '.header-main' );
	headerMain.style.visibility = 'hidden';
	headerMain.style.height = '0';
} );
