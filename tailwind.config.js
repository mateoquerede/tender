import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', ...defaultTheme.fontFamily.sans],
                logo: ['Chillax', 'sans-serif']
            },
            width: {
                '9/20': '45%',
            },
            backgroundColor: {
                'fake-transparent': '#343A66'
            }
        },
    },
  plugins: [],
}
