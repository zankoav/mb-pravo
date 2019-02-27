<?php
/**
 * Template Name: Contacts Template
 */
get_header();

$option = SingletonOptions::getOptions();
$footer_img = $option['footer_logo'];
$address = $option['address'];
$footer_img = $option['footer_logo'];
$email = $option['email'];

$phone_1 = $option['phone_1'];
$phone_2 = $option['phone_2'];
$phone_3 = $option['phone_3'];
$phone_4 = $option['phone_4'];
$map_center = $option['map_center'];
$marc_coordinate = $option['marc_coordinate'];
$marc_text = $option['marc_text'];
?>
	<div class="loader">
		<div class="loader__spinner loader__spinner_egg"></div>
	</div>
	<div class="contacts">
		<div class="contacts__main">
			<?php get_template_part('/core/views/header_view'); ?>
			<div class="information">
				<div class="information__inner">
					<div class="container">
						<div class="information__title">Контакты</div>
						<div class="information__contacts">
							<div class="information__addres"><?= $address;?></div>
							<div class="information__contacts-wrapper">
								<div class="information__phones">
									<div class="information__phones-wrapper">
										<a class="information__phone" href="tel:<?= $phone_1?>">
											<img class="information__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
											     alt="phone">
											<span class="information__phone-number"><?= $phone_1?></span>
										</a>
										<a class="information__phone" href="tel:<?= $phone_2?>">
											<img class="information__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
											     alt="phone">
											<span class="information__phone-number"><?= $phone_2?></span>
										</a>
									</div>
									<div class="information__phones-inner">
										<a class="information__phone" href="tel:<?= $phone_3?>">
											<img class="information__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
											     alt="phone">
											<span class="information__phone-number"><?= $phone_3?></span>
										</a>
										<a class="information__phone" href="tel:<?= $phone_4?>">
											<img class="information__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
											     alt="phone">
											<span class="information__phone-number"><?= $phone_4?></span>
										</a>
									</div>
								</div>
								<div class="information__mail">
									<a class="information__email" href="mailto:<?= $email;?>">
										<img class="information__email-img" src="/wp-content/themes/mb-pravo/src/icons/envelope.72adb6.svg"
										     alt="envelope">
										<span class="information__email-link"><?= $email;?></span>
									</a>
								</div>
							</div>
						</div>
						<div class="information__map">
							<?php echo do_shortcode('[yamap controls="" center="'.$map_center.'"  type="yandex#map"][yaplacemark  name="'.$marc_text.'" coord="'.$marc_coordinate.'" icon="islands#blueDotIcon" color="#1e98ff"][/yamap]')?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contacts__footer">
			<?php get_template_part('/core/views/footer_view'); ?>
		</div>
	</div>
<?php get_footer();