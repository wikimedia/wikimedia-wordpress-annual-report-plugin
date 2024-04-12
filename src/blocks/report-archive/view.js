const reports = document.getElementsByClassName(
	'wp-block-wmf-reports-report'
);
const backButton = document.getElementById( 'report-back' );
const forwardButton = document.getElementById( 'report-forward' );
const track = document.querySelector( '.carousel__track' );
const slideWidth = 240;
const gap = 32;
const slideCount = reports.length;

const slides = document.querySelectorAll( '.carousel__track .carousel__slide' );
const lastSlide = document.querySelector(
	'.carousel__track .carousel__slide:last-of-type'
);

const lastSlideClone = lastSlide.cloneNode( true );
lastSlideClone.setAttribute( 'aria-hidden', true );

Array.from( slides ).forEach( ( slide ) => {
	const cloneSlide = slide.cloneNode( true );
	cloneSlide.setAttribute( 'aria-hidden', true );
	track.appendChild( cloneSlide );
} );

track.prepend( lastSlideClone );

let wmfReportIndex = 0;
let wmfReportPreviousIndex = 0;
let doingAnimation = false;
let touchstartX = 0;
let touchendX = 0;

const setMarginOffset = ( offset, animate = true ) => {
	if ( doingAnimation ) {
		return;
	}
	doingAnimation = true;
	if ( animate ) {
		track.classList.add( 'animate' );
	}
	track.style.marginLeft = -offset + 'px';
	setTimeout(
		() => {
			track.classList.remove( 'animate' );
			doingAnimation = false;
		},
		animate ? 500 : 1
	);
};

const animateSlider = ( currentItemIndex ) => {
	let offset = slideWidth / 2;

	if ( wmfReportIndex === slideCount - 1 && wmfReportPreviousIndex === 0 ) {
		offset = offset + slideCount * ( slideWidth + gap );
		setMarginOffset( offset, false );
		setTimeout( () => {
			offset = slideWidth / 2 + ( slideCount - 1 ) * ( slideWidth + gap );
			setMarginOffset( offset );
		}, 1 );
		return;
	}

	if ( wmfReportIndex === 0 && wmfReportPreviousIndex === slideCount - 1 ) {
		offset = offset + slideCount * ( slideWidth + gap );
		setMarginOffset( offset );
		setTimeout( () => {
			offset = slideWidth / 2;
			setMarginOffset( offset, false );
		}, 500 );
		return;
	}

	offset = offset + currentItemIndex * ( slideWidth + gap );
	setMarginOffset( offset );
};

// Init slide width.
setMarginOffset( slideWidth / 2 );

backButton.addEventListener( 'click', () => {
	wmfReportPreviousIndex = wmfReportIndex;
	wmfReportIndex =
		wmfReportIndex - 1 < 0 ? slideCount - 1 : wmfReportIndex - 1;
	animateSlider( wmfReportIndex );
} );

forwardButton.addEventListener( 'click', () => {
	wmfReportPreviousIndex = wmfReportIndex;
	wmfReportIndex =
		wmfReportIndex + 1 > slideCount - 1 ? 0 : wmfReportIndex + 1;
	animateSlider( wmfReportIndex );
} );

function checkDirection() {
	if ( touchendX + 100 < touchstartX ) {
		forwardButton.click();
	}

	if ( touchendX > touchstartX + 100 ) {
		backButton.click();
	}
}

track.addEventListener( 'touchstart', ( e ) => {
	touchstartX = e.changedTouches[ 0 ].screenX;
} );

track.addEventListener( 'touchend', ( e ) => {
	touchendX = e.changedTouches[ 0 ].screenX;
	checkDirection();
} );
