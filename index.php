

<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Главная</title>
		<meta charset="UTF-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="css/style.min.css">
		<link rel="shortcut icon" href="favicon.ico">
		<!-- <meta name="robots" content="noindex, nofollow"> -->
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?php
			if($_COOKIE['user'] == ''):
		?>
		<div class="wrapper">
			<header class="header">
				<div class="header__wrapper">
					<div class="header__top top-header">
						<div class="top-header__container _container">
							<div class="top-header__body">
								<a class="top-header__logo logo-item" href="index.php">
									<svg class="logo-header logo-ico">
										<use xlink:href="sprite.svg#logo"></use>
									</svg>
									<div class="logo-item__name"><span class="logo-item__blue-rect"><span>Транспортная</span></span>Мойка</div>
								</a>
								<div class="top-header__info info-item">
									<div class="top-header__geo geo-item">
										<svg class="geo-ico">
											<use xlink:href="sprite.svg#geo"></use>
										</svg>
										<div class="geo-item__addresses">
											<div class="geo-item__address">ул. Потанина, 24б</div>
											<div class="geo-item__address">Пушкина, 32/4</div>
										</div>
									</div>
									<div class="top-header__callback callback-item">
										<svg class="phone-ico">
											<use xlink:href="sprite.svg#phone"></use>
										</svg>
										<div class="callback-item__phones">
											<a class="callback-item__phone" href="tel:87321412463">+7 732 141 24 63</a>
											<a class="callback-item__phone" href="tel:87225470911">+7 722 547 09 11</a>
										</div>
									</div>
								</div>
								<div class="top-header__actions">
									<a class="top-header__button" href=""><span>Моторные масла</span></a>
									<a class="top-header__profile" href="sign-in.html">
										<svg class="profile-ico">
											<use xlink:href="sprite.svg#profile"></use>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="header__bottom bottom-header">
						<div class="bottom-header__container _container">
							<div class="bottom-header__body">
								<div class="header__menu menu">
									<nav class="menu__body">
										<ul class="menu__list">
											<li class="menu__item">
												<a class="menu__link _goto-block" href="page__gallery">Галерея</a>
											</li>
											<li class="menu__item">
												<a class="menu__link _goto-block" href="#page__service">Услуги</a>
											</li>
											<li class="menu__item">
												<a class="menu__link _goto-block" href="#page__features">Преимущества</a>
											</li>
											<li class="menu__item" data-da=".menu__list-second,630,first">
												<a class="menu__link _goto-block" href="#page__booking">Бронирование</a>
											</li>
											<li data-da=".menu__list-second,800,0" class="menu__item">
												<a class="menu__link _goto-block" href="">Отзывы</a>
											</li>
											<li data-da=".menu__list-second,800,1" class="menu__item">
												<a class="menu__link _goto-block" href="">Новости и акции</a>
											</li>
										</ul>
										<ul class="menu__list-second"></ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<main class="page">
			    <section class="page__gallery gallery _scr-item">
					<div class="gallery__body"></div>
			    </section>
				<section class="page__service service _scr-item">
					<div class="service__container _container">
						<div class="service__body">
							<div class="service__cards cards-row">
								<div class="cards-row__column">
									<div class="cards-row__item item-card item-card_green">
										<svg class="spray-ico">
											<use xlink:href="sprite.svg#spray"></use>
										</svg>
										<div class="item-card__content">
											<h2 class="item-card__title">Химчистка</h2>
											<div class="item-card__text">Качественная и высокотехнологичная чистка с помощью специальных химических средств</div>
										</div>
									</div>
								</div>
								<div class="cards-row__column">
									<div class="cards-row__item item-card item-card_red">
										<svg class="engine-ico">
											<use xlink:href="sprite.svg#engine"></use>
										</svg>
										<div class="item-card__content">
											<h2 class="item-card__title">Мойка двигателя </h2>
											<div class="item-card__text">Особая техника воостановления внешнего вида двигателя</div>
										</div>
									</div>
								</div>
								<div class="cards-row__column">
									<div class="cards-row__item item-card item-card_blue">
										<svg class="polisher-ico">
											<use xlink:href="sprite.svg#polisher"></use>
										</svg>
										<div class="item-card__content">
											<h2 class="item-card__title">Полировка</h2>
											<div class="item-card__text">Полная отшливовка до кристальной белизны</div>
										</div>
									</div>
								</div>
							</div>
							<div class="service__button">Оставить заявку</div>
							<h1 class="service__title">Сервис</h1>
						</div>
					</div>
				</section>
				<section class="page__features features _scr-item">
					<div class="features__wrapper">
						<div class="features__container _container">
						<h2 class="features__title">Почему мы?</h2>
							<div class="features__body">
								<div class="features__content">
									<div class="features__option option-feature option-feature_quality">
										<div class="option-feature__heading">Качество</div>
										<div class="option-feature__paragraph">
											<p>После мойки авто становится<br>абсолютно безупречным без<br>никаких водных разводов</p>
										</div>
									</div>
									<div class="features__option option-feature option-feature_variability">
										<div class="option-feature__heading">Вариативность</div>
										<div class="option-feature__paragraph">
											<p>Разновидность методов<br>мойки, различные виды<br>транспорта</p>
										</div>
									</div>
									<div class="features__option option-feature option-feature_time">
										<div class="option-feature__heading">Время</div>
										<div class="option-feature__paragraph">
											<p>Весь процесс займет не<br>более 30 минут</p>
										</div>
									</div>
									<div class="features__option option-feature option-feature_price">
										<div class="option-feature__heading">Цена</div>
										<div class="option-feature__paragraph">
											<p>Приемлемые цены на<br>любые услуги</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="page__booking booking _scr-item">
					<div class="booking__not-auth">
						<div class="booking__not-auth-body">
							<h2 class="booking__not-auth-title">Авторизуйтесь для заполнения заявки</h2>
							<a class="booking__not-auth-link" href="sign-in.html">Войти</a>
						</div>
					</div>
				</section>
			</main>
			<footer class="footer">
				<div class="footer__content _container">
					<div class="footer__body">
						<a class="footer__logo logo-item" href="">
							<svg class="logo-footer logo-ico">
								<use xlink:href="sprite.svg#logo"></use>
							</svg>
							<div class="logo-item__name"><span class="logo-item__blue-rect"><span>Транспортная</span></span>Мойка</div>
						</a>
						<div class="footer__info info-item">
							<div class="footer__geo geo-item">
								<svg class="geo-ico">
									<use xlink:href="sprite.svg#geo"></use>
								</svg>
								<div class="geo-item__addresses">
									<div class="geo-item__address">ул. Потанина, 24б</div>
									<div class="geo-item__address">Пушкина, 32/4</div>
								</div>
							</div>
							<div class="footer__callback callback-item">
								<svg class="phone-ico">
									<use xlink:href="sprite.svg#phone"></use>
								</svg>
								<div class="callback-item__phones">
									<a class="callback-item__phone" href="tel:87321412463">+7 732 141 24 63</a>
									<a class="callback-item__phone" href="tel:87225470911">+7 722 547 09 11</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script src="js/vendors.min.js"></script>
		<script src="js/app.min.js"></script>
		<?php else: ?>
			<div class="wrapper">
				<header class="header">
					<div class="header__wrapper">
						<div class="header__top top-header">
							<div class="top-header__container _container">
								<div class="top-header__body">
									<a class="top-header__logo logo-item" href="index.php">
										<svg class="logo-header logo-ico">
											<use xlink:href="sprite.svg#logo"></use>
										</svg>
										<div class="logo-item__name"><span class="logo-item__blue-rect"><span>Транспортная</span></span>Мойка</div>
									</a>
									<div class="top-header__info info-item">
										<div class="top-header__geo geo-item">
											<svg class="geo-ico">
												<use xlink:href="sprite.svg#geo"></use>
											</svg>
											<div class="geo-item__addresses">
												<div class="geo-item__address">ул. Потанина, 24б</div>
												<div class="geo-item__address">Пушкина, 32/4</div>
											</div>
										</div>
										<div class="top-header__callback callback-item">
											<svg class="phone-ico">
												<use xlink:href="sprite.svg#phone"></use>
											</svg>
											<div class="callback-item__phones">
												<a class="callback-item__phone" href="tel:87321412463">+7 732 141 24 63</a>
												<a class="callback-item__phone" href="tel:87225470911">+7 722 547 09 11</a>
											</div>
										</div>
									</div>
									<div class="top-header__actions actions-active-profile">
										<a class="top-header__button" href=""><span>Моторные масла</span></a>
										<button class="top-header__profile profile-active-btn" type="submit">
											<svg class="profile-ico-active">
												<use xlink:href="sprite.svg#prf-act" class="profile-ico-active-use"></use>
											</svg>
										</button>
										<div class="top-header__submenu submenu-header">
											<div class="submenu-header__body">
												<span class="submenu-header__email"><?=$_COOKIE['user']?></span>
												<div class="submenu-header__links">
													<a class="submenu-header__profile-link" href="">Профиль</a>
													<a class="submenu-header__cab-link" href="">Кабинет</a>
												</div>
												<a class="submenu-header__exit-link" href="/exit.php">Выйти</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header__bottom bottom-header">
							<div class="bottom-header__container _container">
								<div class="bottom-header__body">
									<div class="header__menu menu">
										<nav class="menu__body">
											<ul class="menu__list">
												<li class="menu__item">
													<a class="menu__link _goto-block" href="page__gallery">Галерея</a>
												</li>
												<li class="menu__item">
													<a class="menu__link _goto-block" href="#page__service">Услуги</a>
												</li>
												<li class="menu__item">
													<a class="menu__link _goto-block" href="#page__features">Преимущества</a>
												</li>
												<li class="menu__item" data-da=".menu__list-second,630,first">
													<a class="menu__link _goto-block" href="#page__booking">Бронирование</a>
												</li>
												<li data-da=".menu__list-second,800,0" class="menu__item">
													<a class="menu__link _goto-block" href="">Отзывы</a>
												</li>
												<li data-da=".menu__list-second,800,1" class="menu__item">
													<a class="menu__link _goto-block" href="">Новости и акции</a>
												</li>
											</ul>
											<ul class="menu__list-second"></ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<main class="page">
				    <section class="page__gallery gallery _scr-item">
					    <div class="gallery__body"></div>
			        </section>
					<section class="page__service service _scr-item">
						<div class="service__container _container">
							<div class="service__body">
								<div class="service__cards cards-row">
									<div class="cards-row__column">
										<div class="cards-row__item item-card item-card_green">
											<svg class="spray-ico">
												<use xlink:href="sprite.svg#spray"></use>
											</svg>
											<div class="item-card__content">
												<h2 class="item-card__title">Химчистка</h2>
												<div class="item-card__text">Качественная и высокотехнологичная чистка с помощью специальных химических средств</div>
											</div>
										</div>
									</div>
									<div class="cards-row__column">
										<div class="cards-row__item item-card item-card_red">
											<svg class="engine-ico">
												<use xlink:href="sprite.svg#engine"></use>
											</svg>
											<div class="item-card__content">
												<h2 class="item-card__title">Мойка двигателя </h2>
												<div class="item-card__text">Особая техника воостановления внешнего вида двигателя</div>
											</div>
										</div>
									</div>
									<div class="cards-row__column">
										<div class="cards-row__item item-card item-card_blue">
											<svg class="polisher-ico">
												<use xlink:href="sprite.svg#polisher"></use>
											</svg>
											<div class="item-card__content">
												<h2 class="item-card__title">Полировка</h2>
												<div class="item-card__text">Полная отшливовка до кристальной белизны</div>
											</div>
										</div>
									</div>
								</div>
								<div class="service__button">Оставить заявку</div>
								<h1 class="service__title">Сервис</h1>
							</div>
						</div>
					</section>
					<section class="page__features features _scr-item">
						<div class="features__wrapper">
							<div class="features__container _container">
							<h2 class="features__title">Почему мы?</h2>
								<div class="features__body">
									<div class="features__content">
										<div class="features__option option-feature option-feature_quality">
											<div class="option-feature__heading">Качество</div>
											<div class="option-feature__paragraph">
												<p>После мойки авто становится<br>абсолютно безупречным без<br>никаких водных разводов</p>
											</div>
										</div>
										<div class="features__option option-feature option-feature_variability">
											<div class="option-feature__heading">Вариативность</div>
											<div class="option-feature__paragraph">
												<p>Разновидность методов<br>мойки, различные виды<br>транспорта</p>
											</div>
										</div>
										<div class="features__option option-feature option-feature_time">
											<div class="option-feature__heading">Время</div>
											<div class="option-feature__paragraph">
												<p>Весь процесс займет не<br>более 30 минут</p>
											</div>
										</div>
										<div class="features__option option-feature option-feature_price">
											<div class="option-feature__heading">Цена</div>
											<div class="option-feature__paragraph">
												<p>Приемлемые цены на<br>любые услуги</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="page__booking booking _scr-item">
						<div class="booking__container _container">
							<div class="booking__body">
								<form class="booking__form form-booking" action="#" method="POST">
									<div class="form-booking__content _active">
										<progress class="form-booking__progressbar" max="4" value="0"></progress>
										<h2 class="form-booking__title">Выберите сервис</h2>
										<div class="form-booking__inputs">
											<div class="form-booking__selects">
												<div class="form-booking__line select-category">
													<label class="select-category__label label-select">Категория</label>
													<select name="form[]" class="form-booking__select">
														<option value="1" selected="selected">Мойка</option>
														<option value="2">Химчистка</option>
														<option value="3">Мойка+Химчистка</option>
													</select>
												</div>
												<div class="form-booking__line select-auto">
													<label class="select-auto__label label-select">Тип авто</label>
													<select name="form[]" class="form-booking__select">
														<option value="1" selected="selected">Легковая</option>
														<option value="2">Джип</option>
														<option value="3">Микроавтобус</option>
														<option value="4">Кроссовер/<br>минивэн</option>
													</select>
												</div>
											</div>
											<div class="form-booking__checkboxes checkboxes">
												<div class="checkboxes-washing">
													<div class="checkbox__group checkbox-pressure">
														<input class="form-booking__checkbox" type="checkbox" id="checkbox1">
														<label for="checkbox1">Пробивка высоким давлением</label>
													</div>
													<div class="checkbox__group checkbox-components">
														<input class="form-booking__checkbox" type="checkbox" id="checkbox2">
														<label for="checkbox2">Кузов</label>
													</div>
													<div class="checkbox__group checkbox-components">
														<input class="form-booking__checkbox" type="checkbox" id="checkbox3">
														<label for="checkbox3">Салон</label>
													</div>
													<div class="checkbox__group checkbox-components">
														<input class="form-booking__checkbox" type="checkbox" id="checkbox4">
														<label for="checkbox4">Багажник</label>
													</div>
													<div class="checkbox__group checkbox-additional">
														<input class="form-booking__checkbox" type="checkbox" id="checkbox5">
														<label for="checkbox5">Мойка двигателя</label>
													</div>
													<div class="checkbox__group checkbox-additional">
														<input class="form-booking__checkbox" type="checkbox" id="checkbox6">
														<label for="checkbox6">Полировка</label>
													</div>
												</div>
												<div class="checkboxes-drying">
													<div class="checkbox__group">
														<input class="form-booking__checkbox" type="checkbox" id="checkbox7">
														<label for="checkbox7">Потолок</label>
													</div>
													<div class="checkbox__group">
														<input class="form-booking__checkbox" type="checkbox" id="checkbox8">
														<label for="checkbox8">Салон</label>
													</div>
													<div class="checkbox__group">
														<input  class="form-booking__checkbox" type="checkbox" id="checkbox9">
														<label for="checkbox9">Пол</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-booking__button-wrapper">
										<a class="form-booking__button button-next btn" href="#booking-section">
											<span>Дальше</span>
											<svg class="right-arrow">
												<use xlink:href="sprite.svg#right-arrow"></use>
											</svg>
										</a>
										</div>
										<h2 class="booking__title">Бронь</h2>
									</div>
									<div class="form-booking__content">
										<progress class="form-booking__progressbar" max="4" value="1"></progress>
										<h2 class="form-booking__title">Время и место</h2>
										<div class="form-booking__selects">
											<div class="form-booking__row">
												<div class="form-booking__line select-address">
													<label class="select-address__label label-select">Адрес</label>
													<select name="form[]" class="form-booking__select">
														<option value="1" selected="selected">Наурызбай б, 234</option>
														<option value="2">Сабатаева, 9а</option>
														<option value="3">Горького, 101</option>
														<option value="4">Проспект Республики, 342</option>
													</select>
												</div>
												<div class="form-booking__line select-time">
													<label class="select-time__label label-select">Время</label>
													<select name="form[]" class="form-booking__select">
														<option value="1" selected="selected">8:00</option>
														<option value="2">8:30</option>
														<option value="3">9:00</option>
														<option value="4">9:15</option>
														<option value="5">9:30</option>
														<option value="6">10:00</option>
														<option value="7">10:20</option>
														<option value="8">10:40</option>
														<option value="9">11:00</option>
													</select>
												</div>
											</div>
											<div class="form-booking__row">
												<div class="form-booking__line select-date">
													<label class="select-date__label label-select">Дата</label>
													<input type="date" style="padding: 5px 10px;">
												</div>
												<div class="form-booking__line select-garage">
													<button class="select-garage__btn">
														<picture><source srcset="img/booking/garage01.webp" type="image/webp"><img src="img/booking/garage01.jpg" alt=""></picture>
													</button>
													<button class="select-garage__btn">
														<picture><source srcset="img/booking/garage02.webp" type="image/webp"><img src="img/booking/garage02.jpg" alt=""></picture>
													</button>
													<button class="select-garage__btn">
														<picture><source srcset="img/booking/garage03.webp" type="image/webp"><img src="img/booking/garage03.jpg" alt=""></picture>
													</button>
												</div>
											</div>
										</div>
										<div class="form-booking__buttons">
											<div class="form-booking__button-wrapper">
												<a class="form-booking__button button-prev" href="#booking-section">
													<svg class="left-arrow">
														<use xlink:href="sprite.svg#left-arrow"></use>
													</svg>
													<span>Назад</span>
												</a>
											</div>
											<div class="form-booking__button-wrapper">
												<a class="form-booking__button button-next" href="#booking-section">
													<span>Дальше</span>
													<svg class="right-arrow">
														<use xlink:href="sprite.svg#right-arrow"></use>
													</svg>
												</a>
											</div>
										</div>
										<h2 class="booking__title">Бронь</h2>
									</div>
									<div class="form-booking__content">
										<progress class="form-booking__progressbar" max="4" value="2"></progress>
										<h2 class="form-booking__title">Детали</h2>
										<div class="form-booking__columns">
											<div class="form-booking__column">
												<div class="form-booking__line input-name line-booking-inputs">
													<input autocomplete="off" type="text" name="name" data-error="Ошибка" data-value="" class="form-booking__input input _req" required>
													<label class="form-booking__label" for="name">Имя</label>
													<span class="line-booking-underline"></span>
												</div>
												<div class="form-booking__line input-number line-booking-inputs">
													<input autocomplete="off" type="text" name="number" data-error="Ошибка" data-value="" class="form-booking__input input _req _digital" required>
													<label class="form-booking__label" for="number">Номер телефона</label>
													<span class="line-booking-underline"></span>
												</div>
												<div class="form-booking__line input-email line-booking-inputs">
													<input autocomplete="off" type="text" name="email" data-error="Ошибка" data-value="" class="form-booking__input input _req _email" required>
													<label class="form-booking__label" for="email">E-mail</label>
													<span class="line-booking-underline"></span>
												</div>
											</div>
											<div class="form-booking__column">
												<div class="form-booking__line select-transport-company">
													<label class="select-transport-company__label label-select">Марка транспорта</label>
													<select name="form[]" class="form-booking__select">
														<option value="1" selected="selected">Toyota</option>
														<option value="2">BMW</option>
														<option value="3">Lada</option>
														<option value="4">Kia</option>
														<option value="5">Chivrolet</option>
													</select>
												</div>
												<div class="form-booking__line input-transport-number line-booking-inputs">
													<input autocomplete="off" type="text" name="transport-number" data-error="Ошибка" data-value="" class="form-booking__input input _req" required>
													<label class="form-booking__label" for="transport-number">Номер транспорта</label>
													<span class="line-booking-underline"></span>
												</div>
											</div>
										</div>
										<div class="form-booking__buttons">
											<div class="form-booking__button-wrapper">
												<a class="form-booking__button button-prev" href="#booking-section">
													<svg class="left-arrow">
														<use xlink:href="sprite.svg#left-arrow"></use>
													</svg>
													<span>Назад</span>
												</a>
											</div>
											<div class="form-booking__button-wrapper">
												<a class="form-booking__button button-next" href="#booking-section">
													<span>Дальше</span>
													<svg class="right-arrow">
														<use xlink:href="sprite.svg#right-arrow"></use>
													</svg>
												</a>
											</div>
										</div>
										<h2 class="booking__title">Бронь</h2>
									</div>
									<div class="form-booking__content">
										<progress class="form-booking__progressbar" max="4" value="3"></progress>
										<h2 class="form-booking__title">Общий счет: <span class="price-span">43500тг</span></h2>
										<p class="form-booking__subtitle">
											Все детали будут отправлены по указанной электронной почте
										</p>
										<div class="form-booking__textarea">
											<textarea name="" id="" cols="30" rows="10" placeholder="Комментарии"></textarea>
										</div>
										<div class="form-booking__buttons">
											<div class="form-booking__button-wrapper">
												<a class="form-booking__button button-prev" href="#booking-section">
													<svg class="left-arrow">
														<use xlink:href="sprite.svg#left-arrow"></use>
													</svg>
													<span>Назад</span>
												</a>
											</div>
											<div class="form-booking__button-wrapper">
												<button class="form-booking__button button-next" type="submit">
													<span>Отправить</span>
													<svg class="right-arrow">
														<use xlink:href="sprite.svg#right-arrow"></use>
													</svg>
												</button>
											</div>
										</div>
										<h2 class="booking__title">Бронь</h2>
									</div>
									<div class="form-booking__content">
										<progress class="form-booking__progressbar" max="4" value="4"></progress>
										<div class="form-booking__success-content">
											<svg class="success-ico">
												<use xlink:href="sprite.svg#success"></use>
											</svg>
											<h2 class="form-booking__title">Место успешно забронирована</h2>
											<div class="form-booking__button-wrapper">
												<a class="form-booking__button button-next" href="#booking-section">
													<span>Заполнить еще одну анкету</span>
												</a>
											</div>
										</div>
										<h2 class="booking__title">Бронь</h2>
									</div>
								</form>
							</div>
						</div>
					</section>
				</main>
				<footer class="footer">
					<div class="footer__content _container">
						<div class="footer__body">
							<a class="footer__logo logo-item" href="">
								<svg class="logo-footer logo-ico">
									<use xlink:href="sprite.svg#logo"></use>
								</svg>
								<div class="logo-item__name"><span class="logo-item__blue-rect"><span>Транспортная</span></span>Мойка</div>
							</a>
							<div class="footer__info info-item">
								<div class="footer__geo geo-item">
									<svg class="geo-ico">
										<use xlink:href="sprite.svg#geo"></use>
									</svg>
									<div class="geo-item__addresses">
										<div class="geo-item__address">ул. Потанина, 24б</div>
										<div class="geo-item__address">Пушкина, 32/4</div>
									</div>
								</div>
								<div class="footer__callback callback-item">
									<svg class="phone-ico">
										<use xlink:href="sprite.svg#phone"></use>
									</svg>
									<div class="callback-item__phones">
										<a class="callback-item__phone" href="tel:87321412463">+7 732 141 24 63</a>
										<a class="callback-item__phone" href="tel:87225470911">+7 722 547 09 11</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<script src="js/vendors.min.js"></script>
			<script src="js/app.min.js"></script>
		<?php endif;?>
	</body>
</html>

