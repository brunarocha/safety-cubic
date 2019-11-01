const mix = require('laravel-mix');

var paths = {
    core: {
        dev : 'resources/assets/core',
        dist: 'public/core'
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