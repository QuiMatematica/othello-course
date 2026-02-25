import path from 'path';
import {CleanWebpackPlugin} from 'clean-webpack-plugin';
import CopyWebpackPlugin from 'copy-webpack-plugin';
import GeneratePagesPlugin from './GeneratePagesPlugin.js';
import GenerateSitemapPlugin from './GenerateSitemapPlugin.js';
import GenerateIndexPlugin from './GenerateIndexPlugin.js';
import {WebpackManifestPlugin} from "webpack-manifest-plugin";
import {fileURLToPath} from "url";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

export default {

    entry: './src/js/othello.js',

    output: {
        filename: 'js/tao.[contenthash].js',
        path: path.resolve(__dirname, 'dist')
    },

    module: {
        rules: [
            {
                test: /\.css$/i,
                use: [
                    'style-loader',
                    'css-loader'
                ],
            },
        ],
    },

    plugins: [
        new CleanWebpackPlugin(),
        new CopyWebpackPlugin({
            patterns: [
                { from: 'src/web', to: '.' }, // Copia tutto il contenuto di src/web in dist
                { from: "node_modules/bootstrap-icons/font", to: "assets/bootstrap-icons" },
            ],
        }),
        new GeneratePagesPlugin({
            inputDir: path.resolve(__dirname, 'src/pages'),
            outputDir: path.resolve(__dirname, 'dist'),
        }),
        new GenerateSitemapPlugin({
            inputPath: path.resolve(__dirname, 'src/web/index.json'), // Percorso del file JSON di input
            outputPath: path.resolve(__dirname, 'dist/sitemap.xml'), // Percorso del file di output
        }),
        new GenerateIndexPlugin(),
        new WebpackManifestPlugin({
            fileName: 'assets.php',   // 👈 generiamo un PHP
            publicPath: null,          // 👈 IMPORTANTISSIMO
            serialize: manifest => manifest,  // 👈 evita JSON.stringify

            generate(seed, files) {
                const manifest = files.reduce((acc, file) => {
                    // prendiamo solo i bundle iniziali JS
                    if (file.isInitial && file.path.endsWith('.js')) {
                        acc[file.name] = file.path;
                    }
                    return acc;
                }, {});

                // convertiamo in sintassi PHP
                const phpArray = Object.entries(manifest)
                    .map(([key, value]) => `    '${key}' => '${value}',`)
                    .join('\n');

                return `<?php return [${phpArray}];`;
            }
        })
    ],

    mode: 'production'

};