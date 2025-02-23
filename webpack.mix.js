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
   .sass('resources/sass/app.scss', 'public/css');

mix.sass('resources/sass/welcome.scss', 'public/css');

mix.sass('resources/sass/login.scss', 'public/css');

mix.sass('resources/sass/register.scss', 'public/css');

mix.sass('resources/sass/home.scss', 'public/css');

mix.sass('resources/sass/admin/categories/index.scss', 'public/css/admin/categories');
mix.sass('resources/sass/admin/categories/create.scss', 'public/css/admin/categories');
mix.sass('resources/sass/admin/categories/show.scss', 'public/css/admin/categories');

mix.sass('resources/sass/admin/words/create.scss', 'public/css/admin/words');