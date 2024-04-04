<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'carousel__slide' ]); ?>>
	<?php echo $content; ?>
</div>
