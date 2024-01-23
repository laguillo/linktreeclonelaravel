import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js",

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    safelist: [
        'bg-red-500',
        'bg-blue-400',
        'bg-gradient-to-r from-purple-600 to-orange-500',
        'bg-blue-800',
        'bg-green-800',
        'bg-purple-600',
        'bg-blue-700',
        'bg-gray-700',
        'bg-black',


      ],

    plugins: [forms,'flowbite/plugin'],
};
