const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
mix.copyDirectory('resources/vendor/animate/animate.compat.css', 'public/vendor/animate/animate.compat.css');

mix.copyDirectory('resources/css/theme.css', 'public/css/theme.css');
mix.copyDirectory('resources/css/skins/default.css', 'public/css/skins/default.css');
mix.copyDirectory('resources/css/custom.css', 'public/css/custom.css');
mix.copyDirectory('resources/vendor/font-awesome', 'public/vendor/font-awesome');
mix.copyDirectory('resources/vendor/boxicons', 'public/vendor/boxicons');
mix.copyDirectory('resources/vendor/magnific-popup/magnific-popup.css', 'public/vendor/magnific-popup/magnific-popup.css');
mix.copyDirectory('resources/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css', 'public/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css');
mix.scripts([
    'resources/vendor/jquery-browser-mobile/jquery.browser.mobile.js',
    'resources/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js',
    'resources/vendor/common/common.js',
    'resources/vendor/nanoscroller/nanoscroller.js',
    'resources/vendor/magnific-popup/jquery.magnific-popup.js',
    'resources/vendor/jquery-placeholder/jquery.placeholder.js',
    'resources/vendor/modernizr/modernizr.js',
], 'public/js/vendor.min.js');

mix.scripts([
    'resources/js/theme.js',
    'resources/js/custom.js',
    'resources/js/theme.init.js',
], 'public/js/theme.min.js');

