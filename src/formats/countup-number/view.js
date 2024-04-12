import { CountUp } from 'countup.js';

const timeouts = [];
function clearAllTimeouts() {
	timeouts.forEach( ( timeoutId ) => clearTimeout( timeoutId ) );
	timeouts.length = 0;
}

// Add a timeout to give everything chance to load (ie masonry grid).
setTimeout( () => {
	const countupFormatItems = document.querySelectorAll( '.wmf-countup' );

	// Callback function to handle intersection changes
	const handleIntersect = ( entries ) => {
		entries.forEach( ( entry ) => {
			const targetNumber =
				entry.target.dataset.countupTargetNumber ||
				parseInt(
					entry.target.textContent.replace( /[^0-9]/g, '' ),
					10
				);

			if ( ! entry.target.dataset.countupTargetNumber ) {
				entry.target.dataset.countupTargetNumber = targetNumber;
			}

			const countup = new CountUp( entry.target, targetNumber, {
				duration: entry.target.dataset?.countupDuration || 1,
			} );

			if ( ! isNaN( targetNumber ) ) {
				// If element is in view
				if ( entry.isIntersecting ) {
					// Slight delay before firing so that it plays when fully in view.
					clearAllTimeouts();
					timeouts.push( setTimeout( () => countup.start(), 100 ) );
				} else {
					if ( entry.isVisible ) {
						return;
					}
					clearAllTimeouts();
					timeouts.push( setTimeout( () => countup.reset(), 100 ) );
				}
			}
		} );
	};

	const observer = new IntersectionObserver( handleIntersect, {
		threshold: 1, // Fire when fully visible.
	} );

	// Observe each countup span
	countupFormatItems.forEach( ( span ) => {
		observer.observe( span );
	} );
}, 250 );
