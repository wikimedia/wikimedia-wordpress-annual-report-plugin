<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$map_style = $attributes['mapStyle'] ?? 'mapbox://styles/mapbox/light-v11';
$markerActiveColor = $block->attributes['markerActiveColor'] ?? '';
$cssColors = [];

if ( ! empty( $markerActiveColor ) ) {
	$cssColors[] = "--map-marker-active-color: var(--wp--preset--color--$markerActiveColor);";
}

$wrapper_attributes = get_block_wrapper_attributes( [
	'class' => 'map map--carousel carousel alignfull carousel--uninitialized',
	'style' => implode( ';', $cssColors ),
] );
?>

<div <?php echo wp_kses_data( $wrapper_attributes ); ?>>
	<div id="map" style="min-height: 250px"
		data-map-style="<?php echo esc_attr( $map_style ); ?>"
		data-latitude="<?php echo esc_attr( $attributes['centerLat'] ?? 0 ); ?>"
		data-longitude="<?php echo esc_attr( $attributes['centerLon'] ?? 0 ); ?>"
		data-projection="<?php echo esc_attr( $attributes['projection'] ?? '' ); ?>"
		data-zoom="<?php echo esc_attr( $attributes['zoom'] ?? 1 ); ?>"
	></div>
	<div class="carousel__carousel-wrapper">
		<?php echo $content; ?>
		<?php if ( substr_count( $content, 'wp-block-wmf-reports-marker' ) > 1 ) : ?>
		<div class="carousel__buttons-wrapper">
			<div class="carousel__buttons alignwide">
				<button id="map-back" class="carousel__button carousel__button--back"><span class="screen-reader-text"><?php esc_html_e( 'Previous Map Marker', 'wmf-reports' ); ?></span></button>
				<button id="map-forward" class="carousel__button carousel__button--forward"><span class="screen-reader-text"><?php esc_html_e( 'Next Map Marker', 'wmf-reports' ); ?></span></button>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
