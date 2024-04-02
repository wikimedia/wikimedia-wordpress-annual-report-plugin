import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

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
						'core/image',
						{
							className:
								'is-style-default wp-block-wmf-reports-report__image',
							height: '300px',
							id: 74197,
							lightbox: {
								className:
									'is-style-default wp-block-wmf-reports-report__image',
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
							width: '240px',
						},
					],
					[
						'core/paragraph',
						{
							className: 'wp-block-wmf-reports-report__date',
							content: '<strong>2023</strong>',
							style: {
								elements: {
									link: {
										color: {
											text: 'var:preset|color|base10',
										},
									},
								},
							},
							textColor: 'base10',
						},
					],
					[
						'core/heading',
						{
							className:
								'wp-block-wmf-reports-report__title is-style-default',
							content:
								'<a href="#"><strong>The people behind a year of impact around the world</strong></a>',
							level: 3,
						},
					],
				] }
			/>
		</div>
	);
}
