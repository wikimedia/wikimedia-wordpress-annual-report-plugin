import { __ } from '@wordpress/i18n';
import { addFilter, removeFilter } from '@wordpress/hooks';
import {
	registerFormatType,
	unregisterFormatType,
	toggleFormat,
} from '@wordpress/rich-text';

import { RichTextToolbarButton } from '@wordpress/block-editor';

const formatType = 'wmf-reports/count-up';

function registerCustomIcon( icons ) {
	const formatIcon = {
		name: 'countup',
		title: __( 'Countup Number', 'icon-block' ),
		// There's probably a way to get this from the SVG file but this is easier for now.
		icon: {
			src: (
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="24"
					height="24"
					viewBox="0 0 16 16"
				>
					<text x="1" y="7.5" fontSize="8" transform="scale(1 1.75)">
						0
					</text>
					<text x="10" y="7.5" fontSize="8" transform="scale(1 1.75)">
						9
					</text>
					<path
						stroke="#000"
						strokeWidth="1.5"
						markerEnd="url(#a)"
						d="M6 8h1"
					/>
					<defs>
						<marker
							id="a"
							markerHeight="4.5"
							markerWidth="2"
							orient="auto"
							refX="0"
							refY="1.75"
						>
							<path d="m0 0 2 1.75L0 3.5z" />
						</marker>
					</defs>
				</svg>
			),
		},
	};
	console.log( [].concat( icons, [ formatIcon ] ) ); // eslint-disable-line
	return [].concat( icons, [ formatIcon ] );
}

addFilter(
	'iconBlock.icons',
	'wmf-reports/custom-countup-icon',
	registerCustomIcon
);

const CountUpFormatButton = ( { isActive, onChange, value } ) => {
	return (
		<RichTextToolbarButton
			// There's probably a way to get this from the SVG file but this is easier for now.
			icon={
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="24"
					height="24"
					viewBox="0 0 16 16"
				>
					<text x="1" y="7.5" fontSize="8" transform="scale(1 1.75)">
						0
					</text>
					<text x="10" y="7.5" fontSize="8" transform="scale(1 1.75)">
						9
					</text>
					<path strokeWidth="1.5" markerEnd="url(#a)" d="M6 8.5h1" />
					<defs>
						<marker
							id="a"
							markerHeight="4.5"
							markerWidth="2"
							orient="auto"
							refX="0"
							refY="1.75"
						>
							<path d="m0 0 2 1.75L0 3.5z" />
						</marker>
					</defs>
				</svg>
			}
			title={ __( 'Count-up Number', 'wmf-reports' ) }
			onClick={ () => {
				onChange(
					toggleFormat( value, {
						type: formatType,
					} )
				);
			} }
			isActive={ isActive }
		/>
	);
};

registerFormatType( formatType, {
	title: 'Count-up Number',
	tagName: 'span',
	className: 'wmf-countup',
	edit: CountUpFormatButton,
} );

if ( module.hot ) {
	module.hot.accept();
	module.hot.dispose( () => {
		removeFilter( 'iconBlock.icons', 'wmf-reports/custom-countup-icon' );
		unregisterFormatType( formatType );
	} );
}
