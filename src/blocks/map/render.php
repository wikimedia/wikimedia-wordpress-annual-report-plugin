<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$map_style = $attributes['mapStyle'] ?? 'mapbox://styles/mapbox/light-v11';
?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'map map--carousel carousel alignfull carousel--uninitialized' ] ); ?>>
	<div id="map" data-map-style="<?php echo esc_attr( $map_style ); ?>"></div>
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
