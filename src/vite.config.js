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
        host: "0.0.0.0", // precisa disso dentro do container
        port: 5173,
        strictPort: true,
        hmr: {
            host: "191.252.214.80",
            port: 5173
        }
    }
});
