@extends('app')

@section('content')
    @include('components.home.hero-section')
    @include('components.home.advantage-section')
    {{-- @include('components.home.destinations') --}}
    @include ('components.home.security-section')
    @include ('components.home.about-section')
    {{-- @include ('components.home.business-travel') --}}
    @include ('components.home.call-to-action')
    @include ('components.home.exhibitions')
    @include ('components.home.blog-section')
@endsection
