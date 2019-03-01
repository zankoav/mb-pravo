<?php
get_header();
$sub_title = get_post_meta(get_the_ID(), 'sub_title', true);
$photo = get_post_meta(get_the_ID(), 'photo', true);
$content = apply_filters('the_content', get_post_meta(get_the_id(), 'content', true));
?>
	<div class="loader">
		<div class="loader__spinner loader__spinner_egg"></div>
	</div>
	<div class="practice">
		<div class="practice__main">
			<?php get_template_part('/core/views/header_view'); ?>
			<div class="practice-content">
				<div class="practice-content__inner">
					<div class="container">
						<div class="practice-content__row">
							<div class="practice-content__row_navigation">
								<h1 class="practice-content__row_navigation-title">Практики</h1>
								<div class="practice-content__row_navigation-theme">
									<div class="menu-left">
										<div class="menu-left__active-item">Выбирете практику</div>
										<ul class="menu-left__list">

											<?php get_template_part('/core/views/practice_list'); ?>

										</ul>
									</div>
								</div>
							</div>
							<div class="practice-content__row_about">
								<div class="practice-content__row_about-information">
									<div class="practice-content__row_about-information-column">
										<div class="practice-content__row_about-information-column-subtitle">
											<?= $sub_title; ?>
										</div>
										<img class="practice-content__about_row-information-column-image"
										     src="<?= $photo; ?>" alt="partners">
									</div>

									<div class="practice-content__row_about-information-text">
										<?= wpautop($content); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="practice__footer">
			<?php get_template_part('/core/views/footer_view'); ?>
		</div>
	</div>
<?php
get_footer();