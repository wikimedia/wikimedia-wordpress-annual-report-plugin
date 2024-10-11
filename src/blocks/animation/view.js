import lottie from 'lottie-web';

document.querySelectorAll( '.wmf-animation[data-animation]' )
	.forEach( ( animationContainer ) => {
		console.log( { animationContainer, animationData: animationContainer.dataset.animation ?? '' } );
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

		observer.observe( animationContainer );
	} );
