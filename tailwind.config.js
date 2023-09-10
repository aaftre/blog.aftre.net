module.exports = {
    content: [
        './resources/views/**/*.php',
        './resources/views/**/*.html',
        './resources/assets/js/**/*.vue',
        './resources/content/**/*.html'
    ],
    theme: {
        fontSize: {
            '2xl': ['32px', {
                lineHeight: '39px',
                letterSpacing: '-0.01em',
                fontWeight: '800',
            }],
            '3xl': ['1.875rem', {
                lineHeight: '2.25rem',
                letterSpacing: '-0.02em',
                fontWeight: '700',
            }],
        },
        fontFamily: {
            'sans': ['ui-sans-serif', 'system-ui'],
            'serif': ['ui-serif', 'Georgia'],
            'mono': ['ui-monospace', 'SFMono-Regular'],
            'display': ['Oswald'],
            'body': ['"Open Sans"']
        },
        extend: {
            fontSize: {
                '2xs': '0.625rem', // Add a smaller text size
                '3xs': '14px',   // Add an even smaller text size
                '4xs': '0.25rem',   // Add an even smaller text size
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}