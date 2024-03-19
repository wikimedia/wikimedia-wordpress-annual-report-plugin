/**
 * Debounce a function to run only every {interval} milliseconds.
 * Lighter-weight alternative to lodash etc.
 *
 * @param {Function} callback Function to run
 * @param {number}   interval Debounce interval.
 * @return {Function} Debounced version of callback.
 */
export default function debounce( callback, interval ) {
	let timeoutId;
	return function ( ...args ) {
		clearTimeout( timeoutId );
		timeoutId = setTimeout( () => {
			callback.apply( this, args );
		}, interval );
	};
}
