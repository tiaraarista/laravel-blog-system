const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    // container:{
    //   center: true,
    //   padding: '16px',
    // },
    extend: {
      fontFamily: {
        sans: ['Poppins', ...defaultTheme.fontFamily.sans],
      },
    // screens:{
    //   '2xl':'1320px',
    // },
  },
},
  variants: {
    extend: {
      opacity: ['disabled'],
    },
  },
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
