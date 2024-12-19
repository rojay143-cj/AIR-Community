@extends('components.layout')
@section('title', 'Community - Air+ Community')
@section('body')
    @include('sections.about_page.header')
    <main class="h-full w-full max-w-[2000px] mx-auto bg-no-repeat p-10 relative flex flex-col gap-20">
        @include('sections.community.section_01')
        @include('sections.community.section_02')
    </main>
    @include('sections.about_page.section_05')
@endsection
