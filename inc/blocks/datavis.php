<?php
/**
 * Block-specific PHP logic for the Vega Lite plugin Data Visualization block.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Datavis;

use WMF\Reports\Report;

/**
 * Attach hooks.
 */
function bootstrap() : void {
	add_filter( 'render_block', __NAMESPACE__ . '\\inject_embed_config', 10, 2 );
}

/**
 * Inject an embed config to set SVG mode on the visualization plugin.
 *
 * @todo If this gets added to the plugin as a UI option, this can be removed.
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Filtered block content.
 */
function inject_embed_config( string $block_content, array $block ) : string {
	if ( $block['blockName'] !== 'vegalite-plugin/visualization' ) {
		return $block_content;
	}

	return str_replace(
		'class="visualization-block"',
		sprintf(
			'class="visualization-block" data-embed-options="%s"',
			esc_attr( wp_json_encode( [ 'renderer' => 'svg' ] ) )
		),
		$block_content
	);
}
