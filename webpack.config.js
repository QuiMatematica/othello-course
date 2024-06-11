const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
    entry: './src/js/othello.js',
    output: {
        filename: 'js/tao.js',
        path: path.resolve(__dirname, 'dist')
    },
    plugins: [
        new CleanWebpackPlugin(),
        new CopyWebpackPlugin({
            patterns: [
                { from: 'src/web', to: '.' }, // Copia tutto il contenuto di src/web in dist
            ],
        }),
    ],
    mode: 'production'
};