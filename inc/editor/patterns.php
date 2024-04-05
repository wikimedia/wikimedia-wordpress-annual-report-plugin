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
	register_block_pattern( ByTheNumbers\NAME, [
		'title' => __( 'By the Numbers', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => ByTheNumbers\PATTERN,
	] );

	register_block_pattern( CarouselSlide\NAME, [
		'title' => __( 'Carousel Slide', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => CarouselSlide\PATTERN,
	] );

	register_block_pattern( Donate\NAME, [
		'title' => __( 'Donate', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Donate\PATTERN,
	] );

	register_block_pattern( Donors\NAME, [
		'title' => __( 'Donors', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Donors\PATTERN,
	] );

	register_block_pattern( Endowment\NAME, [
		'title' => __( 'Endowment', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Endowment\PATTERN,
	] );

	register_block_pattern( FinanceTables\NAME, [
		'title' => __( 'Finance Tables', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => FinanceTables\PATTERN,
	] );

	register_block_pattern( FinancialStatements\NAME, [
		'title' => __( 'Financial Statements', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => FinancialStatements\PATTERN,
	] );

	register_block_pattern( Hero\NAME, [
		'title' => __( 'Hero', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Hero\PATTERN,
	] );

	register_block_pattern( Leadership\NAME, [
		'title' => __( 'Leadership', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Leadership\PATTERN,
	] );

	register_block_pattern( LetterFromTheCeo\NAME, [
		'title' => __( 'Letter from the CEO', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => LetterFromTheCeo\PATTERN,
	] );

	register_block_pattern( Overlay\NAME, [
		'title' => __( 'Overlay', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Overlay\PATTERN,
	] );

	register_block_pattern( PreviousReports\NAME, [
		'title' => __( 'Previous Reports', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => PreviousReports\PATTERN,
	] );

	register_block_pattern( Report\NAME, [
		'title' => __( 'Report', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Report\PATTERN,
	] );

	register_block_pattern( Wrapped\NAME, [
		'title' => __( 'Wrapped', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => Wrapped\PATTERN,
	] );

	register_block_pattern( WelcomePage\NAME, [
		'title' => __( 'Welcome Page', 'wmf-reports' ),
		'categories' => [ MAIN_CATEGORY_NAME ],
		'content' => WelcomePage\PATTERN,
	] );

	register_block_pattern_category( MAIN_CATEGORY_NAME, [
		'label' => __( 'Wikimedia Reports', 'wmf-reports' ),
	] );
}
