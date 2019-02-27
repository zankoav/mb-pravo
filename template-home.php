<?php
/**
 * Template Name: Home
 */
get_header();

$option = SingletonOptions::getOptions();
$slider = get_post_meta(get_the_ID(), 'slider', true);
?>

	<div class="loader">
		<div class="loader__spinner loader__spinner_egg"></div>
	</div>
	<div class="home">
		<div class="home__main">

			<?php get_template_part('/core/views/header_view'); ?>
			<div class="welcome">
				<div class="welcome__container swiper-container">
					<div class="welcome__wrapper swiper-wrapper">
						<?php foreach ($slider as $slide) :
							$title = $slide['title'];
							$subtitle = $slide['subtitle'];
							$button_text = $slide['button_text'];
							$button_url = $slide['button_url'];
							$bg_image = $slide['bg_image'];
							?>
							<div class="welcome__slide swiper-slide">
								<div class="welcome__inner">
									<div class="welcome__item" style="background-image:url(<?= $bg_image; ?>)">
										<div class="welcome__content container">
											<div class="welcome__title"><?= $title; ?></div>
											<div class="welcome__subtitle"><?= $subtitle; ?></div>
											<a href="<?= $button_url?>" class="welcome__button"><?= $button_text; ?></a>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="welcome__pagination swiper-pagination"></div>
				</div>
			</div>
		</div>

		<?php get_template_part('/core/views/footer_view'); ?>

	</div>

<?php get_footer();