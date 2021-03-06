module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    fontFamily:{
      'vag': 'VagRounded',
      'gator': 'Gator'
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
