<header class="w-full h-full">
    <nav id="navBar"
        class="bg-gradient-to-t from-[#100d3900] via-[#070619ce] to-[#070619] h-28 z-50 relative hidden lg:flex">
        <div class="flex justify-between items-center w-full max-w-screen-lg mx-auto">
            <img src="{{ asset('Assets/Air Drumming Logo/AirDrumming_logo.svg') }}"
                class="logo w-36 h-20 object-cover object-fit" alt="Air Drumming">
            <ul
                class="flex flex-row gap-3 justify-center items-center text-nowrap flex-nowrap text-white text-[14px] md:text-[16px] lg:text-[18px] roboto font-[700]">
                <li class="pr-5"><a href="{{ route('home') }}">Home</a></li>
                <li class="pr-5"><a href="{{ route('about') }}">About</a></li>
                @if (request()->is('service'))
                    <li class="flex items-center gap-1 pr-5 relative services cursor-pointer">
                        Services
                        <span class="text-xs font-bold">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                        <div
                            class="service_sub_menu absolute top-12 bg-[#07061C] rounded-xl py-5 px-5 w-fit text-[#00eaff98] hidden">
                            <ul class="flex flex-col gap-5 text-[14px] md:text-[16px] lg:text-[18px] roboto">
                                <li class="hover:text-white cursor-pointer"><a href="#service_section-1">Schools</a>
                                </li>
                                <li class="hover:text-white cursor-pointer"><a href="#service_section-2">Corporate</a>
                                </li>
                                <li class="hover:text-white cursor-pointer"><a href="#service_section-3">AIR+
                                        Community</a></li>
                                <li class="hover:text-white cursor-pointer"><a href="#service_section-4">Events</a></li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="flex items-center gap-1 pr-5 services">
                        <a href="{{ route('service') }}">Services
                            <span class="text-xs font-bold">
                                <i class="fa-solid fa-chevron-down"></i>
                            </span>
                        </a>
                    </li>
                @endif
                <li class="pr-5"><a href="{{ route('collaboration') }}">Collaboration</a></li>
                <li class="text-wrap pr-5"><a href="{{ route('community') }}">AIR+ Community</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </nav>
    <div id="burgerNav"
        class="block lg:hidden h-24 w-full relative bg-gradient-to-b from-[#07061C] to-[#100D39] backdrop-blur-md z-50">
        <div class="flex w-full h-full justify-between px-5 items-center">
            <div class="pl-5">
                <img src="{{ asset('Assets/Air Drumming Logo/AirDrumming_logo.svg') }}"
                    class="logo w-16 h-11 object-cover object-fit" alt="Air Drumming">
            </div>
            <div id="btn_burger" class="px-10 text-xl cursor-pointer">
                <span><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>
        <div id="menu_burger" class="absolute top-20 right-5 bg-[#07061C] rounded-xl py-5 px-5 w-fit hidden">
            <ul
                class="flex flex-col items-center text-sm gap-5 text-[#00eaff98] font-bold text-left text-[14px] md:text-[16px] lg:text-[18px] roboto">
                <li class="w-full hover:text-white mt-2"><a href="{{ route('home') }}">Home</a></li>
                <li class="w-full hover:text-white mt-2"><a href="{{ route('about') }}">About</a></li>
                @if (request()->is('service'))
                    <li class="w-full hover:text-white mt-2 services2 relative cursor-pointer">Services <span><i
                                class="fa-solid fa-angle-down"></i></span>
                        <div
                            class="service_sub_menu2 absolute -left-[11rem] top-0 z-50 bg-[#07061C] rounded-xl py-5 px-5 w-fit text-[#00eaff98] hidden">
                            <ul class="flex flex-col gap-5 text-sm roboto">
                                <li class="hover:text-white cursor-pointer"><a href="#service_section-1">Schools</a>
                                </li>
                                <li class="hover:text-white cursor-pointer"><a href="#service_section-2">Corporate</a>
                                </li>
                                <li class="hover:text-white cursor-pointer"><a href="#service_section-3">AIR+
                                        Community</a></li>
                                <li class="hover:text-white cursor-pointer"><a href="#service_section-4">Events</a></li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="w-full hover:text-white mt-2 services"><a href="{{ route('service') }}">Services
                            <span><i class="fa-solid fa-angle-down"></i></span></a></li>
                @endif
                <li class="w-full hover:text-white mt-2"><a href="{{ route('collaboration') }}">Collaboration</a></li>
                <li class="w-full hover:text-white mt-2"><a href="{{ route('community') }}">AIR+ Community</a></li>
                <li class="w-full hover:text-white mt-2"><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</header>
