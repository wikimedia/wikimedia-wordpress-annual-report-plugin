<?php
/**
 * Filter ToC block to inject progress indicator and jumplist.
 */
declare( strict_types=1 );

namespace WMF\Reports\Blocks\Table_of_Contents;

/**
 * Attach hooks and filters.
 */
function bootstrap() {
	add_filter( 'render_block', __NAMESPACE__ . '\\inject_jumplist', 10, 2 );
}

/**
 * Filter the rendered output of the ToC block to add a jumplist element and progress indicator.
 *
 * @param string $content Rendered block content.
 * @param array  $block   Block data array.
 * @return string Filtered content with injected additional elements.
 */
function inject_jumplist( string $content, array $block ) : string {
	if ( $block['blockName'] !== 'wmf-reports/table-of-contents' ) {
		return $content;
	}

	$waypoints = json_decode( $block['attrs']['waypoints'] ?? '' );
	if ( empty( $waypoints ) ) {
		// No data to use for jumplist.
		return $content;
	}

	return render_jumplist( $waypoints ) . $content;
}

/**
 * Render out a jumplist given an array of waypoint objects.
 *
 * @param stdClass[] $waypoints Array of waypoints.
 * @return string Rendered jumplist markup.
 */
function render_jumplist( array $waypoints ) : string {
	ob_start();
	?>
	<div class="wmf-toc-jumplist">
		<div class="wmf-toc-progress">
			<svg viewBox="0 0 60 60" class="wmf-toc-progress__indicator">
				<?php /* Dash array = initial offset = circumference. */ ?>
				<circle r="25" stroke-dasharray="157.08" stroke-dashoffset="157.08" />
			</svg>
			<button class="wmf-toc-progress__icon" type="button">
				<span class="screen-reader-text">
					<?php esc_html_e( 'Open jumplist', 'wmf-reports' ); ?>
				</span>
			</button>
		</div>
		<div class="wmf-toc-jumplist__modal-blanket"></div>
		<div class="wmf-toc-jumplist__modal">
			<div class="wmf-toc-jumplist__modal-contents">
				<div class="wmf-toc-jumplist__modal-header">
					<h2>Table of contents</h2>
				</div>
				<div class="wmf-toc-jumplist__items">
					<?php
					foreach ( $waypoints as $waypoint ) {
						if ( empty( $waypoint->tocSlug ) || empty( $waypoint->tocLabel ) ) {
							continue;
						}
						printf(
							'<a href="#%s">%s</a>',
							esc_attr( $waypoint->tocSlug ), // esc_url would add https://.
							esc_html( $waypoint->tocLabel )
						);
					}
					?>
				</div>
				<div class="wmf-toc-jumplist__modal-footer">
					<div class="wp-block-button is-style-transparent is-share-button">
						<a class="wp-block-button__link has-base-100-background-color has-background wp-element-button" href="<?php echo esc_url( get_permalink() ); ?>">Share</a>
					</div>
					<button class="wmf-toc-jumplist__modal-close" type="button">
						<span class="screen-reader-text">
							<?php esc_html_e( 'Close jumplist', 'wmf-reports' ); ?>
						</span>
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php
	return (string) ob_get_clean();
}
