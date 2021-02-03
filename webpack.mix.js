
// webpack.mix.js
let mix = require('laravel-mix');

mix.js('src/js/app.js', 'js').vue({version: 2})
.sass('src/sass/app.scss', 'css')
.options({
    processCssUrls: false
})
.setPublicPath('dist');

