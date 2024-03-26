<?php
/**
 * Block patterns for content editors to quickly create content.
 */

namespace WMF\Reports\Editor\Patterns;

/**
 * The slug for the block pattern category to group these into.
 *
 * @var string
 */
const MAIN_CATEGORY_NAME = 'wmf-reports';

/**
 * Hook into WordPress
 */
function bootstrap() {
	add_action( 'after_setup_theme', __NAMESPACE__ . '\\register_pattern' );
}

/**
 * Register our patterns and their pattern categories.
 *
 * @return void
 */
function register_pattern() {
	register_block_pattern_category( MAIN_CATEGORY_NAME, [
		'label' => __( 'Wikimedia Reports', 'wmf-reports' ),
	] );

	register_block_pattern( CarouselSlide\NAME, [
		'title' => __( 'Carousel Slide', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => CarouselSlide\PATTERN,
	] );

	register_block_pattern( OverlayGroup\NAME, [
		'title' => __( 'Overlay Group', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => OverlayGroup\PATTERN,
	] );

	register_block_pattern( Donors\NAME, [
		'title' => __( 'Report Donors', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Donors\PATTERN,
	] );

	register_block_pattern( Hero\NAME, [
		'title' => __( 'Report Hero', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Hero\PATTERN,
	] );

	register_block_pattern( LetterFromTheCeo\NAME, [
		'title' => __( 'Letter from the CEO', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => LetterFromTheCeo\PATTERN,
	] );

	register_block_pattern( FinanceTables\NAME, [
		'title' => __( 'Finance Tables', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => FinanceTables\PATTERN,
	] );
}
