/* eslint-disable @wordpress/no-unsafe-wp-apis */
import {
	InspectorControls,
	__experimentalColorGradientSettingsDropdown as ColorGradientSettingsDropdown,
	__experimentalUseMultipleOriginColorsAndGradients as useMultipleOriginColorsAndGradients,
} from '@wordpress/block-editor';

const noop = () => {};

/**
 * Render a palette-driven color picker into a block's color settings panel,
 * which will open a color selection popup when clicked.
 *
 * @param {Object}   props               React component props.
 * @param {string}   props.color         Selected palette color value.
 * @param {string}   props.label         Human-oriented color label.
 * @param {Function} props.onColorChange Callback to persist a selected color.
 * @param {string}   props.clientId      ClientID of selected block.
 * @return {import('react').ReactNode} Rendered color picker control, within the InspectorControls slot.
 */
const PaletteColorPicker = ( {
	color = null,
	label = '',
	onColorChange = noop,
	clientId,
} ) => {
	const colorGradientSettings = useMultipleOriginColorsAndGradients();

	const customColorSettings = [
		{
			colorValue: color,
			onColorChange,
			label,
		},
	];

	return (
		<InspectorControls group="color">
			<ColorGradientSettingsDropdown
				settings={ customColorSettings }
				panelId={ clientId }
				hasColorsOrGradients={ false }
				__experimentalIsRenderedInSidebar
				{ ...colorGradientSettings }
			/>
		</InspectorControls>
	);
};

export default PaletteColorPicker;
