/*
 * Editor functionality.
 */
import { registerBlockCollection } from '@wordpress/blocks';

import './editor.scss';

// Bundle all the Annual Report blocks into a single collection.
registerBlockCollection( 'wikimedia-annual-report', {
	title: 'Annual Report',
	icon: 'chart-bar',
} );
