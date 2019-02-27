<?php


	add_action( 'cmb2_admin_init', 'mb_pravo_register_theme_options_metabox' );

	function mb_pravo_register_theme_options_metabox() {
		/**
		 * Registers options page menu item and form.
		 */
		$cmb_options = new_cmb2_box( array(
			'id'           => THEME_NAME . '_theme_options_page',
			'title'        => esc_html__( 'Настройки темы', THEME_NAME ),
			'object_types' => array( 'options-page' ),

			'option_key' => THEME_NAME . '_theme_options',
			'icon_url'   => 'dashicons-palmtree',
		) );

		$cmb_options->add_field( array(
			'name' => esc_html__( 'Logo header', THEME_NAME ),
			'id'   => 'main_logo',
			'type' => 'file'
		) );
		$cmb_options->add_field( array(
			 'name' => esc_html__( 'Logo footer', THEME_NAME ),
			 'id'   => 'footer_logo',
			 'type' => 'file'
		) );
	}