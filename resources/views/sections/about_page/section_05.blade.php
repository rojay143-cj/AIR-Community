<section id="section_5" class="h-full w-full relative flex flex-col justify-center bg-[#0a0823]">
    <div class="flex justify-center items-center flex-col flex-wrap">
        <div class="text-white w-full md:w-[63%] max-w-[63%] py-10">
            <ul
                class="flex items-center justify-between roboto font-normal text-[14px] md:text-[16px] lg:text-[18px] flex-wrap gap-3">
                <li class="pr-5"><a href="{{ route('home') }}">Home</a></li>
                <li class="pr-5"><a href="{{ route('about') }}">About</a></li>
                <li class="flex items-center gap-1 pr-5"><a href="{{ route('service') }}">Services</a></li>
                <li class="pr-5"><a href="{{ route('collaboration') }}">Collaboration</a></li>
                <li class="text-wrap pr-5"><a href="{{ route('community') }}">AIR+ Community</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                <li><a href="">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center w-[63%] tablet:w-[63%] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-3 w-full">
            <div class="w-full">
                <select class="bg-white font-medium px-2 py-3 w-full md:w-80 rounded-xl text-[#1C0949]">
                    <option value="English">English</option>
                </select>
            </div>
            <div class="flex gap-3 w-full">
                <div class="w-full tablet:w-36 h-12 p-2 flex items-center bg-white rounded-xl">
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_4/google.png') }}" class=""
                        alt="">
                </div>
                <div class="w-full tablet:w-36 h-12 p-2 flex items-center bg-white rounded-xl">
                    <img src="{{ asset('Assets/01_Home_Page/Home_Section_4/apple.png') }}" class=""
                        alt="">
                </div>
            </div>
            <div class="flex items-center gap-3 text-white mx-auto">
                <span><svg width="37" height="36" viewBox="0 0 37 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.515 3.75H24.485C29.045 3.75 32.75 7.455 32.75 12.015V23.985C32.75 26.177 31.8792 28.2792 30.3292 29.8292C28.7792 31.3792 26.677 32.25 24.485 32.25H12.515C7.955 32.25 4.25 28.545 4.25 23.985V12.015C4.25 9.82299 5.12077 7.72075 6.67076 6.17076C8.22075 4.62077 10.323 3.75 12.515 3.75ZM12.23 6.6C10.8694 6.6 9.5646 7.14048 8.60254 8.10254C7.64048 9.0646 7.1 10.3694 7.1 11.73V24.27C7.1 27.1057 9.39425 29.4 12.23 29.4H24.77C26.1306 29.4 27.4354 28.8595 28.3975 27.8975C29.3595 26.9354 29.9 25.6306 29.9 24.27V11.73C29.9 8.89425 27.6057 6.6 24.77 6.6H12.23ZM25.9812 8.7375C26.4537 8.7375 26.9067 8.92517 27.2408 9.25922C27.5748 9.59327 27.7625 10.0463 27.7625 10.5187C27.7625 10.9912 27.5748 11.4442 27.2408 11.7783C26.9067 12.1123 26.4537 12.3 25.9812 12.3C25.5088 12.3 25.0558 12.1123 24.7217 11.7783C24.3877 11.4442 24.2 10.9912 24.2 10.5187C24.2 10.0463 24.3877 9.59327 24.7217 9.25922C25.0558 8.92517 25.5088 8.7375 25.9812 8.7375ZM18.5 10.875C20.3897 10.875 22.2019 11.6257 23.5381 12.9619C24.8743 14.2981 25.625 16.1103 25.625 18C25.625 19.8897 24.8743 21.7019 23.5381 23.0381C22.2019 24.3743 20.3897 25.125 18.5 25.125C16.6103 25.125 14.7981 24.3743 13.4619 23.0381C12.1257 21.7019 11.375 19.8897 11.375 18C11.375 16.1103 12.1257 14.2981 13.4619 12.9619C14.7981 11.6257 16.6103 10.875 18.5 10.875ZM18.5 13.725C17.3662 13.725 16.2788 14.1754 15.4771 14.9771C14.6754 15.7788 14.225 16.8662 14.225 18C14.225 19.1338 14.6754 20.2212 15.4771 21.0229C16.2788 21.8246 17.3662 22.275 18.5 22.275C19.6338 22.275 20.7212 21.8246 21.5229 21.0229C22.3246 20.2212 22.775 19.1338 22.775 18C22.775 16.8662 22.3246 15.7788 21.5229 14.9771C20.7212 14.1754 19.6338 13.725 18.5 13.725Z"
                            fill="white" />
                    </svg>
                </span>
                <span><svg width="47" height="36" viewBox="0 0 47 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M23.75 3.75C25.273 3.75 26.8351 3.78919 28.3492 3.85331L30.1376 3.93881L31.8493 4.04034L33.4525 4.149L34.9167 4.263C36.5059 4.38393 38.0014 5.06177 39.1399 6.17713C40.2784 7.2925 40.9868 8.77383 41.1403 10.3602L41.2116 11.1172L41.3452 12.7382C41.4699 14.4179 41.5625 16.249 41.5625 18C41.5625 19.751 41.4699 21.5821 41.3452 23.2618L41.2116 24.8828L41.1403 25.6398C40.9868 27.2265 40.2781 28.708 39.1392 29.8234C38.0004 30.9388 36.5044 31.6165 34.9149 31.737L33.4543 31.8492L31.8511 31.9597L30.1376 32.0612L28.3492 32.1467C26.817 32.2131 25.2836 32.2475 23.75 32.25C22.2164 32.2475 20.683 32.2131 19.1508 32.1467L17.3624 32.0612L15.6507 31.9597L14.0475 31.8492L12.5833 31.737C10.9941 31.6161 9.49857 30.9382 8.36008 29.8229C7.22158 28.7075 6.51318 27.2262 6.35966 25.6398L6.28841 24.8828L6.15481 23.2618C6.01914 21.5111 5.94665 19.756 5.9375 18C5.9375 16.249 6.03012 14.4179 6.15481 12.7382L6.28841 11.1172L6.35966 10.3602C6.51312 8.77411 7.22127 7.293 8.3594 6.17768C9.49753 5.06235 10.9927 4.38433 12.5816 4.263L14.044 4.149L15.6471 4.04034L17.3607 3.93881L19.149 3.85331C20.6818 3.78692 22.2158 3.75248 23.75 3.75ZM20.1875 13.6805V22.3195C20.1875 23.1425 21.0781 23.6555 21.7906 23.2458L29.2719 18.9263C29.4347 18.8325 29.5699 18.6976 29.6639 18.535C29.7579 18.3724 29.8074 18.1878 29.8074 18C29.8074 17.8122 29.7579 17.6276 29.6639 17.465C29.5699 17.3024 29.4347 17.1675 29.2719 17.0737L21.7906 12.756C21.6281 12.6622 21.4437 12.6128 21.2561 12.6128C21.0684 12.6128 20.8841 12.6623 20.7216 12.7562C20.5591 12.8501 20.4242 12.9851 20.3304 13.1476C20.2367 13.3102 20.1874 13.4946 20.1875 13.6823V13.6805Z"
                            fill="white" />
                    </svg>
                </span>
                <span><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.2826 8.215C24.2003 6.9794 23.6038 5.3926 23.6043 3.75H18.7118V23.3833C18.674 24.4458 18.2255 25.4521 17.4606 26.1905C16.6957 26.9288 15.6741 27.3415 14.6109 27.3417C12.3626 27.3417 10.4943 25.505 10.4943 23.225C10.4943 20.5017 13.1226 18.4592 15.8301 19.2983V14.295C10.3676 13.5667 5.58594 17.81 5.58594 23.225C5.58594 28.4975 9.95594 32.25 14.5951 32.25C19.5668 32.25 23.6043 28.2125 23.6043 23.225V13.2658C25.5882 14.6906 27.9701 15.455 30.4126 15.4508V10.5583C30.4126 10.5583 27.4359 10.7008 25.2826 8.215Z"
                            fill="white" />
                    </svg>
                </span>
            </div>
        </div>
        <div
            class="text-white roboto font-normal text-[14px] md:text-[16px] lg:text-[18px] py-10 mx-auto sm:w-full w-[60%] text-center">
            <span>Copyright © 2024 Air Drumming ® All rights reserved.</span>
        </div>
    </div>
</section>