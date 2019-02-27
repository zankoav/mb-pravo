<?php
$option = SingletonOptions::getOptions();
$footer_img = $option['footer_logo'];
$address = $option['address'];
$footer_img = $option['footer_logo'];
$email = $option['email'];

$phone_1 = $option['phone_1'];
$phone_2 = $option['phone_2'];
$phone_3 = $option['phone_3'];
$phone_4 = $option['phone_4'];
?>

	<footer class="footer footer__bg-color">
		<div class="container">
			<div class="footer__inner">
				<div class="footer__content">
					<a class="footer__logo-link" href="/">
						<img class="footer__logo-img" src="<?= $footer_img;?>" alt="mbpravo">
					</a>
					<div class="footer__info">
						<div class="footer__phones">
							<a class="footer__phone" href="tel:<?= $phone_1?>">
								<img class="footer__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
								     alt="phone">
								<span class="footer__phone-number"><?= $phone_1?></span>
							</a>
							<a class="footer__phone" href="tel:<?= $phone_2?>">
								<img class="footer__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
								     alt="phone">
								<span class="footer__phone-number"><?= $phone_2?></span>
							</a>
						</div>
						<div class="footer__mobiles">
							<a class="footer__mobile" href="tel:<?= $phone_3?>">
								<img class="footer__mobile-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
								     alt="velcom">
								<span class="footer__mobile-number"><?= $phone_3?></span>
							</a>
							<a class="footer__mobile" href="tel:<?= $phone_4?>">
								<img class="footer__mobile-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
								     alt="velcom">
								<span class="footer__mobile-number"><?= $phone_4?></span>
							</a>
							<a class="footer__email" href="mailto:<?= $email;?>">
								<img class="footer__email-img" src="/wp-content/themes/mb-pravo/src/icons/envelope.72adb6.svg" alt="envelope">
								<span class="footer__email-link"><?= $email;?></span>
							</a>
						</div>
					</div>
					<div class="footer__office">
						<span class="footer__office_title">Адвокатское бюро «МБПраво»</span>
						<span class="footer__office_text"><?= $address;?></span>
					</div>
				</div>
				<div class="footer__copyright">
					<span class="footer__copyright_text">© <?= date("Y");?>. Все права защищены</span>
					<div class="footer__copyright_development" href="#">
						<span class="footer__copyright_development-text">Разработка сайта</span>
						<img class="footer__copyright_development-img"
						     src="/wp-content/themes/mb-pravo/src/icons/mastak-logo.11d091.svg" alt="mastak">
					</div>
				</div>
			</div>
		</div>
	</footer>
