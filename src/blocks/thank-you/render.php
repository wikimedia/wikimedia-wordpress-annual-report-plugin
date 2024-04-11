<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>

<?php if ( ! empty( $attributes['lines'] ) ) : ?>
<p class="wp-block-wmf-reports-thank-you">
	<?php
	foreach ( $attributes['lines'] as $line ) {
		if ( empty( $line ) ) {
			continue;
		}
		echo sprintf(
			'<span class="wmf-thank-you-line">%s</span>',
			esc_html( $line )
		);
	}
	?>
</p>
<?php endif; ?>
