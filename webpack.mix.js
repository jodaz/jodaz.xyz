const mix = require('laravel-mix');
require('laravel-mix-imagemin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/website/app.js', 'public/js/website')
  .postCss('resources/css/website/main.css', 'public/css/website')
  .copyDirectory('resources/assets/icons', 'public/assets/icons');
