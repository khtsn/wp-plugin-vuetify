const fs = require('node:fs');

let template = fs.readFileSync('./vue/App.vue.js');
let styles = fs.readFileSync('./vue/App.css');
let previewf = fs.readFileSync('./preview-template.html').toString();

let result = previewf.replace(/%TEMPLATE%/g, template);
result = result.replace(/%STYLES%/g, styles);

fs.writeFileSync('./preview.html', result)
console.log("Preview file generated")