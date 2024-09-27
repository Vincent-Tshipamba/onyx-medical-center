import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

export default {
  content: [
    "./public/**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
  darkMode: "media"
}
