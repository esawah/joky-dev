/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:{
      'sans':['Poppins', 'sans-serif'],
    },
    extend: {},
  },
  plugins: [],
}

