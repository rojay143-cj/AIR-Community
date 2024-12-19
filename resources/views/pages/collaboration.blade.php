@extends('components.layout')
@section('title', 'Collaboration - AIR+ Community')
@section('body')
    @include('sections.about_page.header')
    <main class="h-full w-full max-w-[2000px] mx-auto bg-no-repeat p-10 relative">
        {{-- Section 1 --}}
        @include('sections.collaboration.section_01')
        <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/3.png')}}" alt="" class="hidden md:block absolute z-40 w-14 top-0 right-10 grow0">
        <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/2.png')}}" alt="" class="hidden md:block absolute z-40 w-16 bottom-[30rem] left-14 grow0">
        <img src="{{asset('Assets/03_Services Page/backdrop/planet_service/4.png')}}" alt="" class="hidden md:block absolute z-40 w-32 bottom-5 right-12 grow0">
    </main>
    @include('sections.about_page.section_05')
@endsection
