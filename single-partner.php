<?php
get_header();
$partner_meta = get_post_meta(get_the_ID());
$photo = $partner_meta["partner_photo"][0];
$position = $partner_meta["position"][0];

$experience = unserialize($partner_meta["experience"][0]);

$phone = $partner_meta["phone"][0];
$email = $partner_meta["email"][0];

$specialisations = unserialize($partner_meta["specialisation"][0]);
$prof_experience = unserialize($partner_meta["prof_experience"][0]);

$prof_experience_title = $partner_meta["prof_experience_title"][0];
$education = unserialize($partner_meta["education"][0]);

?>
	<div class="loader">
		<div class="loader__spinner loader__spinner_egg"></div>
	</div>
	<div class="partner">
		<div class="partner__main">
			<?php get_template_part('/core/views/header_view'); ?>
			<div class="partner-card">
				<div class="container">
					<div class="partner-card__backwards">
						<div class="backwards">
							<a class="backwards__link" href="<?= get_post_type_archive_link('partner'); ?>">Назад к команде</a>
						</div>
					</div>
					<div class="partner-card__inner">
						<div class="partner-card__partner">
							<img class="partner-card__partner-img" src="<?= $photo ?>"
							     alt="partner">
						</div>
						<div class="partner-card__wrapper">
							<div class="partner-card__title"><?= get_the_title(); ?></div>
							<div class="partner-card__position"><?= $position; ?></div>
							<div class="partner-card__date">
								<?php foreach($experience as $item) :?>
								<?= $item; ?><br/>
								<?php endforeach;?>
							</div>
							<?php if (!empty($specialisations)): ?>
								<div class="partner-card__specializations">Специализации:</div>
								<ul class="partner-card__specializations-list">
									<?php foreach ($specialisations as $specialisation) { ?>
										<li class="partner-card__specialization"><?= $specialisation; ?></li>
									<?php } ?>
								</ul>
							<?php endif; ?>
							<div class="partner-card__contacts">
								<?php if (!empty($phone)): ?>
									<a class="partner-card__phone" href="tel:<?= $phone; ?>">
										<img class="partner-card__phone-img" src="/wp-content/themes/mb-pravo/src/icons/phone.157891.svg"
										     alt="phone">
										<span class="partner-card__phone-number"><?= $phone; ?></span>
									</a>
								<?php endif; ?>
								<?php if (!empty($email)): ?>
									<a class="partner-card__email" href="mailto:<?= $email; ?>">
										<img class="partner-card__email-img" src="/wp-content/themes/mb-pravo/src/icons/envelope.72adb6.svg"
										     alt="envelope">
										<span class="partner-card__email-link"><?= $email; ?></span>
									</a>
								<?php endif; ?>
							</div>
						</div>

						<?php get_template_part('/core/prevNextPartner'); ?>

					</div>
				</div>
			</div>
			<div class="partner-description">
				<div class="container">
					<div class="partner-description__content">
						<div class="partner-description__inner">
							<div class="partner-description__tab partner-description__tab_active">
								<div class="partner-description__tab-number">1</div>
								<div class="partner-description__tab-text">Профессиональный опыт</div>
							</div>
							<div class="partner-description__tab">
								<div class="partner-description__tab-number">2</div>
								<div class="partner-description__tab-text">образование</div>
							</div>
						</div>
						<div class="partner-description__experience-wrapper partner-description__experience-wrapper_active">
							<div class="partner-description__title">
								<?= $prof_experience_title; ?>
							</div>
							<div class="editor-content">
								<ul>
									<?php if (!empty($prof_experience)):
										foreach ($prof_experience as $experience_item) { ?>
											<li><?= $experience_item; ?></li>
										<?php } endif; ?>
								</ul>
							</div>
						</div>
						<div class="partner-description__experience-wrapper">
							<div class="partner-description__title">Образование:</div>
							<div class="editor-content">
								<ul>
									<?php if (!empty($education)):
										foreach ($education as $education_item) { ?>
											<li><?= $education_item ?></li>
										<?php } endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="partner__footer">
			<?php get_template_part('/core/views/footer_view'); ?>
		</div>
	</div>

<?php

get_footer();