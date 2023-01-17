@extends('layout')

@section('content')
<!-- UPPER SECTION -->
	<section class="upper-section">
		<div class="upper-section__content">
			<p class="upper-section__title">
				The ultimate luxury experience
			</p>

			<p class="upper-section__description">
				Our Offers
			</p>
			<div class="upper-section__links">
				<a href="/">Home</a>
				<span>|</span>
				<a class="upper-section__links--about" href="./offers.html">Offers</a>
			</div>
		</div>
	</section>

	<!-- OFFERS -->
	<section class="offers">
		<div class="offer">
			<div class="offer__image">
				<div class="image" style="background-image: url(./assets/images/room.jpg)" alt="Room">
				</div>
				<div class="offer__text">
					<div class="offer__prices">
						<p class="offer__prices--old line-through">$500<span class="line-through"> /Night</span></p>
						<p class="offer__prices--new">$345<span> /Night</span></p>
					</div>
					<div class="offer__text__titles">
						<p class="offer__text__subtitle">Double Bed</p>
						<h3 class="offer__text__title">Luxury Double Bed</h3>
					</div>
					<hr>
					<div class="offer__desc__amenities">
						<p class="offer__text__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
							commodo consequat. Duis
							aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<div class="offer__amenities">
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/air_con.svg" alt="Air con">
								<p class="item__text">Air conditioner</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/wifi.svg" alt="Wifi">
								<p class="item__text">High speed WiFi</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/breakfast.svg"
									alt="Breakfast">
								<p class="item__text">Breakfast</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/kitchen.svg" alt="Kitchen">
								<p class="item__text">Kitchen</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/cleaning.svg" alt="Cleaning">
								<p class="item__text">Cleaning</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/shower.svg" alt="Shower">
								<p class="item__text">Shower</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/grocery.svg" alt="Grocery">
								<p class="item__text">Grocery</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/bed.svg" alt="Single Bed">
								<p class="item__text">Single Bed</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/shop_near.svg"
									alt="Shop near">
								<p class="item__text">Shop near</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/towels.svg" alt="Towels">
								<p class="item__text">Towels</p>
							</div>
						</div>
					</div>
					<button class="offer__button">BOOK NOW</button>
				</div>
			</div>
		</div>
		<div class="offer">
			<div class="offer__image">
				<div class="image" style="background-image: url(./assets/images/room.jpg)" alt="Room">
				</div>
				<div class="offer__text">
					<div class="offer__prices">
						<p class="offer__prices--old line-through">$500<span class="line-through"> /Night</span></p>
						<p class="offer__prices--new">$345<span> /Night</span></p>
					</div>
					<div class="offer__text__titles">
						<p class="offer__text__subtitle">Double Bed</p>
						<h3 class="offer__text__title">Luxury Double Bed</h3>
					</div>
					<hr>
					<div class="offer__desc__amenities">
						<p class="offer__text__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
							commodo consequat. Duis
							aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<div class="offer__amenities">
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/air_con.svg" alt="Air con">
								<p class="item__text">Air conditioner</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/wifi.svg" alt="Wifi">
								<p class="item__text">High speed WiFi</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/breakfast.svg" alt="Breakfast">
								<p class="item__text">Breakfast</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/kitchen.svg" alt="Kitchen">
								<p class="item__text">Kitchen</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/cleaning.svg" alt="Cleaning">
								<p class="item__text">Cleaning</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/shower.svg" alt="Shower">
								<p class="item__text">Shower</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/grocery.svg" alt="Grocery">
								<p class="item__text">Grocery</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/bed.svg" alt="Single Bed">
								<p class="item__text">Single Bed</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/shop_near.svg" alt="Shop near">
								<p class="item__text">Shop near</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/towels.svg" alt="Towels">
								<p class="item__text">Towels</p>
							</div>
						</div>
					</div>
					<button class="offer__button">BOOK NOW</button>
				</div>
			</div>
		</div>
		<div class="offer">
			<div class="offer__image">
				<div class="image" style="background-image: url(./assets/images/room.jpg)" alt="Room">
				</div>
				<div class="offer__text">
					<div class="offer__prices">
						<p class="offer__prices--old line-through">$500<span class="line-through"> /Night</span></p>
						<p class="offer__prices--new">$345<span> /Night</span></p>
					</div>
					<div class="offer__text__titles">
						<p class="offer__text__subtitle">Double Bed</p>
						<h3 class="offer__text__title">Luxury Double Bed</h3>
					</div>
					<hr>
					<div class="offer__desc__amenities">
						<p class="offer__text__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
							commodo consequat. Duis
							aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<div class="offer__amenities">
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/air_con.svg" alt="Air con">
								<p class="item__text">Air conditioner</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/wifi.svg" alt="Wifi">
								<p class="item__text">High speed WiFi</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/breakfast.svg" alt="Breakfast">
								<p class="item__text">Breakfast</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/kitchen.svg" alt="Kitchen">
								<p class="item__text">Kitchen</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/cleaning.svg" alt="Cleaning">
								<p class="item__text">Cleaning</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/shower.svg" alt="Shower">
								<p class="item__text">Shower</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/grocery.svg" alt="Grocery">
								<p class="item__text">Grocery</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/bed.svg" alt="Single Bed">
								<p class="item__text">Single Bed</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/shop_near.svg" alt="Shop near">
								<p class="item__text">Shop near</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/towels.svg" alt="Towels">
								<p class="item__text">Towels</p>
							</div>
						</div>
					</div>
					<button class="offer__button">BOOK NOW</button>
				</div>
			</div>
		</div>
		<div class="offer">
			<div class="offer__image">
				<div class="image" style="background-image: url(./assets/images/room.jpg)" alt="Room">
				</div>
				<div class="offer__text">
					<div class="offer__prices">
						<p class="offer__prices--old line-through">$500<span class="line-through"> /Night</span></p>
						<p class="offer__prices--new">$345<span> /Night</span></p>
					</div>
					<div class="offer__text__titles">
						<p class="offer__text__subtitle">Double Bed</p>
						<h3 class="offer__text__title">Luxury Double Bed</h3>
					</div>
					<hr>
					<div class="offer__desc__amenities">
						<p class="offer__text__description">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
							commodo consequat. Duis
							aute irure dolor in reprehend erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
						<div class="offer__amenities">
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/air_con.svg" alt="Air con">
								<p class="item__text">Air conditioner</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/wifi.svg" alt="Wifi">
								<p class="item__text">High speed WiFi</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/breakfast.svg" alt="Breakfast">
								<p class="item__text">Breakfast</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/kitchen.svg" alt="Kitchen">
								<p class="item__text">Kitchen</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/cleaning.svg" alt="Cleaning">
								<p class="item__text">Cleaning</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/shower.svg" alt="Shower">
								<p class="item__text">Shower</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/grocery.svg" alt="Grocery">
								<p class="item__text">Grocery</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/bed.svg" alt="Single Bed">
								<p class="item__text">Single Bed</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/shop_near.svg" alt="Shop near">
								<p class="item__text">Shop near</p>
							</div>
							<div class="offer__amenities__item item">
								<img class="item__image" src="./assets/icons/room_detail/amenities/towels.svg" alt="Towels">
								<p class="item__text">Towels</p>
							</div>
						</div>
					</div>
					<button class="offer__button">BOOK NOW</button>
				</div>
			</div>
		</div>
	</section>
	<!-- POPULAR LIST -->
	<section class="popular rooms-list">
			<div class="popular__titles">
				<div class="popular__titles__subtitle">Popular List</div>
				<div class="popular__titles__title">Popular Rooms</div>
			</div>

			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="room__container room__container--grid">
							<div class="room__img room__img--grid" style="background-image: url(./assets/images/room.jpg)">
							</div>
							<div class="room__content room__content--grid room__content--offer">
								<div class="room__bar room__bar--grid">
									<img class="room__bar__icon" src="./assets/icons/rooms/bed.svg" alt="Bed"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/wifi.svg" alt="Wifi"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/parking.svg" alt="Parking"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/air_cond.svg"
										alt="Air conditioning"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/gym.svg" alt="Gym"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/no_smoke.svg" alt="No smoke"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/bar.svg" alt="Bar"></img>
								</div>
								<div class="room__text room__text--grid">
									<p class="room__text__title">Minimal Duplex Room</p>
									<p class="room__text__description room__text__description--grid">Lorem ipsum dolor sit amet,
										consectetur adipi
										sicing elit,
										sed do eiusmod tempor.</p>
								</div>
								<div class="room__price">
									<p class="room__price__text room__price__amount">$345<span>/Night</span></p>

									<p class="room__price__text room__price__booking">Booking Now</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="room__container room__container--grid">
							<div class="room__img room__img--grid" style="background-image: url(./assets/images/room.jpg)">
							</div>
							<div class="room__content room__content--grid room__content--offer">
								<div class="room__bar room__bar--grid">
									<img class="room__bar__icon" src="./assets/icons/rooms/bed.svg" alt="Bed"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/wifi.svg" alt="Wifi"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/parking.svg" alt="Parking"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/air_cond.svg" alt="Air conditioning"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/gym.svg" alt="Gym"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/no_smoke.svg" alt="No smoke"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/bar.svg" alt="Bar"></img>
								</div>
								<div class="room__text room__text--grid">
									<p class="room__text__title">Minimal Duplex Room</p>
									<p class="room__text__description room__text__description--grid">Lorem ipsum dolor sit amet,
										consectetur adipi
										sicing elit,
										sed do eiusmod tempor.</p>
								</div>
								<div class="room__price">
									<p class="room__price__text room__price__amount">$345<span>/Night</span></p>

									<p class="room__price__text room__price__booking">Booking Now</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="room__container room__container--grid">
							<div class="room__img room__img--grid" style="background-image: url(./assets/images/room.jpg)">
							</div>
							<div class="room__content room__content--grid room__content--offer">
								<div class="room__bar room__bar--grid">
									<img class="room__bar__icon" src="./assets/icons/rooms/bed.svg" alt="Bed"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/wifi.svg" alt="Wifi"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/parking.svg" alt="Parking"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/air_cond.svg" alt="Air conditioning"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/gym.svg" alt="Gym"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/no_smoke.svg" alt="No smoke"></img>
									<img class="room__bar__icon" src="./assets/icons/rooms/bar.svg" alt="Bar"></img>
								</div>
								<div class="room__text room__text--grid">
									<p class="room__text__title">Minimal Duplex Room</p>
									<p class="room__text__description room__text__description--grid">Lorem ipsum dolor sit amet,
										consectetur adipi
										sicing elit,
										sed do eiusmod tempor.</p>
								</div>
								<div class="room__price">
									<p class="room__price__text room__price__amount">$345<span>/Night</span></p>

									<p class="room__price__text room__price__booking">Booking Now</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
@endsection
