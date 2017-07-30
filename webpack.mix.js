const { mix } = require('laravel-mix');

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

mix.options({ processCssUrls: false });
mix.copy('node_modules/font-awesome/fonts', 'public/fonts/vendor/font-awesome');
mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/vendor/bootstrap');
mix.copy('node_modules/gmaps-marker-clusterer/images', 'public/img/vendor/gmaps-marker-clusterer');


mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/vendor.scss', 'public/css')
   .sass('resources/assets/sass/skin-red.scss', 'public/css')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles([
        'public/css/vendor.css',
        'node_modules/admin-lte/dist/css/AdminLTE.css',
        'node_modules/admin-lte/dist/css/skins/skin-blue.css',
        'public/css/skin-red.css',
        'public/css/app.css',
    ], 'public/css/all.css');
