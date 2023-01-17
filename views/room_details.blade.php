@extends('layout')

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
				<a class="upper-section__links--about" href="./room_details.html">Room Details</a>
			</div>
		</div>
	</section>

	<!-- ROOM DETAILS -->
	<section class="room-details">
		<div class="room-details__container">
			<div class="room-details__info__container">
				<div class="room-details__info">
					<div class="room-details__info__text">
						<p class="room-details__info__title--small">DOUBLE BED</p>
						<p class="room-details__info__title">Luxury Double Bed</p>
					</div>
					<div class="room-details__info__price">
						<p class="room-details__info__price__amount">$375<span
								class="room-details__info__price__night">/Night</span>
						</p>
					</div>
				</div>
				<div class="room-details__image__container">
					<img class="room-details__image" src="./assets/images/room.jpg" alt="Room">
				</div>
			</div>

			<div class="room-details__availability">
				<p class="room-details__availability__title">Check Availability</p>
				<p class="room-details__availability__label">Check In</p>
				<input class="room-details__availability__input availability__input" type="date">
				<p class="room-details__availability__label">Check Out</p>
				<input class="room-details__availability__input availability__input" type="date">
				<button class="button--gold">CHECK AVAILABILITY</button>
			</div>
		</div>
		<p class="room-details__description">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
			dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
			ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
			fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
			deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
			accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
			quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
			aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
			nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
			sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
		</p>
	</section>

	<!-- AMENITIES -->
	<section class="amenities">
		<p class="amenities__title">Amenities</p>
		<hr>
		<div class="amenities__grid">
			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/air_con.svg"
					alt="Air conditioner">
				<p class="amenities__item__text">Air conditioner</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image amenities__item__image--wifi"
					src="./assets/icons/room_detail/amenities/wifi.svg" alt="Wifi">
				<p class="amenities__item__text">High speed WiFi</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/breakfast.svg" alt="Breakfast">
				<p class="amenities__item__text">Breakfast</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/kitchen.svg" alt="Kitchen">
				<p class="amenities__item__text">Kitchen</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/cleaning.svg" alt="Cleaning">
				<p class="amenities__item__text">Cleaning</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/shower.svg" alt="Shower">
				<p class="amenities__item__text">Shower</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/grocery.svg" alt="Grocery">
				<p class="amenities__item__text">Grocery</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/bed.svg" alt="Bed">
				<p class="amenities__item__text">Single bed</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/shop_near.svg" alt="Shop near">
				<p class="amenities__item__text">Shop near</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/towels.svg" alt="Towels">
				<p class="amenities__item__text">Towels</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/support.svg"
					alt="Online support">
				<p class="amenities__item__text">24/7 Online Support</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/locker.svg" alt="Locker">
				<p class="amenities__item__text">Strong Locker</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/security.svg"
					alt="Smart security">
				<p class="amenities__item__text">Smart Security</p>
			</div>

			<div class="amenities__item">
				<img class="amenities__item__image" src="./assets/icons/room_detail/amenities/expert.svg" alt="Expert team">
				<p class="amenities__item__text">Expert Team</p>
			</div>
		</div>
	</section>

	<!-- FOUNDER CARD -->
	<section class="founder">
		<div class="founder__card">
			<div class="founder__card__avatar">
				<img class="founder__card__avatar founder__card__avatar__image" src="./assets/images/founder.jpg"
					alt="Founder">
				<div class="founder__card__avatar__check">
					<img src="./assets/icons/check_mark.svg" alt="Check">
				</div>
			</div>

			<p class="founder__card__name">Rosalina D. William</p>
			<p class="founder__card__position">Founder, Qux Co.</p>
			<p class="founder__card__description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
				eiusmod tempor incididunt ut labore et dolore.
			</p>
		</div>

	</section>

	<!-- CANCELLATION -->
	<section class="cancellation">
		<div class="cancellation__title">
			Cancellation
		</div>
		<div class="cancellation__description">
			Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat
			metus nec,
			luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.
		</div>
	</section>

	<!-- SLIDER -->
	<section class="related-rooms">
		<div class="related-rooms__title">
			Related rooms
		</div>

		<div class="swiper">
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<div class="room-home">
						<div class="room-home__main-container">
							<div class="room-home__bar room-home__bar--related">
								<img class="room-home__bar__icon" src="./assets/icons/rooms/bed.svg" alt="Bed"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/wifi.svg" alt="Wifi"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/parking.svg" alt="Parking"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/air_cond.svg"
									alt="Air conditioning"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/gym.svg" alt="Gym"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/no_smoke.svg" alt="No smoke"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/bar.svg" alt="Bar"></img>
							</div>
							<div class="room-home__img"></div>
						</div>
						<div class="room-home__info room-home__info--related">
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
							<div class="room-home__bar room-home__bar--related">
								<img class="room-home__bar__icon" src="./assets/icons/rooms/bed.svg" alt="Bed"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/wifi.svg" alt="Wifi"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/parking.svg" alt="Parking"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/air_cond.svg"
									alt="Air conditioning"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/gym.svg" alt="Gym"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/no_smoke.svg" alt="No smoke"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/bar.svg" alt="Bar"></img>
							</div>
							<div class="room-home__img"></div>
						</div>
						<div class="room-home__info room-home__info--related">
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
							<div class="room-home__bar room-home__bar--related">
								<img class="room-home__bar__icon" src="./assets/icons/rooms/bed.svg" alt="Bed"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/wifi.svg" alt="Wifi"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/parking.svg" alt="Parking"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/air_cond.svg"
									alt="Air conditioning"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/gym.svg" alt="Gym"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/no_smoke.svg" alt="No smoke"></img>
								<img class="room-home__bar__icon" src="./assets/icons/rooms/bar.svg" alt="Bar"></img>
							</div>
							<div class="room-home__img"></div>
						</div>
						<div class="room-home__info room-home__info--related">
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
			<div class="swiper__buttons swiper__buttons--related">
				<div class="swiper-button">
					<div class="swiper-button--prev"></div>
				</div>
				<div class="swiper-button">
					<div class="swiper-button--next"></div>
				</div>
			</div>
		</div>
	</section>
@endsection
