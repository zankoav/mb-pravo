<?php
add_action( 'loop_start', 'tl_project_page' );
/**@var WP_Query $query */
function tl_project_page( $query ) {
	if (!is_admin() && is_post_type_archive( 'partner' ) ) {
		$query->set( 'posts_per_page', '-1' );
		$query->set( 'orderby', 'date archive_order' );
		$query->set( 'meta_key', 'archive_order' );
		$query->set( 'order', 'ASC' );
	}
}