import { CountUp } from 'countup.js';

const countupFormatItems = document.querySelectorAll( '.wmf-countup' );

// Callback function to handle intersection changes
const handleIntersect = ( entries, observer ) => {
	entries.forEach( ( entry ) => {
		const targetNumber =
			entry.target.dataset.countupTargetNumber ||
			parseInt( entry.target.textContent.replace( /[^0-9]/g, '' ), 10 );

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
				setTimeout( () => countup.start(), 100 );
				observer.unobserve( entry.target );
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
