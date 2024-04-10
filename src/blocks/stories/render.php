<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$block_id = wp_unique_id( 'stories-' );
?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'stories carousel alignfull', 'id' => $block_id ] ); ?>>

	<div class="stories__categories-outer-wrapper alignwide">
		<div class="stories__categories-wrapper alignwide">
			<div
				class="stories__categories"
			>
			<?php
				foreach ( $block->inner_blocks as $key => $inner_block ) {
					$category = $inner_block->attributes['category'] ?? '';
					$id = $inner_block->attributes['id'] ?? '';
					if ( $category ) {
						?>
						<button class="category-slide" data-id="<?php echo esc_html( $id ); ?>" data-index="<?php echo esc_attr( $key ); ?>">
							<?php echo wp_kses_post( $category ); ?>
						</button>
						<?php
					}
				}
			?>
			</div>
		</div>
	</div>
	<div class="stories__categories-buttons alignwide">
		<button id="carousel-slide-back" class="carousel__button carousel__button--back"><span class="screen-reader-text"><?php esc_html_e( 'Previous Story', 'wmf-reports' ); ?></span></button>
		<button id="carousel-slide-forward" class="carousel__button carousel__button--forward"><span class="screen-reader-text"><?php esc_html_e( 'Next Story', 'wmf-reports' ); ?></span></button>
	</div>
	<div class="carousel-wrapper">
		<?php echo $content; ?>
		<div class="carousel__buttons-wrapper">
			<div class="carousel__buttons alignwide">
				<button id="carousel-back" class="carousel__button carousel__button--back"><span class="screen-reader-text"><?php esc_html_e( 'Previous Story', 'wmf-reports' ); ?></span></button>
				<button id="carousel-forward" class="carousel__button carousel__button--forward"><span class="screen-reader-text"><?php esc_html_e( 'Next Story', 'wmf-reports' ); ?></span></button>
			</div>
		</div>
	</div>
</div>
