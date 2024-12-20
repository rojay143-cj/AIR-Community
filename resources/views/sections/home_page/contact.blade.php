<section id="contactPage" class="w-full h-full relative z-50 bg-body py-20 overflow-hidden bg-[length:100%_100%] md:bg-[length:100%_150%] bg-[position_y:30%]">
    <div
        class="flex justify-center tablet:justify-between w-[80%] h-full tablet:w-[63%] mx-auto flex-wrap-reverse relative py-0 md:py-40">
        <form action="{{ route('contact.send') }}" method="POST"
            class="grid grid-cols-1 md:grid-cols-2 md:flex flex-col gap-3 relative z-50 flex-wrap w-full md:w-[63%]">
            @csrf
            <div class="flex flex-col w-full mb-1 roboto font-[400]">
                <label for="name" class="text-[14px] md:text-[16px] text-white">Name*</label>
                <input type="text" id="name" name="name" class="h-8 p-6 w-full text-[#07061C]"
                    placeholder="Your name">
            </div>
            <div class="flex flex-row gap-5 items-center w-full max-w-full flex-wrap md:flex-nowrap roboto font-[400]">
                <div class="flex flex-col w-full">
                    <label for="organization" class="text-[14px] md:text-[16px] text-white">Organization*</label>
                    <input type="text" name="organization" id="organization"
                        class="h-8 p-6 w-full text-[#07061C]" placeholder="Organization">
                </div>
                <div class="flex flex-col w-full">
                    <label for="inquiry" class="text-[14px] md:text-[16px] text-white">Type of Inquiry*</label>
                    <select name="inquiry" id="inquiry" class="h-12 px-5 w-full text-[#07061C]">
                        <option value="" disabled selected>Type of inquiry</option>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Support">Support</option>
                        <option value="Sales">Sales</option>
                        <option value="User deletion">User deletion</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-row gap-5 items-center w-full max-w-full flex-wrap md:flex-nowrap roboto font-[400]">
                <div class="flex flex-col w-full">
                    <label for="email" class="text-[14px] md:text-[16px] text-white">Email*</label>
                    <input type="text" name="email" id="email"
                        class="h-8 p-6 w-full text-[#07061C]" placeholder="Your email address">
                </div>
                <div class="flex flex-col w-full text-black">
                    <label for="number" class="text-[14px] md:text-[16px] text-white">Contact*</label>
                    <input type="text" name="number" id="number"
                        class="h-8 p-6 w-full text-[#07061C]" placeholder="Your contact number">
                </div>
            </div>
            <div class="flex flex-col roboto font-[400]">
                <label for="message" class="text-[14px] md:text-[16px] text-white">Message*</label>
                <textarea class="text-black px-5 py-5" name="message" id="message" cols="30" rows="8"
                    placeholder="What do you want to say..."></textarea>
            </div>
            <div class="roboto font-[400] text-white text-xl text-center bg-blue-600 rounded-none md:rounded-lg mt-5">
                <button type="submit" name="send" id="btn_send" class="py-3">Send</button>
            </div>
        </form>
        <div class="mb-10 relative flex flex-row items-center justify-between z-40">
            <div class="text-white text-[14px] md:text-[16px] flex flex-col roboto font-[400] self-center lg:self-start">
                <img src="{{ asset('Assets/06_Contact page/get in touch.png') }}" alt=""
                    class="h-5 md:h-7 w-32 md:w-52">
                <p class="text-wrap md:text-nowrap w-full">Let us know how can we help you.</p>
            </div>
            <img src="{{ asset('Assets/06_Contact page/Comet_02.png') }}" alt=""
                class="object-cover block lg:hidden h-36 md:h-60 object-left">
                <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/2.png') }}" alt=""
                class="absolute right-0 top-[-2rem] w-8 block md:hidden">
                <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/3.png') }}" alt=""
                class="absolute left-0 top-[-2rem] w-5 block md:hidden">
                <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/4.png') }}" alt=""
                class="absolute right-[5rem] bottom-[-2rem] w-10 block md:hidden">
        </div>
        <div
            class="absolute z-40 translate-x-[30rem] bottom-0 translate-y-[-6rem] hidden lg:block">
            <img src="{{ asset('Assets/06_Contact page/Comet_01.png') }}" alt=""
                class="w-full h-full object-cover">
        </div>
        <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/3.png') }}" alt=""
            class="absolute right-0 top-0 w-12 hidden tablet:block">
        <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/2.png') }}" alt=""
            class="absolute left-[-10rem] w-20 top-[24rem] hidden tablet:block">
        <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/4.png') }}" alt=""
            class="absolute right-[-10rem] bottom-0 w-32 hidden tablet:block">
    </div>
</section>
