@extends('components.layout')
@section('title', 'Contact Us - Air+ Community')
@section('body')
    @include('sections.about_page.header')
    <main class="h-full w-full max-w-[2000px] py-40 mx-auto bg-no-repeat relative bg-[#07061C] bg-opacity-25">
        @include('sections.contact.section_1')
    <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/2.png') }}" alt=""
        class="absolute left-32 w-20 top-96 grow0 hidden tablet:block">
    <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/3.png') }}" alt=""
        class="absolute right-20 top-12 w-12 grow0 hidden tablet:block">
    <img src="{{ asset('Assets/03_Services Page/backdrop/planet_service/4.png') }}" alt=""
        class="absolute right-52 bottom-16 w-32 grow0 hidden tablet:block">
    </main>
    @include('sections.about_page.section_05')
    <div class="absolute top-0">
        @include('components.success_error')
    </div>
@endsection
