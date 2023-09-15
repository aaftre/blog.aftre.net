module.exports = {
    content: [
        './resources/views/**/*.php',
        './resources/views/**/*.html',
        './resources/assets/js/**/*.vue',
        './resources/content/**/*.html'
    ],
    theme: {
        fontSize: {
            'sm': ['14px', {
                lineHeight: '23px',
            }],
            '2xl': ['20px', {
                lineHeight: '20px',
                letterSpacing: '-0.01em',
                fontWeight: '700',
            }],
            '3xl': ['32px', {
                lineHeight: '39px',
                letterSpacing: '-0.01em',
                fontWeight: '700',
            }],
        },
        fontFamily: {
            'sans': ['ui-sans-serif', 'system-ui'],
            'serif': ['ui-serif', 'Georgia'],
            'mono': ['"Fira Code"', 'ui-monospace', 'SFMono-Regular'],
            'display': ['Oswald'],
            'body': ['"Open Sans"']
        },
        extend: {
            fontSize: {
                'xs': '13px',
                '2xs': '12px',
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}