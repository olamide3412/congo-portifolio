/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
    ],
    theme: {
      extend: {
          colors:{
              "black": "#060606",
              primary: '#0537a8',
              secondary: {
              100: '#7ca0f2',
              200: '#5084fa',
              300: '#1c54d4',
              400: '#0334a3',
              500: '#0a2970',
              600: '#031e57',
              700: '#02143b',
              },
              table:'#cfd1cd',
          },
          fontFamily:{
              "hanken-grotesk":["Hanken Grotesk", "sans-serif"]
          },
          fontSize:{
              "2xs": ".625rem"//10px
          },
      },
    },
    plugins: [
        function ({ addUtilities }) {
            const newUtilities = {
              '.text-stroke': {
                '-webkit-text-stroke': '2px white',
                'color': '#0a2970',
                'font-family' : ['Lora','serif'],

              },
            }
            addUtilities(newUtilities)
          },
    ],
  }

