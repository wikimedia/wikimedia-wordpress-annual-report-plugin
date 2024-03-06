/**
 * Front end funcionality for report pages.
 */

// For each block in the blocks directory, import it's view.js file.
// This will ensure that the view.js file is included in the front end build.
for ( const block of require.context( './blocks', true, /view\.js$/ ) ) {
	require( block );
}
