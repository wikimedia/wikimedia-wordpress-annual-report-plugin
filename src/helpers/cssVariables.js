/**
 * Convert a color slug to a CSS variable.
 *
 * @param {string} slug The color slug.
 * @return {string} The CSS variable.
 */
export const colorSlugToCSSVariable = ( slug ) => {
	// If the slug ends with a number, add a hyphen before it so it matches the CSS variable name.
	const fallback = slug.replace( /([a-zA-Z])(\d)/, '$1-$2' );

	if ( slug === fallback ) {
		return `var(--wp--preset--color--${ slug })`;
	}

	return `var(--wp--preset--color--${ slug }, var(--wp--preset--color--${ fallback }))`;
};
