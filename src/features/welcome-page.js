import scrollToElement from '../helpers/scroll-to-element';

document.addEventListener( 'DOMContentLoaded', () => {
	const welcomePageIntro = document.querySelector(
		'.wmf-pattern-report-into-hero'
	);

	if ( ! welcomePageIntro ) {
		return;
	}

	// Visibly hide the main header. We use an h2, so its still good to have the h1 in the code.
	const headerMain = document.querySelector( '.header-main' );
	headerMain.style.visibility = 'hidden';
	headerMain.style.height = '0';

	const selectContainer = document.querySelector(
		'.wmf-pattern-report-intro-columns__select'
	);

	if ( ! selectContainer ) {
		return;
	}

	const previousReports = document.querySelectorAll(
		'.wmf-pattern-previous-report'
	);

	const selectUl = selectContainer.querySelector( 'ul' );
	selectUl.querySelector( 'li' ).remove();

	const triggerButton = document.createElement( 'button' );
	triggerButton.classList.add( 'dropdown-toggle' );
	triggerButton.innerHTML = 'Select a year';
	triggerButton.setAttribute( 'aria-expanded', false );

	triggerButton.addEventListener( 'click', () => {
		const expanded =
			triggerButton.getAttribute( 'aria-expanded' ) !== 'true';
		triggerButton.setAttribute( 'aria-expanded', expanded );
	} );

	selectContainer.insertBefore( triggerButton, selectUl );

	Array.from( previousReports ).forEach( ( report ) => {
		const title = report?.querySelector(
			'.wmf-pattern-previous-report__duration'
		)?.innerHTML;

		const li = document.createElement( 'li' );
		const button = document.createElement( 'button' );
		button.innerHTML = title;

		button.addEventListener( 'click', () => {
			Array.from( previousReports ).forEach( ( r ) =>
				r.classList.remove( 'selected' )
			);

			report.classList.add( 'selected' );
			scrollToElement( report );
			report.focus();

			triggerButton.setAttribute( 'aria-expanded', false );
		} );

		li.appendChild( button );
		selectUl.appendChild( li );
	} );
} );
