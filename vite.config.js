// vite.config.js
import {resolve} from "path"
import viteImagemin from "vite-plugin-imagemin"
import {defineConfig} from "vite";
export default () => {
    return {
        build: {
            outDir: './bitrix/templates/vipservice2',
            emptyOutDir: false,
            rollupOptions: {
                input: {
                    file1: resolve("./", "index.html"),
                    //file2: resolve("./", "news.html"),
                    //file3: resolve("./", "contacts.html")
                },
            },
        },
        plugins: [
            viteImagemin({
                gifsicle: {
                    optimizationLevel: 7,
                    interlaced: false
                },
                optipng: {
                    optimizationLevel: 7
                },
                mozjpeg: {
                    quality: 20
                },
                pngquant: {
                    quality: [0.8, 0.9],
                    speed: 4
                },
                svgo: {
                    plugins: [
                        {
                            name: "removeViewBox"
                        },
                        {
                            name: "removeEmptyAttrs",
                            active: false
                        }
                    ]
                }
            })
        ]
    }
}