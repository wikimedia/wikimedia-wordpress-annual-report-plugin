/**
 * Use this file for JavaScript code that you want to run in the front-end
 * on posts/pages that contain this block.
 *
 * When this file is defined as the value of the `viewScript` property
 * in `block.json` it will be enqueued on the front end of the site.
 *
 * Example:
 *
 * ```js
 * {
 *   "viewScript": "file:./view.js"
 * }
 * ```
 *
 * If you're not making any changes to this file because your project doesn't need any
 * JavaScript running in the front-end, then you should delete this file and remove
 * the `viewScript` property from `block.json`.
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#view-script
 */

import './style.scss';

// Add a click event listener to each expandable block.
// When the button is clicked, toggle the is-expanded class on the content.
document.querySelectorAll( '.wp-block-wikimedia-annual-report-expandable' ).forEach( ( block ) => {
	const button = block.querySelector( '.expandable-button' );
	const content = block.querySelector( '.expandable-content' );

	button.addEventListener( 'click', () => {
		content.classList.toggle( 'is-expanded' );
	} );
} );

/* eslint-disable no-console */
console.log( 'Hello World! (from create-block-wikimedia-ar-expandable block)' );
/* eslint-enable no-console */
