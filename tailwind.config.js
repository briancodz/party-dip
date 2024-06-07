/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        customBlue: '#E0E7FF',
        customBlack: '#0F172A',
        customWhite: '#F5F5F5',
      },

      fontFamily:{
        modak:['Modak', 'system-ui'],
        dmsans:['DM Sans', 'sans-serif'],
      },

      fontSize:{
        'dmsans-small': '12px',
        'dmsans-lsmall': '14px',
        'dmsans-medium': '16px',
        'dmsans-large': '24px',
        'modak-large': '48px',

      },

      borderRadius:{
        'custom':'19px',
        'review':'30px',
      }
    },
  },
  variants: {},

  plugins: [],
}