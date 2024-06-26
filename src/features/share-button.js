const { clipboard } = navigator;

const clickShareButton = ( event ) => {
	const button = event.target.closest( '.is-share-button' );

	if ( ! button ) {
		return;
	}

	// Do not actually navigate.
	event.preventDefault();

	// Use URL set on the button itself, by default.
	const buttonTarget = button.querySelector( 'a' ).getAttribute( 'href' );
	const currentUrl =
		buttonTarget && buttonTarget.trim() !== '#'
			? buttonTarget
			: location.href;

	clipboard.writeText( currentUrl ).then( () => {
		button.classList.add( 'copied' );
		setTimeout( () => button.classList.remove( 'copied' ), 5000 );
	} );
};

document.addEventListener( 'click', clickShareButton );
