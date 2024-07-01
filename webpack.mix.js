const mix = require('laravel-mix');

// Compile Tailwind CSS
mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
]);

// Compile JavaScript
mix.js('resources/js/app.js', 'public/js');

// Enable source maps in development
if (!mix.inProduction()) {
    mix.sourceMaps();
}

// Versioning for cache busting
mix.version();
