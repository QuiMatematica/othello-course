const path = require('path');
const {CleanWebpackPlugin} = require('clean-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const GeneratePagesPlugin = require('./GeneratePagesPlugin')
const GenerateSitemapPlugin = require('./GenerateSitemapPlugin');
const GenerateIndexPlugin = require('./GenerateIndexPlugin');

module.exports = {
    entry: './src/js/othello.js',
    output: {
        filename: 'js/tao.js',
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
    ],
    mode: 'production'
};