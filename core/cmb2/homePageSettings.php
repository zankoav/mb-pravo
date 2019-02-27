<?php

	add_action( 'cmb2_admin_init', 'mbpravo_home_page_metabox' );

	function mbpravo_home_page_metabox() {
		/**
		 * Registers options page menu item and form.
		 */
		$cmb = new_cmb2_box( array(
			'id'           => THEME_NAME . '_home_options',
			'title'        => esc_html__( 'Настройки главной страницы', THEME_NAME ),
			'object_types' => array( 'page' ),
			'show_on'      => array( 'key' => 'page-template', 'value' => 'template-home.php' ),
			'context'      => 'normal', //  'normal', 'advanced', or 'side'
			'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
			'show_names'   => true, // Show field names on the left
		) );

		$group_field_id = $cmb->add_field( array(
			 'id'          => 'slider',
			 'type'        => 'group',
			 'description' => __( 'Слидер', 'cmb2' ),
			 'options'     => array(
					'group_title'       => __( 'Слтде {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'        => __( 'Добавить слайд', 'cmb2' ),
					'remove_button'     => __( 'Удалить слайдер', 'cmb2' ),
					'sortable'          => true, // beta
				  'closed'         => true, // true to have the groups closed by default
			 ),
		) );

		$cmb->add_group_field( $group_field_id, array(
			 'name' => 'Заголовок',
			 'id'   => 'title',
			 'type' => 'text',
		) );
		$cmb->add_group_field( $group_field_id, array(
			 'name' => 'Подзаголовок',
			 'id'   => 'subtitle',
			 'type' => 'text',
		) );
		$cmb->add_group_field( $group_field_id, array(
			 'name' => 'Текст кнопки',
			 'id'   => 'button_text',
			 'type' => 'text',
		) );
		$cmb->add_group_field( $group_field_id, array(
			 'name' => 'Ссылки кнопки',
			 'id'   => 'button_url',
			 'type' => 'text',
		) );
		$cmb->add_group_field( $group_field_id, array(
			 'name' => 'Background изображение',
			 'id'   => 'bg_image',
			 'type' => 'file',
			 'options' => array(
					'url' => false, // Hide the text input for the url,

		) ) );
	}

