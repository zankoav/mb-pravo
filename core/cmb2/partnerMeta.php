<?php


add_action('cmb2_admin_init', 'partner_options_metabox');

function partner_options_metabox()
{
	$cmb_options = new_cmb2_box(array(
		 'id' => 'partner_meta',
		 'title' => esc_html__('Информация о партнере', THEME_NAME),

		 'object_types' => array( 'partner' ),
		 'context'      => 'normal', //  'normal', 'advanced', or 'side'
		 'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		 'show_names'   => true, // Show field names on the left
	));

	$cmb_options->add_field(array(
		 'name' => esc_html__('Фото', THEME_NAME),
		 'id' => 'partner_photo',
		 'type' => 'file',
		 'options' => array(
				'url' => false, // Hide the text input for the url,
		 ),
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Должность', THEME_NAME),
		 'id' => 'position',
		 'type' => 'text',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Порядок вывода', THEME_NAME),
		 'id' => 'archive_order',
		 'type' => 'text_small',
		'description' => esc_html__('На какой позиции будет выводиться сотрудник на странице партнеров',THEME_NAME),
		 'attributes'  => array(
			  'type' => 'number',
				'required'    => 'required',
			  'placeholder' => 1,
		 ),
	));
}