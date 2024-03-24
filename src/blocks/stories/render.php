<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'stories carousel alignfull' ] ); ?>>
	<div class="carousel-wrapper">
		<?php echo $content; ?>
		<div class="carousel__buttons-wrapper">
			<div class="carousel__buttons alignwide">
				<button id="carousel-back" class="carousel__button carousel__button--back"><span class="screen-reader-text"><?php esc_html_e( 'Previous Map Marker', 'wmf-reports' ); ?></span></button>
				<button id="carousel-forward" class="carousel__button carousel__button--forward"><span class="screen-reader-text"><?php esc_html_e( 'Next Map Marker', 'wmf-reports' ); ?></span></button>
			</div>
		</div>
	</div>
</div>
