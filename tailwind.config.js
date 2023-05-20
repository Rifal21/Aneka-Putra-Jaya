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
                primary: "#274C5B",
                secondary: "#3C5D6B",
                hov: "#365360",
                bg: "#7CC94C",
            },
        },
    },
    plugins: [
        require("prettier-plugin-tailwindcss"),
        require("flowbite/plugin"),
    ],
};
