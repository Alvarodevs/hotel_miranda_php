@extends('layout')

@section('content')
<!-- UPPER SECTION -->
    <section class="upper-section">
        <div class="upper-section__content">
            <p class="upper-section__title">
                The ultimate luxury experience
            </p>

            <p class="upper-section__description">
                About Us
            </p>
            <div class="upper-section__links">
                <a href="/">Home</a>
                <span>|</span>
                <a class="upper-section__links--about" href="/about_us.html">About</a>
            </div>
        </div>
    </section>

    <!-- VIDEO SECTION -->
    <section class="video-about">
        <iframe class="video-about__source video-about__source--mobile" src="https://www.youtube.com/embed/Bu3Doe45lcU?start=20&end=75"
            title="Hotel Miranda" width="100%"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
        <iframe class="video-about__source video-about__source--desktop" src="https://www.youtube.com/embed/Bu3Doe45lcU?start=20&end=75"
            title="Hotel Miranda" width="100%" height="650px"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>


        <p class="video-about__description">
            Hello. Our hotel has been present for over 20 years. We make the best for all our customers.
        </p>
    </section>

    <!-- ICONS SERVICES -->
    <section class="icons">
        <div class="icons--display">
            <div class="icons__service">
                <div class="icons__service__img" style="background-image: url(./assets/icons/about_us/breakfast.svg)"></div>
                <p class="icons__service__title">BREAKFAST</p>
            </div>
            <div class="icons__service">
                <div class="icons__service__img icons__service__img--plane" style="background-image: url(./assets/icons/about_us/plane.svg)"></div>
                <p class="icons__service__title">AIRPORT PICKUP</p>
            </div>
            <div class="icons__service">
                <div class="icons__service__img" style="background-image: url(./assets/icons/about_us/location.svg)"></div>
                <p class="icons__service__title">CITY GUIDE</p>
            </div>
            <div class="icons__service icons__service--bbq">
                <div class="icons__service__img" style="background-image: url(./assets/icons/about_us/bbq.svg)"></div>
                <p class="icons__service__title icons__service__title">BBQ PARTY</p>
            </div>
            <div class="icons__service">
                <div class="icons__service__img" style="background-image: url(./assets/icons/about_us/luxury_room.svg)"></div>
                <p class="icons__service__title">LUXURY ROOM</p>
            </div>
        </div>
    </section>

    <!-- RESTAURANT -->
    <section class="restaurant">
        <div class="restaurant__card">
            <div class="restaurant__img--container">
                <div class="restaurant__img" style="background-image: url(./assets/images/restaurant.jpg)"></div>
            </div>
            <div class="restaurant__info">
                <p class="restaurant__title--small">RESTAURANT</p>
                <p class="restaurant__title">Get Restaurant Facilities & Many Other More</p>
                <p class="restaurant__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tem por incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <button class="button--gold">TAKE A TOUR</button>
            </div>
        </div>

    </section>

    <!-- FACILITIES DARK THEME-->
    <section class="facilities facilities--dark">

        <p class="facilities__title--small">FACILITIES</p>
        <p class="facilities__title">Core Features</p>

        <!-- swiper facilities -->
        <div class="swiper-facilities">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card card--dark">
                        <img class="card__img" src="./assets/icons/facilities/rating.svg" alt="Rating">
                        <div class="card__img-background card__img-background--dark">01</div>
                        <p class="card__title">Have High Rating</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card--dark">
                        <img class="card__img" src="./assets/icons/facilities/clock.svg" alt="Rating">
                        <div class="card__img-background card__img-background--dark">02</div>
                        <p class="card__title">Quiet Hours</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card--dark">
                        <img class="card__img" src="./assets/icons/facilities/location.svg" alt="Rating">
                        <div class="card__img-background card__img-background--dark">03</div>
                        <p class="card__title">Best Locations</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card--dark">
                        <img class="card__img" src="./assets/icons/facilities/cancellation.svg" alt="Rating">
                        <div class="card__img-background card__img-background--dark">04</div>
                        <p class="card__title">Free Cancellation</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card--dark">
                        <img class="card__img" src="./assets/icons/facilities/payment.svg" alt="Rating">
                        <div class="card__img-background card__img-background--dark">05</div>
                        <p class="card__title">Payment Options</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card card--dark">
                        <img class="card__img" src="./assets/icons/facilities/offers.svg" alt="Rating">
                        <div class="card__img-background card__img-background--dark">06</div>
                        <p class="card__title">Special Offers</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-facilities__pagination"></div>
        </div>

        <!-- grid facilities -->
        <div class="grid-facilities">
            <div class="card card--dark">
                <img class="card__img" src="./assets/icons/facilities/rating.svg" alt="Rating">
                <div class="card__img-background card__img-background--dark">01</div>
                <p class="card__title">Have High Rating</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card card--dark">
                <img class="card__img" src="./assets/icons/facilities/rating.svg" alt="Rating">
                <div class="card__img-background card__img-background--dark">02</div>
                <p class="card__title">Quiet Hours</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card card--dark">
                <img class="card__img" src="./assets/icons/facilities/location.svg" alt="Rating">
                <div class="card__img-background card__img-background--dark">03</div>
                <p class="card__title">Best Locations</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card card--dark">
                <img class="card__img" src="./assets/icons/facilities/cancellation.svg" alt="Rating">
                <div class="card__img-background card__img-background--dark">04</div>
                <p class="card__title">Free Cancellation</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card card--dark">
                <img class="card__img" src="./assets/icons/facilities/payment.svg" alt="Rating">
                <div class="card__img-background card__img-background--dark">05</div>
                <p class="card__title card__title--payment">Payment Options</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card card--dark">
                <img class="card__img" src="./assets/icons/facilities/offers.svg" alt="Rating">
                <div class="card__img-background card__img-background--dark">06</div>
                <p class="card__title">Special Offers</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </section>

    <!-- COUNTER -->
    <section class="counter">
        <p class="counter__title--small">COUNTER</p>
        <p class="counter__title">Some Fun Facts</p>

        <div class="counter__cards">
            <div class="counter__card">
                <div class="main-container">
                    <img src="./assets/icons/about_us/fun_facts/happy_users.svg" alt="Happy users">
                    <div class="main-container__info">
                        <p class="amount">8000</p>
                        <p class="fact">Happy Users</p>
                    </div>
                </div>
                <img class="arrow-icon" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
            </div>
            <div class="counter__card">
                <div class="main-container">
                    <img src="./assets/icons/about_us/fun_facts/reviews.svg" alt="Reviews">
                    <div class="main-container__info">
                        <p class="amount">10M</p>
                        <p class="fact">Reviews & Appriciate</p>
                    </div>
                </div>
                <img class="arrow-icon" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
            </div>
            <div class="counter__card">
                <div class="main-container">
                    <img src="./assets/icons/about_us/fun_facts/coverage.svg" alt="Coverage">
                    <div class="main-container__info">
                        <p class="amount">100</p>
                        <p class="fact">Country Coverage</p>
                    </div>
                </div>
                <img class="arrow-icon" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
            </div>
        </div>

        <div class="swiper-counter">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="./assets/images/lux-hotel.jpg" alt="Hotel">
                </div>
                <div class="swiper-slide">
                    <img src="./assets/images/restaurant.jpg" alt="Restaurant">
                </div>
            </div>

            <div class="swiper-counter-pagination"></div>
        </div>

        <div class="counter__images">
            <img src="./assets/images/lux-hotel.jpg" alt="Hotel">
            <img src="./assets/images/restaurant.jpg" alt="Restaurant">
        </div>

    </section>
@endsection
