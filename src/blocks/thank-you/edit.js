import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import { useCallback } from 'react';

import '../../types';

/**
 * The edit function represents what the editor will render when the block is used.
 *
 * @param {EditComponentProps} props React component props.
 * @return {Element} Element to render.
 */
export default function Edit( { isSelected, attributes, setAttributes } ) {
	const updateLine = useCallback(
		( line, idx ) => {
			const lines = [ ...attributes.lines ];
			lines[ idx ] = line;
			setAttributes( { lines } );
		},
		[ attributes.lines, setAttributes ]
	);
	return (
		<p { ...useBlockProps() }>
			{ isSelected
				? attributes.lines.map( ( line, idx ) => (
						<RichText
							key={ line }
							tagName="span"
							className="wmf-thank-you-line"
							value={ line }
							allowedFormats={ [] }
							onChange={ ( updatedLine ) =>
								updateLine( updatedLine, idx )
							}
							placeholder={ __( 'Thank You!', 'wmf-reports' ) }
						/>
				  ) )
				: attributes.lines.slice( 0, 4 ).map( ( line ) => (
						<span key={ line } className="wmf-thank-you-line">
							{ line }
						</span>
				  ) ) }
		</p>
	);
}
