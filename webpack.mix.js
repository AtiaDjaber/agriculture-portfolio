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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/easing.js', 'public/js')
    .js('resources/js/lsb.min.js', 'public/js')
    .js('resources/js/move-top.js', 'public/js')
    .js('resources/js/mislider.js', 'public/js')
    // .js('resources/js/jquery-2.1.4.min', 'public/js')
    .js('resources/js/jquery.flexslider.js', 'public/js')
    .js('resources/js/jquery.textFx.js', 'public/js')
    .js('resources/js/jquery.transit.js', 'public/js')
    .js('resources/js/jquery.waypoints.min.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    ]).postCss('resources/css/style.css', 'public/css', [
    ])
    .postCss('resources/css/flexslider.css', 'public/css', [
    ])
    .postCss('resources/css/lsb.css', 'public/css', [
    ])
    .postCss('resources/dashboard/css/soft-ui-dashboard.css', 'public/css', [
    ])
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/fonts', 'public/fonts')
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/webfonts'
    );
