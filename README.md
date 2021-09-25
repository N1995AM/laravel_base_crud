# BASE CRUD Laravel

# Using Tailwindcss with Laravel

## install tailwindcss via npm
npm install -D tailwindcss@latest postcss@latest autoprefixer@latest

## Create your configuration file
npx tailwindcss init

## Configure Tailwind to remove unused styles in production
  module.exports = {
-  purge: [],
+   purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
    darkMode: false, // or 'media' or 'class'
    theme: {
      extend: {},
    },
    variants: {
      extend: {},
    },
    plugins: [],
  }

## Configure Tailwind with Laravel Mix
In your webpack.mix.js, add tailwindcss as a PostCSS plugin:

 // webpack.mix.js
  mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
     require("tailwindcss"),
    ]);

## Include Tailwind in your CSS
/* ./resources/css/app.css */
@tailwind base;
@tailwind components;
@tailwind utilities;

## Insert app.css to your header


