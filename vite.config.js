import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),

    ],
    server: {
        host: process.env.VITE_API_URL,
        port: 5173,
        strictPort: true,
        hmr: {
            host: process.env.VITE_API_URL,
        },
        cors: true,
    },
});
