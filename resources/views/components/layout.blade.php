<!DOCTYPE html>
<html lang="en" class="bg-body bg-no-repeat bg-cover bg-center">
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
        </style>
    @vite('resources/css/app.css')
</head>
<body class="body bg-body bg-no-repeat text-gray-300 overflow-x-hidden overflow-y-scroll scroll-smooth tracking-wide min-w-[20rem] w-full h-full max-w-[2000px] mx-auto bg-[center_-15%] md:bg-[center_-30%]">
    @yield('body')

    <script src="{{asset('Assets/js/animation.js')}}"></script>
</body>
</html>
