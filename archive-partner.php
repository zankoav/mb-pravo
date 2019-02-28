<?php
get_header();

$query_args = [
	 'post_type' => 'partner',
	 'posts_per_page' => 100,
];
$query = new WP_Query($query_args);
?>
	<div class="loader">
		<div class="loader__spinner loader__spinner_egg"></div>
	</div>
	<div class="team">
		<div class="team__main">
			<?php get_template_part('/core/views/header_view'); ?>
			<div class="team-cards">
				<div class="team-cards__inner">
					<div class="container">
						<div class="team-cards__content">
							<div class="team-cards__title">Наша команда</div>
						</div>
					</div>
					<div class="cards">
						<?php if (have_posts()) :
							while (have_posts()):
								the_post();
								$partner_photo = get_post_meta(get_the_ID(), 'partner_photo', true);
								$position = get_post_meta(get_the_ID(), 'position', true);
								?>
								<div class="cards__item">
									<div class="cards__content">
										<div class="cards__partner">
											<img class="cards__partner-img" src="<?= $partner_photo;?>" alt="partner">
										</div>
										<div class="cards__wrapper">
											<div class="cards__name"><?= get_the_title(); ?></div>
											<div class="cards__description"><?= $position;?></div>
											<a class="cards__more" href="<?= get_permalink(get_the_ID());?>">Подробнее</a>
										</div>
									</div>
								</div>
							<?php
							endwhile;
							else:?>
								<p><?php esc_html_e( 'Извените, партнеров нет' ); ?></p>
							<?php
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="team__footer">
			<?php get_template_part('/core/views/footer_view'); ?>
		</div>
	</div>
<?php get_footer();