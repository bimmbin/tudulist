const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                'pop': ['"poppins"'],
            },

            colors: {
                lesle: '#121212',
                orangee: '#F15A24',
                grey: '#2F2F2F',
                lOrangee: '#211713',
              },

            content: {
                'check': 'url("/img/check.png")',
            },

        },
    },

    plugins: [require('@tailwindcss/forms')],
};
