/**
 * Hyper-specific wiring to connect vis and accordion for 2023 report.
 */
window.addEventListener( 'DOMContentLoaded', () => {
	// Only one vis this year, so that's pretty easy.
	const visBlock = document.querySelector( '[data-datavis]' );
	if (
		! visBlock ||
		! document.body.classList.contains( 'single-wmf-report' )
	) {
		return;
	}

	const visNodeId = visBlock.dataset.datavis;
	const visNode = document.getElementById( visNodeId );

	if ( ! visNode ) {
		// Maybe running outside the Foundation site itself.
		return;
	}

	const parentColumnsBlock = visBlock.closest( '.wp-block-columns' );
	if ( ! parentColumnsBlock ) {
		// Not embedded where we expect.
		return;
	}

	const accordionItems = [
		...parentColumnsBlock.querySelectorAll( '.wmf-accordion-item' ),
	];
	if ( accordionItems.length === 0 ) {
		// Not structured how we expect.
		return;
	}

	const connectEvents = ( { view } ) => {
		if ( ! view ) {
			// eslint-disable-next-line no-console
			console.error( 'Could not bind to visualization' );
			return;
		}

		view.addEventListener( 'click', ( event, item ) => {
			if ( ! item?.datum?.className ) {
				return;
			}
			const matchingAccordion = [ ...accordionItems ].find( ( node ) =>
				node.classList.contains( item.datum.className )
			);
			if ( ! matchingAccordion ) {
				return;
			}
			matchingAccordion.querySelector( 'button' ).click();
		} );

		// TK: Highlight chart when expanding accordion.
		// accordionItems.forEach( ( accordion ) => {
		// 	const visColorClassName = [ ...accordion.classList ].find(
		// 		( className ) => {
		// 			return /vis-color-/.test( className );
		// 		}
		// 	);
		// 	const matchingData =
		// 		visColorClassName &&
		// 		spec.data.values.find( ( datum ) => {
		// 			return datum.className === visColorClassName;
		// 		} );
		// 	if ( ! matchingData ) {
		// 		return;
		// 	}
		// 	accordion.addEventListener( 'click', () => {
		// 		console.log( { matchingData, accordion } ); // eslint-disable-line
		// 		if ( accordion.getAttribute( 'aria-expanded' ) ) {
		// 			// Deselecting, nothing to do.
		// 			return;
		// 		}
		// 		view.signal( 'select', {
		// 			vlPoint: [ matchingData ],
		// 		} );
		// 	} );
		// } );
	};

	// Poll until vis is available.
	const pollingInterval = setInterval( () => {
		const visualizations = window.vegaLitePlugin?.visualizations;
		if ( ! visualizations ) {
			return;
		}

		const visualization = visualizations.get( visNode );

		if ( visualization ) {
			// Found it! Quit poll.
			clearInterval( pollingInterval );
			connectEvents( visualization );
		}
	}, 400 );
} );
