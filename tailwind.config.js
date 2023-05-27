/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./assets/**/*.js",
        "./templates/**/*.html.twig",
    ],
    theme: {
        container: {
            center: true,
            padding: "1rem",
        },
        fontFamily: {
            'poppins': ['"Poppins"', 'sans-serif'],
            'abril': ['"Abril Fatface"', 'cursive'],
        },
        fontWeight: {
            light: '300',
            normal: '400',
            medium: '500',
            semibold: '600',
            bold: '700',
        },
        colors: {
            current: "currentColor",
            transparent: "transparent",
            white: "#FFFFFF",
            black: "#090E34",
            dark: "#1D2144",
            primary: "#4A6CF7",
            yellow: "#FBB040",
            sky: {"50":"#f0f9ff", "100":"#e0f2fe", "200":"#bae6fd", "300":"#7dd3fc", "400":"", "500":"", "600":"", "700":"", "800":"", "900":"",},
            gray: {"50":"#f9fafb", "100":"#f3f4f6s", "200":"#e5e7eb", "300":"#d1d5db", "400":"#9ca3af", "500":"#6b7280", "600":"#4b5563", "700":"#374151", "800":"#1f2937", "900":"#111827",},
            // custom_color_name: {"50":"", "100":"", "200":"", "300":"", "400":"", "500":"", "600":"", "700":"", "800":"", "900":"",},
            "body-color": "#959CB1",
            green: "#059669",
            "primary-blue": {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a"}
        },
        screens: {
            xs: "450px",
            // => @media (min-width: 450px) { ... }
      
            sm: "575px",
            // => @media (min-width: 576px) { ... }
      
            md: "768px",
            // => @media (min-width: 768px) { ... }
      
            lg: "992px",
            // => @media (min-width: 992px) { ... }
      
            xl: "1200px",
            // => @media (min-width: 1200px) { ... }
      
            "2xl": "1400px",
            // => @media (min-width: 1400px) { ... }
        },
        extend: {
            boxShadow: {
                signUp: "0px 5px 10px rgba(4, 10, 34, 0.2)",
                one: "0px 2px 3px rgba(7, 7, 77, 0.05)",
                sticky: "inset 0 -1px 0 0 rgba(0, 0, 0, 0.1)",
            },
            colors: {
                blue: {"50":"#ecf0fe", "100":"#dae1fd", "200":"#c8d2fc", "300":"#b6c4fb", "400":"#a4b5fb", "500":"#92a6fa", "600":"#8098f9", "700":"#6e89f8", "800":"#5c7af7", "900":"#4a6cf7",},
                red: {"50":"#ffe5e5", "100":"#ffcccc", "200":"#ffb2b2", "300":"#ff9999", "400":"#ff7f7f", "500":"#ff6666", "600":"#ff4c4c", "700":"#ff3232", "800":"#ff1919", "900":"#ff0000",},
            }
        },
    },
    plugins: [],
}