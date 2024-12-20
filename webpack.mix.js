const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
    .sass('resources/sass/app.scss', 'public/css')
    .js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps()
    .options ({
        processCssUrls: false
    });

