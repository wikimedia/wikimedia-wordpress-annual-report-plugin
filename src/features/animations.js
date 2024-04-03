import lottie from 'lottie-web';

document.addEventListener( 'DOMContentLoaded', () => {
	const noAdsServedElement = document.getElementById( '0-ads-served' );
	const topVisitedElement = document.getElementById( 'top-visited' );
	const pieChartElement = document.getElementById( 'piechart' );

	[ noAdsServedElement, topVisitedElement, pieChartElement ].forEach(
		( element ) => {
			element.querySelector( '.wp-block-image' )?.remove();
		}
	);

	const noAdsServedAnimation = lottie.loadAnimation( {
		container: noAdsServedElement,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		mode: 'scroll',
		actions: [
			{
				visibility: [ 0.5, 1.0 ],
				type: 'play',
			},
		],
		path: '/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/0-ads-served.json',
	} );

	const topVisitedAnimation = lottie.loadAnimation( {
		container: topVisitedElement,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		mode: 'scroll',
		actions: [
			{
				visibility: [ 0.5, 1.0 ],
				type: 'play',
			},
		],
		path: '/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/top-visited.json',
	} );

	const pieChartAnimation = lottie.loadAnimation( {
		container: pieChartElement,
		renderer: 'svg',
		loop: false,
		autoplay: false,
		mode: 'scroll',
		actions: [
			{
				visibility: [ 0.5, 1.0 ],
				type: 'play',
			},
		],
		path: '/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/piechart.json',
	} );

	const noAddsObserver = new window.IntersectionObserver(
		( [ entry ] ) => {
			if ( ! entry.isIntersecting ) {
				return;
			}
			noAdsServedAnimation.play();
		},
		{
			root: null,
			threshold: 1, // set offset 0.1 means trigger if atleast 10% of element in viewport
		}
	);

	const topVisitedObserver = new window.IntersectionObserver(
		( [ entry ] ) => {
			if ( ! entry.isIntersecting ) {
				return;
			}
			topVisitedAnimation.play();
		},
		{
			root: null,
			threshold: 1, // set offset 0.1 means trigger if atleast 10% of element in viewport
		}
	);

	const pieChartObserver = new window.IntersectionObserver(
		( [ entry ] ) => {
			if ( ! entry.isIntersecting ) {
				return;
			}
			pieChartAnimation.play();
		},
		{
			root: null,
			threshold: 1, // set offset 0.1 means trigger if atleast 10% of element in viewport
		}
	);

	noAddsObserver.observe( noAdsServedElement );
	topVisitedObserver.observe( topVisitedElement );
	pieChartObserver.observe( pieChartElement );
} );
