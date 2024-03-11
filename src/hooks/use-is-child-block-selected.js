import { store as blockEditorStore } from '@wordpress/block-editor';
import { useSelect } from '@wordpress/data';
/**
 * Determine whether the selected block is within a given parent block.
 *
 * @param {string} parentBlockClientId clientId of parent block.
 */
export default function useIsChildBlockSelected( parentBlockClientId ) {
	return useSelect(
		( select ) => {
			const selectedBlockClientId =
				select( blockEditorStore ).getSelectedBlockClientId();
			const parents = select( blockEditorStore ).getBlockParents(
				selectedBlockClientId
			);
			return parents.includes( parentBlockClientId );
		},
		[ parentBlockClientId ]
	);
}
