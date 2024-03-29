const stories = document.getElementsByClassName( 'wp-block-wmf-reports-story' );
const categorySlides = document.getElementsByClassName( 'category-slide' );
const backButton = document.getElementById( 'carousel-back' );
const forwardButton = document.getElementById( 'carousel-forward' );
const slideCount = stories.length;

const setMarginOffset = ( offset ) => {
	const track = document.getElementsByClassName(
		'stories__categories'
	)?.[ 0 ];

	track.style.marginLeft = offset + 'px';
};

let processingAnimation = false;

const animateSlider = ( currentItemIndex ) => {
	const wrapper = document.getElementsByClassName(
		'stories__categories-wrapper'
	)?.[ 0 ];
	const track = document.getElementsByClassName(
		'stories__categories'
	)?.[ 0 ];
	const activeCategory = document.querySelector( '.category-slide.active' );
	const lastSlide = document.querySelector( '.category-slide:last-child' );
	const currentOffset = track.style.marginLeft || 0;

	const wrapperPosition = wrapper?.getBoundingClientRect();
	const categoryPosition = activeCategory?.getBoundingClientRect();
	const lastSlidePosition = lastSlide?.getBoundingClientRect();

	// calculate the position of the category slide.

	// First index should always go to position 0;
	if ( currentItemIndex === 0 ) {
		setMarginOffset( 0 );
		return;
	}

	// If there are not enough items to trigger scrolling, return.
	if ( lastSlidePosition.right < wrapperPosition.right ) {
		setMarginOffset( 0 );
		return;
	}

	// Last index should always be no further left than wrapperPosition.right
	if ( currentItemIndex === slideCount - 1 ) {
		// Get width of slide.
		const slideWidth = categoryPosition.right - categoryPosition.left;
		const positionOfSlide =
			categoryPosition.left - parseInt( currentOffset );
		const newPosition =
			wrapperPosition.right - ( positionOfSlide + slideWidth );
		setMarginOffset( newPosition );
		return;
	}

	if ( currentItemIndex > 0 && currentItemIndex < slideCount - 1 ) {
		const firstSlide = document.querySelector(
			'.category-slide:first-child'
		);
		const slideWidth = categoryPosition.right - categoryPosition.left;
		const positionOfSlide =
			categoryPosition.left - parseInt( currentOffset );
		const wrapperWidth = wrapperPosition.right - wrapperPosition.left;
		const halfWrapperWidth = wrapperWidth / 2;
		const newPosition =
			wrapperPosition.right -
			halfWrapperWidth -
			positionOfSlide +
			slideWidth / 2;

		// If its going to take our first slide too far right, set the position 0.
		const firstSlidePosition = firstSlide?.getBoundingClientRect();
		const firstSlideOffset =
			firstSlidePosition.left - parseInt( currentOffset );
		const firstSlideNewPosition = firstSlideOffset + newPosition;

		if ( firstSlideNewPosition > wrapperPosition.left ) {
			setMarginOffset( 0 );
			return;
		}

		// If its going to take our last slide too far left, set position of last slide.
		const lastSlideOffset =
			lastSlidePosition.right - parseInt( currentOffset );
		const lastSlideNewPosition = lastSlideOffset + newPosition;

		if ( lastSlideNewPosition < wrapperPosition.right ) {
			setMarginOffset( wrapperPosition.right - lastSlideOffset );
			return;
		}

		// Otherwise set the position.
		setMarginOffset( newPosition );
	}
};

const setSlide = ( id ) => {
	const currentSlide = document.querySelector( '.category-slide.active' );
	const currentId = parseInt( currentSlide?.dataset?.index || 0 );

	const nextStoryInfoBox = stories[ id ];

	const nextCategorySlide = Array.from( categorySlides ).filter(
		( categorySlide ) => categorySlide.dataset.id === nextStoryInfoBox.id
	);

	Array.from( categorySlides ).forEach( ( categorySlide ) => {
		categorySlide.classList.remove( 'active' );
	} );

	nextCategorySlide.forEach( ( categorySlide ) => {
		categorySlide.classList.add( 'active' );
	} );

	Array.from( stories ).forEach( ( storyInfoBox, index ) => {
		if ( processingAnimation ) {
			return;
		}

		if ( index === id ) {
			return;
		}

		// Handle animations.
		if ( index === currentId && currentId !== id ) {
			// Left to right animation.
			if ( id >= currentId ) {
				nextStoryInfoBox.style.height = null;
				nextStoryInfoBox.style.opacity = 0;

				storyInfoBox.style.opacity = 1;
				storyInfoBox.style.position = 'absolute';
				storyInfoBox.style.zIndex = 1;

				storyInfoBox.classList.add( 'animate' );

				setTimeout( () => {
					storyInfoBox.style.height = nextStoryInfoBox.offsetHeight;
					storyInfoBox.style.opacity = 0;

					processingAnimation = true;
				}, 1 );

				setTimeout( () => {
					storyInfoBox.style.height = 0;
					storyInfoBox.style.opacity = null;
					storyInfoBox.style.position = null;
					storyInfoBox.style.visibility = 'hidden';
					storyInfoBox.style.zIndex = null;

					storyInfoBox.classList.remove( 'animate' );

					processingAnimation = false;
				}, 250 );

				nextStoryInfoBox.style.height = null;
				nextStoryInfoBox.style.opacity = null;
				nextStoryInfoBox.style.visibility = 'visible';

				return;
			}

			// Right to left animation.
			if ( id < currentId ) {
				nextStoryInfoBox.style.height = null;
				nextStoryInfoBox.style.opacity = 0;
				nextStoryInfoBox.style.position = 'absolute';
				nextStoryInfoBox.style.visibility = 'visible';

				storyInfoBox.style.height = null;
				storyInfoBox.style.opacity = 1;
				storyInfoBox.style.visibility = 'visible';

				setTimeout( () => {
					nextStoryInfoBox.classList.add( 'animate' );

					storyInfoBox.classList.add( 'animate' );
				}, 1 );

				setTimeout( () => {
					nextStoryInfoBox.style.opacity = 1;

					storyInfoBox.style.height =
						nextStoryInfoBox.offsetHeight + 'px';

					processingAnimation = true;
				}, 2 );

				setTimeout( () => {
					nextStoryInfoBox.style.height = null;
					nextStoryInfoBox.style.opacity = null;
					nextStoryInfoBox.style.position = null;
					nextStoryInfoBox.style.visibility = 'visible';

					nextStoryInfoBox.classList.remove( 'animate' );

					storyInfoBox.style.height = 0;
					storyInfoBox.style.opacity = null;
					storyInfoBox.style.visibility = 'hidden';

					storyInfoBox.classList.remove( 'animate' );

					processingAnimation = false;
				}, 250 );
				return;
			}
			return;
		}

		storyInfoBox.style.height = 0;
		storyInfoBox.style.visibility = 'hidden';
	} );

	animateSlider( id );
};

setSlide( 0 );

Array.from( categorySlides ).forEach( ( categorySlide, index ) => {
	categorySlide.addEventListener( 'click', () => {
		setSlide( index );
	} );
} );

backButton.addEventListener( 'click', () => {
	const index = Array.from( stories ).findIndex(
		( story ) => story.style.visibility === 'visible'
	);

	const nextIndex = index - 1 < 0 ? stories.length - 1 : index - 1;
	setSlide( nextIndex );
} );

forwardButton.addEventListener( 'click', () => {
	let index = Array.from( stories ).findIndex(
		( story ) => story.style.visibility === 'visible'
	);

	if ( index < 0 ) {
		index = 0;
	}

	const nextIndex = index + 1 > stories.length - 1 ? 0 : index + 1;
	setSlide( nextIndex );
} );
