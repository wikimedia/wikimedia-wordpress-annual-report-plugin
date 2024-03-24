import { __ } from '@wordpress/i18n';
import {
	InnerBlocks,
	useBlockProps,
} from '@wordpress/block-editor';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @param {Object}   props               Block Props.
 * @param {Object}   props.attributes    Block Attributes.
 * @param {Function} props.setAttributes Set Block Attributes.
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
	return (
		<div
			{ ...useBlockProps( {
				className: 'carousel__slide',
			} ) }
		>
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
				] }
			/>
		</div>
	);
}
