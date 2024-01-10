/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  daisyui: {
    themes: [
      {
        mytheme: {

          "primary": "#189637",

          "secondary": "#d4b421",

          "accent": "#eab308",

          "neutral": "#fff291",

          "base-100": "#FFFFFF",

          "info": "#94ACF0",

          "success": "#4d7c0f",

          "warning": "#eab308",

          "error": "#e11d48",
        },
      },
    ],
  },
  plugins: [
    require("daisyui"),
    require('@tailwindcss/line-clamp'),
  ],
 
}
