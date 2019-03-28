let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

class TailwindExtractor {
    static extract(content) {
      return content.match(/[A-Za-z0-9-_:\/]+/g) || [];
    }
  }

  // single - default 01
mix
.stylus(
  'resource/stylus/single.styl', 
  'assets/css/style.css'
)
.options({
  postCss: [
    tailwindcss('./tailwind.js'),
  ]
})
.webpackConfig({
  module: {
    rules : [
      {
        test: /\.pug$/,
        loader: 'pug-plain-loader'
      }
  ]
  }
})
.disableNotifications()