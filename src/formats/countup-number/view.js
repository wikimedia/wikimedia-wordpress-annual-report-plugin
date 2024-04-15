import { CountUp } from 'countup.js';

const counts = new Map();

const createCountup = ( countupElement ) => {
	const targetNumber =
		countupElement.dataset.countupTargetNumber ||
		parseInt( countupElement.textContent.replace( /[^0-9]/g, '' ), 10 );

	if ( ! countupElement.dataset.countupTargetNumber ) {
		countupElement.dataset.countupTargetNumber = targetNumber;
	}

	if ( isNaN( targetNumber ) ) {
		countupElement.dataset.countupAnimation = false;
		return false;
	}

	return new CountUp( countupElement, targetNumber, {
		duration: countupElement.dataset?.countupDuration || 1,
	} );
};

const processIntersectionEntry = ( entry ) => {
	const countup = counts.get( entry.target );
	if ( ! countup ) {
		return;
	}

	// If element is in view
	if ( entry.isIntersecting ) {
		// Start after a slight delay to ensure it's been scrolled fully into view.
		setTimeout( () => {
			countup.start();
		}, 100 );
	} else {
		if ( entry.isVisible ) {
			return;
		}
		countup.reset();
	}
};

// Give everything chance to load (ie masonry grid).
document.addEventListener( 'DOMContentLoaded', () => {
	const countupFormatItems = document.querySelectorAll( '.wmf-countup' );

	// Instantiate the CountUp objects.
	countupFormatItems.forEach( ( countupElement ) => {
		counts.set( countupElement, createCountup( countupElement ) );
	} );

	// Callback function to handle intersection changes.
	const handleIntersect = ( entries ) => {
		entries.forEach( processIntersectionEntry );
	};

	const observer = new IntersectionObserver( handleIntersect, {
		threshold: 0.9, // Fire when fully visible.
	} );

	// Observe each countup span.
	countupFormatItems.forEach( ( span ) => observer.observe( span ) );
} );
