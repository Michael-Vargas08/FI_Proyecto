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
        },
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
        }
    },

    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
        tableLayout: ['responsive', 'hover', 'focus']
    },

    plugins: [require('@tailwindcss/ui')],
};
