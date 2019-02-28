<?php

	add_action( 'template_redirect', function () {

		add_action( 'wp_enqueue_scripts', function () {

			wp_enqueue_style( 'commons', Assets::getCss( 'common' ), false, null );

			if ( is_page_template( 'template-home.php' ) ) {
				wp_enqueue_style( 'home', Assets::getCss( 'home' ), false, null );
			} else if ( is_page_template( 'template-contacts.php' ) ) {
				wp_enqueue_style( 'contacts', Assets::getCss( 'contacts' ), false, null );
			} else if ( is_404() ) {
				wp_enqueue_style( 'p404', Assets::getCss( 'p404' ), false, null );
			} else if ( is_post_type_archive('partner')) {
				wp_enqueue_style( 'team', Assets::getCss( 'team' ), false, null );
			}

		} );
	} );