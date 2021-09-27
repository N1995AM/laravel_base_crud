# BASE CRUD Laravel

# Using Tailwindcss with Laravel

## install tailwindcss via npm
npm install -D tailwindcss@latest postcss@latest autoprefixer@latest

## Create your configuration file
npx tailwindcss init

## Configure Tailwind to remove unused styles in production
```
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
```

## Configure Tailwind with Laravel Mix
In your webpack.mix.js, add tailwindcss as a PostCSS plugin:
```
 // webpack.mix.js
  mix.js("resources/js/app.js", "public/js")
    .postCss("resources/css/app.css", "public/css", [
     require("tailwindcss"),
    ]);
```
## Include Tailwind in your CSS
/* ./resources/css/app.css */
@tailwind base;
@tailwind components;
@tailwind utilities;

## Insert app.css to your header
```
 <!doctype html>
  <head>
    <!-- ... --->
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <!-- ... --->
```


# Laravel Factory Test 😉

## Factory Create

```
  php artisan make:factory Factoryname --model=Modelname
```

## Factory definition

database/factories/Factoryfile.php

```
    public function definition()
    {
        return [
            'name' => $this->faker->name(), 
            'description' => $this->faker->sentence(10), 
        ];
    }
```

## Run with command Prompt

```
  ModelName::factory(10)->create()
```
There are more laravel factory faker types ...



