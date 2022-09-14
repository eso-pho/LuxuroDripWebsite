const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Helvetica', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'navy': {
                    100: '#CFD4F6',
                    200: '#A2AAEE',
                    300: '#6B75CE',
                    400: '#3F489D',
                    500: '#13195D',
                    600: '#0D124F',
                    700: '#090D42',
                    800: '#060835',
                    900: '#03052C',
                },
                'lime': {
                    100: '#DDF8D3',
                    200: '#B7F2A9',
                    300: '#80D977',
                    400: '#4FB44E',
                    500: '#208228',
                    600: '#176F26',
                    700: '#105D24',
                    800: '#0A4B21',
                    900: '#063E1F',
                },
                'aqua': {
                    100: '#C7F8EC',
                    200: '#91F2E2',
                    300: '#57DACF',
                    400: '#2DB5B5',
                    500: '#007984',
                    600: '#005E71',
                    700: '#00475F',
                    800: '#00334C',
                    900: '#00253F',
                },
                'habanero': {
                    100: '#FAECC8',
                    200: '#F5D593',
                    300: '#E2B05B',
                    400: '#C58832',
                    500: '#A05601',
                    600: '#894300',
                    700: '#733300',
                    800: '#5C2400',
                    900: '#4C1A00',
                },
                'rosa': {
                    100: '#FAD9D3',
                    200: '#F5ADA9',
                    300: '#E1797D',
                    400: '#C45262',
                    500: '#9E2440',
                    600: '#871A3D',
                    700: '#71123A',
                    800: '#5B0B34',
                    900: '#4B0631',
                },
                'baigan': {
                    100: '#13195D',
                    200: '#13195D',
                    300: '#13195D',
                    400: '#13195D',
                    500: '#13195D',
                    600: '#13195D',
                    700: '#13195D',
                    800: '#13195D',
                    900: '#13195D',
                },
                'blooris': {
                    100: '#13195D',
                    200: '#13195D',
                    300: '#13195D',
                    400: '#13195D',
                    500: '#13195D',
                    600: '#13195D',
                    700: '#13195D',
                    800: '#13195D',
                    900: '#13195D',
                },
            }
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
