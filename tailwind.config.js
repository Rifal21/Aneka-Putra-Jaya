/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#724797",
                secondary: "#A509AB",
                hov: "#A21CAF",
            },
        },
    },
    plugins: [
        require("prettier-plugin-tailwindcss"),
        require("flowbite/plugin"),
    ],
};
