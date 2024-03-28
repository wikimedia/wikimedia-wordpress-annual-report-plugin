import { __ } from '@wordpress/i18n';
import {
	InnerBlocks,
	InspectorControls,
	useBlockProps,
} from '@wordpress/block-editor';
import { BaseControl, PanelBody, TextControl } from '@wordpress/components';

import { SearchBox } from '@mapbox/search-js-react';

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
export default function Edit( { attributes, setAttributes } ) {
	const { lat, long } = attributes;

	return (
		<div
			{ ...useBlockProps( {
				className: 'carousel__slide',
			} ) }
		>
			<InspectorControls>
				<PanelBody>
					<BaseControl
						help={ __(
							'Search for the address to update the longitude and latitude',
							'wmf-reports'
						) }
						id="search-box"
						label={ __( 'Search for address', 'wmf-reports' ) }
					>
						<SearchBox
							// eslint-disable-next-line no-undef
							accessToken={ wmf?.apiKey }
							value=""
							onRetrieve={ ( object ) => {
								const { coordinates } = object?.features?.[ 0 ]
									?.geometry || [
									-13.326915886961197, 25.093160453432485,
								];
								setAttributes( {
									lat: coordinates[ 1 ],
									long: coordinates[ 0 ],
								} );
							} }
						/>
					</BaseControl>
					<TextControl
						help={ __(
							'Update the latitude, use the search, or drag the marker to pin point a location.',
							'wmf-reports'
						) }
						label={ __( 'Latitude', 'wmf-reports' ) }
						value={ lat }
						// eslint-disable-next-line no-shadow
						onChange={ ( lat ) => {
							setAttributes( { lat } );
						} }
					/>
					<TextControl
						help={ __(
							'Update the longitude, use the search, or drag the marker to pin point a location.',
							'wmf-reports'
						) }
						label={ __( 'Longitude', 'wmf-reports' ) }
						value={ long }
						// eslint-disable-next-line no-shadow
						onChange={ ( long ) => {
							setAttributes( { long } );
						} }
					/>
				</PanelBody>
			</InspectorControls>
			<InnerBlocks
				template={ [
					[
						'core/group',
						{
							align: 'full',
							backgroundColor: 'wmf-report-bright-yellow',
							className: 'wmf-pattern-reports-carousel-slide',
							layout: { type: 'constrained' },
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
														'is-style-default wmf-pattern-reports-carousel-slide__image',
													id: 74197,
													lightbox: {
														aspectRatio: '4/3',
														className:
															'is-style-default wmf-pattern-reports-carousel-slide__image',
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
												'core/paragraph',
												{
													className:
														'wmf-pattern-reports-carousel-slide__category is-style-sans-p',
													content:
														'Lorem ipsum / Sit amet',
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
												},
											],
											[
												'core/heading',
												{
													className:
														'wmf-pattern-reports-carousel-slide__heading is-style-h2',
													content:
														'Lorem ipsum dolor sit amet vulputate.',
													level: 3,
												},
											],
											[
												'core/paragraph',
												{
													className:
														'wmf-pattern-reports-carousel-slide__location is-style-sans-p',
													content:
														'<em>Line for location</em>',
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
																'is-style-tertiary wmf-pattern-reports-carousel-slide__button',
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
