@extends('app')

@section('content')
    {{-- <div class="hero-section">
        <div class="hero-content-overlay">

            <div class="hero-box">
                <div class="hero-box-wrapper">
                    <h1 class="hero-title ">Advantage Features</h1>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- advantage Features One  --}}

    <div class="advantage-hero-wrapper">
        <div class="container">
            <article class="advantage-hero type-agency">
                <div class="adv-header-content">
                    <header class="header-title">
                        For websites and other online services
                    </header>
                    <p class="header-paragraph">
                        We use the latest technology and a user-friendly interface to make it easy and profitable for you to
                        book hotels, as well as to integrate quickly and reliably with our system.
                    </p>
                </div>
            </article>
        </div>
    </div>

    <div class="mapped-block-wrapper">
        <div class="container">
            <article class="mapped-box">
                <div class="mapped-box-paragraph card-type-hotels">
                    <header class="mapped-box-header">Huge choice of inventory
                    </header>
                    <p class="mapped-box-text"> You choose from over 1,800,000 hotels, guest houses, hostels, and apartments
                        at great prices for corporate clients and travel agencies. We work with the world’s largest hotel
                        chains and tens of thousands of hotels directly. This enables us to provide the best rates and save
                        your money.</p>
                </div>
            </article>
        </div>
    </div>

    <div class="simply-block-wrapper">
        <div class="container">
            <article class="simply-box">
                <div class="simply-paragraphs">
                    <div class="simply-block-paragraph card-type-support">
                        <header class="simply-box-header">Reliable support service</header>
                        <p class="simply-box-text">You will receive first-class customer support and a personal account
                            manager. We
                            are at your
                            service 24/7: we support bookings, help you in your work, and address issues you may have. Our
                            support service speaks the local language.</p>
                    </div>
                    <div class="simply-block-paragraph card-type-precheck">
                        <header class="simply-box-header">Adaptive product</header>
                        <p class="simply-box-text">You may book a hotel where and when you wish. To achieve this, we made
                            our product mobile adaptive. This means that it will be easy for you to work with it on any
                            mobile device.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="search-block-wrapper">
        <div class="container">
            <article class="search-block-area">
                <section class="search-block">
                    <div class="search-block-paragraph">
                        <header class="block-header">A convenient and functional web platform</header>
                        <p class="block-text"> When creating a user-friendly and comfortable interface for travel industry
                            professionals, we made use of our invaluable experience from developing our B2C product. Every
                            day, we receive a huge volume of mixed content from both suppliers and hotels directly, as well
                            as feedback from travelers. Our content team unifies all the material in order that you gain
                            full and high-quality information required for bookings.</p>
                    </div>
                    <div class="search-block-form">
                        <div class="search-form-wrapper">
                            <div class="form-destinations">
                                <div class="clickOutside">
                                    <div class="input-wrapper">
                                        <label class="input-label">
                                            <div class="input-controlline">
                                                <input class="input-control" type="text" data-testid="destination-input"
                                                    placeholder="City, hotel or airport">
                                            </div>
                                            <div class="input-title-wrapper">
                                                <div class="input-title">
                                                    Destination
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-dates">
                                <div class="clickOutside">
                                    <div class="datepicker-group">
                                        <div class="input-wrapper datapicker-input">
                                            <label class="input-label" for="">
                                                <div class="input-controlline">
                                                    <div class="input-control" data-testid="date-start-input" tabindex="0"
                                                        role="textbox">
                                                        Nov 25 2022
                                                    </div>
                                                </div>
                                                <div class="input-title-wrapper">
                                                    <div class="input-title">
                                                        Check in
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="input-wrapper datapicker-input">
                                            <label class="input-label" for="">
                                                <div class="input-controlline">
                                                    <div class="input-control" data-testid="date-start-input"
                                                        tabindex="0">
                                                        Nov 29 2022
                                                    </div>
                                                </div>
                                                <div class="input-title-wrapper">
                                                    <div class="input-title">
                                                        Check out
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-guests">
                                <div class="clickOutside">
                                    <div class="input-wrapper">
                                        <label class="input-label" for="">
                                            <div class="input-controlline">
                                                <div tabindex="0" data-testid="guests-input" role="textbox"
                                                    class="input-control">
                                                    2 guests</div>
                                                <div tabindex="0" role="button" class="input-icon">
                                                    <svg width="20" height="20" viewbox="0 0 20 20"
                                                        fill="currentColor" class="guests-arrow-down">
                                                        <path fill-rule="nonzero"
                                                            d="M10.908 14.623l6.139-6.14c.5-.499.5-1.315 0-1.815l-.172-.174a1.29 1.29 0 0 0-1.817 0L10 11.553l-5.06-5.06a1.288 1.288 0 0 0-1.814 0l-.173.175c-.5.5-.5 1.316 0 1.816l6.14 6.139a1.288 1.288 0 0 0 1.815 0">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="input-title-wrapper">
                                                <div class="input-title">
                                                    1 room for
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="search-Form-submit">
                                <button type="submit" tabindex="0" data-testid="user-widget-sign-in-button"
                                    class="submit-btn" data-testid="search-button" tabindex="0">
                                    <div class="submit-btn-content">Explore Hotels</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </div>

    <div class="simply-block-wrapper">
        <div class="container">
            <article class="simply-box">
                <div class="simply-paragraphs">
                    <div class="simply-block-paragraph card-type-quality">
                        <header class="simply-box-header">White labels at the customer’s request</header>
                        <p class="simply-box-text">Earn money together with us. Custom and reliable white labels will be
                            integrated into your product in just a few hours.</p>
                    </div>
                    <div class="simply-block-paragraph card-type-loyalty">
                        <header class="simply-box-header">High-quality back-office</header>
                        <p class="simply-box-text">All information on orders, bills, vouchers, reports, and so on is
                            available for you in real-time. This helps you to manage bookings and customize reporting in the
                            way you find most convenient.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="simply-img-wrapper">
        <div class="container">
            <article class="simply-img-box ">
                <div class="simply-img-paragraph card-type-rich-features">
                    <header class="simply-img-header">Exclusive precheck</header>
                    <p class="simply-img-text">You are guaranteed maximum reliability. To ensure that the hotel is
                        expecting
                        your guests, we carry out a manual precheck of all bookings and check the details of each order with
                        the
                        hotel.</p>
                </div>
            </article>
        </div>
    </div>

    <div class="subfooter-wrapper">
        <div class="container">
            <article class="subfooter">
                <header class="subfooter-header">Companies throughout the world <br> book With StayExpo</header>
                <div class="subfooter-button">
                    <button class="auth-btn">
                        <a href="/registration">
                            <div class="btn-content">Sign Up</div>
                        </a>
                    </button>
                </div>

            </article>
        </div>
    </div>

    {{-- advantage Features two  --}}

    <div class="advantage-hero-wrapper">
        <div class="container">
            <article class="advantage-hero type-services">
                <div class="adv-header-content">
                    <header class="header-title">
                        For Business traveler management made easy
                    </header>
                    <p class="header-paragraph">
                        We use the latest technology and a user-friendly interface to make it easy and profitable for you to
                        book hotels, as well as to integrate quickly and reliably with our system.
                    </p>
                </div>
            </article>
        </div>
    </div>

    <div class="simply-block-wrapper">
        <div class="container">
            <article class="simply-box">
                <div class="simply-paragraphs">
                    <div class="simply-block-paragraph card-type-support">
                        <header class="simply-box-header">Reliable support service</header>
                        <p class="simply-box-text">You will receive first-class customer support and a personal account
                            manager. We
                            are at your
                            service 24/7: we support bookings, help you in your work, and address issues you may have. Our
                            support service speaks the local language.</p>
                    </div>
                    <div class="simply-block-paragraph card-type-precheck">
                        <header class="simply-box-header">Adaptive product</header>
                        <p class="simply-box-text">You may book a hotel where and when you wish. To achieve this, we made
                            our product mobile adaptive. This means that it will be easy for you to work with it on any
                            mobile device.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="search-block-wrapper">
        <div class="container">
            <article class="search-block-area">
                <section class="search-block">
                    <div class="search-block-paragraph">
                        <header class="block-header">A convenient and functional web platform</header>
                        <p class="block-text"> Integration in just a few hours: multi-functional web interface, fast
                            integration with different platforms, direct API integration as well as custom and reliable
                            white labels with an excellent design. When devising integrations, we are guided by the need for
                            simple code and the principle of reliability. The product will be fully adapted to meet your
                            needs.</p>
                    </div>
                    <div class="search-block-form">
                        <div class="search-form-wrapper">
                            <div class="form-destinations">
                                <div class="clickOutside">
                                    <div class="input-wrapper">
                                        <label class="input-label">
                                            <div class="input-controlline">
                                                <input class="input-control" type="text"
                                                    data-testid="destination-input" placeholder="City, hotel or airport">
                                            </div>
                                            <div class="input-title-wrapper">
                                                <div class="input-title">
                                                    Destination
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-dates">
                                <div class="clickOutside">
                                    <div class="datepicker-group">
                                        <div class="input-wrapper datapicker-input">
                                            <label class="input-label" for="">
                                                <div class="input-controlline">
                                                    <div class="input-control" data-testid="date-start-input"
                                                        tabindex="0" role="textbox">
                                                        Nov 25 2022
                                                    </div>
                                                </div>
                                                <div class="input-title-wrapper">
                                                    <div class="input-title">
                                                        Check in
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="input-wrapper datapicker-input">
                                            <label class="input-label" for="">
                                                <div class="input-controlline">
                                                    <div class="input-control" data-testid="date-start-input"
                                                        tabindex="0">
                                                        Nov 29 2022
                                                    </div>
                                                </div>
                                                <div class="input-title-wrapper">
                                                    <div class="input-title">
                                                        Check out
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-guests">
                                <div class="clickOutside">
                                    <div class="input-wrapper">
                                        <label class="input-label" for="">
                                            <div class="input-controlline">
                                                <div tabindex="0" data-testid="guests-input" role="textbox"
                                                    class="input-control">
                                                    2 guests</div>
                                                <div tabindex="0" role="button" class="input-icon">
                                                    <svg width="20" height="20" viewbox="0 0 20 20"
                                                        fill="currentColor" class="guests-arrow-down">
                                                        <path fill-rule="nonzero"
                                                            d="M10.908 14.623l6.139-6.14c.5-.499.5-1.315 0-1.815l-.172-.174a1.29 1.29 0 0 0-1.817 0L10 11.553l-5.06-5.06a1.288 1.288 0 0 0-1.814 0l-.173.175c-.5.5-.5 1.316 0 1.816l6.14 6.139a1.288 1.288 0 0 0 1.815 0">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="input-title-wrapper">
                                                <div class="input-title">
                                                    1 room for
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="search-Form-submit">
                                <button type="submit" tabindex="0" data-testid="user-widget-sign-in-button"
                                    class="submit-btn" data-testid="search-button" tabindex="0">
                                    <div class="submit-btn-content">Explore Hotels</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </div>

    <div class="simply-block-wrapper">
        <div class="container">
            <article class="simply-box">
                <div class="simply-paragraphs">
                    <div class="simply-block-paragraph card-type-support">
                        <header class="simply-box-header">Reliable support service</header>
                        <p class="simply-box-text">You will receive first-class customer support and a personal account
                            manager. We
                            are at your
                            service 24/7: we support bookings, help you in your work, and address issues you may have. Our
                            support service speaks the local language.</p>
                    </div>
                    <div class="simply-block-paragraph card-type-precheck">
                        <header class="simply-box-header">Adaptive product</header>
                        <p class="simply-box-text">You may book a hotel where and when you wish. To achieve this, we made
                            our product mobile adaptive. This means that it will be easy for you to work with it on any
                            mobile device.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="simply-block-wrapper">
        <div class="container">
            <article class="simply-box">
                <div class="simply-paragraphs">
                    <div class="simply-block-paragraph card-type-support">
                        <header class="simply-box-header">Reliable support service</header>
                        <p class="simply-box-text">You will receive first-class customer support and a personal account
                            manager. We
                            are at your
                            service 24/7: we support bookings, help you in your work, and address issues you may have. Our
                            support service speaks the local language.</p>
                    </div>
                    <div class="simply-block-paragraph card-type-precheck">
                        <header class="simply-box-header">Adaptive product</header>
                        <p class="simply-box-text">You may book a hotel where and when you wish. To achieve this, we made
                            our product mobile adaptive. This means that it will be easy for you to work with it on any
                            mobile device.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="subfooter-wrapper">
        <div class="container">
            <article class="subfooter">
                <header class="subfooter-header">Gain the most
                    <br> from hotel bookings
                </header>
                <div class="subfooter-button">
                    <button class="auth-btn">
                        <a href="/registration">
                            <div class="btn-content">Sign Up</div>
                        </a>
                    </button>
                </div>

            </article>
        </div>
    </div>

    {{-- advantage Features Three  --}}

    <div class="advantage-hero-wrapper">
        <div class="container">
            <article class="advantage-hero type-services">
                <div class="adv-header-content">
                    <header class="header-title">
                        For Business traveler management made easy
                    </header>
                    <p class="header-paragraph">
                        We use the latest technology and a user-friendly interface to make it easy and profitable for you to
                        book hotels, as well as to integrate quickly and reliably with our system.
                    </p>
                </div>
            </article>
        </div>
    </div>
    <div class="simply-block-wrapper">
        <div class="container">
            <article class="simply-box">
                <div class="simply-paragraphs">
                    <div class="simply-block-paragraph card-type-user-level">
                        <header class="simply-box-header">For all user types
                        </header>
                        <p class="simply-box-text">You can assign user roles and limit access. Finance department staff
                            will gain one access level, and managers will gain another, business leaders a third and
                            administrators a fourth. Separate functionality and rules are set for each level. You can create
                            or delete records directly.</p>
                    </div>
                    <div class="simply-block-paragraph card-type-quality">
                        <header class="simply-box-header">Different models for working with us
                        </header>
                        <p class="simply-box-text">We offer a number of formats for cooperation. You choose which model is
                            more convenient: net prices or commission. Work with the net price or include your markup. With
                            us, you can run your business even more effectively.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="simply-block-wrapper">
        <div class="container">
            <article class="simply-box">
                <div class="simply-paragraphs">
                    <div class="simply-block-paragraph card-type-support">
                        <header class="simply-box-header">Reliable support service</header>
                        <p class="simply-box-text">You will receive first-class customer support and a personal account
                            manager. We
                            are at your
                            service 24/7: we support bookings, help you in your work, and address issues you may have. Our
                            support service speaks the local language.</p>
                    </div>
                    <div class="simply-block-paragraph card-type-quality">
                        <header class="simply-box-header">High-quality back-office</header>
                        <p class="simply-box-text">All information on orders, invoices, vouchers, reports and so on is
                            available for you in real-time. This helps you to manage bookings and customize reporting in the
                            way you find most convenient, as well as to download reports in your preferred format.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="search-block-wrapper">
        <div class="container">
            <article class="search-block-area">
                <section class="search-block">
                    <div class="search-block-paragraph">
                        <header class="block-header">A convenient and functional web platform</header>
                        <p class="block-text"> In a single user-friendly system, you can quickly book hotels or air
                            tickets, rent cars, and make group or individual bookings. When creating an appropriate and
                            comfortable interface for travel industry professionals, we made use of our invaluable
                            experience from developing our B2C product.</p>
                    </div>
                    <div class="search-block-form">
                        <div class="search-form-wrapper">
                            <div class="form-destinations">
                                <div class="clickOutside">
                                    <div class="input-wrapper">
                                        <label class="input-label">
                                            <div class="input-controlline">
                                                <input class="input-control" type="text"
                                                    data-testid="destination-input" placeholder="City, hotel or airport">
                                            </div>
                                            <div class="input-title-wrapper">
                                                <div class="input-title">
                                                    Destination
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-dates">
                                <div class="clickOutside">
                                    <div class="datepicker-group">
                                        <div class="input-wrapper datapicker-input">
                                            <label class="input-label" for="">
                                                <div class="input-controlline">
                                                    <div class="input-control" data-testid="date-start-input"
                                                        tabindex="0" role="textbox">
                                                        Nov 25 2022
                                                    </div>
                                                </div>
                                                <div class="input-title-wrapper">
                                                    <div class="input-title">
                                                        Check in
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="input-wrapper datapicker-input">
                                            <label class="input-label" for="">
                                                <div class="input-controlline">
                                                    <div class="input-control" data-testid="date-start-input"
                                                        tabindex="0">
                                                        Nov 29 2022
                                                    </div>
                                                </div>
                                                <div class="input-title-wrapper">
                                                    <div class="input-title">
                                                        Check out
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-guests">
                                <div class="clickOutside">
                                    <div class="input-wrapper">
                                        <label class="input-label" for="">
                                            <div class="input-controlline">
                                                <div tabindex="0" data-testid="guests-input" role="textbox"
                                                    class="input-control">
                                                    2 guests</div>
                                                <div tabindex="0" role="button" class="input-icon">
                                                    <svg width="20" height="20" viewbox="0 0 20 20"
                                                        fill="currentColor" class="guests-arrow-down">
                                                        <path fill-rule="nonzero"
                                                            d="M10.908 14.623l6.139-6.14c.5-.499.5-1.315 0-1.815l-.172-.174a1.29 1.29 0 0 0-1.817 0L10 11.553l-5.06-5.06a1.288 1.288 0 0 0-1.814 0l-.173.175c-.5.5-.5 1.316 0 1.816l6.14 6.139a1.288 1.288 0 0 0 1.815 0">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="input-title-wrapper">
                                                <div class="input-title">
                                                    1 room for
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="search-Form-submit">
                                <button type="submit" tabindex="0" data-testid="user-widget-sign-in-button"
                                    class="submit-btn" data-testid="search-button" tabindex="0">
                                    <div class="submit-btn-content">Explore Hotels</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </div>
    <div class="simply-block-wrapper">
        <div class="container">
            <article class="simply-box">
                <div class="simply-paragraphs">
                    <div class="simply-block-paragraph card-type-precheck">
                        <header class="simply-box-header">Exclusive precheck</header>
                        <p class="simply-box-text">You are guaranteed maximum reliability. To ensure that the hotel is
                            expecting your guests, we carry out a manual precheck of all bookings and check the details of
                            each order with the hotel directly</p>
                    </div>
                    <div class="simply-block-paragraph card-type-loyalty">
                        <header class="simply-box-header">Loyalty program</header>
                        <p class="simply-box-text">You save money by booking with RateHawk. Book hotels, earn points, and
                            then use them to pay for your own personal bookings in full or in part or to provide discounts
                            to clients. 1 loyalty point = 1 local currency unit.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
    <div class="subfooter-wrapper">
        <div class="container">
            <article class="subfooter">
                <header class="subfooter-header">Book with StayExpo
                    <br> and Save more with us!
                </header>
                <div class="subfooter-button">
                    <button class="auth-btn">
                        <a href="/registration">
                            <div class="btn-content">Sign Up</div>
                        </a>
                    </button>
                </div>

            </article>
        </div>
    </div>
@endsection
