/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{html,js,php}'],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat', 'sans-serif'],
        serif: ['Merriweather', 'serif'],
      },
    },
  },
  plugins: [],
};
