import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
        content: [
                "./*.html",
                './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
                './storage/framework/views/*.php',
                './resources/**/*.blade.php',
                './resources/**/*.js',
                './resources/**/*.vue',
            ],
        theme: {
            extend: {

                colors: {
                  colors: {
                    deeplywell: "#404c68",
                  },

                },
                fontFamily: {

                },
            },
        },
        plugins: [],
};
