<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$map_style = $attributes['mapStyle'] ?? 'mapbox://styles/mapbox/light-v11';
?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'map map-carousel alignfull' ] ); ?>>
	<div id="map" data-map-style="<?php echo esc_attr( $map_style ); ?>"></div>
	<div class="map__markers-wrapper">
		<?php echo $content; ?>
		<div class="map__buttons-wrapper">
			<div class="map__buttons">
				<button id="map-back" class="map__button map__button--back"><span class="screen-reader-text"><?php esc_html_e( 'Previous Map Marker', 'wmf-reports' ); ?></span></button>
				<button id="map-forward" class="map__button map__button--forward"><span class="screen-reader-text"><?php esc_html_e( 'Next Map Marker', 'wmf-reports' ); ?></span></button>
			</div>
		</div>
	</div>
</div>
