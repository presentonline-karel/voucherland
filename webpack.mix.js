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
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.sass('resources/scss/style.scss', 'public/css');

mix.js('resources/js/organisms/nav.js', 'public/js');

mix.js('resources/js/widgets/expire-counter.js', 'public/js');
mix.js('resources/js/widgets/counter-up-animation.js', 'public/js');
mix.js('resources/js/widgets/search-function.js', 'public/js');

mix.js('resources/js/structures/tabbar.js', 'public/js');
mix.js('resources/js/structures/accordion.js', 'public/js');

mix.js('resources/js/features/fixed-length-string.js', 'public/js');
mix.js('resources/js/features/selected-items.js', 'public/js');
mix.js('resources/js/features/disabled-buttons.js', 'public/js');
mix.js('resources/js/features/admin-percentages.js', 'public/js');
mix.js('resources/js/features/form-feedback.js', 'public/js');

mix.js('resources/js/modals/cookies.js', 'public/js');
mix.js('resources/js/modals/modal.js', 'public/js');



mix.browserSync('http://127.0.0.1:8000');
