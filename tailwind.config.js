module.exports = {
  mode: "jit",
  purge: [
    "./public/**/*.html",
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      backgroundImage: theme => ({
        'back-img': "url('img/bg-img.jpeg')",
        'mainlanche-img':"url('img/mainlanche.jpg')"
      }),
      spacing: {
        '82': '22rem'
      },
      maxWidth: {
        'maxa': '91rem'
      },
      fontSize: {
        'nom': '15px'
      },
      lineHeight: {
        'loosing': '3'
      },
      colors: {
        'whitesmoke': 'rgb(245, 239, 239)',
        'blue-25' : 'rgb(218, 231, 236)'
      },
      fontFamily: {
        'nunito': 'Nunito'
      },
      lineHeight: {
        '12': '10rem'
      },
      animation: {
        'blob': 'blob 4s infinite'
      },
      keyframes: {
        'blob': {
          '0%': {
            'transform': 'translateY(0px) scale(1)',
          },
          '40%': {
            'transform': 'translateY(-50px) scale(1.2)',
          },
          '100%': {
            'transform': 'translateY(0px) scale(1)',
          }
        }
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
