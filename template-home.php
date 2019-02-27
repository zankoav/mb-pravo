<?php
/**
 * Template Name: Home
 */

$option = SingletonOptions::getOptions();

get_header();

//var_dump($option);

?>

	<div class="loader">
		<div class="loader__spinner loader__spinner_egg"></div>
	</div>
	<div class="home">
		<div class="home__main">

			<header class="header ">
				<div class="container">
					<div class="header__inner">
						<a class="header__logo" href="#">
							<img class="header__logo-img" src="/wp-content/themes/mb-pravo/src/icons/logo-header.bbb656.svg" alt="mbpravo">
						</a>
						<ul class="header__list">
							<li class="header__item">
								<a class="header__item-link" href="#">Главная</a>
							</li>
							<li class="header__item">
								<a class="header__item-link" href="#">Команда</a>
							</li>
							<li class="header__item header__submenu-list">
								<a class="header__item-link header__item-submenu" href="#">Практики</a>
								<ul class="header__submenu header__submenu_bg-color">
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Гражданское право </a>
									</li>
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Налоговое право </a>
									</li>
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Страховое право </a>
									</li>
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Коммерческое право </a>
									</li>
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>
									</li>
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>
									</li>
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>
									</li>
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>
									</li>
									<li class="header__submenu-item">
										<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>
									</li>
								</ul>
							</li>
							<li class="header__item">
								<a class="header__item-link" href="#">Контакты</a>
							</li>
						</ul>
						<a class="header__burger" href="#">
							<span class="header__line-burger"></span>
							<span class="header__line-burger"></span>
						</a>
					</div>
				</div>
			</header>

			<div class="welcome">
				<div class="welcome__container swiper-container">
					<div class="welcome__wrapper swiper-wrapper">
						<div class="welcome__slide swiper-slide">
							<div class="welcome__inner">
								<div class="welcome__item"
								     style="background-image:url(/wp-content/themes/mb-pravo/src/icons/welcome.aa9043.png)">
									<div class="welcome__content container">
										<div class="welcome__title">Налоговое право</div>
										<div class="welcome__subtitle">для бизнеса</div>
										<span class="welcome__button">Подробнее</span>
									</div>
								</div>
							</div>
						</div>
						<div class="welcome__slide swiper-slide">
							<div class="welcome__inner">
								<div class="welcome__item" style="background-image:url(/wp-content/themes/mb-pravo/src/icons/2.ab37ea.jpg)">
									<div class="welcome__content container">
										<div class="welcome__title">Налоговое право</div>
										<div class="welcome__subtitle">для бизнеса</div>
										<span class="welcome__button">Подробнее</span>
									</div>
								</div>
							</div>
						</div>
						<div class="welcome__slide swiper-slide">
							<div class="welcome__inner">
								<div class="welcome__item" style="background-image:url(/wp-content/themes/mb-pravo/src/icons/3.2be203.jpg)">
									<div class="welcome__content container">
										<div class="welcome__title">Налоговое право</div>
										<div class="welcome__subtitle">для бизнеса</div>
										<span class="welcome__button">Подробнее</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="welcome__pagination swiper-pagination"></div>
				</div>
			</div>
		</div>
		<div class="home__footer">
			<footer class="footer footer__bg-color">
				<div class="container">
					<div class="footer__inner">
						<div class="footer__content">
							<a class="footer__logo-link" href="#">
								<img class="footer__logo-img" src="/wp-content/themes/mb-pravo/src/icons/logo-footer.3e2956.svg" alt="mbpravo">
							</a>
							<div class="footer__info">
								<div class="footer__phones">
									<a class="footer__phone" href="tel:+375172881313">
										<img class="footer__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg" alt="phone">
										<span class="footer__phone-number">+375 (17) 288 13 13</span>
									</a>
									<a class="footer__phone" href="tel:+375172048672">
										<img class="footer__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg" alt="phone">
										<span class="footer__phone-number">+375 (17) 204 86 72</span>
									</a>
								</div>
								<div class="footer__mobiles">
									<a class="footer__mobile" href="tel:+375293404483">
										<img class="footer__mobile-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg" alt="velcom">
										<span class="footer__mobile-number">+375 (29) 340 44 83</span>
									</a>
									<a class="footer__mobile" href="tel:+375333004483">
										<img class="footer__mobile-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg" alt="velcom">
										<span class="footer__mobile-number">+375 (33) 300 44 83</span>
									</a>
									<a class="footer__email" href="mailto:info@spplaw.by">
										<img class="footer__email-img" src="/wp-content/themes/mb-pravo/src/icons/envelope.72adb6.svg" alt="envelope">
										<span class="footer__email-link">info@spplaw.by</span>
									</a>
								</div>
							</div>
							<div class="footer__office">
								<span class="footer__office_title">Адвокатское бюро «МБПраво»</span>
								<span class="footer__office_text">220034, г. Минск, ул. Фрунзе, 3, комн. 203 УНП 805090058.</span>
							</div>
						</div>
						<div class="footer__copyright">
							<span class="footer__copyright_text">© 2019. Все права защищены</span>
							<div class="footer__copyright_development" href="#">
								<span class="footer__copyright_development-text">Разработка сайта</span>
								<img class="footer__copyright_development-img" src="/wp-content/themes/mb-pravo/src/icons/mastak-logo.11d091.svg" alt="mastak">
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

<?php get_footer();