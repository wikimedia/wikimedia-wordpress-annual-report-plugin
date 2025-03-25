import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	store as blockEditorStore,
	InspectorControls,
	withColors,
	__experimentalColorGradientSettingsDropdown as ColorGradientSettingsDropdown,
	__experimentalUseMultipleOriginColorsAndGradients as useMultipleOriginColorsAndGradients,
} from '@wordpress/block-editor';
import { store as editPostStore } from '@wordpress/edit-post';
import { useEffect, useMemo } from '@wordpress/element';
import { useDispatch, useSelect } from '@wordpress/data';

const noLabelMessage = __( '(Waypoint group has no ToC label)', 'wmf-reports' );

/**
 * Recursively identify all waypoint blocks in a nested blocks array.
 *
 * @param {WPBlock[]} blocks Block hierarchy from block editor store getBlocks().
 * @return {WPBlock[]} Array of waypoints in provided block hierarchy.
 */
const detectWaypoints = ( blocks ) => {
	const waypoints = [];
	blocks.forEach( ( block ) => {
		if ( block.attributes.includeInToC ) {
			waypoints.push( block );
		}
		if ( block.innerBlocks ) {
			detectWaypoints( block.innerBlocks ).forEach( ( waypointBlock ) => {
				waypoints.push( waypointBlock );
			} );
		}
	} );
	return waypoints;
};

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {Object}   props               React component props.
 * @param {Function} props.setAttributes Block Editor setAttributes method.
 * @return {Element} Element to render.
 */
function Edit( {
	attributes,
	highlightColor,
	setHighlightColor,
	setAttributes,
	clientId,
} ) {
	const blocks = useSelect( ( select ) =>
		select( blockEditorStore ).getBlocks()
	);
	const { selectBlock } = useDispatch( blockEditorStore );
	const { openGeneralSidebar } = useDispatch( editPostStore );

	// Identify which groups should be tracked in the ToC as waypoints, and
	// provide an array we can use to display our edit-mode ToC. We don't
	// render the list using the stored attribute because we need the clientId
	// to enable richer interaction in-editor.
	const waypoints = useMemo( () => {
		const waypointBlocks = detectWaypoints( blocks );
		return waypointBlocks.map( ( block ) => ( {
			clientId: block.clientId,
			tocLabel: block.attributes.tocLabel,
			tocSlug: block.attributes.tocSlug,
			selectBlock() {
				selectBlock( block.clientId );
				openGeneralSidebar( 'edit-post/block' );
			},
		} ) );
	}, [ blocks, selectBlock, openGeneralSidebar ] );

	useEffect( () => {
		// Parse the relevant pieces of our waypoints array into a JSON string
		// and save that to block attributes. Using a reference-unstable type
		// like array or object for this attr causes render thrashing, so JSON
		// strings are the most stable attribute storage mechanism.
		setAttributes( {
			waypoints: JSON.stringify(
				waypoints.map( ( { tocLabel, tocSlug } ) => ( {
					tocLabel,
					tocSlug,
				} ) )
			),
		} );
	}, [ waypoints, setAttributes ] );

	const colorGradientSettings = useMultipleOriginColorsAndGradients();

	const customStyleProps = {};
	if ( attributes.highlightColor ) {
		customStyleProps['--wmf-report-highlight-color'] = `var(--wp--preset--color--${ attributes.highlightColor })`;
	}

	return (
		<>
		<InspectorControls group="color">
			<ColorGradientSettingsDropdown
				settings={ [ {
					label: __( 'Highlight', 'wmf-reports' ),
					colorValue: highlightColor?.color || attributes.highlightColor,
					onColorChange: ( value ) => {
						setHighlightColor( value );
					}
				} ] }
				panelId={ clientId }
				hasColorsOrGradients={ false }
				__experimentalIsRenderedInSidebar
				{ ...colorGradientSettings }
			/>
		</InspectorControls>

		<ul { ...useBlockProps( {
			style: {
				...( attributes.highlightColor
					? { '--wmf-report-highlight-color': `var(--wp--preset--color--${ attributes.highlightColor })` }
					: {}
				),
			}
		} ) }>
			{ waypoints.map( ( waypoint ) => (
				<li key={ `waypoint-${ waypoint.clientId }` }>
					{ /* eslint-disable-next-line jsx-a11y/anchor-is-valid -- Maintains styling parity, we save this as an <a>. */ }
					<a
						href={ `#${ waypoint.tocSlug }` }
						onClick={ () => {
							// This is why we map over the useEffect() return value, and
							// not attributes.waypoints: The attr won't have the clientId.
							selectBlock( waypoint.clientId );
							openGeneralSidebar( 'edit-post/block' );
						} }
					>
						{ waypoint.tocLabel || noLabelMessage }
					</a>
				</li>
			) ) }
		</ul>
		</>
	);
}

export default withColors( {
	highlightColor: 'highlight-color',
} )( Edit );
