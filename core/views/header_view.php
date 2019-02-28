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


$query_obj = get_queried_object();
$temp = get_post_meta(get_the_ID(),'_wp_page_template',true);
$header_class = '';

//if home page -- transparent
if(!empty($temp)){
	$header_class = $temp == 'template-home.php' ? 'header__bg-transparent' : '';
}
//if partner archive page -- transparent
if($query_obj->query_var == 'partner'){
	$header_class = 'header__bg-color';
}
?>
<header class="header <?= $header_class;?>">
	<div class="container">
		<div class="header__inner">
			<a class="header__logo" href="/">
				<img class="header__logo-img" src="<?= $main_logo;?>" alt="mbpravo">
			</a>
			<?php wp_nav_menu( $mainMenuArgs ); ?>
			<a class="header__burger" href="#">
				<span class="header__line-burger"></span>
				<span class="header__line-burger"></span>
			</a>
		</div>
	</div>
</header>
