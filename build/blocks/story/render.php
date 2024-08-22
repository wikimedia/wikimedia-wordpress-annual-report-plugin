<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$id = $attributes['id'] ?? '0';
?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'alignfull has_overlay', 'id' => $id ] ); ?>>
	<?php echo $content; ?>
</div>
