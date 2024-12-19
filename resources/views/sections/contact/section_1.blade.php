<section class="flex justify-center tablet:justify-between w-full h-full tablet:w-[63%] mx-auto flex-wrap-reverse relative">
    <form action="{{ route('contact.send') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 md:flex flex-col gap-3 relative z-50 flex-wrap right">
        @csrf
        <div class="flex flex-col w-full mb-1">
            <label for="name" class="text-[14px] md:text-[16px] text-white">Name*</label>
            <input type="text" id="name" name="name" class="h-8 p-6 w-full text-[#07061C]"
                placeholder="Your name">
        </div>
        <div class="flex flex-row gap-5 items-center w-full max-w-full flex-wrap md:flex-nowrap">
            <div class="flex flex-col w-full">
                <label for="organization" class="text-[14px] md:text-[16px] text-white">Organization*</label>
                <input type="text" name="organization" id="organization" class="h-8 p-6 w-full md:w-[14.5rem] text-[#07061C]"
                    placeholder="Organization">
            </div>
            <div class="flex flex-col w-full">
                <label for="inquiry" class="text-[14px] md:text-[16px] text-white">Type of Inquiry*</label>
                <select name="inquiry" id="inquiry" class="h-12 px-5 w-full md:w-[14.5rem] text-[#07061C]">
                    <option value="" disabled selected>Type of inquiry</option>
                    <option value="User deletion">User deletion</option>
                </select>
            </div>
        </div>
        <div class="flex flex-row gap-5 items-center w-full max-w-full flex-wrap md:flex-nowrap">
            <div class="flex flex-col w-full">
                <label for="email" class="text-[14px] md:text-[16px] text-white">Email*</label>
                <input type="text" name="email" id="email" class="h-8 p-6 w-full md:w-[14.5rem] text-[#07061C]"
                    placeholder="Your email address">
            </div>
            <div class="flex flex-col w-full text-black">
                <label for="number" class="text-[14px] md:text-[16px] text-white">Contact*</label>
                <input type="text" name="number" id="number" class="h-8 p-6 w-full md:w-[14.5rem] text-[#07061C]"
                    placeholder="Your contact number">
            </div>
        </div>
        <div class="flex flex-col">
            <label for="message" class="text-[14px] md:text-[16px] text-white">Message*</label>
            <textarea class="text-black px-5 py-5" name="message" id="message" cols="30" rows="8" placeholder="What do you want to say..."></textarea>
        </div>
        <div class="roboto font-serif text-white text-xl text-center bg-blue-600 rounded-lg mt-5">
            <button type="submit" name="send" id="btn_send" class="py-3">Send</button>
        </div>
    </form>
    <div class="mb-10 relative flex flex-row items-center justify-center z-40 growdefault_01 ml-10">
        <div class="text-white text-[14px] md:text-[16px] flex flex-col roboto self-center lg:self-start">
            <img src="{{ asset('Assets/06_Contact page/get in touch.png') }}" alt="" class="h-7 w-32 md:w-52">
            <p class="text-nowrap">Let us know how can we help you.</p>
        </div>
        <img src="{{ asset('Assets/06_Contact page/Comet_02.png') }}" alt=""
            class="object-cover block lg:hidden h-36 md:h-60 growdefault_02 object-left">
    </div>
    <div class="absolute z-40 translate-x-0 translate-y-0 lg:translate-x-40 bottom-0 lg:translate-y-5 hidden lg:block">
        <img src="{{ asset('Assets/06_Contact page/Comet_01.png') }}" alt=""
            class="w-full h-full object-cover grow0">
    </div>
</section>
