// vite.config.js
import {resolve} from "path"
import viteImagemin from "vite-plugin-imagemin"

export default () => {
    return {
        build: {
            outDir: './www/bitrix/templates/vipservice2',
            emptyOutDir: false,
            rollupOptions: {
                output: {
                    assetFileNames: 'assets/[name].[ext]',
                    chunkFileNames: 'assets/[name].js',
                    entryFileNames: 'assets/[name].js'
                },
                input: {
                    main: resolve("./", "index.html"),
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