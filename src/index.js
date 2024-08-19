import { registerBlockType } from '@wordpress/blocks';
import Save from './save.js';
import Edit from './edit.js';

import './style.scss';

registerBlockType( 'wpsite/myblock', {
	edit: Edit,
	save: Save,
} );
