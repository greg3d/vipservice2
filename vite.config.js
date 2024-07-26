// vite.config.js
import {resolve} from "path"
import {rm} from 'node:fs/promises'
import {defineConfig} from "vite";

const outDir = './www/bitrix/templates/vipservice2';
const assetsDir = outDir + '/assets';

export default defineConfig({
    plugins: [{
            name: "clean assets",
            async buildStart() {
                await rm(resolve('./', assetsDir), {recursive: true, force: true});
            }
        }],
    build: {
        outDir: outDir,
        emptyOutDir: false,
        rollupOptions: {
            output: {
                assetFileNames: 'assets/[name].[hash].[ext]',
                chunkFileNames: 'assets/[name].[hash].js',
                entryFileNames: 'assets/[name].[hash].js'
            },
            input: {
                main: resolve("./", "index.html"),
            },
        },
    },
});
