/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      balsamiq: ["Balsamiq Sans", "cursive"],
      adelia: ["ADELIA", "cursive"],
      },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}