@extends('components.layout')
@section('title', 'About us - Air Drumming community')
@section('body')
    <div class="container-fluid mx-auto relative w-full">
        @include('sections.about_page.header')

        <main class="h-full mx-auto w-full flex flex-col">
            {{-- About Us Section 1 --}}
            @include('sections.about_page.section_01')

            {{-- Section 2 --}}
            @include('sections.about_page.section_02')

            {{-- Section 3 --}}
            @include('sections.about_page.section_03')

            {{-- Section 4 --}}
            @include('sections.about_page.section_04')
        </main>
        @include('sections.about_page.section_05')
    </div>
@endsection
