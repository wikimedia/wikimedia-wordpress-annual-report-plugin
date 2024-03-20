/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps } from '@wordpress/block-editor';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @param {Object} props            React component props.
 * @param {Object} props.attributes Block Editor attributes object.
 * @return {Element} Element to render.
 */
export default function save( { attributes } ) {
	return (
		<nav { ...useBlockProps.save() }>
			<ul>
				{ ( JSON.parse( attributes.waypoints ) || [] ).map(
					( waypoint ) => (
						<li key={ `waypoint-${ waypoint.tocSlug }` }>
							<a href={ `#${ waypoint.tocSlug }` }>
								{ waypoint.tocLabel }
							</a>
						</li>
					)
				) }
			</ul>
		</nav>
	);
}
