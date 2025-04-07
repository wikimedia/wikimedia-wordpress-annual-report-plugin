const v1 = {
	attributes: {
		animationData: {
			type: 'string',
			source: 'attribute',
			selector: '.wmf-animation',
			attribute: 'data-animation',
			default: '',
		},
		maxWidth: {
			type: 'number',
			default: 330,
		},
	},
	supports: {
		html: false,
		align: [ 'left', 'right', 'center' ],
		spacing: {
			margin: true,
		},
	},
	save: ( { attributes } ) => {
		let reserializedJSON = '';

		const blockStyle = {};
		if ( attributes.maxWidth ) {
			blockStyle.maxWidth = `${ attributes.maxWidth }px`;
		}

		try {
			const parsedJSON = JSON.parse( attributes.animationData );

			if ( parsedJSON.w && parsedJSON.h ) {
				blockStyle.aspectRatio = `${ parsedJSON.w } / ${ parsedJSON.h }`;
			}

			reserializedJSON = JSON.stringify( parsedJSON );
		} catch ( e ) {
			// Save as unchanged if invalid JSON.
			reserializedJSON = attributes.animationData;
		}
		return (
			<div
				className="wmf-animation"
				style={ blockStyle }
				data-animation={ reserializedJSON }
			/>
		);
	},
};

export default v1;
