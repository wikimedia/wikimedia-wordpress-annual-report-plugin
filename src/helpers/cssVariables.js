/**
 * Convert a color slug to a CSS variable.
 *
 * Takes a color slug provided by the core color picker and converts it to a CSS
 * variable with WP prefix, for use in inline styles.
 *
 * Some colours defined in the theme have a slug that contains numbers. There is
 * some inconsistency in the way these are named, eg. `base-100` is defined as
 * `base100`. Here we account for that by providing a fallback CSS variable name
 * so either version can be used.
 *
 * Example:
 * ```
 * const slug = attributes.color; // eg. 'base100'
 * const variable = colorSlugToCSSVariable( slug );
 * // returns 'var(--wp--preset--color--base100, var(--wp--preset--color--base-100))'
 * ```
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
