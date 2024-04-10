const { clipboard } = navigator;

const shareButtons = document.querySelectorAll( '.is-share-button' );

const clickShareButton = ( event ) => {
	const currentUrl = location.href;
	const button = event.currentTarget;

	clipboard.writeText( currentUrl ).then( () => {
		button.classList.add( 'copied' );
		setTimeout( () => button.classList.remove( 'copied' ), 5000 );
	} );
};

[ ...shareButtons ].forEach( ( button ) =>
	button.addEventListener( 'click', clickShareButton )
);
