require('./bootstrap');

console.log("READY");

import FroalaEditor from 'froala-editor'
import 'froala-editor/js/plugins/align.min.js'

// Initialize editor.
let init = new FroalaEditor('#post-description')

console.log(init);


console.log("END");
