const mix = require('laravel-mix');

var paths = {
    themes: {
        creative: {
            dev : 'resources/assets/themes/startbootstrap-creative',
            dist: 'public/themes/startbootstrap-creative'
        }
    },
};

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
// npm run development -- --watch

/* Theme Creative JS */
mix.js([paths.themes.creative.dev+'/vendor/bootstrap/js/bootstrap.bundle.min.js'], paths.themes.creative.dist+'/js/bootstrap.bundle.min.js')
   .js([paths.themes.creative.dev+'/vendor/bootstrap/js/bootstrap.min.js'], paths.themes.creative.dist+'/js/bootstrap.min.js')
   .js([paths.themes.creative.dev+'/vendor/jquery-easing/jquery.easing.min.js'], paths.themes.creative.dist+'/js/jquery.easing.min.js')
   .js([paths.themes.creative.dev+'/vendor/magnific-popup/jquery.magnific-popup.min.js'], paths.themes.creative.dist+'/js/jquery.magnific-popup.min.js')
   .js([paths.themes.creative.dev+'/vendor/jquery/jquery.min.js'], paths.themes.creative.dist+'/js/jquery.min.js')
   //.js([paths.themes.creative.dev+'/js/creative.min.js'], paths.themes.creative.dist+'/js/creative.min.js');
   .js([paths.themes.creative.dev+'/js/creative.js'], paths.themes.creative.dist+'/js/creative.js');

/* Theme Creative Styles */

mix.styles([paths.themes.creative.dev+'/css/creative.min.css'], paths.themes.creative.dist+'/css/creative.min.css')
   .styles([paths.themes.creative.dev+'/vendor/magnific-popup/magnific-popup.css'], paths.themes.creative.dist+'/css/magnific-popup.css')
   //.styles([paths.themes.creative.dev+'/vendor/fontawesome-free/css/all.min.css'], paths.themes.creative.dist+'/css/fontawesome.min.css')

mix.styles([paths.themes.creative.dev+'/vendor/fontawesome-free/css/*.css'], paths.themes.creative.dist+'/css/fontawesome.min.css')


mix.styles([paths.themes.creative.dev+'/webfonts/fa-solid-900.woff2'], paths.themes.creative.dist+'/webfonts/fa-solid-900.woff2')
    .styles([paths.themes.creative.dev+'/webfonts/fa-solid-900.ttf'], paths.themes.creative.dist+'/webfonts/fa-solid-900.ttf');




