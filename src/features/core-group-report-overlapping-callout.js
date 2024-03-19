import debounce from '../helpers/debounce';

const matchingGroups = document.querySelectorAll(
	'.is-style-report-overlapping-callout'
);

if ( matchingGroups.length ) {
	if ( matchingGroups.length > 1 ) {
		// eslint-disable-next-line no-console,prettier/prettier
		console.error(
			'More than one report header "overlapping callout"-style group detected. Height calculation may not work as expected.'
		);
	}

	const calloutStyleGroupNode = matchingGroups[ 0 ];
	function setReportCalloutHeightCssProperty() {
		const targetHeight = Math.round(
			calloutStyleGroupNode.getBoundingClientRect().height
		);
		document.documentElement.style.setProperty(
			'--report-overlapping-callout-group-block-height',
			`${ targetHeight }px`
		);
		console.log( `${ targetHeight }px` ); // eslint-disable-line
	}

	setReportCalloutHeightCssProperty();
	window.addEventListener(
		'resize',
		debounce( setReportCalloutHeightCssProperty, 17 )
	);
}
