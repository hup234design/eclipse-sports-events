/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/hup234design/filament-cms/**/*.php",
        "./vendor/filament/support/**/*.blade.php",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '2rem',
                sm: '3rem',
                lg: '4rem',
                xl: '6rem',
            },
        },
        extend: {
            colors: {
                eclipse: {
                    primary: '#DF5F1B',
                    secondary: '#E9930D',
                    blue: '#202E42',
                    yellow: '#F3C600',
                }
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
}
