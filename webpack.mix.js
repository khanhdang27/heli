const mix = require('laravel-mix');
require('dotenv').config();
let webpack = require('webpack')
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


mix.js('resources/js/app.js', 'public/js').sourceMaps()
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .webpackConfig(webpack => {
        return {
            plugins: [
                new webpack.EnvironmentPlugin(
                    ['MIX_VIMEO_APP_ID']
                )
            ]
        }
    });