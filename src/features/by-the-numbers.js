import lottie from 'lottie-web';

const doFadeAnimations = () => {
	const fadeUpAnimation = document.querySelectorAll( '.animation--fade-up' );
	Array.from( fadeUpAnimation ).forEach( ( animation ) => {
		const bounceInContainer = animation.querySelector(
			'.wp-block-group__inner-container'
		);

		const observer = new window.IntersectionObserver(
			( [ entry ] ) => {
				if ( ! entry.isIntersecting ) {
					if ( ! entry.isVisible ) {
						for ( const element of bounceInContainer.children ) {
							setTimeout( () => {
								element.style.opacity = 0;
								element.style.transform = 'translateY(5px)';
							}, 500 );
						}
					}
					return;
				}
				let fadeIn = 1;
				setTimeout( () => {
					for ( const element of bounceInContainer.children ) {
						element.style.opacity = 0;
						element.style.transform = 'translateY(5px)';

						setTimeout( () => {
							element.style.transition = 'all 0.5s ease-in-out';

							setTimeout( () => {
								element.style.opacity = 1;
								element.style.transform = 'translateY(0px)';
							}, 1 );
						}, fadeIn );

						fadeIn = fadeIn + 250;
					}
				}, 250 );
			},
			{
				root: null,
				threshold: 1, // set offset 0.1 means trigger if at least 10% of element in viewport
			}
		);

		observer.observe( bounceInContainer );
	} );
};

const doAnimations = () => {
	const noAdsServedElement = document.getElementById( '0-ads-served' );
	const topVisitedElement = document.getElementById( 'top-visited' );
	const pieChartElement = document.getElementById( 'piechart' );
	const noAdsServedElementDesktop = document.getElementById(
		'0-ads-served-desktop'
	);
	const topVisitedElementDesktop = document.getElementById(
		'top-visited-desktop'
	);
	const pieChartElementDesktop =
		document.getElementById( 'piechart-desktop' );

	const animations = {
		'0-ads-served': [ noAdsServedElement, noAdsServedElementDesktop ],
		'top-visited': [ topVisitedElement, topVisitedElementDesktop ],
		piechart: [ pieChartElement, pieChartElementDesktop ],
	};

	Object.entries( animations ).forEach( ( [ key, elements ] ) => {
		elements.forEach( ( element ) => {
			element?.querySelector( '.wp-block-image' )?.remove();

			const animation = lottie.loadAnimation( {
				container: element,
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
				path: `/wp-content/plugins/wikimedia-wordpress-annual-report-plugin/assets/animations/${ key }.json`,
			} );

			const observer = new window.IntersectionObserver(
				( [ entry ] ) => {
					if ( ! entry.isIntersecting ) {
						if ( ! entry.isVisible ) {
							animation.setDirection( -1 );
							animation.play();
						}
						return;
					}
					animation.setDirection( 1 );
					animation.play();
				},
				{
					root: null,
					threshold: 1, // set offset 0.1 means trigger if at least 10% of element in viewport
				}
			);

			observer.observe( element );
		} );
	} );
};

const initMasonry = function ( container, items, columns, id ) {
	const containerElement = document.querySelector( container );
	const containerElementWrapper = containerElement.parentNode;
	const itemElements = document.querySelectorAll( items );
	const containerElementNew = document.createElement( 'div' );

	containerElementNew.setAttribute( 'id', id );
	containerElementNew.classList.add( 'masonry-layout', 'columns-' + columns );

	containerElementWrapper.appendChild( containerElementNew );

	for ( let i = 1; i <= columns; i++ ) {
		const column = document.createElement( 'div' );
		column.classList.add( 'masonry-column-' + i );
		containerElementNew.appendChild( column );
	}

	let countColumn = 1;
	itemElements.forEach( function ( item ) {
		const newItem = item.cloneNode( true );
		const col = document.querySelector(
			'#' + id + ' > .masonry-column-' + countColumn
		);

		const existingId = newItem.getAttribute( 'id' );
		newItem.setAttribute( 'id', `${ existingId }-desktop` );

		col.appendChild( newItem );
		countColumn = countColumn < columns ? countColumn + 1 : 1;
	} );
};

function initializeByTheNumbers() {
	const masonryContainer = document.querySelector(
		'.wmf-pattern-by-the-numbers__masonry'
	);

	if ( ! masonryContainer ) {
		return;
	}

	initMasonry(
		'.wmf-pattern-by-the-numbers__masonry > .wp-block-group__inner-container',
		'.wmf-pattern-by-the-numbers__masonry > .wp-block-group__inner-container > .wp-block-group',
		2,
		'wmf-pattern-masonry'
	);

	const desktopVersion = masonryContainer.querySelector(
		'#wmf-pattern-masonry'
	);

	const mobileVersion = masonryContainer.querySelector(
		'.wp-block-group__inner-container'
	);

	const toggleMasonryView = () => {
		const windowWidth = window.innerWidth;

		if ( windowWidth < 782 ) {
			mobileVersion.style.display = null;
			mobileVersion.removeAttribute( 'aria-hidden' );
			desktopVersion.style.display = 'none';
			desktopVersion.setAttribute( 'aria-hidden', '' );
		} else {
			desktopVersion.style.display = null;
			desktopVersion.removeAttribute( 'aria-hidden' );
			mobileVersion.style.display = 'none';
			mobileVersion.setAttribute( 'aria-hidden', '' );
		}
	};

	toggleMasonryView();
	window.addEventListener( 'DOMContentLoaded', () => {
		setTimeout( () => {
			doAnimations();
			doFadeAnimations();
		} );
	} );

	window.addEventListener( 'resize', () => {
		toggleMasonryView();
	} );
}

initializeByTheNumbers();
