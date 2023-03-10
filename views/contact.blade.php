@extends('layout')

@section('head')
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
@endsection

@section('content')
    <!-- UPPER SECTION -->
    <section class="upper-section">
        <div class="upper-section__content">
            <p class="upper-section__title">
                The ultimate luxury experience
            </p>

            <p class="upper-section__description">
                Ultimate Room
            </p>
            <div class="upper-section__links">
                <a href="/">Home</a>
                <span>|</span>
                <a class="upper-section__links--about" href="./room_details.html">Blog</a>
            </div>
        </div>
    </section>

    <!-- CONTACT INFO -->
    <section class="contact">
        <div class="contact_info_container">
            <div class="card">
                <div class="info-container">
                    <img class="info-container__img" src="./assets/icons/contact/location.svg" alt="Location">
                    <div class="text-container">
                        <p class="text-container__title">Oxygen Workspace</p>
                        <p class="text-container__description">Calle Princesa 31, planta 2</p><br>
                        <p class="text-container__description"> 28008 Madrid</p>
                    </div>
                </div>
                <div class="card__img-background">01</div>
            </div>
            <div class="card">
                <div class="info-container">
                    <img class="info-container__img" src="./assets/icons/contact/phone.svg" alt="Phone">
                    <div class="text-container">
                        <p class="text-container__title">Phone Number</p>
                        <p class="text-container__description">+34 646 19 46 75</p> <br>
                        <p class="text-container__description">+34 856 58 89 96</p>
                    </div>
                </div>
                <div class="card__img-background">02</div>
            </div>
            <div class="card">
                <div class="info-container">
                    <img class="info-container__img" src="./assets/icons/contact/mail.svg" alt="Mail">
                    <div class="text-container">
                        <p class="text-container__title">Email</p>
                        <p class="text-container__description"><a href="mailto:alvaro.develops@gmail.com"
                                target="_blank">alvaro.develops@gmail.com</a></p> <br>
                        <p class="text-container__description"><a href="https://www.linkedin.com/in/alvarodevs4you/"
                                target="_blank">Linkedin</a></p>
                    </div>
                </div>
                <div class="card__img-background">03</div>
            </div>
        </div>

    </section>

    <!-- MAP -->
    <section class="map-section">
        <div id="map"></div>
        <div class="map-section-inputs">
            <div class="map-section-inputs-address">
                <label for="input-address">Please, enter location</label>
                <input id="input-address" type="text" />
                <button id="send-address">Send</button>
            </div>
            <div class="map-section-inputs-regions">
                <label for="regions">Please, select your region</label>
                <select name="regions" id="regions">
                    <option value="" disabled selected>Select your region</option>
                </select>
            </div>
        </div>
        <div id="distances"></div>
    </section>
    <!-- FORM -->
    <form class="contact_form">
        <div class="form">
            <div class="form_column">
                <div class="form__container__input">
                    <input class="form__input" placeholder="Your full name" />
                    <img class="form__icon form__icon--user" src="./assets/icons/user_login-outlined.svg" alt="Icon">
                </div>

                <div class="form__container__input">
                    <input class="form__input" placeholder="Add phone number" />
                    <img class="form__icon" src="./assets/icons/contact/contact_form/phone.svg" alt="Icon">
                </div>
            </div>

            <div class="form_column">
                <div class="form__container__input">
                    <input class="form__input" placeholder="Enter email address" />
                    <img class="form__icon" src="./assets/icons/contact/contact_form/email_envelop.svg" alt="Icon">
                </div>

                <div class="form__container__input">
                    <input class="form__input" placeholder="Enter subject" />
                    <img class="form__icon" src="./assets/icons/contact/contact_form/subject.svg" alt="Icon">
                </div>
            </div>
        </div>
        <div class="form__container__input">
            <textarea class="form__input" placeholder="Enter message"></textarea>
            <img class="form__icon" src="./assets/icons/contact/contact_form/pencil.svg" alt="Icon">
        </div>
        <div class="button__container">
            <button class="form__button" type="submit">SEND</button>
        </div>
    </form>
@endsection

<?php $apiKey = $_ENV['GOOGLE_API_KEY']; ?>

@section('scripts')
    <script src="../js-scripts/utils/hotels.js"></script>
    <script src="../js-scripts/utils/comunitiesBorders.js"></script>
    <script src="../js-scripts/utils/regions.js"></script>
    <script type="module" src="../js-scripts/maps.js"></script>
    <script defer src="https://maps.googleapis.com/maps/api/js?key={{ $apiKey }}&callback=initMap"></script>
@endsection
