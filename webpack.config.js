var path = require('path');
var webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = [
  {
    entry: './webroot/js/module/entry.js',
    output: {
      path: __dirname + '/webroot/js',
      filename: 'bundle.js'
    }
  }, 
  {
    devtool: 'source-map',
    entry: {
      style: './webroot/css/scss/style.scss'
    },
    output: {
      path: path.join(__dirname, './webroot/css'),
      filename: 'style.css'
    },
    module: {
      loaders: [
        {
          test: /\.scss$/,
          loader: ExtractTextPlugin.extract('css-loader!sass-loader')
        }
      ]
    },
    plugins: [
      new ExtractTextPlugin('style.css')
    ],
  }
]