# PaletteColorPicker

This component abstracts the use of experimental Block Editor component APIs to render a color settings-integrated color picker into a block's style sidebar. When clicked, the sidebar control will open a panel allowing the editor to select a color from the theme's palette.

If you can get by with a built-in block color supports value like text or background color, using [block supports to declare color options](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/#color) is much easier than integrating a custom color into a block with this component. This component is intended for use only when the purpose of a color does not match any of those predefined block supports options. (It would not be appropriate to tell an editor that a value is going to be used for "text color" and then have it apply to something else, for example.)

## Usage

This component is designed to work alongside the block editor's [withColors](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#withcolors) higher-order component to enable a block color attribute to be edited.

The block must first declare a color, for example `accentColor`, as one of its block attributes:

```json
{
	"attributes": {
		"accentColor": {
			"type": "string"
		}
	}
}
```

Then, two things have to happen with the block's `Edit` component: it must be wrapped in a `withColors()` call on export, which will inject a color object and setter for the attribute specified  by the key of the passed object.

```js
import { __ } from '@wordpress/i18n';
import { withColors } from '@wordpress/block-editor';
import PaletteColorPicker from '../../components/palette-color-picker';

const EditBlock = ( {
	// Normal block props:
	clientId,
	attributes,
	// These come from withColors:
	accentColor,
	setAccentColor
} ) => {
	return (
		<>
			<PaletteColorPicker
				label={ __( 'Accent Color', 'mytheme' ) }
				color={ accentColor?.color || attributes.accentColor }
				onColorChange={ setAccentColor }
				clientId={ clientId }
			/>
			<div>
				{ /* other block markup */ }
			</div>
		</>
	)
};

// Tell withColors to prepare an accentColor value and setAccentColor setter,
// based on our "accentColor" block string attribute.
export default withColors( {
	accentColor: 'accent-color',
} )( Edit );
```

## Props

Name | Type | Description
---- | ---- | --------
`color` | `string` | Selected palette color name.
`label` | `string` | Human-oriented label for the color picker.
`onColorChange` | `( colorName: string ) => void` | Callback to persist the selected color.
`clientId` | `string` | Selected block's ClientID, required to properly inject the color picker into the right editor sidebar slot.
