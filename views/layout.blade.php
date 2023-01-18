<!DOCTYPE html>
<html lang="en">

@section('head')

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel Miranda</title>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="../styles/styles.css" />
        @yield('head')

    </head>

    <body>

    @section('header')
        <header class="header__container">
            <div class="header__container__content">
                <p class="header__container__content__text">We Make Your Feel Comfortable</p>
                <div class="navbar__container">
                    <div class="nav__links">
                        <div class="burger-icon ">
                            <img class="burger-icon--open" src="../assets/icons/mobile_view/menu_burger.svg" alt="Menu">
                            <img class="burger-icon--close hidden" src="../assets/icons/mobile_view/close_btn.svg"
                                alt="Close">
                        </div>

                        <!-- Nav for mobile -->
                        <nav class="nav__links__burger nav__links__burger--show">
                            <ul class="navbar__nav__list navbar__nav__list--mobile">
                                <li class="navbar__nav__list__link"><a href="../about.php">About</a></li>
                                <li class="navbar__nav__list__link"><a href="../rooms_list.php">Rooms</a></li>
                                <li class="navbar__nav__list__link"><a href="../offers.php">Offers</a></li>
                                <li class="navbar__nav__list__link"><a href="../contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- Nav for mobile -->

                        <div class="nav__menu__links">
                            <div class="nav__menu__links__home">
                                <div class="nav__menu__links__home__logo"><a href="./">H</a></div>

                                <div class="nav__menu__links__home__text">
                                    <span>HOTEL</span>
                                    <br>
                                    MIRANDA
                                </div>
                            </div>

                            <!-- Nav for desktop -->
                            <div class="nav__menu__links__desktop">
                                <ul class="navbar__nav__list navbar__nav__list--desktop">
                                    <li class="navbar__nav__list__link"><a href="./about.php">About</a></li>
                                    <li class="navbar__nav__list__link"><a href="./rooms_grid.php">Rooms</a></li>
                                    <li class="navbar__nav__list__link"><a href="./offers.php">Offers</a></li>
                                    <li class="navbar__nav__list__link"><a href="./contact.php">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav for desktop -->

                        </div>
                    </div>
                    <div class="navbar__container__icon">
                        <div class="navbar__container__icon__container login">
                            <img src="../assets/icons/user_login-outlined.svg" alt="Login">
                        </div>
                        <div class="navbar__container__icon__container search">
                            <img src="../assets/icons/magnify-glass.svg" alt="Search">
                        </div>
                    </div>
                </div>
            </div>
        </header>

    @section('content')
    @show

    @section('footer')
        <footer class="footer">
            <div class="footer__content" style="background-image: url(./assets/images/footer-background.svg)">

                <div class="footer__description">
                    <div class="logo">
                        <div class="logo__back">
                            <p class="logo__letter">H</p>
                        </div>
                        <div class="logo__text">
                            <span>HOTEL</span>
                            <br>
                            MIRANDA
                        </div>
                    </div>

                    <p class="footer__description__text">
                        Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed
                        doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitat ion ullamco laboris nisi.
                    </p>
                    <div class="footer__description__social-media">
                        <a href="#" class="social-media-link">
                            <img class="social-media-link__icon" src="../assets/icons/footer/social_media/facebook.svg"
                                alt="Facebook">
                        </a>
                        <a href="#" class="social-media-link">
                            <img class="social-media-link__icon" src="../assets/icons/footer/social_media/twitter.svg"
                                alt="Twitter">
                        </a>
                        <a href="#" class="social-media-link">
                            <img class="social-media-link__icon" src="../assets/icons/footer/social_media/behance.svg"
                                alt="Behance">
                        </a>
                        <a href="#" class="social-media-link">
                            <img class="social-media-link__icon" src="../assets/icons/footer/social_media/linkedin.svg"
                                alt="Linkedin">
                        </a>
                        <a href="#" class="social-media-link">
                            <img class="social-media-link__icon" src="../assets/icons/footer/social_media/youtube.svg"
                                alt="Youtube">
                        </a>
                    </div>
                </div>

                <div class="footer__services">
                    <p class="footer__services__title">Services.</p>
                    <div class="footer__services__container">
                        <div class="footer__services__column">
                            <p class="footer__services__text">+ Resturent & Bar</p>
                            <p class="footer__services__text">+ Swimming Pool</p>
                            <p class="footer__services__text">+ Wellness & Spa</p>
                            <p class="footer__services__text">+ Restaurant</p>
                            <p class="footer__services__text">+ Conference Room</p>
                            <p class="footer__services__text">+ Coctail Party House</p>
                        </div>
                        <div class="footer__services__column">
                            <p class="footer__services__text">+ Gaming Zone</p>
                            <p class="footer__services__text">+ Marrige Party</p>
                            <p class="footer__services__text">+ Party Planning</p>
                            <p class="footer__services__text">+ Tour Consultancy</p>
                        </div>
                    </div>
                </div>

                <div class="footer__contact">
                    <p class="footer__contact__title">Contact us.</p>

                    <div class="footer__contact__container">
                        <img class="footer__contact__img" src="../assets/icons/contact/phone.svg" alt="Phone">
                        <div class="footer__contact__data">
                            <p class="footer__contact__data__title">Phone number</p>
                            <p class="footer__contact__data__text">+987 876 765 76 577</p>
                        </div>
                    </div>

                    <div class="footer__contact__container">
                        <img class="footer__contact__img" src="../assets/icons/contact/mail.svg" alt="Email">
                        <div class="footer__contact__data">
                            <p class="footer__contact__data__title">Phone number</p>
                            <p class="footer__contact__data__text">+987 876 765 76 577</p>
                        </div>
                    </div>

                    <div class="footer__contact__container">
                        <img class="footer__contact__img" src="../assets/icons/contact/location.svg" alt="Address">
                        <div class="footer__contact__data">
                            <p class="footer__contact__data__title">Phone number</p>
                            <p class="footer__contact__data__text">+987 876 765 76 577</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer__copyright">
                <p class="footer__copyright__copy footer__copyright__text">Copyright By@<a
                        href="https://www.linkedin.com/in/alvarodevs4you/">Alvarodevs</a></p>
                <div class="footer__copyright__links">
                    <a class="footer__copyright__text footer__copyright__link" href="#">Terms of use</a>
                    <p class="footer__copyright__text">|</p>
                    <a class="footer__copyright__text footer__copyright__link" href="#">Privacy Environmental
                        Policy</a>
                </div>
            </div>
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script type="module" src="../js-scripts/index.js"></script>


        <script type="module" src="../js-scripts/swiper.js"></script>
        <script type="module" src="../js-scripts/swiperCounter.js"></script>
        <script type="module" src="../js-scripts/swiperFacilities.js"></script>
        <script type="module" src="../js-scripts/swiperMenu.js"></script>
        <script type="module" src="../js-scripts/swiperMenuImages.js"></script>
        <script type="module" src="../js-scripts/swiperRoomList.js"></script>

    @section('scripts')
    @show

</body>

</html>
