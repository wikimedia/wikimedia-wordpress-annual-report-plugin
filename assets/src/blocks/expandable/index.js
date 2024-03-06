import Edit from './edit';
import Save from './save';
import './style.scss';

export const name = 'wikimedia-annual-report/expandable';

export const settings = {
	title: 'Expandable',

	description: 'Show a teaser of some content, with a link to expand to see the full content.',

	category: 'widgets',

	icon: 'editor-expand',

	version: '0.1.0',

	keywords: [
		'annual',
		'report',
		'expandable',
	],

	edit: Edit,

	save: Save,
};
