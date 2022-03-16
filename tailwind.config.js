const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors:{
                primary: '#E20727',
                secondary: '#DC3D3A',
                'primary-gray': '#F8F9F9',
                'accent-twitter': '#29A2F0',
                'accent-instagram': '#BF3483',
                'accent-linkedin': '#1877A6',
                'accent-mail': '#E8413A',
                'accent-gitlab': '#E04130',
                'accent-github': '#161B22',
            }
        },
        fontFamily: {
            'sans': ['Raleway', 'ui-sans-serif', 'system-ui', ...defaultTheme.fontFamily.sans],
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/typography'),
    ],
    corePlugins: {
        preflight: true,
    }
}
