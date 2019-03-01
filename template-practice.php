<?php
/**
 * Template Name: Practice Template
 */
get_header();

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
											<li class="menu-left__item">
												<a href="#">Судебная, арбитражная практика и разрешение споров</a>
											</li>
											<li class="menu-left__item menu-left__item_active">
												<a href="#">Уголовный и административный процесс</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Договорная практика</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Международная торговля и внешнеэкономическая деятельность</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Недвижимость, строительство и инвестиции</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Банки, финансы, страхование, ценные бумаги</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Информационные технологии (IT)</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Налогообложение, таможенное регулирование, деятельность государственных органов</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Корпоративная практика. Слияние и поглощение (M&amp;A)</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Трудовое право</a>
											</li>
											<li class="menu-left__item">
												<a href="#">Частная практика и физические лица</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="practice-content__row_about">
								<div class="practice-content__row_about-information">
									<div class="practice-content__row_about-information-column">
										<div class="practice-content__row_about-information-column-subtitle">Адвокатское бюро «МБ Право»
											оказывает все виды юридической помощи физическим лицам, в том числе индивидуальным
											предпринимателям, юридическим лицам, а также государству.
										</div>
										<img class="practice-content__about_row-information-column-image"
										     src="/wp-content/themes/mb-pravo/src/icons/partners.7de5df.png" alt="partners">
									</div>
									<div class="practice-content__row_about-information-text">
										<p>Адвокатское бюро «МБ Право» обеспечивает своим клиентам эффективную защиту, представляя их
											интересы в судах Республики Беларусь, в иностранных судах и международных арбитражных судах
											(Международном арбитражном суде Международной торговой палаты, Арбитражном институте Торговой
											палаты г. Стокгольма, Международном коммерческом арбитражном суде при ТПП Российской Федерации,
											Международном арбитражном суде при БелТПП и др.).</p>
										<div class="our-mission">
											<span class="our-mission__text_big">Наша миссия:</span>
											<span class="our-mission__text_little">оказывать качественную юридическую помощь, опираясь на знания и опыт команды профессионалов.</span>
										</div>
										<p>Профессиональная ответственность адвокатов «МБ Право» застрахована в одной из крупнейших
											страховых организаций. Мы уделяем особое внимание вопросам профессиональной этики и
											конфиденциальности.</p>
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
<?php get_footer();