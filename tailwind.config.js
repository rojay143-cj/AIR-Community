/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
        screens: {
            'desktop': '1280px',
            'tablet': '1025px',
            'mobile': '640px',
            '320px': '320px',
        },
        backgroundImage: {
            'body': "url('/public/Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg')",
            'header': "url('/public/Assets/01_Home_Page/Home_Section_1/header.jpg')",
            'selectBG': "url('/public/Assets/01_Home_Page/Home_Section_1/selectBG.png')",
            'aboutPhones': "url('/public/Assets/01_Home_Page/Home_Section_1/3D_phone.png)",
            'vector': "url('/public/Assets/02_About Page/About_Section  1/vector.png')",
            'phone1': "url('/public/Assets/02_About Page/About_Section  1/Phone_burstup_top.png')",
            'phone2': "url('/public/Assets/02_About Page/About_Section  1/Phone_burstup_mid.png')",
            'phone3': "url('/public/Assets/02_About Page/About_Section  1/Phone_burstup_base.png')",
            'angel1': "url('/public/Assets/01_Home_Page/Home_Section_1/Phone_Angle1_01.png')",
            'angel2': "url('/public/Assets/01_Home_Page/Home_Section_1/Phone_Angle1_02.png')",
            'angel3': "url('/public/Assets/01_Home_Page/Home_Section_1/Phone_Angle1_03.png')",
            'angel4': "url('/public/Assets/01_Home_Page/Home_Section_1/Phone_Angle1_04.png')",
        },
    },
  },
  plugins: [],
}

