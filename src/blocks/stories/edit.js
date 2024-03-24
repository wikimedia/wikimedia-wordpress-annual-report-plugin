import { __ } from '@wordpress/i18n';
import { createBlock } from '@wordpress/blocks';
import { InspectorControls, RichText, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { useSelect, useDispatch } from '@wordpress/data';
import { useCallback, useEffect, useRef, useState } from '@wordpress/element';

// eslint-disable-next-line import/no-unresolved
import './editor.scss';

import InnerBlocksDisplaySingle from '../../components/inner-block-slider/inner-block-single-display';
import Navigation from '../../components/inner-block-slider/navigation';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param {Object}   props               Block Props.
 * @param {Object}   props.attributes    Block Attributes.
 * @param {number}   props.clientId      Client ID.
 * @param {Function} props.setAttributes Set Block Attributes.
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, clientId, setAttributes } ) {
	// Get the innerBlocks (slideBlocks).
	const slideBlocks = useSelect(
		( select ) =>
			select( 'core/block-editor' ).getBlock( clientId ).innerBlocks
	);

	const { insertBlock, selectBlock, updateBlockAttributes } =
		useDispatch( 'core/block-editor' );

	// Track state in a ref, to allow us to determine if slides are added or removed.
	const slideCount = useRef( slideBlocks.length );

	// Keep track of the selected Slide.
	const [ currentItemIndex, setCurrentItemIndex ] = useState( 0 );
	const [ marginOffset, setMarginOffset ] = useState( 0 );

	/**
	 * Add Slide Function.
	 */
	const addSlide = () => {
		const id = Date.now();
		const created = createBlock( 'wmf-reports/story', {
			id,
		} );
		insertBlock( created, undefined, clientId );
	};

	/**
	 * Scroll category slides into view.
	 */
	useEffect( () => {
		const wrapper = document.getElementsByClassName(
			'stories__categories-wrapper'
		)?.[ 0 ];
		const track = document.getElementsByClassName(
			'stories__categories'
		)?.[ 0 ];
		const activeCategory = document.querySelector(
			'.category-slide.active'
		);
		const currentOffset = track.style.marginLeft || 0;

		const wrapperPosition = wrapper?.getBoundingClientRect();
		const categoryPosition = activeCategory?.getBoundingClientRect();

		// calculate the position of the category slide.

		// First index should always go to position 0;
		if ( currentItemIndex === 0 ) {
			setMarginOffset( 0 );
		}

		// Last index should always be no further left than wrapperPosition.right
		if ( currentItemIndex === slideCount.current - 1 ) {
			// Get width of slide.
			const slideWidth = categoryPosition.right - categoryPosition.left;
			const positionOfSlide =
				categoryPosition.left - parseInt( currentOffset );
			const newPosition =
				wrapperPosition.right - ( positionOfSlide + slideWidth );
			setMarginOffset( newPosition );
		}

		if (
			currentItemIndex > 0 &&
			currentItemIndex < slideCount.current - 1
		) {
			const firstSlide = document.querySelector(
				'.category-slide:first-child'
			);
			const lastSlide = document.querySelector(
				'.category-slide:last-child'
			);

			const slideWidth = categoryPosition.right - categoryPosition.left;
			const positionOfSlide =
				categoryPosition.left - parseInt( currentOffset );
			const wrapperWidth = wrapperPosition.right - wrapperPosition.left;
			const halfWrapperWidth = wrapperWidth / 2;
			const newPosition =
				wrapperPosition.right -
				halfWrapperWidth -
				positionOfSlide +
				slideWidth / 2;

			// If its going to take our first slide too far right, set the position 0.
			const firstSlidePosition = firstSlide?.getBoundingClientRect();
			const firstSlideOffset = firstSlidePosition.left - parseInt( currentOffset );
			const firstSlideNewPosition = firstSlideOffset + newPosition;

			if ( firstSlideNewPosition > wrapperPosition.left ) {
				setMarginOffset( 0 );
				return;
			}

			// If its going to take our last slide too far left, set position of last slide.
			const lastSlidePosition = lastSlide?.getBoundingClientRect();
			const lastSlideOffset =
				lastSlidePosition.right - parseInt( currentOffset );
			const lastSlideNewPosition = lastSlideOffset + newPosition;

			if ( lastSlideNewPosition < wrapperPosition.right ) {
				setMarginOffset( wrapperPosition.right - lastSlideOffset );
				return;
			}

			// Otherwise set the position.
			setMarginOffset( newPosition );
		}

		// Everything else should move to the middle, unless it already is near the middle.
	}, [ currentItemIndex ] );

	/**
	 * If a slide is added, switch to the new slide. If one is deleted, make sure we don't
	 * show a non-existent slide.
	 */
	useEffect( () => {
		if ( slideBlocks.length > slideCount.current ) {
			// Slide added
			setCurrentItemIndex( slideBlocks.length - 1 );
		} else if ( slideBlocks.length < slideCount.current ) {
			// Slide deleted
			if ( currentItemIndex + 1 > slideBlocks.length ) {
				setCurrentItemIndex( slideBlocks.length - 1 );
			}
		}

		// Update ref with new value..
		slideCount.current = slideBlocks.length;
	}, [ slideBlocks.length, currentItemIndex, slideCount, slideBlocks ] );

	const blockProps = useBlockProps( {
		className: 'stories',
	} );

	return (
		<div { ...blockProps }>
			<div className="stories__categories-wrapper alignwide">
				<div
					className="stories__categories"
					style={ { marginLeft: marginOffset } }
				>
					{ slideBlocks.map( ( slideBlock, index ) => {
						const {
							attributes: blockAttributes,
							clientId: blockId,
						} = slideBlock;
						const { category } = blockAttributes;
						return (
							<RichText
								className={
									'category-slide ' +
									( index === currentItemIndex
										? 'active'
										: '' )
								}
								key={ blockId }
								placeholder={ __(
									'Category Name',
									'harvard-blocks'
								) }
								tagName="div"
								value={ category }
								// eslint-disable-next-line no-shadow
								onChange={ ( category ) => {
									updateBlockAttributes( blockId, { category } );
								} }
								onClick={ () => {
									setCurrentItemIndex( index );
									selectBlock( clientId );
								} }
							/>
						);
					} ) }
				</div>
			</div>
			<div className="inner-block-slider">
				<InnerBlocksDisplaySingle
					allowedBlocks={ [ 'wmf-reports/story' ] }
					className="slides"
					currentItemIndex={ currentItemIndex }
					parentBlockId={ clientId }
					template={ [ 'wmf-reports/story' ] }
				/>
				<p className="help">
					{ __(
						'Click on the + below to add a slide. You can associate a slide with a post after it has been inserted.',
						'wmf-reports'
					) }
				</p>
				<Navigation
					addSlide={ addSlide }
					addSlideEnabled={ true }
					currentPage={ currentItemIndex + 1 }
					nextEnabled={ currentItemIndex + 1 < slideBlocks.length }
					prevEnabled={ currentItemIndex + 1 > 1 }
					setCurrentPage={ ( page ) => {
						setCurrentItemIndex( page - 1 );
					} }
					totalPages={ slideBlocks.length }
				/>
			</div>
		</div>
	);
}
