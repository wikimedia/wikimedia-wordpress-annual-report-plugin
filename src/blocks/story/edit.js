import { __ } from '@wordpress/i18n';
import { createBlock } from '@wordpress/blocks';
import {
	InnerBlocks,
	InspectorControls,
	useBlockProps,
} from '@wordpress/block-editor';
import {
	Button,
	BaseControl,
	PanelBody,
	SelectControl,
} from '@wordpress/components';
import { useSelect, useDispatch } from '@wordpress/data';

// eslint-disable-next-line import/no-unresolved
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param {Object}   props               Block Props.
 * @param {Object}   props.attributes    Block Attributes.
 * @param {number}   props.clientId      Block ClientId.
 * @param {Function} props.setAttributes Set Block Attributes.
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, clientId, setAttributes } ) {
	const { PostSelectButton } = window.hm.components;

	const { postId, postType } = attributes;

	const childBlocks = useSelect(
		( select ) =>
			select( 'core/editor' ).getBlocksByClientId( clientId )[ 0 ]
				.innerBlocks
	);

	const { media, post } = useSelect( ( select ) => {
		// eslint-disable-next-line no-shadow
		const post = select( 'core' ).getEntityRecord(
			'postType',
			postType,
			postId
		);

		// eslint-disable-next-line no-shadow
		const media = select( 'core' ).getMedia( post?.featured_media || 0 );

		return {
			media,
			post,
		};
	} );

	// const { replaceBlocks } = useDispatch( 'core/block-editor' );
	const { insertBlocks, removeBlocks } = useDispatch( 'core/block-editor' );

	const onPostSelect = ( posts ) => {
		// eslint-disable-next-line no-shadow
		const postId = posts?.[ 0 ]?.id || 0;

		if ( postId === 0 ) {
			return;
		}

		setAttributes( { postId } );
	};

	const updateSlide = () => {
		if ( ! postId || postId === 0 || ! post ) {
			return;
		}

		const clientIds = childBlocks.map( ( block ) => block.clientId );
		const heading = post.title.raw || '';
		const imageId = post?.featured_media || 0;
		const imageUrl = media?.link || '';
		const link = post?.link || '#';
		const excerpt = ( post.excerpt.rendered || '' ).replace(
			/<\/?[^>]+(>|$)/g,
			''
		);
		const content = post?.content?.raw || '';

		const innerBlocks = wp.blocks.rawHandler( {
			HTML: content,
		} );

		removeBlocks( clientIds );

		const newBlocks = [
			createBlock(
				'core/group',
				{
					align: 'full',
					backgroundColor: 'wmf-report-blue',
					className: 'carousel-slide',
					layout: { type: 'constrained' },
					textColor: 'base100',
				},
				[
					createBlock( 'core/columns', { align: 'wide' }, [
						createBlock( 'core/column', { width: '66.66%' }, [
							createBlock( 'core/image', {
								aspectRatio: '4/3',
								className:
									'is-style-default carousel-slide__image',
								id: imageId || 74197,
								lightbox: {
									aspectRatio: '4/3',
									className:
										'is-style-default carousel-slide__image',
									enabled: false,
									id: imageId || 74197,
									linkDestination: 'none',
									scale: 'cover',
									sizeSlug: 'full',
									url:
										imageUrl ||
										'/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png',
								},
								linkDestination: 'none',
								scale: 'cover',
								sizeSlug: 'full',
								url:
									imageUrl ||
									'/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png',
							} ),
						] ),
						createBlock( 'core/column', { width: '33.33%' }, [
							createBlock( 'core/heading', {
								className:
									'carousel-slide__heading is-style-default',
								content:
									heading ||
									'Lorem ipsum dolor sit amet vulputate.',
							} ),
							createBlock( 'core/paragraph', {
								className: 'is-style-sans-p',
								content:
									excerpt ||
									'Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum.',
							} ),
							createBlock( 'core/buttons', {}, [
								createBlock( 'core/button', {
									backgroundColor: 'base100',
									className:
										'is-style-tertiary carousel-slide__button',
									text: 'Read More',
									style: {
										elements: {
											link: {
												color: {
													text: 'var:preset|color|base0',
												},
											},
										},
									},
									textColor: 'base10',
									url: link,
								} ),
							] ),
						] ),
					] ),
				]
			),
			createBlock(
				'wmf-reports/overlay',
				{
					postId,
					postType,
				},
				[
					createBlock(
						'core/group',
						{
							align: 'full',
							className: 'overlay__group',
							layout: { type: 'constrained' },
						},
						[
							createBlock( 'core/columns', { align: 'wide' }, [
								createBlock(
									'core/column',
									{ width: '66.66%' },
									[
										createBlock( 'core/image', {
											aspectRatio: '4/3',
											className:
												'is-style-default overlay__image',
											id: imageId || 74197,
											lightbox: {
												aspectRatio: '4/3',
												className:
													'is-style-default overlay__image',
												enabled: false,
												id: imageId || 74197,
												linkDestination: 'none',
												scale: 'cover',
												sizeSlug: 'full',
												url:
													imageUrl ||
													'/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png',
											},
											linkDestination: 'none',
											scale: 'cover',
											sizeSlug: 'full',
											url:
												imageUrl ||
												'/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png',
										} ),
									]
								),
								createBlock(
									'core/column',
									{ width: '33.33%' },
									[
										createBlock( 'core/paragraph', {
											className:
												'overlay__category is-style-sans-p',
											content: 'Lorem ipsum / Sit amet',
											style: {
												elements: {
													link: {
														color: {
															text: 'var:preset|color|orange',
														},
													},
												},
											},
											textColor: 'orange',
										} ),
										createBlock( 'core/heading', {
											className:
												'overlay__heading is-style-default',
											content:
												heading ||
												'Lorem ipsum dolor sit amet vulputate.',
										} ),
									]
								),
							] ),
							createBlock(
								'core/group',
								{
									align: 'wide',
									className: 'overlay__content',
									layout: { type: 'constrained' },
								},
								innerBlocks
							),
						]
					),
				]
			),
		];

		insertBlocks( newBlocks, null, clientId );
	};

	return (
		<div
			{ ...useBlockProps( {
				className: 'carousel__slide',
			} ) }
		>
			<InspectorControls>
				<PanelBody>
					<SelectControl
						label={ __( 'Choose Post Type', 'wmf-reports' ) }
						help={ __(
							'Altering the post type will allow you to choose posts from that post type using the select post button below.',
							'wmf-reports'
						) }
						options={ [
							{
								label: 'Post',
								value: 'post',
							},
							{
								label: 'Page',
								value: 'page',
							},
							{
								label: 'Profile',
								value: 'profile',
							},
							{
								label: 'Report',
								value: 'wmf-report',
							},
							{
								label: 'Story (Default)',
								value: 'story',
							},
						] }
						value={ postType }
						// eslint-disable-next-line no-shadow
						onChange={ ( postType ) => {
							setAttributes( { postType } );
						} }
					/>
					<BaseControl
						className="story-base-control"
						help={ __(
							'Associate this post with a slide. Once you have chosen a post use the button below to refresh the slide content.',
							'wmf-reports'
						) }
						id={ __( 'Associated Post', 'wmf-reports' ) }
						label={ __( 'Associated Post', 'wmf-reports' ) }
					>
						<PostSelectButton
							maxPosts={ 1 }
							postType={ postType }
							value={ [ postId ] }
							onSelect={ onPostSelect }
						>
							<span className="components-button is-secondary">
								{ __( 'Select post', 'wmf-reports' ) }
							</span>
						</PostSelectButton>
					</BaseControl>
					{ postId !== 0 && (
						<BaseControl
							className="story-base-control"
							help={ __(
								'Pull the slide content from the associated post.',
								'wmf-reports'
							) }
							id={ __( 'Refresh Slide Content', 'wmf-reports' ) }
							label={ __(
								'Refresh Slide Content',
								'wmf-reports'
							) }
						>
							<Button variant="secondary" onClick={ updateSlide }>
								{ __( 'Refresh Slide', 'wmf-reports' ) }
							</Button>
						</BaseControl>
					) }
				</PanelBody>
			</InspectorControls>
			<InnerBlocks
				template={ [
					[
						'core/group',
						{
							align: 'full',
							backgroundColor: 'wmf-report-blue',
							className: 'carousel-slide',
							layout: { type: 'constrained' },
							textColor: 'base100',
						},
						[
							[
								'core/columns',
								{ align: 'wide' },
								[
									[
										'core/column',
										{ width: '66.66%' },
										[
											[
												'core/image',
												{
													aspectRatio: '4/3',
													className:
														'is-style-default carousel-slide__image',
													id: 74197,
													lightbox: {
														aspectRatio: '4/3',
														className:
															'is-style-default carousel-slide__image',
														enabled: false,
														id: 74197,
														linkDestination: 'none',
														scale: 'cover',
														sizeSlug: 'full',
														url: '/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png',
													},
													linkDestination: 'none',
													scale: 'cover',
													sizeSlug: 'full',
													url: '/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png',
												},
											],
										],
									],
									[
										'core/column',
										{ width: '33.33%' },
										[
											[
												'core/heading',
												{
													className:
														'carousel-slide__heading is-style-default',
													content:
														'Lorem ipsum dolor sit amet vulputate.',
												},
											],
											[
												'core/paragraph',
												{
													className:
														'is-style-sans-p',
													content:
														'Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum.',
												},
											],
											[
												'core/buttons',
												{},
												[
													[
														'core/button',
														{
															backgroundColor:
																'base100',
															className:
																'is-style-tertiary carousel-slide__button',
															text: 'Read More',
															style: {
																elements: {
																	link: {
																		color: {
																			text: 'var:preset|color|base0',
																		},
																	},
																},
															},
															textColor: 'base10',
														},
													],
												],
											],
										],
									],
								],
							],
						],
					],
					[ 'wmf-reports/overlay', {} ],
				] }
			/>
		</div>
	);
}
