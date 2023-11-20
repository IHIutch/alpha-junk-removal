/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme')
const { addDynamicIconSelectors } = require('@iconify/tailwind');


module.exports = {
  content: [
    "./views/**/*.twig",
  ],
  theme: {
    extend: {
      fontFamily: {
        "old-standard": ["Old Standard TT", ...defaultTheme.fontFamily.serif],
        "lato": ["Lato", ...defaultTheme.fontFamily.sans]
      }
    },
  },
  plugins: [
    addDynamicIconSelectors(),
    addDynamicIconSelectors({
      prefix: 'icon-image',
      overrideOnly: true
    }),
  ],
}

