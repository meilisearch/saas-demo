import type { Config } from 'tailwindcss'
import formsPlugin from '@tailwindcss/forms'
import plugin from 'tailwindcss/plugin'

export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.ts',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    formsPlugin,
    plugin(function ({addBase}) {
      addBase({
        '[type="search"]::-webkit-search-decoration': {display: 'none'},
        '[type="search"]::-webkit-search-cancel-button': {display: 'none'},
        '[type="search"]::-webkit-search-results-button': {display: 'none'},
        '[type="search"]::-webkit-search-results-decoration': {display: 'none'},
      })
    }),
  ],
} satisfies Config
