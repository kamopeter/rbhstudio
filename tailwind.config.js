const defaultTheme = require('tailwindcss/defaultTheme');


module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'space-gray-500': '#343d46',
                'space-gray-400': '#4f5b66',
                'space-gray-300': '#65737e',
                'space-gray-200': '#a7adba',
                'space-gray-100': '#c0c5ce',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
