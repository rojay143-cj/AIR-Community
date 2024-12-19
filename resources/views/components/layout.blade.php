<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <link rel="stylesheet" href="{{asset('Assets/css/style.css')}}">
    <title>@yield('title')</title>
    <style>
        ::-webkit-scrollbar {
          width: 5px;
        }

        ::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px rgb(28, 3, 31);
          border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
          background: #1C0949;
          border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
          background: #1c0949a1;
        }
        .bg-headerImage{
            background-image: url('../Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg');
        }.bg-homeSection3{
            background-image: url('../Assets/01_Home_Page/Home_Section_3/section3.png')
        }.bg-sevicesblueBackdrop{
            background-image: url('../Assets/03_Services Page/backdrop/universe.png');
        }
        .bg-Event{
            background-image: url('../Assets/01_Home_Page/Home_Section_4/Home_Section4_Img.png');
        }.bg-aboutAIRCOM{
            background-image: url('../Assets/02_About Page/About_Section  4/Section_04 - About AIR+ Community.png');
        }
        </style>
    @vite('resources/css/app.css')
</head>
<body class="body bg-headerImage bg-top bg-no-repeat bg-cover bg-fixed text-gray-300 overflow-x-hidden overflow-y-scroll scroll-smooth tracking-wide min-w-[20rem]" style="background-position-y: 20%;">
    @yield('body')

    <script src="{{asset('Assets/js/animation.js')}}"></script>
</body>
</html>
