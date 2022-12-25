@extends('app')

@section('content')
    <div class="search-container">
        <div class="main-wrapper">
            <div class="search-hotels-sidebar">
                <div class="box-filter-wrapper">
                    <div class="box-filters">
                        <div class="filter-sc">
                            <h2 font-size="2" font-weight="bold" class="text-filter-sc">Neighborhoods</h2>
                            <hr class="divider-filters">
                            <div class="filter-cat-group-container">
                                <div class="checkbox-cat-group">
                                    <label class="label-checkbox-cat" for="neighborhoods-1" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false" role="checkbox"
                                                    size="24" class="mdc-checkbox__native-control"
                                                    id="neighborhoods-1" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">East Of the strip</span>
                                            </div>
                                            <span class="text-span-count">(207)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="neighborhoods-2" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false" role="checkbox"
                                                    size="24" class="mdc-checkbox__native-control"
                                                    id="neighborhoods-2" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">McCarran International Airport (LAS)</span>
                                            </div>
                                            <span class="text-span-count">(70)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="neighborhoods-3" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox  ">
                                                <input type="checkbox" height="24px" aria-checked="false" role="checkbox"
                                                    size="24" class="mdc-checkbox__native-control"
                                                    id="neighborhoods-3" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">Downtown Las Vegas</span>
                                            </div>
                                            <span class="text-span-count">(370)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="neighborhoods-4" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false" role="checkbox"
                                                    size="24" class="mdc-checkbox__native-control"
                                                    id="neighborhoods-4" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">Th Strip Central East</span>
                                            </div>
                                            <span class="text-span-count">(67)</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="box-expander-wrapper">
                                <button class="expander-btn">
                                    <div class="expander-text">See 10 more neighborhoods </div>
                                    <svg class="expander-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        height="24" width="24" aria-hidden="true" focusable="false"
                                        role="img" tabindex="-1">
                                        <path d="M7.4 15.4l4.6-4.6 4.6 4.6L18 14l-6-6-6 6 1.4 1.4z"> </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="filter-sc">
                            <h2 font-size="2" font-weight="bold" class="text-filter-sc">Guest Rating</h2>
                            <hr class="divider-filters">
                            <div class="filter-cat-group-container">
                                <div class="button-cat-group">
                                    <div class="button-cat-wrapper">
                                        <button class="segmented-btn mdc-button">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">5 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                        <button class="segmented-btn mdc-button">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">6 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                        <button class="segmented-btn mdc-button">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">7 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                        <button class="segmented-btn mdc-button">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">8 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                        <button class="segmented-btn mdc-button ">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">9 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="filter-sc">
                            <h2 font-size="2" font-weight="bold" class="text-filter-sc">Amenities</h2>
                            <hr class="divider-filters">
                            <div class="filter-cat-group-container">
                                <div class="checkbox-cat-group">
                                    <label class="label-checkbox-cat" for="amenities-1" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false"
                                                    role="checkbox" size="24" class="mdc-checkbox__native-control"
                                                    id="amenities-1" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <span class="material-symbols-outlined">
                                                wifi
                                            </span>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">Free Instant Access</span>
                                            </div>
                                            <span class="text-span-count">(260)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="amenities-2" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false"
                                                    role="checkbox" size="24" class="mdc-checkbox__native-control"
                                                    id="amenities-2" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <span class="material-symbols-outlined">
                                                coffee
                                            </span>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">Free Breakfast</span>
                                            </div>
                                            <span class="text-span-count">(47)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="amenities-3" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox  ">
                                                <input type="checkbox" height="24px" aria-checked="false"
                                                    role="checkbox" size="24" class="mdc-checkbox__native-control"
                                                    id="amenities-3" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <span class="material-symbols-outlined">
                                                local_parking
                                            </span>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">Free Parking</span>
                                            </div>
                                            <span class="text-span-count">(30)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="amenities-4" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false"
                                                    role="checkbox" size="24" class="mdc-checkbox__native-control"
                                                    id="amenities-4" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <span class="material-symbols-outlined">
                                                pets
                                            </span>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">Pets Allowed</span>
                                            </div>
                                            <span class="text-span-count">(7)</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="box-expander-wrapper">
                                <button class="expander-btn">
                                    <div class="expander-text">See 10 more neighborhoods </div>
                                    <svg class="expander-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        height="24" width="24" aria-hidden="true" focusable="false"
                                        role="img" tabindex="-1">
                                        <path d="M7.4 15.4l4.6-4.6 4.6 4.6L18 14l-6-6-6 6 1.4 1.4z"> </path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="filter-sc">
                            <h2 font-size="2" font-weight="bold" class="text-filter-sc">Hotel Star Level</h2>
                            <hr class="divider-filters">
                            <div class="filter-cat-group-container">
                                <div class="button-cat-group">
                                    <div class="button-cat-wrapper">
                                        <button class="segmented-btn mdc-button">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">1 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                        <button class="segmented-btn mdc-button">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">2 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                        <button class="segmented-btn mdc-button">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">3 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                        <button class="segmented-btn mdc-button">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">4 +</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                        <button class="segmented-btn mdc-button ">
                                            <span class="mdc-button__ripple"></span>

                                            <div class="segmentted-btn-value">5</div>
                                            <span class="sronly-sc"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="filter-sc">
                            <h2 font-size="2" font-weight="bold" class="text-filter-sc">Set Your Budget</h2>
                            <hr class="divider-filters">
                            <div class="filter-cat-group-container">
                                <div class="mdc-slider mdc-slider--range">
                                    <label class="filter-label">$
                                        <span>0</span>
                                        <span>to $</span>
                                        <span>150</span>
                                        <span>per night</span>
                                    </label>
                                    <input class="mdc-slider__input" type="range" min="0" max="70"
                                        readonly="" value="30" name="rangeStart"
                                        aria-label="Continuous range slider demo">
                                    <input class="mdc-slider__input" type="range" min="30" max="100"
                                        value="70" name="rangeEnd" aria-label="Continuous range slider demo">
                                    <div class="mdc-slider__track">
                                        <div class="mdc-slider__track--inactive"></div>
                                        <div class="mdc-slider__track--active">
                                            <div class="mdc-slider__track--active_fill"></div>
                                        </div>
                                    </div>
                                    <div class="mdc-slider__thumb">
                                        <div class="mdc-slider__thumb-knob"></div>
                                    </div>
                                    <div class="mdc-slider__thumb">
                                        <div class="mdc-slider__thumb-knob"></div>
                                    </div>
                                </div>
                                <div class="filter-note">
                                    <span>* The average retail price for Jan 05 – Jan 12 in Sharm El Sheikh, Egypt</span>
                                </div>
                                <div class="price-guidance-checkbox">
                                    <label class="label-checkbox-cat" for="priceRange-1" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false"
                                                    role="checkbox" size="24" class="mdc-checkbox__native-control"
                                                    id="priceRange-1" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">$$$$$</span>
                                            </div>
                                            <span class="text-span-count">($0 to $75 per night)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="priceRange-2" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false"
                                                    role="checkbox" size="24" class="mdc-checkbox__native-control"
                                                    id="priceRange-2" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">$$$$$</span>
                                            </div>
                                            <span class="text-span-count">($76 - $108 per night)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="priceRange-3" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false"
                                                    role="checkbox" size="24" class="mdc-checkbox__native-control"
                                                    id="priceRange-3" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">$$$$$</span>
                                            </div>
                                            <span class="text-span-count">($109 - $140 per night)</span>
                                        </div>
                                    </label>
                                    <label class="label-checkbox-cat" for="priceRange-4" font-size="0"
                                        font-weight="regular">
                                        <div class="checkbox-cat mdc-list-item">
                                            <span class="mdc-list-item__ripple"></span>

                                            <div class="mdc-checkbox">
                                                <input type="checkbox" height="24px" aria-checked="false"
                                                    role="checkbox" size="24" class="mdc-checkbox__native-control"
                                                    id="priceRange-4" />
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path" fill="none"
                                                            d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                                <div class="mdc-checkbox__ripple"></div>
                                            </div>
                                            <div class="checkbox-filter-text">
                                                <span class="text-span">$$$$$</span>
                                            </div>
                                            <span class="text-span-count">($141+ per night)</span>
                                        </div>
                                    </label>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="search-results-listing">
                <div class="search-results-box">
                    350 hotelsinLas Vegas, NV ~ $132 avg. per night

                </div>
                <div class="box-listing-hotels">
                    <div class="box-card-wrapper">
                        <div class="listing-card">
                            <div class="listing-card-wrapper">

                                <div class="box-imgs">
                                    <div class="box-imgs-container">
                                        <div class="imgs-wrapper">
                                            <div class="wishlist-wrapper"></div>
                                            <div class="bg-img-box">

                                                <div class="inline-img-swiper swiper swiper-cards-imgs ">
                                                    <div class="inline-img-wrapper">

                                                        <div class="arrow-left-controller">
                                                            <button aria-label="Scroll to Previous image"
                                                                class="prev-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" height="24" width="24"
                                                                    aria-hidden="true" tabindex="-1" focusable="false"
                                                                    role="img" class="prev-btn-svg">
                                                                    <path
                                                                        d="M15.4 16.6L10.8 12l4.6-4.6L14 6l-6 6 6 6 1.4-1.4z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div class="arrow-right-controller">
                                                            <button aria-label="Scroll to Previous image"
                                                                class="next-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" height="24" width="24"
                                                                    aria-hidden="true" tabindex="-1" focusable="false"
                                                                    role="img" class="next-btn-svg">
                                                                    <path
                                                                        d="M8 16.6l4.6-4.6L8 7.4 9.4 6l6 6-6 6L8
                                                                    16.6z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <div class="imgs-carousel">
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-content-wrapper">
                                    <div class="box-content">

                                        <div class="top-box-content">
                                            <div class="badges-container">
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M12 17.8l6.2 3.7-1.6-7L22 9.7l-7.2-.6L12 2.5 9.2 9.1 2 9.7l5.5 4.8-1.6 7 6.1-3.7z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Luxury</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M15.5 9.6c-.2-2.8-1.3-5.5-3.4-7.6-2.2 2.1-3.4 4.9-3.6 7.6 1.3.7 2.5 1.6 3.5 2.7 1-1.1 2.2-2 3.5-2.7zM9 12.3c-.1-.1-.3-.2-.4-.3.1.1.2.2.4.3zm6.4-.3c-.1.1-.3.2-.4.3.1-.1.3-.2.4-.3zM12 15.4C9.8 12.2 6.2 10 2 10c0 5.3 3.4 9.8 8 11.5.6.2 1.3.4 2 .5.7-.1 1.3-.3 2-.5 4.7-1.7 8-6.2 8-11.5-4.2 0-7.9 2.2-10 5.4zM8.6 12c-1.1-.7-2.3-1.3-3.6-1.6 1.3.3 2.5.9 3.6 1.6zM19 10.4c-1.3.3-2.5.9-3.6 1.6 1.1-.7 2.3-1.3 3.6-1.6z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Spa And Wellness</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path fill="none" d="M0 0h24v24H0V0z">
                                                        </path>
                                                        <path
                                                            d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z">
                                                        </path>
                                                        <path
                                                            d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">420+</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M16 6l2.3 2.3-4.9 4.9-4-4L2 16.6 3.4 18l6-6 4 4 6.3-6.3L22 12V6h-6z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Top Booked</div>
                                                </div>

                                            </div>
                                            <h3 class="content-box-title">
                                                <div class="box-title">
                                                    <a class="box-link-title" href="#">The Venetian Resort Las
                                                        Vegas</a>
                                                </div>
                                            </h3>
                                        </div>

                                        <div class="middle-box-content">
                                            <div class="attribute-box">
                                                <div class="card-location-wrapper">
                                                    <a class="link-location" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            height="16" width="16" aria-hidden="true"
                                                            focusable="false" tabindex="-1" role="img"
                                                            class="location-svg">
                                                            <path
                                                                d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z">
                                                            </path>
                                                        </svg>
                                                        <div class="location-text">Downtown Las Vegas - Fremont Street Area
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="attributes-box-wrapper">
                                                <div class="amenities-box">
                                                    <div class="attribute-box">

                                                        <div class="box-svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                height="20" width="20" aria-hidden="true"
                                                                fill="currentcolor" color="secondary.base" tabindex="-1"
                                                                focusable="false" role="img">
                                                                <path
                                                                    d="M8.6 15.6l-4.2-4.2L3 12.8l5.6 5.6 12-12L19.2 5 8.6 15.6z">
                                                                </path>
                                                            </svg>
                                                        </div>

                                                        <div class="box-amenities-text">Free Internet Access, Free Parking,
                                                            Pets Allowed,
                                                        </div>

                                                        <div class="box-link-wrapper">
                                                            <a href="#" class="box-link" target="_blank"
                                                                rel="noopener">
                                                                <div class="box-link-text">Amenities</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="policy-box">
                                                    <div class="policy-box-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            height="20" width="20" aria-hidden="true"
                                                            fill="currentcolor" color="secondary.base" tabindex="-1"
                                                            focusable="false" role="img">
                                                            <path
                                                                d="M8.6 15.6l-4.2-4.2L3 12.8l5.6 5.6 12-12L19.2 5 8.6 15.6z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <span class="policy-box-text">Free Cancellation, Pay Later
                                                        Available</span>
                                                </div>

                                                <div class="highlight-massage">
                                                    <svg width="220" height="12" viewBox="0 0 192 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        preserveAspectRatio="none" class="styling-svg">
                                                        <title>Highlight banner</title>
                                                        <desc>Highlight banner for urgency messaging</desc>
                                                        <path
                                                            d="M3 3C5.7945 0.205448 189 -0.99999 192 2C191 4 190 7 189 10C186 7.00002 3 9.00002 0 12C0.5 11 2.5 4 3 3Z"
                                                            fill="#FBEBEB">
                                                        </path>
                                                    </svg>
                                                    <div class="massage-text">We only have a few rooms left at $71</div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="bottom-box-content">
                                            <div class="bottom-box-content-wrapper">
                                                <div class="rating-badge">
                                                    <div class="rating-badge-text">7.9</div>
                                                </div>
                                                <div class="rating-text-wrapper">
                                                    <div class="rating-text">
                                                        <div class="reviews-text">12689 Reviews

                                                        </div>
                                                        <hr color="border">
                                                        <div class="rating-stars">4-Star Hotel</div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="box-rates-wrapper">
                                    <div class="box-rates">
                                        <div class="rates-top">
                                            <div class="deals-rates-box">
                                                <div class="deal-badge">
                                                    <div class="text-badge">
                                                        EXPRESS DEAL
                                                    </div>
                                                </div>
                                                <div class="deal-percent">
                                                    <div class="percent-rates">
                                                        43% OFF
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-notes">
                                                <div class="deals-notes-text"> We choose the hotel, you save 43%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rates-bottom">
                                            <div class="old-rates-wrapper">
                                                <div class="old-strick-rates">
                                                    <div class="old-rates">
                                                        <span class="old-currency-sign">$</span>
                                                        <span class="old-rate-number">52</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="new-rate-wrapper">
                                                <div class="new-rate">
                                                    <span class="new-currency-sign">$</span>
                                                    <span class="new-rate-number">32</span>
                                                </div>
                                                <div class="subtotal-text">Subtotal: $240</div>
                                            </div>

                                            <div class="button-wrapper">
                                                <button class="mdc-button mdc-button--unelevated card-btn"> <span
                                                        class="mdc-button__ripple"></span>Choose room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-card-wrapper">
                        <div class="listing-card">
                            <div class="listing-card-wrapper">

                                <div class="box-imgs">
                                    <div class="box-imgs-container">
                                        <div class="imgs-wrapper">
                                            <div class="wishlist-wrapper"></div>
                                            <div class="bg-img-box">

                                                <div class="inline-img-swiper swiper swiper-cards-imgs ">
                                                    <div class="inline-img-wrapper">

                                                        <div class="arrow-left-controller">
                                                            <button aria-label="Scroll to Previous image"
                                                                class="prev-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" height="24" width="24"
                                                                    aria-hidden="true" tabindex="-1" focusable="false"
                                                                    role="img" class="prev-btn-svg">
                                                                    <path
                                                                        d="M15.4 16.6L10.8 12l4.6-4.6L14 6l-6 6 6 6 1.4-1.4z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div class="arrow-right-controller">
                                                            <button aria-label="Scroll to Previous image"
                                                                class="next-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" height="24" width="24"
                                                                    aria-hidden="true" tabindex="-1" focusable="false"
                                                                    role="img" class="next-btn-svg">
                                                                    <path
                                                                        d="M8 16.6l4.6-4.6L8 7.4 9.4 6l6 6-6 6L8
                                                                    16.6z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <div class="imgs-carousel">
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-content-wrapper">
                                    <div class="box-content">

                                        <div class="top-box-content">
                                            <div class="badges-container">
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M12 17.8l6.2 3.7-1.6-7L22 9.7l-7.2-.6L12 2.5 9.2 9.1 2 9.7l5.5 4.8-1.6 7 6.1-3.7z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Luxury</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M15.5 9.6c-.2-2.8-1.3-5.5-3.4-7.6-2.2 2.1-3.4 4.9-3.6 7.6 1.3.7 2.5 1.6 3.5 2.7 1-1.1 2.2-2 3.5-2.7zM9 12.3c-.1-.1-.3-.2-.4-.3.1.1.2.2.4.3zm6.4-.3c-.1.1-.3.2-.4.3.1-.1.3-.2.4-.3zM12 15.4C9.8 12.2 6.2 10 2 10c0 5.3 3.4 9.8 8 11.5.6.2 1.3.4 2 .5.7-.1 1.3-.3 2-.5 4.7-1.7 8-6.2 8-11.5-4.2 0-7.9 2.2-10 5.4zM8.6 12c-1.1-.7-2.3-1.3-3.6-1.6 1.3.3 2.5.9 3.6 1.6zM19 10.4c-1.3.3-2.5.9-3.6 1.6 1.1-.7 2.3-1.3 3.6-1.6z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Spa And Wellness</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path fill="none" d="M0 0h24v24H0V0z">
                                                        </path>
                                                        <path
                                                            d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z">
                                                        </path>
                                                        <path
                                                            d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">420+</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M16 6l2.3 2.3-4.9 4.9-4-4L2 16.6 3.4 18l6-6 4 4 6.3-6.3L22 12V6h-6z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Top Booked</div>
                                                </div>

                                            </div>
                                            <h3 class="content-box-title">
                                                <div class="box-title">
                                                    <a class="box-link-title" href="#">The Venetian Resort Las
                                                        Vegas</a>
                                                </div>
                                            </h3>
                                        </div>

                                        <div class="middle-box-content">
                                            <div class="attribute-box">
                                                <div class="card-location-wrapper">
                                                    <a class="link-location" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            height="16" width="16" aria-hidden="true"
                                                            focusable="false" tabindex="-1" role="img"
                                                            class="location-svg">
                                                            <path
                                                                d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z">
                                                            </path>
                                                        </svg>
                                                        <div class="location-text">Downtown Las Vegas - Fremont Street Area
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="attributes-box-wrapper">
                                                <div class="amenities-box">
                                                    <div class="attribute-box">

                                                        <div class="box-svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                height="20" width="20" aria-hidden="true"
                                                                fill="currentcolor" color="secondary.base" tabindex="-1"
                                                                focusable="false" role="img">
                                                                <path
                                                                    d="M8.6 15.6l-4.2-4.2L3 12.8l5.6 5.6 12-12L19.2 5 8.6 15.6z">
                                                                </path>
                                                            </svg>
                                                        </div>

                                                        <div class="box-amenities-text">Free Internet Access, Free Parking,
                                                            Pets Allowed,
                                                        </div>

                                                        <div class="box-link-wrapper">
                                                            <a href="#" class="box-link" target="_blank"
                                                                rel="noopener">
                                                                <div class="box-link-text">Amenities</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="policy-box">
                                                    <div class="policy-box-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            height="20" width="20" aria-hidden="true"
                                                            fill="currentcolor" color="secondary.base" tabindex="-1"
                                                            focusable="false" role="img">
                                                            <path
                                                                d="M8.6 15.6l-4.2-4.2L3 12.8l5.6 5.6 12-12L19.2 5 8.6 15.6z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <span class="policy-box-text">Free Cancellation, Pay Later
                                                        Available</span>
                                                </div>

                                                <div class="highlight-massage">
                                                    <svg width="220" height="12" viewBox="0 0 192 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        preserveAspectRatio="none" class="styling-svg">
                                                        <title>Highlight banner</title>
                                                        <desc>Highlight banner for urgency messaging</desc>
                                                        <path
                                                            d="M3 3C5.7945 0.205448 189 -0.99999 192 2C191 4 190 7 189 10C186 7.00002 3 9.00002 0 12C0.5 11 2.5 4 3 3Z"
                                                            fill="#FBEBEB">
                                                        </path>
                                                    </svg>
                                                    <div class="massage-text">We only have a few rooms left at $71</div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="bottom-box-content">
                                            <div class="bottom-box-content-wrapper">
                                                <div class="rating-badge">
                                                    <div class="rating-badge-text">7.9</div>
                                                </div>
                                                <div class="rating-text-wrapper">
                                                    <div class="rating-text">
                                                        <div class="reviews-text">12689 Reviews

                                                        </div>
                                                        <hr color="border">
                                                        <div class="rating-stars">4-Star Hotel</div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="box-rates-wrapper">
                                    <div class="box-rates">
                                        <div class="rates-top">
                                            <div class="deals-rates-box">
                                                <div class="deal-badge">
                                                    <div class="text-badge">
                                                        EXPRESS DEAL
                                                    </div>
                                                </div>
                                                <div class="deal-percent">
                                                    <div class="percent-rates">
                                                        43% OFF
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-notes">
                                                <div class="deals-notes-text"> We choose the hotel, you save 43%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rates-bottom">
                                            <div class="old-rates-wrapper">
                                                <div class="old-strick-rates">
                                                    <div class="old-rates">
                                                        <span class="old-currency-sign">$</span>
                                                        <span class="old-rate-number">52</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="new-rate-wrapper">
                                                <div class="new-rate">
                                                    <span class="new-currency-sign">$</span>
                                                    <span class="new-rate-number">32</span>
                                                </div>
                                                <div class="subtotal-text">Subtotal: $240</div>
                                            </div>

                                            <div class="button-wrapper">
                                                <button class="mdc-button mdc-button--unelevated card-btn"> <span
                                                        class="mdc-button__ripple"></span>Choose room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-card-wrapper">
                        <div class="listing-card">
                            <div class="listing-card-wrapper">

                                <div class="box-imgs">
                                    <div class="box-imgs-container">
                                        <div class="imgs-wrapper">
                                            <div class="wishlist-wrapper"></div>
                                            <div class="bg-img-box">

                                                <div class="inline-img-swiper swiper swiper-cards-imgs ">
                                                    <div class="inline-img-wrapper">

                                                        <div class="arrow-left-controller">
                                                            <button aria-label="Scroll to Previous image"
                                                                class="prev-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" height="24" width="24"
                                                                    aria-hidden="true" tabindex="-1" focusable="false"
                                                                    role="img" class="prev-btn-svg">
                                                                    <path
                                                                        d="M15.4 16.6L10.8 12l4.6-4.6L14 6l-6 6 6 6 1.4-1.4z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <div class="arrow-right-controller">
                                                            <button aria-label="Scroll to Previous image"
                                                                class="next-btn">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" height="24" width="24"
                                                                    aria-hidden="true" tabindex="-1" focusable="false"
                                                                    role="img" class="next-btn-svg">
                                                                    <path
                                                                        d="M8 16.6l4.6-4.6L8 7.4 9.4 6l6 6-6 6L8
                                                                    16.6z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div>
                                                            <div class="imgs-carousel">
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                                <div class="img-wrap-inline swiper-slide">
                                                                    <span class="center-img-helper"
                                                                        aria-hidden="true"></span>
                                                                    <img class="main-hero-img"
                                                                        src="../img/hotel-photo-1.jpg" alt="hotel-name">
                                                                </div>
                                                            </div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-content-wrapper">
                                    <div class="box-content">

                                        <div class="top-box-content">
                                            <div class="badges-container">
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M12 17.8l6.2 3.7-1.6-7L22 9.7l-7.2-.6L12 2.5 9.2 9.1 2 9.7l5.5 4.8-1.6 7 6.1-3.7z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Luxury</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M15.5 9.6c-.2-2.8-1.3-5.5-3.4-7.6-2.2 2.1-3.4 4.9-3.6 7.6 1.3.7 2.5 1.6 3.5 2.7 1-1.1 2.2-2 3.5-2.7zM9 12.3c-.1-.1-.3-.2-.4-.3.1.1.2.2.4.3zm6.4-.3c-.1.1-.3.2-.4.3.1-.1.3-.2.4-.3zM12 15.4C9.8 12.2 6.2 10 2 10c0 5.3 3.4 9.8 8 11.5.6.2 1.3.4 2 .5.7-.1 1.3-.3 2-.5 4.7-1.7 8-6.2 8-11.5-4.2 0-7.9 2.2-10 5.4zM8.6 12c-1.1-.7-2.3-1.3-3.6-1.6 1.3.3 2.5.9 3.6 1.6zM19 10.4c-1.3.3-2.5.9-3.6 1.6 1.1-.7 2.3-1.3 3.6-1.6z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Spa And Wellness</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path fill="none" d="M0 0h24v24H0V0z">
                                                        </path>
                                                        <path
                                                            d="M16.5 5c-1.54 0-3.04.99-3.56 2.36h-1.87C10.54 5.99 9.04 5 7.5 5 5.5 5 4 6.5 4 8.5c0 2.89 3.14 5.74 7.9 10.05l.1.1.1-.1C16.86 14.24 20 11.39 20 8.5c0-2-1.5-3.5-3.5-3.5z">
                                                        </path>
                                                        <path
                                                            d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">420+</div>
                                                </div>
                                                <div class="badge-updated-stamp">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        height="16" width="16" aria-hidden="true"
                                                        fill="currentcolor" tabindex="-1" role="img"
                                                        focusable="false">
                                                        <path
                                                            d="M16 6l2.3 2.3-4.9 4.9-4-4L2 16.6 3.4 18l6-6 4 4 6.3-6.3L22 12V6h-6z">
                                                        </path>
                                                    </svg>
                                                    <div class="badge-title">Top Booked</div>
                                                </div>

                                            </div>
                                            <h3 class="content-box-title">
                                                <div class="box-title">
                                                    <a class="box-link-title" href="#">The Venetian Resort Las
                                                        Vegas</a>
                                                </div>
                                            </h3>
                                        </div>

                                        <div class="middle-box-content">
                                            <div class="attribute-box">
                                                <div class="card-location-wrapper">
                                                    <a class="link-location" href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            height="16" width="16" aria-hidden="true"
                                                            focusable="false" tabindex="-1" role="img"
                                                            class="location-svg">
                                                            <path
                                                                d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5-1.1 2.5-2.5 2.5z">
                                                            </path>
                                                        </svg>
                                                        <div class="location-text">Downtown Las Vegas - Fremont Street Area
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="attributes-box-wrapper">
                                                <div class="amenities-box">
                                                    <div class="attribute-box">

                                                        <div class="box-svg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                height="20" width="20" aria-hidden="true"
                                                                fill="currentcolor" color="secondary.base"
                                                                tabindex="-1" focusable="false" role="img">
                                                                <path
                                                                    d="M8.6 15.6l-4.2-4.2L3 12.8l5.6 5.6 12-12L19.2 5 8.6 15.6z">
                                                                </path>
                                                            </svg>
                                                        </div>

                                                        <div class="box-amenities-text">Free Internet Access, Free
                                                            Parking,
                                                            Pets Allowed,
                                                        </div>

                                                        <div class="box-link-wrapper">
                                                            <a href="#" class="box-link" target="_blank"
                                                                rel="noopener">
                                                                <div class="box-link-text">Amenities</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="policy-box">
                                                    <div class="policy-box-svg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            height="20" width="20" aria-hidden="true"
                                                            fill="currentcolor" color="secondary.base" tabindex="-1"
                                                            focusable="false" role="img">
                                                            <path
                                                                d="M8.6 15.6l-4.2-4.2L3 12.8l5.6 5.6 12-12L19.2 5 8.6 15.6z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <span class="policy-box-text">Free Cancellation, Pay Later
                                                        Available</span>
                                                </div>

                                                <div class="highlight-massage">
                                                    <svg width="220" height="12" viewBox="0 0 192 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        preserveAspectRatio="none" class="styling-svg">
                                                        <title>Highlight banner</title>
                                                        <desc>Highlight banner for urgency messaging</desc>
                                                        <path
                                                            d="M3 3C5.7945 0.205448 189 -0.99999 192 2C191 4 190 7 189 10C186 7.00002 3 9.00002 0 12C0.5 11 2.5 4 3 3Z"
                                                            fill="#FBEBEB">
                                                        </path>
                                                    </svg>
                                                    <div class="massage-text">We only have a few rooms left at $71</div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="bottom-box-content">
                                            <div class="bottom-box-content-wrapper">
                                                <div class="rating-badge">
                                                    <div class="rating-badge-text">7.9</div>
                                                </div>
                                                <div class="rating-text-wrapper">
                                                    <div class="rating-text">
                                                        <div class="reviews-text">12689 Reviews

                                                        </div>
                                                        <hr color="border">
                                                        <div class="rating-stars">4-Star Hotel</div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="box-rates-wrapper">
                                    <div class="box-rates">
                                        <div class="rates-top">
                                            <div class="deals-rates-box">
                                                <div class="deal-badge">
                                                    <div class="text-badge">
                                                        EXPRESS DEAL
                                                    </div>
                                                </div>
                                                <div class="deal-percent">
                                                    <div class="percent-rates">
                                                        43% OFF
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="deals-notes">
                                                <div class="deals-notes-text"> We choose the hotel, you save 43%
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rates-bottom">
                                            <div class="old-rates-wrapper">
                                                <div class="old-strick-rates">
                                                    <div class="old-rates">
                                                        <span class="old-currency-sign">$</span>
                                                        <span class="old-rate-number">52</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="new-rate-wrapper">
                                                <div class="new-rate">
                                                    <span class="new-currency-sign">$</span>
                                                    <span class="new-rate-number">32</span>
                                                </div>
                                                <div class="subtotal-text">Subtotal: $240</div>
                                            </div>

                                            <div class="button-wrapper">
                                                <button class="mdc-button mdc-button--unelevated card-btn"> <span
                                                        class="mdc-button__ripple"></span>Choose room</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
