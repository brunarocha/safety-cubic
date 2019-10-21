const mix = require('laravel-mix');

var paths = {
    themes: {
        creative: {
            dev : 'resources/assets/themes/startbootstrap-creative',
            dist: 'public/themes/startbootstrap-creative'
        },
        stisla: {
            dev : 'resources/assets/themes/stisla/dist/assets',
            dist: 'public/themes/stisla',
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

/* Theme Creative Scripts */
mix.js([paths.themes.creative.dev+'/vendor/bootstrap/js/bootstrap.bundle.min.js'], paths.themes.creative.dist+'/js/bootstrap.bundle.min.js')
   .js([paths.themes.creative.dev+'/vendor/bootstrap/js/bootstrap.min.js'], paths.themes.creative.dist+'/js/bootstrap.min.js')
   .js([paths.themes.creative.dev+'/vendor/jquery-easing/jquery.easing.min.js'], paths.themes.creative.dist+'/js/jquery.easing.min.js')
   .js([paths.themes.creative.dev+'/vendor/magnific-popup/jquery.magnific-popup.min.js'], paths.themes.creative.dist+'/js/jquery.magnific-popup.min.js')
   .js([paths.themes.creative.dev+'/vendor/jquery/jquery.min.js'], paths.themes.creative.dist+'/js/jquery.min.js')
   .js([paths.themes.creative.dev+'/js/creative.min.js'], paths.themes.creative.dist+'/js/creative.min.js');

/* Theme Creative Styles */
mix.styles([paths.themes.creative.dev+'/css/creative.min.css'], paths.themes.creative.dist+'/css/creative.min.css')
   .styles([paths.themes.creative.dev+'/vendor/magnific-popup/magnific-popup.css'], paths.themes.creative.dist+'/css/magnific-popup.css');

/* Theme Creative Fonts */
mix.styles([paths.themes.creative.dev+'/vendor/fontawesome-free/css/*.css'], paths.themes.creative.dist+'/css/fontawesome.min.css');
mix.copyDirectory(paths.themes.creative.dev+'/vendor/fontawesome-free/webfonts/', paths.themes.creative.dist+'/webfonts/');


/*
* Theme Stisla Styles
* */
mix.styles([
    paths.themes.stisla.dev+'/css/style.css',
    paths.themes.stisla.dev+'/css/custom.css',
    paths.themes.stisla.dev+'/css/components.css',
    paths.themes.stisla.dev+'/css/skins/reverse.css',
], paths.themes.stisla.dist+'/css/stisla.css');

/*
* Theme Stisla Fonts
* */
mix.copyDirectory(paths.themes.stisla.dev+'/fonts', paths.themes.stisla.dist+'/fonts');

/*
* Theme Stisla Images
* */
mix.copyDirectory(paths.themes.stisla.dev+'/img', paths.themes.stisla.dist+'/img');

/*
* Theme Stisla Scripts
* */
mix.js([
    paths.themes.stisla.dev+'/js/custom.js',
    paths.themes.stisla.dev+'/js/scripts.js',
], paths.themes.stisla.dist+'/js/template.js');

mix.js([paths.themes.stisla.dev+'/js/stisla.js'], paths.themes.stisla.dist+'/js/stisla.js');
//mix.js([paths.themes.stisla.dev+'/js/page'], paths.themes.stisla.dist+'/js/page.js');
mix.copyDirectory(paths.themes.stisla.dev+'/modules', paths.themes.stisla.dist+'/modules');
mix.copyDirectory(paths.themes.stisla.dev+'/js/page', paths.themes.stisla.dist+'/js/page');


/*
* Domains JS
* */
//mix.js([paths.themes.stisla.dev+'/js/domains/courses/list.js'], paths.themes.stisla.dist+'/js/domains/courses/list.js');