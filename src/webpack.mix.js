const mix = require('laravel-mix');
require('laravel-mix-tailwind'); // 追加

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .tailwind(); // 追加
