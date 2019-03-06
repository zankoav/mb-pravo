<?php


add_action('cmb2_admin_init', 'mb_pravo_register_theme_options_metabox');

function mb_pravo_register_theme_options_metabox()
{
	/**
	 * Registers options page menu item and form.
	 */
	$cmb_options = new_cmb2_box(array(
		 'id' => THEME_NAME . '_theme_options_page',
		 'title' => esc_html__('Настройки темы', THEME_NAME),
		 'object_types' => array('options-page'),

		 'option_key' => THEME_NAME . '_theme_options',
		 'icon_url' => 'dashicons-palmtree',
	));

	//header
	$cmb_options->add_field(array(
		 'name' => esc_html__('Логотип в шапке', THEME_NAME),
		 'id' => 'main_logo',
		 'type' => 'file',
		 'options' => array(
				'url' => false, // Hide the text input for the url,
		 ),
	));


	//footer
	$cmb_options->add_field(array(
		 'name' => esc_html__('Логотип в подвале', THEME_NAME),
		 'id' => 'footer_logo',
		 'type' => 'file',
		 'options' => array(
				'url' => false, // Hide the text input for the url,
		 ),
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Адрес', THEME_NAME),
		 'id' => 'address',
		 'type' => 'text',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('УНП', THEME_NAME),
		 'id' => 'unp',
		 'type' => 'text',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Номера телефонов №1', THEME_NAME),
		 'id' => 'phone_1',
		 'type' => 'text',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Номера телефонов №2', THEME_NAME),
		 'id' => 'phone_2',
		 'type' => 'text',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Номера телефонов №3', THEME_NAME),
		 'id' => 'phone_3',
		 'type' => 'text',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Номера телефонов №4', THEME_NAME),
		 'id' => 'phone_4',
		 'type' => 'text',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Email', THEME_NAME),
		 'id' => 'email',
		 'type' => 'text_email'
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Настройки карты', THEME_NAME),
		 'id' => 'ot_map_title',
		 'type' => 'title',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Центр карты', THEME_NAME),
		 'id' => 'map_center',
		 'type' => 'text'
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Координаты метки', THEME_NAME),
		 'id' => 'marc_coordinate',
		 'type' => 'text'
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Текст метки', THEME_NAME),
		 'id' => 'marc_text',
		 'type' => 'text'
	));
}