import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/css/slick.css',
                'resources/css/slick-theme.css',
                'resources/js/app.js',
                'resources/js/textEditor.js',
                'resources/js/slickCarousel.js',
            ],
            refresh: true,
        }),
    ],
});
