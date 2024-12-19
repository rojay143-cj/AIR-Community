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
        },
        backgroundImage: {
            'headerImage': "url('/public/Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg')",
            'homeSection3': "url('/public/Assets/01_Home_Page/Home_Section_3/section3.png')",
            'homeSection4': "url('/public/Assets/01_Home_Page/Home_Section_4/drumming.jpg')",
            'vector': "url('/public/Assets/02_About Page/About_Section  1/vector.png')",
            'phone1': "url('/public/Assets/02_About Page/About_Section  1/Phone_burstup_top.png')",
            'phone2': "url('/public/Assets/02_About Page/About_Section  1/Phone_burstup_mid.png')",
            'phone3': "url('/public/Assets/02_About Page/About_Section  1/Phone_burstup_base.png')",
            'aboutPageWhat': "url('/public/Assets/02_About Page/About_Section  2/whoweare.png')",
            'aboutMilestones': "url('/public/Assets/02_About Page/About_Section  2/universe.png')",
            'aboutAIRCOM': "url('/public/Assets/02_About Page/About_Section  4/Section_04 - About AIR+ Community.png')",
            'sevicesblueBackdrop': "url('/public/Assets/03_Services Page/backdrop/universe.png')",
            'aboutMilestone': "url('/public/Assets/02_About Page/About_Section 3 Milestone/Milestone_BG.png')",
            'sevicesblueBackdrop1': "url('/public/Assets/03_Services Page/school_back.webp')",
            'servicesBackground': "url('/public/Assets/03_Services Page/background.png')",
        },
    },
  },
  plugins: [],
}

