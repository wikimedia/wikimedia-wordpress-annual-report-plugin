import './frontend.scss';

// Add a click event listener to each expandable block.
// When the button is clicked, toggle the is-expanded class on the content.
document
	.querySelectorAll( '.wp-block-wmf-reports-expandable' )
	.forEach( ( block ) => {
		const button = block.querySelector( '.expandable-expander' );
		const showmoretext = button.dataset.showmoretext;
		const showlesstext = button.dataset.showlesstext;
		const content = block.querySelector( '.expandable-content' );
		// Get the visible amount and unit from the data attributes.
		const visibleAmount = content.dataset.visibleAmount;
		const visibleUnit = content.dataset.visibleUnit;

		// Set the initial height of the content.
		content.setAttribute( 'style', `height: ${ visibleAmount + visibleUnit }` );

		button.addEventListener( 'click', () => {
			content.classList.toggle( 'is-expanded' );
			const expanded = content.classList.contains( 'is-expanded' );
console.log('expanded', expanded);
			content.setAttribute( 'aria-expanded', ! expanded );
			content.setAttribute( 'style', `height: ${ expanded ? 'auto' : visibleAmount + visibleUnit }` );
			button.innerText = expanded ? showlesstext : showlesstext;
		} );
	} );
