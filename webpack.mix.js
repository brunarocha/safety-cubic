const mix = require('laravel-mix');

var paths = {
    core: {
        dev : 'resources/assets/core',
        dist: 'public/core'
    },
    creative: {
        dev : 'resources/assets/themes/startbootstrap-creative',
        dist: 'public/themes/startbootstrap-creative'
    },
    stisla: {
        dev : 'resources/assets/themes/stisla/dist/assets',
        dist: 'public/themes/stisla'
    },
    reveal: {
        dev : 'resources/assets/themes/reveal',
        dist: 'public/themes/reveal'
    }
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

/* Theme Creative Scripts */
/*mix.js([paths.themes.creative.dev+'/vendor/bootstrap/js/bootstrap.bundle.min.js'], paths.themes.creative.dist+'/js/bootstrap.bundle.min.js')
   .js([paths.themes.creative.dev+'/vendor/bootstrap/js/bootstrap.min.js'], paths.themes.creative.dist+'/js/bootstrap.min.js')
   .js([paths.themes.creative.dev+'/vendor/jquery-easing/jquery.easing.min.js'], paths.themes.creative.dist+'/js/jquery.easing.min.js')
   .js([paths.themes.creative.dev+'/vendor/magnific-popup/jquery.magnific-popup.min.js'], paths.themes.creative.dist+'/js/jquery.magnific-popup.min.js')
   .js([paths.themes.creative.dev+'/vendor/jquery/jquery.min.js'], paths.themes.creative.dist+'/js/jquery.min.js')
   .js([paths.themes.creative.dev+'/js/creative.min.js'], paths.themes.creative.dist+'/js/creative.min.js');*/

/* Theme Creative Styles */
/*mix.styles([paths.themes.creative.dev+'/css/creative.min.css'], paths.themes.creative.dist+'/css/creative.min.css')
   .styles([paths.themes.creative.dev+'/vendor/magnific-popup/magnific-popup.css'], paths.themes.creative.dist+'/css/magnific-popup.css');*/

/* Theme Creative Fonts */
/*mix.styles([paths.themes.creative.dev+'/vendor/fontawesome-free/css/!*.css'], paths.themes.creative.dist+'/css/fontawesome.min.css');
mix.copyDirectory(paths.themes.creative.dev+'/vendor/fontawesome-free/webfonts/', paths.themes.creative.dist+'/webfonts/');
mix.copyDirectory(paths.themes.creative.dev+'/img', paths.themes.creative.dist+'/img/');*/

/*
* Core
* */

// Images
mix.copyDirectory(paths.core.dev+'/img', paths.core.dist+'/img');

/*
* Theme Stisla
* */

// Styles
mix.styles([
    paths.stisla.dev+'/css/style.css',
    paths.stisla.dev+'/css/custom.css',
    paths.stisla.dev+'/css/components.css',
    paths.stisla.dev+'/css/skins/reverse.css',
], paths.stisla.dist+'/css/stisla.css');

// Fonts
mix.copyDirectory(paths.stisla.dev+'/fonts', paths.stisla.dist+'/fonts');

// Images
mix.copyDirectory(paths.stisla.dev+'/img', paths.stisla.dist+'/img');

// Scripts
mix.js([
    paths.stisla.dev+'/js/custom.js',
    paths.stisla.dev+'/js/scripts.js'
], paths.stisla.dist+'/js/template.js');

mix.js([paths.stisla.dev+'/js/stisla.js'], paths.stisla.dist+'/js/stisla.js');

mix.copyDirectory(paths.stisla.dev+'/modules', paths.stisla.dist+'/modules');
mix.copyDirectory(paths.stisla.dev+'/js/page', paths.stisla.dist+'/js/page');



/*
* Theme Reveal
* */

// Styles
mix.styles([paths.reveal.dev+'/css/style.css'], paths.reveal.dist+'/css/style.css');
mix.styles([paths.reveal.dev+'/css/fonts.css'], paths.reveal.dist+'/css/fonts.css');

// Scripts
mix.js([paths.reveal.dev+'/js/main.js'], paths.reveal.dist+'/js/main.js');
mix.js([paths.reveal.dev+'/contactform/contactform.js'], paths.reveal.dist+'/js/contactform.js');

// Images
mix.copyDirectory(paths.reveal.dev+'/img', paths.reveal.dist+'/img');

// Libs
mix.copyDirectory(paths.reveal.dev+'/lib', paths.reveal.dist+'/lib');