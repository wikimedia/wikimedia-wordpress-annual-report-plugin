<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$map_style = $attributes['mapStyle'] ?? 'mapbox://styles/mapbox/light-v11';
?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'alignfull' ] ); ?>>
	<div id="map" data-map-style="<?php echo esc_attr( $map_style ); ?>"></div>
	<div class="marker-container">
		<?php echo $content; ?>
		<button id="back"><</button>
		<button id="forward">></button>
	</div>
</div>
