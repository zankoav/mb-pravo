<?php

$option = SingletonOptions::getOptions();
$main_logo = $option['main_logo'];

$mainMenuArgs = [
	 'theme_location' => 'main_menu',
	 'container'      => false,
	 'menu_class'     => 'header__list',
	 'menu_id'        => '',
	 'echo'           => true,
	 'fallback_cb'    => 'wp_page_menu',
	 'before'         => '',
	 'after'          => '',
	 'link_before'    => '',
	 'link_after'     => '',
	 'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	 'depth'          => 5,
];


$temp = get_post_meta(get_the_ID(),'_wp_page_template',true);
$is_home = '';
if(!empty($temp)){
	$is_home = $temp == 'template-home.php' ? 'header__bg-transparent' : '';
}
?>
<header class="header <?= $is_home;?>">
	<div class="container">
		<div class="header__inner">
			<a class="header__logo" href="/">
				<img class="header__logo-img" src="<?= $main_logo;?>" alt="mbpravo">
			</a>
			<?php wp_nav_menu( $mainMenuArgs ); ?>
<!--			-->
<!--			<ul class="header__list">-->
<!--				<li class="header__item">-->
<!--					<a class="header__item-link" href="#">Главная</a>-->
<!--				</li>-->
<!--				<li class="header__item">-->
<!--					<a class="header__item-link" href="#">Команда</a>-->
<!--				</li>-->
<!--				<li class="header__item header__submenu-list">-->
<!--					<a class="header__item-link header__item-submenu" href="#">Практики</a>-->
<!--					<ul class="header__submenu header__submenu_bg-color">-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Гражданское право </a>-->
<!--						</li>-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Налоговое право </a>-->
<!--						</li>-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Страховое право </a>-->
<!--						</li>-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Коммерческое право </a>-->
<!--						</li>-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>-->
<!--						</li>-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>-->
<!--						</li>-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>-->
<!--						</li>-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>-->
<!--						</li>-->
<!--						<li class="header__submenu-item">-->
<!--							<a class="header__submenu-link header__submenu-link_color-black" href="#">Корпоративное право </a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</li>-->
<!--				<li class="header__item">-->
<!--					<a class="header__item-link" href="#">Контакты</a>-->
<!--				</li>-->
<!--			</ul>-->

			<a class="header__burger" href="#">
				<span class="header__line-burger"></span>
				<span class="header__line-burger"></span>
			</a>
		</div>
	</div>
</header>
