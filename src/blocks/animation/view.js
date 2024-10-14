import lottie from 'lottie-web';

const animations = new Map();

const observer = new window.IntersectionObserver(
	( entries ) => {
		entries.forEach( ( entry ) => {
			const animation = animations.get( entry.target );
			if ( ! animation ) {
				return;
			}
			if ( ! entry.isIntersecting ) {
				if ( ! entry.isVisible ) {
					animation.setDirection( -1 );
					animation.play();
				}
				return;
			}
			animation.setDirection( 1 );
			animation.play();
		} );
	},
	{
		root: null,
		threshold: 1, // set offset 0.1 means trigger if at least 10% of element in viewport
	}
);

/**
 * Register an animation with our intersection observer.
 *
 * @param {HTMLDivElement}                     container Animation container element.
 * @param {import('lottie-web').AnimationItem} animation Lottie animation instance.
 */
function registerAnimation( container, animation ) {
	animations.set( container, animation );

	observer.observe( container );
}

document
	.querySelectorAll( '.wmf-animation[data-animation]' )
	/**
	 * Initialize all animations.
	 *
	 * @param {HTMLDivElement} animationContainer Animation container element.
	 */
	.forEach( ( animationContainer ) => {
		let animationData = '';
		try {
			animationData = JSON.parse( animationContainer.dataset.animation );
		} catch ( e ) {
			return;
		}

		const animation = lottie.loadAnimation( {
			container: animationContainer,
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
			animationData,
		} );

		registerAnimation( animationContainer, animation );
	} );
