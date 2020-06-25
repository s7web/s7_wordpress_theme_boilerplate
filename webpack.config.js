const path = require('path');
const glob = require('glob');
// include the js minification plugin
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

// include the css extraction and minification plugins
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");

module.exports = {
/*    entry: {
    frontend: ['./assets/js/theme/index.js', './assets/sass/app.scss'],
    admin: ['./assets/js/admin/index.js', './assets/sass/dashboard.scss'],
    app : glob.sync('./assets/js/theme/pages/**.js')
   
  },  */ 
    entry:glob.sync('./assets/js/**.js').reduce(function(obj, el){

    obj[path.parse(el).name] = el;
    return obj
 },{}),  
  output: {
 
    path: path.resolve(__dirname, 'dist'),
    filename: 'js/[name]-build.js',
  },
  module: {
    rules: [
      // perform js babelization on all .js files
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ['babel-preset-env']
         }
        }
      },
      // compile all .scss files to plain old css
      {
        test: /\.(sass|scss)$/,
        use: [MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader']
      }
    ]
  },
  plugins: [
    // extract css into dedicated file
    new MiniCssExtractPlugin({
      filename: '/css/[name].min.css'
    })
  ],
  optimization: {
    minimizer: [
      // enable the js minification plugin
      new UglifyJSPlugin({
        cache: true,
        parallel: true
      }),
      // enable the css minification plugin
      new OptimizeCSSAssetsPlugin({
        
      })
    ]
  }
};