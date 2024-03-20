/*
 * Editor functionality.
 */
import { registerBlockCollection } from '@wordpress/blocks';

// Import block customization modules which aren't build as standalone bundles.
import './blocks/core/group.js';

// Editor-wide styles
import './editor.scss';

// Bundle all the Annual Report blocks into a single collection.
registerBlockCollection( 'wikimedia-annual-report', {
	title: 'Annual Report',
	icon: 'chart-bar',
} );
