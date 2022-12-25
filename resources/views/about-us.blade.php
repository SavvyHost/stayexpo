@extends('app')

@section('content')
    <div class="about-us-wrapper">
        <div class="container">
            <div class="header-wrapper">
                <article class="about-header-header">
                    <section class="about-header-wrapper">
                        <h1 class="box-header-title">About StayExpo</h1>

                        <p class="box-header-text"> Founded in 2016 (part of Emerging Travel Group, est 2020) and created
                            for travel market
                            professionals, RateHawk has become one of the fastest-growing platforms for B2B industry
                            players. An innovative and reliable partner for tens of thousands of travel agents, tour
                            operators, and corporate clients.</p>

                        <p class="box-header-text">We offer over 1.8 million accommodation options, FIT & group
                            reservations, car rental, transfers,
                            and other travel-related services for both leisure and business travel.</p>
                    </section>
                </article>
            </div>
        </div>
    </div>

    <div class="about-business">
        @include ('components.home.business-travel')
    </div>
@endsection
