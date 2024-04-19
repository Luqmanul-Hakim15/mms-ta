/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors: {
        primary: "#e5245e",
        secondary: "#e398a0",
        spotSubtle: "#ffe3e8",
        greenSpot: "#5ebab1",
        black: "#404040 !important",
        background: "#F6F9FF",
        subtleGrey: "#F3F4F8",
        darkGrey: "#BFBFBF",
        grey: "#C7C9D9",
        line: "#DDE5E9",
      },
      fontFamily: {
        tahoma: ["Tahoma", "sans-serif"],
      },
    },
  },
  plugins: [],
}

