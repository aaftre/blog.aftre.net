module.exports = {
    purge: [
        './resources/views/**/*.php',
        './resources/views/**/*.html',
        './resources/assets/js/**/*.vue',
        './resources/content/**/*.html'
    ],
    darkMode: false,
    theme: {
        extend: {
            fontSize: {
                '2xs': '0.625rem', // Add a smaller text size
                '3xs': '0.5rem',   // Add an even smaller text size
                '4xs': '0.25rem',   // Add an even smaller text size
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}