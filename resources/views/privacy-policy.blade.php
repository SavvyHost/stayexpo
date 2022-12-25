@extends('app')

@section('content')
    <div class="hero-header-area">
        <div class="container">
            <div class="legal-hero-wrapper">
                <div class="legal-hero-img">
                    <span class="legal-header mobile-only"> Your trust is our most valuable asset</span>
                    <picture>
                        <source media="(max-width: 768px)" srcset alt="Supporting image for section">
                        <source media="(min-width: 769px)"
                            srcset="https://www.travelperk.com/wp-content/uploads/header-privacy-center.png"
                            alt="Supporting image for section">
                        <img decoding="async" src="https://www.travelperk.com/wp-content/uploads/header-privacy-center.png"
                            alt="">
                    </picture>
                </div>

                <div class="legal-hero-content">
                    <h1 class="legal-header disktop-only">Your trust is our most valuable asset</h1>
                    <div class="legal-header-main">
                        <p class="legal-text">We are committed to processing your data responsibly at every stage of your
                            journey
                            with StayExpo. Our
                            products put your privacy first.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
