<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$colors = [
	'text' => $block->attributes['navTextColor'] ?? '',
	'background' => $block->attributes['navBackgroundColor'] ?? '',
	'text-hover' => $block->attributes['navTextHoverColor'] ?? '',
	'background-hover' => $block->attributes['navBackgroundHoverColor'] ?? '',
];

$cssColors = array_map( function( $key, $value ) {
	if ( empty( $value ) ) {
		return;
	}

	// If the colour ends with a number, add a hyphen before it so it matches the CSS variable name.
	$fallback = preg_replace( '/([a-zA-Z])(\d)/', '$1-$2', $value );

	return "--story-nav-$key-color: var(--wp--preset--color--$value, var(--wp--preset--color--$fallback));";
}, array_keys( $colors ), $colors );

?>

<div <?php echo get_block_wrapper_attributes( [ 'class' => 'stories carousel alignfull carousel--uninitialized' ] ); ?>>

	<div class="stories__categories-outer-wrapper alignwide">
		<div class="stories__categories-wrapper alignwide">
			<div
				class="stories__categories"
				style="<?php echo esc_attr( implode( ';', $cssColors ) ); ?>"
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
		<?php if ( substr_count( $content, 'wp-block-wmf-reports-story' ) > 1 ) : ?>
		<div class="carousel__buttons-wrapper">
			<div class="carousel__buttons alignwide">
				<button id="carousel-back" class="carousel__button carousel__button--back"><span class="screen-reader-text"><?php esc_html_e( 'Previous Story', 'wmf-reports' ); ?></span></button>
				<button id="carousel-forward" class="carousel__button carousel__button--forward"><span class="screen-reader-text"><?php esc_html_e( 'Next Story', 'wmf-reports' ); ?></span></button>
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
