let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

// Media-Manager
mix.js('resources/assets/vendor/MediaManager/js/media.js', 'public/assets/vendor/MediaManager/script.js')
	.sass('resources/assets/vendor/MediaManager/sass/' + process.env.MIX_MM_FRAMEWORK + '/media.scss', 'public/assets/vendor/MediaManager/style.css')
	.version();