<?php


add_action('cmb2_admin_init', 'practice_options_metabox');

function practice_options_metabox()
{
	$cmb_options = new_cmb2_box(array(
		 'id' => 'practice_meta',
		 'title' => esc_html__('Информация о практике', THEME_NAME),

		 'object_types' => array( 'practice' ),
		 'context'      => 'normal', //  'normal', 'advanced', or 'side'
		 'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		 'show_names'   => true, // Show field names on the left
	));

	$cmb_options->add_field(array(
		 'name' => esc_html__('Подзаголовок', THEME_NAME),
		 'id' => 'sub_title',
		 'type' => 'textarea',
	));

	$cmb_options->add_field(array(
		 'name' => esc_html__('Фото', THEME_NAME),
		 'id' => 'photo',
		 'type' => 'file',
		 'options' => array(
				'url' => false, // Hide the text input for the url,
		 ),
	));

	$cmb_options->add_field(array(
		 'name' => esc_html__('Контент', THEME_NAME),
		 'id' => 'content',
		 'type' => 'wysiwyg',
		 'options' => [
				'tinymce' => true,
		 ],
	));
}