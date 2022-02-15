// webpack.mix.js

const mix = require("laravel-mix");

mix
    .options({
        processCssUrls: false,
    })
    .sourceMaps(true, 'source-map')
    .js('src/app.js', 'js')
    .sass('src/app.scss', 'css')
    .copyDirectory('src/sass/fonts/roboto', 'dist/css/fonts')
    .setPublicPath('dist');

