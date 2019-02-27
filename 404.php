<?php get_header(); ?>

<div class="loader">
	<div class="loader__spinner loader__spinner_egg"></div>
</div>
<div class="p404">
	<div class="p404__main">

		<?php get_template_part('/core/views/header_view'); ?>
		<div class="page404">
			<div class="container">
				<div class="page404__inner">
					<div class="page404__numbers">404</div>
					<div class="page404__wrapper">
						<div class="page404__title">Ошибка</div>
						<div class="page404__subtitle">К сожалению, такой страницы не существует</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="p404__footer">
		<?php get_template_part('/core/views/footer_view'); ?>
	</div>
</div>

<?php get_footer(); ?>
