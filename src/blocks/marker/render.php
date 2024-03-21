<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$lat  = $attributes['lat'] ?? '0';
$long = $attributes['long'] ?? '0';
$id   = $attributes['id'] ?? '0';
?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'alignfull', 'data-lat' => $lat, 'data-long' => $long, 'id' => $id ] ); ?>>
	<?php echo $content; ?>
</div>
