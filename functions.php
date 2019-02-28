<?php

define('BASE_URL', '/wp-content/themes/' . get_template());
define("THEME_NAME", get_template());

add_action('after_setup_theme', function () {
	register_nav_menus(array(
		 'main_menu' => 'Main menu'
	));
	add_theme_support('post-thumbnails');
});

require_once __DIR__ . '/core/menu.php';
require_once __DIR__ . '/core/removePageEditor.php';
require_once __DIR__ . '/utils/Assets.php';
require_once __DIR__ . '/utils/SingletonOptions.php';

require_once __DIR__ . '/core/styles.php';
require_once __DIR__ . '/core/scripts.php';

require_once __DIR__ . '/core/cmb2/themeSettings.php';
require_once __DIR__ . '/core/cmb2/homePageSettings.php';
require_once __DIR__ . '/core/postTypes/partnerPostType.php';
require_once __DIR__ . '/core/cmb2/partnerMeta.php';

require_once __DIR__ . '/core/orderPatrners.php';
