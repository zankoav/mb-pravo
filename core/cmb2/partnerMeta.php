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
		 'preview_size' => 'thumbnail',
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
		 'name' => esc_html__('Опыт', THEME_NAME),
		 'id' => 'experience',
		 'type' => 'textarea_small',
		 'repeatable' => true,
		 'text' => array(
			 'add_row_text' => 'Добавить',
		 ),
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Специализации', THEME_NAME),
		 'id' => 'specialisation',
		 'type' => 'text',
		 'repeatable' => true,
		 'text' => array(
				'add_row_text' => 'Добавить',
		 ),
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Телефон', THEME_NAME),
		 'id' => 'phone',
		 'type' => 'text',
	));
	$cmb_options->add_field(array(
		 'name' => esc_html__('Email', THEME_NAME),
		 'id' => 'email',
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

	$prof_experience = new_cmb2_box(array(
		 'id' => 'prof_experience_meta',
		 'title' => esc_html__('Професиональный опыт', THEME_NAME),
		 'object_types' => array( 'partner' ),
		 'context'      => 'normal', //  'normal', 'advanced', or 'side'
		 'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		 'show_names'   => true, // Show field names on the left
	));
	$prof_experience ->add_field(array(
		'name' => esc_html__('Заголовок списка', THEME_NAME),
		'id' => 'prof_experience_title',
		'type' => 'textarea_small',
	));
	$prof_experience ->add_field(array(
		 'name' => esc_html__('Профессиональный опыт адвоката ', THEME_NAME),
		 'id' => 'prof_experience',
		 'type' => 'textarea',
		 'repeatable' => true,
		 'text' => array(
				'add_row_text' => 'Добавить',
		 ),
	));

	$education = new_cmb2_box(array(
		 'id' => 'education_meta',
		 'title' => esc_html__('Образование', THEME_NAME),
		 'object_types' => array( 'partner' ),
		 'context'      => 'normal', //  'normal', 'advanced', or 'side'
		 'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		 'show_names'   => true, // Show field names on the left
	));
	$education->add_field(array(
		 'name' => esc_html__('Образование', THEME_NAME),
		 'id' => 'education',
		 'type' => 'textarea',
		 'repeatable' => true,
		 'text' => array(
				'add_row_text' => 'Добавить',
		 ),
	));
}