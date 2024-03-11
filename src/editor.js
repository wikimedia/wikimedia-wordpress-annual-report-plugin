/*
 * Editor functionality.
 */
import { registerBlockCollection } from '@wordpress/blocks';

// Bundle all the Annual Report blocks into a single collection.
registerBlockCollection( 'wikimedia-annual-report', {
	title: 'Annual Report',
	icon: 'chart-bar',
} );
