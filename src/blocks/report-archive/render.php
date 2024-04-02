<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'report-archive carousel alignfull' ] ); ?>>
	<div class="carousel-wrapper">
		<div class="carousel__track-outer">
			<div class="carousel__track">
				<?php echo $content; ?>
			</div>
		</div>
		<div class="carousel__buttons-wrapper">
			<div class="carousel__buttons alignwide">
				<button id="report-back" class="carousel__button carousel__button--back"><span class="screen-reader-text"><?php esc_html_e( 'Previous Report', 'wmf-reports' ); ?></span></button>
				<button id="report-forward" class="carousel__button carousel__button--forward"><span class="screen-reader-text"><?php esc_html_e( 'Next Report', 'wmf-reports' ); ?></span></button>
			</div>
		</div>
	</div>
</div>
