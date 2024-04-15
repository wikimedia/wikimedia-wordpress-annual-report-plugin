<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>

<template <?php echo get_block_wrapper_attributes( [ 'class' => 'alignwide' ] ); ?>>
	<?php echo $content; ?>
	<!-- wp:buttons -->
	<div class="wp-block-buttons">
	<!-- wp:button {"backgroundColor":"base100","className":"is-style-transparent is-share-button"} -->
	<div class="wp-block-button is-style-transparent is-share-button"><a class="wp-block-button__link has-base-100-background-color has-background wp-element-button">Share this story</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons -->
</template>
