@extends('app')

@section('content')
    <div>
        <main class="reg-page-style">
            <picture class="style-pic-wrap">
                <source srcset="https://app.travelperk.com/static/media/signup-01.2fabb89a.jpg">
                <img src="https://app.travelperk.com/static/media/signup-01.2fabb89a.jpg" alt="reg-pic">
            </picture>

        </main>
        <div class="reg-form-wrapper">

            <div class="style-logodiv">
                <div class="style-logowrapper">
                    <a class="reg-logo-link" href="#" data-testid="register-logo-link">
                        <img class="reg-logo" src="/img/black-logo.svg" alt="stayexpo">
                    </a>
                </div>
            </div>
            <div class="style-formdiv">
                <div class="style-formcard">
                    <div class="formcard-title">Get started today</div>
                    <div class="formcard-text spacer">No booking fee for your first 5 trips per month, then 5% per booking
                    </div>

                    <form autocomplete="off" action="post">
                        <div class="input-wrapper spacer">
                            <div class="flex-row">
                                <label class="input-label">
                                    <div class="input-controlline">
                                        <input class="input-control" type="text" data-testid="destination-input"
                                            placeholder="enter your Name">
                                    </div>
                                    <div class="input-title-wrapper">
                                        <div class="input-title">
                                            First Name
                                        </div>
                                    </div>
                                </label>
                                <label class="input-label">
                                    <div class="input-controlline">
                                        <input class="input-control" type="text" data-testid="destination-input"
                                            placeholder="your last name">
                                    </div>
                                    <div class="input-title-wrapper">
                                        <div class="input-title">
                                            Last Name
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="input-wrapper spacer">
                            <label class="input-label">
                                <div class="input-controlline">
                                    <input class="input-control" type="text" data-testid="destination-input"
                                        placeholder="name@company.com">
                                </div>
                                <div class="input-title-wrapper">
                                    <div class="input-title">
                                        Work Email
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="input-wrapper spacer">
                            <label class="input-label">
                                <div class="input-controlline">
                                    <input class="input-control" type="text" data-testid="destination-input"
                                        placeholder="******">
                                </div>
                                <div class="input-title-wrapper">
                                    <div class="input-title">
                                        Create Password
                                    </div>
                                </div>
                            </label>
                            <div class="formatted-text">Your password must be at least 8 characters including a
                                lowercase letter, an
                                uppercase letter, and a special character (e.g. !@#%&*).</div>
                        </div>

                        <label for="accepted_terms_and_privacy_policy" class="accepted-policy">
                            <div role="button" tabindex="0" class="clickable-style">
                                <div class="policy-wrapper flex spacer">
                                    <div class="mdc-checkbox">
                                        <input type="checkbox" height="24px" aria-checked="false" role="checkbox"
                                            size="24" class="mdc-checkbox__native-control"
                                            id="accepted_terms_and_privacy_policy" />
                                        <div class="mdc-checkbox__background">
                                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                <path class="mdc-checkbox__checkmark-path" fill="none"
                                                    d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                            </svg>
                                            <div class="mdc-checkbox__mixedmark"></div>
                                        </div>
                                        <div class="mdc-checkbox__ripple"></div>
                                    </div>
                                    <span>
                                        I've read and accepted the <a rel="noreferrer noopener" target="_blank"
                                            href="terms">Terms of
                                            use</a>
                                        and <a rel="noreferrer noopener" target="_blank" href="privacy-policy">Privacy
                                            Policy</a>
                                    </span>
                                </div>
                            </div>
                        </label>

                        <div class="reg-Form-submit spacer">
                            <button type="submit" tabindex="0" data-testid="user-widget-register-in-button"
                                class="submit-btn" data-testid="search-button" tabindex="0">
                                <div class="submit-btn-content">Get Started</div>
                            </button>
                        </div>

                        <div class="agreement-box spacer">
                            Learn how we process travelers' data in our
                            <a rel="noreferrer noopener" target="_blank" href="#">Data Processing Agreement</a>
                        </div>
                        <div class="agreement-box spacer">
                            This site is protected by reCAPTCHA and the Google
                            <a rel="noreferrer noopener" target="_blank" href="#">Privacy Policy</a> and
                            <a rel="noreferrer noopener" target="_blank" href="#">Terms of Service</a> apply
                        </div>
                    </form>
                </div>

                <div class="sign-in-box">
                    Already have an account?
                    <button type="submit" tabindex="0" data-testid="user-widget-sign-in-button" class="signin-btn"
                        data-testid="signin-button" tabindex="0">

                        <div class="sign-in-btn-content">Sign in</div>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
