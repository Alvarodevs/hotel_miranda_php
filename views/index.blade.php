@extends('layout')
<?php
echo $rooms;
?>

@section('content')
    <!-- UPPER SECTION -->
    <section class="upper-section">
        <div class="upper-section__content">
            <p class="upper-section__title">
                The ultimate luxury experience
            </p>

            <p class="upper-section__description">
                The Perfect Base For You
            </p>
            <button class="upper-section__button button--gold">Take a tour</button>
            <button class="upper-section__button">Learn more</button>
        </div>
    </section>
    <!-- AVAILABILITY -->
    <section class="availability">
        <div class="availability__date__container">
            <div class="availability__date">
                <p class="availability__text">Arrival Date</p>
                <input class="availability__input input__date--gold " type="date" value="2020-03-24">
            </div>
            <div class="availability__date">
                <p class="availability__text">LeDeparture Date</p>
                <input class="availability__input input__date--gold " type="date" value="2020-03-30">
            </div>
        </div>
        <button class="button--gold availability__button">CHECK AVAILABILITY</button>
    </section>

    <!-- ABOUT US -->
    <section class="about">
        <div class="about__discover">
            <div class="desktop-background"></div>
            <p class="about__discover__title--small">About us</p>
            <p class="about__discover__title">Discover Our Underground.</p>
            <p class="about__discover__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                ut aliquip ex ea commodo consequat.</p>
            <button class="button-gold about__discover__button">BOOK NOW</button>
        </div>

        <div class="about__cards">
            <div class="about__card about__card--team">
                <div class="about__card__img" style="background-image:url(./assets/images/lux-hotel.jpg)"></div>
                <div class="about__card__description">
                    <img class="about__card__description__img" src="./assets/icons/home_page/team.svg" alt="Team">
                    <p class="about__card__description__title">Strong Team</p>
                    <p class="about__card__description__text">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                    <img class="about__card__description__bg" src="./assets/icons/home_page/team.svg" alt="Team">
                </div>
            </div>

            <div class="about__card about__card--room">
                <div class="about__card__img" style="background-image:url(./assets/images/lux-hotel.jpg)"></div>
                <div class="about__card__description about__card__description--black">
                    <img class="about__card__description__img" src="./assets/icons/home_page/calendar_arrow.svg"
                        alt="Calendar">
                    <p class="about__card__description__title about__card__description__title--white">Luxury
                        Room
                    </p>
                    <p class="about__card__description__text about__card__description__text--white">Lorem
                        ipsum
                        dolor sit amet,
                        consectetur adipisicing elit,
                        sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ROOMS -->
    <section class="rooms">
        <p class="rooms__title rooms__title--small">ROOMS</p>
        <p class="rooms__title">Hand Picked Rooms</p>

        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="room-home">
                        <div class="room-home__main-container">
                            <div class="room-home__bar">
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/bed.svg" alt="Bed"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/wifi.svg" alt="Wifi"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/parking.svg"
                                    alt="Parking"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/air_cond.svg"
                                    alt="Air conditioning"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/gym.svg" alt="Gym"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/no_smoke.svg"
                                    alt="No smoke"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/bar.svg" alt="Bar"></img>
                            </div>
                            <div class="room-home__img" style="background-image: url(./assets/images/room.jpg)"></div>
                        </div>
                        <div class="room-home__info">
                            <div class="room-home__info__text">
                                <p class="room-home__info__text__title">Minimal Duplex Room</p>
                                <p class="room-home__info__text__description">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="room-home__info__price">
                                <span class="room-home__info__price__amount">$375</span>
                                <span class="room-home__info__price__night">/Night</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="room-home">
                        <div class="room-home__main-container">
                            <div class="room-home__bar">
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/bed.svg" alt="Bed"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/wifi.svg" alt="Wifi"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/parking.svg"
                                    alt="Parking"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/air_cond.svg"
                                    alt="Air conditioning"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/gym.svg"
                                    alt="Gym"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/no_smoke.svg"
                                    alt="No smoke"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/bar.svg"
                                    alt="Bar"></img>
                            </div>
                            <div class="room-home__img" style="background-image: url(./assets/images/room.jpg)"></div>
                        </div>
                        <div class="room-home__info">
                            <div class="room-home__info__text">
                                <p class="room-home__info__text__title">Minimal Duplex Room</p>
                                <p class="room-home__info__text__description">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="room-home__info__price">
                                <span class="room-home__info__price__amount">$375</span>
                                <span class="room-home__info__price__night">/Night</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="room-home">
                        <div class="room-home__main-container">
                            <div class="room-home__bar">
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/bed.svg"
                                    alt="Bed"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/wifi.svg"
                                    alt="Wifi"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/parking.svg"
                                    alt="Parking"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/air_cond.svg"
                                    alt="Air conditioning"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/gym.svg"
                                    alt="Gym"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/no_smoke.svg"
                                    alt="No smoke"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/bar.svg"
                                    alt="Bar"></img>
                            </div>
                            <div class="room-home__img" style="background-image: url(./assets/images/room.jpg)"></div>
                        </div>
                        <div class="room-home__info">
                            <div class="room-home__info__text">
                                <p class="room-home__info__text__title">Minimal Duplex Room</p>
                                <p class="room-home__info__text__description">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="room-home__info__price">
                                <span class="room-home__info__price__amount">$375</span>
                                <span class="room-home__info__price__night">/Night</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="room-home">
                        <div class="room-home__main-container">
                            <div class="room-home__bar">
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/bed.svg"
                                    alt="Bed"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/wifi.svg"
                                    alt="Wifi"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/parking.svg"
                                    alt="Parking"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/air_cond.svg"
                                    alt="Air conditioning"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/gym.svg"
                                    alt="Gym"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/no_smoke.svg"
                                    alt="No smoke"></img>
                                <img class="room-home__bar__icon" src="./assets/icons/rooms/bar.svg"
                                    alt="Bar"></img>
                            </div>
                            <div class="room-home__img" style="background-image: url(./assets/images/room.jpg)"></div>
                        </div>
                        <div class="room-home__info">
                            <div class="room-home__info__text">
                                <p class="room-home__info__text__title">Minimal Duplex Room</p>
                                <p class="room-home__info__text__description">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="room-home__info__price">
                                <span class="room-home__info__price__amount">$375</span>
                                <span class="room-home__info__price__night">/Night</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nav btns -->
            <div class="swiper__buttons">
                <div class="swiper-button">
                    <div class="swiper-button--prev" style="background-image: url(./assets/icons/chevron-left.svg)"></div>
                </div>
                <div class="swiper-button">
                    <div class="swiper-button--next" style="background-image: url(./assets/icons/chevron-right.svg)">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VIDEO HOME -->
    <section class="video-home">
        <div class="video-home__container">
            <div class="video-home__text">
                <p class="video-home__text__title--small">INTRO VIDEO</p>
                <p class="video-home__text__title">Meet With Our Luxury Place.</p>
                <p class="video-home__text__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.
                </p>
                <!-- btn only desktop -->
                <button class="video-home__button--gold video-home__button--desktop">BOOK NOW</button>
            </div>
            <div class="video-home__source">
                <iframe class="video-home__source--mobile" src="https://www.youtube.com/embed/Bu3Doe45lcU?start=20&end=75"
                    title="Hotel Miranda" width="100%" height="270px"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                <iframe class="video-home__source--desktop"
                    src="https://www.youtube.com/embed/Bu3Doe45lcU?start=20&end=75" title="Hotel Miranda" width="570px"
                    height="460px"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            <button class="video-home__button--gold video-home__button--mobile">BOOK NOW</button>
        </div>
        <div class="video-home__gold-rectangle"></div>
    </section>

    <!-- FACILITIES -->
    <section class="facilities">

        <p class="facilities__title--small">FACILITIES</p>
        <p class="facilities__title">Core Features</p>

        <!-- swiper facilities -->
        <div class="swiper-facilities">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card__img" src="./assets/icons/facilities/rating.svg" alt="Rating">
                        <div class="card__img-background">01</div>
                        <p class="card__title">Have High Rating</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card__img" src="./assets/icons/facilities/clock.svg" alt="Rating">
                        <div class="card__img-background">02</div>
                        <p class="card__title">Quiet Hours</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card__img" src="./assets/icons/facilities/location.svg" alt="Rating">
                        <div class="card__img-background">03</div>
                        <p class="card__title">Best Locations</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card__img" src="./assets/icons/facilities/cancellation.svg" alt="Rating">
                        <div class="card__img-background">04</div>
                        <p class="card__title">Free Cancellation</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card__img" src="./assets/icons/facilities/payment.svg" alt="Rating">
                        <div class="card__img-background">05</div>
                        <p class="card__title">Payment Options</p>
                        <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do
                            eiusmod
                            tempor incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <img class="card__img" src="./assets/icons/facilities/offers.svg" alt="Rating">
                        <div class="card__img-background">06</div>
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
            <div class="card">
                <img class="card__img" src="./assets/icons/facilities/rating.svg" alt="Rating">
                <div class="card__img-background">01</div>
                <p class="card__title">Have High Rating</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card">
                <img class="card__img" src="./assets/icons/facilities/clock.svg" alt="Rating">
                <div class="card__img-background">02</div>
                <p class="card__title">Quiet Hours</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card">
                <img class="card__img" src="./assets/icons/facilities/location.svg" alt="Rating">
                <div class="card__img-background">03</div>
                <p class="card__title">Best Locations</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card">
                <img class="card__img" src="./assets/icons/facilities/cancellation.svg" alt="Rating">
                <div class="card__img-background">04</div>
                <p class="card__title">Free Cancellation</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card">
                <img class="card__img" src="./assets/icons/facilities/payment.svg" alt="Rating">
                <div class="card__img-background">05</div>
                <p class="card__title card__title--payment">Payment Options</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div class="card">
                <img class="card__img" src="./assets/icons/facilities/offers.svg" alt="Rating">
                <div class="card__img-background">06</div>
                <p class="card__title">Special Offers</p>
                <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                    do
                    eiusmod
                    tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </section>

    <!-- MENU -->
    <section class="menu">
        <img class="menu__img" src="./assets/icons/home_page/menu.svg" alt="Menu icon">
        <p class="menu__title--small">MENU</p>
        <p class="menu__title">Our Foods Menu</p>

        <!-- SWIPER FOODS -->
        <div class="swiper-menu">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-foods__column">
                        <div class="food">
                            <div class="food__img"
                                style="
                            background-image: url(./assets/images/menu_imgs/eggs-bacon.jpg);
                            max-height:100%">
                            </div>
                            <div class="food__text">
                                <p class="food__text__title">Eggs & Bacon</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                        <div class="food">
                            <div class="food__img"
                                style="background-image: url(./assets/images/menu_imgs/tea-coffee.jpg);
                                max-height:100%">
                            </div>

                            <div class="food__text">
                                <p class="food__text__title">Tea or Coffee</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                        <div class="food">
                            <div class="food__img"
                                style="background-image: url(./assets/images/menu_imgs/chia-oatmeal.jpg);
                                max-height:100%">
                            </div>
                            <div class="food__text">
                                <p class="food__text__title">Chia Oatmeal</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-foods__column">
                        <div class="food">
                            <div class="food__img"
                                style="background-image: url(./assets/images/menu_imgs/fruit.jpg);
                                max-height:100%">
                            </div>
                            <div class="food__text">
                                <p class="food__text__title">Fruit Parfait</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                        <div class="food">
                            <div class="food__img food__img--marmelade"
                                style="background-image: url(./assets/images/menu_imgs/marmelade.jpg);
                                max-height:100%">
                            </div>

                            <div class="food__text">
                                <p class="food__text__title">Marmelade selection</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                        <div class="food">
                            <div class="food__img"
                                style="background-image: url(./assets/images/menu_imgs/cheese.jpg);
                                max-height:100%">
                            </div>
                            <div class="food__text">
                                <p class="food__text__title">Cheese Plate</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-foods__column">
                        <div class="food">
                            <div class="food__img"
                                style="background-image: url(./assets/images/menu_imgs/fruit.jpg);
                                                    max-height:100%">
                            </div>
                            <div class="food__text">
                                <p class="food__text__title">Fruit Parfait</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                        <div class="food">
                            <div class="food__img food__img--marmelade"
                                style="background-image: url(./assets/images/menu_imgs/marmelade.jpg);
                                max-height:100%;">
                            </div>

                            <div class="food__text">
                                <p class="food__text__title">Marmelade selection</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                        <div class="food">
                            <div class="food__img"
                                style="background-image: url(./assets/images/menu_imgs/cheese.jpg);
                                                    max-height:100%">
                            </div>
                            <div class="food__text">
                                <p class="food__text__title">Cheese Plate</p>
                                <p class="food__text__description">Lorem ipsum dolor sit amet, consectetur
                                    adip isicing
                                    elit, sed do
                                    eiusmod tempor.</p>
                            </div>
                            <img class="food__arrow" src="./assets/icons/home_page/arrow-menu.svg" alt="Arrow">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-menu-buttons">
                <div class="swiper-menu__button swiper-menu__button--prev">
                    <img src="./assets/icons/chevron-left.svg" alt="">
                </div>
                <div class="swiper-menu__button swiper-menu__button--next">
                    <img src="./assets/icons/chevron-right.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- SWIPER IMAGES FOODS -->
    <div class="swiper-menu-images">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image__container">
                    <div class="image__menu" style="background-image: url(./assets/images/menu_imgs/cheese.jpg)"> </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image__container">
                    <div class="image__menu" style="background-image: url(./assets/images/menu_imgs/tea-coffee.jpg)">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image__container">
                    <div class="image__menu" style="background-image: url(./assets/images/menu_imgs/fruit.jpg)"> </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image__container">
                    <div class="image__menu" style="background-image: url(./assets/images/menu_imgs/chia-oatmeal.jpg)">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image__container">
                    <div class="image__menu" style="background-image: url(./assets/images/menu_imgs/eggs-bacon.jpg)">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image__container">
                    <div class="image__menu" style="background-image: url(./assets/images/menu_imgs/marmelade.jpg)">
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-menu-images-pagination"></div>

    </div>


    <!-- STATS DATA -->
    <section class="stats">
        <div class="stats-container">
            <div class="stats__card">
                <img src="./assets/icons/home_page/stats/rocket.svg" alt="Rocket" class="stats__card__img">
                <p class="stats__card__amount">84k<span>+</span>
                </p>
                <p class="stats__card__text">Projects are Completed</p>
            </div>
            <div class="stats__card stats__card--backers">
                <img src="./assets/icons/home_page/stats/backers.svg" alt="Rocket" class="stats__card__img">
                <p class="stats__card__amount">10M<span>+</span>
                </p>
                <p class="stats__card__text">Active Backers Around World</p>
            </div>
            <div class="stats__card">
                <img src="./assets/icons/home_page/stats/chart.svg" alt="Rocket" class="stats__card__img">
                <p class="stats__card__amount">02k<span>+</span>
                </p>
                <p class="stats__card__text">Categories Served</p>
            </div>
            <div class="stats__card">
                <img src="./assets/icons/home_page/stats/book.svg" alt="Rocket" class="stats__card__img">
                <p class="stats__card__amount">100M<span>+</span>
                </p>
                <p class="stats__card__text">Idea raised funds</p>
            </div>
        </div>
    </section>
@endsection
