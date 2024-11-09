import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        vue(),
    ],
    server: {
        host: "0.0.0.0", // Bind to all network interfaces
        port: 5173, // Vite dev server port
        https: false, // Only needed if using HTTPS on local dev
        origin: "https://drbarabia.com", // Set the correct domain
    },
});
