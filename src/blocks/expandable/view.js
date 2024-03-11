import './frontend.scss';

// Add a click event listener to each expandable block.
// When the button is clicked, toggle the is-expanded class on the content.
document
	.querySelectorAll( '.wp-block-wikimedia-annual-report-expandable' )
	.forEach( ( block ) => {
		const button = block.querySelector( '.expandable-button' );
		const content = block.querySelector( '.expandable-content' );

		button.addEventListener( 'click', () => {
			content.classList.toggle( 'is-expanded' );
		} );
	} );

/* eslint-disable no-console */
console.log( 'Hello World! (from create-block-wikimedia-ar-expandable block)' );
/* eslint-enable no-console */
