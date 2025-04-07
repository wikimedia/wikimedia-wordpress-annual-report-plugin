<?php
/**
 * Utility functions for the Annual Report plugin.
*/

namespace WMF\Reports\Utilities;

/**
 * Convert a color slug to a CSS variable.
 *
 * @param string $slug The color slug.
 * @return string The CSS variable.
 */
function color_slug_to_css_variable( string $slug ): string {
	// If the slug ends with a number, add a hyphen before it so it matches the CSS variable name.
	$fallback = preg_replace( '/([a-zA-Z])(\d)/', '$1-$2', $slug );

	if ( $slug === $fallback ) {
		return "var(--wp--preset--color--$slug)";
	}

	return "var(--wp--preset--color--$slug, var(--wp--preset--color--$fallback))";
}
