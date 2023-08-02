// const colors = require('tailwindcss/colors')
import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        './vendor/filament/**/*.blade.php',

    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },
    plugins: [
        // require('@tailwindcss/forms'),
        // require('@tailwindcss/typography'),
        forms,
        typography,
    ],
}
