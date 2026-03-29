import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/home.css',
                'resources/css/about.css',
                'resources/css/servicos.css',
                'resources/css/contact.css',
                'resources/css/mensagem.css',
                'resources/js/app.js',
                'resources/js/utilities/verificarDoc.js'
            ],
            refresh: true,
        }),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
