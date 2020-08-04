const mix = require('laravel-mix');

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


mix.js('resources/js/app.js', 'public/js');
    // .sass('resources/sass/app.scss', 'public/css');

mix.js('public/js/custom.js', 'public/js/all2.js');

    mix.styles([
        'public/css/grid.min.css',
        'public/css/main.css',
    ], 'public/css/all.css');

    mix.styles([
        'public/css/bootstrap.min.css',
        'public/css/main2.css',
    ], 'public/css/all2.css').version();

