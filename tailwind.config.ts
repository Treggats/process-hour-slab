import type {Config} from 'tailwindcss'

export default {
    content: [
        "./app/**/*.php",
        "./resources/**/*.{view.php,html,ts}"
    ],
    theme: {
        extend: {},
    },
    mode: 'jit',
    plugins: [],
} satisfies Config
