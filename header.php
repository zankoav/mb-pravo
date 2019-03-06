<!doctype html>
<html lang="ru">
<head>
	<meta name="viewport" content="initial-scale=1.0, width=device-width">
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php wp_head(); ?>
</head>
<body class="body_overflow_hidden <?= is_page_template( 'template-home.php' ) ? 'home-template' : '';?>">