const { clipboard } = navigator;

const clickShareButton = ( event ) => {
	const button = event.target.closest( '.is-share-button' );

	if ( ! button ) {
		return;
	}

	const currentUrl = location.href;

	clipboard.writeText( currentUrl ).then( () => {
		button.classList.add( 'copied' );
		setTimeout( () => button.classList.remove( 'copied' ), 5000 );
	} );
};

document.addEventListener( 'click', clickShareButton );
