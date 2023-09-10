/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",],
  theme: {
    colors: {
      choco:"#4C3431",
      almond:"#9B5231",
      caramel:"#B58449",
      lightcaramel:"#C9985D",
      greymon: "#8D8D8D",
      white:"#fff"
    },
    mytheme: {
      "primary": "#4C3431",     
      "secondary": "#1d232a",    
      "accent": "#1d232a",  
      "neutral": "#1d232a",  
      "base-100": "#1d232a",  
      "info": "#1d232a",   
      "success": "#1d232a",  
      "warning": "#1d232a",       
      "error": "#1d232a",
    },
    extend: {
      backgroundImage:{
        "hero-lg" : "url(../../image/background_jurnal_login.png)",
        "hero-rgs" : "url(../../image/background_jurnal_regis.png)"
      },
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: false, // true: all themes | false: only light + dark | array: specific themes like this ["light", "dark", "cupcake"]
    darkTheme: "dark", // name of one of the included themes for dark mode
    base: false, // applies background color and foreground color for root element by default
    styled: true, // include daisyUI colors and design decisions for all components
    utils: true, // adds responsive and modifier utility classes
    rtl: false, // rotate style direction from left-to-right to right-to-left. You also need to add dir="rtl" to your html tag and install `tailwindcss-flip` plugin for Tailwind CSS.
    prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
    logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
  },
}

