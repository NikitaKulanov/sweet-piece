import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'storage/product/tMDXUZzOKEaxXPceMjyurLScL610iLR8aTfFJKnV.jpg'],
            refresh: true,
        }),
    ],
});
