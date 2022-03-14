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

mix
  .js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('autoprefixer'),
  ])
	.sass('resources/scss/app.scss', 'public/css')
  .copyDirectory('resources/img', 'public/img')
  .browserSync({
    proxy: 'ms-laravel-clone.test',
    files: ["resources/scss/*.scss", "resources/js/*.js", "resources/views/**/*.php"]
  });

if (mix.inProduction()) {
  mix
    .version();
}
