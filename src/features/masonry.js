const initMasonry = function ( container, items, columns, id ) {
	const containerElement = document.querySelector( container );
	const containerElementWrapper = containerElement.parentNode;
	const itemElements = document.querySelectorAll( items );
	// containerElement.style.display = 'none';
	// containerElement.setAttribute( 'aria-hidden', '' );
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
		col.appendChild( newItem );
		countColumn = countColumn < columns ? countColumn + 1 : 1;
	} );
};

document.addEventListener( 'DOMContentLoaded', () => {
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

	window.addEventListener( 'resize', () => {
		toggleMasonryView();
	} );
} );
