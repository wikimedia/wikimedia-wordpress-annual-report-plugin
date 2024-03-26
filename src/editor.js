/*
 * Editor functionality.
 */
import { registerBlockCollection } from '@wordpress/blocks';

// Import block customization modules which aren't build as standalone bundles.
import './blocks/core/group.js';

// Register all custom formats.
import './formats/countup-number/countup-number-format';

// Editor-wide styles
import './editor.scss';
import './frontend-global.scss';

// Bundle all the Annual Report blocks into a single collection.
registerBlockCollection( 'wikimedia-annual-report', {
	title: 'Annual Report',
	icon: 'chart-bar',
} );
