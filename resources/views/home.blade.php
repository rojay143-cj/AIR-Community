@extends('components.layout')
@section('title', 'Home - AirDrumming Community')
@section('body')
    <div class="container-fluid w-full">
        @include('sections.home_page.header')
        @include('sections.home_page.section_01')
        @include('sections.home_page.section_02')
        @include('sections.home_page.section_03')
        @include('sections.about_page.section_05')
    </div>
@endsection
