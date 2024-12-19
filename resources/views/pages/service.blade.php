@extends('components.layout')
@section('title', 'Services - AIR+ Community')
@section('body')
    {{-- Header --}}
    @include('sections.about_page.header')

    {{-- Main --}}
    <main class="bg-servicesBackground bg-cover bg-center bg-no-repeat w-full relative">
        {{-- Section 1 --}}
        @include('sections.service_page.section_01')
        {{-- Section 2 --}}
        @include('sections.service_page.section_02')
        {{-- Section 3 --}}
        @include('sections.service_page.section_03')
        {{-- Section 4 --}}
        @include('sections.service_page.section_04')
        {{-- Footer --}}
        @include('sections.about_page.section_05')
    </main>
@endsection
